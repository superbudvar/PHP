# PaymentSchedulesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storeId** | **string** | Store ID number. | [optional] 
**referenceOrderId** | **string** | Order ID used to create recurring payment from existing transaction. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Date of mandate signature. | [optional] 
**numberOfPayments** | **int** | Number of times the recurring payment will process. | [optional] 
**maximumFailures** | **int** | Number of failures that can be encountered before re-tries cease. | [optional] 
**invoiceNumber** | **string** | Invoice number. | [optional] 
**poNumber** | **string** | Purchase order number. | [optional] 
**transactionOrigin** | **string** | The source of the transaction. The possible values are ECI (if the order was received via email or Internet), MOTO (mail order / telephone order) and RETAIL (face to face). | [optional] 
**dynamicMerchantName** | **string** | Dynamic merchant name for the cardholder‘s statement. | [optional] 
**frequency** | [**\FirstData\FirstApi\Client\Model\Frequency**](Frequency.md) |  | [optional] 
**paymentMethod** | [**\FirstData\FirstApi\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional] 
**amount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | [optional] 
**clientLocale** | [**\FirstData\FirstApi\Client\Model\ClientLocale**](ClientLocale.md) |  | [optional] 
**orderId** | **string** | Client Order ID if supplied by client. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


