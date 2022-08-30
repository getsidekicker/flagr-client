# Flagr\Client\ConstraintApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstraint()**](ConstraintApi.md#createConstraint) | **POST** /flags/{flagID}/segments/{segmentID}/constraints | 
[**deleteConstraint()**](ConstraintApi.md#deleteConstraint) | **DELETE** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 
[**findConstraints()**](ConstraintApi.md#findConstraints) | **GET** /flags/{flagID}/segments/{segmentID}/constraints | 
[**putConstraint()**](ConstraintApi.md#putConstraint) | **PUT** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 


## `createConstraint()`

```php
createConstraint($flag_id, $segment_id, $body): \Flagr\Client\Model\Constraint
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment
$body = new \Flagr\Client\Model\CreateConstraintRequest(); // \Flagr\Client\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->createConstraint($flag_id, $segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->createConstraint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **body** | [**\Flagr\Client\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |

### Return type

[**\Flagr\Client\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConstraint()`

```php
deleteConstraint($flag_id, $segment_id, $constraint_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment
$constraint_id = 56; // int | numeric ID of the constraint

try {
    $apiInstance->deleteConstraint($flag_id, $segment_id, $constraint_id);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->deleteConstraint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **constraint_id** | **int**| numeric ID of the constraint |

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

## `findConstraints()`

```php
findConstraints($flag_id, $segment_id): \Flagr\Client\Model\Constraint[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment

try {
    $result = $apiInstance->findConstraints($flag_id, $segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->findConstraints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |

### Return type

[**\Flagr\Client\Model\Constraint[]**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putConstraint()`

```php
putConstraint($flag_id, $segment_id, $constraint_id, $body): \Flagr\Client\Model\Constraint
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment
$constraint_id = 56; // int | numeric ID of the constraint
$body = new \Flagr\Client\Model\CreateConstraintRequest(); // \Flagr\Client\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->putConstraint($flag_id, $segment_id, $constraint_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->putConstraint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **constraint_id** | **int**| numeric ID of the constraint |
 **body** | [**\Flagr\Client\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |

### Return type

[**\Flagr\Client\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
