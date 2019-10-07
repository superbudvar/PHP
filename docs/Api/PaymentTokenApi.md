# FirstData\FirstApi\Client\PaymentTokenApi

All URIs are relative to *https://cert.api.firstdata.com/gateway/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentToken**](PaymentTokenApi.md#createPaymentToken) | **POST** /payment-tokens | Create a payment token from a payment card.
[**deletePaymentToken**](PaymentTokenApi.md#deletePaymentToken) | **DELETE** /payment-tokens/{token-id} | Delete a payment token.


# **createPaymentToken**
> \FirstData\FirstApi\Client\Model\PaymentTokenizationResponse createPaymentToken($contentType, $clientRequestId, $apiKey, $timestamp, $paymentTokenizationRequest, $messageSignature, $authorization, $region)

Create a payment token from a payment card.

Use this to create a payment token from a payment card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$paymentTokenizationRequest = new \FirstData\FirstApi\Client\Model\PaymentTokenizationRequest(); // \FirstData\FirstApi\Client\Model\PaymentTokenizationRequest | Accepted request types: PaymentCardPaymentTokenizationRequest, PaymentDevicePaymentTokenizationRequest, and ReferencedOrderPaymentTokenizationRequest.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$authorization = 'authorization_example'; // string | The access token previously generated with the access-tokens call. Use the format 'Bearer {access-token}'.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.

try {
    $result = $apiInstance->createPaymentToken($contentType, $clientRequestId, $apiKey, $timestamp, $paymentTokenizationRequest, $messageSignature, $authorization, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTokenApi->createPaymentToken: ', $e->getMessage(), PHP_EOL;
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
 **paymentTokenizationRequest** | [**\FirstData\FirstApi\Client\Model\PaymentTokenizationRequest**](../Model/PaymentTokenizationRequest.md)| Accepted request types: PaymentCardPaymentTokenizationRequest, PaymentDevicePaymentTokenizationRequest, and ReferencedOrderPaymentTokenizationRequest. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **authorization** | **string**| The access token previously generated with the access-tokens call. Use the format &#39;Bearer {access-token}&#39;. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentTokenizationResponse**](../Model/PaymentTokenizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentToken**
> \FirstData\FirstApi\Client\Model\PaymentTokenizationResponse deletePaymentToken($contentType, $clientRequestId, $apiKey, $timestamp, $tokenId, $messageSignature, $authorization, $region, $storeId)

Delete a payment token.

Use this to delete a payment token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$tokenId = 'tokenId_example'; // string | Identifies a payment token.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$authorization = 'authorization_example'; // string | The access token previously generated with the access-tokens call. Use the format 'Bearer {access-token}'.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.
$storeId = 'storeId_example'; // string | 

try {
    $result = $apiInstance->deletePaymentToken($contentType, $clientRequestId, $apiKey, $timestamp, $tokenId, $messageSignature, $authorization, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTokenApi->deletePaymentToken: ', $e->getMessage(), PHP_EOL;
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
 **tokenId** | **string**| Identifies a payment token. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **authorization** | **string**| The access token previously generated with the access-tokens call. Use the format &#39;Bearer {access-token}&#39;. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]
 **storeId** | **string**|  | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\PaymentTokenizationResponse**](../Model/PaymentTokenizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

