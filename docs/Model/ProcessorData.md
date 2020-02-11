# ProcessorData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**referenceNumber** | **string** | Reference transaction ID. | [optional] 
**authorizationCode** | **string** | Code returned to confirm transaction. | [optional] 
**responseCode** | **string** | Response code from endpoints. | [optional] 
**network** | **string** | Network used for transaction. | [optional] 
**associationResponseCode** | **string** | Raw response code from issuer. | [optional] 
**responseMessage** | **string** | Message returned from endpoints. | [optional] 
**avsResponse** | [**\FirstData\FirstApi\Client\Model\AVSResponse**](AVSResponse.md) |  | [optional] 
**securityCodeResponse** | **string** | Code returned for CVV. | [optional] 
**merchantAdviceCodeIndicator** | **string** | Code to map merchant advice code to ISO specification. | [optional] 
**responseIndicator** | **string** | Indicates whether the transaction was routed through the payment card&#39;s own network or through a different network. | [optional] 
**debitReceiptNumber** | **string** | Receipt number from debit network provider. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


