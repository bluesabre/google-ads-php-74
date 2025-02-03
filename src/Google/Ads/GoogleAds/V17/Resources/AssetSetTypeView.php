<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/asset_set_type_view.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An asset set type view.
 * This view reports non-overcounted metrics for each asset set type. Child
 * asset set types are not included in this report. Their stats are aggregated
 * under the parent asset set type.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.AssetSetTypeView</code>
 */
class AssetSetTypeView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the asset set type view.
     * Asset set type view resource names have the form:
     * `customers/{customer_id}/assetSetTypeViews/{asset_set_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The asset set type of the asset set type view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetSetTypeEnum.AssetSetType asset_set_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $asset_set_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the asset set type view.
     *           Asset set type view resource names have the form:
     *           `customers/{customer_id}/assetSetTypeViews/{asset_set_type}`
     *     @type int $asset_set_type
     *           Output only. The asset set type of the asset set type view.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\AssetSetTypeView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the asset set type view.
     * Asset set type view resource names have the form:
     * `customers/{customer_id}/assetSetTypeViews/{asset_set_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the asset set type view.
     * Asset set type view resource names have the form:
     * `customers/{customer_id}/assetSetTypeViews/{asset_set_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The asset set type of the asset set type view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetSetTypeEnum.AssetSetType asset_set_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAssetSetType()
    {
        return $this->asset_set_type;
    }

    /**
     * Output only. The asset set type of the asset set type view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetSetTypeEnum.AssetSetType asset_set_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAssetSetType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AssetSetTypeEnum\AssetSetType::class);
        $this->asset_set_type = $var;

        return $this;
    }

}

