<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/volume.proto

namespace Google\Cloud\NetApp\V1\Volume;

use UnexpectedValueException;

/**
 * The volume states
 *
 * Protobuf type <code>google.cloud.netapp.v1.Volume.State</code>
 */
class State
{
    /**
     * Unspecified Volume State
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Volume State is Ready
     *
     * Generated from protobuf enum <code>READY = 1;</code>
     */
    const READY = 1;
    /**
     * Volume State is Creating
     *
     * Generated from protobuf enum <code>CREATING = 2;</code>
     */
    const CREATING = 2;
    /**
     * Volume State is Deleting
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * Volume State is Updating
     *
     * Generated from protobuf enum <code>UPDATING = 4;</code>
     */
    const UPDATING = 4;
    /**
     * Volume State is Restoring
     *
     * Generated from protobuf enum <code>RESTORING = 5;</code>
     */
    const RESTORING = 5;
    /**
     * Volume State is Disabled
     *
     * Generated from protobuf enum <code>DISABLED = 6;</code>
     */
    const DISABLED = 6;
    /**
     * Volume State is Error
     *
     * Generated from protobuf enum <code>ERROR = 7;</code>
     */
    const ERROR = 7;
    /**
     * Volume State is Preparing. Note that this is different from CREATING
     * where CREATING means the volume is being created, while PREPARING means
     * the volume is created and now being prepared for the replication.
     *
     * Generated from protobuf enum <code>PREPARING = 8;</code>
     */
    const PREPARING = 8;
    /**
     * Volume State is Read Only
     *
     * Generated from protobuf enum <code>READ_ONLY = 9;</code>
     */
    const READ_ONLY = 9;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::READY => 'READY',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::UPDATING => 'UPDATING',
        self::RESTORING => 'RESTORING',
        self::DISABLED => 'DISABLED',
        self::ERROR => 'ERROR',
        self::PREPARING => 'PREPARING',
        self::READ_ONLY => 'READ_ONLY',
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

