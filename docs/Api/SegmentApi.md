# Flagr\Client\SegmentApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegment()**](SegmentApi.md#createSegment) | **POST** /flags/{flagID}/segments | 
[**deleteSegment()**](SegmentApi.md#deleteSegment) | **DELETE** /flags/{flagID}/segments/{segmentID} | 
[**findSegments()**](SegmentApi.md#findSegments) | **GET** /flags/{flagID}/segments | 
[**putSegment()**](SegmentApi.md#putSegment) | **PUT** /flags/{flagID}/segments/{segmentID} | 
[**putSegmentsReorder()**](SegmentApi.md#putSegmentsReorder) | **PUT** /flags/{flagID}/segments/reorder | 


## `createSegment()`

```php
createSegment($flag_id, $body): \Flagr\Client\Model\Segment
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag to get
$body = new \Flagr\Client\Model\CreateSegmentRequest(); // \Flagr\Client\Model\CreateSegmentRequest | create a segment under a flag

try {
    $result = $apiInstance->createSegment($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |
 **body** | [**\Flagr\Client\Model\CreateSegmentRequest**](../Model/CreateSegmentRequest.md)| create a segment under a flag |

### Return type

[**\Flagr\Client\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSegment()`

```php
deleteSegment($flag_id, $segment_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment

try {
    $apiInstance->deleteSegment($flag_id, $segment_id);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->deleteSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |

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

## `findSegments()`

```php
findSegments($flag_id): \Flagr\Client\Model\Segment[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->findSegments($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->findSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |

### Return type

[**\Flagr\Client\Model\Segment[]**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSegment()`

```php
putSegment($flag_id, $segment_id, $body): \Flagr\Client\Model\Segment
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment
$body = new \Flagr\Client\Model\PutSegmentRequest(); // \Flagr\Client\Model\PutSegmentRequest | update a segment

try {
    $result = $apiInstance->putSegment($flag_id, $segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **body** | [**\Flagr\Client\Model\PutSegmentRequest**](../Model/PutSegmentRequest.md)| update a segment |

### Return type

[**\Flagr\Client\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSegmentsReorder()`

```php
putSegmentsReorder($flag_id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Flagr\Client\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$body = new \Flagr\Client\Model\PutSegmentReorderRequest(); // \Flagr\Client\Model\PutSegmentReorderRequest | reorder segments

try {
    $apiInstance->putSegmentsReorder($flag_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegmentsReorder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **body** | [**\Flagr\Client\Model\PutSegmentReorderRequest**](../Model/PutSegmentReorderRequest.md)| reorder segments |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
