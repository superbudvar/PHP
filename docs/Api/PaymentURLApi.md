# FirstData\FirstApi\Client\PaymentURLApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentUrl**](PaymentURLApi.md#createPaymentUrl) | **POST** /v1/payment-url | Create a payment URL.


# **createPaymentUrl**
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
$contentType = 'application/json'; // string | content type
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | 
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$paymentUrlRequest = new \FirstData\FirstApi\Client\Model\PaymentUrlRequest(); // \FirstData\FirstApi\Client\Model\PaymentUrlRequest | 
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | The region where client wants to process the transaction

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
 **contentType** | **string**| content type | [default to &#39;application/json&#39;]
 **clientRequestId** | **string**| A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. |
 **apiKey** | **string**|  |
 **timestamp** | **int**| Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). |
 **paymentUrlRequest** | [**\FirstData\FirstApi\Client\Model\PaymentUrlRequest**](../Model/PaymentUrlRequest.md)|  |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| The region where client wants to process the transaction | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentUrlResponse**](../Model/PaymentUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

