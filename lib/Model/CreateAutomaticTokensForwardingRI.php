<?php
/**
 * CreateAutomaticTokensForwardingRI
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * CreateAutomaticTokensForwardingRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateAutomaticTokensForwardingRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAutomaticTokensForwardingRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callback_url' => 'string',
        'confirmations_count' => 'int',
        'created_timestamp' => 'int',
        'fee_address' => 'string',
        'fee_priority' => 'string',
        'from_address' => 'string',
        'minimum_transfer_amount' => 'string',
        'reference_id' => 'string',
        'to_address' => 'string',
        'token_data' => '\CryptoAPIs\Model\CreateAutomaticTokensForwardingRITS'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callback_url' => null,
        'confirmations_count' => null,
        'created_timestamp' => null,
        'fee_address' => null,
        'fee_priority' => null,
        'from_address' => null,
        'minimum_transfer_amount' => null,
        'reference_id' => null,
        'to_address' => null,
        'token_data' => null
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
        'callback_url' => 'callbackUrl',
        'confirmations_count' => 'confirmationsCount',
        'created_timestamp' => 'createdTimestamp',
        'fee_address' => 'feeAddress',
        'fee_priority' => 'feePriority',
        'from_address' => 'fromAddress',
        'minimum_transfer_amount' => 'minimumTransferAmount',
        'reference_id' => 'referenceId',
        'to_address' => 'toAddress',
        'token_data' => 'tokenData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_url' => 'setCallbackUrl',
        'confirmations_count' => 'setConfirmationsCount',
        'created_timestamp' => 'setCreatedTimestamp',
        'fee_address' => 'setFeeAddress',
        'fee_priority' => 'setFeePriority',
        'from_address' => 'setFromAddress',
        'minimum_transfer_amount' => 'setMinimumTransferAmount',
        'reference_id' => 'setReferenceId',
        'to_address' => 'setToAddress',
        'token_data' => 'setTokenData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_url' => 'getCallbackUrl',
        'confirmations_count' => 'getConfirmationsCount',
        'created_timestamp' => 'getCreatedTimestamp',
        'fee_address' => 'getFeeAddress',
        'fee_priority' => 'getFeePriority',
        'from_address' => 'getFromAddress',
        'minimum_transfer_amount' => 'getMinimumTransferAmount',
        'reference_id' => 'getReferenceId',
        'to_address' => 'getToAddress',
        'token_data' => 'getTokenData'
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

    const FEE_PRIORITY_SLOW = 'slow';
    const FEE_PRIORITY_STANDARD = 'standard';
    const FEE_PRIORITY_FAST = 'fast';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeePriorityAllowableValues()
    {
        return [
            self::FEE_PRIORITY_SLOW,
            self::FEE_PRIORITY_STANDARD,
            self::FEE_PRIORITY_FAST,
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
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['confirmations_count'] = $data['confirmations_count'] ?? null;
        $this->container['created_timestamp'] = $data['created_timestamp'] ?? null;
        $this->container['fee_address'] = $data['fee_address'] ?? null;
        $this->container['fee_priority'] = $data['fee_priority'] ?? null;
        $this->container['from_address'] = $data['from_address'] ?? null;
        $this->container['minimum_transfer_amount'] = $data['minimum_transfer_amount'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['to_address'] = $data['to_address'] ?? null;
        $this->container['token_data'] = $data['token_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ($this->container['confirmations_count'] === null) {
            $invalidProperties[] = "'confirmations_count' can't be null";
        }
        if ($this->container['created_timestamp'] === null) {
            $invalidProperties[] = "'created_timestamp' can't be null";
        }
        if ($this->container['fee_address'] === null) {
            $invalidProperties[] = "'fee_address' can't be null";
        }
        if ($this->container['fee_priority'] === null) {
            $invalidProperties[] = "'fee_priority' can't be null";
        }
        $allowedValues = $this->getFeePriorityAllowableValues();
        if (!is_null($this->container['fee_priority']) && !in_array($this->container['fee_priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_priority', must be one of '%s'",
                $this->container['fee_priority'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['from_address'] === null) {
            $invalidProperties[] = "'from_address' can't be null";
        }
        if ($this->container['minimum_transfer_amount'] === null) {
            $invalidProperties[] = "'minimum_transfer_amount' can't be null";
        }
        if ($this->container['reference_id'] === null) {
            $invalidProperties[] = "'reference_id' can't be null";
        }
        if ($this->container['to_address'] === null) {
            $invalidProperties[] = "'to_address' can't be null";
        }
        if ($this->container['token_data'] === null) {
            $invalidProperties[] = "'token_data' can't be null";
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
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs.
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets confirmations_count
     *
     * @return int
     */
    public function getConfirmationsCount()
    {
        return $this->container['confirmations_count'];
    }

    /**
     * Sets confirmations_count
     *
     * @param int $confirmations_count Represents the number of confirmations, i.e. the amount of blocks that have been built on top of this block.
     *
     * @return self
     */
    public function setConfirmationsCount($confirmations_count)
    {
        $this->container['confirmations_count'] = $confirmations_count;

        return $this;
    }

    /**
     * Gets created_timestamp
     *
     * @return int
     */
    public function getCreatedTimestamp()
    {
        return $this->container['created_timestamp'];
    }

    /**
     * Sets created_timestamp
     *
     * @param int $created_timestamp Defines the specific time/date when the automatic forwarding was created in Unix Timestamp.
     *
     * @return self
     */
    public function setCreatedTimestamp($created_timestamp)
    {
        $this->container['created_timestamp'] = $created_timestamp;

        return $this;
    }

    /**
     * Gets fee_address
     *
     * @return string
     */
    public function getFeeAddress()
    {
        return $this->container['fee_address'];
    }

    /**
     * Sets fee_address
     *
     * @param string $fee_address Represents the specific fee address, which is always automatically generated. Users must fund it.
     *
     * @return self
     */
    public function setFeeAddress($fee_address)
    {
        $this->container['fee_address'] = $fee_address;

        return $this;
    }

    /**
     * Gets fee_priority
     *
     * @return string
     */
    public function getFeePriority()
    {
        return $this->container['fee_priority'];
    }

    /**
     * Sets fee_priority
     *
     * @param string $fee_priority Represents the fee priority of the automation, whether it is \"SLOW\", \"STANDARD\" or \"FAST\".
     *
     * @return self
     */
    public function setFeePriority($fee_priority)
    {
        $allowedValues = $this->getFeePriorityAllowableValues();
        if (!in_array($fee_priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_priority', must be one of '%s'",
                    $fee_priority,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_priority'] = $fee_priority;

        return $this;
    }

    /**
     * Gets from_address
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param string $from_address Represents the hash of the address that forwards the tokens.
     *
     * @return self
     */
    public function setFromAddress($from_address)
    {
        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets minimum_transfer_amount
     *
     * @return string
     */
    public function getMinimumTransferAmount()
    {
        return $this->container['minimum_transfer_amount'];
    }

    /**
     * Sets minimum_transfer_amount
     *
     * @param string $minimum_transfer_amount Represents the minimum transfer amount of the tokens in the `fromAddress` that can be allowed for an automatic forwarding.
     *
     * @return self
     */
    public function setMinimumTransferAmount($minimum_transfer_amount)
    {
        $this->container['minimum_transfer_amount'] = $minimum_transfer_amount;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string $reference_id Represents a unique ID used to reference the specific callback subscription.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets to_address
     *
     * @return string
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param string $to_address Represents the hash of the address the tokens are forwarded to.
     *
     * @return self
     */
    public function setToAddress($to_address)
    {
        $this->container['to_address'] = $to_address;

        return $this;
    }

    /**
     * Gets token_data
     *
     * @return \CryptoAPIs\Model\CreateAutomaticTokensForwardingRITS
     */
    public function getTokenData()
    {
        return $this->container['token_data'];
    }

    /**
     * Sets token_data
     *
     * @param \CryptoAPIs\Model\CreateAutomaticTokensForwardingRITS $token_data token_data
     *
     * @return self
     */
    public function setTokenData($token_data)
    {
        $this->container['token_data'] = $token_data;

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


