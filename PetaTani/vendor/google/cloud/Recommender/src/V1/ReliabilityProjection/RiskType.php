<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommendation.proto

namespace Google\Cloud\Recommender\V1\ReliabilityProjection;

use UnexpectedValueException;

/**
 * The risk associated with the reliability issue.
 *
 * Protobuf type <code>google.cloud.recommender.v1.ReliabilityProjection.RiskType</code>
 */
class RiskType
{
    /**
     * Default unspecified risk. Don't use directly.
     *
     * Generated from protobuf enum <code>RISK_TYPE_UNSPECIFIED = 0;</code>
     */
    const RISK_TYPE_UNSPECIFIED = 0;
    /**
     * Potential service downtime.
     *
     * Generated from protobuf enum <code>SERVICE_DISRUPTION = 1;</code>
     */
    const SERVICE_DISRUPTION = 1;
    /**
     * Potential data loss.
     *
     * Generated from protobuf enum <code>DATA_LOSS = 2;</code>
     */
    const DATA_LOSS = 2;
    /**
     * Potential access denial. The service is still up but some or all clients
     * can't access it.
     *
     * Generated from protobuf enum <code>ACCESS_DENY = 3;</code>
     */
    const ACCESS_DENY = 3;

    private static $valueToName = [
        self::RISK_TYPE_UNSPECIFIED => 'RISK_TYPE_UNSPECIFIED',
        self::SERVICE_DISRUPTION => 'SERVICE_DISRUPTION',
        self::DATA_LOSS => 'DATA_LOSS',
        self::ACCESS_DENY => 'ACCESS_DENY',
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

