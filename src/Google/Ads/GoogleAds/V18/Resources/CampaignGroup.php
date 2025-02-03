<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/campaign_group.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign group.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.CampaignGroup</code>
 */
class CampaignGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the campaign group.
     * Campaign group resource names have the form:
     * `customers/{customer_id}/campaignGroups/{campaign_group_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the campaign group.
     *
     * Generated from protobuf field <code>int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * The name of the campaign group.
     * This field is required and should not be empty when creating new campaign
     * groups.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * The status of the campaign group.
     * When a new campaign group is added, the status defaults to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.CampaignGroupStatusEnum.CampaignGroupStatus status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the campaign group.
     *           Campaign group resource names have the form:
     *           `customers/{customer_id}/campaignGroups/{campaign_group_id}`
     *     @type int|string $id
     *           Output only. The ID of the campaign group.
     *     @type string $name
     *           The name of the campaign group.
     *           This field is required and should not be empty when creating new campaign
     *           groups.
     *           It must not contain any null (code point 0x0), NL line feed
     *           (code point 0xA) or carriage return (code point 0xD) characters.
     *     @type int $status
     *           The status of the campaign group.
     *           When a new campaign group is added, the status defaults to ENABLED.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\CampaignGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the campaign group.
     * Campaign group resource names have the form:
     * `customers/{customer_id}/campaignGroups/{campaign_group_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the campaign group.
     * Campaign group resource names have the form:
     * `customers/{customer_id}/campaignGroups/{campaign_group_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Output only. The ID of the campaign group.
     *
     * Generated from protobuf field <code>int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The ID of the campaign group.
     *
     * Generated from protobuf field <code>int64 id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the campaign group.
     * This field is required and should not be empty when creating new campaign
     * groups.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the campaign group.
     * This field is required and should not be empty when creating new campaign
     * groups.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The status of the campaign group.
     * When a new campaign group is added, the status defaults to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.CampaignGroupStatusEnum.CampaignGroupStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the campaign group.
     * When a new campaign group is added, the status defaults to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.CampaignGroupStatusEnum.CampaignGroupStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\CampaignGroupStatusEnum\CampaignGroupStatus::class);
        $this->status = $var;

        return $this;
    }

}

