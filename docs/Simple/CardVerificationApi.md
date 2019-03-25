# FirstData\FirstApi\Client\Simple\CardVerificationApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verifyCard**](CardVerificationApi.md#verifyCard) | **POST** /v1/card-verification | 


# **verifyCard**
> \FirstData\FirstApi\Client\Model\TransactionResponse verifyCard($payload)



Use this to perform Card Verification for a payment card

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\FirstApi\Client\Model\PaymentTokenizationRequest**](../Model/PaymentTokenizationRequest.md)| Card Verification request |

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

