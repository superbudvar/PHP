<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class AuthenticationResultSecure3d
 *
 * @category Class
 * @description Submit the result of the authentication managed outside of the Gateway. For more convenient usage without implementing 3D Secure yourself see &#39;authenticationRequest&#39; section.
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationResultSecure3d implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuthenticationResult_secure3d';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'verificationResponse' => 'string',
        'payerAuthenticationResponse' => 'string',
        'authenticationValue' => 'string',
        'xid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'verificationResponse' => null,
        'payerAuthenticationResponse' => null,
        'authenticationValue' => null,
        'xid' => null
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
        'verificationResponse' => 'verificationResponse',
        'payerAuthenticationResponse' => 'payerAuthenticationResponse',
        'authenticationValue' => 'authenticationValue',
        'xid' => 'xid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verificationResponse' => 'setVerificationResponse',
        'payerAuthenticationResponse' => 'setPayerAuthenticationResponse',
        'authenticationValue' => 'setAuthenticationValue',
        'xid' => 'setXid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verificationResponse' => 'getVerificationResponse',
        'payerAuthenticationResponse' => 'getPayerAuthenticationResponse',
        'authenticationValue' => 'getAuthenticationValue',
        'xid' => 'getXid'
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

    const VERIFICATION_RESPONSE_Y = 'Y';
    const VERIFICATION_RESPONSE_N = 'N';
    const VERIFICATION_RESPONSE_U = 'U';
    const PAYER_AUTHENTICATION_RESPONSE_Y = 'Y';
    const PAYER_AUTHENTICATION_RESPONSE_N = 'N';
    const PAYER_AUTHENTICATION_RESPONSE_U = 'U';
    const PAYER_AUTHENTICATION_RESPONSE_A = 'A';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerificationResponseAllowableValues()
    {
        return [
            self::VERIFICATION_RESPONSE_Y,
            self::VERIFICATION_RESPONSE_N,
            self::VERIFICATION_RESPONSE_U
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayerAuthenticationResponseAllowableValues()
    {
        return [
            self::PAYER_AUTHENTICATION_RESPONSE_Y,
            self::PAYER_AUTHENTICATION_RESPONSE_N,
            self::PAYER_AUTHENTICATION_RESPONSE_U,
            self::PAYER_AUTHENTICATION_RESPONSE_A
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
        $this->container['verificationResponse'] = $data['verificationResponse'] ?? null;
        $this->container['payerAuthenticationResponse'] = $data['payerAuthenticationResponse'] ?? null;
        $this->container['authenticationValue'] = $data['authenticationValue'] ?? null;
        $this->container['xid'] = $data['xid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVerificationResponseAllowableValues();
        if (null !== $this->container['verificationResponse'] && !\in_array($this->container['verificationResponse'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verificationResponse', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPayerAuthenticationResponseAllowableValues();
        if (null !== $this->container['payerAuthenticationResponse'] && !\in_array($this->container['payerAuthenticationResponse'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payerAuthenticationResponse', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (null !== $this->container['authenticationValue'] && (mb_strlen($this->container['authenticationValue']) > 32)) {
            $invalidProperties[] = "invalid value for 'authenticationValue', the character length must be smaller than or equal to 32.";
        }

        if (null !== $this->container['authenticationValue'] && (mb_strlen($this->container['authenticationValue']) < 20)) {
            $invalidProperties[] = "invalid value for 'authenticationValue', the character length must be bigger than or equal to 20.";
        }

        if (null !== $this->container['xid'] && (mb_strlen($this->container['xid']) > 32)) {
            $invalidProperties[] = "invalid value for 'xid', the character length must be smaller than or equal to 32.";
        }

        if (null !== $this->container['xid'] && (mb_strlen($this->container['xid']) < 20)) {
            $invalidProperties[] = "invalid value for 'xid', the character length must be bigger than or equal to 20.";
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
     * Gets verificationResponse
     *
     * @return string
     */
    public function getVerificationResponse()
    {
        return $this->container['verificationResponse'];
    }

    /**
     * Sets verificationResponse
     *
     * @param string $verificationResponse Card enrollment result from the Verification Response (VeRes)
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setVerificationResponse($verificationResponse)
    {
        $allowedValues = $this->getVerificationResponseAllowableValues();
        if (null !== $verificationResponse && !\in_array($verificationResponse, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'verificationResponse', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verificationResponse'] = $verificationResponse;

        return $this;
    }

    /**
     * Gets payerAuthenticationResponse
     *
     * @return string
     */
    public function getPayerAuthenticationResponse()
    {
        return $this->container['payerAuthenticationResponse'];
    }

    /**
     * Sets payerAuthenticationResponse
     *
     * @param string $payerAuthenticationResponse Payer authentication result from Payment Authentication Response (PaRes)
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setPayerAuthenticationResponse($payerAuthenticationResponse)
    {
        $allowedValues = $this->getPayerAuthenticationResponseAllowableValues();
        if (null !== $payerAuthenticationResponse && !\in_array($payerAuthenticationResponse, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payerAuthenticationResponse', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payerAuthenticationResponse'] = $payerAuthenticationResponse;

        return $this;
    }

    /**
     * Gets authenticationValue
     *
     * @return string
     */
    public function getAuthenticationValue()
    {
        return $this->container['authenticationValue'];
    }

    /**
     * Sets authenticationValue
     *
     * @param string $authenticationValue Cardholder Authentication Verification Value (CAVV)
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setAuthenticationValue($authenticationValue)
    {
        if (null !== $authenticationValue && (mb_strlen($authenticationValue) > 32)) {
            throw new \InvalidArgumentException('invalid length for $authenticationValue when calling AuthenticationResultSecure3d., must be smaller than or equal to 32.');
        }
        if (null !== $authenticationValue && (mb_strlen($authenticationValue) < 20)) {
            throw new \InvalidArgumentException('invalid length for $authenticationValue when calling AuthenticationResultSecure3d., must be bigger than or equal to 20.');
        }

        $this->container['authenticationValue'] = $authenticationValue;

        return $this;
    }

    /**
     * Gets xid
     *
     * @return string
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     *
     * @param string $xid Authentication ID
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setXid($xid)
    {
        if (null !== $xid && (mb_strlen($xid) > 32)) {
            throw new \InvalidArgumentException('invalid length for $xid when calling AuthenticationResultSecure3d., must be smaller than or equal to 32.');
        }
        if (null !== $xid && (mb_strlen($xid) < 20)) {
            throw new \InvalidArgumentException('invalid length for $xid when calling AuthenticationResultSecure3d., must be bigger than or equal to 20.');
        }

        $this->container['xid'] = $xid;

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
        return $this->container[$offset] ?? null;
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

