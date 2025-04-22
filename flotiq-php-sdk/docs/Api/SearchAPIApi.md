# OpenAPI\Client\SearchAPIApi

All URIs are relative to https://api.flotiq.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**search()**](SearchAPIApi.md#search) | **GET** /api/v1/search | 


## `search()`

```php
search($q, $fields, $page, $limit, $order_by, $order_direction, $content_type, $aggregate_by, $aggregate_by_numeric, $filters, $post_filters, $geo_filters, $hydrate): \OpenAPI\Client\Model\SearchResponse
```



The Flotiq API provides a powerful search engine, which is a wrapper for ElasticSearch queries. We tried to balance between resembling the ES API (for those, who already know it) and keeping it simple and cohesive with Flotiq API. This endpoint provides means for querying content objects that match a set of criteria, with options for:   * limiting search to specific Content Types,  * limit search to specific fields,  * weighting fields to modify results scoring,  * aggregating results by fields.   You can find more information about the Search API in the [Search API docs](https://flotiq.com/docs/API/search/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = ''; // string | Query
$fields = array('fields_example'); // string[] | Search only in selected fields.
$page = '1'; // string | Listing page number, 1-based
$limit = '20'; // string | Page limit
$order_by = ''; // string | Order by field
$order_direction = 'asc'; // string | Order direction
$content_type = array('content_type_example'); // string[] | Restrict search to content types set
$aggregate_by = array('aggregate_by_example'); // string[] | Field to aggregate results direction (string fields only)
$aggregate_by_numeric = array('aggregate_by_numeric_example'); // string[] | Field to aggregate results direction with numeric type
$filters = {"public":true}; // object | Filter by object properties. Expected format: filters[property1]=value1&filters[property2]=value2
$post_filters = {"public":true}; // object | Filter by object properties. Use it when you want aggregated counts without filters applied. Expected format: post_filters[property1]=value1&post_filters[property2]=value2
$geo_filters = {"location":"geo_distance,1.50km,40.1,-19.2"}; // object | Filter by object geolocation properties. Example value: geo_filters[location]=geo_distance,1.50km,40.1,-19.2 (filter name, distance, latitude, longitude). For more information see ElasticSearch docs. Only geo_distance query is supported.
$hydrate = 3.4; // float | Hydrate level for relations to get a schema properly reflecting linked objects

try {
    $result = $apiInstance->search($q, $fields, $page, $limit, $order_by, $order_direction, $content_type, $aggregate_by, $aggregate_by_numeric, $filters, $post_filters, $geo_filters, $hydrate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchAPIApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Query | [optional] [default to &#39;&#39;]
 **fields** | [**string[]**](../Model/string.md)| Search only in selected fields. | [optional]
 **page** | **string**| Listing page number, 1-based | [optional] [default to &#39;1&#39;]
 **limit** | **string**| Page limit | [optional] [default to &#39;20&#39;]
 **order_by** | **string**| Order by field | [optional] [default to &#39;&#39;]
 **order_direction** | **string**| Order direction | [optional] [default to &#39;asc&#39;]
 **content_type** | [**string[]**](../Model/string.md)| Restrict search to content types set | [optional]
 **aggregate_by** | [**string[]**](../Model/string.md)| Field to aggregate results direction (string fields only) | [optional]
 **aggregate_by_numeric** | [**string[]**](../Model/string.md)| Field to aggregate results direction with numeric type | [optional]
 **filters** | [**object**](../Model/.md)| Filter by object properties. Expected format: filters[property1]&#x3D;value1&amp;filters[property2]&#x3D;value2 | [optional]
 **post_filters** | [**object**](../Model/.md)| Filter by object properties. Use it when you want aggregated counts without filters applied. Expected format: post_filters[property1]&#x3D;value1&amp;post_filters[property2]&#x3D;value2 | [optional]
 **geo_filters** | [**object**](../Model/.md)| Filter by object geolocation properties. Example value: geo_filters[location]&#x3D;geo_distance,1.50km,40.1,-19.2 (filter name, distance, latitude, longitude). For more information see ElasticSearch docs. Only geo_distance query is supported. | [optional]
 **hydrate** | **float**| Hydrate level for relations to get a schema properly reflecting linked objects | [optional]

### Return type

[**\OpenAPI\Client\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
