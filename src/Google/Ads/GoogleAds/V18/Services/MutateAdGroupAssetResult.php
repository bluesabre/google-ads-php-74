<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/ad_group_asset_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the ad group asset mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.MutateAdGroupAssetResult</code>
 */
class MutateAdGroupAssetResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated ad group asset with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.AdGroupAsset ad_group_asset = 2;</code>
     */
    protected $ad_group_asset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V18\Resources\AdGroupAsset $ad_group_asset
     *           The mutated ad group asset with only mutable fields after
     *           mutate. The field will only be returned when response_content_type is set
     *           to "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\AdGroupAssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated ad group asset with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.AdGroupAsset ad_group_asset = 2;</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\AdGroupAsset|null
     */
    public function getAdGroupAsset()
    {
        return $this->ad_group_asset;
    }

    public function hasAdGroupAsset()
    {
        return isset($this->ad_group_asset);
    }

    public function clearAdGroupAsset()
    {
        unset($this->ad_group_asset);
    }

    /**
     * The mutated ad group asset with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.AdGroupAsset ad_group_asset = 2;</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\AdGroupAsset $var
     * @return $this
     */
    public function setAdGroupAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\AdGroupAsset::class);
        $this->ad_group_asset = $var;

        return $this;
    }

}

