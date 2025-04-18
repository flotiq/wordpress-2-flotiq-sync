# OpenAPI\Client\ContentWpPostApi

All URIs are relative to https://api.flotiq.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**wpPostBatchCreate()**](ContentWpPostApi.md#wpPostBatchCreate) | **POST** /api/v1/content/wp_post/batch | Create a batch of wp_post objects
[**wpPostBatchDelete()**](ContentWpPostApi.md#wpPostBatchDelete) | **POST** /api/v1/content/wp_post/batch-delete | Delete a batch of Wp_post objects
[**wpPostBatchPatch()**](ContentWpPostApi.md#wpPostBatchPatch) | **PATCH** /api/v1/content/wp_post/batch | Update selected fields of a batch of objects
[**wpPostCreate()**](ContentWpPostApi.md#wpPostCreate) | **POST** /api/v1/content/wp_post | Create a Wp_post object
[**wpPostDelete()**](ContentWpPostApi.md#wpPostDelete) | **DELETE** /api/v1/content/wp_post/{id} | Delete a Wp_post object
[**wpPostGet()**](ContentWpPostApi.md#wpPostGet) | **GET** /api/v1/content/wp_post/{id} | Get Wp_post object by Id
[**wpPostGetRemoved()**](ContentWpPostApi.md#wpPostGetRemoved) | **GET** /api/v1/content/wp_post/removed | Get removed object identifiers
[**wpPostGetVersions()**](ContentWpPostApi.md#wpPostGetVersions) | **GET** /api/v1/content/wp_post/{id}/version/{versionId} | Get a specific version of Wp_post object
[**wpPostList()**](ContentWpPostApi.md#wpPostList) | **GET** /api/v1/content/wp_post | List Wp_post objects
[**wpPostListVersion()**](ContentWpPostApi.md#wpPostListVersion) | **GET** /api/v1/content/wp_post/{id}/version | List all versions of a Wp_post object
[**wpPostPatch()**](ContentWpPostApi.md#wpPostPatch) | **PATCH** /api/v1/content/wp_post/{id} | Update selected fields of Wp_post object
[**wpPostUpdate()**](ContentWpPostApi.md#wpPostUpdate) | **PUT** /api/v1/content/wp_post/{id} | Update existing Wp_post object


## `wpPostBatchCreate()`

```php
wpPostBatchCreate($update_existing, $wp_post_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Create a batch of wp_post objects

Allows you to create or create and update up to 100 objects of Wp post type. <br />

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
$wp_post_without_internal = [{"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]},{"id":"wp_post-2","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}]; // \OpenAPI\Client\Model\WpPostWithoutInternal[]

try {
    $result = $apiInstance->wpPostBatchCreate($update_existing, $wp_post_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostBatchCreate: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPostBatchDelete()`

```php
wpPostBatchDelete($request_body): \OpenAPI\Client\Model\MediaBatchDelete200Response
```

Delete a batch of Wp_post objects

Allows you to delete up to 100 objects of Wp post type. <br />Request body accepts an array of content object IDs that are to be deleted.<br />

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
$request_body = ["wp_post-1","wp_post-2"]; // string[]

try {
    $result = $apiInstance->wpPostBatchDelete($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostBatchDelete: ', $e->getMessage(), PHP_EOL;
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

## `wpPostBatchPatch()`

```php
wpPostBatchPatch($wp_post_without_internal): \OpenAPI\Client\Model\BatchResponseSuccess
```

Update selected fields of a batch of objects

Allows you to update up to 100 objects of Wp post type. <br />

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
$wp_post_without_internal = [{"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]},{"id":"wp_post-2","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}]; // \OpenAPI\Client\Model\WpPostWithoutInternal[]

try {
    $result = $apiInstance->wpPostBatchPatch($wp_post_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostBatchPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wp_post_without_internal** | [**\OpenAPI\Client\Model\WpPostWithoutInternal[]**](../Model/WpPostWithoutInternal.md)|  | [optional]

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

## `wpPostCreate()`

```php
wpPostCreate($wp_post_without_internal): \OpenAPI\Client\Model\WpPost
```

Create a Wp_post object

Allows you to create object of Wp post type. <br />

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
$wp_post_without_internal = {"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPostWithoutInternal

try {
    $result = $apiInstance->wpPostCreate($wp_post_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostCreate: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPostDelete()`

```php
wpPostDelete($id)
```

Delete a Wp_post object

Removes Wp post object.<br />

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
    $apiInstance->wpPostDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostDelete: ', $e->getMessage(), PHP_EOL;
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

## `wpPostGet()`

```php
wpPostGet($id, $hydrate): \OpenAPI\Client\Model\WpPost
```

Get Wp_post object by Id

Returns all information about Wp post object. <br />

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
    $result = $apiInstance->wpPostGet($id, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostGet: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPostGetRemoved()`

```php
wpPostGetRemoved($deleted_after): string[]
```

Get removed object identifiers

Get ids of removed Wp post objects. <br />

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
    $result = $apiInstance->wpPostGetRemoved($deleted_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostGetRemoved: ', $e->getMessage(), PHP_EOL;
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

## `wpPostGetVersions()`

```php
wpPostGetVersions($id, $version_id): \OpenAPI\Client\Model\WpPost
```

Get a specific version of Wp_post object

Return version of Wp post object. <br />

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
$version_id = version-1; // string | ContentObject version identifier

try {
    $result = $apiInstance->wpPostGetVersions($id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostGetVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **version_id** | **string**| ContentObject version identifier |

### Return type

[**\OpenAPI\Client\Model\WpPost**](../Model/WpPost.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPostList()`

```php
wpPostList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids): \OpenAPI\Client\Model\WpPostList
```

List Wp_post objects

List objects of Wp post type. <br />

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
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction
$hydrate = 0; // float | Should hydrate relations of object, for now only one level of hydration is possible
$filters = {"slug":{"type":"contains","filter":"test"},"title":{"type":"contains","filter":"test"}}; // string | List filters
$ids = array('ids_example'); // string[] | Ids of objects to return.

try {
    $result = $apiInstance->wpPostList($page, $limit, $order_by, $order_direction, $hydrate, $filters, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpPostList**](../Model/WpPostList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPostListVersion()`

```php
wpPostListVersion($id, $page, $limit, $order_by, $order_direction): \OpenAPI\Client\Model\WpPostVersionsList
```

List all versions of a Wp_post object

List objects versions of Wp post type. <br />

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
$page = 1; // float | Listing page number, 1-based
$limit = 20; // float | Page limit
$order_by = internal.createdAt; // string | Order by field
$order_direction = asc; // string | Order direction

try {
    $result = $apiInstance->wpPostListVersion($id, $page, $limit, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostListVersion: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\WpPostVersionsList**](../Model/WpPostVersionsList.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPostPatch()`

```php
wpPostPatch($id, $wp_post_without_required): \OpenAPI\Client\Model\WpPost
```

Update selected fields of Wp_post object

Allows update of the Wp post object, but it is unnecessary to specify all the object's properties. Properties not included in the payload will be completed with data from the database. <br />

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
$wp_post_without_required = {"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPostWithoutRequired

try {
    $result = $apiInstance->wpPostPatch($id, $wp_post_without_required);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ContentObject identifier |
 **wp_post_without_required** | [**\OpenAPI\Client\Model\WpPostWithoutRequired**](../Model/WpPostWithoutRequired.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WpPost**](../Model/WpPost.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wpPostUpdate()`

```php
wpPostUpdate($id, $wp_post_without_internal): \OpenAPI\Client\Model\WpPost
```

Update existing Wp_post object

Allows update of the Wp post object, it has to have all fields, as this operation overwrites the object. All properties not included in the payload will be lost. <br />

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
$wp_post_without_internal = {"id":"wp_post-1","slug":"slug","tags":[{"dataUrl":"/api/v1/content/wp_tag/wp_tag-1","type":"internal"}],"type":"type","title":"title","author":[{"dataUrl":"/api/v1/content/wp_author/wp_author-1","type":"internal"}],"status":"draft","content":"content","created":"created","excerpt":"excerpt","modified":"modified","categories":[{"dataUrl":"/api/v1/content/wp_category/wp_category-1","type":"internal"}],"featuredMedia":[{"dataUrl":"/api/v1/content/_media/_media-1","type":"internal"}]}; // \OpenAPI\Client\Model\WpPostWithoutInternal

try {
    $result = $apiInstance->wpPostUpdate($id, $wp_post_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentWpPostApi->wpPostUpdate: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
