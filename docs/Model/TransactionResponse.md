# # TransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking. | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support team. | [optional] 
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) |  | [optional] 
**ipgTransactionId** | **string** | The response transaction ID. | [optional] 
**orderId** | **string** | Client order ID if supplied by client, otherwise the order ID. | [optional] 
**transactionType** | [**\FirstData\FirstApi\Client\Model\TransactionType**](TransactionType.md) |  | [optional] 
**paymentToken** | [**\FirstData\FirstApi\Client\Model\PaymentTokenDetails**](PaymentTokenDetails.md) |  | [optional] 
**transactionOrigin** | [**\FirstData\FirstApi\Client\Model\TransactionOrigin**](TransactionOrigin.md) |  | [optional] 
**paymentMethodDetails** | [**\FirstData\FirstApi\Client\Model\PaymentMethodDetails**](PaymentMethodDetails.md) |  | [optional] 
**country** | **string** | Country of the card issuer. | [optional] 
**terminalId** | **string** | The terminal that is processing the transaction. | [optional] 
**merchantId** | **string** | The unique (on Acquirer level) mechant ID. Usually this value has been chosen from the merchant itself and will be used in communication with the endpoint. | [optional] 
**merchantTransactionId** | **string** | The unique merchant transaction ID from the request header, if supplied. | [optional] 
**transactionTime** | **int** | The transaction time in seconds since epoch. | [optional] 
**approvedAmount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | [optional] 
**transactionStatus** | **string** | Represents the status of a transaction immediately following the original processing request. This value is not stored for the transaction and is only available in the response when the transaction is processed. TransactionStatus is not returned on either the transaction inquiry or on the order inquiry. | [optional] 
**transactionState** | **string** | Shows the state of the current transaction. | [optional] 
**secure3dResponse** | [**\FirstData\FirstApi\Client\Model\Secure3dResponse**](Secure3dResponse.md) |  | [optional] 
**redirectURL** | **string** | The endpoint redirection URL. | [optional] 
**authenticationResponse** | [**\FirstData\FirstApi\Client\Model\Secure3DAuthenticationResponse**](Secure3DAuthenticationResponse.md) |  | [optional] 
**schemeTransactionId** | **string** | The transaction ID received from schemes for the initial transaction of card on file flows. | [optional] 
**processor** | [**\FirstData\FirstApi\Client\Model\ProcessorData**](ProcessorData.md) |  | [optional] 
**additionalDetails** | [**\FirstData\FirstApi\Client\Model\AdditionalTransactionDetails**](AdditionalTransactionDetails.md) |  | [optional] 
**accountUpdaterResponse** | [**\FirstData\FirstApi\Client\Model\AccountUpdaterResponse**](AccountUpdaterResponse.md) |  | [optional] 
**achResponse** | [**\FirstData\FirstApi\Client\Model\AchResponse**](AchResponse.md) |  | [optional] 
**currencyConversionResponse** | [**\FirstData\FirstApi\Client\Model\CurrencyConversionResponse**](CurrencyConversionResponse.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


