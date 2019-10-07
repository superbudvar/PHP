# Merchant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mcc** | **string** | The 4-digit Merchant Category Code. The merchant might be associated with multiple MCCs. In that case the MCC provided here will be the one that better describes the current transaction. | [optional] 
**merchantUniqueId** | **string** | The unique ID of this merchant. Must be unique for the entire system (not just within a specific industry). | 
**location** | [**\FirstData\FirstApi\Client\Model\Location**](Location.md) |  | [optional] 
**userDefined** | [**object**](.md) | A JSON object that can carry any additional information about the merchant that might be helpful for fraud detection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


