<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkProfileNetworkFeatures;

use UnexpectedValueException;

/**
 * Specifies whether private Google access is allowed.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkProfileNetworkFeatures.AllowPrivateGoogleAccess</code>
 */
class AllowPrivateGoogleAccess
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ALLOW_PRIVATE_GOOGLE_ACCESS = 0;</code>
     */
    const UNDEFINED_ALLOW_PRIVATE_GOOGLE_ACCESS = 0;
    /**
     * Generated from protobuf enum <code>PRIVATE_GOOGLE_ACCESS_ALLOWED = 220787351;</code>
     */
    const PRIVATE_GOOGLE_ACCESS_ALLOWED = 220787351;
    /**
     * Generated from protobuf enum <code>PRIVATE_GOOGLE_ACCESS_BLOCKED = 36950747;</code>
     */
    const PRIVATE_GOOGLE_ACCESS_BLOCKED = 36950747;

    private static $valueToName = [
        self::UNDEFINED_ALLOW_PRIVATE_GOOGLE_ACCESS => 'UNDEFINED_ALLOW_PRIVATE_GOOGLE_ACCESS',
        self::PRIVATE_GOOGLE_ACCESS_ALLOWED => 'PRIVATE_GOOGLE_ACCESS_ALLOWED',
        self::PRIVATE_GOOGLE_ACCESS_BLOCKED => 'PRIVATE_GOOGLE_ACCESS_BLOCKED',
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

