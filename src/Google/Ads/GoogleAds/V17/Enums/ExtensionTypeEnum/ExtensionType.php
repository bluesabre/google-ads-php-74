<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/extension_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\ExtensionTypeEnum;

use UnexpectedValueException;

/**
 * Possible data types for an extension in an extension setting.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.ExtensionTypeEnum.ExtensionType</code>
 */
class ExtensionType
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
     * None.
     *
     * Generated from protobuf enum <code>NONE = 2;</code>
     */
    const NONE = 2;
    /**
     * App.
     *
     * Generated from protobuf enum <code>APP = 3;</code>
     */
    const APP = 3;
    /**
     * Call.
     *
     * Generated from protobuf enum <code>CALL = 4;</code>
     */
    const CALL = 4;
    /**
     * Callout.
     *
     * Generated from protobuf enum <code>CALLOUT = 5;</code>
     */
    const CALLOUT = 5;
    /**
     * Message.
     *
     * Generated from protobuf enum <code>MESSAGE = 6;</code>
     */
    const MESSAGE = 6;
    /**
     * Price.
     *
     * Generated from protobuf enum <code>PRICE = 7;</code>
     */
    const PRICE = 7;
    /**
     * Promotion.
     *
     * Generated from protobuf enum <code>PROMOTION = 8;</code>
     */
    const PROMOTION = 8;
    /**
     * Sitelink.
     *
     * Generated from protobuf enum <code>SITELINK = 10;</code>
     */
    const SITELINK = 10;
    /**
     * Structured snippet.
     *
     * Generated from protobuf enum <code>STRUCTURED_SNIPPET = 11;</code>
     */
    const STRUCTURED_SNIPPET = 11;
    /**
     * Location.
     *
     * Generated from protobuf enum <code>LOCATION = 12;</code>
     */
    const LOCATION = 12;
    /**
     * Affiliate location.
     *
     * Generated from protobuf enum <code>AFFILIATE_LOCATION = 13;</code>
     */
    const AFFILIATE_LOCATION = 13;
    /**
     * Hotel callout
     *
     * Generated from protobuf enum <code>HOTEL_CALLOUT = 15;</code>
     */
    const HOTEL_CALLOUT = 15;
    /**
     * Image.
     *
     * Generated from protobuf enum <code>IMAGE = 16;</code>
     */
    const IMAGE = 16;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NONE => 'NONE',
        self::APP => 'APP',
        self::CALL => 'CALL',
        self::CALLOUT => 'CALLOUT',
        self::MESSAGE => 'MESSAGE',
        self::PRICE => 'PRICE',
        self::PROMOTION => 'PROMOTION',
        self::SITELINK => 'SITELINK',
        self::STRUCTURED_SNIPPET => 'STRUCTURED_SNIPPET',
        self::LOCATION => 'LOCATION',
        self::AFFILIATE_LOCATION => 'AFFILIATE_LOCATION',
        self::HOTEL_CALLOUT => 'HOTEL_CALLOUT',
        self::IMAGE => 'IMAGE',
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
class_alias(ExtensionType::class, \Google\Ads\GoogleAds\V17\Enums\ExtensionTypeEnum_ExtensionType::class);

