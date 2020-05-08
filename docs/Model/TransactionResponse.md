# TransactionResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ipgTransactionId** | **string** | The response transaction ID. | [optional] 
**orderId** | **string** | Client order ID if supplied by client, otherwise the order ID. | [optional] 
**transactionType** | [**\FirstData\FirstApi\Client\Model\TransactionType**](TransactionType.md) |  | [optional] 
**paymentToken** | [**\FirstData\FirstApi\Client\Model\PaymentTokenDetails**](PaymentTokenDetails.md) |  | [optional] 
**transactionOrigin** | [**\FirstData\FirstApi\Client\Model\TransactionOrigin**](TransactionOrigin.md) |  | [optional] 
**paymentMethodDetails** | [**\FirstData\FirstApi\Client\Model\PaymentMethodDetails**](PaymentMethodDetails.md) |  | [optional] 
**country** | **string** | Country of the card issuer. | [optional] 
**terminalId** | **string** | The terminal that is processing the transaction. | [optional] 
**merchantTransactionId** | **string** | The unique merchant transaction ID from the request header, if supplied. | [optional] 
**transactionTime** | **int** | The transaction time in seconds since epoch. | [optional] 
**approvedAmount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | [optional] 
**transactionStatus** | **string** | The status of the transaction. APPROVED/WAITING are returned by the endpoints.  VALIDATION_FAILED/DECLINED are errors. See ErrorResponse object for details. | [optional] 
**transactionState** | **string** | The state of the transaction. | [optional] 
**secure3dResponse** | [**\FirstData\FirstApi\Client\Model\Secure3dResponse**](Secure3dResponse.md) |  | [optional] 
**redirectURL** | **string** | The endpoint redirection URL. | [optional] 
**authenticationResponse** | [**\FirstData\FirstApi\Client\Model\Secure3DAuthenticationResponse**](Secure3DAuthenticationResponse.md) |  | [optional] 
**schemeTransactionId** | **string** | The transaction ID received from schemes for the initial transaction of card on file flows. | [optional] 
**processor** | [**\FirstData\FirstApi\Client\Model\ProcessorData**](ProcessorData.md) |  | [optional] 
**additionalDetails** | [**\FirstData\FirstApi\Client\Model\AdditionalTransactionDetails**](AdditionalTransactionDetails.md) |  | [optional] 
**accountUpdaterResponse** | [**\FirstData\FirstApi\Client\Model\AccountUpdaterResponse**](AccountUpdaterResponse.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


