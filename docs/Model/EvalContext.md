# # EvalContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_id** | **string** | entityID is used to deterministically at random to evaluate the flag result. If it&#39;s empty, flagr will randomly generate one. | [optional]
**entity_type** | **string** |  | [optional]
**entity_context** | **object** |  | [optional]
**enable_debug** | **bool** |  | [optional]
**flag_id** | **int** | flagID | [optional]
**flag_key** | **string** | flagKey. flagID or flagKey will resolve to the same flag. Either works. | [optional]
**flag_tags** | **string[]** | flagTags. flagTags looks up flags by tag. Either works. | [optional]
**flag_tags_operator** | **string** | determine how flagTags is used to filter flags to be evaluated. OR extends the evaluation to those which contains at least one of the provided flagTags or AND limit the evaluation to those which contains all the flagTags. | [optional] [default to 'ANY']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
