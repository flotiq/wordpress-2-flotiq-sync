# OpenAPI\Client\ContentMediaApi

All URIs are relative to *https://api.flotiq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchCreateMedia**](ContentMediaApi.md#batchCreateMedia) | **POST** /api/v1/content/_media/batch | 
[**batchDeleteMedia**](ContentMediaApi.md#batchDeleteMedia) | **POST** /api/v1/content/_media/batch-delete | 
[**createMedia**](ContentMediaApi.md#createMedia) | **POST** /api/v1/content/_media | 
[**deleteMedia**](ContentMediaApi.md#deleteMedia) | **DELETE** /api/v1/content/_media/{id} | 
[**getMedia**](ContentMediaApi.md#getMedia) | **GET** /api/v1/content/_media/{id} | 
[**getRemovedMedia**](ContentMediaApi.md#getRemovedMedia) | **GET** /api/v1/content/_media/removed | 
[**listMedia**](ContentMediaApi.md#listMedia) | **GET** /api/v1/content/_media | 
[**updateMedia**](ContentMediaApi.md#updateMedia) | **PUT** /api/v1/content/_media/{id} | 



## batchCreateMedia

> \OpenAPI\Client\Model\BatchResponseSuccess batchCreateMedia($update_existing, $media_without_internal)



Allows you to create or create and update up to 100 objects of Media type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2FbatchCreate_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$media_without_internal = [{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925},{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}]; // \OpenAPI\Client\Model\MediaWithoutInternal[] | 

try {
    $result = $apiInstance->batchCreateMedia($update_existing, $media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->batchCreateMedia: ', $e->getMessage(), PHP_EOL;
}
?>
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

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchDeleteMedia

> \OpenAPI\Client\Model\InlineResponse200 batchDeleteMedia($request_body)



Allows you to dlete up to 100 objects of Media type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2FbatchDelete_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["_media-1","_media-2"]; // string[] | 

try {
    $result = $apiInstance->batchDeleteMedia($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->batchDeleteMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createMedia

> \OpenAPI\Client\Model\Media createMedia($media_without_internal)



Allows you to create object of Media type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2Fcreate_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_without_internal = {"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}; // \OpenAPI\Client\Model\MediaWithoutInternal | 

try {
    $result = $apiInstance->createMedia($media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->createMedia: ', $e->getMessage(), PHP_EOL;
}
?>
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

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteMedia

> deleteMedia($id)



Removes Media object.<br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2Fdelete_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier

try {
    $apiInstance->deleteMedia($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->deleteMedia: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMedia

> \OpenAPI\Client\Model\Media getMedia($id, $hydrate)



Returns all information about Media object. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2Fget_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->getMedia($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->getMedia: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRemovedMedia

> string[] getRemovedMedia($deleted_after)



Get ids of removed Media objects. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2FgetRemoved_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->getRemovedMedia($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->getRemovedMedia: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMedia

> \OpenAPI\Client\Model\MediaList listMedia($page, $limit, $order_by, $order_direction, $hydrate, $filters)



List objects of Media type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2Flist_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = internal.updatedAt; // string | Order by field
$order_direction = asc; // string | Order direction
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible
$filters = {"slug":{"type":"contains","filter":"test"},"title":{"type":"contains","filter":"test"}}; // string | List filters

try {
    $result = $apiInstance->listMedia($page, $limit, $order_by, $order_direction, $hydrate, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->listMedia: ', $e->getMessage(), PHP_EOL;
}
?>
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

### Return type

[**\OpenAPI\Client\Model\MediaList**](../Model/MediaList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateMedia

> \OpenAPI\Client\Model\Media updateMedia($id, $media_without_internal)



Allows update of the Media object, it has to have all fields, as this operation overwrites the object. All properties  not included in the payload will be lost. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Media%2Fupdate_media'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media-1; // string | ContentObject identifier
$media_without_internal = {"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}; // \OpenAPI\Client\Model\MediaWithoutInternal | 

try {
    $result = $apiInstance->updateMedia($id, $media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->updateMedia: ', $e->getMessage(), PHP_EOL;
}
?>
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

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

