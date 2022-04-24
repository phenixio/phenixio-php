<?php
/**
 * SettleEventOutput
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
 * SettleEventOutput Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SettleEventOutput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettleEventOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'settle_date' => 'int',
        'amt_paid_sat' => 'int',
        'settled' => 'bool',
        'state' => 'string',
        'r_preimage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'settle_date' => null,
        'amt_paid_sat' => null,
        'settled' => null,
        'state' => null,
        'r_preimage' => null
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
        'settle_date' => 'settle_date',
        'amt_paid_sat' => 'amt_paid_sat',
        'settled' => 'settled',
        'state' => 'state',
        'r_preimage' => 'r_preimage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'settle_date' => 'setSettleDate',
        'amt_paid_sat' => 'setAmtPaidSat',
        'settled' => 'setSettled',
        'state' => 'setState',
        'r_preimage' => 'setRPreimage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'settle_date' => 'getSettleDate',
        'amt_paid_sat' => 'getAmtPaidSat',
        'settled' => 'getSettled',
        'state' => 'getState',
        'r_preimage' => 'getRPreimage'
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
        $this->container['settle_date'] = $data['settle_date'] ?? null;
        $this->container['amt_paid_sat'] = $data['amt_paid_sat'] ?? null;
        $this->container['settled'] = $data['settled'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['r_preimage'] = $data['r_preimage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['settle_date'] === null) {
            $invalidProperties[] = "'settle_date' can't be null";
        }
        if (($this->container['settle_date'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'settle_date', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['settle_date'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'settle_date', must be bigger than or equal to -2147483648.";
        }

        if ($this->container['amt_paid_sat'] === null) {
            $invalidProperties[] = "'amt_paid_sat' can't be null";
        }
        if (($this->container['amt_paid_sat'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'amt_paid_sat', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['amt_paid_sat'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'amt_paid_sat', must be bigger than or equal to -2147483648.";
        }

        if ($this->container['settled'] === null) {
            $invalidProperties[] = "'settled' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ((mb_strlen($this->container['state']) > 15)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['state']) < 1)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['r_preimage'] === null) {
            $invalidProperties[] = "'r_preimage' can't be null";
        }
        if ((mb_strlen($this->container['r_preimage']) > 200)) {
            $invalidProperties[] = "invalid value for 'r_preimage', the character length must be smaller than or equal to 200.";
        }

        if ((mb_strlen($this->container['r_preimage']) < 1)) {
            $invalidProperties[] = "invalid value for 'r_preimage', the character length must be bigger than or equal to 1.";
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
     * Gets settle_date
     *
     * @return int
     */
    public function getSettleDate()
    {
        return $this->container['settle_date'];
    }

    /**
     * Sets settle_date
     *
     * @param int $settle_date When this invoice was settled (UTC Timestamp)
     *
     * @return self
     */
    public function setSettleDate($settle_date)
    {

        if (($settle_date > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $settle_date when calling SettleEventOutput., must be smaller than or equal to 2147483647.');
        }
        if (($settle_date < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $settle_date when calling SettleEventOutput., must be bigger than or equal to -2147483648.');
        }

        $this->container['settle_date'] = $settle_date;

        return $this;
    }

    /**
     * Gets amt_paid_sat
     *
     * @return int
     */
    public function getAmtPaidSat()
    {
        return $this->container['amt_paid_sat'];
    }

    /**
     * Sets amt_paid_sat
     *
     * @param int $amt_paid_sat The amount that was ultimately accepted for this invoice, in satoshis.
     *
     * @return self
     */
    public function setAmtPaidSat($amt_paid_sat)
    {

        if (($amt_paid_sat > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $amt_paid_sat when calling SettleEventOutput., must be smaller than or equal to 2147483647.');
        }
        if (($amt_paid_sat < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $amt_paid_sat when calling SettleEventOutput., must be bigger than or equal to -2147483648.');
        }

        $this->container['amt_paid_sat'] = $amt_paid_sat;

        return $this;
    }

    /**
     * Gets settled
     *
     * @return bool
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     *
     * @param bool $settled Whether this invoice has been fulfilled
     *
     * @return self
     */
    public function setSettled($settled)
    {
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state the invoice is in.
     *
     * @return self
     */
    public function setState($state)
    {
        if ((mb_strlen($state) > 15)) {
            throw new \InvalidArgumentException('invalid length for $state when calling SettleEventOutput., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($state) < 1)) {
            throw new \InvalidArgumentException('invalid length for $state when calling SettleEventOutput., must be bigger than or equal to 1.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets r_preimage
     *
     * @return string
     */
    public function getRPreimage()
    {
        return $this->container['r_preimage'];
    }

    /**
     * Sets r_preimage
     *
     * @param string $r_preimage Base64 encoded preimage (32 byte hex) which will allow settling an incoming HTLC payable to this preimage.
     *
     * @return self
     */
    public function setRPreimage($r_preimage)
    {
        if ((mb_strlen($r_preimage) > 200)) {
            throw new \InvalidArgumentException('invalid length for $r_preimage when calling SettleEventOutput., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($r_preimage) < 1)) {
            throw new \InvalidArgumentException('invalid length for $r_preimage when calling SettleEventOutput., must be bigger than or equal to 1.');
        }

        $this->container['r_preimage'] = $r_preimage;

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

