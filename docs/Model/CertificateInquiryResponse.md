# CertificateInquiryResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support | [optional] 
**certificates** | [**\FirstData\ApiClient\Model\Certificate[]**](Certificate.md) |  | [optional] 
**requestStatus** | **string** | Request status. If it&#39;s anything other than &#39;SUCCESS&#39;, please refer to 400s HTTP error codes or decline. See Error object for details. | [optional] 
**error** | [**\FirstData\ApiClient\Model\Error**](Error.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


