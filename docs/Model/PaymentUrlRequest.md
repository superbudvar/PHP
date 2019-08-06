# PaymentUrlRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storeId** | **string** | An optional Outlet ID for clients that support multiple stores in the same developer app. | [optional] 
**clientLocale** | [**\FirstData\FirstApi\Client\Model\ClientLocale**](ClientLocale.md) |  | [optional] 
**transactionAmount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | 
**transactionType** | [**\FirstData\FirstApi\Client\Model\TransactionType**](TransactionType.md) |  | 
**orderId** | **string** | Client order ID if supplied by client, otherwise the order ID. | [optional] 
**billing** | [**\FirstData\FirstApi\Client\Model\Billing**](Billing.md) |  | [optional] 
**shipping** | [**\FirstData\FirstApi\Client\Model\Shipping**](Shipping.md) |  | [optional] 
**transactionNotificationURL** | **string** | URL for notifying merchant of payment result. | [optional] 
**expiration** | **int** | Time until payment URL expires. | [optional] 
**authenticateTransaction** | **bool** | If 3D secure should be applied. | [optional] 
**dynamicMerchantName** | **string** | Dynamic merchant name for the cardholder&#39;s statement. | [optional] 
**invoiceNumber** | **string** | Invoice number. | [optional] 
**purchaseOrderNumber** | **string** | Purchase order number. | [optional] 
**hostedPaymentPageText** | **string** | The text to be displayed to the payer on the hosted payment page. | [optional] 
**ip** | **string** | IPv4 or IPv6 network address. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


