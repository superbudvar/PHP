# PrimaryTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionType** | [**\FirstData\FirstApi\Client\Model\TransactionType**](TransactionType.md) |  | 
**storeId** | **string** | An optional Outlet ID for clients that support multiple stores in the same app. | [optional] 
**clientTransactionId** | **string** | The unique client Transaction ID from the Request header, if supplied. | [optional] 
**amount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | 
**paymentMethod** | [**\FirstData\FirstApi\Client\Model\PaymentMethod**](PaymentMethod.md) |  | 
**order** | [**\FirstData\FirstApi\Client\Model\Order**](Order.md) |  | [optional] 
**basketItems** | [**\FirstData\FirstApi\Client\Model\BasketItem[]**](BasketItem.md) | Required for some payment methods (for example, Klarna) | [optional] 
**splitShipment** | [**\FirstData\FirstApi\Client\Model\SplitShipment**](SplitShipment.md) |  | [optional] 
**additionalDetails** | [**\FirstData\FirstApi\Client\Model\PrimaryTransactionAdditionalDetails**](PrimaryTransactionAdditionalDetails.md) |  | [optional] 
**industrySpecificExtensions** | [**\FirstData\FirstApi\Client\Model\IndustrySpecificExtensions**](IndustrySpecificExtensions.md) |  | [optional] 
**storedCredentials** | [**\FirstData\FirstApi\Client\Model\StoredCredential**](StoredCredential.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


