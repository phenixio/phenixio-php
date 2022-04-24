# # SettleEventOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settle_date** | **int** | When this invoice was settled (UTC Timestamp) |
**amt_paid_sat** | **int** | The amount that was ultimately accepted for this invoice, in satoshis. |
**settled** | **bool** | Whether this invoice has been fulfilled |
**state** | **string** | The state the invoice is in. |
**r_preimage** | **string** | Base64 encoded preimage (32 byte hex) which will allow settling an incoming HTLC payable to this preimage. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
