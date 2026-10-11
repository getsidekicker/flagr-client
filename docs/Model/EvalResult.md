# EvalResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flag_id** | **int** |  | [optional]
**flag_key** | **string** |  | [optional]
**flag_snapshot_id** | **int** |  | [optional]
**flag_tags** | **string[]** | flagTags. flagTags looks up flags by tag. Either works. | [optional]
**segment_id** | **int** |  | [optional]
**variant_id** | **int** |  | [optional]
**variant_key** | **string** |  | [optional]
**record_source** | **string** | evaluation for eval API results; exposure for client-reported impressions via POST /exposures (same data recorders as eval) | [optional]
**variant_attachment** | **object** |  | [optional]
**eval_context** | [**\Flagr\Client\Model\EvalContext**](EvalContext.md) |  | [optional]
**timestamp** | **string** |  | [optional]
**eval_debug_log** | [**\Flagr\Client\Model\EvalDebugLog**](EvalDebugLog.md) |  | [optional]
**data_records_enabled** | **bool** | Whether data records (impression logging) are enabled for this flag. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
