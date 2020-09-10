# # Airline

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**passengerName** | **string** | The passenger name associated with the transaction. | [optional] 
**ticketNumber** | **string** | The airline ticket number associated with the transaction. | [optional] 
**issuingCarrier** | **string** | The carrier that issued the ticket. | [optional] 
**carrierName** | **string** | The carrier associated with the transaction. | [optional] 
**travelAgencyIataCode** | **string** | The IATA code associated with the travel agency. | [optional] 
**travelAgencyName** | **string** | The business name of the travel agency. | [optional] 
**airlinePlanNumber** | **string** | The airline plan number associated with the transaction. | [optional] 
**airlineInvoiceNumber** | **string** | The invoice number used by the airline. | [optional] 
**reservationSystem** | **string** | The reservation system used to create the ticket. | [optional] 
**restricted** | **bool** | If the transaction is associated with a restricted class fare. | [optional] 
**travelRoute** | [**\FirstData\FirstApi\Client\Model\AirlineTravelRoute[]**](AirlineTravelRoute.md) | Array containing up to 4 items that describe the route associated with the transaction. | [optional] 
**relatedTicketNumber** | **string** | The number of any other tickets associated with the transaction ticket. | [optional] 
**ancillaryServiceCategory** | [**\FirstData\FirstApi\Client\Model\AirlineAncillaryServiceCategory[]**](AirlineAncillaryServiceCategory.md) | Identify the purchase of ancillary goods or services with a false value. If this element is not provided, the transaction is assumed to be a purchase of an airline ticket. | [optional] 
**ticketPurchase** | **bool** | Identifies if the transaction is a ticket purchase. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


