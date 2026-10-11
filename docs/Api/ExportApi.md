# Flagr\Client\ExportApi



All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getExportEvalCacheJSON()**](ExportApi.md#getExportEvalCacheJSON) | **GET** /export/eval_cache/json |  |
| [**getExportSqlite()**](ExportApi.md#getExportSqlite) | **GET** /export/sqlite |  |


## `getExportEvalCacheJSON()`

```php
getExportEvalCacheJSON($ids, $keys, $enabled, $tags, $tags_operator): object
```



Export JSON format of the eval cache dump, with optional filtering

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array(56); // int[] | CSV of flag IDs to include (e.g. 1,2,3). When provided, keys/enabled/tags are ignored.
$keys = array('keys_example'); // string[] | CSV of flag keys to include (e.g. one,two). When provided, enabled/tags are ignored.
$enabled = True; // bool | Filter by enabled status (omit to return all)
$tags = array('tags_example'); // string[] | CSV of tag values to filter by (e.g. foo,bar)
$tags_operator = 'ANY'; // string | Tag matching operator: ANY (default) returns flags with any of the tags, ALL returns flags with all tags

try {
    $result = $apiInstance->getExportEvalCacheJSON($ids, $keys, $enabled, $tags, $tags_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportEvalCacheJSON: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| CSV of flag IDs to include (e.g. 1,2,3). When provided, keys/enabled/tags are ignored. | [optional] |
| **keys** | [**string[]**](../Model/string.md)| CSV of flag keys to include (e.g. one,two). When provided, enabled/tags are ignored. | [optional] |
| **enabled** | **bool**| Filter by enabled status (omit to return all) | [optional] |
| **tags** | [**string[]**](../Model/string.md)| CSV of tag values to filter by (e.g. foo,bar) | [optional] |
| **tags_operator** | **string**| Tag matching operator: ANY (default) returns flags with any of the tags, ALL returns flags with all tags | [optional] [default to &#39;ANY&#39;] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExportSqlite()`

```php
getExportSqlite($exclude_snapshots): \SplFileObject
```



Export sqlite3 format of the db dump, which is converted from the main database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exclude_snapshots = True; // bool | export without snapshots data - useful for smaller db without snapshots

try {
    $result = $apiInstance->getExportSqlite($exclude_snapshots);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportSqlite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exclude_snapshots** | **bool**| export without snapshots data - useful for smaller db without snapshots | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
