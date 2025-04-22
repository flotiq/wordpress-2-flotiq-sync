# flotiq

## Getting started

This API Documentation reflects the endpoints defined in your [Flotiq](https://flotiq.com) account.
The documentation is generated using an OpenAPI schema describing the API, which can be obtained in several flavors:

- [OAS 3.0/3.1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE)
  - without hydration, will not expand relations between content types (this is the default version which provides maximum compatibility with downstream systems)
  - with hydration, pass [hydrate=1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;hydrate=1) - use this for a better type support in exported OpenAPI schemas
  - without system endpoints, pass [user_only=1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;hydrate=1&amp;user_only=1) - use this to only include your endpoints, without system ones
  - for version 3.1, pass [version=3.1](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;version=3.1)
- [OAS 2.0](https://api.flotiq.com/api/v1/open-api-schema.json?auth_token=REPLACE_KEY_VALUE&amp;version=2) - provided for compatibility with several older systems

Check Flotiq documentation for more information about [Flotiq OpenAPI capabilities](https://flotiq.com/docs/API/open-api-schema/), instructions how to generate code and other useful tips.

### Access to data

There are several methods that you can use to access your data:
 * Live API docs - available via &lt;code&gt;Try it out&lt;/code&gt; button available next to each endpoint 
 * Copying example code on the right side of each endpoint
 * By downloading the SDKs available in multiple languages.
 * By downloading the Postman collection and importing it into Postman.


 Each of these methods is described in length in the [user documentation](https://flotiq.com/docs/).

 ### Authorization

 In order to make use of the provided documentation, example code, SDKs and so on - you will need to pull out your API key. We recommend that you start with the ReadOnly API Key which will allow you to make all the `GET` requests but will error-out when you try to modify content. Please remember to replace the key for `POST`, `PUT` and `DELETE` calls.

 It&#039;s also possible to use scoped API keys - you can create those in the API keys section of the Flotiq user interface. This will allow you to create a key that only authorizes access to a specific content type (or a set of content types, if you choose so). Read more about how to use and create API keys in the [API keys documentation](https://flotiq.com/docs/API/).

 ## Object access

 Once you define a Content Type it will become available in your Content API as a set of endpoints that will allow you to work with objects:

 * create
 * list
 * update
 * delete
 * batch create
 * retrieve single object.

### Hydration

 When you build Content Types that have relation to others your objects will optionally support hydration of related entities. The endpoints that support object retrieval accept a `hydrate` parameter, which can be used to easily fetch hydrated objects. Since this breaks the standard REST concepts - it&#039;s not enabled by default, but it&#039;s a very handy feature that allows to reduce the amount of HTTP requests sent over the wire and we strongly recommend to use it.

For more information, please visit [https://flotiq.com](https://flotiq.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

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
<?php
require_once('/path/to/flotiq/vendor/autoload.php');
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


$apiInstance = new OpenAPI\Client\Api\ContentMediaInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_existing = false; // bool | Overwrite existing objects
$media_without_internal = [{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925},{"id":"_media-698d20aa-193a-47b3-be4d-550c1aab47e7","extension":"png","fileName":"example_image.png","mimeType":"image/png","size":87258,"type":"image","source":"disk","tags":[{"dataUrl":"/api/v1/content/_tag/_tag-641775","type":"internal"}],"variants":[{"name":"square","trim":{"top":10,"right":10,"bottom":10,"left":10,"width":10,"height":10}}],"externalId":"","url":"/image/0x0/_media-698d20aa-193a-47b3-be4d-550c1aab47e7.png","height":517,"width":925}]; // \OpenAPI\Client\Model\MediaWithoutInternal[]

try {
    $result = $apiInstance->mediaBatchCreate($update_existing, $media_without_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentMediaInternalApi->mediaBatchCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.flotiq.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContentMediaInternalApi* | [**mediaBatchCreate**](docs/Api/ContentMediaInternalApi.md#mediabatchcreate) | **POST** /api/v1/content/_media/batch | Create a batch of _media objects
*ContentMediaInternalApi* | [**mediaBatchDelete**](docs/Api/ContentMediaInternalApi.md#mediabatchdelete) | **POST** /api/v1/content/_media/batch-delete | Delete a batch of _media objects
*ContentMediaInternalApi* | [**mediaBatchPatch**](docs/Api/ContentMediaInternalApi.md#mediabatchpatch) | **PATCH** /api/v1/content/_media/batch | Update selected fields of a batch of objects
*ContentMediaInternalApi* | [**mediaCreate**](docs/Api/ContentMediaInternalApi.md#mediacreate) | **POST** /api/v1/content/_media | Create a _media object
*ContentMediaInternalApi* | [**mediaDelete**](docs/Api/ContentMediaInternalApi.md#mediadelete) | **DELETE** /api/v1/content/_media/{id} | Delete a _media object
*ContentMediaInternalApi* | [**mediaGet**](docs/Api/ContentMediaInternalApi.md#mediaget) | **GET** /api/v1/content/_media/{id} | Get _media object by Id
*ContentMediaInternalApi* | [**mediaGetRemoved**](docs/Api/ContentMediaInternalApi.md#mediagetremoved) | **GET** /api/v1/content/_media/removed | Get removed object identifiers
*ContentMediaInternalApi* | [**mediaGetVersions**](docs/Api/ContentMediaInternalApi.md#mediagetversions) | **GET** /api/v1/content/_media/{id}/version/{versionId} | Get a specific version of _media object
*ContentMediaInternalApi* | [**mediaList**](docs/Api/ContentMediaInternalApi.md#medialist) | **GET** /api/v1/content/_media | List _media objects
*ContentMediaInternalApi* | [**mediaListVersion**](docs/Api/ContentMediaInternalApi.md#medialistversion) | **GET** /api/v1/content/_media/{id}/version | List all versions of a _media object
*ContentMediaInternalApi* | [**mediaPatch**](docs/Api/ContentMediaInternalApi.md#mediapatch) | **PATCH** /api/v1/content/_media/{id} | Update selected fields of _media object
*ContentMediaInternalApi* | [**mediaUpdate**](docs/Api/ContentMediaInternalApi.md#mediaupdate) | **PUT** /api/v1/content/_media/{id} | Update existing _media object
*ContentTagInternalApi* | [**tagBatchCreate**](docs/Api/ContentTagInternalApi.md#tagbatchcreate) | **POST** /api/v1/content/_tag/batch | Create a batch of _tag objects
*ContentTagInternalApi* | [**tagBatchDelete**](docs/Api/ContentTagInternalApi.md#tagbatchdelete) | **POST** /api/v1/content/_tag/batch-delete | Delete a batch of _tag objects
*ContentTagInternalApi* | [**tagBatchPatch**](docs/Api/ContentTagInternalApi.md#tagbatchpatch) | **PATCH** /api/v1/content/_tag/batch | Update selected fields of a batch of objects
*ContentTagInternalApi* | [**tagCreate**](docs/Api/ContentTagInternalApi.md#tagcreate) | **POST** /api/v1/content/_tag | Create a _tag object
*ContentTagInternalApi* | [**tagDelete**](docs/Api/ContentTagInternalApi.md#tagdelete) | **DELETE** /api/v1/content/_tag/{id} | Delete a _tag object
*ContentTagInternalApi* | [**tagGet**](docs/Api/ContentTagInternalApi.md#tagget) | **GET** /api/v1/content/_tag/{id} | Get _tag object by Id
*ContentTagInternalApi* | [**tagGetRemoved**](docs/Api/ContentTagInternalApi.md#taggetremoved) | **GET** /api/v1/content/_tag/removed | Get removed object identifiers
*ContentTagInternalApi* | [**tagGetVersions**](docs/Api/ContentTagInternalApi.md#taggetversions) | **GET** /api/v1/content/_tag/{id}/version/{versionId} | Get a specific version of _tag object
*ContentTagInternalApi* | [**tagList**](docs/Api/ContentTagInternalApi.md#taglist) | **GET** /api/v1/content/_tag | List _tag objects
*ContentTagInternalApi* | [**tagListVersion**](docs/Api/ContentTagInternalApi.md#taglistversion) | **GET** /api/v1/content/_tag/{id}/version | List all versions of a _tag object
*ContentTagInternalApi* | [**tagPatch**](docs/Api/ContentTagInternalApi.md#tagpatch) | **PATCH** /api/v1/content/_tag/{id} | Update selected fields of _tag object
*ContentTagInternalApi* | [**tagUpdate**](docs/Api/ContentTagInternalApi.md#tagupdate) | **PUT** /api/v1/content/_tag/{id} | Update existing _tag object
*ContentWpAuthorApi* | [**wpAuthorBatchCreate**](docs/Api/ContentWpAuthorApi.md#wpauthorbatchcreate) | **POST** /api/v1/content/wp_author/batch | Create a batch of wp_author objects
*ContentWpAuthorApi* | [**wpAuthorBatchDelete**](docs/Api/ContentWpAuthorApi.md#wpauthorbatchdelete) | **POST** /api/v1/content/wp_author/batch-delete | Delete a batch of Wp_author objects
*ContentWpAuthorApi* | [**wpAuthorBatchPatch**](docs/Api/ContentWpAuthorApi.md#wpauthorbatchpatch) | **PATCH** /api/v1/content/wp_author/batch | Update selected fields of a batch of objects
*ContentWpAuthorApi* | [**wpAuthorCreate**](docs/Api/ContentWpAuthorApi.md#wpauthorcreate) | **POST** /api/v1/content/wp_author | Create a Wp_author object
*ContentWpAuthorApi* | [**wpAuthorDelete**](docs/Api/ContentWpAuthorApi.md#wpauthordelete) | **DELETE** /api/v1/content/wp_author/{id} | Delete a Wp_author object
*ContentWpAuthorApi* | [**wpAuthorGet**](docs/Api/ContentWpAuthorApi.md#wpauthorget) | **GET** /api/v1/content/wp_author/{id} | Get Wp_author object by Id
*ContentWpAuthorApi* | [**wpAuthorGetRemoved**](docs/Api/ContentWpAuthorApi.md#wpauthorgetremoved) | **GET** /api/v1/content/wp_author/removed | Get removed object identifiers
*ContentWpAuthorApi* | [**wpAuthorGetVersions**](docs/Api/ContentWpAuthorApi.md#wpauthorgetversions) | **GET** /api/v1/content/wp_author/{id}/version/{versionId} | Get a specific version of Wp_author object
*ContentWpAuthorApi* | [**wpAuthorList**](docs/Api/ContentWpAuthorApi.md#wpauthorlist) | **GET** /api/v1/content/wp_author | List Wp_author objects
*ContentWpAuthorApi* | [**wpAuthorListVersion**](docs/Api/ContentWpAuthorApi.md#wpauthorlistversion) | **GET** /api/v1/content/wp_author/{id}/version | List all versions of a Wp_author object
*ContentWpAuthorApi* | [**wpAuthorPatch**](docs/Api/ContentWpAuthorApi.md#wpauthorpatch) | **PATCH** /api/v1/content/wp_author/{id} | Update selected fields of Wp_author object
*ContentWpAuthorApi* | [**wpAuthorUpdate**](docs/Api/ContentWpAuthorApi.md#wpauthorupdate) | **PUT** /api/v1/content/wp_author/{id} | Update existing Wp_author object
*ContentWpCategoryApi* | [**wpCategoryBatchCreate**](docs/Api/ContentWpCategoryApi.md#wpcategorybatchcreate) | **POST** /api/v1/content/wp_category/batch | Create a batch of wp_category objects
*ContentWpCategoryApi* | [**wpCategoryBatchDelete**](docs/Api/ContentWpCategoryApi.md#wpcategorybatchdelete) | **POST** /api/v1/content/wp_category/batch-delete | Delete a batch of Wp_category objects
*ContentWpCategoryApi* | [**wpCategoryBatchPatch**](docs/Api/ContentWpCategoryApi.md#wpcategorybatchpatch) | **PATCH** /api/v1/content/wp_category/batch | Update selected fields of a batch of objects
*ContentWpCategoryApi* | [**wpCategoryCreate**](docs/Api/ContentWpCategoryApi.md#wpcategorycreate) | **POST** /api/v1/content/wp_category | Create a Wp_category object
*ContentWpCategoryApi* | [**wpCategoryDelete**](docs/Api/ContentWpCategoryApi.md#wpcategorydelete) | **DELETE** /api/v1/content/wp_category/{id} | Delete a Wp_category object
*ContentWpCategoryApi* | [**wpCategoryGet**](docs/Api/ContentWpCategoryApi.md#wpcategoryget) | **GET** /api/v1/content/wp_category/{id} | Get Wp_category object by Id
*ContentWpCategoryApi* | [**wpCategoryGetRemoved**](docs/Api/ContentWpCategoryApi.md#wpcategorygetremoved) | **GET** /api/v1/content/wp_category/removed | Get removed object identifiers
*ContentWpCategoryApi* | [**wpCategoryGetVersions**](docs/Api/ContentWpCategoryApi.md#wpcategorygetversions) | **GET** /api/v1/content/wp_category/{id}/version/{versionId} | Get a specific version of Wp_category object
*ContentWpCategoryApi* | [**wpCategoryList**](docs/Api/ContentWpCategoryApi.md#wpcategorylist) | **GET** /api/v1/content/wp_category | List Wp_category objects
*ContentWpCategoryApi* | [**wpCategoryListVersion**](docs/Api/ContentWpCategoryApi.md#wpcategorylistversion) | **GET** /api/v1/content/wp_category/{id}/version | List all versions of a Wp_category object
*ContentWpCategoryApi* | [**wpCategoryPatch**](docs/Api/ContentWpCategoryApi.md#wpcategorypatch) | **PATCH** /api/v1/content/wp_category/{id} | Update selected fields of Wp_category object
*ContentWpCategoryApi* | [**wpCategoryUpdate**](docs/Api/ContentWpCategoryApi.md#wpcategoryupdate) | **PUT** /api/v1/content/wp_category/{id} | Update existing Wp_category object
*ContentWpPageApi* | [**wpPageBatchCreate**](docs/Api/ContentWpPageApi.md#wppagebatchcreate) | **POST** /api/v1/content/wp_page/batch | Create a batch of wp_page objects
*ContentWpPageApi* | [**wpPageBatchDelete**](docs/Api/ContentWpPageApi.md#wppagebatchdelete) | **POST** /api/v1/content/wp_page/batch-delete | Delete a batch of Wp_page objects
*ContentWpPageApi* | [**wpPageBatchPatch**](docs/Api/ContentWpPageApi.md#wppagebatchpatch) | **PATCH** /api/v1/content/wp_page/batch | Update selected fields of a batch of objects
*ContentWpPageApi* | [**wpPageCreate**](docs/Api/ContentWpPageApi.md#wppagecreate) | **POST** /api/v1/content/wp_page | Create a Wp_page object
*ContentWpPageApi* | [**wpPageDelete**](docs/Api/ContentWpPageApi.md#wppagedelete) | **DELETE** /api/v1/content/wp_page/{id} | Delete a Wp_page object
*ContentWpPageApi* | [**wpPageGet**](docs/Api/ContentWpPageApi.md#wppageget) | **GET** /api/v1/content/wp_page/{id} | Get Wp_page object by Id
*ContentWpPageApi* | [**wpPageGetRemoved**](docs/Api/ContentWpPageApi.md#wppagegetremoved) | **GET** /api/v1/content/wp_page/removed | Get removed object identifiers
*ContentWpPageApi* | [**wpPageGetVersions**](docs/Api/ContentWpPageApi.md#wppagegetversions) | **GET** /api/v1/content/wp_page/{id}/version/{versionId} | Get a specific version of Wp_page object
*ContentWpPageApi* | [**wpPageList**](docs/Api/ContentWpPageApi.md#wppagelist) | **GET** /api/v1/content/wp_page | List Wp_page objects
*ContentWpPageApi* | [**wpPageListVersion**](docs/Api/ContentWpPageApi.md#wppagelistversion) | **GET** /api/v1/content/wp_page/{id}/version | List all versions of a Wp_page object
*ContentWpPageApi* | [**wpPagePatch**](docs/Api/ContentWpPageApi.md#wppagepatch) | **PATCH** /api/v1/content/wp_page/{id} | Update selected fields of Wp_page object
*ContentWpPageApi* | [**wpPageUpdate**](docs/Api/ContentWpPageApi.md#wppageupdate) | **PUT** /api/v1/content/wp_page/{id} | Update existing Wp_page object
*ContentWpPostApi* | [**wpPostBatchCreate**](docs/Api/ContentWpPostApi.md#wppostbatchcreate) | **POST** /api/v1/content/wp_post/batch | Create a batch of wp_post objects
*ContentWpPostApi* | [**wpPostBatchDelete**](docs/Api/ContentWpPostApi.md#wppostbatchdelete) | **POST** /api/v1/content/wp_post/batch-delete | Delete a batch of Wp_post objects
*ContentWpPostApi* | [**wpPostBatchPatch**](docs/Api/ContentWpPostApi.md#wppostbatchpatch) | **PATCH** /api/v1/content/wp_post/batch | Update selected fields of a batch of objects
*ContentWpPostApi* | [**wpPostCreate**](docs/Api/ContentWpPostApi.md#wppostcreate) | **POST** /api/v1/content/wp_post | Create a Wp_post object
*ContentWpPostApi* | [**wpPostDelete**](docs/Api/ContentWpPostApi.md#wppostdelete) | **DELETE** /api/v1/content/wp_post/{id} | Delete a Wp_post object
*ContentWpPostApi* | [**wpPostGet**](docs/Api/ContentWpPostApi.md#wppostget) | **GET** /api/v1/content/wp_post/{id} | Get Wp_post object by Id
*ContentWpPostApi* | [**wpPostGetRemoved**](docs/Api/ContentWpPostApi.md#wppostgetremoved) | **GET** /api/v1/content/wp_post/removed | Get removed object identifiers
*ContentWpPostApi* | [**wpPostGetVersions**](docs/Api/ContentWpPostApi.md#wppostgetversions) | **GET** /api/v1/content/wp_post/{id}/version/{versionId} | Get a specific version of Wp_post object
*ContentWpPostApi* | [**wpPostList**](docs/Api/ContentWpPostApi.md#wppostlist) | **GET** /api/v1/content/wp_post | List Wp_post objects
*ContentWpPostApi* | [**wpPostListVersion**](docs/Api/ContentWpPostApi.md#wppostlistversion) | **GET** /api/v1/content/wp_post/{id}/version | List all versions of a Wp_post object
*ContentWpPostApi* | [**wpPostPatch**](docs/Api/ContentWpPostApi.md#wppostpatch) | **PATCH** /api/v1/content/wp_post/{id} | Update selected fields of Wp_post object
*ContentWpPostApi* | [**wpPostUpdate**](docs/Api/ContentWpPostApi.md#wppostupdate) | **PUT** /api/v1/content/wp_post/{id} | Update existing Wp_post object
*ContentWpTagApi* | [**wpTagBatchCreate**](docs/Api/ContentWpTagApi.md#wptagbatchcreate) | **POST** /api/v1/content/wp_tag/batch | Create a batch of wp_tag objects
*ContentWpTagApi* | [**wpTagBatchDelete**](docs/Api/ContentWpTagApi.md#wptagbatchdelete) | **POST** /api/v1/content/wp_tag/batch-delete | Delete a batch of Wp_tag objects
*ContentWpTagApi* | [**wpTagBatchPatch**](docs/Api/ContentWpTagApi.md#wptagbatchpatch) | **PATCH** /api/v1/content/wp_tag/batch | Update selected fields of a batch of objects
*ContentWpTagApi* | [**wpTagCreate**](docs/Api/ContentWpTagApi.md#wptagcreate) | **POST** /api/v1/content/wp_tag | Create a Wp_tag object
*ContentWpTagApi* | [**wpTagDelete**](docs/Api/ContentWpTagApi.md#wptagdelete) | **DELETE** /api/v1/content/wp_tag/{id} | Delete a Wp_tag object
*ContentWpTagApi* | [**wpTagGet**](docs/Api/ContentWpTagApi.md#wptagget) | **GET** /api/v1/content/wp_tag/{id} | Get Wp_tag object by Id
*ContentWpTagApi* | [**wpTagGetRemoved**](docs/Api/ContentWpTagApi.md#wptaggetremoved) | **GET** /api/v1/content/wp_tag/removed | Get removed object identifiers
*ContentWpTagApi* | [**wpTagGetVersions**](docs/Api/ContentWpTagApi.md#wptaggetversions) | **GET** /api/v1/content/wp_tag/{id}/version/{versionId} | Get a specific version of Wp_tag object
*ContentWpTagApi* | [**wpTagList**](docs/Api/ContentWpTagApi.md#wptaglist) | **GET** /api/v1/content/wp_tag | List Wp_tag objects
*ContentWpTagApi* | [**wpTagListVersion**](docs/Api/ContentWpTagApi.md#wptaglistversion) | **GET** /api/v1/content/wp_tag/{id}/version | List all versions of a Wp_tag object
*ContentWpTagApi* | [**wpTagPatch**](docs/Api/ContentWpTagApi.md#wptagpatch) | **PATCH** /api/v1/content/wp_tag/{id} | Update selected fields of Wp_tag object
*ContentWpTagApi* | [**wpTagUpdate**](docs/Api/ContentWpTagApi.md#wptagupdate) | **PUT** /api/v1/content/wp_tag/{id} | Update existing Wp_tag object
*GraphQLApi* | [**graphQL**](docs/Api/GraphQLApi.md#graphql) | **POST** /api/graphql | 
*GraphQLApi* | [**graphQLSchema**](docs/Api/GraphQLApi.md#graphqlschema) | **GET** /api/graphql/schema | 
*InternalApi* | [**deleteContentDefinition**](docs/Api/InternalApi.md#deletecontentdefinition) | **DELETE** /api/v1/internal/contenttype/{id} | 
*InternalApi* | [**getContentDefinition**](docs/Api/InternalApi.md#getcontentdefinition) | **GET** /api/v1/internal/contenttype/{id} | 
*InternalApi* | [**getContentDefinitions**](docs/Api/InternalApi.md#getcontentdefinitions) | **GET** /api/v1/internal/contenttype | 
*InternalApi* | [**postContentDefinition**](docs/Api/InternalApi.md#postcontentdefinition) | **POST** /api/v1/internal/contenttype | 
*InternalApi* | [**putContentDefinition**](docs/Api/InternalApi.md#putcontentdefinition) | **PUT** /api/v1/internal/contenttype/{id} | 
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /image/{width_height}/{key} | Get media file
*MediaApi* | [**postMedia**](docs/Api/MediaApi.md#postmedia) | **POST** /api/media | Add media file
*SearchAPIApi* | [**search**](docs/Api/SearchAPIApi.md#search) | **GET** /api/v1/search | 

## Models

- [AbstractContentTypeMetaDefinition](docs/Model/AbstractContentTypeMetaDefinition.md)
- [AbstractContentTypeSchemaDefinition](docs/Model/AbstractContentTypeSchemaDefinition.md)
- [AbstractContentTypeSchemaDefinitionInternal](docs/Model/AbstractContentTypeSchemaDefinitionInternal.md)
- [AbstractContentTypeSchemaDefinitionWithoutInternal](docs/Model/AbstractContentTypeSchemaDefinitionWithoutInternal.md)
- [AbstractPropertiesConfig](docs/Model/AbstractPropertiesConfig.md)
- [AbstractPropertiesConfigOptionsWithLabelsInner](docs/Model/AbstractPropertiesConfigOptionsWithLabelsInner.md)
- [AbstractPropertiesConfigValidation](docs/Model/AbstractPropertiesConfigValidation.md)
- [BatchResponseError](docs/Model/BatchResponseError.md)
- [BatchResponseErrorErrorsInner](docs/Model/BatchResponseErrorErrorsInner.md)
- [BatchResponseErrorErrorsInnerErrors](docs/Model/BatchResponseErrorErrorsInnerErrors.md)
- [BatchResponseSuccess](docs/Model/BatchResponseSuccess.md)
- [ContentTypeDefinitionSchema](docs/Model/ContentTypeDefinitionSchema.md)
- [ContentTypeDefinitionSchemaFeaturedImageInner](docs/Model/ContentTypeDefinitionSchemaFeaturedImageInner.md)
- [ContentTypeListResponse](docs/Model/ContentTypeListResponse.md)
- [ContentTypeListResponseAllOf](docs/Model/ContentTypeListResponseAllOf.md)
- [DataSource](docs/Model/DataSource.md)
- [DeleteContentDefinition400Response](docs/Model/DeleteContentDefinition400Response.md)
- [GraphQLRequest](docs/Model/GraphQLRequest.md)
- [Media](docs/Model/Media.md)
- [MediaBatchDelete200Response](docs/Model/MediaBatchDelete200Response.md)
- [MediaBatchDelete400Response](docs/Model/MediaBatchDelete400Response.md)
- [MediaCreate400Response](docs/Model/MediaCreate400Response.md)
- [MediaDelete400Response](docs/Model/MediaDelete400Response.md)
- [MediaGetRemoved400Response](docs/Model/MediaGetRemoved400Response.md)
- [MediaList](docs/Model/MediaList.md)
- [MediaList400Response](docs/Model/MediaList400Response.md)
- [MediaListAllOf](docs/Model/MediaListAllOf.md)
- [MediaVersionsList](docs/Model/MediaVersionsList.md)
- [MediaWithoutInternal](docs/Model/MediaWithoutInternal.md)
- [MediaWithoutInternalAllOf](docs/Model/MediaWithoutInternalAllOf.md)
- [MediaWithoutInternalAllOfTrim](docs/Model/MediaWithoutInternalAllOfTrim.md)
- [MediaWithoutInternalAllOfVariants](docs/Model/MediaWithoutInternalAllOfVariants.md)
- [MediaWithoutRequired](docs/Model/MediaWithoutRequired.md)
- [Model401Response](docs/Model/Model401Response.md)
- [Model403Response](docs/Model/Model403Response.md)
- [Model404Response](docs/Model/Model404Response.md)
- [PostContentDefinition400Response](docs/Model/PostContentDefinition400Response.md)
- [PostMedia400Response](docs/Model/PostMedia400Response.md)
- [Search400Response](docs/Model/Search400Response.md)
- [SearchResponse](docs/Model/SearchResponse.md)
- [SearchResponseAllOf](docs/Model/SearchResponseAllOf.md)
- [SearchResponseAllOfData](docs/Model/SearchResponseAllOfData.md)
- [SearchResponseAllOfSummary](docs/Model/SearchResponseAllOfSummary.md)
- [SystemListProperties](docs/Model/SystemListProperties.md)
- [Tag](docs/Model/Tag.md)
- [TagBatchDelete400Response](docs/Model/TagBatchDelete400Response.md)
- [TagCreate400Response](docs/Model/TagCreate400Response.md)
- [TagList](docs/Model/TagList.md)
- [TagListAllOf](docs/Model/TagListAllOf.md)
- [TagVersionsList](docs/Model/TagVersionsList.md)
- [TagWithoutInternal](docs/Model/TagWithoutInternal.md)
- [TagWithoutInternalAllOf](docs/Model/TagWithoutInternalAllOf.md)
- [TagWithoutRequired](docs/Model/TagWithoutRequired.md)
- [VersionItem](docs/Model/VersionItem.md)
- [VersionItemAllOf](docs/Model/VersionItemAllOf.md)
- [VersionItemAllOfOwner](docs/Model/VersionItemAllOfOwner.md)
- [VersionsList](docs/Model/VersionsList.md)
- [VersionsListAllOf](docs/Model/VersionsListAllOf.md)
- [WpAuthor](docs/Model/WpAuthor.md)
- [WpAuthorBatchDelete400Response](docs/Model/WpAuthorBatchDelete400Response.md)
- [WpAuthorCreate400Response](docs/Model/WpAuthorCreate400Response.md)
- [WpAuthorList](docs/Model/WpAuthorList.md)
- [WpAuthorListAllOf](docs/Model/WpAuthorListAllOf.md)
- [WpAuthorVersionsList](docs/Model/WpAuthorVersionsList.md)
- [WpAuthorWithoutInternal](docs/Model/WpAuthorWithoutInternal.md)
- [WpAuthorWithoutInternalAllOf](docs/Model/WpAuthorWithoutInternalAllOf.md)
- [WpAuthorWithoutRequired](docs/Model/WpAuthorWithoutRequired.md)
- [WpCategory](docs/Model/WpCategory.md)
- [WpCategoryBatchDelete400Response](docs/Model/WpCategoryBatchDelete400Response.md)
- [WpCategoryList](docs/Model/WpCategoryList.md)
- [WpCategoryListAllOf](docs/Model/WpCategoryListAllOf.md)
- [WpCategoryVersionsList](docs/Model/WpCategoryVersionsList.md)
- [WpCategoryWithoutInternal](docs/Model/WpCategoryWithoutInternal.md)
- [WpCategoryWithoutInternalAllOf](docs/Model/WpCategoryWithoutInternalAllOf.md)
- [WpCategoryWithoutRequired](docs/Model/WpCategoryWithoutRequired.md)
- [WpPage](docs/Model/WpPage.md)
- [WpPageBatchDelete400Response](docs/Model/WpPageBatchDelete400Response.md)
- [WpPageCreate400Response](docs/Model/WpPageCreate400Response.md)
- [WpPageList](docs/Model/WpPageList.md)
- [WpPageListAllOf](docs/Model/WpPageListAllOf.md)
- [WpPageVersionsList](docs/Model/WpPageVersionsList.md)
- [WpPageWithoutInternal](docs/Model/WpPageWithoutInternal.md)
- [WpPageWithoutInternalAllOf](docs/Model/WpPageWithoutInternalAllOf.md)
- [WpPageWithoutRequired](docs/Model/WpPageWithoutRequired.md)
- [WpPost](docs/Model/WpPost.md)
- [WpPostBatchDelete400Response](docs/Model/WpPostBatchDelete400Response.md)
- [WpPostCreate400Response](docs/Model/WpPostCreate400Response.md)
- [WpPostList](docs/Model/WpPostList.md)
- [WpPostListAllOf](docs/Model/WpPostListAllOf.md)
- [WpPostVersionsList](docs/Model/WpPostVersionsList.md)
- [WpPostWithoutInternal](docs/Model/WpPostWithoutInternal.md)
- [WpPostWithoutInternalAllOf](docs/Model/WpPostWithoutInternalAllOf.md)
- [WpPostWithoutRequired](docs/Model/WpPostWithoutRequired.md)
- [WpTag](docs/Model/WpTag.md)
- [WpTagBatchDelete400Response](docs/Model/WpTagBatchDelete400Response.md)
- [WpTagList](docs/Model/WpTagList.md)
- [WpTagListAllOf](docs/Model/WpTagListAllOf.md)
- [WpTagVersionsList](docs/Model/WpTagVersionsList.md)
- [WpTagWithoutInternal](docs/Model/WpTagWithoutInternal.md)
- [WpTagWithoutRequired](docs/Model/WpTagWithoutRequired.md)

## Authorization

### HeaderApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-AUTH-TOKEN
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@flotiq.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
