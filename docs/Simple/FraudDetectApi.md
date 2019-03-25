# FirstData\FirstApi\Client\Simple\FraudDetectApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**scoreOnly**](FraudDetectApi.md#scoreOnly) | **POST** /v1/fraud/score-only | Score a transaction for fraud.


# **scoreOnly**
> \FirstData\FirstApi\Client\Model\ScoreOnlyResponse scoreOnly($payload)

Score a transaction for fraud.

Use this to obtain a fraud score for a transaction.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\FirstData\FirstApi\Client\Model\ScoreOnlyRequest**](../Model/ScoreOnlyRequest.md)|  |

### Return type

[**\FirstData\FirstApi\Client\Model\ScoreOnlyResponse**](../Model/ScoreOnlyResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

