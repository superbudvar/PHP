# PaymentMethod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of payment method. Note that PayPal can only process a &#39;Credit&#39;  primary transaction with Order.Billing.Contact.email being mandatory. PayPal secondary transactions (void/return/postauth) are processed the same as any other secondary transactions. | 
**paymentCard** | [**\FirstData\FirstApi\Client\Model\PaymentCard**](PaymentCard.md) |  | [optional] 
**sepa** | [**\FirstData\FirstApi\Client\Model\Sepa**](Sepa.md) |  | [optional] 
**payPal** | [**\FirstData\FirstApi\Client\Model\PayPal**](PayPal.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


