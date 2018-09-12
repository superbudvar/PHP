# FirstData\FirstApi\Client\PaymentApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**performPaymentPostAuthorisation**](PaymentApi.md#performPaymentPostAuthorisation) | **POST** /v1/payments/{transaction-id}/postauth | Use this to capture/complete a transaction. Partial postauths are allowed.
[**primaryPaymentTransaction**](PaymentApi.md#primaryPaymentTransaction) | **POST** /v1/payments | Generate a primary transaction
[**returnTransaction**](PaymentApi.md#returnTransaction) | **POST** /v1/payments/{transaction-id}/return | Return/refund a transaction.
[**transactionInquiry**](PaymentApi.md#transactionInquiry) | **GET** /v1/payments/{transaction-id} | Retrieve the state of a transaction
[**voidTransaction**](PaymentApi.md#voidTransaction) | **POST** /v1/payments/{transaction-id}/void | Reverse a previous action on an existing transaction


# **performPaymentPostAuthorisation**
> \FirstData\FirstApi\Client\Model\TransactionResponse performPaymentPostAuthorisation($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $payload, $storeId)

Use this to capture/complete a transaction. Partial postauths are allowed.

This can be used for postauth and partial postauths.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$transactionId = "transactionId_example"; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId
$payload = new \FirstData\FirstApi\Client\Model\SecondaryTransaction(); // \FirstData\FirstApi\Client\Model\SecondaryTransaction | 
$storeId = "storeId_example"; // string | an optional outlet id for clients that support multiple store in the same developer app

try {
    $result = $apiInstance->performPaymentPostAuthorisation($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $payload, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->performPaymentPostAuthorisation: ', $e->getMessage(), PHP_EOL;
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
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
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

# **primaryPaymentTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse primaryPaymentTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $payload)

Generate a primary transaction

Use this to originate a financial transaction, like a sale, preauthorization, or credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$payload = new \FirstData\FirstApi\Client\Model\PrimaryTransaction(); // \FirstData\FirstApi\Client\Model\PrimaryTransaction | Primary Transaction request

try {
    $result = $apiInstance->primaryPaymentTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->primaryPaymentTransaction: ', $e->getMessage(), PHP_EOL;
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
 **payload** | [**\FirstData\FirstApi\Client\Model\PrimaryTransaction**](../Model/PrimaryTransaction.md)| Primary Transaction request |

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse returnTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $payload, $storeId)

Return/refund a transaction.

Use this to return/refund an existing transaction.  Partial returns are allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$transactionId = "transactionId_example"; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId
$payload = new \FirstData\FirstApi\Client\Model\SecondaryTransaction(); // \FirstData\FirstApi\Client\Model\SecondaryTransaction | 
$storeId = "storeId_example"; // string | an optional outlet id for clients that support multiple store in the same developer app

try {
    $result = $apiInstance->returnTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $payload, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->returnTransaction: ', $e->getMessage(), PHP_EOL;
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
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
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

# **transactionInquiry**
> \FirstData\FirstApi\Client\Model\TransactionResponse transactionInquiry($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $storeId)

Retrieve the state of a transaction

Use this query to get the current state of an existing transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$transactionId = "transactionId_example"; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId
$storeId = "storeId_example"; // string | an optional outlet id for clients that support multiple store in the same developer app

try {
    $result = $apiInstance->transactionInquiry($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->transactionInquiry: ', $e->getMessage(), PHP_EOL;
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
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
 **storeId** | **string**| an optional outlet id for clients that support multiple store in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse voidTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $storeId)

Reverse a previous action on an existing transaction

Use this to reverse a postauth/completion, credit, preauth, or sale.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = "application/json"; // string | content type
$clientRequestId = "clientRequestId_example"; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = "apiKey_example"; // string | 
$timestamp = 789; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$messageSignature = "messageSignature_example"; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$transactionId = "transactionId_example"; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId
$storeId = "storeId_example"; // string | an optional outlet id for clients that support multiple store in the same developer app

try {
    $result = $apiInstance->voidTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $messageSignature, $transactionId, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->voidTransaction: ', $e->getMessage(), PHP_EOL;
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
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
 **storeId** | **string**| an optional outlet id for clients that support multiple store in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

