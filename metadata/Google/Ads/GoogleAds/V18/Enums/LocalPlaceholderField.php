<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/local_placeholder_field.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Enums;

class LocalPlaceholderField
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v18/enums/local_placeholder_field.protogoogle.ads.googleads.v18.enums"�
LocalPlaceholderFieldEnum"�
LocalPlaceholderField
UNSPECIFIED 
UNKNOWN
DEAL_ID
	DEAL_NAME
SUBTITLE
DESCRIPTION	
PRICE
FORMATTED_PRICE

SALE_PRICE
FORMATTED_SALE_PRICE	
	IMAGE_URL

ADDRESS
CATEGORY
CONTEXTUAL_KEYWORDS

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_DEAL_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v18.enumsBLocalPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

