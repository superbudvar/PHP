# OrderResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | Client order ID if supplied by client, otherwise the order ID. | [optional] 
**billing** | [**\FirstData\FirstApi\Client\Model\Billing**](Billing.md) |  | [optional] 
**shipping** | [**\FirstData\FirstApi\Client\Model\Shipping**](Shipping.md) |  | [optional] 
**transactions** | [**\FirstData\FirstApi\Client\Model\TransactionResponse[]**](TransactionResponse.md) | Required for some payment methods (for example, Klarna). | [optional] 
**additionalDetails** | [**\FirstData\FirstApi\Client\Model\AdditionalDetails**](AdditionalDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


