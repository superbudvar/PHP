<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class CarRental
 *
 * @category Class
 * @description Additional data specific to the car rental industry
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CarRental implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CarRental';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreementNumber' => 'string',
        'renterName' => 'string',
        'returnCity' => 'string',
        'returnDate' => \DateTime::class,
        'pickupDate' => \DateTime::class,
        'rentalClassId' => 'string',
        'extraCharges' => '\FirstData\ApiClient\Model\CarRentalExtraCharges[]',
        'noShowIndicator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreementNumber' => null,
        'renterName' => null,
        'returnCity' => null,
        'returnDate' => 'date',
        'pickupDate' => 'date',
        'rentalClassId' => null,
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
        'agreementNumber' => 'agreementNumber',
        'renterName' => 'renterName',
        'returnCity' => 'returnCity',
        'returnDate' => 'returnDate',
        'pickupDate' => 'pickupDate',
        'rentalClassId' => 'rentalClassId',
        'extraCharges' => 'extraCharges',
        'noShowIndicator' => 'noShowIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementNumber' => 'setAgreementNumber',
        'renterName' => 'setRenterName',
        'returnCity' => 'setReturnCity',
        'returnDate' => 'setReturnDate',
        'pickupDate' => 'setPickupDate',
        'rentalClassId' => 'setRentalClassId',
        'extraCharges' => 'setExtraCharges',
        'noShowIndicator' => 'setNoShowIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementNumber' => 'getAgreementNumber',
        'renterName' => 'getRenterName',
        'returnCity' => 'getReturnCity',
        'returnDate' => 'getReturnDate',
        'pickupDate' => 'getPickupDate',
        'rentalClassId' => 'getRentalClassId',
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
        $this->container['agreementNumber'] = $data['agreementNumber'] ?? null;
        $this->container['renterName'] = $data['renterName'] ?? null;
        $this->container['returnCity'] = $data['returnCity'] ?? null;
        $this->container['returnDate'] = $data['returnDate'] ?? null;
        $this->container['pickupDate'] = $data['pickupDate'] ?? null;
        $this->container['rentalClassId'] = $data['rentalClassId'] ?? null;
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

        if (null !== $this->container['agreementNumber'] && (mb_strlen($this->container['agreementNumber']) > 20)) {
            $invalidProperties[] = "invalid value for 'agreementNumber', the character length must be smaller than or equal to 20.";
        }

        if (null !== $this->container['renterName'] && (mb_strlen($this->container['renterName']) > 20)) {
            $invalidProperties[] = "invalid value for 'renterName', the character length must be smaller than or equal to 20.";
        }

        if (null !== $this->container['returnCity'] && (mb_strlen($this->container['returnCity']) > 20)) {
            $invalidProperties[] = "invalid value for 'returnCity', the character length must be smaller than or equal to 20.";
        }

        if (null !== $this->container['rentalClassId'] && (mb_strlen($this->container['rentalClassId']) > 6)) {
            $invalidProperties[] = "invalid value for 'rentalClassId', the character length must be smaller than or equal to 6.";
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
     * Gets agreementNumber
     *
     * @return string
     */
    public function getAgreementNumber()
    {
        return $this->container['agreementNumber'];
    }

    /**
     * Sets agreementNumber
     *
     * @param string $agreementNumber agreementNumber
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setAgreementNumber($agreementNumber)
    {
        if (null !== $agreementNumber && (mb_strlen($agreementNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $agreementNumber when calling CarRental., must be smaller than or equal to 20.');
        }

        $this->container['agreementNumber'] = $agreementNumber;

        return $this;
    }

    /**
     * Gets renterName
     *
     * @return string
     */
    public function getRenterName()
    {
        return $this->container['renterName'];
    }

    /**
     * Sets renterName
     *
     * @param string $renterName renterName
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setRenterName($renterName)
    {
        if (null !== $renterName && (mb_strlen($renterName) > 20)) {
            throw new \InvalidArgumentException('invalid length for $renterName when calling CarRental., must be smaller than or equal to 20.');
        }

        $this->container['renterName'] = $renterName;

        return $this;
    }

    /**
     * Gets returnCity
     *
     * @return string
     */
    public function getReturnCity()
    {
        return $this->container['returnCity'];
    }

    /**
     * Sets returnCity
     *
     * @param string $returnCity returnCity
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setReturnCity($returnCity)
    {
        if (null !== $returnCity && (mb_strlen($returnCity) > 20)) {
            throw new \InvalidArgumentException('invalid length for $returnCity when calling CarRental., must be smaller than or equal to 20.');
        }

        $this->container['returnCity'] = $returnCity;

        return $this;
    }

    /**
     * Gets returnDate
     *
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->container['returnDate'];
    }

    /**
     * Sets returnDate
     *
     * @param \DateTime $returnDate returnDate
     *
     * @return $this
     */
    public function setReturnDate($returnDate)
    {
        $this->container['returnDate'] = $returnDate;

        return $this;
    }

    /**
     * Gets pickupDate
     *
     * @return \DateTime
     */
    public function getPickupDate()
    {
        return $this->container['pickupDate'];
    }

    /**
     * Sets pickupDate
     *
     * @param \DateTime $pickupDate pickupDate
     *
     * @return $this
     */
    public function setPickupDate($pickupDate)
    {
        $this->container['pickupDate'] = $pickupDate;

        return $this;
    }

    /**
     * Gets rentalClassId
     *
     * @return string
     */
    public function getRentalClassId()
    {
        return $this->container['rentalClassId'];
    }

    /**
     * Sets rentalClassId
     *
     * @param string $rentalClassId rentalClassId
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setRentalClassId($rentalClassId)
    {
        if (null !== $rentalClassId && (mb_strlen($rentalClassId) > 6)) {
            throw new \InvalidArgumentException('invalid length for $rentalClassId when calling CarRental., must be smaller than or equal to 6.');
        }

        $this->container['rentalClassId'] = $rentalClassId;

        return $this;
    }

    /**
     * Gets extraCharges
     *
     * @return \FirstData\ApiClient\Model\CarRentalExtraCharges[]
     */
    public function getExtraCharges()
    {
        return $this->container['extraCharges'];
    }

    /**
     * Sets extraCharges
     *
     * @param \FirstData\ApiClient\Model\CarRentalExtraCharges[] $extraCharges extraCharges
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


