<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class ApplePayHeader
 *
 * @category Class
 * @description Additional version-dependent information used to decrypt and verify the payment
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplePayHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApplePay_header';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applicationDataHash' => 'string',
        'ephemeralPublicKey' => 'string',
        'publicKeyHash' => 'string',
        'transactionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'applicationDataHash' => null,
        'ephemeralPublicKey' => null,
        'publicKeyHash' => null,
        'transactionId' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'applicationDataHash' => 'applicationDataHash',
        'ephemeralPublicKey' => 'ephemeralPublicKey',
        'publicKeyHash' => 'publicKeyHash',
        'transactionId' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicationDataHash' => 'setApplicationDataHash',
        'ephemeralPublicKey' => 'setEphemeralPublicKey',
        'publicKeyHash' => 'setPublicKeyHash',
        'transactionId' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicationDataHash' => 'getApplicationDataHash',
        'ephemeralPublicKey' => 'getEphemeralPublicKey',
        'publicKeyHash' => 'getPublicKeyHash',
        'transactionId' => 'getTransactionId'
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
        return self::$swaggerModelName;
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
        $this->container['applicationDataHash'] = isset($data['applicationDataHash']) ? $data['applicationDataHash'] : null;
        $this->container['ephemeralPublicKey'] = isset($data['ephemeralPublicKey']) ? $data['ephemeralPublicKey'] : null;
        $this->container['publicKeyHash'] = isset($data['publicKeyHash']) ? $data['publicKeyHash'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return \count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets applicationDataHash
     *
     * @return string
     */
    public function getApplicationDataHash()
    {
        return $this->container['applicationDataHash'];
    }

    /**
     * Sets applicationDataHash
     *
     * @param string $applicationDataHash The hash of the applicationData property. The actual applicationData is part of the encrypted 'data' element.
     *
     * @return $this
     */
    public function setApplicationDataHash($applicationDataHash)
    {
        $this->container['applicationDataHash'] = $applicationDataHash;

        return $this;
    }

    /**
     * Gets ephemeralPublicKey
     *
     * @return string
     */
    public function getEphemeralPublicKey()
    {
        return $this->container['ephemeralPublicKey'];
    }

    /**
     * Sets ephemeralPublicKey
     *
     * @param string $ephemeralPublicKey Temporary key for generating shared secret from a device
     *
     * @return $this
     */
    public function setEphemeralPublicKey($ephemeralPublicKey)
    {
        $this->container['ephemeralPublicKey'] = $ephemeralPublicKey;

        return $this;
    }

    /**
     * Gets publicKeyHash
     *
     * @return string
     */
    public function getPublicKeyHash()
    {
        return $this->container['publicKeyHash'];
    }

    /**
     * Sets publicKeyHash
     *
     * @param string $publicKeyHash Hash of the X.509 encoded public key bytes of the merchant’s certificate
     *
     * @return $this
     */
    public function setPublicKeyHash($publicKeyHash)
    {
        $this->container['publicKeyHash'] = $publicKeyHash;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId Transaction identifier, generated on the device
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (null === $offset) {
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


