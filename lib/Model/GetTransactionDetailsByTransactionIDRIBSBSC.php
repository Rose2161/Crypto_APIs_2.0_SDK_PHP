<?php
/**
 * GetTransactionDetailsByTransactionIDRIBSBSC
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
 * GetTransactionDetailsByTransactionIDRIBSBSC Class Doc Comment
 *
 * @category Class
 * @description Binance Smart Chain
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetTransactionDetailsByTransactionIDRIBSBSC implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTransactionDetailsByTransactionIDRIBSBSC';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract' => 'string',
        'gas_limit' => 'string',
        'gas_price' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSBSCGasPrice',
        'gas_used' => 'string',
        'input_data' => 'string',
        'nonce' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contract' => null,
        'gas_limit' => null,
        'gas_price' => null,
        'gas_used' => null,
        'input_data' => null,
        'nonce' => null
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
        'contract' => 'contract',
        'gas_limit' => 'gasLimit',
        'gas_price' => 'gasPrice',
        'gas_used' => 'gasUsed',
        'input_data' => 'inputData',
        'nonce' => 'nonce'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'gas_limit' => 'setGasLimit',
        'gas_price' => 'setGasPrice',
        'gas_used' => 'setGasUsed',
        'input_data' => 'setInputData',
        'nonce' => 'setNonce'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'gas_limit' => 'getGasLimit',
        'gas_price' => 'getGasPrice',
        'gas_used' => 'getGasUsed',
        'input_data' => 'getInputData',
        'nonce' => 'getNonce'
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
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_price'] = $data['gas_price'] ?? null;
        $this->container['gas_used'] = $data['gas_used'] ?? null;
        $this->container['input_data'] = $data['input_data'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_price'] === null) {
            $invalidProperties[] = "'gas_price' can't be null";
        }
        if ($this->container['gas_used'] === null) {
            $invalidProperties[] = "'gas_used' can't be null";
        }
        if ($this->container['input_data'] === null) {
            $invalidProperties[] = "'input_data' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
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
     * Gets contract
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string|null $contract Represents the specific transaction contract
     *
     * @return self
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets gas_limit
     *
     * @return string
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param string $gas_limit Represents the amount of gas used by this specific transaction alone.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSBSCGasPrice
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSBSCGasPrice $gas_price gas_price
     *
     * @return self
     */
    public function setGasPrice($gas_price)
    {
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return string
     */
    public function getGasUsed()
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param string $gas_used Defines the unit of the gas price amount, e.g. BTC, ETH, XRP.
     *
     * @return self
     */
    public function setGasUsed($gas_used)
    {
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets input_data
     *
     * @return string
     */
    public function getInputData()
    {
        return $this->container['input_data'];
    }

    /**
     * Sets input_data
     *
     * @param string $input_data Represents additional information that is required for the transaction.
     *
     * @return self
     */
    public function setInputData($input_data)
    {
        $this->container['input_data'] = $input_data;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return int
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param int $nonce Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender's address.
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

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


