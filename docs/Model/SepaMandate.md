# # SepaMandate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Existing mandate reference, managed by merchant. Must match [A-Za-z0-9:?/+(),. -]{1,35} and not start with two slashes (\&quot;//\&quot;). Also known as the mandate ID. | 
**url** | **string** | Valid URL pointing to the SEPA mandate (PDF / HTML format recommended). | 
**signatureDate** | [**\DateTime**](\DateTime.md) | Date of mandate signature. | 
**type** | **string** | Sequence type of the direct debit. This defaults to &#39;SINGLE&#39; if not provided. | [default to 'SINGLE']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


