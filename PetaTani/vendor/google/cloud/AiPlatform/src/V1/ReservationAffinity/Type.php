<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/reservation_affinity.proto

namespace Google\Cloud\AIPlatform\V1\ReservationAffinity;

use UnexpectedValueException;

/**
 * Identifies a type of reservation affinity.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ReservationAffinity.Type</code>
 */
class Type
{
    /**
     * Default value. This should not be used.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Do not consume from any reserved capacity, only use on-demand.
     *
     * Generated from protobuf enum <code>NO_RESERVATION = 1;</code>
     */
    const NO_RESERVATION = 1;
    /**
     * Consume any reservation available, falling back to on-demand.
     *
     * Generated from protobuf enum <code>ANY_RESERVATION = 2;</code>
     */
    const ANY_RESERVATION = 2;
    /**
     * Consume from a specific reservation. When chosen, the reservation
     * must be identified via the `key` and `values` fields.
     *
     * Generated from protobuf enum <code>SPECIFIC_RESERVATION = 3;</code>
     */
    const SPECIFIC_RESERVATION = 3;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::NO_RESERVATION => 'NO_RESERVATION',
        self::ANY_RESERVATION => 'ANY_RESERVATION',
        self::SPECIFIC_RESERVATION => 'SPECIFIC_RESERVATION',
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

