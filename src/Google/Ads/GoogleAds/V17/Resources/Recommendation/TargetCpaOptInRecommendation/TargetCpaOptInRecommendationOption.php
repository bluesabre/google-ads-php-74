<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V17\Resources\Recommendation\TargetCpaOptInRecommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Target CPA opt-in option with impact estimate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption</code>
 */
class TargetCpaOptInRecommendationOption extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The goal achieved by this option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal goal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $goal = 0;
    /**
     * Output only. Average CPA target.
     *
     * Generated from protobuf field <code>optional int64 target_cpa_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_cpa_micros = null;
    /**
     * Output only. The minimum campaign budget, in local currency for the
     * account, required to achieve the target CPA. Amount is specified in
     * micros, where one million is equivalent to one currency unit.
     *
     * Generated from protobuf field <code>optional int64 required_campaign_budget_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $required_campaign_budget_amount_micros = null;
    /**
     * Output only. The impact estimate if this option is selected.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Recommendation.RecommendationImpact impact = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $impact = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $goal
     *           Output only. The goal achieved by this option.
     *     @type int|string $target_cpa_micros
     *           Output only. Average CPA target.
     *     @type int|string $required_campaign_budget_amount_micros
     *           Output only. The minimum campaign budget, in local currency for the
     *           account, required to achieve the target CPA. Amount is specified in
     *           micros, where one million is equivalent to one currency unit.
     *     @type \Google\Ads\GoogleAds\V17\Resources\Recommendation\RecommendationImpact $impact
     *           Output only. The impact estimate if this option is selected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The goal achieved by this option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal goal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Output only. The goal achieved by this option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal goal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setGoal($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\TargetCpaOptInRecommendationGoalEnum\TargetCpaOptInRecommendationGoal::class);
        $this->goal = $var;

        return $this;
    }

    /**
     * Output only. Average CPA target.
     *
     * Generated from protobuf field <code>optional int64 target_cpa_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTargetCpaMicros()
    {
        return isset($this->target_cpa_micros) ? $this->target_cpa_micros : 0;
    }

    public function hasTargetCpaMicros()
    {
        return isset($this->target_cpa_micros);
    }

    public function clearTargetCpaMicros()
    {
        unset($this->target_cpa_micros);
    }

    /**
     * Output only. Average CPA target.
     *
     * Generated from protobuf field <code>optional int64 target_cpa_micros = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTargetCpaMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->target_cpa_micros = $var;

        return $this;
    }

    /**
     * Output only. The minimum campaign budget, in local currency for the
     * account, required to achieve the target CPA. Amount is specified in
     * micros, where one million is equivalent to one currency unit.
     *
     * Generated from protobuf field <code>optional int64 required_campaign_budget_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRequiredCampaignBudgetAmountMicros()
    {
        return isset($this->required_campaign_budget_amount_micros) ? $this->required_campaign_budget_amount_micros : 0;
    }

    public function hasRequiredCampaignBudgetAmountMicros()
    {
        return isset($this->required_campaign_budget_amount_micros);
    }

    public function clearRequiredCampaignBudgetAmountMicros()
    {
        unset($this->required_campaign_budget_amount_micros);
    }

    /**
     * Output only. The minimum campaign budget, in local currency for the
     * account, required to achieve the target CPA. Amount is specified in
     * micros, where one million is equivalent to one currency unit.
     *
     * Generated from protobuf field <code>optional int64 required_campaign_budget_amount_micros = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRequiredCampaignBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->required_campaign_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Output only. The impact estimate if this option is selected.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Recommendation.RecommendationImpact impact = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\Recommendation\RecommendationImpact|null
     */
    public function getImpact()
    {
        return $this->impact;
    }

    public function hasImpact()
    {
        return isset($this->impact);
    }

    public function clearImpact()
    {
        unset($this->impact);
    }

    /**
     * Output only. The impact estimate if this option is selected.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Recommendation.RecommendationImpact impact = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\Recommendation\RecommendationImpact $var
     * @return $this
     */
    public function setImpact($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Recommendation\RecommendationImpact::class);
        $this->impact = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetCpaOptInRecommendationOption::class, \Google\Ads\GoogleAds\V17\Resources\Recommendation_TargetCpaOptInRecommendation_TargetCpaOptInRecommendationOption::class);

