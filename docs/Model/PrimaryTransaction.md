# PrimaryTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionType** | **string** | The type of the transaction performed. | 
**storeId** | **string** | An optional outlet ID for clients that support multiple store in the same developer app. | [optional] 
**clientTransactionId** | **string** | The unique client Transaction ID from the request header, if supplied. | [optional] 
**amount** | [**\FirstData\ApiClient\Model\Amount**](Amount.md) |  | 
**paymentMethod** | [**\FirstData\ApiClient\Model\PaymentMethod**](PaymentMethod.md) |  | 
**order** | [**\FirstData\ApiClient\Model\Order**](Order.md) |  | [optional] 
**basketItems** | [**\FirstData\ApiClient\Model\BasketItem[]**](BasketItem.md) | Required for some payment methods (e.g. Klarna) | [optional] 
**splitShipment** | [**\FirstData\ApiClient\Model\SplitShipment**](SplitShipment.md) |  | [optional] 
**transactionOrigin** | **string** | The origin of the transaction | [optional] [default to 'ECOM']
**additionalDetails** | [**\FirstData\ApiClient\Model\PrimaryTransactionAdditionalDetails**](PrimaryTransactionAdditionalDetails.md) |  | [optional] 
**industrySpecificExtensions** | [**\FirstData\ApiClient\Model\IndustrySpecificExtensions**](IndustrySpecificExtensions.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


