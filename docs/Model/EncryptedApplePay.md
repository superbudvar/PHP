# # EncryptedApplePay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | The encrypted wallet payload. | 
**header** | [**\FirstData\FirstApi\Client\Model\EncryptedApplePayHeader**](EncryptedApplePayHeader.md) |  | 
**signature** | **string** | Signature of the payment and header data. | 
**version** | **string** | Version information about the payment token. | [optional] 
**applicationData** | **string** | Base64-encoded value of PKPaymentRequest. Required only if applicationDataHash is present. | [optional] 
**merchantId** | **string** | The merchant ID assigned by the wallet provider. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


