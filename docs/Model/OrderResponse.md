# OrderResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | Client order ID if supplied by client, otherwise the order ID. | [optional] 
**transactionTime** | **int** | The transaction time in seconds since epoch. | [optional] 
**billing** | [**\FirstData\FirstApi\Client\Model\Billing**](Billing.md) |  | [optional] 
**shipping** | [**\FirstData\FirstApi\Client\Model\Shipping**](Shipping.md) |  | [optional] 
**mandate** | [**\FirstData\FirstApi\Client\Model\SepaMandate**](SepaMandate.md) |  | [optional] 
**transactions** | [**\FirstData\FirstApi\Client\Model\Transaction[]**](Transaction.md) | Required for some payment methods (for example, Klarna). | [optional] 
**processor** | [**\FirstData\FirstApi\Client\Model\ProcessorData**](ProcessorData.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


