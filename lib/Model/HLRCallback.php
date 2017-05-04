<?php
/**
 * HLRCallback
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SMS Fusion API
 *
 * This is the SMS Fusion API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@smsfusion.com.au
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * HLRCallback Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HLRCallback implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'HLR Callback';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'msisdn' => 'int',
        'status' => 'string',
        'country' => 'string',
        'operator' => 'string',
        'mccmnc' => 'int',
        'duration' => 'string',
        'message' => 'string',
        'extended' => 'string',
        'cost' => 'float'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'msisdn' => 'msisdn',
        'status' => 'status',
        'country' => 'country',
        'operator' => 'operator',
        'mccmnc' => 'mccmnc',
        'duration' => 'duration',
        'message' => 'message',
        'extended' => 'extended',
        'cost' => 'cost'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'msisdn' => 'setMsisdn',
        'status' => 'setStatus',
        'country' => 'setCountry',
        'operator' => 'setOperator',
        'mccmnc' => 'setMccmnc',
        'duration' => 'setDuration',
        'message' => 'setMessage',
        'extended' => 'setExtended',
        'cost' => 'setCost'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'msisdn' => 'getMsisdn',
        'status' => 'getStatus',
        'country' => 'getCountry',
        'operator' => 'getOperator',
        'mccmnc' => 'getMccmnc',
        'duration' => 'getDuration',
        'message' => 'getMessage',
        'extended' => 'getExtended',
        'cost' => 'getCost'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_VALID = 'valid';
    const STATUS_INVALID = 'invalid';
    const STATUS_UNKNOWN = 'unknown';
    const DURATION_PERM = 'perm';
    const DURATION_TEMP = 'temp';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VALID,
            self::STATUS_INVALID,
            self::STATUS_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDurationAllowableValues()
    {
        return [
            self::DURATION_PERM,
            self::DURATION_TEMP,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['msisdn'] = isset($data['msisdn']) ? $data['msisdn'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['mccmnc'] = isset($data['mccmnc']) ? $data['mccmnc'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['extended'] = isset($data['extended']) ? $data['extended'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["valid", "invalid", "unknown"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'valid', 'invalid', 'unknown'.";
        }

        $allowed_values = ["perm", "temp"];
        if (!in_array($this->container['duration'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'duration', must be one of 'perm', 'temp'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["valid", "invalid", "unknown"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["perm", "temp"];
        if (!in_array($this->container['duration'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique ID for response
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets msisdn
     * @return int
     */
    public function getMsisdn()
    {
        return $this->container['msisdn'];
    }

    /**
     * Sets msisdn
     * @param int $msisdn The MSISDN of the number queried
     * @return $this
     */
    public function setMsisdn($msisdn)
    {
        $this->container['msisdn'] = $msisdn;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Short status code of the response
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('valid', 'invalid', 'unknown');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'valid', 'invalid', 'unknown'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country ISO 3166-2 country code
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets operator
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     * @param string $operator The operator attached to the MSISDN
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets mccmnc
     * @return int
     */
    public function getMccmnc()
    {
        return $this->container['mccmnc'];
    }

    /**
     * Sets mccmnc
     * @param int $mccmnc MCC and MNC of MSDISDN
     * @return $this
     */
    public function setMccmnc($mccmnc)
    {
        $this->container['mccmnc'] = $mccmnc;

        return $this;
    }

    /**
     * Gets duration
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param string $duration If the response code is temporary or permenant
     * @return $this
     */
    public function setDuration($duration)
    {
        $allowed_values = array('perm', 'temp');
        if (!is_null($duration) && (!in_array($duration, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'duration', must be one of 'perm', 'temp'");
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message Full status code of the response
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets extended
     * @return string
     */
    public function getExtended()
    {
        return $this->container['extended'];
    }

    /**
     * Sets extended
     * @param string $extended Extended explanation of the status code
     * @return $this
     */
    public function setExtended($extended)
    {
        $this->container['extended'] = $extended;

        return $this;
    }

    /**
     * Gets cost
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param float $cost Cost of the response
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

