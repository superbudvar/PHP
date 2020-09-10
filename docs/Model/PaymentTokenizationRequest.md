# # PaymentTokenizationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestType** | **string** | Object name of tokenization request. | 
**storeId** | **string** | An optional outlet ID for clients that support multiple stores in the same app. | [optional] 
**billingAddress** | [**\FirstData\FirstApi\Client\Model\Address**](Address.md) |  | [optional] 
**createToken** | [**\FirstData\FirstApi\Client\Model\CreatePaymentToken**](CreatePaymentToken.md) |  | 
**accountVerification** | **bool** | If the account should be verified prior to token creation. | [optional] [default to false]
**merchantTransactionId** | **string** | The unique merchant transaction ID from the request, if supplied. | [optional] 
**additionalDetails** | [**\FirstData\FirstApi\Client\Model\AdditionalDetails**](AdditionalDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


