# Flagr\Client\DistributionApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**findDistributions()**](DistributionApi.md#findDistributions) | **GET** /flags/{flagID}/segments/{segmentID}/distributions | 
[**putDistributions()**](DistributionApi.md#putDistributions) | **PUT** /flags/{flagID}/segments/{segmentID}/distributions | 


## `findDistributions()`

```php
findDistributions($flag_id, $segment_id): \Flagr\Client\Model\Distribution[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment

try {
    $result = $apiInstance->findDistributions($flag_id, $segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->findDistributions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |

### Return type

[**\Flagr\Client\Model\Distribution[]**](../Model/Distribution.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDistributions()`

```php
putDistributions($flag_id, $segment_id, $body): \Flagr\Client\Model\Distribution[]
```



replace the distribution with the new setting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\DistributionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment
$body = new \Flagr\Client\Model\PutDistributionsRequest(); // \Flagr\Client\Model\PutDistributionsRequest | array of distributions

try {
    $result = $apiInstance->putDistributions($flag_id, $segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionApi->putDistributions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **body** | [**\Flagr\Client\Model\PutDistributionsRequest**](../Model/PutDistributionsRequest.md)| array of distributions |

### Return type

[**\Flagr\Client\Model\Distribution[]**](../Model/Distribution.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
