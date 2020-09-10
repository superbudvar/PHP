# # RecurringPaymentDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking. | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support team. | [optional] 
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) |  | [optional] 
**orderId** | **string** | Client order ID if supplied by client, otherwise the order ID. | [optional] 
**billing** | [**\FirstData\FirstApi\Client\Model\Billing**](Billing.md) |  | [optional] 
**shipping** | [**\FirstData\FirstApi\Client\Model\Shipping**](Shipping.md) |  | [optional] 
**transactions** | [**\FirstData\FirstApi\Client\Model\TransactionResponse[]**](TransactionResponse.md) | Required for some payment methods (for example, Klarna). | [optional] 
**additionalDetails** | [**\FirstData\FirstApi\Client\Model\AdditionalDetails**](AdditionalDetails.md) |  | [optional] 
**recurringPaymentDetails** | [**\FirstData\FirstApi\Client\Model\RecurringPaymentDetails**](RecurringPaymentDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


