# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the customer, if registered. This field is required if the parent object is present. | 
**startDate** | **string** | The timestamp of the customers registration in the merchants platform. Format is CCYY-MM-DD. | [optional] 
**firstName** | **string** | Customers first name. | [optional] 
**lastName** | **string** | Customers last name. | [optional] 
**middleName** | **string** | Customers middle name. | [optional] 
**email** | **string** | Customers email address. | [optional] 
**sessionId** | **string** | The unique ID of the current login session. Must be unique for the customer. | [optional] 
**username** | **string** | The username of this customer in the merchants system. This field should contain customer-supplied data if available instead of a generated ID. This field can contain the clients email address if it is also used for authentication purposes. | [optional] 
**gender** | **string** | The customers gender. Do not set this property if the customer does not specify a gender. | [optional] 
**dateOfBirth** | **string** | The customers year of birth. Format is CCYY. | [optional] 
**address** | [**\FirstData\FirstApi\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional] 
**userDefined** | [**object**](.md) | A JSON object that can carry any additional information about the customer that might be helpful for fraud detection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


