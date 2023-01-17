# Flagr\Client\ExportApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getExportEvalCacheJSON()**](ExportApi.md#getExportEvalCacheJSON) | **GET** /export/eval_cache/json |  |
| [**getExportSqlite()**](ExportApi.md#getExportSqlite) | **GET** /export/sqlite |  |


## `getExportEvalCacheJSON()`

```php
getExportEvalCacheJSON(): object
```



Export JSON format of the eval cache dump

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getExportEvalCacheJSON();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportEvalCacheJSON: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
