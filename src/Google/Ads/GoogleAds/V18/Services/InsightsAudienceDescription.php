<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A text description of the audience of interest for which insights are being
 * requested in AudienceInsightsService.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.InsightsAudienceDescription</code>
 */
class InsightsAudienceDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The countries for the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.common.LocationInfo country_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $country_locations;
    /**
     * Required. An English language text description of an audience to get
     * suggestions for. Maximum length is 2000 characters. For example, "Women in
     * their 30s who love to travel".
     *
     * Generated from protobuf field <code>string audience_description = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $audience_description = '';
    /**
     * Optional. An optional marketing objective which will influence the type of
     * suggestions produced. AWARENESS will provide affinity audience segments,
     * while CONSIDERATION will provide in-market audience segments. Leaving it
     * unset will provide both.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AudienceInsightsMarketingObjectiveEnum.AudienceInsightsMarketingObjective marketing_objective = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $marketing_objective = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V18\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $country_locations
     *           Required. The countries for the audience.
     *     @type string $audience_description
     *           Required. An English language text description of an audience to get
     *           suggestions for. Maximum length is 2000 characters. For example, "Women in
     *           their 30s who love to travel".
     *     @type int $marketing_objective
     *           Optional. An optional marketing objective which will influence the type of
     *           suggestions produced. AWARENESS will provide affinity audience segments,
     *           while CONSIDERATION will provide in-market audience segments. Leaving it
     *           unset will provide both.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The countries for the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.common.LocationInfo country_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCountryLocations()
    {
        return $this->country_locations;
    }

    /**
     * Required. The countries for the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.common.LocationInfo country_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V18\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCountryLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V18\Common\LocationInfo::class);
        $this->country_locations = $arr;

        return $this;
    }

    /**
     * Required. An English language text description of an audience to get
     * suggestions for. Maximum length is 2000 characters. For example, "Women in
     * their 30s who love to travel".
     *
     * Generated from protobuf field <code>string audience_description = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAudienceDescription()
    {
        return $this->audience_description;
    }

    /**
     * Required. An English language text description of an audience to get
     * suggestions for. Maximum length is 2000 characters. For example, "Women in
     * their 30s who love to travel".
     *
     * Generated from protobuf field <code>string audience_description = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAudienceDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience_description = $var;

        return $this;
    }

    /**
     * Optional. An optional marketing objective which will influence the type of
     * suggestions produced. AWARENESS will provide affinity audience segments,
     * while CONSIDERATION will provide in-market audience segments. Leaving it
     * unset will provide both.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AudienceInsightsMarketingObjectiveEnum.AudienceInsightsMarketingObjective marketing_objective = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMarketingObjective()
    {
        return $this->marketing_objective;
    }

    /**
     * Optional. An optional marketing objective which will influence the type of
     * suggestions produced. AWARENESS will provide affinity audience segments,
     * while CONSIDERATION will provide in-market audience segments. Leaving it
     * unset will provide both.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.AudienceInsightsMarketingObjectiveEnum.AudienceInsightsMarketingObjective marketing_objective = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMarketingObjective($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\AudienceInsightsMarketingObjectiveEnum\AudienceInsightsMarketingObjective::class);
        $this->marketing_objective = $var;

        return $this;
    }

}

