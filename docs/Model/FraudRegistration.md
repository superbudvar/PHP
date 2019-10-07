# FraudRegistration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantRef** | **string** | Merchant reference code. Used by FirstAPI and reflected in settlement records and webhook notifications. Typically, the merchantRef field is the purchase order number or unique sequence value associated to a given transaction. | [optional] 
**transactionType** | **string** | Type of transaction merchant wants to process. | 
**customer** | [**\FirstData\FirstApi\Client\Model\Customer**](Customer.md) |  | 
**merchant** | [**\FirstData\FirstApi\Client\Model\Merchant**](Merchant.md) |  | 
**device** | [**\FirstData\FirstApi\Client\Model\FraudRegistrationDevice**](FraudRegistrationDevice.md) |  | [optional] 
**userDefined** | [**object**](.md) | A JSON object that can carry any additional information that might be helpful for fraud detection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


