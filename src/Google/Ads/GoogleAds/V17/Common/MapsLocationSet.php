<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/common/asset_set_types.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wrapper for multiple maps location sync data
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.MapsLocationSet</code>
 */
class MapsLocationSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of maps location info that user manually synced in.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.MapsLocationInfo maps_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $maps_locations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V17\Common\MapsLocationInfo>|\Google\Protobuf\Internal\RepeatedField $maps_locations
     *           Required. A list of maps location info that user manually synced in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\AssetSetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of maps location info that user manually synced in.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.MapsLocationInfo maps_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMapsLocations()
    {
        return $this->maps_locations;
    }

    /**
     * Required. A list of maps location info that user manually synced in.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.MapsLocationInfo maps_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V17\Common\MapsLocationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMapsLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Common\MapsLocationInfo::class);
        $this->maps_locations = $arr;

        return $this;
    }

}

