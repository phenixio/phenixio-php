# # PaymentOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** |  | [optional] [readonly]
**object** | **string** |  | [optional] [default to 'charge']
**account** | **int** | Receiver of this payment |
**amount** | **int** | Bitcoin amount in Satoshi units |
**amount_settled** | **int** |  | [optional]
**value** | **float** | Value of the payment at the time of creation. (Example: 3.14 USD) |
**settled** | **bool** |  | [optional] [default to false]
**currency** | **string** | Choose the currency of value field (Default: USD) | [optional]
**description** | **string** | Display the description of payment |
**timestamp** | **\DateTime** | When this payment is created. (UTC Timestamp) | [optional] [readonly]
**payment_request** | **string** |  |
**webpay_code** | **string** | Code for using web payment UI. Check webpay documentation for details. | [optional]
**lninvoice** | [**\OpenAPI\Client\Model\LightningInvoiceOutput**](LightningInvoiceOutput.md) |  |
**metadata** | [**\OpenAPI\Client\Model\MetadataInput**](MetadataInput.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
