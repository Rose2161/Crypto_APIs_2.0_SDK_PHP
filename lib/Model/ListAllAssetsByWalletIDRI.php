<?php
/**
 * ListAllAssetsByWalletIDRI
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
 * ListAllAssetsByWalletIDRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListAllAssetsByWalletIDRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListAllAssetsByWalletIDRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'coins' => '\CryptoAPIs\Model\ListAllAssetsFromAllWalletsRICoins[]',
        'fungible_tokens' => '\CryptoAPIs\Model\ListAllAssetsFromAllWalletsRIFungibleTokens[]',
        'non_fungible_tokens' => '\CryptoAPIs\Model\ListAllAssetsFromAllWalletsRINonFungibleTokens[]',
        'wallet_id' => 'string',
        'wallet_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'coins' => null,
        'fungible_tokens' => null,
        'non_fungible_tokens' => null,
        'wallet_id' => null,
        'wallet_name' => null
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
        'coins' => 'coins',
        'fungible_tokens' => 'fungibleTokens',
        'non_fungible_tokens' => 'nonFungibleTokens',
        'wallet_id' => 'walletId',
        'wallet_name' => 'walletName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coins' => 'setCoins',
        'fungible_tokens' => 'setFungibleTokens',
        'non_fungible_tokens' => 'setNonFungibleTokens',
        'wallet_id' => 'setWalletId',
        'wallet_name' => 'setWalletName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coins' => 'getCoins',
        'fungible_tokens' => 'getFungibleTokens',
        'non_fungible_tokens' => 'getNonFungibleTokens',
        'wallet_id' => 'getWalletId',
        'wallet_name' => 'getWalletName'
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
        $this->container['coins'] = $data['coins'] ?? null;
        $this->container['fungible_tokens'] = $data['fungible_tokens'] ?? null;
        $this->container['non_fungible_tokens'] = $data['non_fungible_tokens'] ?? null;
        $this->container['wallet_id'] = $data['wallet_id'] ?? null;
        $this->container['wallet_name'] = $data['wallet_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['coins'] === null) {
            $invalidProperties[] = "'coins' can't be null";
        }
        if ($this->container['fungible_tokens'] === null) {
            $invalidProperties[] = "'fungible_tokens' can't be null";
        }
        if ($this->container['non_fungible_tokens'] === null) {
            $invalidProperties[] = "'non_fungible_tokens' can't be null";
        }
        if ($this->container['wallet_id'] === null) {
            $invalidProperties[] = "'wallet_id' can't be null";
        }
        if ($this->container['wallet_name'] === null) {
            $invalidProperties[] = "'wallet_name' can't be null";
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
     * Gets coins
     *
     * @return \CryptoAPIs\Model\ListAllAssetsFromAllWalletsRICoins[]
     */
    public function getCoins()
    {
        return $this->container['coins'];
    }

    /**
     * Sets coins
     *
     * @param \CryptoAPIs\Model\ListAllAssetsFromAllWalletsRICoins[] $coins coins
     *
     * @return self
     */
    public function setCoins($coins)
    {
        $this->container['coins'] = $coins;

        return $this;
    }

    /**
     * Gets fungible_tokens
     *
     * @return \CryptoAPIs\Model\ListAllAssetsFromAllWalletsRIFungibleTokens[]
     */
    public function getFungibleTokens()
    {
        return $this->container['fungible_tokens'];
    }

    /**
     * Sets fungible_tokens
     *
     * @param \CryptoAPIs\Model\ListAllAssetsFromAllWalletsRIFungibleTokens[] $fungible_tokens Represents fungible tokens'es detailed information
     *
     * @return self
     */
    public function setFungibleTokens($fungible_tokens)
    {
        $this->container['fungible_tokens'] = $fungible_tokens;

        return $this;
    }

    /**
     * Gets non_fungible_tokens
     *
     * @return \CryptoAPIs\Model\ListAllAssetsFromAllWalletsRINonFungibleTokens[]
     */
    public function getNonFungibleTokens()
    {
        return $this->container['non_fungible_tokens'];
    }

    /**
     * Sets non_fungible_tokens
     *
     * @param \CryptoAPIs\Model\ListAllAssetsFromAllWalletsRINonFungibleTokens[] $non_fungible_tokens Represents non-fungible tokens'es detailed information.
     *
     * @return self
     */
    public function setNonFungibleTokens($non_fungible_tokens)
    {
        $this->container['non_fungible_tokens'] = $non_fungible_tokens;

        return $this;
    }

    /**
     * Gets wallet_id
     *
     * @return string
     */
    public function getWalletId()
    {
        return $this->container['wallet_id'];
    }

    /**
     * Sets wallet_id
     *
     * @param string $wallet_id Defines the unique ID of the Wallet.
     *
     * @return self
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

        return $this;
    }

    /**
     * Gets wallet_name
     *
     * @return string
     */
    public function getWalletName()
    {
        return $this->container['wallet_name'];
    }

    /**
     * Sets wallet_name
     *
     * @param string $wallet_name Represents the name of the wallet.
     *
     * @return self
     */
    public function setWalletName($wallet_name)
    {
        $this->container['wallet_name'] = $wallet_name;

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


