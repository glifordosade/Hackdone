<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1\Scheduling\NodeAffinity;

use UnexpectedValueException;

/**
 * Defines the type of node selections.
 *
 * Protobuf type <code>google.cloud.backupdr.v1.Scheduling.NodeAffinity.Operator</code>
 */
class Operator
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * Requires Compute Engine to seek for matched nodes.
     *
     * Generated from protobuf enum <code>IN = 1;</code>
     */
    const IN = 1;
    /**
     * Requires Compute Engine to avoid certain nodes.
     *
     * Generated from protobuf enum <code>NOT_IN = 2;</code>
     */
    const NOT_IN = 2;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::IN => 'IN',
        self::NOT_IN => 'NOT_IN',
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

