<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class Lodging
 *
 * @category Class
 * @description Additional data specific to the lodging industry
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Lodging implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lodging';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arrivalDate' => \DateTime::class,
        'departureDate' => \DateTime::class,
        'folioNumber' => 'string',
        'extraCharges' => '\FirstData\ApiClient\Model\LodgingExtraCharges[]',
        'noShowIndicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arrivalDate' => 'date',
        'departureDate' => 'date',
        'folioNumber' => null,
        'extraCharges' => null,
        'noShowIndicator' => null
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
        'arrivalDate' => 'arrivalDate',
        'departureDate' => 'departureDate',
        'folioNumber' => 'folioNumber',
        'extraCharges' => 'extraCharges',
        'noShowIndicator' => 'noShowIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrivalDate' => 'setArrivalDate',
        'departureDate' => 'setDepartureDate',
        'folioNumber' => 'setFolioNumber',
        'extraCharges' => 'setExtraCharges',
        'noShowIndicator' => 'setNoShowIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrivalDate' => 'getArrivalDate',
        'departureDate' => 'getDepartureDate',
        'folioNumber' => 'getFolioNumber',
        'extraCharges' => 'getExtraCharges',
        'noShowIndicator' => 'getNoShowIndicator'
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
        $this->container['arrivalDate'] = $data['arrivalDate'] ?? null;
        $this->container['departureDate'] = $data['departureDate'] ?? null;
        $this->container['folioNumber'] = $data['folioNumber'] ?? null;
        $this->container['extraCharges'] = $data['extraCharges'] ?? null;
        $this->container['noShowIndicator'] = $data['noShowIndicator'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null !== $this->container['folioNumber'] && (mb_strlen($this->container['folioNumber']) > 20)) {
            $invalidProperties[] = "invalid value for 'folioNumber', the character length must be smaller than or equal to 20.";
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
     * Gets arrivalDate
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->container['arrivalDate'];
    }

    /**
     * Sets arrivalDate
     *
     * @param \DateTime $arrivalDate Date of arrival
     *
     * @return $this
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->container['arrivalDate'] = $arrivalDate;

        return $this;
    }

    /**
     * Gets departureDate
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->container['departureDate'];
    }

    /**
     * Sets departureDate
     *
     * @param \DateTime $departureDate Date of departure
     *
     * @return $this
     */
    public function setDepartureDate($departureDate)
    {
        $this->container['departureDate'] = $departureDate;

        return $this;
    }

    /**
     * Gets folioNumber
     *
     * @return string
     */
    public function getFolioNumber()
    {
        return $this->container['folioNumber'];
    }

    /**
     * Sets folioNumber
     *
     * @param string $folioNumber Portfolio number
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setFolioNumber($folioNumber)
    {
        if (null !== $folioNumber && (mb_strlen($folioNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $folioNumber when calling Lodging., must be smaller than or equal to 20.');
        }

        $this->container['folioNumber'] = $folioNumber;

        return $this;
    }

    /**
     * Gets extraCharges
     *
     * @return \FirstData\ApiClient\Model\LodgingExtraCharges[]
     */
    public function getExtraCharges()
    {
        return $this->container['extraCharges'];
    }

    /**
     * Sets extraCharges
     *
     * @param \FirstData\ApiClient\Model\LodgingExtraCharges[] $extraCharges extraCharges
     *
     * @return $this
     */
    public function setExtraCharges($extraCharges)
    {
        $this->container['extraCharges'] = $extraCharges;

        return $this;
    }

    /**
     * Gets noShowIndicator
     *
     * @return bool
     */
    public function getNoShowIndicator()
    {
        return $this->container['noShowIndicator'];
    }

    /**
     * Sets noShowIndicator
     *
     * @param bool $noShowIndicator noShowIndicator
     *
     * @return $this
     */
    public function setNoShowIndicator($noShowIndicator)
    {
        $this->container['noShowIndicator'] = $noShowIndicator;

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

