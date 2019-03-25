# PaymentUrlResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestStatus** | **string** | Request status. If it is anything other than &#39;SUCCESS&#39;, please refer to 400s HTTP error codes or decline. See Error object for details. | [optional] 
**orderId** | **string** | Client Order ID if supplied by client, otherwise the Order ID. | [optional] 
**paymentUrl** | **string** | URL for embedded payment link | [optional] 
**transactionId** | **string** | ID code from the transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


