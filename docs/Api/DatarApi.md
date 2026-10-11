# Flagr\Client\DatarApi

Datar aggregate analytics

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDatarFlagSummary()**](DatarApi.md#getDatarFlagSummary) | **GET** /datar/flags/{flagID}/summary |  |
| [**getDatarSummary()**](DatarApi.md#getDatarSummary) | **GET** /datar/summary |  |


## `getDatarFlagSummary()`

```php
getDatarFlagSummary($flag_id, $from, $to): \Flagr\Client\Model\DatarFlagSummaryResponse
```



All-in-one analytics summary for a single flag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\DatarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | Flag ID
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start time (RFC 3339, default 7 days ago)
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End time (RFC 3339, default now)

try {
    $result = $apiInstance->getDatarFlagSummary($flag_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatarApi->getDatarFlagSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag_id** | **int**| Flag ID | |
| **from** | **\DateTime**| Start time (RFC 3339, default 7 days ago) | [optional] |
| **to** | **\DateTime**| End time (RFC 3339, default now) | [optional] |

### Return type

[**\Flagr\Client\Model\DatarFlagSummaryResponse**](../Model/DatarFlagSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatarSummary()`

```php
getDatarSummary($from, $to, $limit, $offset): \Flagr\Client\Model\DatarSummaryResponse
```



Aggregate traffic summary for all flags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\DatarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start time (RFC 3339, default 7 days ago)
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End time (RFC 3339, default now)
$limit = 56; // int | Max results (default 100)
$offset = 56; // int | Result offset (default 0)

try {
    $result = $apiInstance->getDatarSummary($from, $to, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatarApi->getDatarSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| Start time (RFC 3339, default 7 days ago) | [optional] |
| **to** | **\DateTime**| End time (RFC 3339, default now) | [optional] |
| **limit** | **int**| Max results (default 100) | [optional] |
| **offset** | **int**| Result offset (default 0) | [optional] |

### Return type

[**\Flagr\Client\Model\DatarSummaryResponse**](../Model/DatarSummaryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
