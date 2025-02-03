<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule specifying the maximum number of times an ad can be shown to a user
 * over a particular time period.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.FrequencyCap</code>
 */
class FrequencyCap extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The number of impressions, inclusive.
     *
     * Generated from protobuf field <code>int32 impressions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $impressions = 0;
    /**
     * Required. The type of time unit.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_unit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $impressions
     *           Required. The number of impressions, inclusive.
     *     @type int $time_unit
     *           Required. The type of time unit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The number of impressions, inclusive.
     *
     * Generated from protobuf field <code>int32 impressions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Required. The number of impressions, inclusive.
     *
     * Generated from protobuf field <code>int32 impressions = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setImpressions($var)
    {
        GPBUtil::checkInt32($var);
        $this->impressions = $var;

        return $this;
    }

    /**
     * Required. The type of time unit.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    /**
     * Required. The type of time unit.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit time_unit = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setTimeUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\FrequencyCapTimeUnitEnum\FrequencyCapTimeUnit::class);
        $this->time_unit = $var;

        return $this;
    }

}

