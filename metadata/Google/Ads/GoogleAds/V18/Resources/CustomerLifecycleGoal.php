<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/customer_lifecycle_goal.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Resources;

class CustomerLifecycleGoal
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
5google/ads/googleads/v18/common/lifecycle_goals.protogoogle.ads.googleads.v18.common"t
LifecycleGoalValueSettings
value (H � 
high_lifetime_value (H�B
_valueB
_high_lifetime_valueB�
#com.google.ads.googleads.v18.commonBLifecycleGoalsProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/common;common�GAA�Google.Ads.GoogleAds.V18.Common�Google\\Ads\\GoogleAds\\V18\\Common�#Google::Ads::GoogleAds::V18::Commonbproto3
�
@google/ads/googleads/v18/resources/customer_lifecycle_goal.proto"google.ads.googleads.v18.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerLifecycleGoalM
resource_name (	B6�A�A0
.googleads.googleapis.com/CustomerLifecycleGoalr
(customer_acquisition_goal_value_settings (2;.google.ads.googleads.v18.common.LifecycleGoalValueSettingsB�A:c�A`
.googleads.googleapis.com/CustomerLifecycleGoal.customers/{customer_id}/customerLifecycleGoalsB�
&com.google.ads.googleads.v18.resourcesBCustomerLifecycleGoalProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

