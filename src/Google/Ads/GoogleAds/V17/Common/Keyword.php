<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/common/segments.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword criterion segment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.Keyword</code>
 */
class Keyword extends \Google\Protobuf\Internal\Message
{
    /**
     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>optional string ad_group_criterion = 3;</code>
     */
    protected $ad_group_criterion = null;
    /**
     * Keyword info.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.KeywordInfo info = 2;</code>
     */
    protected $info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ad_group_criterion
     *           The AdGroupCriterion resource name.
     *     @type \Google\Ads\GoogleAds\V17\Common\KeywordInfo $info
     *           Keyword info.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Segments::initOnce();
        parent::__construct($data);
    }

    /**
     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>optional string ad_group_criterion = 3;</code>
     * @return string
     */
    public function getAdGroupCriterion()
    {
        return isset($this->ad_group_criterion) ? $this->ad_group_criterion : '';
    }

    public function hasAdGroupCriterion()
    {
        return isset($this->ad_group_criterion);
    }

    public function clearAdGroupCriterion()
    {
        unset($this->ad_group_criterion);
    }

    /**
     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>optional string ad_group_criterion = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * Keyword info.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.KeywordInfo info = 2;</code>
     * @return \Google\Ads\GoogleAds\V17\Common\KeywordInfo|null
     */
    public function getInfo()
    {
        return $this->info;
    }

    public function hasInfo()
    {
        return isset($this->info);
    }

    public function clearInfo()
    {
        unset($this->info);
    }

    /**
     * Keyword info.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.KeywordInfo info = 2;</code>
     * @param \Google\Ads\GoogleAds\V17\Common\KeywordInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\KeywordInfo::class);
        $this->info = $var;

        return $this;
    }

}

