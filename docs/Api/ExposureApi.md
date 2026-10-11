# Flagr\Client\ExposureApi

Client-reported impressions when a user saw a flag or variant

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postExposures()**](ExposureApi.md#postExposures) | **POST** /exposures | Log exposures (batch) |


## `postExposures()`

```php
postExposures($body): \Flagr\Client\Model\ExposuresResponse
```

Log exposures (batch)

Log when a user actually saw a flag or variant (impression), typically after POST /evaluation. Integrates with the data recorder when FLAGR_RECORDER_ENABLED and per-flag dataRecordsEnabled are set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ExposureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Flagr\Client\Model\ExposuresRequest(); // \Flagr\Client\Model\ExposuresRequest

try {
    $result = $apiInstance->postExposures($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExposureApi->postExposures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flagr\Client\Model\ExposuresRequest**](../Model/ExposuresRequest.md)|  | |

### Return type

[**\Flagr\Client\Model\ExposuresResponse**](../Model/ExposuresResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
