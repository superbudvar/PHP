# RecurringPaymentDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storeId** | **string** | Store ID number. | [optional] 
**purchaseOrderNumber** | **string** | Purchase order number. | [optional] 
**invoiceNumber** | **string** | Invoice number. | [optional] 
**creationDate** | **string** | Date recurring payment was created. | [optional] 
**startDate** | **string** | Date of mandate signature. | [optional] 
**nextAttemptDate** | **string** | Date of next transaction process attempt. | [optional] 
**transactionAmount** | [**\FirstData\FirstApi\Client\Model\Amount**](Amount.md) |  | [optional] 
**paymentMethodDetails** | [**\FirstData\FirstApi\Client\Model\PaymentMethodDetails**](PaymentMethodDetails.md) |  | [optional] 
**frequency** | [**\FirstData\FirstApi\Client\Model\Frequency**](Frequency.md) |  | [optional] 
**numberOfPayments** | **int** | Number of times the recurring payment will process. | [optional] 
**runCount** | **int** | Times the recurring payment has already run. | [optional] 
**state** | **string** | State of the recurring payment. | [optional] 
**comments** | **string** | User supplied comments. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


