<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/enums/page_one_promoted_strategy_goal.proto

namespace Google\Ads\GoogleAds\V2\Enums\PageOnePromotedStrategyGoalEnum;

use UnexpectedValueException;

/**
 * Enum describing possible strategy goals.
 *
 * Protobuf type <code>google.ads.googleads.v2.enums.PageOnePromotedStrategyGoalEnum.PageOnePromotedStrategyGoal</code>
 */
class PageOnePromotedStrategyGoal
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
     * First page on google.com.
     *
     * Generated from protobuf enum <code>FIRST_PAGE = 2;</code>
     */
    const FIRST_PAGE = 2;
    /**
     * Top slots of the first page on google.com.
     *
     * Generated from protobuf enum <code>FIRST_PAGE_PROMOTED = 3;</code>
     */
    const FIRST_PAGE_PROMOTED = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FIRST_PAGE => 'FIRST_PAGE',
        self::FIRST_PAGE_PROMOTED => 'FIRST_PAGE_PROMOTED',
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
class_alias(PageOnePromotedStrategyGoal::class, \Google\Ads\GoogleAds\V2\Enums\PageOnePromotedStrategyGoalEnum_PageOnePromotedStrategyGoal::class);
