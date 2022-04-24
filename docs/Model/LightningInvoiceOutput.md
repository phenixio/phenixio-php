# # LightningInvoiceOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network** | **string** | Lightning Network version (testnet/mainnet) | [optional]
**payment_request** | **string** | A bare-bones invoice for a payment within the Lightning Network. With the details of the invoice, the sender has all the data necessary to send a payment to the recipient. |
**expiry** | **int** | Payment request expiry time in seconds. |
**r_hash** | **string** | Base64 encoded hash of the corresponding invoice preimage |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
