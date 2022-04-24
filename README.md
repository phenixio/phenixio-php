# phenixio


# Introduction

The Phenixio API allows you to integrate Lightning Network payments into your application.

## Just Getting Started?

Start developing your Phenixio integration with our client libraries. We will publish a guide soon: [Development Quickstart](https://github.com/phenixio/sdk)


## Generating Access Token

API endpoints require token based authentication. You can [Generate Access Token](#post-/token/) with your user credentials. You will recieve an access token in JWT format. Set your request header \"Authorization: Bearer `<YOUR-ACCESS-TOKEN>`\"


## Curl Example

Test your access token with Curl request. Replace `<YOUR-ACCESS-TOKEN>` with your actual token.


```bash
$ curl -I -X GET --http1.1 -H \"Content-Type: application/json\" -H \"Authorization: Bearer <YOUR-ACCESS-TOKEN>\"  https://sandbox.phenixio.com/api/charges/
```





## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/phenixio/phenixio-php.git"
    }
  ],
  "require": {
    "phenixio/phenixio-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/phenixio/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://testnet.phenixio.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthTokensApi* | [**authTokensCreate**](docs/Api/AuthTokensApi.md#authtokenscreate) | **POST** /auth-tokens/ | Access Token
*AuthTokensApi* | [**authTokensRefreshCreate**](docs/Api/AuthTokensApi.md#authtokensrefreshcreate) | **POST** /auth-tokens/refresh/ | Refresh Token
*AuthTokensApi* | [**authTokensVerifyCreate**](docs/Api/AuthTokensApi.md#authtokensverifycreate) | **POST** /auth-tokens/verify/ | Verify Token
*PaymentsApi* | [**paymentsCreate**](docs/Api/PaymentsApi.md#paymentscreate) | **POST** /payments/ | New Payment Request
*PaymentsApi* | [**paymentsList**](docs/Api/PaymentsApi.md#paymentslist) | **GET** /payments/ | Received Payments
*PaymentsApi* | [**paymentsPendingList**](docs/Api/PaymentsApi.md#paymentspendinglist) | **GET** /payments/pending/ | Pending Payments
*PaymentsApi* | [**paymentsRead**](docs/Api/PaymentsApi.md#paymentsread) | **GET** /payments/{uuid}/ | Payment Info
*PaymentsApi* | [**paymentsSumRead**](docs/Api/PaymentsApi.md#paymentssumread) | **GET** /payments/sum/ | 
*SubscriptionsApi* | [**subscriptionsCreate**](docs/Api/SubscriptionsApi.md#subscriptionscreate) | **POST** /subscriptions/ | NewSubscription
*SubscriptionsApi* | [**subscriptionsList**](docs/Api/SubscriptionsApi.md#subscriptionslist) | **GET** /subscriptions/ | ListSubscriptions
*SubscriptionsApi* | [**subscriptionsPlansCreate**](docs/Api/SubscriptionsApi.md#subscriptionsplanscreate) | **POST** /subscriptions/plans/ | NewSubscriptionPlan
*SubscriptionsApi* | [**subscriptionsPlansList**](docs/Api/SubscriptionsApi.md#subscriptionsplanslist) | **GET** /subscriptions/plans/ | ListSubscriptionPlans
*SubscriptionsApi* | [**subscriptionsPlansRead**](docs/Api/SubscriptionsApi.md#subscriptionsplansread) | **GET** /subscriptions/plans/{id}/ | SubscriptionPlanStatus
*SubscriptionsApi* | [**subscriptionsRead**](docs/Api/SubscriptionsApi.md#subscriptionsread) | **GET** /subscriptions/{id} | SubscriptionStatus
*WithdrawalsApi* | [**withdrawalsCreate**](docs/Api/WithdrawalsApi.md#withdrawalscreate) | **POST** /withdrawals/ | On-Chain Withdrawals

## Models

- [LightningInvoiceOutput](docs/Model/LightningInvoiceOutput.md)
- [MetadataInput](docs/Model/MetadataInput.md)
- [Output](docs/Model/Output.md)
- [PaidChargesOutput](docs/Model/PaidChargesOutput.md)
- [PaymentInput](docs/Model/PaymentInput.md)
- [PaymentOutput](docs/Model/PaymentOutput.md)
- [SettleEventOutput](docs/Model/SettleEventOutput.md)
- [SubscriptionInput](docs/Model/SubscriptionInput.md)
- [SubscriptionOutput](docs/Model/SubscriptionOutput.md)
- [SubscriptionPlanInput](docs/Model/SubscriptionPlanInput.md)
- [SubscriptionPlanOutput](docs/Model/SubscriptionPlanOutput.md)
- [TokenObtainPair](docs/Model/TokenObtainPair.md)
- [TokenPair](docs/Model/TokenPair.md)
- [TokenRefresh](docs/Model/TokenRefresh.md)
- [TokenVerify](docs/Model/TokenVerify.md)
- [WithdrawalRequest](docs/Model/WithdrawalRequest.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@phenixio.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v0.4.2-beta [testnet]`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
