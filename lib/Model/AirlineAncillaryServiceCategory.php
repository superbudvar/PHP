<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class AirlineAncillaryServiceCategory
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AirlineAncillaryServiceCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Airline_ancillaryServiceCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serviceCategory' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serviceCategory' => null
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
        'serviceCategory' => 'serviceCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceCategory' => 'setServiceCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceCategory' => 'getServiceCategory'
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

    const SERVICE_CATEGORY_BUNDLED_SERVICE = 'BUNDLED_SERVICE';
    const SERVICE_CATEGORY_BAGGAGE_FEE = 'BAGGAGE_FEE';
    const SERVICE_CATEGORY_CHANGE_FEE = 'CHANGE_FEE';
    const SERVICE_CATEGORY_CARGO = 'CARGO';
    const SERVICE_CATEGORY_CARBON_OFFSET = 'CARBON_OFFSET';
    const SERVICE_CATEGORY_FREQUENT_FLYER = 'FREQUENT_FLYER';
    const SERVICE_CATEGORY_GIFT_CARD = 'GIFT_CARD';
    const SERVICE_CATEGORY_GROUND_TRANSPORT = 'GROUND_TRANSPORT';
    const SERVICE_CATEGORY_IN_FLIGHT_ENTERTAINMENT = 'IN_FLIGHT_ENTERTAINMENT';
    const SERVICE_CATEGORY_LOUNGE = 'LOUNGE';
    const SERVICE_CATEGORY_MEDICAL = 'MEDICAL';
    const SERVICE_CATEGORY_MEAL_BEVERAGE = 'MEAL_BEVERAGE';
    const SERVICE_CATEGORY_OTHER = 'OTHER';
    const SERVICE_CATEGORY_PASSENGER_ASSIST_FEE = 'PASSENGER_ASSIST_FEE';
    const SERVICE_CATEGORY_PETS = 'PETS';
    const SERVICE_CATEGORY_SEAT_FEES = 'SEAT_FEES';
    const SERVICE_CATEGORY_STANDBY = 'STANDBY';
    const SERVICE_CATEGORY_SERVICE_FEE = 'SERVICE_FEE';
    const SERVICE_CATEGORY_STORE = 'STORE';
    const SERVICE_CATEGORY_TRAVEL_SERVICE = 'TRAVEL_SERVICE';
    const SERVICE_CATEGORY_UNACCOMPANIED_TRAVEL = 'UNACCOMPANIED_TRAVEL';
    const SERVICE_CATEGORY_UPGRADES = 'UPGRADES';
    const SERVICE_CATEGORY_WI_FI = 'WI_FI';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceCategoryAllowableValues()
    {
        return [
            self::SERVICE_CATEGORY_BUNDLED_SERVICE,
            self::SERVICE_CATEGORY_BAGGAGE_FEE,
            self::SERVICE_CATEGORY_CHANGE_FEE,
            self::SERVICE_CATEGORY_CARGO,
            self::SERVICE_CATEGORY_CARBON_OFFSET,
            self::SERVICE_CATEGORY_FREQUENT_FLYER,
            self::SERVICE_CATEGORY_GIFT_CARD,
            self::SERVICE_CATEGORY_GROUND_TRANSPORT,
            self::SERVICE_CATEGORY_IN_FLIGHT_ENTERTAINMENT,
            self::SERVICE_CATEGORY_LOUNGE,
            self::SERVICE_CATEGORY_MEDICAL,
            self::SERVICE_CATEGORY_MEAL_BEVERAGE,
            self::SERVICE_CATEGORY_OTHER,
            self::SERVICE_CATEGORY_PASSENGER_ASSIST_FEE,
            self::SERVICE_CATEGORY_PETS,
            self::SERVICE_CATEGORY_SEAT_FEES,
            self::SERVICE_CATEGORY_STANDBY,
            self::SERVICE_CATEGORY_SERVICE_FEE,
            self::SERVICE_CATEGORY_STORE,
            self::SERVICE_CATEGORY_TRAVEL_SERVICE,
            self::SERVICE_CATEGORY_UNACCOMPANIED_TRAVEL,
            self::SERVICE_CATEGORY_UPGRADES,
            self::SERVICE_CATEGORY_WI_FI
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
        $this->container['serviceCategory'] = $data['serviceCategory'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getServiceCategoryAllowableValues();
        if (null !== $this->container['serviceCategory'] && !\in_array($this->container['serviceCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'serviceCategory', must be one of '%s'",
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
     * Gets serviceCategory
     *
     * @return string
     */
    public function getServiceCategory()
    {
        return $this->container['serviceCategory'];
    }

    /**
     * Sets serviceCategory
     *
     * @param string $serviceCategory serviceCategory
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setServiceCategory($serviceCategory)
    {
        $allowedValues = $this->getServiceCategoryAllowableValues();
        if (null !== $serviceCategory && !\in_array($serviceCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'serviceCategory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serviceCategory'] = $serviceCategory;

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

