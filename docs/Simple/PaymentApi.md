# FirstData\FirstApi\Client\Simple\PaymentApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**performPaymentPostAuthorisation**](PaymentApi.md#performPaymentPostAuthorisation) | **POST** /v1/payments/{transaction-id}/postauth | Capture/complete a transaction.
[**primaryPaymentTransaction**](PaymentApi.md#primaryPaymentTransaction) | **POST** /v1/payments | Generate a primary transaction.
[**returnTransaction**](PaymentApi.md#returnTransaction) | **POST** /v1/payments/{transaction-id}/return | Return/refund a transaction.
[**transactionInquiry**](PaymentApi.md#transactionInquiry) | **GET** /v1/payments/{transaction-id} | Retrieve the state of a transaction.
[**voidTransaction**](PaymentApi.md#voidTransaction) | **POST** /v1/payments/{transaction-id}/void | Reverse a previous action on an existing transaction.


# **performPaymentPostAuthorisation**
> \FirstData\FirstApi\Client\Model\TransactionResponse performPaymentPostAuthorisation($transactionId, $payload, $storeId)

Capture/complete a transaction.

Used to capture/complete an existing transaction. Partial postauths are allowed.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
 **payload** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **primaryPaymentTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse primaryPaymentTransaction($payload)

Generate a primary transaction.

Use this to originate a financial transaction, like a sale, preauthorization, or credit.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\FirstApi\Client\Model\PrimaryTransaction**](../Model/PrimaryTransaction.md)| Primary Transaction request |

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse returnTransaction($transactionId, $payload, $storeId = null)

Return/refund a transaction.

Use this to return/refund an existing transaction.  Partial returns are allowed.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
 **payload** | [**\FirstData\FirstApi\Client\Model\SecondaryTransaction**](../Model/SecondaryTransaction.md)|  |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionInquiry**
> \FirstData\FirstApi\Client\Model\TransactionResponse transactionInquiry($transactionId, $storeId = null)

Retrieve the state of a transaction.

Use this query to get the current state of an existing transaction.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidTransaction**
> \FirstData\FirstApi\Client\Model\TransactionResponse voidTransaction($transactionId, $storeId = null)

Reverse a previous action on an existing transaction.

Use this to reverse a postauth/completion, credit, preauth, or sale.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionId** | **string**| Gateway transaction identifier as returned in the parameter ipgTransactionId |
 **storeId** | **string**| An optional outlet ID for clients that support multiple stores in the same developer app | [optional]

### Return type

[**\FirstData\FirstApi\Client\Model\TransactionResponse**](../Model/TransactionResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

