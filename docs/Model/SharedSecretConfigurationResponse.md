# # SharedSecretConfigurationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking. | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support team. | [optional] 
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) |  | [optional] 
**storeId** | **string** | An optional outlet ID for clients that support multiple stores in the same developer app. | [optional] 
**sharedSecret** | **string** | Shared secret/password for Connect. | [optional] 
**responseMessage** | **string** | The message/status received after updating shared secret service config. | [optional] 
**responseTimestamp** | **int** | Response timestamp. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


