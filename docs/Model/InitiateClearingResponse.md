# # InitiateClearingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking. | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support team. | [optional] 
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) |  | [optional] 
**requestStatus** | **string** | Request status. If it is anything other than &#39;SUCCESS&#39;, please refer to 400s HTTP error codes or decline. See Error object for details. | [optional] 
**clearingDetails** | [**\FirstData\FirstApi\Client\Model\ClearingDetails**](ClearingDetails.md) |  | [optional] 
**endpointResponses** | [**\FirstData\FirstApi\Client\Model\EndpointResponse[]**](EndpointResponse.md) | The array holds response information of the involved endpoints. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


