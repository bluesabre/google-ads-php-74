<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/ad_group_customizer_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Services;

class AdGroupCustomizerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v18/enums/response_content_type.protogoogle.ads.googleads.v18.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v18.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
>google/ads/googleads/v18/enums/customizer_attribute_type.protogoogle.ads.googleads.v18.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
"com.google.ads.googleads.v18.enumsBCustomizerAttributeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
6google/ads/googleads/v18/common/customizer_value.protogoogle.ads.googleads.v18.commongoogle/api/field_behavior.proto"�
CustomizerValuef
type (2S.google.ads.googleads.v18.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�A
string_value (	B�AB�
#com.google.ads.googleads.v18.commonBCustomizerValueProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/common;common�GAA�Google.Ads.GoogleAds.V18.Common�Google\\Ads\\GoogleAds\\V18\\Common�#Google::Ads::GoogleAds::V18::Commonbproto3
�
<google/ads/googleads/v18/enums/customizer_value_status.protogoogle.ads.googleads.v18.enums"l
CustomizerValueStatusEnum"O
CustomizerValueStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v18.enumsBCustomizerValueStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
<google/ads/googleads/v18/resources/ad_group_customizer.proto"google.ads.googleads.v18.resources<google/ads/googleads/v18/enums/customizer_value_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AdGroupCustomizerI
resource_name (	B2�A�A,
*googleads.googleapis.com/AdGroupCustomizer:
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupU
customizer_attribute (	B7�A�A�A.
,googleads.googleapis.com/CustomizerAttributed
status (2O.google.ads.googleads.v18.enums.CustomizerValueStatusEnum.CustomizerValueStatusB�AD
value (20.google.ads.googleads.v18.common.CustomizerValueB�A:��A�
*googleads.googleapis.com/AdGroupCustomizerRcustomers/{customer_id}/adGroupCustomizers/{ad_group_id}~{customizer_attribute_id}B�
&com.google.ads.googleads.v18.resourcesBAdGroupCustomizerProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3
�
Cgoogle/ads/googleads/v18/services/ad_group_customizer_service.proto!google.ads.googleads.v18.services<google/ads/googleads/v18/resources/ad_group_customizer.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
MutateAdGroupCustomizersRequest
customer_id (	B�AV

operations (2=.google.ads.googleads.v18.services.AdGroupCustomizerOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v18.enums.ResponseContentTypeEnum.ResponseContentType"�
AdGroupCustomizerOperationG
create (25.google.ads.googleads.v18.resources.AdGroupCustomizerH A
remove (	B/�A,
*googleads.googleapis.com/AdGroupCustomizerH B
	operation"�
 MutateAdGroupCustomizersResponseQ
results (2@.google.ads.googleads.v18.services.MutateAdGroupCustomizerResult1
partial_failure_error (2.google.rpc.Status"�
MutateAdGroupCustomizerResultF
resource_name (	B/�A,
*googleads.googleapis.com/AdGroupCustomizerR
ad_group_customizer (25.google.ads.googleads.v18.resources.AdGroupCustomizer2�
AdGroupCustomizerService�
MutateAdGroupCustomizersB.google.ads.googleads.v18.services.MutateAdGroupCustomizersRequestC.google.ads.googleads.v18.services.MutateAdGroupCustomizersResponse"\\�Acustomer_id,operations���="8/v18/customers/{customer_id=*}/adGroupCustomizers:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v18.servicesBAdGroupCustomizerServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v18/services;services�GAA�!Google.Ads.GoogleAds.V18.Services�!Google\\Ads\\GoogleAds\\V18\\Services�%Google::Ads::GoogleAds::V18::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

