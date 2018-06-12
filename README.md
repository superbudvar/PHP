# First Data Global Payments API (client)
First Data REST API for payment features for 6.2.0 release

This PHP package is largely generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.6 and later

<a name="installation"></a>
## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GBSEcom/PHP.git"
    }
  ],
  "require": {
    "GBSEcom/PHP": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation) and then run the following:

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';


// string | Developer App API secret. This is used for API authentication. Secrets are provided at the time of merchant boarding.
$apiSecret = 'apiSecret_example';

// string | Developer App API key. This is used for API authentication. Keys are provided at the time of merchant boarding.
$apiKey = 'apiKey_example';

$apiInstance = FirstData\ApiClient\Api\PaymentApi::create($apiSecret, $apiKey);

// string | Identifies the primary transaction
$transactionId = 'transactionId_example';

// \FirstData\ApiClient\Model\SecondaryTransaction
$payload = new \FirstData\ApiClient\Model\SecondaryTransaction();

try {
    $result = $apiInstance->postAuthTransaction($transactionId, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->postAuthTransaction: ', $e->getMessage(), PHP_EOL;
}

```

## Documentation for API Endpoints

All URIs are relative to *https://api.payeezy.com/globalApi/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PaymentApi* | [**postAuthTransaction**](docs/Api/PaymentApi.md#postAuthTransaction) | **POST** /payments/{transaction-id}/postauth | Postauth transaction
*PaymentApi* | [**refundTransaction**](docs/Api/PaymentApi.md#refundTransaction) | **POST** /payments/{transaction-id}/return | Return/Refund transaction
*PaymentApi* | [**voidTransaction**](docs/Api/PaymentApi.md#voidTransaction) | **POST** /payments/{transaction-id}/void | Void transaction
*PaymentApi* | [**createTransaction**](docs/Api/PaymentApi.md#createTransaction) | **POST** /payments | Primary transaction creation


## Documentation For Models

 - [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
 - [Address](docs/Model/Address.md)
 - [Airline](docs/Model/Airline.md)
 - [AirlineAncillaryServiceCategory](docs/Model/AirlineAncillaryServiceCategory.md)
 - [AirlineTravelRoute](docs/Model/AirlineTravelRoute.md)
 - [Amount](docs/Model/Amount.md)
 - [AmountComponents](docs/Model/AmountComponents.md)
 - [ApplePay](docs/Model/ApplePay.md)
 - [ApplePayHeader](docs/Model/ApplePayHeader.md)
 - [AuthenticationResponseVerification](docs/Model/AuthenticationResponseVerification.md)
 - [AuthenticationResult](docs/Model/AuthenticationResult.md)
 - [AuthenticationResultApplePay](docs/Model/AuthenticationResultApplePay.md)
 - [AuthenticationResultSecure3d](docs/Model/AuthenticationResultSecure3d.md)
 - [BasketItem](docs/Model/BasketItem.md)
 - [Billing](docs/Model/Billing.md)
 - [CarRental](docs/Model/CarRental.md)
 - [CarRentalExtraCharges](docs/Model/CarRentalExtraCharges.md)
 - [Certificate](docs/Model/Certificate.md)
 - [CertificateCreationRequest](docs/Model/CertificateCreationRequest.md)
 - [CertificateCreationResponse](docs/Model/CertificateCreationResponse.md)
 - [CertificateInquiryResponse](docs/Model/CertificateInquiryResponse.md)
 - [Contact](docs/Model/Contact.md)
 - [Error](docs/Model/Error.md)
 - [ErrorDetails](docs/Model/ErrorDetails.md)
 - [Expiration](docs/Model/Expiration.md)
 - [IndustrySpecificExtensions](docs/Model/IndustrySpecificExtensions.md)
 - [Lodging](docs/Model/Lodging.md)
 - [LodgingExtraCharges](docs/Model/LodgingExtraCharges.md)
 - [Order](docs/Model/Order.md)
 - [PaymentCard](docs/Model/PaymentCard.md)
 - [PaymentCardAuthenticationRequest](docs/Model/PaymentCardAuthenticationRequest.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [Permissions](docs/Model/Permissions.md)
 - [PrimaryTransaction](docs/Model/PrimaryTransaction.md)
 - [PrimaryTransactionAdditionalDetails](docs/Model/PrimaryTransactionAdditionalDetails.md)
 - [SecondaryTransaction](docs/Model/SecondaryTransaction.md)
 - [SepaDirectDebit](docs/Model/SepaDirectDebit.md)
 - [SepaMandate](docs/Model/SepaMandate.md)
 - [Shipping](docs/Model/Shipping.md)
 - [SplitShipment](docs/Model/SplitShipment.md)
 - [TransactionResponse](docs/Model/TransactionResponse.md)
 - [TransactionResponseAuthenticationRedirect](docs/Model/TransactionResponseAuthenticationRedirect.md)
 - [TransactionResponseAuthenticationRedirectParams](docs/Model/TransactionResponseAuthenticationRedirectParams.md)
 - [TransactionResponseAvsResponse](docs/Model/TransactionResponseAvsResponse.md)
 - [WalletDecryptionResponse](docs/Model/WalletDecryptionResponse.md)
 - [WalletDecryptionResponseDecryptedData](docs/Model/WalletDecryptionResponseDecryptedData.md)
