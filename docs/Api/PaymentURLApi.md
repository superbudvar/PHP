# FirstData\FirstApi\Client\PaymentURLApi

All URIs are relative to *https://cert.api.firstdata.com/gateway/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentUrl**](PaymentURLApi.md#createPaymentUrl) | **POST** /payment-url | Create a payment URL.
[**deletePaymentUrl**](PaymentURLApi.md#deletePaymentUrl) | **DELETE** /payment-url | Delete a payment URL.
[**paymentUrlDetail**](PaymentURLApi.md#paymentUrlDetail) | **GET** /payment-url | Retrieve the state of payment URL.



## createPaymentUrl

> \FirstData\FirstApi\Client\Model\PaymentUrlResponse createPaymentUrl($contentType, $clientRequestId, $apiKey, $timestamp, $paymentUrlRequest, $messageSignature, $region)

Create a payment URL.

Use this to generate an embedding payment link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new FirstData\FirstApi\Client\Api\PaymentURLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$paymentUrlRequest = new \FirstData\FirstApi\Client\Model\PaymentUrlRequest(); // \FirstData\FirstApi\Client\Model\PaymentUrlRequest | Accepted request type: PaymentUrlRequest.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.

try {
    $result = $apiInstance->createPaymentUrl($contentType, $clientRequestId, $apiKey, $timestamp, $paymentUrlRequest, $messageSignature, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentURLApi->createPaymentUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Content type. | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**| Key given to merchant after boarding associating their requests with the appropriate app in Apigee. |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **paymentUrlRequest** | [**\FirstData\FirstApi\Client\Model\PaymentUrlRequest**](../Model/PaymentUrlRequest.md)| Accepted request type: PaymentUrlRequest. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentUrlResponse**](../Model/PaymentUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePaymentUrl

> \FirstData\FirstApi\Client\Model\PaymentUrlResponse deletePaymentUrl($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $region, $storeId, $transactionId, $orderId, $paymentUrlId, $transactionTime)

Delete a payment URL.

Use this to delete an embedding payment link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new FirstData\FirstApi\Client\Api\PaymentURLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app.
$transactionId = 'transactionId_example'; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId or merchantTransactionId.
$orderId = 'orderId_example'; // string | Gateway order identifier as returned in the parameter orderId.
$paymentUrlId = 'paymentUrlId_example'; // string | The ID code from the payment URL.
$transactionTime = 'transactionTime_example'; // string | The transaction time in seconds since epoch.

try {
    $result = $apiInstance->deletePaymentUrl($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $region, $storeId, $transactionId, $orderId, $paymentUrlId, $transactionTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentURLApi->deletePaymentUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Content type. | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**| Key given to merchant after boarding associating their requests with the appropriate app in Apigee. |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app. | [optional]
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId or merchantTransactionId. | [optional]
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId. | [optional]
 **paymentUrlId** | **string**| The ID code from the payment URL. | [optional]
 **transactionTime** | **string**| The transaction time in seconds since epoch. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentUrlResponse**](../Model/PaymentUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## paymentUrlDetail

> \FirstData\FirstApi\Client\Model\PaymentUrlDetailResponse paymentUrlDetail($contentType, $clientRequestId, $apiKey, $timestamp, $fromDate, $toDate, $messageSignature, $region, $storeId, $orderId, $merchantTransactionId, $status)

Retrieve the state of payment URL.

Use this query to get the current state of an existing paymentURL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new FirstData\FirstApi\Client\Api\PaymentURLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$fromDate = 'fromDate_example'; // string | The start date for payment URL in seconds since epoch.
$toDate = 'toDate_example'; // string | The end date for payment URL search query in seconds since epoch.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app.
$orderId = 'orderId_example'; // string | Gateway order identifier as returned in the parameter orderId.
$merchantTransactionId = 'merchantTransactionId_example'; // string | Gateway merchant identifier as returned in the parameter merchantTransactionId.
$status = 'status_example'; // string | The status of payment URL.

try {
    $result = $apiInstance->paymentUrlDetail($contentType, $clientRequestId, $apiKey, $timestamp, $fromDate, $toDate, $messageSignature, $region, $storeId, $orderId, $merchantTransactionId, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentURLApi->paymentUrlDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Content type. | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**| Key given to merchant after boarding associating their requests with the appropriate app in Apigee. |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **fromDate** | **string**| The start date for payment URL in seconds since epoch. |
 **toDate** | **string**| The end date for payment URL search query in seconds since epoch. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app. | [optional]
 **orderId** | **string**| Gateway order identifier as returned in the parameter orderId. | [optional]
 **merchantTransactionId** | **string**| Gateway merchant identifier as returned in the parameter merchantTransactionId. | [optional]
 **status** | **string**| The status of payment URL. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentUrlDetailResponse**](../Model/PaymentUrlDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

