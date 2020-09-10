# # PaymentTokenizationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking. | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support team. | [optional] 
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) |  | [optional] 
**requestStatus** | **string** | The status of the request. | [optional] 
**requestTime** | **int** | Time of the request. | [optional] 
**brand** | **string** | Card brand. | [optional] 
**country** | **string** | Country of the card issued. | [optional] 
**paymentToken** | [**\FirstData\FirstApi\Client\Model\PaymentTokenDetails**](PaymentTokenDetails.md) |  | [optional] 
**paymentCard** | [**\FirstData\FirstApi\Client\Model\PaymentCard**](PaymentCard.md) |  | [optional] 
**processor** | [**\FirstData\FirstApi\Client\Model\ProcessorData**](ProcessorData.md) |  | [optional] 
**orderId** | **string** | Client order ID if supplied by client, otherwise the order ID. | [optional] 
**ipgTransactionId** | **string** | The response transaction ID. | [optional] 
**merchantTransactionId** | **string** | The unique merchant transaction ID from the request header, if supplied. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


