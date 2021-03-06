# flotiq

## Getting started

 This is your Flotiq User API that allows you to access your data through the Content API that you defined.

 ### Access to data

 There are several methods that you can use to access your data:
 * Live API docs - available via <code>Try it out</code> button available next to each endpoint 
 * Copying example code on the right side of each endpoint
 * By downloading the SDKs available in mulitple languages.
 * By downloading the Postman collection and importing it into Postman.


 Each of these methods is described in length in the [user documentation](https://flotiq.com/docs/).

 ### Authorization

 In order to make use of the provided documentation, example code, SDKs and so on - you will need to pull out your API key. We recommend that you start with the ReadOnly API Key which will allow you to make all the `GET` requests but will error-out when you try to modify content. Please remember to replace the key for `POST`, `PUT` and `DELETE` calls.

 It's also possible to use scoped API keys - you can create those in the API keys section of the Flotiq user interface. This will allow you to create a key that only authorizes access to a specific content type (or a set of content types, if you choose so). Read more about how to use and create API keys in the [API keys documentation](https://flotiq.com/docs/API/).

 ## Object access

 Once you define a Content Type it will become available in your Content API as a set of endpoints that will allow you to work with objects:

 * create
 * list
 * update
 * delete
 * batch create
 * retrieve single object.

### Hydration

 When you build Content Types that have relation to others your objects will optionally support hydration of related entities. The endpoints that support object retrieval accept a `hydrate` parameter, which can be used to easily fetch hydrated objects. Since this breaks the standard REST concepts - it's not enabled by default, but it's a very handy feature that allows to reduce the amount of HTTP requests sent over the wire and we strongly recommend to use it.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2.0.1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://flotiq.com](https://flotiq.com)

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/flotiq/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: HeaderApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ContentMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$media_without_internal = [{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925},{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}]; // \OpenAPI\Client\Model\MediaWithoutInternal[] | 

try {
    $result = $apiInstance->batchCreateMedia($update_existing, $media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaApi->batchCreateMedia: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.flotiq.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContentMediaApi* | [**batchCreateMedia**](docs/Api/ContentMediaApi.md#batchcreatemedia) | **POST** /api/v1/content/_media/batch | 
*ContentMediaApi* | [**batchDeleteMedia**](docs/Api/ContentMediaApi.md#batchdeletemedia) | **POST** /api/v1/content/_media/batch-delete | 
*ContentMediaApi* | [**createMedia**](docs/Api/ContentMediaApi.md#createmedia) | **POST** /api/v1/content/_media | 
*ContentMediaApi* | [**deleteMedia**](docs/Api/ContentMediaApi.md#deletemedia) | **DELETE** /api/v1/content/_media/{id} | 
*ContentMediaApi* | [**getMedia**](docs/Api/ContentMediaApi.md#getmedia) | **GET** /api/v1/content/_media/{id} | 
*ContentMediaApi* | [**getRemovedMedia**](docs/Api/ContentMediaApi.md#getremovedmedia) | **GET** /api/v1/content/_media/removed | 
*ContentMediaApi* | [**listMedia**](docs/Api/ContentMediaApi.md#listmedia) | **GET** /api/v1/content/_media | 
*ContentMediaApi* | [**updateMedia**](docs/Api/ContentMediaApi.md#updatemedia) | **PUT** /api/v1/content/_media/{id} | 
*ContentWpAuthorApi* | [**batchCreateWpAuthor**](docs/Api/ContentWpAuthorApi.md#batchcreatewpauthor) | **POST** /api/v1/content/wp_author/batch | 
*ContentWpAuthorApi* | [**batchDeleteWpAuthor**](docs/Api/ContentWpAuthorApi.md#batchdeletewpauthor) | **POST** /api/v1/content/wp_author/batch-delete | 
*ContentWpAuthorApi* | [**createWpAuthor**](docs/Api/ContentWpAuthorApi.md#createwpauthor) | **POST** /api/v1/content/wp_author | 
*ContentWpAuthorApi* | [**deleteWpAuthor**](docs/Api/ContentWpAuthorApi.md#deletewpauthor) | **DELETE** /api/v1/content/wp_author/{id} | 
*ContentWpAuthorApi* | [**getRemovedWpAuthor**](docs/Api/ContentWpAuthorApi.md#getremovedwpauthor) | **GET** /api/v1/content/wp_author/removed | 
*ContentWpAuthorApi* | [**getWpAuthor**](docs/Api/ContentWpAuthorApi.md#getwpauthor) | **GET** /api/v1/content/wp_author/{id} | 
*ContentWpAuthorApi* | [**listWpAuthor**](docs/Api/ContentWpAuthorApi.md#listwpauthor) | **GET** /api/v1/content/wp_author | 
*ContentWpAuthorApi* | [**updateWpAuthor**](docs/Api/ContentWpAuthorApi.md#updatewpauthor) | **PUT** /api/v1/content/wp_author/{id} | 
*ContentWpCategoryApi* | [**batchCreateWpCategory**](docs/Api/ContentWpCategoryApi.md#batchcreatewpcategory) | **POST** /api/v1/content/wp_category/batch | 
*ContentWpCategoryApi* | [**batchDeleteWpCategory**](docs/Api/ContentWpCategoryApi.md#batchdeletewpcategory) | **POST** /api/v1/content/wp_category/batch-delete | 
*ContentWpCategoryApi* | [**createWpCategory**](docs/Api/ContentWpCategoryApi.md#createwpcategory) | **POST** /api/v1/content/wp_category | 
*ContentWpCategoryApi* | [**deleteWpCategory**](docs/Api/ContentWpCategoryApi.md#deletewpcategory) | **DELETE** /api/v1/content/wp_category/{id} | 
*ContentWpCategoryApi* | [**getRemovedWpCategory**](docs/Api/ContentWpCategoryApi.md#getremovedwpcategory) | **GET** /api/v1/content/wp_category/removed | 
*ContentWpCategoryApi* | [**getWpCategory**](docs/Api/ContentWpCategoryApi.md#getwpcategory) | **GET** /api/v1/content/wp_category/{id} | 
*ContentWpCategoryApi* | [**listWpCategory**](docs/Api/ContentWpCategoryApi.md#listwpcategory) | **GET** /api/v1/content/wp_category | 
*ContentWpCategoryApi* | [**updateWpCategory**](docs/Api/ContentWpCategoryApi.md#updatewpcategory) | **PUT** /api/v1/content/wp_category/{id} | 
*ContentWpPageApi* | [**batchCreateWpPage**](docs/Api/ContentWpPageApi.md#batchcreatewppage) | **POST** /api/v1/content/wp_page/batch | 
*ContentWpPageApi* | [**batchDeleteWpPage**](docs/Api/ContentWpPageApi.md#batchdeletewppage) | **POST** /api/v1/content/wp_page/batch-delete | 
*ContentWpPageApi* | [**createWpPage**](docs/Api/ContentWpPageApi.md#createwppage) | **POST** /api/v1/content/wp_page | 
*ContentWpPageApi* | [**deleteWpPage**](docs/Api/ContentWpPageApi.md#deletewppage) | **DELETE** /api/v1/content/wp_page/{id} | 
*ContentWpPageApi* | [**getRemovedWpPage**](docs/Api/ContentWpPageApi.md#getremovedwppage) | **GET** /api/v1/content/wp_page/removed | 
*ContentWpPageApi* | [**getWpPage**](docs/Api/ContentWpPageApi.md#getwppage) | **GET** /api/v1/content/wp_page/{id} | 
*ContentWpPageApi* | [**listWpPage**](docs/Api/ContentWpPageApi.md#listwppage) | **GET** /api/v1/content/wp_page | 
*ContentWpPageApi* | [**updateWpPage**](docs/Api/ContentWpPageApi.md#updatewppage) | **PUT** /api/v1/content/wp_page/{id} | 
*ContentWpPostApi* | [**batchCreateWpPost**](docs/Api/ContentWpPostApi.md#batchcreatewppost) | **POST** /api/v1/content/wp_post/batch | 
*ContentWpPostApi* | [**batchDeleteWpPost**](docs/Api/ContentWpPostApi.md#batchdeletewppost) | **POST** /api/v1/content/wp_post/batch-delete | 
*ContentWpPostApi* | [**createWpPost**](docs/Api/ContentWpPostApi.md#createwppost) | **POST** /api/v1/content/wp_post | 
*ContentWpPostApi* | [**deleteWpPost**](docs/Api/ContentWpPostApi.md#deletewppost) | **DELETE** /api/v1/content/wp_post/{id} | 
*ContentWpPostApi* | [**getRemovedWpPost**](docs/Api/ContentWpPostApi.md#getremovedwppost) | **GET** /api/v1/content/wp_post/removed | 
*ContentWpPostApi* | [**getWpPost**](docs/Api/ContentWpPostApi.md#getwppost) | **GET** /api/v1/content/wp_post/{id} | 
*ContentWpPostApi* | [**listWpPost**](docs/Api/ContentWpPostApi.md#listwppost) | **GET** /api/v1/content/wp_post | 
*ContentWpPostApi* | [**updateWpPost**](docs/Api/ContentWpPostApi.md#updatewppost) | **PUT** /api/v1/content/wp_post/{id} | 
*ContentWpTagApi* | [**batchCreateWpTag**](docs/Api/ContentWpTagApi.md#batchcreatewptag) | **POST** /api/v1/content/wp_tag/batch | 
*ContentWpTagApi* | [**batchDeleteWpTag**](docs/Api/ContentWpTagApi.md#batchdeletewptag) | **POST** /api/v1/content/wp_tag/batch-delete | 
*ContentWpTagApi* | [**createWpTag**](docs/Api/ContentWpTagApi.md#createwptag) | **POST** /api/v1/content/wp_tag | 
*ContentWpTagApi* | [**deleteWpTag**](docs/Api/ContentWpTagApi.md#deletewptag) | **DELETE** /api/v1/content/wp_tag/{id} | 
*ContentWpTagApi* | [**getRemovedWpTag**](docs/Api/ContentWpTagApi.md#getremovedwptag) | **GET** /api/v1/content/wp_tag/removed | 
*ContentWpTagApi* | [**getWpTag**](docs/Api/ContentWpTagApi.md#getwptag) | **GET** /api/v1/content/wp_tag/{id} | 
*ContentWpTagApi* | [**listWpTag**](docs/Api/ContentWpTagApi.md#listwptag) | **GET** /api/v1/content/wp_tag | 
*ContentWpTagApi* | [**updateWpTag**](docs/Api/ContentWpTagApi.md#updatewptag) | **PUT** /api/v1/content/wp_tag/{id} | 
*GraphQLApi* | [**graphQL**](docs/Api/GraphQLApi.md#graphql) | **POST** /api/graphql | 
*GraphQLApi* | [**graphQLSchema**](docs/Api/GraphQLApi.md#graphqlschema) | **GET** /api/graphql/schema | 
*InternalApi* | [**deleteContentDefinition**](docs/Api/InternalApi.md#deletecontentdefinition) | **DELETE** /api/v1/internal/contenttype/{id} | 
*InternalApi* | [**getContentDefinition**](docs/Api/InternalApi.md#getcontentdefinition) | **GET** /api/v1/internal/contenttype/{id} | 
*InternalApi* | [**getContentDefinitions**](docs/Api/InternalApi.md#getcontentdefinitions) | **GET** /api/v1/internal/contenttype | 
*InternalApi* | [**postContentDefinition**](docs/Api/InternalApi.md#postcontentdefinition) | **POST** /api/v1/internal/contenttype | 
*InternalApi* | [**putContentDefinition**](docs/Api/InternalApi.md#putcontentdefinition) | **PUT** /api/v1/internal/contenttype/{id} | 
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /image/{width_height}/{key} | 
*MediaApi* | [**postMedia**](docs/Api/MediaApi.md#postmedia) | **POST** /api/media | 
*SearchAPIApi* | [**search**](docs/Api/SearchAPIApi.md#search) | **GET** /api/v1/search | 


## Documentation For Models

 - [AbstractContentTypeMetaDefinition](docs/Model/AbstractContentTypeMetaDefinition.md)
 - [AbstractContentTypeSchemaDefinition](docs/Model/AbstractContentTypeSchemaDefinition.md)
 - [AbstractContentTypeSchemaDefinitionInternal](docs/Model/AbstractContentTypeSchemaDefinitionInternal.md)
 - [AbstractContentTypeSchemaDefinitionWithoutInternal](docs/Model/AbstractContentTypeSchemaDefinitionWithoutInternal.md)
 - [AbstractPropertiesConfig](docs/Model/AbstractPropertiesConfig.md)
 - [AbstractPropertiesConfigValidation](docs/Model/AbstractPropertiesConfigValidation.md)
 - [BatchResponseError](docs/Model/BatchResponseError.md)
 - [BatchResponseErrorErrors](docs/Model/BatchResponseErrorErrors.md)
 - [BatchResponseErrorErrors1](docs/Model/BatchResponseErrorErrors1.md)
 - [BatchResponseSuccess](docs/Model/BatchResponseSuccess.md)
 - [ContentTypeDefinitionSchema](docs/Model/ContentTypeDefinitionSchema.md)
 - [ContentTypeListResponse](docs/Model/ContentTypeListResponse.md)
 - [ContentTypeListResponseAllOf](docs/Model/ContentTypeListResponseAllOf.md)
 - [DataSource](docs/Model/DataSource.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineObject1](docs/Model/InlineObject1.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse4001](docs/Model/InlineResponse4001.md)
 - [InlineResponse40010](docs/Model/InlineResponse40010.md)
 - [InlineResponse40011](docs/Model/InlineResponse40011.md)
 - [InlineResponse40012](docs/Model/InlineResponse40012.md)
 - [InlineResponse40013](docs/Model/InlineResponse40013.md)
 - [InlineResponse40014](docs/Model/InlineResponse40014.md)
 - [InlineResponse40015](docs/Model/InlineResponse40015.md)
 - [InlineResponse40016](docs/Model/InlineResponse40016.md)
 - [InlineResponse4002](docs/Model/InlineResponse4002.md)
 - [InlineResponse4003](docs/Model/InlineResponse4003.md)
 - [InlineResponse4004](docs/Model/InlineResponse4004.md)
 - [InlineResponse4005](docs/Model/InlineResponse4005.md)
 - [InlineResponse4006](docs/Model/InlineResponse4006.md)
 - [InlineResponse4007](docs/Model/InlineResponse4007.md)
 - [InlineResponse4008](docs/Model/InlineResponse4008.md)
 - [InlineResponse4009](docs/Model/InlineResponse4009.md)
 - [Media](docs/Model/Media.md)
 - [MediaList](docs/Model/MediaList.md)
 - [MediaListAllOf](docs/Model/MediaListAllOf.md)
 - [MediaWithoutInternal](docs/Model/MediaWithoutInternal.md)
 - [MediaWithoutInternalAllOf](docs/Model/MediaWithoutInternalAllOf.md)
 - [Model401Response](docs/Model/Model401Response.md)
 - [Model404Response](docs/Model/Model404Response.md)
 - [SearchResponse](docs/Model/SearchResponse.md)
 - [SearchResponseAllOf](docs/Model/SearchResponseAllOf.md)
 - [SearchResponseAllOfData](docs/Model/SearchResponseAllOfData.md)
 - [SearchResponseAllOfSummary](docs/Model/SearchResponseAllOfSummary.md)
 - [SystemListProperties](docs/Model/SystemListProperties.md)
 - [WpAuthor](docs/Model/WpAuthor.md)
 - [WpAuthorList](docs/Model/WpAuthorList.md)
 - [WpAuthorListAllOf](docs/Model/WpAuthorListAllOf.md)
 - [WpAuthorWithoutInternal](docs/Model/WpAuthorWithoutInternal.md)
 - [WpAuthorWithoutInternalAllOf](docs/Model/WpAuthorWithoutInternalAllOf.md)
 - [WpCategory](docs/Model/WpCategory.md)
 - [WpCategoryList](docs/Model/WpCategoryList.md)
 - [WpCategoryListAllOf](docs/Model/WpCategoryListAllOf.md)
 - [WpCategoryWithoutInternal](docs/Model/WpCategoryWithoutInternal.md)
 - [WpCategoryWithoutInternalAllOf](docs/Model/WpCategoryWithoutInternalAllOf.md)
 - [WpPage](docs/Model/WpPage.md)
 - [WpPageList](docs/Model/WpPageList.md)
 - [WpPageListAllOf](docs/Model/WpPageListAllOf.md)
 - [WpPageWithoutInternal](docs/Model/WpPageWithoutInternal.md)
 - [WpPageWithoutInternalAllOf](docs/Model/WpPageWithoutInternalAllOf.md)
 - [WpPost](docs/Model/WpPost.md)
 - [WpPostList](docs/Model/WpPostList.md)
 - [WpPostListAllOf](docs/Model/WpPostListAllOf.md)
 - [WpPostWithoutInternal](docs/Model/WpPostWithoutInternal.md)
 - [WpPostWithoutInternalAllOf](docs/Model/WpPostWithoutInternalAllOf.md)
 - [WpTag](docs/Model/WpTag.md)
 - [WpTagList](docs/Model/WpTagList.md)
 - [WpTagListAllOf](docs/Model/WpTagListAllOf.md)
 - [WpTagWithoutInternal](docs/Model/WpTagWithoutInternal.md)


## Documentation For Authorization



## HeaderApiKeyAuth


- **Type**: API key
- **API key parameter name**: X-AUTH-TOKEN
- **Location**: HTTP header



## Author

hello@flotiq.com

