# CarRental

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreementNumber** | **string** | The car rental agreement number. | [optional] 
**renterName** | **string** | The name of the person renting the car. | [optional] 
**returnCity** | **string** | The city where the rental ends and the car is returned. | [optional] 
**returnDate** | [**\DateTime**](\DateTime.md) | The date the car rental ends and the car is returned. | [optional] 
**pickupDate** | [**\DateTime**](\DateTime.md) | The date the car rental begins. | [optional] 
**rentalClassId** | **string** | The classification of the rental car. | [optional] 
**extraCharges** | [**\FirstData\FirstApi\Client\Model\CarRentalExtraCharges[]**](CarRentalExtraCharges.md) | Array containing information about charges other than the rental rate. | [optional] 
**noShowIndicator** | **bool** | Indicates if the transaction is related to a no-show charge. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


