# Flagr\Client\EvaluationApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postEvaluation()**](EvaluationApi.md#postEvaluation) | **POST** /evaluation |  |
| [**postEvaluationBatch()**](EvaluationApi.md#postEvaluationBatch) | **POST** /evaluation/batch |  |


## `postEvaluation()`

```php
postEvaluation($body): \Flagr\Client\Model\EvalResult
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\EvaluationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Flagr\Client\Model\EvalContext(); // \Flagr\Client\Model\EvalContext | evalution context

try {
    $result = $apiInstance->postEvaluation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->postEvaluation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flagr\Client\Model\EvalContext**](../Model/EvalContext.md)| evalution context | |

### Return type

[**\Flagr\Client\Model\EvalResult**](../Model/EvalResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEvaluationBatch()`

```php
postEvaluationBatch($body): \Flagr\Client\Model\EvaluationBatchResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\EvaluationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Flagr\Client\Model\EvaluationBatchRequest(); // \Flagr\Client\Model\EvaluationBatchRequest | evalution batch request

try {
    $result = $apiInstance->postEvaluationBatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->postEvaluationBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Flagr\Client\Model\EvaluationBatchRequest**](../Model/EvaluationBatchRequest.md)| evalution batch request | |

### Return type

[**\Flagr\Client\Model\EvaluationBatchResponse**](../Model/EvaluationBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
