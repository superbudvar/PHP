<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class PaymentCard
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'expiryDate' => Expiration::class,
        'cardCodeValue' => 'string',
        'cardFunction' => 'string',
        'cardholderName' => 'string',
        'authenticationRequest' => PaymentCardAuthenticationRequest::class,
        'brand' => 'string',
        'authenticationResult' => AuthenticationResult::class,
        'enableTokenization' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'expiryDate' => null,
        'cardCodeValue' => null,
        'cardFunction' => null,
        'cardholderName' => null,
        'authenticationRequest' => null,
        'brand' => null,
        'authenticationResult' => null,
        'enableTokenization' => null
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
        'number' => 'number',
        'expiryDate' => 'expiryDate',
        'cardCodeValue' => 'cardCodeValue',
        'cardFunction' => 'cardFunction',
        'cardholderName' => 'cardholderName',
        'authenticationRequest' => 'authenticationRequest',
        'brand' => 'brand',
        'authenticationResult' => 'authenticationResult',
        'enableTokenization' => 'enableTokenization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'expiryDate' => 'setExpiryDate',
        'cardCodeValue' => 'setCardCodeValue',
        'cardFunction' => 'setCardFunction',
        'cardholderName' => 'setCardholderName',
        'authenticationRequest' => 'setAuthenticationRequest',
        'brand' => 'setBrand',
        'authenticationResult' => 'setAuthenticationResult',
        'enableTokenization' => 'setEnableTokenization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'expiryDate' => 'getExpiryDate',
        'cardCodeValue' => 'getCardCodeValue',
        'cardFunction' => 'getCardFunction',
        'cardholderName' => 'getCardholderName',
        'authenticationRequest' => 'getAuthenticationRequest',
        'brand' => 'getBrand',
        'authenticationResult' => 'getAuthenticationResult',
        'enableTokenization' => 'getEnableTokenization'
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

    const CARD_FUNCTION_CREDIT = 'CREDIT';
    const CARD_FUNCTION_DEBIT = 'DEBIT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardFunctionAllowableValues()
    {
        return [
            self::CARD_FUNCTION_CREDIT,
            self::CARD_FUNCTION_DEBIT
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['cardCodeValue'] = isset($data['cardCodeValue']) ? $data['cardCodeValue'] : null;
        $this->container['cardFunction'] = isset($data['cardFunction']) ? $data['cardFunction'] : 'CREDIT';
        $this->container['cardholderName'] = isset($data['cardholderName']) ? $data['cardholderName'] : null;
        $this->container['authenticationRequest'] = isset($data['authenticationRequest']) ? $data['authenticationRequest'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['authenticationResult'] = isset($data['authenticationResult']) ? $data['authenticationResult'] : null;
        $this->container['enableTokenization'] = isset($data['enableTokenization']) ? $data['enableTokenization'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        $allowedValues = $this->getCardFunctionAllowableValues();
        if (null !== $this->container['cardFunction'] && !\in_array($this->container['cardFunction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cardFunction', must be one of '%s'",
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
        return \count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Payment card number, including credit/debit card number or digital PAN
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \FirstData\ApiClient\Model\Expiration
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \FirstData\ApiClient\Model\Expiration $expiryDate expiryDate
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets cardCodeValue
     *
     * @return string
     */
    public function getCardCodeValue()
    {
        return $this->container['cardCodeValue'];
    }

    /**
     * Sets cardCodeValue
     *
     * @param string $cardCodeValue CVV or CCV value
     *
     * @return $this
     */
    public function setCardCodeValue($cardCodeValue)
    {
        $this->container['cardCodeValue'] = $cardCodeValue;

        return $this;
    }

    /**
     * Gets cardFunction
     *
     * @return string
     */
    public function getCardFunction()
    {
        return $this->container['cardFunction'];
    }

    /**
     * Sets cardFunction
     *
     * @param string $cardFunction cardFunction
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setCardFunction($cardFunction)
    {
        $allowedValues = $this->getCardFunctionAllowableValues();
        if (null !== $cardFunction && !\in_array($cardFunction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cardFunction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cardFunction'] = $cardFunction;

        return $this;
    }

    /**
     * Gets cardholderName
     *
     * @return string
     */
    public function getCardholderName()
    {
        return $this->container['cardholderName'];
    }

    /**
     * Sets cardholderName
     *
     * @param string $cardholderName cardholderName
     *
     * @return $this
     */
    public function setCardholderName($cardholderName)
    {
        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets authenticationRequest
     *
     * @return \FirstData\ApiClient\Model\PaymentCardAuthenticationRequest
     */
    public function getAuthenticationRequest()
    {
        return $this->container['authenticationRequest'];
    }

    /**
     * Sets authenticationRequest
     *
     * @param \FirstData\ApiClient\Model\PaymentCardAuthenticationRequest $authenticationRequest authenticationRequest
     *
     * @return $this
     */
    public function setAuthenticationRequest($authenticationRequest)
    {
        $this->container['authenticationRequest'] = $authenticationRequest;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Optional, required only if using dual-branded card
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets authenticationResult
     *
     * @return \FirstData\ApiClient\Model\AuthenticationResult
     */
    public function getAuthenticationResult()
    {
        return $this->container['authenticationResult'];
    }

    /**
     * Sets authenticationResult
     *
     * @param \FirstData\ApiClient\Model\AuthenticationResult $authenticationResult authenticationResult
     *
     * @return $this
     */
    public function setAuthenticationResult($authenticationResult)
    {
        $this->container['authenticationResult'] = $authenticationResult;

        return $this;
    }

    /**
     * Gets enableTokenization
     *
     * @return bool
     */
    public function getEnableTokenization()
    {
        return $this->container['enableTokenization'];
    }

    /**
     * Sets enableTokenization
     *
     * @param bool $enableTokenization Whether the Gateway shall tokenize the card while performing payment transaction
     *
     * @return $this
     */
    public function setEnableTokenization($enableTokenization)
    {
        $this->container['enableTokenization'] = $enableTokenization;

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


