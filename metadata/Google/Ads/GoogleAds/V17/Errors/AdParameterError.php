<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/ad_parameter_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class AdParameterError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v17/errors/ad_parameter_error.protogoogle.ads.googleads.v17.errors"�
AdParameterErrorEnum"{
AdParameterError
UNSPECIFIED 
UNKNOWN&
"AD_GROUP_CRITERION_MUST_BE_KEYWORD!
INVALID_INSERTION_TEXT_FORMATB�
#com.google.ads.googleads.v17.errorsBAdParameterErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

