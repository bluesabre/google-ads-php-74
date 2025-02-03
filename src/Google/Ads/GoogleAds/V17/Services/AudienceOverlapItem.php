<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An audience attribute, with metadata including the overlap between this
 * attribute's potential YouTube reach and that of a primary attribute.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AudienceOverlapItem</code>
 */
class AudienceOverlapItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The attribute and its metadata, including potential YouTube reach.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsAttributeMetadata attribute_metadata = 1;</code>
     */
    protected $attribute_metadata = null;
    /**
     * The estimated size of the intersection of this audience attribute with the
     * primary attribute, that is, the number of reachable YouTube users who match
     * BOTH the primary attribute and this one.
     *
     * Generated from protobuf field <code>int64 potential_youtube_reach_intersection = 2;</code>
     */
    protected $potential_youtube_reach_intersection = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttributeMetadata $attribute_metadata
     *           The attribute and its metadata, including potential YouTube reach.
     *     @type int|string $potential_youtube_reach_intersection
     *           The estimated size of the intersection of this audience attribute with the
     *           primary attribute, that is, the number of reachable YouTube users who match
     *           BOTH the primary attribute and this one.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The attribute and its metadata, including potential YouTube reach.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsAttributeMetadata attribute_metadata = 1;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttributeMetadata|null
     */
    public function getAttributeMetadata()
    {
        return $this->attribute_metadata;
    }

    public function hasAttributeMetadata()
    {
        return isset($this->attribute_metadata);
    }

    public function clearAttributeMetadata()
    {
        unset($this->attribute_metadata);
    }

    /**
     * The attribute and its metadata, including potential YouTube reach.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsAttributeMetadata attribute_metadata = 1;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttributeMetadata $var
     * @return $this
     */
    public function setAttributeMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttributeMetadata::class);
        $this->attribute_metadata = $var;

        return $this;
    }

    /**
     * The estimated size of the intersection of this audience attribute with the
     * primary attribute, that is, the number of reachable YouTube users who match
     * BOTH the primary attribute and this one.
     *
     * Generated from protobuf field <code>int64 potential_youtube_reach_intersection = 2;</code>
     * @return int|string
     */
    public function getPotentialYoutubeReachIntersection()
    {
        return $this->potential_youtube_reach_intersection;
    }

    /**
     * The estimated size of the intersection of this audience attribute with the
     * primary attribute, that is, the number of reachable YouTube users who match
     * BOTH the primary attribute and this one.
     *
     * Generated from protobuf field <code>int64 potential_youtube_reach_intersection = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPotentialYoutubeReachIntersection($var)
    {
        GPBUtil::checkInt64($var);
        $this->potential_youtube_reach_intersection = $var;

        return $this;
    }

}

