# PaymentTokenization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional] 
**value** | **string** | Client supplied Payment Token value | [optional] 
**reusable** | **bool** | One time or reusable token | [optional] [default to true]
**declineDuplicates** | **bool** | Decline duplicate payment info if client token is supplied | [optional] [default to false]
**last4** | **string** | The last 4 payment card numbers | [optional] 
**brand** | **string** | Only for tokenization with payment | [optional] 
**country** | **string** | Only for tokenization with payment | [optional] 
**accountVerification** | **bool** |  | [optional] [default to false]
**securityCode** | **string** | Card Verification Value/Number | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


