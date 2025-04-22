# OpenAPI\Client\ContentWpAuthorApi

All URIs are relative to https://api.flotiq.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**wpAuthorBatchCreate()**](ContentWpAuthorApi.md#wpAuthorBatchCreate) | **POST** /api/v1/content/wp_author/batch | Create a batch of wp_author objects
[**wpAuthorBatchDelete()**](ContentWpAuthorApi.md#wpAuthorBatchDelete) | **POST** /api/v1/content/wp_author/batch-delete | Delete a batch of Wp_author objects
[**wpAuthorBatchPatch()**](ContentWpAuthorApi.md#wpAuthorBatchPatch) | **PATCH** /api/v1/content/wp_author/batch | Update selected fields of a batch of objects
[**wpAuthorCreate()**](ContentWpAuthorApi.md#wpAuthorCreate) | **POST** /api/v1/content/wp_author | Create a Wp_author object
[**wpAuthorDelete()**](ContentWpAuthorApi.md#wpAuthorDelete) | **DELETE** /api/v1/content/wp_author/{id} | Delete a Wp_author object
[**wpAuthorGet()**](ContentWpAuthorApi.md#wpAuthorGet) | **GET** /api/v1/content/wp_author/{id} | Get Wp_author object by Id
[**wpAuthorGetRemoved()**](ContentWpAuthorApi.md#wpAuthorGetRemoved) | **GET** /api/v1/content/wp_author/removed | Get removed object identifiers
[**wpAuthorGetVersions()**](ContentWpAuthorApi.md#wpAuthorGetVersions) | **GET** /api/v1/content/wp_author/{id}/version/{versionId} | Get a specific version of Wp_author object
[**wpAuthorList()**](ContentWpAuthorApi.md#wpAuthorList) | **GET** /api/v1/content/wp_author | List Wp_author objects
[**wpAuthorListVersion()**](ContentWpAuthorApi.md#wpAuthorListVersion) | **GET** /api/v1/content/wp_author/{id}/version | List all versions of a Wp_author object
[**wpAuthorPatch()**](ContentWpAuthorApi.md#wpAuthorPatch) | **PATCH** /api/v1/content/wp_author/{id} | Update selected fields of Wp_author object
[**wpAuthorUpdate()**](ContentWpAuthorApi.md#wpAuthorUpdate) | **PUT** /api/v1/content/wp_author/{id} | Update existing Wp_author object


## `wpAuthorBatchCreate()`

```php
wpAuthorBatchCreate($update_existing, $wp_author_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Create a batch of wp_author objects

Allows you to create or create and update up to 100 objects of Wp author type. <br />

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
$wp_author_without_internal = [{"id":"wp_author-1","name":"name","slug":"slug","description":"description"},{"id":"wp_author-2","name":"name","slug":"slug","description":"description"}]; // \OpenAPI\Client\Model\WpAuthorWithoutInternal[]

try {
    $result = $apiInstance->wpAuthorBatchCreate($update_existing, $wp_author_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorBatchCreate: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpAuthorBatchDelete()`

```php
wpAuthorBatchDelete($request_body): \OpenAPI\Client\Model\MediaBatchDelete200Response
```

Delete a batch of Wp_author objects

Allows you to delete up to 100 objects of Wp author type. <br />Request body accepts an array of content object IDs that are to be deleted.<br />

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
$request_body = ["wp_author-1","wp_author-2"]; // string[]

try {
    $result = $apiInstance->wpAuthorBatchDelete($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorBatchDelete: ', $e->getMessage(), PHP_EOL;
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

## `wpAuthorBatchPatch()`

```php
wpAuthorBatchPatch($wp_author_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Update selected fields of a batch of objects

Allows you to update up to 100 objects of Wp author type. <br />

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
$wp_author_without_internal = [{"id":"wp_author-1","name":"name","slug":"slug","description":"description"},{"id":"wp_author-2","name":"name","slug":"slug","description":"description"}]; // \OpenAPI\Client\Model\WpAuthorWithoutInternal[]

try {
    $result = $apiInstance->wpAuthorBatchPatch($wp_author_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorBatchPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_author_without_internal** | [**\OpenAPI\Client\Model\WpAuthorWithoutInternal[]**](../Model/WpAuthorWithoutInternal.md)|  | [optional]

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

## `wpAuthorCreate()`

```php
wpAuthorCreate($wp_author_without_internal): \OpenAPI\Client\Model\WpAuthor
```

Create a Wp_author object

Allows you to create object of Wp author type. <br />

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
$wp_author_without_internal = {"id":"wp_author-1","name":"name","slug":"slug","description":"description"}; // \OpenAPI\Client\Model\WpAuthorWithoutInternal

try {
    $result = $apiInstance->wpAuthorCreate($wp_author_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorCreate: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpAuthorDelete()`

```php
wpAuthorDelete($id)
```

Delete a Wp_author object

Removes Wp author object.<br />

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
    $apiInstance->wpAuthorDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorDelete: ', $e->getMessage(), PHP_EOL;
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

## `wpAuthorGet()`

```php
wpAuthorGet($id, $hydrate): \OpenAPI\Client\Model\WpAuthor
```

Get Wp_author object by Id

Returns all information about Wp author object. <br />

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
    $result = $apiInstance->wpAuthorGet($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorGet: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpAuthorGetRemoved()`

```php
wpAuthorGetRemoved($deleted_after): string[]
```

Get removed object identifiers

Get ids of removed Wp author objects. <br />

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
    $result = $apiInstance->wpAuthorGetRemoved($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorGetRemoved: ', $e->getMessage(), PHP_EOL;
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

## `wpAuthorGetVersions()`

```php
wpAuthorGetVersions($id, $version_id): \OpenAPI\Client\Model\WpAuthor
```

Get a specific version of Wp_author object

Return version of Wp author object. <br />

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
$version_id = version-1; // string | ContentObject version identifier

try {
    $result = $apiInstance->wpAuthorGetVersions($id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorGetVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **version_id** | **string**| ContentObject version identifier |

### Return type

[**\OpenAPI\Client\Model\WpAuthor**](../Model/WpAuthor.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpAuthorList()`

```php
wpAuthorList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids): \OpenAPI\Client\Model\WpAuthorList
```

List Wp_author objects

List objects of Wp author type. <br />

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
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible
$filters = {"slug":{"type":"contains","filter":"test"},"title":{"type":"contains","filter":"test"}}; // string | List filters
$ids = array('ids_example'); // string[] | Ids of objects to return.

try {
    $result = $apiInstance->wpAuthorList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpAuthorList**](../Model/WpAuthorList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpAuthorListVersion()`

```php
wpAuthorListVersion($id, $page, $limit, $order_by, $order_direction): \OpenAPI\Client\Model\WpAuthorVersionsList
```

List all versions of a Wp_author object

List objects versions of Wp author type. <br />

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
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction

try {
    $result = $apiInstance->wpAuthorListVersion($id, $page, $limit, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorListVersion: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpAuthorVersionsList**](../Model/WpAuthorVersionsList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpAuthorPatch()`

```php
wpAuthorPatch($id, $wp_author_without_required): \OpenAPI\Client\Model\WpAuthor
```

Update selected fields of Wp_author object

Allows update of the Wp author object, but it is unnecessary to specify all the object's properties. Properties not included in the payload will be completed with data from the database. <br />

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
$wp_author_without_required = {"id":"wp_author-1","name":"name","slug":"slug","description":"description"}; // \OpenAPI\Client\Model\WpAuthorWithoutRequired

try {
    $result = $apiInstance->wpAuthorPatch($id, $wp_author_without_required);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_author_without_required** | [**\OpenAPI\Client\Model\WpAuthorWithoutRequired**](../Model/WpAuthorWithoutRequired.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpAuthor**](../Model/WpAuthor.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpAuthorUpdate()`

```php
wpAuthorUpdate($id, $wp_author_without_internal): \OpenAPI\Client\Model\WpAuthor
```

Update existing Wp_author object

Allows update of the Wp author object, it has to have all fields, as this operation overwrites the object. All properties not included in the payload will be lost. <br />

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
$wp_author_without_internal = {"id":"wp_author-1","name":"name","slug":"slug","description":"description"}; // \OpenAPI\Client\Model\WpAuthorWithoutInternal

try {
    $result = $apiInstance->wpAuthorUpdate($id, $wp_author_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpAuthorApi->wpAuthorUpdate: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
