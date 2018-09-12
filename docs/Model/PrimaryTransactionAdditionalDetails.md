# PrimaryTransactionAdditionalDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**referenceNumber** | **string** | For FORCED_TICKET only. Stores the six digit reference number you have received as the result of a successful external authorization (e.g. by phone). The Gateway needs this number for uniquely mapping a ForcedTicket transaction to a previously performed external authorization.] | [optional] 
**comments** | **string** |  | [optional] 
**dynamicMerchantName** | **string** |  | [optional] 
**invoiceNumber** | **string** |  | [optional] 
**purchaseOrderNumber** | **string** |  | [optional] 
**recurringType** | **string** | Valid values are &#39;FIRST&#39;, &#39;REPEAT&#39; and &#39;STANDING_INSTRUCTION&#39;. | [optional] 
**installmentOptions** | [**\FirstData\FirstApi\Client\Model\InstallmentOptions**](InstallmentOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


