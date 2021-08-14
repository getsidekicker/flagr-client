# Flagr\Client\FlagApi

All URIs are relative to http://localhost/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFlag()**](FlagApi.md#createFlag) | **POST** /flags | 
[**deleteFlag()**](FlagApi.md#deleteFlag) | **DELETE** /flags/{flagID} | 
[**findFlags()**](FlagApi.md#findFlags) | **GET** /flags | 
[**getFlag()**](FlagApi.md#getFlag) | **GET** /flags/{flagID} | 
[**getFlagEntityTypes()**](FlagApi.md#getFlagEntityTypes) | **GET** /flags/entity_types | 
[**getFlagSnapshots()**](FlagApi.md#getFlagSnapshots) | **GET** /flags/{flagID}/snapshots | 
[**putFlag()**](FlagApi.md#putFlag) | **PUT** /flags/{flagID} | 
[**restoreFlag()**](FlagApi.md#restoreFlag) | **PUT** /flags/{flagID}/restore | 
[**setFlagEnabled()**](FlagApi.md#setFlagEnabled) | **PUT** /flags/{flagID}/enabled | 


## `createFlag()`

```php
createFlag($body): \Flagr\Client\Model\Flag
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Flagr\Client\Model\CreateFlagRequest(); // \Flagr\Client\Model\CreateFlagRequest | create a flag

try {
    $result = $apiInstance->createFlag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->createFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Flagr\Client\Model\CreateFlagRequest**](../Model/CreateFlagRequest.md)| create a flag |

### Return type

[**\Flagr\Client\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFlag()`

```php
deleteFlag($flag_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag

try {
    $apiInstance->deleteFlag($flag_id);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->deleteFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |

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

## `findFlags()`

```php
findFlags($limit, $enabled, $description, $tags, $description_like, $key, $offset, $preload, $deleted): \Flagr\Client\Model\Flag[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the numbers of flags to return
$enabled = True; // bool | return flags having given enabled status
$description = 'description_example'; // string | return flags exactly matching given description
$tags = 'tags_example'; // string | return flags with the given tags (comma separated)
$description_like = 'description_like_example'; // string | return flags partially matching given description
$key = 'key_example'; // string | return flags matching given key
$offset = 56; // int | return flags given the offset, it should usually set together with limit
$preload = True; // bool | return flags with preloaded segments and variants
$deleted = True; // bool | return all deleted flags

try {
    $result = $apiInstance->findFlags($limit, $enabled, $description, $tags, $description_like, $key, $offset, $preload, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->findFlags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the numbers of flags to return | [optional]
 **enabled** | **bool**| return flags having given enabled status | [optional]
 **description** | **string**| return flags exactly matching given description | [optional]
 **tags** | **string**| return flags with the given tags (comma separated) | [optional]
 **description_like** | **string**| return flags partially matching given description | [optional]
 **key** | **string**| return flags matching given key | [optional]
 **offset** | **int**| return flags given the offset, it should usually set together with limit | [optional]
 **preload** | **bool**| return flags with preloaded segments and variants | [optional]
 **deleted** | **bool**| return all deleted flags | [optional]

### Return type

[**\Flagr\Client\Model\Flag[]**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlag()`

```php
getFlag($flag_id): \Flagr\Client\Model\Flag
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlag($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |

### Return type

[**\Flagr\Client\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlagEntityTypes()`

```php
getFlagEntityTypes(): string[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFlagEntityTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlagEntityTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlagSnapshots()`

```php
getFlagSnapshots($flag_id): \Flagr\Client\Model\FlagSnapshot[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlagSnapshots($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlagSnapshots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |

### Return type

[**\Flagr\Client\Model\FlagSnapshot[]**](../Model/FlagSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFlag()`

```php
putFlag($flag_id, $body): \Flagr\Client\Model\Flag
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag to get
$body = new \Flagr\Client\Model\PutFlagRequest(); // \Flagr\Client\Model\PutFlagRequest | update a flag

try {
    $result = $apiInstance->putFlag($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->putFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |
 **body** | [**\Flagr\Client\Model\PutFlagRequest**](../Model/PutFlagRequest.md)| update a flag |

### Return type

[**\Flagr\Client\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreFlag()`

```php
restoreFlag($flag_id): \Flagr\Client\Model\Flag
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->restoreFlag($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->restoreFlag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |

### Return type

[**\Flagr\Client\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFlagEnabled()`

```php
setFlagEnabled($flag_id, $body): \Flagr\Client\Model\Flag
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag to get
$body = new \Flagr\Client\Model\SetFlagEnabledRequest(); // \Flagr\Client\Model\SetFlagEnabledRequest | set flag enabled state

try {
    $result = $apiInstance->setFlagEnabled($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->setFlagEnabled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |
 **body** | [**\Flagr\Client\Model\SetFlagEnabledRequest**](../Model/SetFlagEnabledRequest.md)| set flag enabled state |

### Return type

[**\Flagr\Client\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
