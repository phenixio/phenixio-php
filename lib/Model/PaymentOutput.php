<?php
/**
 * PaymentOutput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Phenixio API Reference
 *
 * # Introduction  The Phenixio API allows you to integrate Lightning Network payments into your application.  ## Just Getting Started?  Start developing your Phenixio integration with our client libraries. We will publish a guide soon: [Development Quickstart](https://github.com/phenixio/sdk)   ## Generating Access Token  API endpoints require token based authentication. You can [Generate Access Token](#post-/token/) with your user credentials. You will recieve an access token in JWT format. Set your request header \"Authorization: Bearer `<YOUR-ACCESS-TOKEN>`\"   ## Curl Example  Test your access token with Curl request. Replace `<YOUR-ACCESS-TOKEN>` with your actual token.   ```bash $ curl -I -X GET --http1.1 -H \"Content-Type: application/json\" -H \"Authorization: Bearer <YOUR-ACCESS-TOKEN>\"  https://sandbox.phenixio.com/api/charges/ ```
 *
 * The version of the OpenAPI document: v0.4.2-beta [testnet]
 * Contact: support@phenixio.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentOutput Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentOutput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'object' => 'string',
        'account' => 'int',
        'amount' => 'int',
        'amount_settled' => 'int',
        'value' => 'float',
        'settled' => 'bool',
        'currency' => 'string',
        'description' => 'string',
        'timestamp' => '\DateTime',
        'payment_request' => 'string',
        'webpay_code' => 'string',
        'lninvoice' => '\OpenAPI\Client\Model\LightningInvoiceOutput',
        'metadata' => '\OpenAPI\Client\Model\MetadataInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'object' => null,
        'account' => null,
        'amount' => null,
        'amount_settled' => null,
        'value' => 'decimal',
        'settled' => null,
        'currency' => null,
        'description' => null,
        'timestamp' => 'date-time',
        'payment_request' => null,
        'webpay_code' => null,
        'lninvoice' => null,
        'metadata' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uuid' => 'uuid',
        'object' => 'object',
        'account' => 'account',
        'amount' => 'amount',
        'amount_settled' => 'amount_settled',
        'value' => 'value',
        'settled' => 'settled',
        'currency' => 'currency',
        'description' => 'description',
        'timestamp' => 'timestamp',
        'payment_request' => 'payment_request',
        'webpay_code' => 'webpay_code',
        'lninvoice' => 'lninvoice',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'object' => 'setObject',
        'account' => 'setAccount',
        'amount' => 'setAmount',
        'amount_settled' => 'setAmountSettled',
        'value' => 'setValue',
        'settled' => 'setSettled',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'timestamp' => 'setTimestamp',
        'payment_request' => 'setPaymentRequest',
        'webpay_code' => 'setWebpayCode',
        'lninvoice' => 'setLninvoice',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'object' => 'getObject',
        'account' => 'getAccount',
        'amount' => 'getAmount',
        'amount_settled' => 'getAmountSettled',
        'value' => 'getValue',
        'settled' => 'getSettled',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'timestamp' => 'getTimestamp',
        'payment_request' => 'getPaymentRequest',
        'webpay_code' => 'getWebpayCode',
        'lninvoice' => 'getLninvoice',
        'metadata' => 'getMetadata'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const CURRENCY_USD = 'usd';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_USD,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['object'] = $data['object'] ?? 'charge';
        $this->container['account'] = $data['account'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['amount_settled'] = $data['amount_settled'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['settled'] = $data['settled'] ?? false;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['payment_request'] = $data['payment_request'] ?? null;
        $this->container['webpay_code'] = $data['webpay_code'] ?? null;
        $this->container['lninvoice'] = $data['lninvoice'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['object']) && (mb_strlen($this->container['object']) < 1)) {
            $invalidProperties[] = "invalid value for 'object', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency', must be one of '%s'",
                $this->container['currency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 60)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['payment_request'] === null) {
            $invalidProperties[] = "'payment_request' can't be null";
        }
        if ((mb_strlen($this->container['payment_request']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_request', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['webpay_code']) && (mb_strlen($this->container['webpay_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'webpay_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['webpay_code']) && (mb_strlen($this->container['webpay_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'webpay_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['lninvoice'] === null) {
            $invalidProperties[] = "'lninvoice' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object object
     *
     * @return self
     */
    public function setObject($object)
    {

        if (!is_null($object) && (mb_strlen($object) < 1)) {
            throw new \InvalidArgumentException('invalid length for $object when calling PaymentOutput., must be bigger than or equal to 1.');
        }

        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets account
     *
     * @return int
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param int $account Receiver of this payment
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Bitcoin amount in Satoshi units
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentOutput., must be smaller than or equal to 2147483647.');
        }
        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentOutput., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_settled
     *
     * @return int|null
     */
    public function getAmountSettled()
    {
        return $this->container['amount_settled'];
    }

    /**
     * Sets amount_settled
     *
     * @param int|null $amount_settled amount_settled
     *
     * @return self
     */
    public function setAmountSettled($amount_settled)
    {
        $this->container['amount_settled'] = $amount_settled;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value Value of the payment at the time of creation. (Example: 3.14 USD)
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets settled
     *
     * @return bool|null
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     *
     * @param bool|null $settled settled
     *
     * @return self
     */
    public function setSettled($settled)
    {
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Choose the currency of value field (Default: USD)
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency', must be one of '%s'",
                    $currency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Display the description of payment
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 60)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PaymentOutput., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PaymentOutput., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp When this payment is created. (UTC Timestamp)
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets payment_request
     *
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->container['payment_request'];
    }

    /**
     * Sets payment_request
     *
     * @param string $payment_request payment_request
     *
     * @return self
     */
    public function setPaymentRequest($payment_request)
    {

        if ((mb_strlen($payment_request) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_request when calling PaymentOutput., must be bigger than or equal to 1.');
        }

        $this->container['payment_request'] = $payment_request;

        return $this;
    }

    /**
     * Gets webpay_code
     *
     * @return string|null
     */
    public function getWebpayCode()
    {
        return $this->container['webpay_code'];
    }

    /**
     * Sets webpay_code
     *
     * @param string|null $webpay_code Code for using web payment UI. Check webpay documentation for details.
     *
     * @return self
     */
    public function setWebpayCode($webpay_code)
    {
        if (!is_null($webpay_code) && (mb_strlen($webpay_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $webpay_code when calling PaymentOutput., must be smaller than or equal to 10.');
        }
        if (!is_null($webpay_code) && (mb_strlen($webpay_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $webpay_code when calling PaymentOutput., must be bigger than or equal to 1.');
        }

        $this->container['webpay_code'] = $webpay_code;

        return $this;
    }

    /**
     * Gets lninvoice
     *
     * @return \OpenAPI\Client\Model\LightningInvoiceOutput
     */
    public function getLninvoice()
    {
        return $this->container['lninvoice'];
    }

    /**
     * Sets lninvoice
     *
     * @param \OpenAPI\Client\Model\LightningInvoiceOutput $lninvoice lninvoice
     *
     * @return self
     */
    public function setLninvoice($lninvoice)
    {
        $this->container['lninvoice'] = $lninvoice;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \OpenAPI\Client\Model\MetadataInput|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \OpenAPI\Client\Model\MetadataInput|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


