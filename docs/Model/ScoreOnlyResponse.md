# ScoreOnlyResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiTraceId** | **string** | Unique trace ID for issue triage. | [optional] 
**transactionStatus** | **string** | Please refer to \&quot;Errors Section\&quot; for more info. | [optional] 
**validationStatus** | **string** | If status returned is \&quot;failure\&quot;, input validation errors occurred. Please refer to the \&quot;Errors Section\&quot; for more info. Valid values are &#39;success&#39; and &#39;failure&#39;. | [optional] 
**transactionType** | **string** | The transactionType provided in request. | [optional] 
**fraudScore** | [**\FirstData\FirstApi\Client\Model\ScoreOnlyResponseFraudScore**](ScoreOnlyResponseFraudScore.md) |  | [optional] 
**recommendedDecision** | **string** | The action that should be taken for the request that was sent. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


