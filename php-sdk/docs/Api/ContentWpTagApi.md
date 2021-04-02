# OpenAPI\Client\ContentWpTagApi

All URIs are relative to *https://api.flotiq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchCreateWpTag**](ContentWpTagApi.md#batchCreateWpTag) | **POST** /api/v1/content/wp_tag/batch | 
[**batchDeleteWpTag**](ContentWpTagApi.md#batchDeleteWpTag) | **POST** /api/v1/content/wp_tag/batch-delete | 
[**createWpTag**](ContentWpTagApi.md#createWpTag) | **POST** /api/v1/content/wp_tag | 
[**deleteWpTag**](ContentWpTagApi.md#deleteWpTag) | **DELETE** /api/v1/content/wp_tag/{id} | 
[**getRemovedWpTag**](ContentWpTagApi.md#getRemovedWpTag) | **GET** /api/v1/content/wp_tag/removed | 
[**getWpTag**](ContentWpTagApi.md#getWpTag) | **GET** /api/v1/content/wp_tag/{id} | 
[**listWpTag**](ContentWpTagApi.md#listWpTag) | **GET** /api/v1/content/wp_tag | 
[**updateWpTag**](ContentWpTagApi.md#updateWpTag) | **PUT** /api/v1/content/wp_tag/{id} | 



## batchCreateWpTag

> \OpenAPI\Client\Model\BatchResponseSuccess batchCreateWpTag($update_existing, $wp_tag_without_internal)



Allows you to create or create and update up to 100 objects of Wp tag type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FbatchCreateWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$wp_tag_without_internal = [{"id":"wp_tag-1","name":"name","slug":"slug","description":"description"},{"id":"wp_tag-2","name":"name","slug":"slug","description":"description"}]; // \OpenAPI\Client\Model\WpTagWithoutInternal[] | 

try {
    $result = $apiInstance->batchCreateWpTag($update_existing, $wp_tag_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->batchCreateWpTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_existing** | **bool**| Overwrite existing objects | [optional] [default to false]
 **wp_tag_without_internal** | [**\OpenAPI\Client\Model\WpTagWithoutInternal[]**](../Model/WpTagWithoutInternal.md)|  | [optional]

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


## batchDeleteWpTag

> \OpenAPI\Client\Model\InlineResponse200 batchDeleteWpTag($request_body)



Allows you to dlete up to 100 objects of Wp tag type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FbatchDeleteWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["wp_tag-1","wp_tag-2"]; // string[] | 

try {
    $result = $apiInstance->batchDeleteWpTag($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->batchDeleteWpTag: ', $e->getMessage(), PHP_EOL;
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


## createWpTag

> \OpenAPI\Client\Model\WpTag createWpTag($wp_tag_without_internal)



Allows you to create object of Wp tag type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FcreateWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wp_tag_without_internal = {"id":"wp_tag-1","name":"name","slug":"slug","description":"description"}; // \OpenAPI\Client\Model\WpTagWithoutInternal | 

try {
    $result = $apiInstance->createWpTag($wp_tag_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->createWpTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_tag_without_internal** | [**\OpenAPI\Client\Model\WpTagWithoutInternal**](../Model/WpTagWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpTag**](../Model/WpTag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWpTag

> deleteWpTag($id)



Removes Wp tag object.<br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FdeleteWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_tag-1; // string | ContentObject identifier

try {
    $apiInstance->deleteWpTag($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->deleteWpTag: ', $e->getMessage(), PHP_EOL;
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


## getRemovedWpTag

> string[] getRemovedWpTag($deleted_after)



Get ids of removed Wp tag objects. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FgetRemovedWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->getRemovedWpTag($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->getRemovedWpTag: ', $e->getMessage(), PHP_EOL;
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


## getWpTag

> \OpenAPI\Client\Model\WpTag getWpTag($id, $hydrate)



Returns all information about Wp tag object. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FgetWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_tag-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->getWpTag($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->getWpTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\WpTag**](../Model/WpTag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWpTag

> \OpenAPI\Client\Model\WpTagList listWpTag($page, $limit, $order_by, $order_direction, $hydrate, $filters)



List objects of Wp tag type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FlistWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
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
    $result = $apiInstance->listWpTag($page, $limit, $order_by, $order_direction, $hydrate, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->listWpTag: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpTagList**](../Model/WpTagList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateWpTag

> \OpenAPI\Client\Model\WpTag updateWpTag($id, $wp_tag_without_internal)



Allows update of the Wp tag object, it has to have all fields, as this operation overwrites the object. All properties  not included in the payload will be lost. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp tag%2FupdateWp_tag'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_tag-1; // string | ContentObject identifier
$wp_tag_without_internal = {"id":"wp_tag-1","name":"name","slug":"slug","description":"description"}; // \OpenAPI\Client\Model\WpTagWithoutInternal | 

try {
    $result = $apiInstance->updateWpTag($id, $wp_tag_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpTagApi->updateWpTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_tag_without_internal** | [**\OpenAPI\Client\Model\WpTagWithoutInternal**](../Model/WpTagWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpTag**](../Model/WpTag.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

