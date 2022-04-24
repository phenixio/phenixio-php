# OpenAPI\Client\AuthTokensApi

All URIs are relative to https://testnet.phenixio.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authTokensCreate()**](AuthTokensApi.md#authTokensCreate) | **POST** /auth-tokens/ | Access Token
[**authTokensRefreshCreate()**](AuthTokensApi.md#authTokensRefreshCreate) | **POST** /auth-tokens/refresh/ | Refresh Token
[**authTokensVerifyCreate()**](AuthTokensApi.md#authTokensVerifyCreate) | **POST** /auth-tokens/verify/ | Verify Token


## `authTokensCreate()`

```php
authTokensCreate($data): \OpenAPI\Client\Model\TokenPair
```

Access Token

Takes a set of user credentials and returns an access and refresh JSON web token pair to prove the authentication of those credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AuthTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\TokenObtainPair(); // \OpenAPI\Client\Model\TokenObtainPair

try {
    $result = $apiInstance->authTokensCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthTokensApi->authTokensCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\TokenObtainPair**](../Model/TokenObtainPair.md)|  |

### Return type

[**\OpenAPI\Client\Model\TokenPair**](../Model/TokenPair.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authTokensRefreshCreate()`

```php
authTokensRefreshCreate($data): \OpenAPI\Client\Model\TokenRefresh
```

Refresh Token

Takes a refresh type JSON web token and returns an access type JSON web token if the refresh token is valid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AuthTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\TokenRefresh(); // \OpenAPI\Client\Model\TokenRefresh

try {
    $result = $apiInstance->authTokensRefreshCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthTokensApi->authTokensRefreshCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\TokenRefresh**](../Model/TokenRefresh.md)|  |

### Return type

[**\OpenAPI\Client\Model\TokenRefresh**](../Model/TokenRefresh.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authTokensVerifyCreate()`

```php
authTokensVerifyCreate($data): \OpenAPI\Client\Model\TokenVerify
```

Verify Token

Takes a token and indicates if it is valid. This view provides no information about a token's fitness for a particular use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AuthTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\TokenVerify(); // \OpenAPI\Client\Model\TokenVerify

try {
    $result = $apiInstance->authTokensVerifyCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthTokensApi->authTokensVerifyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\TokenVerify**](../Model/TokenVerify.md)|  |

### Return type

[**\OpenAPI\Client\Model\TokenVerify**](../Model/TokenVerify.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
