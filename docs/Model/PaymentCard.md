# PaymentCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Payment card number, including credit/debit card number or digital PAN | 
**expiryDate** | [**\FirstData\ApiClient\Model\Expiration**](Expiration.md) |  | [optional] 
**cardCodeValue** | **string** | CVV or CCV value | [optional] 
**cardFunction** | **string** |  | [optional] [default to 'CREDIT']
**cardholderName** | **string** |  | [optional] 
**authenticationRequest** | [**\FirstData\ApiClient\Model\PaymentCardAuthenticationRequest**](PaymentCardAuthenticationRequest.md) |  | [optional] 
**brand** | **string** | Optional, required only if using dual-branded card | [optional] 
**authenticationResult** | [**\FirstData\ApiClient\Model\AuthenticationResult**](AuthenticationResult.md) |  | [optional] 
**enableTokenization** | **bool** | Whether the Gateway shall tokenize the card while performing payment transaction | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


