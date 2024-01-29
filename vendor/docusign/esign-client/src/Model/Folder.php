<?php
/**
 * Folder
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * Folder Class Doc Comment
 *
 * @category    Class
 * @description This object contains details about a folder.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Folder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'folder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'filter' => '\DocuSign\eSign\Model\Filter',
        'folder_id' => '?string',
        'folder_items' => '\DocuSign\eSign\Model\FolderItemV2[]',
        'folders' => '\DocuSign\eSign\Model\Folder[]',
        'has_access' => '?string',
        'has_sub_folders' => '?string',
        'item_count' => '?string',
        'name' => '?string',
        'owner' => '\DocuSign\eSign\Model\UserInfo',
        'parent_folder_id' => '?string',
        'parent_folder_uri' => '?string',
        'sub_folder_count' => '?string',
        'type' => '?string',
        'uri' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_details' => null,
        'filter' => null,
        'folder_id' => null,
        'folder_items' => null,
        'folders' => null,
        'has_access' => null,
        'has_sub_folders' => null,
        'item_count' => null,
        'name' => null,
        'owner' => null,
        'parent_folder_id' => null,
        'parent_folder_uri' => null,
        'sub_folder_count' => null,
        'type' => null,
        'uri' => null
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
        'error_details' => 'errorDetails',
        'filter' => 'filter',
        'folder_id' => 'folderId',
        'folder_items' => 'folderItems',
        'folders' => 'folders',
        'has_access' => 'hasAccess',
        'has_sub_folders' => 'hasSubFolders',
        'item_count' => 'itemCount',
        'name' => 'name',
        'owner' => 'owner',
        'parent_folder_id' => 'parentFolderId',
        'parent_folder_uri' => 'parentFolderUri',
        'sub_folder_count' => 'subFolderCount',
        'type' => 'type',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_details' => 'setErrorDetails',
        'filter' => 'setFilter',
        'folder_id' => 'setFolderId',
        'folder_items' => 'setFolderItems',
        'folders' => 'setFolders',
        'has_access' => 'setHasAccess',
        'has_sub_folders' => 'setHasSubFolders',
        'item_count' => 'setItemCount',
        'name' => 'setName',
        'owner' => 'setOwner',
        'parent_folder_id' => 'setParentFolderId',
        'parent_folder_uri' => 'setParentFolderUri',
        'sub_folder_count' => 'setSubFolderCount',
        'type' => 'setType',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_details' => 'getErrorDetails',
        'filter' => 'getFilter',
        'folder_id' => 'getFolderId',
        'folder_items' => 'getFolderItems',
        'folders' => 'getFolders',
        'has_access' => 'getHasAccess',
        'has_sub_folders' => 'getHasSubFolders',
        'item_count' => 'getItemCount',
        'name' => 'getName',
        'owner' => 'getOwner',
        'parent_folder_id' => 'getParentFolderId',
        'parent_folder_uri' => 'getParentFolderUri',
        'sub_folder_count' => 'getSubFolderCount',
        'type' => 'getType',
        'uri' => 'getUri'
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
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['folder_items'] = isset($data['folder_items']) ? $data['folder_items'] : null;
        $this->container['folders'] = isset($data['folders']) ? $data['folders'] : null;
        $this->container['has_access'] = isset($data['has_access']) ? $data['has_access'] : null;
        $this->container['has_sub_folders'] = isset($data['has_sub_folders']) ? $data['has_sub_folders'] : null;
        $this->container['item_count'] = isset($data['item_count']) ? $data['item_count'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['parent_folder_id'] = isset($data['parent_folder_id']) ? $data['parent_folder_id'] : null;
        $this->container['parent_folder_uri'] = isset($data['parent_folder_uri']) ? $data['parent_folder_uri'] : null;
        $this->container['sub_folder_count'] = isset($data['sub_folder_count']) ? $data['sub_folder_count'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details Array or errors.
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \DocuSign\eSign\Model\Filter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \DocuSign\eSign\Model\Filter $filter An object used to present a filtered view of the items in a folder.
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return ?string
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param ?string $folder_id 
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets folder_items
     *
     * @return \DocuSign\eSign\Model\FolderItemV2[]
     */
    public function getFolderItems()
    {
        return $this->container['folder_items'];
    }

    /**
     * Sets folder_items
     *
     * @param \DocuSign\eSign\Model\FolderItemV2[] $folder_items A list of the envelopes in the specified folder or folders.
     *
     * @return $this
     */
    public function setFolderItems($folder_items)
    {
        $this->container['folder_items'] = $folder_items;

        return $this;
    }

    /**
     * Gets folders
     *
     * @return \DocuSign\eSign\Model\Folder[]
     */
    public function getFolders()
    {
        return $this->container['folders'];
    }

    /**
     * Sets folders
     *
     * @param \DocuSign\eSign\Model\Folder[] $folders A collection of folder objects returned in a response.
     *
     * @return $this
     */
    public function setFolders($folders)
    {
        $this->container['folders'] = $folders;

        return $this;
    }

    /**
     * Gets has_access
     *
     * @return ?string
     */
    public function getHasAccess()
    {
        return $this->container['has_access'];
    }

    /**
     * Sets has_access
     *
     * @param ?string $has_access 
     *
     * @return $this
     */
    public function setHasAccess($has_access)
    {
        $this->container['has_access'] = $has_access;

        return $this;
    }

    /**
     * Gets has_sub_folders
     *
     * @return ?string
     */
    public function getHasSubFolders()
    {
        return $this->container['has_sub_folders'];
    }

    /**
     * Sets has_sub_folders
     *
     * @param ?string $has_sub_folders 
     *
     * @return $this
     */
    public function setHasSubFolders($has_sub_folders)
    {
        $this->container['has_sub_folders'] = $has_sub_folders;

        return $this;
    }

    /**
     * Gets item_count
     *
     * @return ?string
     */
    public function getItemCount()
    {
        return $this->container['item_count'];
    }

    /**
     * Sets item_count
     *
     * @param ?string $item_count 
     *
     * @return $this
     */
    public function setItemCount($item_count)
    {
        $this->container['item_count'] = $item_count;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \DocuSign\eSign\Model\UserInfo $owner Information about the user who owns the folder.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets parent_folder_id
     *
     * @return ?string
     */
    public function getParentFolderId()
    {
        return $this->container['parent_folder_id'];
    }

    /**
     * Sets parent_folder_id
     *
     * @param ?string $parent_folder_id 
     *
     * @return $this
     */
    public function setParentFolderId($parent_folder_id)
    {
        $this->container['parent_folder_id'] = $parent_folder_id;

        return $this;
    }

    /**
     * Gets parent_folder_uri
     *
     * @return ?string
     */
    public function getParentFolderUri()
    {
        return $this->container['parent_folder_uri'];
    }

    /**
     * Sets parent_folder_uri
     *
     * @param ?string $parent_folder_uri 
     *
     * @return $this
     */
    public function setParentFolderUri($parent_folder_uri)
    {
        $this->container['parent_folder_uri'] = $parent_folder_uri;

        return $this;
    }

    /**
     * Gets sub_folder_count
     *
     * @return ?string
     */
    public function getSubFolderCount()
    {
        return $this->container['sub_folder_count'];
    }

    /**
     * Sets sub_folder_count
     *
     * @param ?string $sub_folder_count 
     *
     * @return $this
     */
    public function setSubFolderCount($sub_folder_count)
    {
        $this->container['sub_folder_count'] = $sub_folder_count;

        return $this;
    }

    /**
     * Gets type
     *
     * @return ?string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param ?string $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

