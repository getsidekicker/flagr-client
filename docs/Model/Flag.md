# # Flag

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**key** | **string** | unique key representation of the flag | [optional]
**description** | **string** |  |
**enabled** | **bool** |  |
**tags** | [**\Flagr\Client\Model\Tag[]**](Tag.md) |  | [optional]
**segments** | [**\Flagr\Client\Model\Segment[]**](Segment.md) |  | [optional]
**variants** | [**\Flagr\Client\Model\Variant[]**](Variant.md) |  | [optional]
**data_records_enabled** | **bool** | enabled data records will get data logging in the metrics pipeline, for example, kafka. |
**entity_type** | **string** | it will override the entityType in the evaluation logs if it&#39;s not empty | [optional]
**notes** | **string** | flag usage details in markdown format | [optional]
**created_by** | **string** |  | [optional]
**updated_by** | **string** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
