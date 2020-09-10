# # TeleCheckAchPaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**achType** | **string** | ACH application type values will be one of either TeleCheckICAPaymentMethod or TeleCheckCBPPaymentMethod. | 
**routingNumber** | **string** | Bank routing number. | 
**accountNumber** | **string** | Bank account number. | 
**accountType** | **string** | Identifies if the account type is checking or savings. | 
**checkNumber** | **string** | Check number. | [optional] 
**checkType** | **string** | Identifies if the check type is personal or company. | 
**productCode** | **string** | Identifies the product code in the transaction. | [optional] 
**manualIdInfo** | [**\FirstData\FirstApi\Client\Model\IdInfo**](IdInfo.md) |  | [optional] 
**supplementIdInfo** | [**\FirstData\FirstApi\Client\Model\IdInfo**](IdInfo.md) |  | [optional] 
**agentId** | **string** | Used to track the agent transaction activity. | [optional] 
**terminalId** | **string** | Identifies the register or lane number where the original sale transaction occurred. | [optional] 
**registrationId** | **string** | Unique ID assigned by the merchant for the consumer (never recycled). It is an additional level of authentication. To use this feature, the merchant must work with TeleCheck Risk to discuss. Registration IDs must not be generated for an existing or returning consumer returns. The single registration ID must be unique per consumer. | [optional] 
**registrationDate** | [**\DateTime**](\DateTime.md) | Date the consumer originally registered in format MMDDYYYY. | [optional] 
**releaseType** | **string** | Release type is used as a risk variable to gauge risk level when the merchant is releasing the purchased merchandise. | [optional] 
**vipCustomer** | **string** | Flags a transaction as a VIP order (based on merchant criteria). This field should not be sent for non-VIP orders. | [optional] 
**sessionId** | **string** | Session identifier. | 
**terminalState** | **string** | Identifies the US state or territory where the original sale transaction occurred. | [optional] 
**terminalCity** | **string** | Identifies the city where the original sale transaction occurred. | [optional] 
**achBillTo** | [**\FirstData\FirstApi\Client\Model\TeleCheckAchPaymentMethodAchBillTo**](TeleCheckAchPaymentMethodAchBillTo.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


