# OpenAPI\Client\ContentWpPostApi

All URIs are relative to *https://api.flotiq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchCreateWpPost**](ContentWpPostApi.md#batchCreateWpPost) | **POST** /api/v1/content/wp_post/batch | 
[**batchDeleteWpPost**](ContentWpPostApi.md#batchDeleteWpPost) | **POST** /api/v1/content/wp_post/batch-delete | 
[**createWpPost**](ContentWpPostApi.md#createWpPost) | **POST** /api/v1/content/wp_post | 
[**deleteWpPost**](ContentWpPostApi.md#deleteWpPost) | **DELETE** /api/v1/content/wp_post/{id} | 
[**getRemovedWpPost**](ContentWpPostApi.md#getRemovedWpPost) | **GET** /api/v1/content/wp_post/removed | 
[**getWpPost**](ContentWpPostApi.md#getWpPost) | **GET** /api/v1/content/wp_post/{id} | 
[**listWpPost**](ContentWpPostApi.md#listWpPost) | **GET** /api/v1/content/wp_post | 
[**updateWpPost**](ContentWpPostApi.md#updateWpPost) | **PUT** /api/v1/content/wp_post/{id} | 



## batchCreateWpPost

> \OpenAPI\Client\Model\BatchResponseSuccess batchCreateWpPost($update_existing, $wp_post_without_internal)



Allows you to create or create and update up to 100 objects of Wp post type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FbatchCreateWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$wp_post_without_internal = [{"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]},{"id":"wp_post-2","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}]; // \OpenAPI\Client\Model\WpPostWithoutInternal[] | 

try {
    $result = $apiInstance->batchCreateWpPost($update_existing, $wp_post_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->batchCreateWpPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_existing** | **bool**| Overwrite existing objects | [optional] [default to false]
 **wp_post_without_internal** | [**\OpenAPI\Client\Model\WpPostWithoutInternal[]**](../Model/WpPostWithoutInternal.md)|  | [optional]

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


## batchDeleteWpPost

> \OpenAPI\Client\Model\InlineResponse200 batchDeleteWpPost($request_body)



Allows you to dlete up to 100 objects of Wp post type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FbatchDeleteWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["wp_post-1","wp_post-2"]; // string[] | 

try {
    $result = $apiInstance->batchDeleteWpPost($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->batchDeleteWpPost: ', $e->getMessage(), PHP_EOL;
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


## createWpPost

> \OpenAPI\Client\Model\WpPost createWpPost($wp_post_without_internal)



Allows you to create object of Wp post type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FcreateWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wp_post_without_internal = {"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPostWithoutInternal | 

try {
    $result = $apiInstance->createWpPost($wp_post_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->createWpPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_post_without_internal** | [**\OpenAPI\Client\Model\WpPostWithoutInternal**](../Model/WpPostWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpPost**](../Model/WpPost.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWpPost

> deleteWpPost($id)



Removes Wp post object.<br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FdeleteWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_post-1; // string | ContentObject identifier

try {
    $apiInstance->deleteWpPost($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->deleteWpPost: ', $e->getMessage(), PHP_EOL;
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


## getRemovedWpPost

> string[] getRemovedWpPost($deleted_after)



Get ids of removed Wp post objects. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FgetRemovedWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->getRemovedWpPost($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->getRemovedWpPost: ', $e->getMessage(), PHP_EOL;
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


## getWpPost

> \OpenAPI\Client\Model\WpPost getWpPost($id, $hydrate)



Returns all information about Wp post object. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FgetWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_post-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->getWpPost($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->getWpPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\WpPost**](../Model/WpPost.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWpPost

> \OpenAPI\Client\Model\WpPostList listWpPost($page, $limit, $order_by, $order_direction, $hydrate, $filters)



List objects of Wp post type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FlistWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
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
    $result = $apiInstance->listWpPost($page, $limit, $order_by, $order_direction, $hydrate, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->listWpPost: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpPostList**](../Model/WpPostList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateWpPost

> \OpenAPI\Client\Model\WpPost updateWpPost($id, $wp_post_without_internal)



Allows update of the Wp post object, it has to have all fields, as this operation overwrites the object. All properties  not included in the payload will be lost. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp post%2FupdateWp_post'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_post-1; // string | ContentObject identifier
$wp_post_without_internal = {"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPostWithoutInternal | 

try {
    $result = $apiInstance->updateWpPost($id, $wp_post_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->updateWpPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_post_without_internal** | [**\OpenAPI\Client\Model\WpPostWithoutInternal**](../Model/WpPostWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpPost**](../Model/WpPost.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

