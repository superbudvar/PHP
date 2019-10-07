<?php
/**
 * AuthenticationRedirectParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * OpenAPI spec version: 6.8.0.20190731.002
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * AuthenticationRedirectParams Class Doc Comment
 *
 * @category Class
 * @description Additional paramters for authentication redirect.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthenticationRedirectParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthenticationRedirect_params';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payerAuthenticationRequest' => 'string',
        'termUrl' => 'string',
        'merchantData' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payerAuthenticationRequest' => null,
        'termUrl' => null,
        'merchantData' => null
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
        'payerAuthenticationRequest' => 'payerAuthenticationRequest',
        'termUrl' => 'termUrl',
        'merchantData' => 'merchantData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payerAuthenticationRequest' => 'setPayerAuthenticationRequest',
        'termUrl' => 'setTermUrl',
        'merchantData' => 'setMerchantData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payerAuthenticationRequest' => 'getPayerAuthenticationRequest',
        'termUrl' => 'getTermUrl',
        'merchantData' => 'getMerchantData'
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
        $this->container['payerAuthenticationRequest'] = isset($data['payerAuthenticationRequest']) ? $data['payerAuthenticationRequest'] : null;
        $this->container['termUrl'] = isset($data['termUrl']) ? $data['termUrl'] : null;
        $this->container['merchantData'] = isset($data['merchantData']) ? $data['merchantData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets payerAuthenticationRequest
     *
     * @return string|null
     */
    public function getPayerAuthenticationRequest()
    {
        return $this->container['payerAuthenticationRequest'];
    }

    /**
     * Sets payerAuthenticationRequest
     *
     * @param string|null $payerAuthenticationRequest Message sent from merchant server to authenticate the cardholder.
     *
     * @return $this
     */
    public function setPayerAuthenticationRequest($payerAuthenticationRequest)
    {
        $this->container['payerAuthenticationRequest'] = $payerAuthenticationRequest;

        return $this;
    }

    /**
     * Gets termUrl
     *
     * @return string|null
     */
    public function getTermUrl()
    {
        return $this->container['termUrl'];
    }

    /**
     * Sets termUrl
     *
     * @param string|null $termUrl Terminal URL for processing request.
     *
     * @return $this
     */
    public function setTermUrl($termUrl)
    {
        $this->container['termUrl'] = $termUrl;

        return $this;
    }

    /**
     * Gets merchantData
     *
     * @return string|null
     */
    public function getMerchantData()
    {
        return $this->container['merchantData'];
    }

    /**
     * Sets merchantData
     *
     * @param string|null $merchantData Merchant data.
     *
     * @return $this
     */
    public function setMerchantData($merchantData)
    {
        $this->container['merchantData'] = $merchantData;

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
}

