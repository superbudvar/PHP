# FirstData\ApiClient\PaymentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postAuthTransaction**](PaymentApi.md#postauthtransaction) | **POST** /payments/{transaction-id}/postauth | Postauth transaction
[**refundTransaction**](PaymentApi.md#refundtransaction) | **POST** /payments/{transaction-id}/return | Return/Refund transaction
[**voidTransaction**](PaymentApi.md#voidtransaction) | **POST** /payments/{transaction-id}/void | Void transaction
[**createTransaction**](PaymentApi.md#createtransaction) | **POST** /payments | Primary transaction creation


# postAuthTransaction
> \FirstData\ApiClient\Model\CertificateCreationResponse postAuthTransaction($transactionId, $payload)

Postauth transaction

Use this to capture/complete a preauth transaction. Partial postauths are allowed.

### Example
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

// string | Developer App API secret. This is used for API authentication. Secrets are provided at the time of merchant boarding.
$apiSecret = 'apiSecret_example';

// string | Developer App API key. This is used for API authentication. Keys are provided at the time of merchant boarding.
$apiKey = 'apiKey_example';

$apiInstance = FirstData\ApiClient\Api\PaymentApi::create($apiSecret, $apiKey);

// string | Identifies the primary transaction
$transactionId = 'transactionId_example'; 

// \FirstData\ApiClient\Model\SecondaryTransaction
$payload = new \FirstData\ApiClient\Model\SecondaryTransaction(); 

try {
    $result = $apiInstance->postAuthTransaction($transactionId, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->postAuthTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| Identifies the primary transaction |
 **payload** | [**\FirstData\ApiClient\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |

### Return type

[**\FirstData\ApiClient\Model\CertificateCreationResponse**](../Model/CertificateCreationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# refundTransaction
> \FirstData\ApiClient\Model\TransactionResponse refundTransaction($transactionId, $payload)

Return/Refund transaction

Use this for returns and partial returns.

### Example
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

// string | Developer App API secret. This is used for API authentication. Secrets are provided at the time of merchant boarding.
$apiSecret = 'apiSecret_example';

// string | Developer App API key. This is used for API authentication. Keys are provided at the time of merchant boarding.
$apiKey = 'apiKey_example';

$apiInstance = FirstData\ApiClient\Api\PaymentApi::create($apiSecret, $apiKey);

// string | Identifies the primary transaction
$transactionId = 'transactionId_example';

// \FirstData\ApiClient\Model\SecondaryTransaction
$payload = new \FirstData\ApiClient\Model\SecondaryTransaction(); 

try {
    $result = $apiInstance->refundTransaction($transactionId, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->refundTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| Identifies the primary transaction |
 **payload** | [**\FirstData\ApiClient\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |

### Return type

[**\FirstData\ApiClient\Model\TransactionResponse**](../Model/TransactionResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# voidTransaction
> \FirstData\ApiClient\Model\TransactionResponse voidTransaction($transactionId)

Void transaction

This is used to reverse a financial transaction such as Postauth, Return, Preauth, or Sale.

### Example
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

// string | Developer App API secret. This is used for API authentication. Secrets are provided at the time of merchant boarding.
$apiSecret = 'apiSecret_example';

// string | Developer App API key. This is used for API authentication. Keys are provided at the time of merchant boarding.
$apiKey = 'apiKey_example';

$apiInstance = FirstData\ApiClient\Api\PaymentApi::create($apiSecret, $apiKey);

// string | Identifies the primary transaction
$transactionId = 'transactionId_example';

try {
    $result = $apiInstance->voidTransaction($transactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->voidTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| Identifies the primary transaction |

### Return type

[**\FirstData\ApiClient\Model\TransactionResponse**](../Model/TransactionResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# createTransaction
> \FirstData\ApiClient\Model\TransactionResponse createTransaction($payload)

Primary transaction creation

Use this to originate a financial transaction, like a sale, authorization, or credit.

### Example
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

// string | Developer App API secret. This is used for API authentication. Secrets are provided at the time of merchant boarding.
$apiSecret = 'apiSecret_example';

// string | Developer App API key. This is used for API authentication. Keys are provided at the time of merchant boarding.
$apiKey = 'apiKey_example';

$apiInstance = FirstData\ApiClient\Api\PaymentApi::create($apiSecret, $apiKey);

// \FirstData\ApiClient\Model\PrimaryTransaction | Primary Transaction request
$payload = new \FirstData\ApiClient\Model\PrimaryTransaction();

try {
    $result = $apiInstance->createTransaction($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\ApiClient\Model\PrimaryTransaction**](../Model/PrimaryTransaction.md)| Primary Transaction request |

### Return type

[**\FirstData\ApiClient\Model\TransactionResponse**](../Model/TransactionResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

