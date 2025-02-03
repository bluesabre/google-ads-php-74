<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/keyword_plan_ad_group_keyword_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Services;

class KeywordPlanAdGroupKeywordService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v18/enums/keyword_match_type.protogoogle.ads.googleads.v18.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
"com.google.ads.googleads.v18.enumsBKeywordMatchTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
Fgoogle/ads/googleads/v18/resources/keyword_plan_ad_group_keyword.proto"google.ads.googleads.v18.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
KeywordPlanAdGroupKeywordQ
resource_name (	B:�A�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeywordT
keyword_plan_ad_group (	B0�A-
+googleads.googleapis.com/KeywordPlanAdGroupH �
id	 (B�AH�
text
 (	H�Y

match_type (2E.google.ads.googleads.v18.enums.KeywordMatchTypeEnum.KeywordMatchType
cpc_bid_micros (H�
negative (B�AH�:��A�
2googleads.googleapis.com/KeywordPlanAdGroupKeywordUcustomers/{customer_id}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword_id}B
_keyword_plan_ad_groupB
_idB
_textB
_cpc_bid_microsB
	_negativeB�
&com.google.ads.googleads.v18.resourcesBKeywordPlanAdGroupKeywordProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3
�
Mgoogle/ads/googleads/v18/services/keyword_plan_ad_group_keyword_service.proto!google.ads.googleads.v18.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
\'MutateKeywordPlanAdGroupKeywordsRequest
customer_id (	B�A^

operations (2E.google.ads.googleads.v18.services.KeywordPlanAdGroupKeywordOperationB�A
partial_failure (
validate_only ("�
"KeywordPlanAdGroupKeywordOperation/
update_mask (2.google.protobuf.FieldMaskO
create (2=.google.ads.googleads.v18.resources.KeywordPlanAdGroupKeywordH O
update (2=.google.ads.googleads.v18.resources.KeywordPlanAdGroupKeywordH I
remove (	B7�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeywordH B
	operation"�
(MutateKeywordPlanAdGroupKeywordsResponse1
partial_failure_error (2.google.rpc.StatusY
results (2H.google.ads.googleads.v18.services.MutateKeywordPlanAdGroupKeywordResult"w
%MutateKeywordPlanAdGroupKeywordResultN
resource_name (	B7�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeyword2�
 KeywordPlanAdGroupKeywordService�
 MutateKeywordPlanAdGroupKeywordsJ.google.ads.googleads.v18.services.MutateKeywordPlanAdGroupKeywordsRequestK.google.ads.googleads.v18.services.MutateKeywordPlanAdGroupKeywordsResponse"d�Acustomer_id,operations���E"@/v18/customers/{customer_id=*}/keywordPlanAdGroupKeywords:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v18.servicesB%KeywordPlanAdGroupKeywordServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v18/services;services�GAA�!Google.Ads.GoogleAds.V18.Services�!Google\\Ads\\GoogleAds\\V18\\Services�%Google::Ads::GoogleAds::V18::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

