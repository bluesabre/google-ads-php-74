<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/asset_group_listing_group_filter.proto

namespace Google\Ads\GoogleAds\V17\Resources\ListingGroupFilterDimension;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Filters for URLs in a page feed and URLs from the advertiser web domain.
 * Several root nodes with this dimension are allowed in an asset group and
 * their conditions are considered in OR.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.ListingGroupFilterDimension.Webpage</code>
 */
class Webpage extends \Google\Protobuf\Internal\Message
{
    /**
     * The webpage conditions are case sensitive and these are and-ed together
     * when evaluated for filtering. All the conditions should be of same type.
     * Example1: for URL1 = www.ads.google.com?ocid=1&euid=2
     * and URL2 = www.ads.google.com?ocid=1
     * and with "ocid" and "euid" as url_contains conditions,
     * URL1 will be matched, but URL2 not.
     * Example2 : If URL1 has Label1, Label2 and URL2 has Label2, Label3, then
     * with Label1 and Label2 as custom_label conditions, URL1 will be matched
     * but not URL2.
     * With Label2 as the only custom_label condition then both URL1 and URL2
     * will be matched.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.ListingGroupFilterDimension.WebpageCondition conditions = 1;</code>
     */
    private $conditions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V17\Resources\ListingGroupFilterDimension\WebpageCondition>|\Google\Protobuf\Internal\RepeatedField $conditions
     *           The webpage conditions are case sensitive and these are and-ed together
     *           when evaluated for filtering. All the conditions should be of same type.
     *           Example1: for URL1 = www.ads.google.com?ocid=1&euid=2
     *           and URL2 = www.ads.google.com?ocid=1
     *           and with "ocid" and "euid" as url_contains conditions,
     *           URL1 will be matched, but URL2 not.
     *           Example2 : If URL1 has Label1, Label2 and URL2 has Label2, Label3, then
     *           with Label1 and Label2 as custom_label conditions, URL1 will be matched
     *           but not URL2.
     *           With Label2 as the only custom_label condition then both URL1 and URL2
     *           will be matched.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\AssetGroupListingGroupFilter::initOnce();
        parent::__construct($data);
    }

    /**
     * The webpage conditions are case sensitive and these are and-ed together
     * when evaluated for filtering. All the conditions should be of same type.
     * Example1: for URL1 = www.ads.google.com?ocid=1&euid=2
     * and URL2 = www.ads.google.com?ocid=1
     * and with "ocid" and "euid" as url_contains conditions,
     * URL1 will be matched, but URL2 not.
     * Example2 : If URL1 has Label1, Label2 and URL2 has Label2, Label3, then
     * with Label1 and Label2 as custom_label conditions, URL1 will be matched
     * but not URL2.
     * With Label2 as the only custom_label condition then both URL1 and URL2
     * will be matched.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.ListingGroupFilterDimension.WebpageCondition conditions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * The webpage conditions are case sensitive and these are and-ed together
     * when evaluated for filtering. All the conditions should be of same type.
     * Example1: for URL1 = www.ads.google.com?ocid=1&euid=2
     * and URL2 = www.ads.google.com?ocid=1
     * and with "ocid" and "euid" as url_contains conditions,
     * URL1 will be matched, but URL2 not.
     * Example2 : If URL1 has Label1, Label2 and URL2 has Label2, Label3, then
     * with Label1 and Label2 as custom_label conditions, URL1 will be matched
     * but not URL2.
     * With Label2 as the only custom_label condition then both URL1 and URL2
     * will be matched.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.resources.ListingGroupFilterDimension.WebpageCondition conditions = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V17\Resources\ListingGroupFilterDimension\WebpageCondition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Resources\ListingGroupFilterDimension\WebpageCondition::class);
        $this->conditions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Webpage::class, \Google\Ads\GoogleAds\V17\Resources\ListingGroupFilterDimension_Webpage::class);

