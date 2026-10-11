# Flagr\Client\EvaluationApi

Evaluation is the process of evaluating a flag given the entity context

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEvaluation()**](EvaluationApi.md#getEvaluation) | **GET** /evaluation |  |
| [**getEvaluationBatch()**](EvaluationApi.md#getEvaluationBatch) | **GET** /evaluation/batch |  |
| [**postEvaluation()**](EvaluationApi.md#postEvaluation) | **POST** /evaluation |  |
| [**postEvaluationBatch()**](EvaluationApi.md#postEvaluationBatch) | **POST** /evaluation/batch |  |


## `getEvaluation()`

```php
getEvaluation($json): \Flagr\Client\Model\EvalResult
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
$json = 'json_example'; // string | Percent-encoded (URI-encoded) JSON matching POST /evaluation body (evalContext). Example: ?json=%7B%22entityID%22%3A%22u1%22%2C%22flagID%22%3A1%7D decodes to {\"entityID\":\"u1\",\"flagID\":1}.

try {
    $result = $apiInstance->getEvaluation($json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->getEvaluation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **json** | **string**| Percent-encoded (URI-encoded) JSON matching POST /evaluation body (evalContext). Example: ?json&#x3D;%7B%22entityID%22%3A%22u1%22%2C%22flagID%22%3A1%7D decodes to {\&quot;entityID\&quot;:\&quot;u1\&quot;,\&quot;flagID\&quot;:1}. | |

### Return type

[**\Flagr\Client\Model\EvalResult**](../Model/EvalResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvaluationBatch()`

```php
getEvaluationBatch($json): \Flagr\Client\Model\EvaluationBatchResponse
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
$json = 'json_example'; // string | Percent-encoded (URI-encoded) JSON matching POST /evaluation/batch body (evaluationBatchRequest). Example: ?json=%7B%22entities%22%3A%5B%7B%22entityID%22%3A%22u1%22%7D%5D%2C%22flagIDs%22%3A%5B1%5D%7D decodes to {\"entities\":[{\"entityID\":\"u1\"}],\"flagIDs\":[1]}.

try {
    $result = $apiInstance->getEvaluationBatch($json);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->getEvaluationBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **json** | **string**| Percent-encoded (URI-encoded) JSON matching POST /evaluation/batch body (evaluationBatchRequest). Example: ?json&#x3D;%7B%22entities%22%3A%5B%7B%22entityID%22%3A%22u1%22%7D%5D%2C%22flagIDs%22%3A%5B1%5D%7D decodes to {\&quot;entities\&quot;:[{\&quot;entityID\&quot;:\&quot;u1\&quot;}],\&quot;flagIDs\&quot;:[1]}. | |

### Return type

[**\Flagr\Client\Model\EvaluationBatchResponse**](../Model/EvaluationBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
$body = new \Flagr\Client\Model\EvalContext(); // \Flagr\Client\Model\EvalContext | evaluation context

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
| **body** | [**\Flagr\Client\Model\EvalContext**](../Model/EvalContext.md)| evaluation context | |

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
$body = new \Flagr\Client\Model\EvaluationBatchRequest(); // \Flagr\Client\Model\EvaluationBatchRequest | evaluation batch request

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
| **body** | [**\Flagr\Client\Model\EvaluationBatchRequest**](../Model/EvaluationBatchRequest.md)| evaluation batch request | |

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
