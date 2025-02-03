<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/identity_verification_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Services;

class IdentityVerificationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v18/enums/identity_verification_program.protogoogle.ads.googleads.v18.enums"�
IdentityVerificationProgramEnum"a
IdentityVerificationProgram
UNSPECIFIED 
UNKNOWN$
 ADVERTISER_IDENTITY_VERIFICATIONB�
"com.google.ads.googleads.v18.enumsB IdentityVerificationProgramProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
Igoogle/ads/googleads/v18/enums/identity_verification_program_status.protogoogle.ads.googleads.v18.enums"�
%IdentityVerificationProgramStatusEnum"�
!IdentityVerificationProgramStatus
UNSPECIFIED 
UNKNOWN
PENDING_USER_ACTION
PENDING_REVIEW
SUCCESS
FAILUREB�
"com.google.ads.googleads.v18.enumsB&IdentityVerificationProgramStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
Egoogle/ads/googleads/v18/services/identity_verification_service.proto!google.ads.googleads.v18.servicesIgoogle/ads/googleads/v18/enums/identity_verification_program_status.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/protobuf/empty.proto"�
 StartIdentityVerificationRequest
customer_id (	B�A~
verification_program (2[.google.ads.googleads.v18.enums.IdentityVerificationProgramEnum.IdentityVerificationProgramB�A":
GetIdentityVerificationRequest
customer_id (	B�A"y
GetIdentityVerificationResponseV
identity_verification (27.google.ads.googleads.v18.services.IdentityVerification"�
IdentityVerificationy
verification_program (2[.google.ads.googleads.v18.enums.IdentityVerificationProgramEnum.IdentityVerificationProgramr
!identity_verification_requirement (2B.google.ads.googleads.v18.services.IdentityVerificationRequirementH �c
verification_progress (2?.google.ads.googleads.v18.services.IdentityVerificationProgressH�B$
"_identity_verification_requirementB
_verification_progress"�
IdentityVerificationProgress
program_status (2g.google.ads.googleads.v18.enums.IdentityVerificationProgramStatusEnum.IdentityVerificationProgramStatus\'
invitation_link_expiration_time (	

action_url (	"z
IdentityVerificationRequirement(
 verification_start_deadline_time (	-
%verification_completion_deadline_time (	2�
IdentityVerificationService�
StartIdentityVerificationC.google.ads.googleads.v18.services.StartIdentityVerificationRequest.google.protobuf.Empty"f�A customer_id,verification_program���="8/v18/customers/{customer_id=*}:startIdentityVerification:*�
GetIdentityVerificationA.google.ads.googleads.v18.services.GetIdentityVerificationRequestB.google.ads.googleads.v18.services.GetIdentityVerificationResponse"L�Acustomer_id���86/v18/customers/{customer_id=*}/getIdentityVerificationE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v18.servicesB IdentityVerificationServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v18/services;services�GAA�!Google.Ads.GoogleAds.V18.Services�!Google\\Ads\\GoogleAds\\V18\\Services�%Google::Ads::GoogleAds::V18::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

