<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/mobile_device_constant.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Resources;

class MobileDeviceConstant
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v18/enums/mobile_device_type.protogoogle.ads.googleads.v18.enums"`
MobileDeviceTypeEnum"H
MobileDeviceType
UNSPECIFIED 
UNKNOWN

MOBILE

TABLETB�
"com.google.ads.googleads.v18.enumsBMobileDeviceTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
?google/ads/googleads/v18/resources/mobile_device_constant.proto"google.ads.googleads.v18.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
MobileDeviceConstantL
resource_name (	B5�A�A/
-googleads.googleapis.com/MobileDeviceConstant
id (B�AH �
name (	B�AH�#
manufacturer_name	 (	B�AH�\'
operating_system_name
 (	B�AH�X
type (2E.google.ads.googleads.v18.enums.MobileDeviceTypeEnum.MobileDeviceTypeB�A:X�AU
-googleads.googleapis.com/MobileDeviceConstant$mobileDeviceConstants/{criterion_id}B
_idB
_nameB
_manufacturer_nameB
_operating_system_nameB�
&com.google.ads.googleads.v18.resourcesBMobileDeviceConstantProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

