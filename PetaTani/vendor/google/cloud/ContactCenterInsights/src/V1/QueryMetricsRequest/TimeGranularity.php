<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1\QueryMetricsRequest;

use UnexpectedValueException;

/**
 * A time granularity divides the time line into discrete time periods.
 * This is useful for defining buckets over which filtering and aggregation
 * should be performed.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.QueryMetricsRequest.TimeGranularity</code>
 */
class TimeGranularity
{
    /**
     * The time granularity is unspecified and will default to NONE.
     *
     * Generated from protobuf enum <code>TIME_GRANULARITY_UNSPECIFIED = 0;</code>
     */
    const TIME_GRANULARITY_UNSPECIFIED = 0;
    /**
     * No time granularity. The response won't contain a time series.
     * This is the default value if no time granularity is specified.
     *
     * Generated from protobuf enum <code>NONE = 1;</code>
     */
    const NONE = 1;
    /**
     * Data points in the time series will aggregate at a daily granularity.
     * 1 day means [midnight to midnight).
     *
     * Generated from protobuf enum <code>DAILY = 2;</code>
     */
    const DAILY = 2;
    /**
     * Data points in the time series will aggregate at a daily granularity.
     * 1 HOUR means [01:00 to 02:00).
     *
     * Generated from protobuf enum <code>HOURLY = 3;</code>
     */
    const HOURLY = 3;
    /**
     * Data points in the time series will aggregate at a daily granularity.
     * PER_MINUTE means [01:00 to 01:01).
     *
     * Generated from protobuf enum <code>PER_MINUTE = 4;</code>
     */
    const PER_MINUTE = 4;
    /**
     * Data points in the time series will aggregate at a 1 minute  granularity.
     * PER_5_MINUTES means [01:00 to 01:05).
     *
     * Generated from protobuf enum <code>PER_5_MINUTES = 5;</code>
     */
    const PER_5_MINUTES = 5;
    /**
     * Data points in the time series will aggregate at a monthly granularity.
     * 1 MONTH means [01st of the month to 1st of the next month).
     *
     * Generated from protobuf enum <code>MONTHLY = 6;</code>
     */
    const MONTHLY = 6;

    private static $valueToName = [
        self::TIME_GRANULARITY_UNSPECIFIED => 'TIME_GRANULARITY_UNSPECIFIED',
        self::NONE => 'NONE',
        self::DAILY => 'DAILY',
        self::HOURLY => 'HOURLY',
        self::PER_MINUTE => 'PER_MINUTE',
        self::PER_5_MINUTES => 'PER_5_MINUTES',
        self::MONTHLY => 'MONTHLY',
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

