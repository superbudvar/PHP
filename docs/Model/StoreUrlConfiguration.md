# # StoreUrlConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An optional outlet id for clients that support multiple stores in the same developer app. | 
**transactionNotificationUrl** | **string** | Transaction notification URL for Connect. | [optional] 
**recurringTransactionNotificationUrl** | **string** | Recurring transaction notification URL for recurring payments. | [optional] 
**responseSuccessUrl** | **string** | Response success URL for Connect. | [optional] 
**responseFailureUrl** | **string** | Response failure URL for Connect. | [optional] 
**skipResultPageForSuccess** | **bool** | Skip connect result page when transaction is approved. | [optional] 
**skipResultPageForFailure** | **bool** | Skip connect result page when transaction is not approved. | [optional] 
**overwriteUrlAllowed** | **bool** | Overwrite URLs in database by those from request. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


