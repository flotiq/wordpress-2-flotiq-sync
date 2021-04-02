# OpenAPI\Client\ContentWpCategoryApi

All URIs are relative to *https://api.flotiq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchCreateWpCategory**](ContentWpCategoryApi.md#batchCreateWpCategory) | **POST** /api/v1/content/wp_category/batch | 
[**batchDeleteWpCategory**](ContentWpCategoryApi.md#batchDeleteWpCategory) | **POST** /api/v1/content/wp_category/batch-delete | 
[**createWpCategory**](ContentWpCategoryApi.md#createWpCategory) | **POST** /api/v1/content/wp_category | 
[**deleteWpCategory**](ContentWpCategoryApi.md#deleteWpCategory) | **DELETE** /api/v1/content/wp_category/{id} | 
[**getRemovedWpCategory**](ContentWpCategoryApi.md#getRemovedWpCategory) | **GET** /api/v1/content/wp_category/removed | 
[**getWpCategory**](ContentWpCategoryApi.md#getWpCategory) | **GET** /api/v1/content/wp_category/{id} | 
[**listWpCategory**](ContentWpCategoryApi.md#listWpCategory) | **GET** /api/v1/content/wp_category | 
[**updateWpCategory**](ContentWpCategoryApi.md#updateWpCategory) | **PUT** /api/v1/content/wp_category/{id} | 



## batchCreateWpCategory

> \OpenAPI\Client\Model\BatchResponseSuccess batchCreateWpCategory($update_existing, $wp_category_without_internal)



Allows you to create or create and update up to 100 objects of Wp category type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FbatchCreateWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$wp_category_without_internal = [{"id":"wp_category-1","name":"name","slug":"slug","description":"description","parentCategory":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}]},{"id":"wp_category-2","name":"name","slug":"slug","description":"description","parentCategory":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}]}]; // \OpenAPI\Client\Model\WpCategoryWithoutInternal[] | 

try {
    $result = $apiInstance->batchCreateWpCategory($update_existing, $wp_category_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->batchCreateWpCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_existing** | **bool**| Overwrite existing objects | [optional] [default to false]
 **wp_category_without_internal** | [**\OpenAPI\Client\Model\WpCategoryWithoutInternal[]**](../Model/WpCategoryWithoutInternal.md)|  | [optional]

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


## batchDeleteWpCategory

> \OpenAPI\Client\Model\InlineResponse200 batchDeleteWpCategory($request_body)



Allows you to dlete up to 100 objects of Wp category type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FbatchDeleteWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["wp_category-1","wp_category-2"]; // string[] | 

try {
    $result = $apiInstance->batchDeleteWpCategory($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->batchDeleteWpCategory: ', $e->getMessage(), PHP_EOL;
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


## createWpCategory

> \OpenAPI\Client\Model\WpCategory createWpCategory($wp_category_without_internal)



Allows you to create object of Wp category type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FcreateWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wp_category_without_internal = {"id":"wp_category-1","name":"name","slug":"slug","description":"description","parentCategory":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpCategoryWithoutInternal | 

try {
    $result = $apiInstance->createWpCategory($wp_category_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->createWpCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_category_without_internal** | [**\OpenAPI\Client\Model\WpCategoryWithoutInternal**](../Model/WpCategoryWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpCategory**](../Model/WpCategory.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWpCategory

> deleteWpCategory($id)



Removes Wp category object.<br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FdeleteWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_category-1; // string | ContentObject identifier

try {
    $apiInstance->deleteWpCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->deleteWpCategory: ', $e->getMessage(), PHP_EOL;
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


## getRemovedWpCategory

> string[] getRemovedWpCategory($deleted_after)



Get ids of removed Wp category objects. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FgetRemovedWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->getRemovedWpCategory($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->getRemovedWpCategory: ', $e->getMessage(), PHP_EOL;
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


## getWpCategory

> \OpenAPI\Client\Model\WpCategory getWpCategory($id, $hydrate)



Returns all information about Wp category object. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FgetWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_category-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->getWpCategory($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->getWpCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\WpCategory**](../Model/WpCategory.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWpCategory

> \OpenAPI\Client\Model\WpCategoryList listWpCategory($page, $limit, $order_by, $order_direction, $hydrate, $filters)



List objects of Wp category type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FlistWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
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
    $result = $apiInstance->listWpCategory($page, $limit, $order_by, $order_direction, $hydrate, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->listWpCategory: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpCategoryList**](../Model/WpCategoryList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateWpCategory

> \OpenAPI\Client\Model\WpCategory updateWpCategory($id, $wp_category_without_internal)



Allows update of the Wp category object, it has to have all fields, as this operation overwrites the object. All properties  not included in the payload will be lost. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp category%2FupdateWp_category'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_category-1; // string | ContentObject identifier
$wp_category_without_internal = {"id":"wp_category-1","name":"name","slug":"slug","description":"description","parentCategory":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpCategoryWithoutInternal | 

try {
    $result = $apiInstance->updateWpCategory($id, $wp_category_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpCategoryApi->updateWpCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_category_without_internal** | [**\OpenAPI\Client\Model\WpCategoryWithoutInternal**](../Model/WpCategoryWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpCategory**](../Model/WpCategory.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

