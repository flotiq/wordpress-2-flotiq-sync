<?php
/**
 * MediaWithoutInternalAllOfTrim
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
 * MediaWithoutInternalAllOfTrim Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MediaWithoutInternalAllOfTrim implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_mediaWithoutInternal_allOf_trim';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'top' => 'float',
        'left' => 'float',
        'right' => 'float',
        'width' => 'float',
        'bottom' => 'float',
        'height' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'top' => null,
        'left' => null,
        'right' => null,
        'width' => null,
        'bottom' => null,
        'height' => null
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
        'top' => 'top',
        'left' => 'left',
        'right' => 'right',
        'width' => 'width',
        'bottom' => 'bottom',
        'height' => 'height'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'top' => 'setTop',
        'left' => 'setLeft',
        'right' => 'setRight',
        'width' => 'setWidth',
        'bottom' => 'setBottom',
        'height' => 'setHeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'top' => 'getTop',
        'left' => 'getLeft',
        'right' => 'getRight',
        'width' => 'getWidth',
        'bottom' => 'getBottom',
        'height' => 'getHeight'
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
        $this->container['top'] = $data['top'] ?? null;
        $this->container['left'] = $data['left'] ?? null;
        $this->container['right'] = $data['right'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['bottom'] = $data['bottom'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
        }
        if (($this->container['top'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'top', must be smaller than or equal to 9999999.";
        }

        if (($this->container['top'] < 0)) {
            $invalidProperties[] = "invalid value for 'top', must be bigger than or equal to 0.";
        }

        if ($this->container['left'] === null) {
            $invalidProperties[] = "'left' can't be null";
        }
        if (($this->container['left'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'left', must be smaller than or equal to 9999999.";
        }

        if (($this->container['left'] < 0)) {
            $invalidProperties[] = "invalid value for 'left', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['right']) && ($this->container['right'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'right', must be smaller than or equal to 9999999.";
        }

        if (!is_null($this->container['right']) && ($this->container['right'] < 0)) {
            $invalidProperties[] = "invalid value for 'right', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['width']) && ($this->container['width'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 9999999.";
        }

        if (!is_null($this->container['width']) && ($this->container['width'] < 1)) {
            $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bottom']) && ($this->container['bottom'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'bottom', must be smaller than or equal to 9999999.";
        }

        if (!is_null($this->container['bottom']) && ($this->container['bottom'] < 0)) {
            $invalidProperties[] = "invalid value for 'bottom', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['height']) && ($this->container['height'] > 9999999)) {
            $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 9999999.";
        }

        if (!is_null($this->container['height']) && ($this->container['height'] < 1)) {
            $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 1.";
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
     * Gets top
     *
     * @return float
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param float $top top
     *
     * @return self
     */
    public function setTop($top)
    {

        if (($top > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $top when calling MediaWithoutInternalAllOfTrim., must be smaller than or equal to 9999999.');
        }
        if (($top < 0)) {
            throw new \InvalidArgumentException('invalid value for $top when calling MediaWithoutInternalAllOfTrim., must be bigger than or equal to 0.');
        }

        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets left
     *
     * @return float
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param float $left left
     *
     * @return self
     */
    public function setLeft($left)
    {

        if (($left > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $left when calling MediaWithoutInternalAllOfTrim., must be smaller than or equal to 9999999.');
        }
        if (($left < 0)) {
            throw new \InvalidArgumentException('invalid value for $left when calling MediaWithoutInternalAllOfTrim., must be bigger than or equal to 0.');
        }

        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets right
     *
     * @return float|null
     */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
     * Sets right
     *
     * @param float|null $right right
     *
     * @return self
     */
    public function setRight($right)
    {

        if (!is_null($right) && ($right > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $right when calling MediaWithoutInternalAllOfTrim., must be smaller than or equal to 9999999.');
        }
        if (!is_null($right) && ($right < 0)) {
            throw new \InvalidArgumentException('invalid value for $right when calling MediaWithoutInternalAllOfTrim., must be bigger than or equal to 0.');
        }

        $this->container['right'] = $right;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {

        if (!is_null($width) && ($width > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $width when calling MediaWithoutInternalAllOfTrim., must be smaller than or equal to 9999999.');
        }
        if (!is_null($width) && ($width < 1)) {
            throw new \InvalidArgumentException('invalid value for $width when calling MediaWithoutInternalAllOfTrim., must be bigger than or equal to 1.');
        }

        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets bottom
     *
     * @return float|null
     */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
     * Sets bottom
     *
     * @param float|null $bottom bottom
     *
     * @return self
     */
    public function setBottom($bottom)
    {

        if (!is_null($bottom) && ($bottom > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $bottom when calling MediaWithoutInternalAllOfTrim., must be smaller than or equal to 9999999.');
        }
        if (!is_null($bottom) && ($bottom < 0)) {
            throw new \InvalidArgumentException('invalid value for $bottom when calling MediaWithoutInternalAllOfTrim., must be bigger than or equal to 0.');
        }

        $this->container['bottom'] = $bottom;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {

        if (!is_null($height) && ($height > 9999999)) {
            throw new \InvalidArgumentException('invalid value for $height when calling MediaWithoutInternalAllOfTrim., must be smaller than or equal to 9999999.');
        }
        if (!is_null($height) && ($height < 1)) {
            throw new \InvalidArgumentException('invalid value for $height when calling MediaWithoutInternalAllOfTrim., must be bigger than or equal to 1.');
        }

        $this->container['height'] = $height;

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


