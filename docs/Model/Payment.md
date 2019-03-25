# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentType** | **string** | Defines the type of the payment. | 
**payMethod** | [**\FirstData\FirstApi\Client\Model\PaymentPayMethod**](PaymentPayMethod.md) |  | 
**pinPresent** | **bool** | Indicates if the cards Personal Identification Number was supplied. | 
**entryMethod** | **string** | The method in which the card information entered the system. | 
**issuerResponse** | [**\FirstData\FirstApi\Client\Model\PaymentIssuerResponse**](PaymentIssuerResponse.md) |  | [optional] 
**issuerApprovedAmount** | **string** | The actual approved amount. This field should be filled in when the message has already passed through the issuer (e.g. post-authorization). For transaction/authorization this amount refers to the amount that was locked on the card-holders account. | [optional] 
**issuerCardBalance** | **string** | The payment methods account balance if available. This field should be filled in when the message has already passed through the issuer (e.g. post-authorization). | [optional] 
**verificationAvs** | [**\FirstData\FirstApi\Client\Model\PaymentVerificationAvs**](PaymentVerificationAvs.md) |  | [optional] 
**verification3ds** | [**\FirstData\FirstApi\Client\Model\PaymentVerification3ds**](PaymentVerification3ds.md) |  | [optional] 
**verificationCvv** | [**\FirstData\FirstApi\Client\Model\PaymentVerificationCvv**](PaymentVerificationCvv.md) |  | [optional] 
**userDefined** | [**object**](.md) | A JSON object that carries any additional information that might be helpful for fraud detection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


