# FirstData\FirstApi\Client\Simple\CurrencyConversionApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExchangeRate**](CurrencyConversionApi.md#getExchangeRate) | **POST** /v1/exchange-rates | Generate dynamic currency conversion transactions


# **getExchangeRate**
> \FirstData\FirstApi\Client\Model\ExchangeRateResponse getExchangeRate($payload)

Generate dynamic currency conversion transactions

Sale, return and lookup exchange rate with dynamic currency conversion option

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\FirstApi\Client\Model\ExchangeRateRequest**](../Model/ExchangeRateRequest.md)| Dynamic currency conversion payload |

### Return type

[**\FirstData\FirstApi\Client\Model\ExchangeRateResponse**](../Model/ExchangeRateResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

