<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/feed_item_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Services;

class FeedItemSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v18/enums/feed_item_set_status.protogoogle.ads.googleads.v18.enums"d
FeedItemSetStatusEnum"K
FeedItemSetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v18.enumsBFeedItemSetStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
Egoogle/ads/googleads/v18/enums/feed_item_set_string_filter_type.protogoogle.ads.googleads.v18.enums"i
FeedItemSetStringFilterTypeEnum"F
FeedItemSetStringFilterType
UNSPECIFIED 
UNKNOWN	
EXACTB�
"com.google.ads.googleads.v18.enumsB FeedItemSetStringFilterTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
Egoogle/ads/googleads/v18/common/feed_item_set_filter_type_infos.protogoogle.ads.googleads.v18.common"}
DynamicLocationSetFilter
labels (	Q
business_name_filter (23.google.ads.googleads.v18.common.BusinessNameFilter"�
BusinessNameFilter
business_name (	p
filter_type (2[.google.ads.googleads.v18.enums.FeedItemSetStringFilterTypeEnum.FeedItemSetStringFilterType"6
!DynamicAffiliateLocationSetFilter
	chain_ids (B�
#com.google.ads.googleads.v18.commonBFeedItemSetFilterTypeInfosProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/common;common�GAA�Google.Ads.GoogleAds.V18.Common�Google\\Ads\\GoogleAds\\V18\\Common�#Google::Ads::GoogleAds::V18::Commonbproto3
�
6google/ads/googleads/v18/resources/feed_item_set.proto"google.ads.googleads.v18.resources9google/ads/googleads/v18/enums/feed_item_set_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
FeedItemSetC
resource_name (	B,�A�A&
$googleads.googleapis.com/FeedItemSet3
feed (	B%�A�A
googleads.googleapis.com/Feed
feed_item_set_id (B�A
display_name (	\\
status (2G.google.ads.googleads.v18.enums.FeedItemSetStatusEnum.FeedItemSetStatusB�A`
dynamic_location_set_filter (29.google.ads.googleads.v18.common.DynamicLocationSetFilterH s
%dynamic_affiliate_location_set_filter (2B.google.ads.googleads.v18.common.DynamicAffiliateLocationSetFilterH :l�Ai
$googleads.googleapis.com/FeedItemSetAcustomers/{customer_id}/feedItemSets/{feed_id}~{feed_item_set_id}B
dynamic_set_filterB�
&com.google.ads.googleads.v18.resourcesBFeedItemSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3
�
=google/ads/googleads/v18/services/feed_item_set_service.proto!google.ads.googleads.v18.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateFeedItemSetsRequest
customer_id (	B�AP

operations (27.google.ads.googleads.v18.services.FeedItemSetOperationB�A
partial_failure (
validate_only ("�
FeedItemSetOperation/
update_mask (2.google.protobuf.FieldMaskA
create (2/.google.ads.googleads.v18.resources.FeedItemSetH A
update (2/.google.ads.googleads.v18.resources.FeedItemSetH ;
remove (	B)�A&
$googleads.googleapis.com/FeedItemSetH B
	operation"�
MutateFeedItemSetsResponseK
results (2:.google.ads.googleads.v18.services.MutateFeedItemSetResult1
partial_failure_error (2.google.rpc.Status"[
MutateFeedItemSetResult@
resource_name (	B)�A&
$googleads.googleapis.com/FeedItemSet2�
FeedItemSetService�
MutateFeedItemSets<.google.ads.googleads.v18.services.MutateFeedItemSetsRequest=.google.ads.googleads.v18.services.MutateFeedItemSetsResponse"V�Acustomer_id,operations���7"2/v18/customers/{customer_id=*}/feedItemSets:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v18.servicesBFeedItemSetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v18/services;services�GAA�!Google.Ads.GoogleAds.V18.Services�!Google\\Ads\\GoogleAds\\V18\\Services�%Google::Ads::GoogleAds::V18::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

