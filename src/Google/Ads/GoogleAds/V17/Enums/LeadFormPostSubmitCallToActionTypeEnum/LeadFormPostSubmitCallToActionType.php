<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/lead_form_post_submit_call_to_action_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\LeadFormPostSubmitCallToActionTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing the type of post-submit call-to-action phrases for a lead
 * form.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.LeadFormPostSubmitCallToActionTypeEnum.LeadFormPostSubmitCallToActionType</code>
 */
class LeadFormPostSubmitCallToActionType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Visit site.
     *
     * Generated from protobuf enum <code>VISIT_SITE = 2;</code>
     */
    const VISIT_SITE = 2;
    /**
     * Download.
     *
     * Generated from protobuf enum <code>DOWNLOAD = 3;</code>
     */
    const DOWNLOAD = 3;
    /**
     * Learn more.
     *
     * Generated from protobuf enum <code>LEARN_MORE = 4;</code>
     */
    const LEARN_MORE = 4;
    /**
     * Shop now.
     *
     * Generated from protobuf enum <code>SHOP_NOW = 5;</code>
     */
    const SHOP_NOW = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::VISIT_SITE => 'VISIT_SITE',
        self::DOWNLOAD => 'DOWNLOAD',
        self::LEARN_MORE => 'LEARN_MORE',
        self::SHOP_NOW => 'SHOP_NOW',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LeadFormPostSubmitCallToActionType::class, \Google\Ads\GoogleAds\V17\Enums\LeadFormPostSubmitCallToActionTypeEnum_LeadFormPostSubmitCallToActionType::class);

