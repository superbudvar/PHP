# FirstData\FirstApi\Client\Simple\AuthenticationApi

All URIs are relative to *https://cert.api.firstdata.com/gateway*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccessToken**](AuthenticationApi.md#getAccessToken) | **POST** /v1/authentication/access-tokens | Generate an access token for user authentication.


# **getAccessToken**
> \FirstData\FirstApi\Client\Model\AccessTokenResponse getAccessToken()

Generate an access token for user authentication.

This is the access token generation call for authorizing subsequent financial transactions. A valid access token is required for web client requests.

### Return type

[**\FirstData\FirstApi\Client\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)


[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

