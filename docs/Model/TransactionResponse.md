# TransactionResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ipgTransactionId** | **string** | The Response Transaction ID | [optional] 
**orderId** | **string** | Client Order ID if supplied by client, otherwise the Order ID | [optional] 
**transactionType** | [**\FirstData\FirstApi\Client\Model\TransactionType**](TransactionType.md) |  | [optional] 
**paymentToken** | [**\FirstData\FirstApi\Client\Model\PaymentTokenization**](PaymentTokenization.md) |  | [optional] 
**transactionOrigin** | [**\FirstData\FirstApi\Client\Model\TransactionOrigin**](TransactionOrigin.md) |  | [optional] 
**paymentMethod** | [**\FirstData\FirstApi\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**country** | **string** | Country of the card issuer | [optional] 
**terminalId** | **string** | The terminal that is processing the transaction | [optional] 
**merchantTransactionId** | **string** | The unique merchant Transaction ID from the Request header, if supplied | [optional] 
**transactionTime** | **int** | The transaction time in seconds since Epoch | [optional] 
**approvedAmount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | [optional] 
**transactionStatus** | **string** | The status of the transaction. APPROVED/WAITING are returned by the endpoints.  VALIDATION_FAILED/DECLINED are errors. See ErrorResponse object for details. | [optional] 
**transactionState** | **string** | The state of the transaction. | [optional] 
**secure3dResponse** | [**\FirstData\FirstApi\Client\Model\Secure3dResponse**](Secure3dResponse.md) |  | [optional] 
**redirectURL** | **string** | The endpoint redirection URL. | [optional] 
**authenticationRedirect** | **object** |  | [optional] 
**schemeTransactionId** | **string** | The transaction ID received from schemes for the initial transaction of card on file flows. | [optional] 
**processor** | [**\FirstData\FirstApi\Client\Model\ProcessorData**](ProcessorData.md) |  | [optional] 
**additionalDetails** | [**\FirstData\FirstApi\Client\Model\AdditionalTransactionDetails**](AdditionalTransactionDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


