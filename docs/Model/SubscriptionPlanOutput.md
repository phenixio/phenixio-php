# # SubscriptionPlanOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**created** | **\DateTime** |  | [optional] [readonly]
**modified** | **\DateTime** |  | [optional] [readonly]
**interval** | **string** | Set a subscription payment interval. | [optional]
**price** | **float** | Set a price for your subscription. | [optional]
**currency** | **string** |  | [optional]
**collection_method** | **string** | Collect payments by sending Lightning payment request to customer email. | [optional]
**webhook_url** | **string** | Set the webhook endpoint to get notified on your application backend. | [optional]
**application_url** | **string** | Application associated with this subscription plan. Customers are redirected after successful payments. | [optional]
**name** | **string** | The name of your subscription. It will appear in the email we send to your customers. | [optional]
**description** | **string** | Short description of your subscription product/service. It will appear in the email we send to your customers. | [optional]
**grace_period** | **int** | Set how many days a subscription gets canceled for over due payments. | [optional]
**account** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
