# OpenAPI\Client\ContentWpAuthorApi

All URIs are relative to *https://api.flotiq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchCreateWpAuthor**](ContentWpAuthorApi.md#batchCreateWpAuthor) | **POST** /api/v1/content/wp_author/batch | 
[**batchDeleteWpAuthor**](ContentWpAuthorApi.md#batchDeleteWpAuthor) | **POST** /api/v1/content/wp_author/batch-delete | 
[**createWpAuthor**](ContentWpAuthorApi.md#createWpAuthor) | **POST** /api/v1/content/wp_author | 
[**deleteWpAuthor**](ContentWpAuthorApi.md#deleteWpAuthor) | **DELETE** /api/v1/content/wp_author/{id} | 
[**getRemovedWpAuthor**](ContentWpAuthorApi.md#getRemovedWpAuthor) | **GET** /api/v1/content/wp_author/removed | 
[**getWpAuthor**](ContentWpAuthorApi.md#getWpAuthor) | **GET** /api/v1/content/wp_author/{id} | 
[**listWpAuthor**](ContentWpAuthorApi.md#listWpAuthor) | **GET** /api/v1/content/wp_author | 
[**updateWpAuthor**](ContentWpAuthorApi.md#updateWpAuthor) | **PUT** /api/v1/content/wp_author/{id} | 



## batchCreateWpAuthor

> \OpenAPI\Client\Model\BatchResponseSuccess batchCreateWpAuthor($update_existing, $wp_author_without_internal)



Allows you to create or create and update up to 100 objects of Wp author type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FbatchCreateWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$wp_author_without_internal = [{"id":"wp_author-1","name":"name","slug":"slug","description":"description"},{"id":"wp_author-2","name":"name","slug":"slug","description":"description"}]; // \OpenAPI\Client\Model\WpAuthorWithoutInternal[] | 

try {
    $result = $apiInstance->batchCreateWpAuthor($update_existing, $wp_author_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->batchCreateWpAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_existing** | **bool**| Overwrite existing objects | [optional] [default to false]
 **wp_author_without_internal** | [**\OpenAPI\Client\Model\WpAuthorWithoutInternal[]**](../Model/WpAuthorWithoutInternal.md)|  | [optional]

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


## batchDeleteWpAuthor

> \OpenAPI\Client\Model\InlineResponse200 batchDeleteWpAuthor($request_body)



Allows you to dlete up to 100 objects of Wp author type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FbatchDeleteWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["wp_author-1","wp_author-2"]; // string[] | 

try {
    $result = $apiInstance->batchDeleteWpAuthor($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->batchDeleteWpAuthor: ', $e->getMessage(), PHP_EOL;
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


## createWpAuthor

> \OpenAPI\Client\Model\WpAuthor createWpAuthor($wp_author_without_internal)



Allows you to create object of Wp author type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FcreateWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wp_author_without_internal = {"id":"wp_author-1","name":"name","slug":"slug","description":"description"}; // \OpenAPI\Client\Model\WpAuthorWithoutInternal | 

try {
    $result = $apiInstance->createWpAuthor($wp_author_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->createWpAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_author_without_internal** | [**\OpenAPI\Client\Model\WpAuthorWithoutInternal**](../Model/WpAuthorWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpAuthor**](../Model/WpAuthor.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteWpAuthor

> deleteWpAuthor($id)



Removes Wp author object.<br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FdeleteWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_author-1; // string | ContentObject identifier

try {
    $apiInstance->deleteWpAuthor($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->deleteWpAuthor: ', $e->getMessage(), PHP_EOL;
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


## getRemovedWpAuthor

> string[] getRemovedWpAuthor($deleted_after)



Get ids of removed Wp author objects. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FgetRemovedWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->getRemovedWpAuthor($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->getRemovedWpAuthor: ', $e->getMessage(), PHP_EOL;
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


## getWpAuthor

> \OpenAPI\Client\Model\WpAuthor getWpAuthor($id, $hydrate)



Returns all information about Wp author object. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FgetWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_author-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->getWpAuthor($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->getWpAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\WpAuthor**](../Model/WpAuthor.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWpAuthor

> \OpenAPI\Client\Model\WpAuthorList listWpAuthor($page, $limit, $order_by, $order_direction, $hydrate, $filters)



List objects of Wp author type. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FlistWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
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
    $result = $apiInstance->listWpAuthor($page, $limit, $order_by, $order_direction, $hydrate, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->listWpAuthor: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpAuthorList**](../Model/WpAuthorList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateWpAuthor

> \OpenAPI\Client\Model\WpAuthor updateWpAuthor($id, $wp_author_without_internal)



Allows update of the Wp author object, it has to have all fields, as this operation overwrites the object. All properties  not included in the payload will be lost. <br /><a target='_blank' href='https://apidoc.flotiq.com/?url=https%3A%2F%2Fapi.flotiq.com%2Fapi%2Fv1%2Fopen-api-schema.json%3Fauth_token%3D65fc997d1ad4ce38498a32cd237105ae#%2FContent: Wp author%2FupdateWp_author'><button class=\"flotiq-button\">Try it out</button><a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpAuthorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_author-1; // string | ContentObject identifier
$wp_author_without_internal = {"id":"wp_author-1","name":"name","slug":"slug","description":"description"}; // \OpenAPI\Client\Model\WpAuthorWithoutInternal | 

try {
    $result = $apiInstance->updateWpAuthor($id, $wp_author_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->updateWpAuthor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_author_without_internal** | [**\OpenAPI\Client\Model\WpAuthorWithoutInternal**](../Model/WpAuthorWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpAuthor**](../Model/WpAuthor.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

