<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/campaign_search_term_insight.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Resources;

class CampaignSearchTermInsight
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
�
Egoogle/ads/googleads/v18/resources/campaign_search_term_insight.proto"google.ads.googleads.v18.resourcesgoogle/api/resource.proto"�
CampaignSearchTermInsightQ
resource_name (	B:�A�A4
2googleads.googleapis.com/CampaignSearchTermInsight 
category_label (	B�AH �
id (B�AH�
campaign_id (B�AH�:��A�
2googleads.googleapis.com/CampaignSearchTermInsightMcustomers/{customer_id}/campaignSearchTermInsights/{campaign_id}~{cluster_id}B
_category_labelB
_idB
_campaign_idB�
&com.google.ads.googleads.v18.resourcesBCampaignSearchTermInsightProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

