# Flagr\Client\VariantApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVariant()**](VariantApi.md#createVariant) | **POST** /flags/{flagID}/variants | 
[**deleteVariant()**](VariantApi.md#deleteVariant) | **DELETE** /flags/{flagID}/variants/{variantID} | 
[**findVariants()**](VariantApi.md#findVariants) | **GET** /flags/{flagID}/variants | 
[**putVariant()**](VariantApi.md#putVariant) | **PUT** /flags/{flagID}/variants/{variantID} | 


## `createVariant()`

```php
createVariant($flag_id, $body): \Flagr\Client\Model\Variant
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$body = new \Flagr\Client\Model\CreateVariantRequest(); // \Flagr\Client\Model\CreateVariantRequest | create a variant

try {
    $result = $apiInstance->createVariant($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->createVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **body** | [**\Flagr\Client\Model\CreateVariantRequest**](../Model/CreateVariantRequest.md)| create a variant |

### Return type

[**\Flagr\Client\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVariant()`

```php
deleteVariant($flag_id, $variant_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$variant_id = 56; // int | numeric ID of the variant

try {
    $apiInstance->deleteVariant($flag_id, $variant_id);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->deleteVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **variant_id** | **int**| numeric ID of the variant |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findVariants()`

```php
findVariants($flag_id): \Flagr\Client\Model\Variant[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag

try {
    $result = $apiInstance->findVariants($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->findVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |

### Return type

[**\Flagr\Client\Model\Variant[]**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putVariant()`

```php
putVariant($flag_id, $variant_id, $body): \Flagr\Client\Model\Variant
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$variant_id = 56; // int | numeric ID of the variant
$body = new \Flagr\Client\Model\PutVariantRequest(); // \Flagr\Client\Model\PutVariantRequest | update a variant

try {
    $result = $apiInstance->putVariant($flag_id, $variant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->putVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **variant_id** | **int**| numeric ID of the variant |
 **body** | [**\Flagr\Client\Model\PutVariantRequest**](../Model/PutVariantRequest.md)| update a variant |

### Return type

[**\Flagr\Client\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
