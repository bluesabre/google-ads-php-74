<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/policy_violation_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\PolicyViolationErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible policy violation errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.PolicyViolationErrorEnum.PolicyViolationError</code>
 */
class PolicyViolationError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * A policy was violated. See PolicyViolationDetails for more detail.
     *
     * Generated from protobuf enum <code>POLICY_ERROR = 2;</code>
     */
    const POLICY_ERROR = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::POLICY_ERROR => 'POLICY_ERROR',
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
class_alias(PolicyViolationError::class, \Google\Ads\GoogleAds\V17\Errors\PolicyViolationErrorEnum_PolicyViolationError::class);

