<?php
/**
 * SubscriptionOutput
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
 * SubscriptionOutput Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubscriptionOutput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'customer_email' => 'string',
        'status' => 'string',
        'start_date' => '\DateTime',
        'current_period_start' => '\DateTime',
        'current_period_end' => '\DateTime',
        'canceled_at' => '\DateTime',
        'current_cycle' => 'int',
        'subscription_plan' => 'int',
        'latest_payment' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'modified' => 'date-time',
        'customer_email' => 'email',
        'status' => null,
        'start_date' => 'date-time',
        'current_period_start' => 'date-time',
        'current_period_end' => 'date-time',
        'canceled_at' => 'date-time',
        'current_cycle' => null,
        'subscription_plan' => null,
        'latest_payment' => null
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
        'id' => 'id',
        'created' => 'created',
        'modified' => 'modified',
        'customer_email' => 'customer_email',
        'status' => 'status',
        'start_date' => 'start_date',
        'current_period_start' => 'current_period_start',
        'current_period_end' => 'current_period_end',
        'canceled_at' => 'canceled_at',
        'current_cycle' => 'current_cycle',
        'subscription_plan' => 'subscription_plan',
        'latest_payment' => 'latest_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'customer_email' => 'setCustomerEmail',
        'status' => 'setStatus',
        'start_date' => 'setStartDate',
        'current_period_start' => 'setCurrentPeriodStart',
        'current_period_end' => 'setCurrentPeriodEnd',
        'canceled_at' => 'setCanceledAt',
        'current_cycle' => 'setCurrentCycle',
        'subscription_plan' => 'setSubscriptionPlan',
        'latest_payment' => 'setLatestPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'customer_email' => 'getCustomerEmail',
        'status' => 'getStatus',
        'start_date' => 'getStartDate',
        'current_period_start' => 'getCurrentPeriodStart',
        'current_period_end' => 'getCurrentPeriodEnd',
        'canceled_at' => 'getCanceledAt',
        'current_cycle' => 'getCurrentCycle',
        'subscription_plan' => 'getSubscriptionPlan',
        'latest_payment' => 'getLatestPayment'
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

    const STATUS_SIGNUP = 'SIGNUP';
    const STATUS_PENDING = 'PENDING';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_PASTDUE = 'PASTDUE';
    const STATUS_ENDED = 'ENDED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SIGNUP,
            self::STATUS_PENDING,
            self::STATUS_ACTIVE,
            self::STATUS_CANCELED,
            self::STATUS_PASTDUE,
            self::STATUS_ENDED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['customer_email'] = $data['customer_email'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['current_period_start'] = $data['current_period_start'] ?? null;
        $this->container['current_period_end'] = $data['current_period_end'] ?? null;
        $this->container['canceled_at'] = $data['canceled_at'] ?? null;
        $this->container['current_cycle'] = $data['current_cycle'] ?? null;
        $this->container['subscription_plan'] = $data['subscription_plan'] ?? null;
        $this->container['latest_payment'] = $data['latest_payment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer_email'] === null) {
            $invalidProperties[] = "'customer_email' can't be null";
        }
        if ((mb_strlen($this->container['customer_email']) > 254)) {
            $invalidProperties[] = "invalid value for 'customer_email', the character length must be smaller than or equal to 254.";
        }

        if ((mb_strlen($this->container['customer_email']) < 1)) {
            $invalidProperties[] = "invalid value for 'customer_email', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['current_cycle']) && ($this->container['current_cycle'] > 32767)) {
            $invalidProperties[] = "invalid value for 'current_cycle', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['current_cycle']) && ($this->container['current_cycle'] < 0)) {
            $invalidProperties[] = "invalid value for 'current_cycle', must be bigger than or equal to 0.";
        }

        if ($this->container['subscription_plan'] === null) {
            $invalidProperties[] = "'subscription_plan' can't be null";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime|null $modified modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets customer_email
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     *
     * @param string $customer_email customer_email
     *
     * @return self
     */
    public function setCustomerEmail($customer_email)
    {
        if ((mb_strlen($customer_email) > 254)) {
            throw new \InvalidArgumentException('invalid length for $customer_email when calling SubscriptionOutput., must be smaller than or equal to 254.');
        }
        if ((mb_strlen($customer_email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $customer_email when calling SubscriptionOutput., must be bigger than or equal to 1.');
        }

        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets current_period_start
     *
     * @return \DateTime|null
     */
    public function getCurrentPeriodStart()
    {
        return $this->container['current_period_start'];
    }

    /**
     * Sets current_period_start
     *
     * @param \DateTime|null $current_period_start current_period_start
     *
     * @return self
     */
    public function setCurrentPeriodStart($current_period_start)
    {
        $this->container['current_period_start'] = $current_period_start;

        return $this;
    }

    /**
     * Gets current_period_end
     *
     * @return \DateTime|null
     */
    public function getCurrentPeriodEnd()
    {
        return $this->container['current_period_end'];
    }

    /**
     * Sets current_period_end
     *
     * @param \DateTime|null $current_period_end current_period_end
     *
     * @return self
     */
    public function setCurrentPeriodEnd($current_period_end)
    {
        $this->container['current_period_end'] = $current_period_end;

        return $this;
    }

    /**
     * Gets canceled_at
     *
     * @return \DateTime|null
     */
    public function getCanceledAt()
    {
        return $this->container['canceled_at'];
    }

    /**
     * Sets canceled_at
     *
     * @param \DateTime|null $canceled_at canceled_at
     *
     * @return self
     */
    public function setCanceledAt($canceled_at)
    {
        $this->container['canceled_at'] = $canceled_at;

        return $this;
    }

    /**
     * Gets current_cycle
     *
     * @return int|null
     */
    public function getCurrentCycle()
    {
        return $this->container['current_cycle'];
    }

    /**
     * Sets current_cycle
     *
     * @param int|null $current_cycle current_cycle
     *
     * @return self
     */
    public function setCurrentCycle($current_cycle)
    {

        if (!is_null($current_cycle) && ($current_cycle > 32767)) {
            throw new \InvalidArgumentException('invalid value for $current_cycle when calling SubscriptionOutput., must be smaller than or equal to 32767.');
        }
        if (!is_null($current_cycle) && ($current_cycle < 0)) {
            throw new \InvalidArgumentException('invalid value for $current_cycle when calling SubscriptionOutput., must be bigger than or equal to 0.');
        }

        $this->container['current_cycle'] = $current_cycle;

        return $this;
    }

    /**
     * Gets subscription_plan
     *
     * @return int
     */
    public function getSubscriptionPlan()
    {
        return $this->container['subscription_plan'];
    }

    /**
     * Sets subscription_plan
     *
     * @param int $subscription_plan subscription_plan
     *
     * @return self
     */
    public function setSubscriptionPlan($subscription_plan)
    {
        $this->container['subscription_plan'] = $subscription_plan;

        return $this;
    }

    /**
     * Gets latest_payment
     *
     * @return int|null
     */
    public function getLatestPayment()
    {
        return $this->container['latest_payment'];
    }

    /**
     * Sets latest_payment
     *
     * @param int|null $latest_payment latest_payment
     *
     * @return self
     */
    public function setLatestPayment($latest_payment)
    {
        $this->container['latest_payment'] = $latest_payment;

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


