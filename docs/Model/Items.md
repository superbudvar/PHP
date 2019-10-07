# Items

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**networkType** | **string** | Defines the type of network associated with the device. | 
**ip** | **string** | The IPv4 or IPv6 address of the device if the network assigned one. | [optional] 
**phoneNumber** | **string** | The devices primary phone number. This value should be supplied directly without any transformation (e.g. removal of spaces, hyphens or parentheses). If this data is available in segregated fields, it should be concatenated using a blank space (\&quot; \&quot;) as a separator. | [optional] 
**carrierName** | **string** | The network carrier name. | [optional] 
**mobileCountryCode** | **string** | The Mobile Country Code (MCC) as described in the ITUs E.212 specification. | [optional] 
**mobileNetworkCode** | **string** | The Mobile Network Code (MNC) as described in the ITUs E.212 specification. | [optional] 
**subscriptionIdentificationNumber** | **string** | The Mobile Subscription Identification Number code (MSIN) as described in the ITUs E.212 specification. | [optional] 
**locationAreaCode** | **string** | The Location Area Code (LAC) is a 16-bit identifier for a region that is covered by a set of network antennas. | [optional] 
**cellId** | **string** | The Cell ID (CID) is identifier for a specific Base Transceiver Station (BTS) within a specific Location Area Code (LAC). | [optional] 
**standard** | **string** | An identifier of the network standard used. | [optional] 
**mac** | **string** | The MAC address of the device that is connected to the Wi-Fi network. | [optional] 
**ssid** | **string** | The Wi-Fi networks Service Set Identifier (SSID). | [optional] 
**bssid** | **string** | The Wi-Fi networks Basic Service Set Identifier (BSSID). | [optional] 
**userDefined** | [**object**](.md) | A JSON object that can carry any additional information about the network that might be helpful for fraud detection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


