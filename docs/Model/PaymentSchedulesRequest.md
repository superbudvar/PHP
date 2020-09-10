# # PaymentSchedulesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestType** | **string** | Object name of the payment schedules request. | 
**storeId** | **string** | Store ID number. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Date of mandate signature. | 
**numberOfPayments** | **int** | Number of times the recurring payment will process. | [optional] 
**maximumFailures** | **int** | Number of failures that can be encountered before re-tries cease. | [optional] 
**invoiceNumber** | **string** | Invoice number. | [optional] 
**purchaseOrderNumber** | **string** | Purchase order number. | [optional] 
**transactionOrigin** | [**\FirstData\FirstApi\Client\Model\TransactionOrigin**](TransactionOrigin.md) |  | [optional] 
**dynamicMerchantName** | **string** | Dynamic merchant name for the cardholder&#39;s statement. | [optional] 
**frequency** | [**\FirstData\FirstApi\Client\Model\Frequency**](Frequency.md) |  | 
**transactionAmount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | 
**clientLocale** | [**\FirstData\FirstApi\Client\Model\ClientLocale**](ClientLocale.md) |  | [optional] 
**orderId** | **string** | Client order ID if supplied by client. | [optional] 
**billing** | [**\FirstData\FirstApi\Client\Model\Billing**](Billing.md) |  | [optional] 
**shipping** | [**\FirstData\FirstApi\Client\Model\Shipping**](Shipping.md) |  | [optional] 
**comments** | **string** | User supplied comments. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


