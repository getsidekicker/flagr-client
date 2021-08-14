# Flagr\Client\TagApi

All URIs are relative to http://localhost/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag()**](TagApi.md#createTag) | **POST** /flags/{flagID}/tags | 
[**deleteTag()**](TagApi.md#deleteTag) | **DELETE** /flags/{flagID}/tags/{tagID} | 
[**findAllTags()**](TagApi.md#findAllTags) | **GET** /tags | 
[**findTags()**](TagApi.md#findTags) | **GET** /flags/{flagID}/tags | 


## `createTag()`

```php
createTag($flag_id, $body): \Flagr\Client\Model\Tag
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$body = new \Flagr\Client\Model\CreateTagRequest(); // \Flagr\Client\Model\CreateTagRequest | create a tag

try {
    $result = $apiInstance->createTag($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **body** | [**\Flagr\Client\Model\CreateTagRequest**](../Model/CreateTagRequest.md)| create a tag |

### Return type

[**\Flagr\Client\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($flag_id, $tag_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$tag_id = 56; // int | numeric ID of the tag

try {
    $apiInstance->deleteTag($flag_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **tag_id** | **int**| numeric ID of the tag |

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

## `findAllTags()`

```php
findAllTags($limit, $offset, $value_like): \Flagr\Client\Model\Tag[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | the numbers of tags to return
$offset = 56; // int | return tags given the offset, it should usually set together with limit
$value_like = 'value_like_example'; // string | return tags partially matching given value

try {
    $result = $apiInstance->findAllTags($limit, $offset, $value_like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->findAllTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the numbers of tags to return | [optional]
 **offset** | **int**| return tags given the offset, it should usually set together with limit | [optional]
 **value_like** | **string**| return tags partially matching given value | [optional]

### Return type

[**\Flagr\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findTags()`

```php
findTags($flag_id): \Flagr\Client\Model\Tag[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag

try {
    $result = $apiInstance->findTags($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->findTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |

### Return type

[**\Flagr\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
