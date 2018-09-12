# FirstData\FirstApi\Client\OrderApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**performPaymentPostAuthorisation**](OrderApi.md#performPaymentPostAuthorisation) | **POST** /v1/orders/{order-id}/postauth | Use this to capture/complete a transaction. Partial postauths are allowed.
[**returnTransaction**](OrderApi.md#returnTransaction) | **POST** /v1/orders/{order-id}/return | Use this to return/refund on the order. Partial returns are allowed.


# **performPaymentPostAuthorisation**
> \FirstData\FirstApi\Client\Model\TransactionResponse performPaymentPostAuthorisation($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $orderId, $payload, $storeId)

Use this to capture/complete a transaction. Partial postauths are allowed.

This can be used for postauth and partial postauths.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$orderId = "orderId_example"; // string | Gateway order identifier as returned in the parameter orderId
$payload = new \FirstData\FirstApi\Client\Model\SecondaryTransaction(); // \FirstData\FirstApi\Client\Model\SecondaryTransaction | 
$storeId = "storeId_example"; // string | an optional outlet id for clients that support multiple store in the same developer app

try {
    $result = $apiInstance->performPaymentPostAuthorisation($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $orderId, $payload, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->performPaymentPostAuthorisation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| content type | [default to application/json]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**|  |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. |
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **payload** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **storeId** | **string**| an optional outlet id for clients that support multiple store in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse returnTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $orderId, $payload, $storeId)

Use this to return/refund on the order. Partial returns are allowed.

This can be used for Returns and Partial Returns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$orderId = "orderId_example"; // string | Gateway order identifier as returned in the parameter orderId
$payload = new \FirstData\FirstApi\Client\Model\SecondaryTransaction(); // \FirstData\FirstApi\Client\Model\SecondaryTransaction | 
$storeId = "storeId_example"; // string | an optional outlet id for clients that support multiple store in the same developer app

try {
    $result = $apiInstance->returnTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $orderId, $payload, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->returnTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| content type | [default to application/json]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**|  |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. |
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **payload** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **storeId** | **string**| an optional outlet id for clients that support multiple store in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

