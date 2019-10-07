# FraudRegistrationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**correlationId** | **string** | The value used to track the transaction. | [optional] 
**transactionStatus** | **string** | Status of the transaction. Valid values are &#39;Not Processed&#39; and &#39;Scored successfully&#39; | [optional] 
**validationStatus** | **string** | If status returned is \&quot;failure\&quot;, input validation errors occurred. Please refer to the \&quot;Errors Section\&quot; for more info. Valid values are &#39;success&#39; and &#39;failed&#39;. | [optional] 
**transactionType** | **string** | The transactionType provided in request. | [optional] 
**fraudScore** | [**\FirstData\FirstApi\Client\Model\FraudScore**](FraudScore.md) |  | [optional] 
**error** | [**\FirstData\FirstApi\Client\Model\FraudRegistrationError**](FraudRegistrationError.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


