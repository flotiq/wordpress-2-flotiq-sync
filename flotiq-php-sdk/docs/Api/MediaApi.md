# OpenAPI\Client\MediaApi

All URIs are relative to https://api.flotiq.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMedia()**](MediaApi.md#getMedia) | **GET** /image/{width_height}/{key} | Get media file
[**postMedia()**](MediaApi.md#postMedia) | **POST** /api/media | Add media file


## `getMedia()`

```php
getMedia($width_height, $key): \SplFileObject
```

Get media file

Get single media file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$width_height = '0x0'; // string | Expected format: WIDTHxHEIGHT, for example 750x200. Width of the image, or 0 when the file is not an image or it should have original uploaded width, or it should be scaled proportionally with height specified. Height of the image, or 0 when the file is not an image or it should have original uploaded height, or it should be scaled proportionally with width specified
$key = _media-4564.jpg; // string | Key of the file, it is made from id and extension, e.g. _media-4564.jpg for image with id _media-4564 and jpg extension

try {
    $result = $apiInstance->getMedia($width_height, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **width_height** | **string**| Expected format: WIDTHxHEIGHT, for example 750x200. Width of the image, or 0 when the file is not an image or it should have original uploaded width, or it should be scaled proportionally with height specified. Height of the image, or 0 when the file is not an image or it should have original uploaded height, or it should be scaled proportionally with width specified | [default to &#39;0x0&#39;]
 **key** | **string**| Key of the file, it is made from id and extension, e.g. _media-4564.jpg for image with id _media-4564 and jpg extension |

### Return type

**\SplFileObject**

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMedia()`

```php
postMedia($file, $type, $save): \OpenAPI\Client\Model\MediaWithoutInternal
```

Add media file

Endpoint for media files upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$type = 'type_example'; // string | Type of file image|file
$save = 3.4; // float | This field is not supported anymore

try {
    $result = $apiInstance->postMedia($file, $type, $save);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->postMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| File to upload |
 **type** | **string**| Type of file image|file |
 **save** | **float**| This field is not supported anymore | [optional]

### Return type

[**\OpenAPI\Client\Model\MediaWithoutInternal**](../Model/MediaWithoutInternal.md)

### Authorization

[HeaderApiKeyAuth](../../README.md#HeaderApiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
