<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkProfileNetworkFeatures;

use UnexpectedValueException;

/**
 * Specifies which type of unicast is supported.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkProfileNetworkFeatures.Unicast</code>
 */
class Unicast
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_UNICAST = 0;</code>
     */
    const UNDEFINED_UNICAST = 0;
    /**
     * Generated from protobuf enum <code>UNICAST_SDN = 379954157;</code>
     */
    const UNICAST_SDN = 379954157;
    /**
     * Generated from protobuf enum <code>UNICAST_ULL = 379956325;</code>
     */
    const UNICAST_ULL = 379956325;

    private static $valueToName = [
        self::UNDEFINED_UNICAST => 'UNDEFINED_UNICAST',
        self::UNICAST_SDN => 'UNICAST_SDN',
        self::UNICAST_ULL => 'UNICAST_ULL',
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

