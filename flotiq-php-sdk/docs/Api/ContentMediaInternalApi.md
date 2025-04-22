# OpenAPI\Client\ContentMediaInternalApi

All URIs are relative to https://api.flotiq.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaBatchCreate()**](ContentMediaInternalApi.md#mediaBatchCreate) | **POST** /api/v1/content/_media/batch | Create a batch of _media objects
[**mediaBatchDelete()**](ContentMediaInternalApi.md#mediaBatchDelete) | **POST** /api/v1/content/_media/batch-delete | Delete a batch of _media objects
[**mediaBatchPatch()**](ContentMediaInternalApi.md#mediaBatchPatch) | **PATCH** /api/v1/content/_media/batch | Update selected fields of a batch of objects
[**mediaCreate()**](ContentMediaInternalApi.md#mediaCreate) | **POST** /api/v1/content/_media | Create a _media object
[**mediaDelete()**](ContentMediaInternalApi.md#mediaDelete) | **DELETE** /api/v1/content/_media/{id} | Delete a _media object
[**mediaGet()**](ContentMediaInternalApi.md#mediaGet) | **GET** /api/v1/content/_media/{id} | Get _media object by Id
[**mediaGetRemoved()**](ContentMediaInternalApi.md#mediaGetRemoved) | **GET** /api/v1/content/_media/removed | Get removed object identifiers
[**mediaGetVersions()**](ContentMediaInternalApi.md#mediaGetVersions) | **GET** /api/v1/content/_media/{id}/version/{versionId} | Get a specific version of _media object
[**mediaList()**](ContentMediaInternalApi.md#mediaList) | **GET** /api/v1/content/_media | List _media objects
[**mediaListVersion()**](ContentMediaInternalApi.md#mediaListVersion) | **GET** /api/v1/content/_media/{id}/version | List all versions of a _media object
[**mediaPatch()**](ContentMediaInternalApi.md#mediaPatch) | **PATCH** /api/v1/content/_media/{id} | Update selected fields of _media object
[**mediaUpdate()**](ContentMediaInternalApi.md#mediaUpdate) | **PUT** /api/v1/content/_media/{id} | Update existing _media object


## `mediaBatchCreate()`

```php
mediaBatchCreate($update_existing, $media_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Create a batch of _media objects

Allows you to create or create and update up to 100 objects of Media (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$media_without_internal = [{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925},{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}]; // \OpenAPI\Client\Model\MediaWithoutInternal[]

try {
    $result = $apiInstance->mediaBatchCreate($update_existing, $media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaBatchCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_existing** | **bool**| Overwrite existing objects | [optional] [default to false]
 **media_without_internal** | [**\OpenAPI\Client\Model\MediaWithoutInternal[]**](../Model/MediaWithoutInternal.md)|  | [optional]

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

## `mediaBatchDelete()`

```php
mediaBatchDelete($request_body): \OpenAPI\Client\Model\MediaBatchDelete200Response
```

Delete a batch of _media objects

Allows you to delete up to 100 objects of Media (internal) type. <br />Request body accepts an array of content object IDs that are to be deleted.<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["_media-1","_media-2"]; // string[]

try {
    $result = $apiInstance->mediaBatchDelete($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaBatchDelete: ', $e->getMessage(), PHP_EOL;
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

## `mediaBatchPatch()`

```php
mediaBatchPatch($media_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Update selected fields of a batch of objects

Allows you to update up to 100 objects of Media (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_without_internal = [{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925},{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}]; // \OpenAPI\Client\Model\MediaWithoutInternal[]

try {
    $result = $apiInstance->mediaBatchPatch($media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaBatchPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_without_internal** | [**\OpenAPI\Client\Model\MediaWithoutInternal[]**](../Model/MediaWithoutInternal.md)|  | [optional]

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

## `mediaCreate()`

```php
mediaCreate($media_without_internal): \OpenAPI\Client\Model\Media
```

Create a _media object

Allows you to create object of Media (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_without_internal = {"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}; // \OpenAPI\Client\Model\MediaWithoutInternal

try {
    $result = $apiInstance->mediaCreate($media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_without_internal** | [**\OpenAPI\Client\Model\MediaWithoutInternal**](../Model/MediaWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Media**](../Model/Media.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaDelete()`

```php
mediaDelete($id)
```

Delete a _media object

Removes Media (internal) object.<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier

try {
    $apiInstance->mediaDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaDelete: ', $e->getMessage(), PHP_EOL;
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

## `mediaGet()`

```php
mediaGet($id, $hydrate): \OpenAPI\Client\Model\Media
```

Get _media object by Id

Returns all information about Media (internal) object. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->mediaGet($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\Media**](../Model/Media.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaGetRemoved()`

```php
mediaGetRemoved($deleted_after): string[]
```

Get removed object identifiers

Get ids of removed Media (internal) objects. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->mediaGetRemoved($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaGetRemoved: ', $e->getMessage(), PHP_EOL;
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

## `mediaGetVersions()`

```php
mediaGetVersions($id, $version_id): \OpenAPI\Client\Model\Media
```

Get a specific version of _media object

Return version of Media (internal) object. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier
$version_id = version-1; // string | ContentObject version identifier

try {
    $result = $apiInstance->mediaGetVersions($id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaGetVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **version_id** | **string**| ContentObject version identifier |

### Return type

[**\OpenAPI\Client\Model\Media**](../Model/Media.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaList()`

```php
mediaList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids): \OpenAPI\Client\Model\MediaList
```

List _media objects

List objects of Media (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
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
    $result = $apiInstance->mediaList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\MediaList**](../Model/MediaList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaListVersion()`

```php
mediaListVersion($id, $page, $limit, $order_by, $order_direction): \OpenAPI\Client\Model\MediaVersionsList
```

List all versions of a _media object

List objects versions of Media (internal) type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction

try {
    $result = $apiInstance->mediaListVersion($id, $page, $limit, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaListVersion: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\MediaVersionsList**](../Model/MediaVersionsList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaPatch()`

```php
mediaPatch($id, $media_without_required): \OpenAPI\Client\Model\Media
```

Update selected fields of _media object

Allows update of the Media (internal) object, but it is unnecessary to specify all the object's properties. Properties not included in the payload will be completed with data from the database. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier
$media_without_required = {"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}; // \OpenAPI\Client\Model\MediaWithoutRequired

try {
    $result = $apiInstance->mediaPatch($id, $media_without_required);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **media_without_required** | [**\OpenAPI\Client\Model\MediaWithoutRequired**](../Model/MediaWithoutRequired.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Media**](../Model/Media.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaUpdate()`

```php
mediaUpdate($id, $media_without_internal): \OpenAPI\Client\Model\Media
```

Update existing _media object

Allows update of the Media (internal) object, it has to have all fields, as this operation overwrites the object. All properties not included in the payload will be lost. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier
$media_without_internal = {"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}; // \OpenAPI\Client\Model\MediaWithoutInternal

try {
    $result = $apiInstance->mediaUpdate($id, $media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **media_without_internal** | [**\OpenAPI\Client\Model\MediaWithoutInternal**](../Model/MediaWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Media**](../Model/Media.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
