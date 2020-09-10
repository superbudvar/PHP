# # FraudScore

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **string** | The score attributed to this request by our machine learning system, ranging from 0 (less likely to be fraud) to 1000 (more likely to be fraud). | [optional] 
**warnings** | **string[]** | A list of non-critical warnings raised while processing the request. Warnings included in this list will have integration and data-quality related messages. | [optional] 
**explanations** | **object[]** | Explanation of the fraud score applied consisting of a description, type of the explanation, and rule (if applicable). | [optional] 
**recommendedDecision** | **string** | The score attributed to this request by our machine learning system, ranging from 0 (less likely to be fraud) to 1000 (more likely to be fraud). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


