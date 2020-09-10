# # PaymentTokenPreAuthTransactionAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentMethod** | [**\FirstData\FirstApi\Client\Model\PaymentTokenPaymentMethod**](PaymentTokenPaymentMethod.md) |  | 
**storedCredentials** | [**\FirstData\FirstApi\Client\Model\StoredCredential**](StoredCredential.md) |  | [optional] 
**splitShipment** | [**\FirstData\FirstApi\Client\Model\SplitShipment**](SplitShipment.md) |  | [optional] 
**settlementSplit** | [**\FirstData\FirstApi\Client\Model\SubMerchantSplit[]**](SubMerchantSplit.md) | Settle with multiple sub-merchants, sale and preAuth only. | [optional] 
**authenticationRequest** | [**\FirstData\FirstApi\Client\Model\AuthenticationRequest**](AuthenticationRequest.md) |  | [optional] 
**authenticationResult** | [**\FirstData\FirstApi\Client\Model\AuthenticationResult**](AuthenticationResult.md) |  | [optional] 
**decrementalFlag** | **bool** | This flag can only be used in a preAuth transaction that updates the amount of a previous preAuth transaction to either increase the preAuth amount (DecrementalPreAuthFlag &#x3D; false) or decrease the preAuth amount (DecrementalPreAuthFlag &#x3D; true). | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


