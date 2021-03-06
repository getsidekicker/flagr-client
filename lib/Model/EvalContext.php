<?php
/**
 * EvalContext
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Flagr\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Flagr
 *
 * Flagr is a feature flagging, A/B testing and dynamic configuration microservice. The base path for all the APIs is \"/api/v1\".
 *
 * The version of the OpenAPI document: 1.1.13
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Flagr\Client\Model;

use ArrayAccess;
use Flagr\Client\ObjectSerializer;

/**
 * EvalContext Class Doc Comment
 *
 * @category Class
 * @package  Flagr\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EvalContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'evalContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'entity_id' => 'string',
        'entity_type' => 'string',
        'entity_context' => 'object',
        'enable_debug' => 'bool',
        'flag_id' => 'int',
        'flag_key' => 'string',
        'flag_tags' => 'string[]',
        'flag_tags_operator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'entity_id' => null,
        'entity_type' => null,
        'entity_context' => null,
        'enable_debug' => null,
        'flag_id' => 'int64',
        'flag_key' => null,
        'flag_tags' => null,
        'flag_tags_operator' => null
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
    protected static array $attributeMap = [
        'entity_id' => 'entityID',
        'entity_type' => 'entityType',
        'entity_context' => 'entityContext',
        'enable_debug' => 'enableDebug',
        'flag_id' => 'flagID',
        'flag_key' => 'flagKey',
        'flag_tags' => 'flagTags',
        'flag_tags_operator' => 'flagTagsOperator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'entity_id' => 'setEntityId',
        'entity_type' => 'setEntityType',
        'entity_context' => 'setEntityContext',
        'enable_debug' => 'setEnableDebug',
        'flag_id' => 'setFlagId',
        'flag_key' => 'setFlagKey',
        'flag_tags' => 'setFlagTags',
        'flag_tags_operator' => 'setFlagTagsOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'entity_id' => 'getEntityId',
        'entity_type' => 'getEntityType',
        'entity_context' => 'getEntityContext',
        'enable_debug' => 'getEnableDebug',
        'flag_id' => 'getFlagId',
        'flag_key' => 'getFlagKey',
        'flag_tags' => 'getFlagTags',
        'flag_tags_operator' => 'getFlagTagsOperator'
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

    public const FLAG_TAGS_OPERATOR_ANY = 'ANY';
    public const FLAG_TAGS_OPERATOR_ALL = 'ALL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlagTagsOperatorAllowableValues()
    {
        return [
            self::FLAG_TAGS_OPERATOR_ANY,
            self::FLAG_TAGS_OPERATOR_ALL,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['entity_id'] = $data['entity_id'] ?? null;
        $this->container['entity_type'] = $data['entity_type'] ?? null;
        $this->container['entity_context'] = $data['entity_context'] ?? null;
        $this->container['enable_debug'] = $data['enable_debug'] ?? null;
        $this->container['flag_id'] = $data['flag_id'] ?? null;
        $this->container['flag_key'] = $data['flag_key'] ?? null;
        $this->container['flag_tags'] = $data['flag_tags'] ?? null;
        $this->container['flag_tags_operator'] = $data['flag_tags_operator'] ?? self::FLAG_TAGS_OPERATOR_ANY;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['flag_id']) && ($this->container['flag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'flag_id', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getFlagTagsOperatorAllowableValues();
        if (!is_null($this->container['flag_tags_operator']) && !in_array($this->container['flag_tags_operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'flag_tags_operator', must be one of '%s'",
                $this->container['flag_tags_operator'],
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets entity_id
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string|null $entity_id entityID is used to deterministically at random to evaluate the flag result. If it's empty, flagr will randomly generate one.
     *
     * @return self
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string|null $entity_type entity_type
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets entity_context
     *
     * @return object|null
     */
    public function getEntityContext()
    {
        return $this->container['entity_context'];
    }

    /**
     * Sets entity_context
     *
     * @param object|null $entity_context entity_context
     *
     * @return self
     */
    public function setEntityContext($entity_context)
    {
        $this->container['entity_context'] = $entity_context;

        return $this;
    }

    /**
     * Gets enable_debug
     *
     * @return bool|null
     */
    public function getEnableDebug()
    {
        return $this->container['enable_debug'];
    }

    /**
     * Sets enable_debug
     *
     * @param bool|null $enable_debug enable_debug
     *
     * @return self
     */
    public function setEnableDebug($enable_debug)
    {
        $this->container['enable_debug'] = $enable_debug;

        return $this;
    }

    /**
     * Gets flag_id
     *
     * @return int|null
     */
    public function getFlagId()
    {
        return $this->container['flag_id'];
    }

    /**
     * Sets flag_id
     *
     * @param int|null $flag_id flagID
     *
     * @return self
     */
    public function setFlagId($flag_id)
    {
        if (!is_null($flag_id) && ($flag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $flag_id when calling EvalContext., must be bigger than or equal to 1.');
        }

        $this->container['flag_id'] = $flag_id;

        return $this;
    }

    /**
     * Gets flag_key
     *
     * @return string|null
     */
    public function getFlagKey()
    {
        return $this->container['flag_key'];
    }

    /**
     * Sets flag_key
     *
     * @param string|null $flag_key flagKey. flagID or flagKey will resolve to the same flag. Either works.
     *
     * @return self
     */
    public function setFlagKey($flag_key)
    {
        $this->container['flag_key'] = $flag_key;

        return $this;
    }

    /**
     * Gets flag_tags
     *
     * @return string[]|null
     */
    public function getFlagTags()
    {
        return $this->container['flag_tags'];
    }

    /**
     * Sets flag_tags
     *
     * @param string[]|null $flag_tags flagTags. flagTags looks up flags by tag. Either works.
     *
     * @return self
     */
    public function setFlagTags($flag_tags)
    {
        $this->container['flag_tags'] = $flag_tags;

        return $this;
    }

    /**
     * Gets flag_tags_operator
     *
     * @return string|null
     */
    public function getFlagTagsOperator()
    {
        return $this->container['flag_tags_operator'];
    }

    /**
     * Sets flag_tags_operator
     *
     * @param string|null $flag_tags_operator determine how flagTags is used to filter flags to be evaluated. OR extends the evaluation to those which contains at least one of the provided flagTags or AND limit the evaluation to those which contains all the flagTags.
     *
     * @return self
     */
    public function setFlagTagsOperator($flag_tags_operator)
    {
        $allowedValues = $this->getFlagTagsOperatorAllowableValues();
        if (!is_null($flag_tags_operator) && !in_array($flag_tags_operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'flag_tags_operator', must be one of '%s'",
                    $flag_tags_operator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flag_tags_operator'] = $flag_tags_operator;

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
