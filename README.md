# flagr-client

Flagr is a feature flagging, A/B testing and dynamic configuration microservice. The base path for all the APIs is \"/api/v1\".

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/getsidekicker/flagr-client.git"
    }
  ],
  "require": {
    "getsidekicker/flagr-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Flagr\Client\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 56; // int | numeric ID of the flag
$segment_id = 56; // int | numeric ID of the segment
$body = new \Flagr\Client\Model\CreateConstraintRequest(); // \Flagr\Client\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->createConstraint($flag_id, $segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->createConstraint: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to _http://localhost/api/v1_

| Class             | Method                                                                     | HTTP request                                                               | Description |
| ----------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | ----------- |
| _ConstraintApi_   | [**createConstraint**](docs/Api/ConstraintApi.md#createconstraint)         | **POST** /flags/{flagID}/segments/{segmentID}/constraints                  |
| _ConstraintApi_   | [**deleteConstraint**](docs/Api/ConstraintApi.md#deleteconstraint)         | **DELETE** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} |
| _ConstraintApi_   | [**findConstraints**](docs/Api/ConstraintApi.md#findconstraints)           | **GET** /flags/{flagID}/segments/{segmentID}/constraints                   |
| _ConstraintApi_   | [**putConstraint**](docs/Api/ConstraintApi.md#putconstraint)               | **PUT** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID}    |
| _DistributionApi_ | [**findDistributions**](docs/Api/DistributionApi.md#finddistributions)     | **GET** /flags/{flagID}/segments/{segmentID}/distributions                 |
| _DistributionApi_ | [**putDistributions**](docs/Api/DistributionApi.md#putdistributions)       | **PUT** /flags/{flagID}/segments/{segmentID}/distributions                 |
| _EvaluationApi_   | [**postEvaluation**](docs/Api/EvaluationApi.md#postevaluation)             | **POST** /evaluation                                                       |
| _EvaluationApi_   | [**postEvaluationBatch**](docs/Api/EvaluationApi.md#postevaluationbatch)   | **POST** /evaluation/batch                                                 |
| _ExportApi_       | [**getExportEvalCacheJSON**](docs/Api/ExportApi.md#getexportevalcachejson) | **GET** /export/eval_cache/json                                            |
| _ExportApi_       | [**getExportSqlite**](docs/Api/ExportApi.md#getexportsqlite)               | **GET** /export/sqlite                                                     |
| _FlagApi_         | [**createFlag**](docs/Api/FlagApi.md#createflag)                           | **POST** /flags                                                            |
| _FlagApi_         | [**deleteFlag**](docs/Api/FlagApi.md#deleteflag)                           | **DELETE** /flags/{flagID}                                                 |
| _FlagApi_         | [**findFlags**](docs/Api/FlagApi.md#findflags)                             | **GET** /flags                                                             |
| _FlagApi_         | [**getFlag**](docs/Api/FlagApi.md#getflag)                                 | **GET** /flags/{flagID}                                                    |
| _FlagApi_         | [**getFlagEntityTypes**](docs/Api/FlagApi.md#getflagentitytypes)           | **GET** /flags/entity_types                                                |
| _FlagApi_         | [**getFlagSnapshots**](docs/Api/FlagApi.md#getflagsnapshots)               | **GET** /flags/{flagID}/snapshots                                          |
| _FlagApi_         | [**putFlag**](docs/Api/FlagApi.md#putflag)                                 | **PUT** /flags/{flagID}                                                    |
| _FlagApi_         | [**restoreFlag**](docs/Api/FlagApi.md#restoreflag)                         | **PUT** /flags/{flagID}/restore                                            |
| _FlagApi_         | [**setFlagEnabled**](docs/Api/FlagApi.md#setflagenabled)                   | **PUT** /flags/{flagID}/enabled                                            |
| _HealthApi_       | [**getHealth**](docs/Api/HealthApi.md#gethealth)                           | **GET** /health                                                            |
| _SegmentApi_      | [**createSegment**](docs/Api/SegmentApi.md#createsegment)                  | **POST** /flags/{flagID}/segments                                          |
| _SegmentApi_      | [**deleteSegment**](docs/Api/SegmentApi.md#deletesegment)                  | **DELETE** /flags/{flagID}/segments/{segmentID}                            |
| _SegmentApi_      | [**findSegments**](docs/Api/SegmentApi.md#findsegments)                    | **GET** /flags/{flagID}/segments                                           |
| _SegmentApi_      | [**putSegment**](docs/Api/SegmentApi.md#putsegment)                        | **PUT** /flags/{flagID}/segments/{segmentID}                               |
| _SegmentApi_      | [**putSegmentsReorder**](docs/Api/SegmentApi.md#putsegmentsreorder)        | **PUT** /flags/{flagID}/segments/reorder                                   |
| _TagApi_          | [**createTag**](docs/Api/TagApi.md#createtag)                              | **POST** /flags/{flagID}/tags                                              |
| _TagApi_          | [**deleteTag**](docs/Api/TagApi.md#deletetag)                              | **DELETE** /flags/{flagID}/tags/{tagID}                                    |
| _TagApi_          | [**findAllTags**](docs/Api/TagApi.md#findalltags)                          | **GET** /tags                                                              |
| _TagApi_          | [**findTags**](docs/Api/TagApi.md#findtags)                                | **GET** /flags/{flagID}/tags                                               |
| _VariantApi_      | [**createVariant**](docs/Api/VariantApi.md#createvariant)                  | **POST** /flags/{flagID}/variants                                          |
| _VariantApi_      | [**deleteVariant**](docs/Api/VariantApi.md#deletevariant)                  | **DELETE** /flags/{flagID}/variants/{variantID}                            |
| _VariantApi_      | [**findVariants**](docs/Api/VariantApi.md#findvariants)                    | **GET** /flags/{flagID}/variants                                           |
| _VariantApi_      | [**putVariant**](docs/Api/VariantApi.md#putvariant)                        | **PUT** /flags/{flagID}/variants/{variantID}                               |

## Models

- [Constraint](docs/Model/Constraint.md)
- [CreateConstraintRequest](docs/Model/CreateConstraintRequest.md)
- [CreateFlagRequest](docs/Model/CreateFlagRequest.md)
- [CreateSegmentRequest](docs/Model/CreateSegmentRequest.md)
- [CreateTagRequest](docs/Model/CreateTagRequest.md)
- [CreateVariantRequest](docs/Model/CreateVariantRequest.md)
- [Distribution](docs/Model/Distribution.md)
- [Error](docs/Model/Error.md)
- [EvalContext](docs/Model/EvalContext.md)
- [EvalDebugLog](docs/Model/EvalDebugLog.md)
- [EvalResult](docs/Model/EvalResult.md)
- [EvaluationBatchRequest](docs/Model/EvaluationBatchRequest.md)
- [EvaluationBatchResponse](docs/Model/EvaluationBatchResponse.md)
- [EvaluationEntity](docs/Model/EvaluationEntity.md)
- [Flag](docs/Model/Flag.md)
- [FlagSnapshot](docs/Model/FlagSnapshot.md)
- [Health](docs/Model/Health.md)
- [PutDistributionsRequest](docs/Model/PutDistributionsRequest.md)
- [PutFlagRequest](docs/Model/PutFlagRequest.md)
- [PutSegmentReorderRequest](docs/Model/PutSegmentReorderRequest.md)
- [PutSegmentRequest](docs/Model/PutSegmentRequest.md)
- [PutVariantRequest](docs/Model/PutVariantRequest.md)
- [Segment](docs/Model/Segment.md)
- [SegmentDebugLog](docs/Model/SegmentDebugLog.md)
- [SetFlagEnabledRequest](docs/Model/SetFlagEnabledRequest.md)
- [Tag](docs/Model/Tag.md)
- [Variant](docs/Model/Variant.md)

## Authorization

All endpoints do not require authorization.

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.12`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
