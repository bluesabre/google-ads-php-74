<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/label_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class LabelError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
1google/ads/googleads/v17/errors/label_error.protogoogle.ads.googleads.v17.errors"�
LabelErrorEnum"�

LabelError
UNSPECIFIED 
UNKNOWN
CANNOT_APPLY_INACTIVE_LABEL5
1CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION5
1CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION!
EXCEEDED_LABEL_LIMIT_PER_TYPE&
"INVALID_RESOURCE_FOR_MANAGER_LABEL
DUPLICATE_NAME
INVALID_LABEL_NAME 
CANNOT_ATTACH_LABEL_TO_DRAFT	/
+CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER
B�
#com.google.ads.googleads.v17.errorsBLabelErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

