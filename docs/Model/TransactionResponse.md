# TransactionResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Value echoed from the request header | [optional] 
**apiTraceId** | **string** | Echoes back the value in the request header | [optional] 
**ipgTransactionId** | **string** | The Gateway generated Transaction ID | [optional] 
**orderId** | **string** | Client Order ID if supplied by a client; otherwise the Order ID | [optional] 
**transactionType** | **string** | Transaction type | [optional] 
**authorizationCode** | **string** | The processor approval code for compliance | [optional] 
**avsResponse** | [**\FirstData\ApiClient\Model\TransactionResponseAvsResponse**](TransactionResponseAvsResponse.md) |  | [optional] 
**cardCodeValueResponse** | **string** | The processor card code validation response. | [optional] 
**brand** | **string** | Card brand of the payment instrument | [optional] 
**country** | **string** | Country of the card issuer | [optional] 
**terminalId** | **string** | The terminal that is processing the transaction | [optional] 
**clientTransactionId** | **string** | The unique client Transaction ID from the Request header, if supplied | [optional] 
**transactionTime** | **int** | The transaction time in seconds since epoch | [optional] 
**approvedAmount** | [**\FirstData\ApiClient\Model\Amount**](Amount.md) |  | [optional] 
**transactionStatus** | **string** | APPROVED/WAITING are returned by endpoints. VALIDATION_FAILED/DECLINED are errors. See Error objects for details. | [optional] 
**authenticationRedirect** | [**\FirstData\ApiClient\Model\TransactionResponseAuthenticationRedirect**](TransactionResponseAuthenticationRedirect.md) |  | [optional] 
**error** | [**\FirstData\ApiClient\Model\Error**](Error.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


