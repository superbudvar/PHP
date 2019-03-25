# FirstData\FirstApi\Client\Simple\PaymentURLApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentUrl**](PaymentURLApi.md#createPaymentUrl) | **POST** /v1/payment-url | Create a payment URL.


# **createPaymentUrl**
> \FirstData\FirstApi\Client\Model\PaymentUrlResponse createPaymentUrl($payload)

Create a payment URL.

Use this to generate an embedding payment link.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\FirstApi\Client\Model\PaymentUrlRequest**](../Model/PaymentUrlRequest.md)|  |

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentUrlResponse**](../Model/PaymentUrlResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

