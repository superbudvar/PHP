# FirstData\FirstApi\Client\PaymentApi

All URIs are relative to *https://cert.api.firstdata.com/gateway/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**finalizeSecureTransaction**](PaymentApi.md#finalizeSecureTransaction) | **PATCH** /payments/{transaction-id} | Update a 3DSecure or UnionPay payment and continue processing.
[**submitPrimaryTransaction**](PaymentApi.md#submitPrimaryTransaction) | **POST** /payments | Generate a primary transaction.
[**submitSecondaryTransaction**](PaymentApi.md#submitSecondaryTransaction) | **POST** /payments/{transaction-id} | Perform a secondary transaction.
[**transactionInquiry**](PaymentApi.md#transactionInquiry) | **GET** /payments/{transaction-id} | Retrieve the state of a transaction.


# **finalizeSecureTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse finalizeSecureTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $transactionId, $authenticationVerificationRequest, $messageSignature, $region)

Update a 3DSecure or UnionPay payment and continue processing.

Use this to handle a 3DSecure redirect response or UnionPay authentication, updating the transaction and continuing processing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$transactionId = 'transactionId_example'; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId.
$authenticationVerificationRequest = new \FirstData\FirstApi\Client\Model\AuthenticationVerificationRequest(); // \FirstData\FirstApi\Client\Model\AuthenticationVerificationRequest | Accepted request types: Secure3dAuthenticationVerificationRequest and UnionPayAuthenticationVerificationRequest.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.

try {
    $result = $apiInstance->finalizeSecureTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $transactionId, $authenticationVerificationRequest, $messageSignature, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->finalizeSecureTransaction: ', $e->getMessage(), PHP_EOL;
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
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId. |
 **authenticationVerificationRequest** | [**\FirstData\FirstApi\Client\Model\AuthenticationVerificationRequest**](../Model/AuthenticationVerificationRequest.md)| Accepted request types: Secure3dAuthenticationVerificationRequest and UnionPayAuthenticationVerificationRequest. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitPrimaryTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse submitPrimaryTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $primaryTransaction, $messageSignature, $region)

Generate a primary transaction.

Use this to originate a financial transaction like a sale, preauthorization, or credit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$primaryTransaction = new \FirstData\FirstApi\Client\Model\PrimaryTransaction(); // \FirstData\FirstApi\Client\Model\PrimaryTransaction | Accepted request types: AliPaySaleTransaction, ChinaPnRSaleTransaction, PaymentCardCreditTransaction, PaymentCardForcedTicketTransaction, PaymentCardSaleTransaction, PaymentCardPreAuthTransaction, PaymentCardPayerAuthTransaction, PaymentCardDisbursementTransaction, PaymentTokenCreditTransaction, PaymentTokenPreAuthTransaction, PaymentTokenSaleTransaction, PaymentTokenDisbursementTransaction, PaypalCreditTransaction, SepaSaleTransaction, WalletSaleTransaction, and WalletPreAuthTransaction, PaymentDeviceSaleTransaction, PaymentDevicePreAuthTransaction, PaymentDeviceCreditTransaction, PaymentDeviceDisbursementTransaction.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.

try {
    $result = $apiInstance->submitPrimaryTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $primaryTransaction, $messageSignature, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->submitPrimaryTransaction: ', $e->getMessage(), PHP_EOL;
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
 **primaryTransaction** | [**\FirstData\FirstApi\Client\Model\PrimaryTransaction**](../Model/PrimaryTransaction.md)| Accepted request types: AliPaySaleTransaction, ChinaPnRSaleTransaction, PaymentCardCreditTransaction, PaymentCardForcedTicketTransaction, PaymentCardSaleTransaction, PaymentCardPreAuthTransaction, PaymentCardPayerAuthTransaction, PaymentCardDisbursementTransaction, PaymentTokenCreditTransaction, PaymentTokenPreAuthTransaction, PaymentTokenSaleTransaction, PaymentTokenDisbursementTransaction, PaypalCreditTransaction, SepaSaleTransaction, WalletSaleTransaction, and WalletPreAuthTransaction, PaymentDeviceSaleTransaction, PaymentDevicePreAuthTransaction, PaymentDeviceCreditTransaction, PaymentDeviceDisbursementTransaction. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitSecondaryTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse submitSecondaryTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $transactionId, $secondaryTransaction, $messageSignature, $region, $storeId)

Perform a secondary transaction.

Use this to perform a void, postAuth or return secondary transaction. Partial postAuths and returns are allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FirstData\FirstApi\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$transactionId = 'transactionId_example'; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId.
$secondaryTransaction = new \FirstData\FirstApi\Client\Model\SecondaryTransaction(); // \FirstData\FirstApi\Client\Model\SecondaryTransaction | Accepted request types: PostAuthTransaction, VoidTransaction, and ReturnTransaction.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app.

try {
    $result = $apiInstance->submitSecondaryTransaction($contentType, $clientRequestId, $apiKey, $timestamp, $transactionId, $secondaryTransaction, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->submitSecondaryTransaction: ', $e->getMessage(), PHP_EOL;
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
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId. |
 **secondaryTransaction** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)| Accepted request types: PostAuthTransaction, VoidTransaction, and ReturnTransaction. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionInquiry**
> \FirstData\FirstApi\Client\Model\TransactionResponse transactionInquiry($contentType, $clientRequestId, $apiKey, $timestamp, $transactionId, $messageSignature, $region, $storeId)

Retrieve the state of a transaction.

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
$contentType = 'application/json'; // string | Content type.
$clientRequestId = 'clientRequestId_example'; // string | A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format.
$apiKey = 'apiKey_example'; // string | Key given to merchant after boarding associating their requests with the appropriate app in Apigee.
$timestamp = 56; // int | Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins).
$transactionId = 'transactionId_example'; // string | Gateway transaction identifier as returned in the parameter ipgTransactionId.
$messageSignature = 'messageSignature_example'; // string | Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal.
$region = 'region_example'; // string | Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing.
$storeId = 'storeId_example'; // string | An optional outlet ID for clients that support multiple stores in the same developer app.

try {
    $result = $apiInstance->transactionInquiry($contentType, $clientRequestId, $apiKey, $timestamp, $transactionId, $messageSignature, $region, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->transactionInquiry: ', $e->getMessage(), PHP_EOL;
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
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId. |
 **messageSignature** | **string**| Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256 algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. | [optional]
 **region** | **string**| Indicates the region where the client wants the transaction to be processed. This will override the default processing region identified for the client. Available options are argentina, brazil, germany, india and northamerica. Region specific store setup and APIGEE boarding is required in order to use an alternate region for processing. | [optional]
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app. | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

