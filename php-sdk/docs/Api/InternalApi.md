# OpenAPI\Client\InternalApi

All URIs are relative to *https://api.flotiq.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContentDefinition**](InternalApi.md#deleteContentDefinition) | **DELETE** /api/v1/internal/contenttype/{id} | 
[**getContentDefinition**](InternalApi.md#getContentDefinition) | **GET** /api/v1/internal/contenttype/{id} | 
[**getContentDefinitions**](InternalApi.md#getContentDefinitions) | **GET** /api/v1/internal/contenttype | 
[**postContentDefinition**](InternalApi.md#postContentDefinition) | **POST** /api/v1/internal/contenttype | 
[**putContentDefinition**](InternalApi.md#putContentDefinition) | **PUT** /api/v1/internal/contenttype/{id} | 



## deleteContentDefinition

> deleteContentDefinition($id)



Delete ContentTypeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = product; // string | Id of content type definition

try {
    $apiInstance->deleteContentDefinition($id);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->deleteContentDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of content type definition |

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


## getContentDefinition

> \OpenAPI\Client\Model\ContentTypeDefinitionSchema getContentDefinition($id)



Returns an user-defined Content Definitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = _media; // string | Id of content type definition

try {
    $result = $apiInstance->getContentDefinition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->getContentDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of content type definition |

### Return type

[**\OpenAPI\Client\Model\ContentTypeDefinitionSchema**](../Model/ContentTypeDefinitionSchema.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getContentDefinitions

> \OpenAPI\Client\Model\ContentTypeListResponse getContentDefinitions($page, $limit, $order_by, $order_direction, $name, $label)



Returns an array of user-defined Content Definitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = name; // string | Order by field
$order_direction = asc; // string | Order direction
$name = _media; // string | Filters CTDs by name
$label = Media; // string | Filters CTDs by label

try {
    $result = $apiInstance->getContentDefinitions($page, $limit, $order_by, $order_direction, $name, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->getContentDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**| Listing page number, 1-based | [optional] [default to 1]
 **limit** | **float**| Page limit | [optional] [default to 20]
 **order_by** | **string**| Order by field | [optional] [default to &#39;name&#39;]
 **order_direction** | **string**| Order direction | [optional] [default to &#39;asc&#39;]
 **name** | **string**| Filters CTDs by name | [optional] [default to &#39;&#39;]
 **label** | **string**| Filters CTDs by label | [optional] [default to &#39;&#39;]

### Return type

[**\OpenAPI\Client\Model\ContentTypeListResponse**](../Model/ContentTypeListResponse.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postContentDefinition

> \OpenAPI\Client\Model\ContentTypeDefinitionSchema postContentDefinition($content_type_definition_schema)



Create new ContentTypeDefinition to store new type of ContentObjects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type_definition_schema = new \OpenAPI\Client\Model\ContentTypeDefinitionSchema(); // \OpenAPI\Client\Model\ContentTypeDefinitionSchema | 

try {
    $result = $apiInstance->postContentDefinition($content_type_definition_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->postContentDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type_definition_schema** | [**\OpenAPI\Client\Model\ContentTypeDefinitionSchema**](../Model/ContentTypeDefinitionSchema.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ContentTypeDefinitionSchema**](../Model/ContentTypeDefinitionSchema.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## putContentDefinition

> \OpenAPI\Client\Model\ContentTypeDefinitionSchema putContentDefinition($id, $content_type_definition_schema)



Update ConentTypeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = products; // string | Id of content type definition
$content_type_definition_schema = new \OpenAPI\Client\Model\ContentTypeDefinitionSchema(); // \OpenAPI\Client\Model\ContentTypeDefinitionSchema | 

try {
    $result = $apiInstance->putContentDefinition($id, $content_type_definition_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalApi->putContentDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of content type definition |
 **content_type_definition_schema** | [**\OpenAPI\Client\Model\ContentTypeDefinitionSchema**](../Model/ContentTypeDefinitionSchema.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ContentTypeDefinitionSchema**](../Model/ContentTypeDefinitionSchema.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

