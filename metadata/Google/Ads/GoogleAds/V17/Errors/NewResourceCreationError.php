<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/new_resource_creation_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class NewResourceCreationError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v17/errors/new_resource_creation_error.protogoogle.ads.googleads.v17.errors"�
NewResourceCreationErrorEnum"�
NewResourceCreationError
UNSPECIFIED 
UNKNOWN
CANNOT_SET_ID_FOR_CREATE
DUPLICATE_TEMP_IDS
TEMP_ID_RESOURCE_HAD_ERRORSB�
#com.google.ads.googleads.v17.errorsBNewResourceCreationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

