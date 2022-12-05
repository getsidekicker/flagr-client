<?php
/**
 * EvaluationBatchRequest
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 1.1.14
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * EvaluationBatchRequest Class Doc Comment
 *
 * @category Class
 * @package  Flagr\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EvaluationBatchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'evaluationBatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'entities' => '\Flagr\Client\Model\EvaluationEntity[]',
        'enable_debug' => 'bool',
        'flag_ids' => 'int[]',
        'flag_keys' => 'string[]',
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
        'entities' => null,
        'enable_debug' => null,
        'flag_ids' => 'int64',
        'flag_keys' => null,
        'flag_tags' => null,
        'flag_tags_operator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'entities' => false,
        'enable_debug' => false,
        'flag_ids' => false,
        'flag_keys' => false,
        'flag_tags' => false,
        'flag_tags_operator' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'entities' => 'entities',
        'enable_debug' => 'enableDebug',
        'flag_ids' => 'flagIDs',
        'flag_keys' => 'flagKeys',
        'flag_tags' => 'flagTags',
        'flag_tags_operator' => 'flagTagsOperator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'entities' => 'setEntities',
        'enable_debug' => 'setEnableDebug',
        'flag_ids' => 'setFlagIds',
        'flag_keys' => 'setFlagKeys',
        'flag_tags' => 'setFlagTags',
        'flag_tags_operator' => 'setFlagTagsOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'entities' => 'getEntities',
        'enable_debug' => 'getEnableDebug',
        'flag_ids' => 'getFlagIds',
        'flag_keys' => 'getFlagKeys',
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
        $this->setIfExists('entities', $data ?? [], null);
        $this->setIfExists('enable_debug', $data ?? [], null);
        $this->setIfExists('flag_ids', $data ?? [], null);
        $this->setIfExists('flag_keys', $data ?? [], null);
        $this->setIfExists('flag_tags', $data ?? [], null);
        $this->setIfExists('flag_tags_operator', $data ?? [], 'ANY');
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['entities'] === null) {
            $invalidProperties[] = "'entities' can't be null";
        }
        if (((is_countable($this->container['entities']) ? count($this->container['entities']) : 0) < 1)) {
            $invalidProperties[] = "invalid value for 'entities', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['flag_ids']) && ((is_countable($this->container['flag_ids']) ? count($this->container['flag_ids']) : 0) < 1)) {
            $invalidProperties[] = "invalid value for 'flag_ids', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['flag_keys']) && ((is_countable($this->container['flag_keys']) ? count($this->container['flag_keys']) : 0) < 1)) {
            $invalidProperties[] = "invalid value for 'flag_keys', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['flag_tags']) && ((is_countable($this->container['flag_tags']) ? count($this->container['flag_tags']) : 0) < 1)) {
            $invalidProperties[] = "invalid value for 'flag_tags', number of items must be greater than or equal to 1.";
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
     * Gets entities
     *
     * @return \Flagr\Client\Model\EvaluationEntity[]
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \Flagr\Client\Model\EvaluationEntity[] $entities entities
     *
     * @return self
     */
    public function setEntities($entities)
    {
        if (is_null($entities)) {
            throw new \InvalidArgumentException('non-nullable entities cannot be null');
        }


        if ((count($entities) < 1)) {
            throw new \InvalidArgumentException('invalid length for $entities when calling EvaluationBatchRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['entities'] = $entities;

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
        if (is_null($enable_debug)) {
            throw new \InvalidArgumentException('non-nullable enable_debug cannot be null');
        }
        $this->container['enable_debug'] = $enable_debug;

        return $this;
    }

    /**
     * Gets flag_ids
     *
     * @return int[]|null
     */
    public function getFlagIds()
    {
        return $this->container['flag_ids'];
    }

    /**
     * Sets flag_ids
     *
     * @param int[]|null $flag_ids flagIDs
     *
     * @return self
     */
    public function setFlagIds($flag_ids)
    {
        if (is_null($flag_ids)) {
            throw new \InvalidArgumentException('non-nullable flag_ids cannot be null');
        }


        if ((count($flag_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $flag_ids when calling EvaluationBatchRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['flag_ids'] = $flag_ids;

        return $this;
    }

    /**
     * Gets flag_keys
     *
     * @return string[]|null
     */
    public function getFlagKeys()
    {
        return $this->container['flag_keys'];
    }

    /**
     * Sets flag_keys
     *
     * @param string[]|null $flag_keys flagKeys. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results.
     *
     * @return self
     */
    public function setFlagKeys($flag_keys)
    {
        if (is_null($flag_keys)) {
            throw new \InvalidArgumentException('non-nullable flag_keys cannot be null');
        }


        if ((count($flag_keys) < 1)) {
            throw new \InvalidArgumentException('invalid length for $flag_keys when calling EvaluationBatchRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['flag_keys'] = $flag_keys;

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
     * @param string[]|null $flag_tags flagTags. Either flagIDs, flagKeys or flagTags works. If pass in multiples, Flagr may return duplicate results.
     *
     * @return self
     */
    public function setFlagTags($flag_tags)
    {
        if (is_null($flag_tags)) {
            throw new \InvalidArgumentException('non-nullable flag_tags cannot be null');
        }


        if ((count($flag_tags) < 1)) {
            throw new \InvalidArgumentException('invalid length for $flag_tags when calling EvaluationBatchRequest., number of items must be greater than or equal to 1.');
        }
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
        if (is_null($flag_tags_operator)) {
            throw new \InvalidArgumentException('non-nullable flag_tags_operator cannot be null');
        }
        $allowedValues = $this->getFlagTagsOperatorAllowableValues();
        if (!in_array($flag_tags_operator, $allowedValues, true)) {
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
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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
