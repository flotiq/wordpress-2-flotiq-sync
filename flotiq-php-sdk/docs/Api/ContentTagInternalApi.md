# OpenAPI\Client\ContentTagInternalApi

All URIs are relative to https://api.flotiq.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagBatchCreate()**](ContentTagInternalApi.md#tagBatchCreate) | **POST** /api/v1/content/_tag/batch | Create a batch of _tag objects
[**tagBatchDelete()**](ContentTagInternalApi.md#tagBatchDelete) | **POST** /api/v1/content/_tag/batch-delete | Delete a batch of _tag objects
[**tagBatchPatch()**](ContentTagInternalApi.md#tagBatchPatch) | **PATCH** /api/v1/content/_tag/batch | Update selected fields of a batch of objects
[**tagCreate()**](ContentTagInternalApi.md#tagCreate) | **POST** /api/v1/content/_tag | Create a _tag object
[**tagDelete()**](ContentTagInternalApi.md#tagDelete) | **DELETE** /api/v1/content/_tag/{id} | Delete a _tag object
[**tagGet()**](ContentTagInternalApi.md#tagGet) | **GET** /api/v1/content/_tag/{id} | Get _tag object by Id
[**tagGetRemoved()**](ContentTagInternalApi.md#tagGetRemoved) | **GET** /api/v1/content/_tag/removed | Get removed object identifiers
[**tagGetVersions()**](ContentTagInternalApi.md#tagGetVersions) | **GET** /api/v1/content/_tag/{id}/version/{versionId} | Get a specific version of _tag object
[**tagList()**](ContentTagInternalApi.md#tagList) | **GET** /api/v1/content/_tag | List _tag objects
[**tagListVersion()**](ContentTagInternalApi.md#tagListVersion) | **GET** /api/v1/content/_tag/{id}/version | List all versions of a _tag object
[**tagPatch()**](ContentTagInternalApi.md#tagPatch) | **PATCH** /api/v1/content/_tag/{id} | Update selected fields of _tag object
[**tagUpdate()**](ContentTagInternalApi.md#tagUpdate) | **PUT** /api/v1/content/_tag/{id} | Update existing _tag object


## `tagBatchCreate()`

```php
tagBatchCreate($update_existing, $tag_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Create a batch of _tag objects

Allows you to create or create and update up to 100 objects of Tag (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$tag_without_internal = [{"id":"_tag-1","name":"name"},{"id":"_tag-2","name":"name"}]; // \OpenAPI\Client\Model\TagWithoutInternal[]

try {
    $result = $apiInstance->tagBatchCreate($update_existing, $tag_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagBatchCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_existing** | **bool**| Overwrite existing objects | [optional] [default to false]
 **tag_without_internal** | [**\OpenAPI\Client\Model\TagWithoutInternal[]**](../Model/TagWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchResponseSuccess**](../Model/BatchResponseSuccess.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagBatchDelete()`

```php
tagBatchDelete($request_body): \OpenAPI\Client\Model\MediaBatchDelete200Response
```

Delete a batch of _tag objects

Allows you to delete up to 100 objects of Tag (internal) type. <br />Request body accepts an array of content object IDs that are to be deleted.<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["_tag-1","_tag-2"]; // string[]

try {
    $result = $apiInstance->tagBatchDelete($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MediaBatchDelete200Response**](../Model/MediaBatchDelete200Response.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagBatchPatch()`

```php
tagBatchPatch($tag_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Update selected fields of a batch of objects

Allows you to update up to 100 objects of Tag (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_without_internal = [{"id":"_tag-1","name":"name"},{"id":"_tag-2","name":"name"}]; // \OpenAPI\Client\Model\TagWithoutInternal[]

try {
    $result = $apiInstance->tagBatchPatch($tag_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagBatchPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_without_internal** | [**\OpenAPI\Client\Model\TagWithoutInternal[]**](../Model/TagWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchResponseSuccess**](../Model/BatchResponseSuccess.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagCreate()`

```php
tagCreate($tag_without_internal): \OpenAPI\Client\Model\Tag
```

Create a _tag object

Allows you to create object of Tag (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_without_internal = {"id":"_tag-1","name":"name"}; // \OpenAPI\Client\Model\TagWithoutInternal

try {
    $result = $apiInstance->tagCreate($tag_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_without_internal** | [**\OpenAPI\Client\Model\TagWithoutInternal**](../Model/TagWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagDelete()`

```php
tagDelete($id)
```

Delete a _tag object

Removes Tag (internal) object.<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _tag-1; // string | ContentObject identifier

try {
    $apiInstance->tagDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |

### Return type

void (empty response body)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagGet()`

```php
tagGet($id, $hydrate): \OpenAPI\Client\Model\Tag
```

Get _tag object by Id

Returns all information about Tag (internal) object. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _tag-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->tagGet($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagGetRemoved()`

```php
tagGetRemoved($deleted_after): string[]
```

Get removed object identifiers

Get ids of removed Tag (internal) objects. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->tagGetRemoved($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagGetRemoved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleted_after** | **string**| Date from which ids of removed objects should be returned | [optional]

### Return type

**string[]**

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagGetVersions()`

```php
tagGetVersions($id, $version_id): \OpenAPI\Client\Model\Tag
```

Get a specific version of _tag object

Return version of Tag (internal) object. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _tag-1; // string | ContentObject identifier
$version_id = version-1; // string | ContentObject version identifier

try {
    $result = $apiInstance->tagGetVersions($id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagGetVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **version_id** | **string**| ContentObject version identifier |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagList()`

```php
tagList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids): \OpenAPI\Client\Model\TagList
```

List _tag objects

List objects of Tag (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible
$filters = {"slug":{"type":"contains","filter":"test"},"title":{"type":"contains","filter":"test"}}; // string | List filters
$ids = array('ids_example'); // string[] | Ids of objects to return.

try {
    $result = $apiInstance->tagList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| Listing page number, 1-based | [optional] [default to 1]
 **limit** | **float**| Page limit | [optional] [default to 20]
 **order_by** | **string**| Order by field | [optional] [default to &#39;internal.createdAt&#39;]
 **order_direction** | **string**| Order direction | [optional] [default to &#39;asc&#39;]
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]
 **filters** | **string**| List filters | [optional] [default to &#39;{}&#39;]
 **ids** | [**string[]**](../Model/string.md)| Ids of objects to return. | [optional]

### Return type

[**\OpenAPI\Client\Model\TagList**](../Model/TagList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagListVersion()`

```php
tagListVersion($id, $page, $limit, $order_by, $order_direction): \OpenAPI\Client\Model\TagVersionsList
```

List all versions of a _tag object

List objects versions of Tag (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _tag-1; // string | ContentObject identifier
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction

try {
    $result = $apiInstance->tagListVersion($id, $page, $limit, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagListVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **page** | **float**| Listing page number, 1-based | [optional] [default to 1]
 **limit** | **float**| Page limit | [optional] [default to 20]
 **order_by** | **string**| Order by field | [optional] [default to &#39;internal.createdAt&#39;]
 **order_direction** | **string**| Order direction | [optional] [default to &#39;asc&#39;]

### Return type

[**\OpenAPI\Client\Model\TagVersionsList**](../Model/TagVersionsList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagPatch()`

```php
tagPatch($id, $tag_without_required): \OpenAPI\Client\Model\Tag
```

Update selected fields of _tag object

Allows update of the Tag (internal) object, but it is unnecessary to specify all the object's properties. Properties not included in the payload will be completed with data from the database. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _tag-1; // string | ContentObject identifier
$tag_without_required = {"id":"_tag-1","name":"name"}; // \OpenAPI\Client\Model\TagWithoutRequired

try {
    $result = $apiInstance->tagPatch($id, $tag_without_required);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **tag_without_required** | [**\OpenAPI\Client\Model\TagWithoutRequired**](../Model/TagWithoutRequired.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tagUpdate()`

```php
tagUpdate($id, $tag_without_internal): \OpenAPI\Client\Model\Tag
```

Update existing _tag object

Allows update of the Tag (internal) object, it has to have all fields, as this operation overwrites the object. All properties not included in the payload will be lost. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentTagInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _tag-1; // string | ContentObject identifier
$tag_without_internal = {"id":"_tag-1","name":"name"}; // \OpenAPI\Client\Model\TagWithoutInternal

try {
    $result = $apiInstance->tagUpdate($id, $tag_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentTagInternalApi->tagUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **tag_without_internal** | [**\OpenAPI\Client\Model\TagWithoutInternal**](../Model/TagWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
