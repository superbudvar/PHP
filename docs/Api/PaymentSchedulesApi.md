# FirstData\FirstApi\Client\PaymentSchedulesApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPaymentSchedule**](PaymentSchedulesApi.md#cancelPaymentSchedule) | **DELETE** /v1/payment-schedules/{order-id} | Cancel a gateway payment schedule.
[**createPaymentSchedule**](PaymentSchedulesApi.md#createPaymentSchedule) | **POST** /v1/payment-schedules | Use this to create a gateway payment schedule.
[**inquiryPaymentSchedule**](PaymentSchedulesApi.md#inquiryPaymentSchedule) | **GET** /v1/payment-schedules/{order-id} | View a gateway payment schedule.
[**updatePaymentSchedule**](PaymentSchedulesApi.md#updatePaymentSchedule) | **PATCH** /v1/payment-schedules/{order-id} | Update a gateway payment schedule.


# **cancelPaymentSchedule**
> \FirstData\FirstApi\Client\Model\PaymentSchedulesResponse cancelPaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $messageSignature, $region, $storeId)

Cancel a gateway payment schedule.

Use this to cancel an existing gateway payment schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentSchedulesApi(
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
    $result = $apiInstance->cancelPaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->cancelPaymentSchedule: ', $e->getMessage(), PHP_EOL;
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

[**\FirstData\FirstApi\Client\Model\PaymentSchedulesResponse**](../Model/PaymentSchedulesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaymentSchedule**
> \FirstData\FirstApi\Client\Model\PaymentSchedulesResponse createPaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $paymentSchedulesRequest, $messageSignature, $region)

Use this to create a gateway payment schedule.

This can be used to create a gateway payment schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | content type
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | 
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$paymentSchedulesRequest = new \FirstData\FirstApi\Client\Model\PaymentSchedulesRequest(); // \FirstData\FirstApi\Client\Model\PaymentSchedulesRequest | 
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | The region where client wants to process the transaction

try {
    $result = $apiInstance->createPaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $paymentSchedulesRequest, $messageSignature, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->createPaymentSchedule: ', $e->getMessage(), PHP_EOL;
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
 **paymentSchedulesRequest** | [**\FirstData\FirstApi\Client\Model\PaymentSchedulesRequest**](../Model/PaymentSchedulesRequest.md)|  |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| The region where client wants to process the transaction | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentSchedulesResponse**](../Model/PaymentSchedulesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inquiryPaymentSchedule**
> \FirstData\FirstApi\Client\Model\RecurringPaymentDetailsResponse inquiryPaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $messageSignature, $region, $storeId)

View a gateway payment schedule.

This can be used to view an existing gateway payment schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentSchedulesApi(
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
    $result = $apiInstance->inquiryPaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->inquiryPaymentSchedule: ', $e->getMessage(), PHP_EOL;
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

[**\FirstData\FirstApi\Client\Model\RecurringPaymentDetailsResponse**](../Model/RecurringPaymentDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentSchedule**
> \FirstData\FirstApi\Client\Model\PaymentSchedulesResponse updatePaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $paymentSchedulesRequest, $messageSignature, $region, $storeId)

Update a gateway payment schedule.

This can be used to update a gateway payment schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | content type
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | 
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$orderId = 'orderId_example'; // string | Gateway order identifier as returned in the parameter orderId
$paymentSchedulesRequest = new \FirstData\FirstApi\Client\Model\PaymentSchedulesRequest(); // \FirstData\FirstApi\Client\Model\PaymentSchedulesRequest | 
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | The region where client wants to process the transaction
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app

try {
    $result = $apiInstance->updatePaymentSchedule($contentType, $clientRequestId, $apiKey, $timestamp, $orderId, $paymentSchedulesRequest, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->updatePaymentSchedule: ', $e->getMessage(), PHP_EOL;
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
 **paymentSchedulesRequest** | [**\FirstData\FirstApi\Client\Model\PaymentSchedulesRequest**](../Model/PaymentSchedulesRequest.md)|  |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| The region where client wants to process the transaction | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentSchedulesResponse**](../Model/PaymentSchedulesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

