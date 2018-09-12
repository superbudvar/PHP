# PaymentCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Payment card number | 
**expiryDate** | [**\FirstData\FirstApi\Client\Model\Expiration**](Expiration.md) |  | [optional] 
**securityCode** | **string** | CVV | [optional] 
**cardFunction** | **string** |  | [optional] [default to 'CREDIT']
**cardholderName** | **string** |  | [optional] 
**authenticationRequest** | [**\FirstData\FirstApi\Client\Model\PaymentCardAuthenticationRequest**](PaymentCardAuthenticationRequest.md) |  | [optional] 
**authenticationResult** | [**\FirstData\FirstApi\Client\Model\PaymentCardAuthenticationResult**](PaymentCardAuthenticationResult.md) |  | [optional] 
**brand** | **string** | Optional, required only if using dual branded card | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


