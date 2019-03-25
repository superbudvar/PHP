# FirstData\FirstApi\Client\OrderApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderInquiry**](OrderApi.md#orderInquiry) | **GET** /v1/orders/{order-id} | Retrieve the state of an order
[**orderPostAuth**](OrderApi.md#orderPostAuth) | **POST** /v1/orders/{order-id}/postauth | Capture/complete an already existing order.
[**orderReturnTransaction**](OrderApi.md#orderReturnTransaction) | **POST** /v1/orders/{order-id}/return | Return/refund an order.


# **orderInquiry**
> \FirstData\FirstApi\Client\Model\OrderResponse orderInquiry($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $messageSignature, $region, $storeId)

Retrieve the state of an order

Use this query to get the current state of an existing order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | content type
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | 
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$orderId = 'orderId_example'; // string | Gateway order identifier as returned in the parameter orderId
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | The region where client wants to process the transaction
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app

try {
    $result = $apiInstance->orderInquiry($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderInquiry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| content type | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**|  |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| The region where client wants to process the transaction | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPostAuth**
> \FirstData\FirstApi\Client\Model\TransactionResponse orderPostAuth($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $secondaryTransaction, $messageSignature, $region, $storeId)

Capture/complete an already existing order.

Use this to capture/complete an order. Postauths and partial postauths are allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | content type
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | 
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$orderId = 'orderId_example'; // string | Gateway order identifier as returned in the parameter orderId
$secondaryTransaction = new \FirstData\FirstApi\Client\Model\SecondaryTransaction(); // \FirstData\FirstApi\Client\Model\SecondaryTransaction | 
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | The region where client wants to process the transaction
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app

try {
    $result = $apiInstance->orderPostAuth($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $secondaryTransaction, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPostAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| content type | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**|  |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **secondaryTransaction** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| The region where client wants to process the transaction | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderReturnTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse orderReturnTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $secondaryTransaction, $messageSignature, $region, $storeId)

Return/refund an order.

Use this for Returns of an existing order. Partial Returns are allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | content type
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | 
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$orderId = 'orderId_example'; // string | Gateway order identifier as returned in the parameter orderId
$secondaryTransaction = new \FirstData\FirstApi\Client\Model\SecondaryTransaction(); // \FirstData\FirstApi\Client\Model\SecondaryTransaction | 
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | The region where client wants to process the transaction
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app

try {
    $result = $apiInstance->orderReturnTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $secondaryTransaction, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReturnTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| content type | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**|  |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId |
 **secondaryTransaction** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| The region where client wants to process the transaction | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

