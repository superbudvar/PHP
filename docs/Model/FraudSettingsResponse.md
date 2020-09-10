# # FraudSettingsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientRequestId** | **string** | Echoes back the value in the request header for tracking. | [optional] 
**apiTraceId** | **string** | Request identifier in API, can be used to request logs from the support team. | [optional] 
**responseType** | [**\FirstData\FirstApi\Client\Model\ResponseType**](ResponseType.md) |  | [optional] 
**storeId** | **string** | The outlet ID. | [optional] 
**blockedCardNumbers** | [**\FirstData\FirstApi\Client\Model\BlockedCardNumber[]**](BlockedCardNumber.md) | List of blocked card numbers. | [optional] 
**blockedNames** | **string[]** | List of blocked fraud names. | [optional] 
**blockedDomainNames** | **string[]** | List of blocked fraud domain names. | [optional] 
**blockedIpOrClassCAddresses** | **string[]** | List of blocked fraud IP address/Class C. | [optional] 
**maximumPurchaseAmount** | [**\FirstData\FirstApi\Client\Model\MaximumPurchaseAmount[]**](MaximumPurchaseAmount.md) | Maximum purchase amount limit. | [optional] 
**lockoutTime** | [**\FirstData\FirstApi\Client\Model\LockoutTime**](LockoutTime.md) |  | [optional] 
**countryProfile** | **string** | Country profile. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


