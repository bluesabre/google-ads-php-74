<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/content_label_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\ContentLabelTypeEnum;

use UnexpectedValueException;

/**
 * Enum listing the content label types supported by ContentLabel criterion.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.ContentLabelTypeEnum.ContentLabelType</code>
 */
class ContentLabelType
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
     * Sexually suggestive content.
     *
     * Generated from protobuf enum <code>SEXUALLY_SUGGESTIVE = 2;</code>
     */
    const SEXUALLY_SUGGESTIVE = 2;
    /**
     * Below the fold placement.
     *
     * Generated from protobuf enum <code>BELOW_THE_FOLD = 3;</code>
     */
    const BELOW_THE_FOLD = 3;
    /**
     * Parked domain.
     *
     * Generated from protobuf enum <code>PARKED_DOMAIN = 4;</code>
     */
    const PARKED_DOMAIN = 4;
    /**
     * Juvenile, gross & bizarre content.
     *
     * Generated from protobuf enum <code>JUVENILE = 6;</code>
     */
    const JUVENILE = 6;
    /**
     * Profanity & rough language.
     *
     * Generated from protobuf enum <code>PROFANITY = 7;</code>
     */
    const PROFANITY = 7;
    /**
     * Death & tragedy.
     *
     * Generated from protobuf enum <code>TRAGEDY = 8;</code>
     */
    const TRAGEDY = 8;
    /**
     * Video.
     *
     * Generated from protobuf enum <code>VIDEO = 9;</code>
     */
    const VIDEO = 9;
    /**
     * Content rating: G.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_G = 10;</code>
     */
    const VIDEO_RATING_DV_G = 10;
    /**
     * Content rating: PG.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_PG = 11;</code>
     */
    const VIDEO_RATING_DV_PG = 11;
    /**
     * Content rating: T.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_T = 12;</code>
     */
    const VIDEO_RATING_DV_T = 12;
    /**
     * Content rating: MA.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_MA = 13;</code>
     */
    const VIDEO_RATING_DV_MA = 13;
    /**
     * Content rating: not yet rated.
     *
     * Generated from protobuf enum <code>VIDEO_NOT_YET_RATED = 14;</code>
     */
    const VIDEO_NOT_YET_RATED = 14;
    /**
     * Embedded video.
     *
     * Generated from protobuf enum <code>EMBEDDED_VIDEO = 15;</code>
     */
    const EMBEDDED_VIDEO = 15;
    /**
     * Live streaming video.
     *
     * Generated from protobuf enum <code>LIVE_STREAMING_VIDEO = 16;</code>
     */
    const LIVE_STREAMING_VIDEO = 16;
    /**
     * Sensitive social issues.
     *
     * Generated from protobuf enum <code>SOCIAL_ISSUES = 17;</code>
     */
    const SOCIAL_ISSUES = 17;
    /**
     * Content that's suitable for families to view together, including Made for
     * Kids videos on YouTube.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_CONTENT_FOR_FAMILIES = 18;</code>
     */
    const BRAND_SUITABILITY_CONTENT_FOR_FAMILIES = 18;
    /**
     * Video games that simulate hand-to-hand fighting or combat with the use of
     * modern or medieval weapons.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_GAMES_FIGHTING = 19;</code>
     */
    const BRAND_SUITABILITY_GAMES_FIGHTING = 19;
    /**
     * Video games that feature mature content, such as violence, inappropriate
     * language, or sexual suggestiveness.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_GAMES_MATURE = 20;</code>
     */
    const BRAND_SUITABILITY_GAMES_MATURE = 20;
    /**
     * Health content that people might find sensitive or upsetting, such as
     * medical procedures or images and descriptions of various medical
     * conditions.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_HEALTH_SENSITIVE = 21;</code>
     */
    const BRAND_SUITABILITY_HEALTH_SENSITIVE = 21;
    /**
     * Health content from sources that may provide accurate information but
     * aren't as commonly cited as other, more well-known sources.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_HEALTH_SOURCE_UNDETERMINED = 22;</code>
     */
    const BRAND_SUITABILITY_HEALTH_SOURCE_UNDETERMINED = 22;
    /**
     * News content that's been recently announced, regardless of the themes or
     * people being reported on.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_NEWS_RECENT = 23;</code>
     */
    const BRAND_SUITABILITY_NEWS_RECENT = 23;
    /**
     * News content that people might find sensitive or upsetting, such as
     * crimes, accidents, and natural incidents, or commentary on potentially
     * controversial social and political issues.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_NEWS_SENSITIVE = 24;</code>
     */
    const BRAND_SUITABILITY_NEWS_SENSITIVE = 24;
    /**
     * News content from sources that aren't featured on Google News or YouTube
     * News.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_NEWS_SOURCE_NOT_FEATURED = 25;</code>
     */
    const BRAND_SUITABILITY_NEWS_SOURCE_NOT_FEATURED = 25;
    /**
     * Political content, such as political statements made by well-known
     * politicians, political elections, or events widely perceived to be
     * political in nature.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_POLITICS = 26;</code>
     */
    const BRAND_SUITABILITY_POLITICS = 26;
    /**
     * Content with religious themes, such as religious teachings or customs,
     * holy sites or places of worship, well-known religious figures or people
     * dressed in religious attire, or religious opinions on social and
     * political issues.
     *
     * Generated from protobuf enum <code>BRAND_SUITABILITY_RELIGION = 27;</code>
     */
    const BRAND_SUITABILITY_RELIGION = 27;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SEXUALLY_SUGGESTIVE => 'SEXUALLY_SUGGESTIVE',
        self::BELOW_THE_FOLD => 'BELOW_THE_FOLD',
        self::PARKED_DOMAIN => 'PARKED_DOMAIN',
        self::JUVENILE => 'JUVENILE',
        self::PROFANITY => 'PROFANITY',
        self::TRAGEDY => 'TRAGEDY',
        self::VIDEO => 'VIDEO',
        self::VIDEO_RATING_DV_G => 'VIDEO_RATING_DV_G',
        self::VIDEO_RATING_DV_PG => 'VIDEO_RATING_DV_PG',
        self::VIDEO_RATING_DV_T => 'VIDEO_RATING_DV_T',
        self::VIDEO_RATING_DV_MA => 'VIDEO_RATING_DV_MA',
        self::VIDEO_NOT_YET_RATED => 'VIDEO_NOT_YET_RATED',
        self::EMBEDDED_VIDEO => 'EMBEDDED_VIDEO',
        self::LIVE_STREAMING_VIDEO => 'LIVE_STREAMING_VIDEO',
        self::SOCIAL_ISSUES => 'SOCIAL_ISSUES',
        self::BRAND_SUITABILITY_CONTENT_FOR_FAMILIES => 'BRAND_SUITABILITY_CONTENT_FOR_FAMILIES',
        self::BRAND_SUITABILITY_GAMES_FIGHTING => 'BRAND_SUITABILITY_GAMES_FIGHTING',
        self::BRAND_SUITABILITY_GAMES_MATURE => 'BRAND_SUITABILITY_GAMES_MATURE',
        self::BRAND_SUITABILITY_HEALTH_SENSITIVE => 'BRAND_SUITABILITY_HEALTH_SENSITIVE',
        self::BRAND_SUITABILITY_HEALTH_SOURCE_UNDETERMINED => 'BRAND_SUITABILITY_HEALTH_SOURCE_UNDETERMINED',
        self::BRAND_SUITABILITY_NEWS_RECENT => 'BRAND_SUITABILITY_NEWS_RECENT',
        self::BRAND_SUITABILITY_NEWS_SENSITIVE => 'BRAND_SUITABILITY_NEWS_SENSITIVE',
        self::BRAND_SUITABILITY_NEWS_SOURCE_NOT_FEATURED => 'BRAND_SUITABILITY_NEWS_SOURCE_NOT_FEATURED',
        self::BRAND_SUITABILITY_POLITICS => 'BRAND_SUITABILITY_POLITICS',
        self::BRAND_SUITABILITY_RELIGION => 'BRAND_SUITABILITY_RELIGION',
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
class_alias(ContentLabelType::class, \Google\Ads\GoogleAds\V17\Enums\ContentLabelTypeEnum_ContentLabelType::class);

