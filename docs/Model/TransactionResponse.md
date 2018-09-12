# TransactionResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) | The schema type returned in the response. | [optional] 
**clientRequestId** | **string** | Echoes back the value in the Request header | [optional] 
**apiTraceId** | **string** | Echoes back the value in the Request header | [optional] 
**ipgTransactionId** | **string** | The Response Transaction ID | [optional] 
**orderId** | **string** | Client Order ID if supplied by client, otherwise the Order ID | [optional] 
**transactionType** | [**\FirstData\FirstApi\Client\Model\TransactionType**](TransactionType.md) |  | [optional] 
**authorizationCode** | **string** | The processor approval code for compliance. | [optional] 
**avsResponse** | **string** | The processor address validation response for compliance. | [optional] 
**securityCodeResponse** | **string** | The processor card verification validation response for compliance. | [optional] 
**brand** | **string** | Card brand of the payment instrument | [optional] 
**country** | **string** | Country of the card issuer | [optional] 
**terminalId** | **string** | The terminal that is processing the transaction | [optional] 
**clientTransactionId** | **string** | The unique client Transaction ID from the Request header, if supplied | [optional] 
**transactionTime** | **int** | The transaction time in seconds since Epoch | [optional] 
**approvedAmount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | [optional] 
**transactionStatus** | **string** | The status of the transaction. APPROVED/WAITING are returned by the endpoints.  VALIDATION_FAILED/DECLINED are errors. See ErrorResponse object for details. | [optional] 
**transactionState** | **string** | The state of the transaction. | [optional] 
**authenticationRedirect** | [**\FirstData\FirstApi\Client\Model\TransactionResponseAuthenticationRedirect**](TransactionResponseAuthenticationRedirect.md) |  | [optional] 
**schemeTransactionId** | **string** | The transaction id received from schemes for the initial transaction, returned for the transactions marked as \&quot;FIRST\&quot; | [optional] 
**processor** | [**\FirstData\FirstApi\Client\Model\ProcessorData**](ProcessorData.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


