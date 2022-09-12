<?php
/**
 * CreateCoinsTransactionRequestFromAddressRI
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
 * Crypto APIs is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2021-03-20
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * CreateCoinsTransactionRequestFromAddressRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateCoinsTransactionRequestFromAddressRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateCoinsTransactionRequestFromAddressRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_tag' => 'int',
        'callback_secret_key' => 'string',
        'callback_url' => 'string',
        'classic_address' => 'string',
        'fee_priority' => 'string',
        'note' => 'string',
        'recipients' => '\CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRIRecipients[]',
        'senders' => '\CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRISenders',
        'transaction_request_id' => 'string',
        'transaction_request_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_tag' => null,
        'callback_secret_key' => null,
        'callback_url' => null,
        'classic_address' => null,
        'fee_priority' => null,
        'note' => null,
        'recipients' => null,
        'senders' => null,
        'transaction_request_id' => null,
        'transaction_request_status' => null
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
        'address_tag' => 'addressTag',
        'callback_secret_key' => 'callbackSecretKey',
        'callback_url' => 'callbackUrl',
        'classic_address' => 'classicAddress',
        'fee_priority' => 'feePriority',
        'note' => 'note',
        'recipients' => 'recipients',
        'senders' => 'senders',
        'transaction_request_id' => 'transactionRequestId',
        'transaction_request_status' => 'transactionRequestStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_tag' => 'setAddressTag',
        'callback_secret_key' => 'setCallbackSecretKey',
        'callback_url' => 'setCallbackUrl',
        'classic_address' => 'setClassicAddress',
        'fee_priority' => 'setFeePriority',
        'note' => 'setNote',
        'recipients' => 'setRecipients',
        'senders' => 'setSenders',
        'transaction_request_id' => 'setTransactionRequestId',
        'transaction_request_status' => 'setTransactionRequestStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_tag' => 'getAddressTag',
        'callback_secret_key' => 'getCallbackSecretKey',
        'callback_url' => 'getCallbackUrl',
        'classic_address' => 'getClassicAddress',
        'fee_priority' => 'getFeePriority',
        'note' => 'getNote',
        'recipients' => 'getRecipients',
        'senders' => 'getSenders',
        'transaction_request_id' => 'getTransactionRequestId',
        'transaction_request_status' => 'getTransactionRequestStatus'
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
    const TRANSACTION_REQUEST_STATUS_CREATED = 'created';
    const TRANSACTION_REQUEST_STATUS_AWAIT_APPROVAL = 'await-approval';
    const TRANSACTION_REQUEST_STATUS_PENDING = 'pending';
    const TRANSACTION_REQUEST_STATUS_PREPARED = 'prepared';
    const TRANSACTION_REQUEST_STATUS_SIGNED = 'signed';
    const TRANSACTION_REQUEST_STATUS_BROADCASTED = 'broadcasted';
    const TRANSACTION_REQUEST_STATUS_SUCCESS = 'success';
    const TRANSACTION_REQUEST_STATUS_FAILED = 'failed';
    const TRANSACTION_REQUEST_STATUS_REJECTED = 'rejected';
    const TRANSACTION_REQUEST_STATUS_MINED = 'mined';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionRequestStatusAllowableValues()
    {
        return [
            self::TRANSACTION_REQUEST_STATUS_CREATED,
            self::TRANSACTION_REQUEST_STATUS_AWAIT_APPROVAL,
            self::TRANSACTION_REQUEST_STATUS_PENDING,
            self::TRANSACTION_REQUEST_STATUS_PREPARED,
            self::TRANSACTION_REQUEST_STATUS_SIGNED,
            self::TRANSACTION_REQUEST_STATUS_BROADCASTED,
            self::TRANSACTION_REQUEST_STATUS_SUCCESS,
            self::TRANSACTION_REQUEST_STATUS_FAILED,
            self::TRANSACTION_REQUEST_STATUS_REJECTED,
            self::TRANSACTION_REQUEST_STATUS_MINED,
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
        $this->container['address_tag'] = $data['address_tag'] ?? null;
        $this->container['callback_secret_key'] = $data['callback_secret_key'] ?? null;
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['classic_address'] = $data['classic_address'] ?? null;
        $this->container['fee_priority'] = $data['fee_priority'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['senders'] = $data['senders'] ?? null;
        $this->container['transaction_request_id'] = $data['transaction_request_id'] ?? null;
        $this->container['transaction_request_status'] = $data['transaction_request_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['senders'] === null) {
            $invalidProperties[] = "'senders' can't be null";
        }
        if ($this->container['transaction_request_id'] === null) {
            $invalidProperties[] = "'transaction_request_id' can't be null";
        }
        if ($this->container['transaction_request_status'] === null) {
            $invalidProperties[] = "'transaction_request_status' can't be null";
        }
        $allowedValues = $this->getTransactionRequestStatusAllowableValues();
        if (!is_null($this->container['transaction_request_status']) && !in_array($this->container['transaction_request_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_request_status', must be one of '%s'",
                $this->container['transaction_request_status'],
                implode("', '", $allowedValues)
            );
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
     * Gets address_tag
     *
     * @return int|null
     */
    public function getAddressTag()
    {
        return $this->container['address_tag'];
    }

    /**
     * Sets address_tag
     *
     * @param int|null $address_tag Defines a specific Tag that is an additional XRP address feature. It helps identify a transaction recipient beyond a wallet address. The tag that was encoded into the x-Address along with the Source Classic Address.
     *
     * @return self
     */
    public function setAddressTag($address_tag)
    {
        $this->container['address_tag'] = $address_tag;

        return $this;
    }

    /**
     * Gets callback_secret_key
     *
     * @return string|null
     */
    public function getCallbackSecretKey()
    {
        return $this->container['callback_secret_key'];
    }

    /**
     * Sets callback_secret_key
     *
     * @param string|null $callback_secret_key Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security).
     *
     * @return self
     */
    public function setCallbackSecretKey($callback_secret_key)
    {
        $this->container['callback_secret_key'] = $callback_secret_key;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. `We support ONLY httpS type of protocol`.
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets classic_address
     *
     * @return string|null
     */
    public function getClassicAddress()
    {
        return $this->container['classic_address'];
    }

    /**
     * Sets classic_address
     *
     * @param string|null $classic_address Represents the public address, which is a compressed and shortened form of a public key. The classic address is shown when the source address is an x-Address.
     *
     * @return self
     */
    public function setClassicAddress($classic_address)
    {
        $this->container['classic_address'] = $classic_address;

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
     * @param string $fee_priority Represents the fee priority of the automation, whether it is \"slow\", \"standard\" or \"fast\".
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
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request.
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRIRecipients[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRIRecipients[] $recipients Defines the destination for the transaction, i.e. the recipient(s).
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets senders
     *
     * @return \CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRISenders
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRISenders $senders senders
     *
     * @return self
     */
    public function setSenders($senders)
    {
        $this->container['senders'] = $senders;

        return $this;
    }

    /**
     * Gets transaction_request_id
     *
     * @return string
     */
    public function getTransactionRequestId()
    {
        return $this->container['transaction_request_id'];
    }

    /**
     * Sets transaction_request_id
     *
     * @param string $transaction_request_id Represents a unique identifier of the transaction request (the request sent to make a transaction), which helps in identifying which callback and which `referenceId` concern that specific transaction request.
     *
     * @return self
     */
    public function setTransactionRequestId($transaction_request_id)
    {
        $this->container['transaction_request_id'] = $transaction_request_id;

        return $this;
    }

    /**
     * Gets transaction_request_status
     *
     * @return string
     */
    public function getTransactionRequestStatus()
    {
        return $this->container['transaction_request_status'];
    }

    /**
     * Sets transaction_request_status
     *
     * @param string $transaction_request_status Defines the status of the transaction request, e.g. \"created, \"await_approval\", \"pending\", \"prepared\", \"signed\", \"broadcasted\", \"success\", \"failed\", \"rejected\", mined\".
     *
     * @return self
     */
    public function setTransactionRequestStatus($transaction_request_status)
    {
        $allowedValues = $this->getTransactionRequestStatusAllowableValues();
        if (!in_array($transaction_request_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_request_status', must be one of '%s'",
                    $transaction_request_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_request_status'] = $transaction_request_status;

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


