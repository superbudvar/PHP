# FirstData\FirstApi\Client\FraudDetectApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**scoreOnly**](FraudDetectApi.md#scoreOnly) | **POST** /v1/fraud/score-only | Score a transaction for fraud.


# **scoreOnly**
> \FirstData\FirstApi\Client\Model\ScoreOnlyResponse scoreOnly($contentType, $clientRequestId, $apiKey, $timestamp, $scoreOnlyRequest, $messageSignature, $region)

Score a transaction for fraud.

Use this to obtain a fraud score for a transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\FraudDetectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | content type
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | 
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$scoreOnlyRequest = new \FirstData\FirstApi\Client\Model\ScoreOnlyRequest(); // \FirstData\FirstApi\Client\Model\ScoreOnlyRequest | 
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | The region where client wants to process the transaction

try {
    $result = $apiInstance->scoreOnly($contentType, $clientRequestId, $apiKey, $timestamp, $scoreOnlyRequest, $messageSignature, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FraudDetectApi->scoreOnly: ', $e->getMessage(), PHP_EOL;
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
 **scoreOnlyRequest** | [**\FirstData\FirstApi\Client\Model\ScoreOnlyRequest**](../Model/ScoreOnlyRequest.md)|  |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| The region where client wants to process the transaction | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\ScoreOnlyResponse**](../Model/ScoreOnlyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

