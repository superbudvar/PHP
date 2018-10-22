# FirstData\FirstApi\Client\AuthenticationApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AuthenticationAccessTokensPost**](AuthenticationApi.md#v1AuthenticationAccessTokensPost) | **POST** /v1/authentication/access-tokens | Generate an access token for user authentication


# **v1AuthenticationAccessTokensPost**
> \FirstData\FirstApi\Client\Model\AccessTokenResponse v1AuthenticationAccessTokensPost($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature)

Generate an access token for user authentication

This is the access token generation call for authorizing subsequent financial transactions. A valid access token is required for web client requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.

try {
    $result = $apiInstance->v1AuthenticationAccessTokensPost($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->v1AuthenticationAccessTokensPost: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\FirstData\FirstApi\Client\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

