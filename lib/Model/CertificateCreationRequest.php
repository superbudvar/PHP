<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class CertificateCreationRequest
 *
 * @category Class
 * @description For Certificate Signing Request (CSR) generation
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CertificateCreationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CertificateCreationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'appLabel' => 'string',
        'walletProvider' => 'string',
        'permissions' => Permissions::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'appLabel' => null,
        'walletProvider' => null,
        'permissions' => null
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
        'appLabel' => 'appLabel',
        'walletProvider' => 'walletProvider',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appLabel' => 'setAppLabel',
        'walletProvider' => 'setWalletProvider',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appLabel' => 'getAppLabel',
        'walletProvider' => 'getWalletProvider',
        'permissions' => 'getPermissions'
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

    const WALLET_PROVIDER_APPLE_PAY = 'APPLE_PAY';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWalletProviderAllowableValues()
    {
        return [
            self::WALLET_PROVIDER_APPLE_PAY
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
        $this->container['appLabel'] = $data['appLabel'] ?? null;
        $this->container['walletProvider'] = $data['walletProvider'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWalletProviderAllowableValues();
        if (null !== $this->container['walletProvider'] && !\in_array($this->container['walletProvider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'walletProvider', must be one of '%s'",
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
     * Gets appLabel
     *
     * @return string
     */
    public function getAppLabel()
    {
        return $this->container['appLabel'];
    }

    /**
     * Sets appLabel
     *
     * @param string $appLabel The Application Label to identify apps registered with Wallet Providers
     *
     * @return $this
     */
    public function setAppLabel($appLabel)
    {
        $this->container['appLabel'] = $appLabel;

        return $this;
    }

    /**
     * Gets walletProvider
     *
     * @return string
     */
    public function getWalletProvider()
    {
        return $this->container['walletProvider'];
    }

    /**
     * Sets walletProvider
     *
     * @param string $walletProvider Wallet Providers that a certificate registered with
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setWalletProvider($walletProvider)
    {
        $allowedValues = $this->getWalletProviderAllowableValues();
        if (null !== $walletProvider && !\in_array($walletProvider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'walletProvider', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['walletProvider'] = $walletProvider;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \FirstData\ApiClient\Model\Permissions
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \FirstData\ApiClient\Model\Permissions $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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


