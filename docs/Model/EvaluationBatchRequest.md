# # EvaluationBatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entities** | [**\Flagr\Client\Model\EvaluationEntity[]**](EvaluationEntity.md) |  |
**enable_debug** | **bool** |  | [optional]
**flag_ids** | **int[]** | flagIDs | [optional]
**flag_keys** | **string[]** | flagKeys. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional]
**flag_tags** | **string[]** | flagTags. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results. | [optional]
**flag_tags_operator** | **string** | determine how flagTags is used to filter flags to be evaluated. OR extends the evaluation to those which contains at least one of the provided flagTags or AND limit the evaluation to those which contains all the flagTags. | [optional] [default to 'ANY']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
