# # ScoreOnlyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantRef** | **string** | Merchant reference code. Used by FirstAPI and reflected in settlement records and Webhook notifications. Typically, the merchantRef field is the purchase order number or unique sequence value associated to a given transaction. | [optional] 
**transactionType** | **string** | Type of transaction merchant wants to process. | 
**originalTransactionType** | **string** | Defines the type of the original transaction that is being evaluated for the Fraud Score. | 
**originalTransactionId** | **string** | The unique ID of this transaction. Must be unique for the entire system (not just within a specific merchant or industry). Subsequent requests related to the same transaction must have the same transactionId (e.g. transaction/deposit or transaction/authorization-reversal). This field is used for matching transactions with settlement and chargeback information. If there is no such ID available you may wish to compose one from fields available in both systems. Consider including backend, issuer, merchant id, date and time, amount, etc. as necessary. | 
**amount** | **string** | The amount processed for the original transaction. | 
**currencyCode** | **string** | The currency of the original transaction. | 
**customer** | [**\FirstData\FirstApi\Client\Model\Customer**](Customer.md) |  | [optional] 
**billingAddress** | [**\FirstData\FirstApi\Client\Model\BillingAddress**](BillingAddress.md) |  | [optional] 
**device** | [**\FirstData\FirstApi\Client\Model\Device**](Device.md) |  | [optional] 
**loyalty** | [**\FirstData\FirstApi\Client\Model\Loyalty**](Loyalty.md) |  | [optional] 
**payment** | [**\FirstData\FirstApi\Client\Model\Payment**](Payment.md) |  | 
**merchant** | [**\FirstData\FirstApi\Client\Model\Merchant**](Merchant.md) |  | 
**order** | [**\FirstData\FirstApi\Client\Model\FraudOrder**](FraudOrder.md) |  | [optional] 
**userDefined** | [**object**](.md) | A JSON object that can carry any additional information that might be helpful for fraud detection. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


