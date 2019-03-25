# Card

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taToken** | **string** | TransArmor Token value. Either the ta token fields or card number field must contain a value. | [optional] 
**taTokenKey** | **string** | TransArmor Token Key to identify the merchant. | [optional] 
**cardholderName** | **string** | The cardholder name as it appears on the card. | [optional] 
**cardNumber** | **string** | Use this field to send Clear PAN or tokens other than TransArmor Token. | [optional] 
**expDate** | **string** | Payment method expiration date. Format is MMCCYY. | [optional] 
**cvv** | **string** | CVV Present indicator. | [optional] 
**issuer** | **string** | The company (usually a bank) that issued the card. | [optional] 
**cardReissuedNumber** | **string** | A number that distinguishes between two plastic cards with the same card number in the event of the card being re-issued). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


