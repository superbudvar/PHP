# PaymentMethod

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of payment method. Note that PayPal can only process a &#39;CREDIT&#39; transaction. Note that for requests we are now supporting only PAYMENT_CARD, SEPA, PAYPAL, ALIPAY. All this types are supported for response. | 
**paymentCard** | [**\FirstData\FirstApi\Client\Model\PaymentCard**](PaymentCard.md) |  | [optional] 
**paymentToken** | [**\FirstData\FirstApi\Client\Model\PaymentTokenization**](PaymentTokenization.md) |  | [optional] 
**sepa** | [**\FirstData\FirstApi\Client\Model\Sepa**](Sepa.md) |  | [optional] 
**payPal** | [**\FirstData\FirstApi\Client\Model\PayPal**](PayPal.md) |  | [optional] 
**aliPay** | [**\FirstData\FirstApi\Client\Model\AliPay**](AliPay.md) |  | [optional] 
**chinaDomestic** | [**\FirstData\FirstApi\Client\Model\ChinaDomestic**](ChinaDomestic.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


