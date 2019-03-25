# FirstData\FirstApi\Client\Simple\OrderApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderInquiry**](OrderApi.md#orderInquiry) | **GET** /v1/orders/{order-id} | Retrieve the state of an order
[**orderPostAuth**](OrderApi.md#orderPostAuth) | **POST** /v1/orders/{order-id}/postauth | Capture/complete an already existing order.
[**orderReturnTransaction**](OrderApi.md#orderReturnTransaction) | **POST** /v1/orders/{order-id}/return | Return/refund an order.


# **orderInquiry**
> \FirstData\FirstApi\Client\Model\OrderResponse orderInquiry($orderId, $storeId = null)

Retrieve the state of an order

Use this query to get the current state of an existing order.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\OrderResponse**](../Model/OrderResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPostAuth**
> \FirstData\FirstApi\Client\Model\TransactionResponse orderPostAuth($orderId, $payload, $storeId = null)

Capture/complete an already existing order.

Use this to capture/complete an order. Postauths and partial postauths are allowed.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **payload** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderReturnTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse orderReturnTransaction($orderId, $payload, $storeId = null)

Return/refund an order.

Use this for Returns of an existing order. Partial Returns are allowed.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **payload** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

