# FirstData\FirstApi\Client\Simple\PaymentTokenApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentToken**](PaymentTokenApi.md#createPaymentToken) | **POST** /v1/payment-tokens | To perform payment tokenization with a payment card


# **createPaymentToken**
> \FirstData\FirstApi\Client\Model\PaymentTokenizationResponse createPaymentToken($payload)

To perform payment tokenization with a payment card

Use this to perform a payment tokenization with a payment card

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\FirstApi\Client\Model\PaymentTokenizationRequest**](../Model/PaymentTokenizationRequest.md)| Payment Tokenization request |

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentTokenizationResponse**](../Model/PaymentTokenizationResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

