# OpenAPI\Client\ContentWpPageApi

All URIs are relative to https://api.flotiq.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**wpPageBatchCreate()**](ContentWpPageApi.md#wpPageBatchCreate) | **POST** /api/v1/content/wp_page/batch | Create a batch of wp_page objects
[**wpPageBatchDelete()**](ContentWpPageApi.md#wpPageBatchDelete) | **POST** /api/v1/content/wp_page/batch-delete | Delete a batch of Wp_page objects
[**wpPageBatchPatch()**](ContentWpPageApi.md#wpPageBatchPatch) | **PATCH** /api/v1/content/wp_page/batch | Update selected fields of a batch of objects
[**wpPageCreate()**](ContentWpPageApi.md#wpPageCreate) | **POST** /api/v1/content/wp_page | Create a Wp_page object
[**wpPageDelete()**](ContentWpPageApi.md#wpPageDelete) | **DELETE** /api/v1/content/wp_page/{id} | Delete a Wp_page object
[**wpPageGet()**](ContentWpPageApi.md#wpPageGet) | **GET** /api/v1/content/wp_page/{id} | Get Wp_page object by Id
[**wpPageGetRemoved()**](ContentWpPageApi.md#wpPageGetRemoved) | **GET** /api/v1/content/wp_page/removed | Get removed object identifiers
[**wpPageGetVersions()**](ContentWpPageApi.md#wpPageGetVersions) | **GET** /api/v1/content/wp_page/{id}/version/{versionId} | Get a specific version of Wp_page object
[**wpPageList()**](ContentWpPageApi.md#wpPageList) | **GET** /api/v1/content/wp_page | List Wp_page objects
[**wpPageListVersion()**](ContentWpPageApi.md#wpPageListVersion) | **GET** /api/v1/content/wp_page/{id}/version | List all versions of a Wp_page object
[**wpPagePatch()**](ContentWpPageApi.md#wpPagePatch) | **PATCH** /api/v1/content/wp_page/{id} | Update selected fields of Wp_page object
[**wpPageUpdate()**](ContentWpPageApi.md#wpPageUpdate) | **PUT** /api/v1/content/wp_page/{id} | Update existing Wp_page object


## `wpPageBatchCreate()`

```php
wpPageBatchCreate($update_existing, $wp_page_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Create a batch of wp_page objects

Allows you to create or create and update up to 100 objects of Wp page type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$wp_page_without_internal = [{"id":"wp_page-1","slug":"slug","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","modified":"modified","parentPage":[{"dataUrl":"/api/v1/content/wp_page/wp_page-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]},{"id":"wp_page-2","slug":"slug","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","modified":"modified","parentPage":[{"dataUrl":"/api/v1/content/wp_page/wp_page-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}]; // \OpenAPI\Client\Model\WpPageWithoutInternal[]

try {
    $result = $apiInstance->wpPageBatchCreate($update_existing, $wp_page_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageBatchCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_existing** | **bool**| Overwrite existing objects | [optional] [default to false]
 **wp_page_without_internal** | [**\OpenAPI\Client\Model\WpPageWithoutInternal[]**](../Model/WpPageWithoutInternal.md)|  | [optional]

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

## `wpPageBatchDelete()`

```php
wpPageBatchDelete($request_body): \OpenAPI\Client\Model\MediaBatchDelete200Response
```

Delete a batch of Wp_page objects

Allows you to delete up to 100 objects of Wp page type. <br />Request body accepts an array of content object IDs that are to be deleted.<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = ["wp_page-1","wp_page-2"]; // string[]

try {
    $result = $apiInstance->wpPageBatchDelete($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageBatchDelete: ', $e->getMessage(), PHP_EOL;
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

## `wpPageBatchPatch()`

```php
wpPageBatchPatch($wp_page_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Update selected fields of a batch of objects

Allows you to update up to 100 objects of Wp page type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wp_page_without_internal = [{"id":"wp_page-1","slug":"slug","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","modified":"modified","parentPage":[{"dataUrl":"/api/v1/content/wp_page/wp_page-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]},{"id":"wp_page-2","slug":"slug","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","modified":"modified","parentPage":[{"dataUrl":"/api/v1/content/wp_page/wp_page-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}]; // \OpenAPI\Client\Model\WpPageWithoutInternal[]

try {
    $result = $apiInstance->wpPageBatchPatch($wp_page_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageBatchPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_page_without_internal** | [**\OpenAPI\Client\Model\WpPageWithoutInternal[]**](../Model/WpPageWithoutInternal.md)|  | [optional]

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

## `wpPageCreate()`

```php
wpPageCreate($wp_page_without_internal): \OpenAPI\Client\Model\WpPage
```

Create a Wp_page object

Allows you to create object of Wp page type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wp_page_without_internal = {"id":"wp_page-1","slug":"slug","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","modified":"modified","parentPage":[{"dataUrl":"/api/v1/content/wp_page/wp_page-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPageWithoutInternal

try {
    $result = $apiInstance->wpPageCreate($wp_page_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_page_without_internal** | [**\OpenAPI\Client\Model\WpPageWithoutInternal**](../Model/WpPageWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpPage**](../Model/WpPage.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPageDelete()`

```php
wpPageDelete($id)
```

Delete a Wp_page object

Removes Wp page object.<br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_page-1; // string | ContentObject identifier

try {
    $apiInstance->wpPageDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageDelete: ', $e->getMessage(), PHP_EOL;
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

## `wpPageGet()`

```php
wpPageGet($id, $hydrate): \OpenAPI\Client\Model\WpPage
```

Get Wp_page object by Id

Returns all information about Wp page object. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_page-1; // string | ContentObject identifier
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible

try {
    $result = $apiInstance->wpPageGet($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **hydrate** | **float**| Should hydrate relations of object, for now only one level of hydration is possible | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\WpPage**](../Model/WpPage.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPageGetRemoved()`

```php
wpPageGetRemoved($deleted_after): string[]
```

Get removed object identifiers

Get ids of removed Wp page objects. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleted_after = 2020-01-01 12:00:00; // string | Date from which ids of removed objects should be returned

try {
    $result = $apiInstance->wpPageGetRemoved($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageGetRemoved: ', $e->getMessage(), PHP_EOL;
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

## `wpPageGetVersions()`

```php
wpPageGetVersions($id, $version_id): \OpenAPI\Client\Model\WpPage
```

Get a specific version of Wp_page object

Return version of Wp page object. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_page-1; // string | ContentObject identifier
$version_id = version-1; // string | ContentObject version identifier

try {
    $result = $apiInstance->wpPageGetVersions($id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageGetVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **version_id** | **string**| ContentObject version identifier |

### Return type

[**\OpenAPI\Client\Model\WpPage**](../Model/WpPage.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPageList()`

```php
wpPageList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids): \OpenAPI\Client\Model\WpPageList
```

List Wp_page objects

List objects of Wp page type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
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
    $result = $apiInstance->wpPageList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpPageList**](../Model/WpPageList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPageListVersion()`

```php
wpPageListVersion($id, $page, $limit, $order_by, $order_direction): \OpenAPI\Client\Model\WpPageVersionsList
```

List all versions of a Wp_page object

List objects versions of Wp page type. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_page-1; // string | ContentObject identifier
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction

try {
    $result = $apiInstance->wpPageListVersion($id, $page, $limit, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageListVersion: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpPageVersionsList**](../Model/WpPageVersionsList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPagePatch()`

```php
wpPagePatch($id, $wp_page_without_required): \OpenAPI\Client\Model\WpPage
```

Update selected fields of Wp_page object

Allows update of the Wp page object, but it is unnecessary to specify all the object's properties. Properties not included in the payload will be completed with data from the database. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_page-1; // string | ContentObject identifier
$wp_page_without_required = {"id":"wp_page-1","slug":"slug","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","modified":"modified","parentPage":[{"dataUrl":"/api/v1/content/wp_page/wp_page-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPageWithoutRequired

try {
    $result = $apiInstance->wpPagePatch($id, $wp_page_without_required);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPagePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_page_without_required** | [**\OpenAPI\Client\Model\WpPageWithoutRequired**](../Model/WpPageWithoutRequired.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpPage**](../Model/WpPage.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPageUpdate()`

```php
wpPageUpdate($id, $wp_page_without_internal): \OpenAPI\Client\Model\WpPage
```

Update existing Wp_page object

Allows update of the Wp page object, it has to have all fields, as this operation overwrites the object. All properties not included in the payload will be lost. <br />

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentWpPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wp_page-1; // string | ContentObject identifier
$wp_page_without_internal = {"id":"wp_page-1","slug":"slug","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","modified":"modified","parentPage":[{"dataUrl":"/api/v1/content/wp_page/wp_page-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPageWithoutInternal

try {
    $result = $apiInstance->wpPageUpdate($id, $wp_page_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPageApi->wpPageUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_page_without_internal** | [**\OpenAPI\Client\Model\WpPageWithoutInternal**](../Model/WpPageWithoutInternal.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpPage**](../Model/WpPage.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
