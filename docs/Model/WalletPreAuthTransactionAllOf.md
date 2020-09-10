# # WalletPreAuthTransactionAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**walletPaymentMethod** | [**\FirstData\FirstApi\Client\Model\WalletPaymentMethod**](WalletPaymentMethod.md) |  | 
**splitShipment** | [**\FirstData\FirstApi\Client\Model\SplitShipment**](SplitShipment.md) |  | [optional] 
**paymentFacilitator** | [**\FirstData\FirstApi\Client\Model\PaymentFacilitator**](PaymentFacilitator.md) |  | [optional] 
**decrementalFlag** | **bool** | This flag can only be used in a preAuth transaction that updates the amount of a previous preAuth transaction to either increase the preAuth amount (DecrementalPreAuthFlag &#x3D; false) or decrease the preAuth amount (DecrementalPreAuthFlag &#x3D; true). | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


