# FirstData\FirstApi\Client\Simple\PaymentSchedulesApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentSchedule**](PaymentSchedulesApi.md#createPaymentSchedule) | **POST** /v1/payment-schedules | Use this to create a gateway payment schedule.
[**inquiryPaymentSchedule**](PaymentSchedulesApi.md#inquiryPaymentSchedule) | **GET** /v1/payment-schedules/{order-id} | Inquire a Gateway payment schedule.


# **createPaymentSchedule**
> \FirstData\FirstApi\Client\Model\PaymentSchedulesResponse createPaymentSchedule($payload)

Use this to create a gateway payment schedule.

This can be used to create a gateway payment schedule.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\FirstApi\Client\Model\PaymentSchedulesRequest**](../Model/PaymentSchedulesRequest.md)|  |

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentSchedulesResponse**](../Model/PaymentSchedulesResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inquiryPaymentSchedule**
> \FirstData\FirstApi\Client\Model\RecurringPaymentDetailsResponse inquiryPaymentSchedule($orderId, $storeId = null)

Inquire a Gateway payment schedule.

This can be used to view an existing gateway payment schedule.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\RecurringPaymentDetailsResponse**](../Model/RecurringPaymentDetailsResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

