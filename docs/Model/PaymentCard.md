# PaymentCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Payment card number | [optional] 
**expiryDate** | [**\FirstData\FirstApi\Client\Model\Expiration**](Expiration.md) |  | [optional] 
**securityCode** | **string** | Card Verification Value/Number | [optional] 
**paymentTokenization** | [**\FirstData\FirstApi\Client\Model\PaymentTokenization**](PaymentTokenization.md) |  | [optional] 
**cardFunction** | **string** | Card function. Optional, valid values are CREDIT or DEBIT. | [optional] 
**cardholderName** | **string** | Name of the cardholder on the card | [optional] 
**authenticationRequest** | [**\FirstData\FirstApi\Client\Model\AuthenticationRequest**](AuthenticationRequest.md) |  | [optional] 
**authenticationResult** | [**\FirstData\FirstApi\Client\Model\PaymentCardAuthenticationResult**](PaymentCardAuthenticationResult.md) |  | [optional] 
**bin** | **string** | The payment card BIN | [optional] 
**last4** | **string** | The last 4 payment card numbers | [optional] 
**brand** | **string** | Optional, required only if using dual branded card | [optional] 
**issuingCountry** | **string** | The issuing country | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


