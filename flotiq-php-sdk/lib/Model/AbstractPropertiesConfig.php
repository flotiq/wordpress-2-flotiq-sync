<?php
/**
 * AbstractPropertiesConfig
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Flotiq User API
 *
 * ## Getting started  This API Documentation reflects the endpoints defined in your [Flotiq](https://flotiq.com) account. The documentation is generated using an OpenAPI schema describing the API, which can be obtained in several flavors:  - [OAS 3.0/3.1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE)   - without hydration, will not expand relations between content types (this is the default version which provides maximum compatibility with downstream systems)   - with hydration, pass [hydrate=1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;hydrate=1) - use this for a better type support in exported OpenAPI schemas   - without system endpoints, pass [user_only=1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;hydrate=1&amp;user_only=1) - use this to only include your endpoints, without system ones   - for version 3.1, pass [version=3.1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;version=3.1) - [OAS 2.0](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;version=2) - provided for compatibility with several older systems  Check Flotiq documentation for more information about [Flotiq OpenAPI capabilities](https://flotiq.com/docs/API/open-api-schema/), instructions how to generate code and other useful tips.  ### Access to data  There are several methods that you can use to access your data:  * Live API docs - available via &lt;code&gt;Try it out&lt;/code&gt; button available next to each endpoint   * Copying example code on the right side of each endpoint  * By downloading the SDKs available in multiple languages.  * By downloading the Postman collection and importing it into Postman.    Each of these methods is described in length in the [user documentation](https://flotiq.com/docs/).   ### Authorization   In order to make use of the provided documentation, example code, SDKs and so on - you will need to pull out your API key. We recommend that you start with the ReadOnly API Key which will allow you to make all the `GET` requests but will error-out when you try to modify content. Please remember to replace the key for `POST`, `PUT` and `DELETE` calls.   It&#039;s also possible to use scoped API keys - you can create those in the API keys section of the Flotiq user interface. This will allow you to create a key that only authorizes access to a specific content type (or a set of content types, if you choose so). Read more about how to use and create API keys in the [API keys documentation](https://flotiq.com/docs/API/).   ## Object access   Once you define a Content Type it will become available in your Content API as a set of endpoints that will allow you to work with objects:   * create  * list  * update  * delete  * batch create  * retrieve single object.  ### Hydration   When you build Content Types that have relation to others your objects will optionally support hydration of related entities. The endpoints that support object retrieval accept a `hydrate` parameter, which can be used to easily fetch hydrated objects. Since this breaks the standard REST concepts - it&#039;s not enabled by default, but it&#039;s a very handy feature that allows to reduce the amount of HTTP requests sent over the wire and we strongly recommend to use it.
 *
 * The version of the OpenAPI document: 2.0.1
 * Contact: hello@flotiq.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AbstractPropertiesConfig Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AbstractPropertiesConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AbstractPropertiesConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label' => 'string',
        'input_type' => 'string',
        'input_subtype' => 'string',
        'unique' => 'bool',
        'readonly' => 'bool',
        'hidden' => 'bool',
        'validation' => '\OpenAPI\Client\Model\AbstractPropertiesConfigValidation',
        'options' => 'string[]',
        'use_options_with_labels' => 'bool',
        'options_with_labels' => '\OpenAPI\Client\Model\AbstractPropertiesConfigOptionsWithLabelsInner[]',
        'help_text' => 'string',
        'is_title_part' => 'bool',
        'show_time' => 'bool',
        'multiple' => 'bool',
        'block_editor_types' => 'string[]',
        'items' => '\OpenAPI\Client\Model\AbstractContentTypeMetaDefinition',
        'properties_config' => 'array<string,\OpenAPI\Client\Model\AbstractPropertiesConfig>',
        'order' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label' => null,
        'input_type' => null,
        'input_subtype' => null,
        'unique' => null,
        'readonly' => null,
        'hidden' => null,
        'validation' => null,
        'options' => null,
        'use_options_with_labels' => null,
        'options_with_labels' => null,
        'help_text' => null,
        'is_title_part' => null,
        'show_time' => null,
        'multiple' => null,
        'block_editor_types' => null,
        'items' => null,
        'properties_config' => null,
        'order' => null
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
        'label' => 'label',
        'input_type' => 'inputType',
        'input_subtype' => 'inputSubtype',
        'unique' => 'unique',
        'readonly' => 'readonly',
        'hidden' => 'hidden',
        'validation' => 'validation',
        'options' => 'options',
        'use_options_with_labels' => 'useOptionsWithLabels',
        'options_with_labels' => 'optionsWithLabels',
        'help_text' => 'helpText',
        'is_title_part' => 'isTitlePart',
        'show_time' => 'showTime',
        'multiple' => 'multiple',
        'block_editor_types' => 'blockEditorTypes',
        'items' => 'items',
        'properties_config' => 'propertiesConfig',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'input_type' => 'setInputType',
        'input_subtype' => 'setInputSubtype',
        'unique' => 'setUnique',
        'readonly' => 'setReadonly',
        'hidden' => 'setHidden',
        'validation' => 'setValidation',
        'options' => 'setOptions',
        'use_options_with_labels' => 'setUseOptionsWithLabels',
        'options_with_labels' => 'setOptionsWithLabels',
        'help_text' => 'setHelpText',
        'is_title_part' => 'setIsTitlePart',
        'show_time' => 'setShowTime',
        'multiple' => 'setMultiple',
        'block_editor_types' => 'setBlockEditorTypes',
        'items' => 'setItems',
        'properties_config' => 'setPropertiesConfig',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'input_type' => 'getInputType',
        'input_subtype' => 'getInputSubtype',
        'unique' => 'getUnique',
        'readonly' => 'getReadonly',
        'hidden' => 'getHidden',
        'validation' => 'getValidation',
        'options' => 'getOptions',
        'use_options_with_labels' => 'getUseOptionsWithLabels',
        'options_with_labels' => 'getOptionsWithLabels',
        'help_text' => 'getHelpText',
        'is_title_part' => 'getIsTitlePart',
        'show_time' => 'getShowTime',
        'multiple' => 'getMultiple',
        'block_editor_types' => 'getBlockEditorTypes',
        'items' => 'getItems',
        'properties_config' => 'getPropertiesConfig',
        'order' => 'getOrder'
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

    public const INPUT_TYPE_TEXT = 'text';
    public const INPUT_TYPE_TEXTAREA = 'textarea';
    public const INPUT_TYPE_TEXT_MARKDOWN = 'textMarkdown';
    public const INPUT_TYPE_RICHTEXT = 'richtext';
    public const INPUT_TYPE_EMAIL = 'email';
    public const INPUT_TYPE_RADIO = 'radio';
    public const INPUT_TYPE_SELECT = 'select';
    public const INPUT_TYPE_DATE_TIME = 'dateTime';
    public const INPUT_TYPE_CUSTOM = 'custom';
    public const INPUT_TYPE_NUMBER = 'number';
    public const INPUT_TYPE_CHECKBOX = 'checkbox';
    public const INPUT_TYPE_DATASOURCE = 'datasource';
    public const INPUT_TYPE_OBJECT = 'object';
    public const INPUT_TYPE_GEO = 'geo';
    public const INPUT_TYPE_SIMPLE_LIST = 'simpleList';
    public const INPUT_TYPE_BLOCK = 'block';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInputTypeAllowableValues()
    {
        return [
            self::INPUT_TYPE_TEXT,
            self::INPUT_TYPE_TEXTAREA,
            self::INPUT_TYPE_TEXT_MARKDOWN,
            self::INPUT_TYPE_RICHTEXT,
            self::INPUT_TYPE_EMAIL,
            self::INPUT_TYPE_RADIO,
            self::INPUT_TYPE_SELECT,
            self::INPUT_TYPE_DATE_TIME,
            self::INPUT_TYPE_CUSTOM,
            self::INPUT_TYPE_NUMBER,
            self::INPUT_TYPE_CHECKBOX,
            self::INPUT_TYPE_DATASOURCE,
            self::INPUT_TYPE_OBJECT,
            self::INPUT_TYPE_GEO,
            self::INPUT_TYPE_SIMPLE_LIST,
            self::INPUT_TYPE_BLOCK,
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
        $this->container['label'] = $data['label'] ?? null;
        $this->container['input_type'] = $data['input_type'] ?? null;
        $this->container['input_subtype'] = $data['input_subtype'] ?? null;
        $this->container['unique'] = $data['unique'] ?? null;
        $this->container['readonly'] = $data['readonly'] ?? null;
        $this->container['hidden'] = $data['hidden'] ?? null;
        $this->container['validation'] = $data['validation'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['use_options_with_labels'] = $data['use_options_with_labels'] ?? null;
        $this->container['options_with_labels'] = $data['options_with_labels'] ?? null;
        $this->container['help_text'] = $data['help_text'] ?? null;
        $this->container['is_title_part'] = $data['is_title_part'] ?? null;
        $this->container['show_time'] = $data['show_time'] ?? null;
        $this->container['multiple'] = $data['multiple'] ?? null;
        $this->container['block_editor_types'] = $data['block_editor_types'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['properties_config'] = $data['properties_config'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['input_type'] === null) {
            $invalidProperties[] = "'input_type' can't be null";
        }
        $allowedValues = $this->getInputTypeAllowableValues();
        if (!is_null($this->container['input_type']) && !in_array($this->container['input_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'input_type', must be one of '%s'",
                $this->container['input_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['input_subtype']) && !preg_match("/^[a-z]+$/", $this->container['input_subtype'])) {
            $invalidProperties[] = "invalid value for 'input_subtype', must be conform to the pattern /^[a-z]+$/.";
        }

        if ($this->container['unique'] === null) {
            $invalidProperties[] = "'unique' can't be null";
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
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets input_type
     *
     * @return string
     */
    public function getInputType()
    {
        return $this->container['input_type'];
    }

    /**
     * Sets input_type
     *
     * @param string $input_type input_type
     *
     * @return self
     */
    public function setInputType($input_type)
    {
        $allowedValues = $this->getInputTypeAllowableValues();
        if (!in_array($input_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'input_type', must be one of '%s'",
                    $input_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['input_type'] = $input_type;

        return $this;
    }

    /**
     * Gets input_subtype
     *
     * @return string|null
     */
    public function getInputSubtype()
    {
        return $this->container['input_subtype'];
    }

    /**
     * Sets input_subtype
     *
     * @param string|null $input_subtype input_subtype
     *
     * @return self
     */
    public function setInputSubtype($input_subtype)
    {

        if (!is_null($input_subtype) && (!preg_match("/^[a-z]+$/", $input_subtype))) {
            throw new \InvalidArgumentException("invalid value for $input_subtype when calling AbstractPropertiesConfig., must conform to the pattern /^[a-z]+$/.");
        }

        $this->container['input_subtype'] = $input_subtype;

        return $this;
    }

    /**
     * Gets unique
     *
     * @return bool
     */
    public function getUnique()
    {
        return $this->container['unique'];
    }

    /**
     * Sets unique
     *
     * @param bool $unique unique
     *
     * @return self
     */
    public function setUnique($unique)
    {
        $this->container['unique'] = $unique;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return bool|null
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool|null $readonly readonly
     *
     * @return self
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden hidden
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return \OpenAPI\Client\Model\AbstractPropertiesConfigValidation|null
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param \OpenAPI\Client\Model\AbstractPropertiesConfigValidation|null $validation validation
     *
     * @return self
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {


        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets use_options_with_labels
     *
     * @return bool|null
     */
    public function getUseOptionsWithLabels()
    {
        return $this->container['use_options_with_labels'];
    }

    /**
     * Sets use_options_with_labels
     *
     * @param bool|null $use_options_with_labels use_options_with_labels
     *
     * @return self
     */
    public function setUseOptionsWithLabels($use_options_with_labels)
    {
        $this->container['use_options_with_labels'] = $use_options_with_labels;

        return $this;
    }

    /**
     * Gets options_with_labels
     *
     * @return \OpenAPI\Client\Model\AbstractPropertiesConfigOptionsWithLabelsInner[]|null
     */
    public function getOptionsWithLabels()
    {
        return $this->container['options_with_labels'];
    }

    /**
     * Sets options_with_labels
     *
     * @param \OpenAPI\Client\Model\AbstractPropertiesConfigOptionsWithLabelsInner[]|null $options_with_labels options_with_labels
     *
     * @return self
     */
    public function setOptionsWithLabels($options_with_labels)
    {


        $this->container['options_with_labels'] = $options_with_labels;

        return $this;
    }

    /**
     * Gets help_text
     *
     * @return string|null
     */
    public function getHelpText()
    {
        return $this->container['help_text'];
    }

    /**
     * Sets help_text
     *
     * @param string|null $help_text help_text
     *
     * @return self
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /**
     * Gets is_title_part
     *
     * @return bool|null
     */
    public function getIsTitlePart()
    {
        return $this->container['is_title_part'];
    }

    /**
     * Sets is_title_part
     *
     * @param bool|null $is_title_part is_title_part
     *
     * @return self
     */
    public function setIsTitlePart($is_title_part)
    {
        $this->container['is_title_part'] = $is_title_part;

        return $this;
    }

    /**
     * Gets show_time
     *
     * @return bool|null
     */
    public function getShowTime()
    {
        return $this->container['show_time'];
    }

    /**
     * Sets show_time
     *
     * @param bool|null $show_time show_time
     *
     * @return self
     */
    public function setShowTime($show_time)
    {
        $this->container['show_time'] = $show_time;

        return $this;
    }

    /**
     * Gets multiple
     *
     * @return bool|null
     */
    public function getMultiple()
    {
        return $this->container['multiple'];
    }

    /**
     * Sets multiple
     *
     * @param bool|null $multiple multiple
     *
     * @return self
     */
    public function setMultiple($multiple)
    {
        $this->container['multiple'] = $multiple;

        return $this;
    }

    /**
     * Gets block_editor_types
     *
     * @return string[]|null
     */
    public function getBlockEditorTypes()
    {
        return $this->container['block_editor_types'];
    }

    /**
     * Sets block_editor_types
     *
     * @param string[]|null $block_editor_types block_editor_types
     *
     * @return self
     */
    public function setBlockEditorTypes($block_editor_types)
    {


        $this->container['block_editor_types'] = $block_editor_types;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\AbstractContentTypeMetaDefinition|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\AbstractContentTypeMetaDefinition|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets properties_config
     *
     * @return array<string,\OpenAPI\Client\Model\AbstractPropertiesConfig>|null
     */
    public function getPropertiesConfig()
    {
        return $this->container['properties_config'];
    }

    /**
     * Sets properties_config
     *
     * @param array<string,\OpenAPI\Client\Model\AbstractPropertiesConfig>|null $properties_config properties_config
     *
     * @return self
     */
    public function setPropertiesConfig($properties_config)
    {
        $this->container['properties_config'] = $properties_config;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string[]|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string[]|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {


        $this->container['order'] = $order;

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


