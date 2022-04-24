# OpenAPI\Client\WithdrawalsApi

All URIs are relative to https://testnet.phenixio.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**withdrawalsCreate()**](WithdrawalsApi.md#withdrawalsCreate) | **POST** /withdrawals/ | On-Chain Withdrawals


## `withdrawalsCreate()`

```php
withdrawalsCreate($data): \OpenAPI\Client\Model\WithdrawalRequest
```

On-Chain Withdrawals

Request for a withdrawal of your available balances to an onchain wallet address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WithdrawalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\WithdrawalRequest(); // \OpenAPI\Client\Model\WithdrawalRequest

try {
    $result = $apiInstance->withdrawalsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WithdrawalsApi->withdrawalsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\WithdrawalRequest**](../Model/WithdrawalRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WithdrawalRequest**](../Model/WithdrawalRequest.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
