<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1\Deployment;

use UnexpectedValueException;

/**
 * Possible lock states of a deployment.
 *
 * Protobuf type <code>google.cloud.config.v1.Deployment.LockState</code>
 */
class LockState
{
    /**
     * The default value. This value is used if the lock state is omitted.
     *
     * Generated from protobuf enum <code>LOCK_STATE_UNSPECIFIED = 0;</code>
     */
    const LOCK_STATE_UNSPECIFIED = 0;
    /**
     * The deployment is locked.
     *
     * Generated from protobuf enum <code>LOCKED = 1;</code>
     */
    const LOCKED = 1;
    /**
     * The deployment is unlocked.
     *
     * Generated from protobuf enum <code>UNLOCKED = 2;</code>
     */
    const UNLOCKED = 2;
    /**
     * The deployment is being locked.
     *
     * Generated from protobuf enum <code>LOCKING = 3;</code>
     */
    const LOCKING = 3;
    /**
     * The deployment is being unlocked.
     *
     * Generated from protobuf enum <code>UNLOCKING = 4;</code>
     */
    const UNLOCKING = 4;
    /**
     * The deployment has failed to lock.
     *
     * Generated from protobuf enum <code>LOCK_FAILED = 5;</code>
     */
    const LOCK_FAILED = 5;
    /**
     * The deployment has failed to unlock.
     *
     * Generated from protobuf enum <code>UNLOCK_FAILED = 6;</code>
     */
    const UNLOCK_FAILED = 6;

    private static $valueToName = [
        self::LOCK_STATE_UNSPECIFIED => 'LOCK_STATE_UNSPECIFIED',
        self::LOCKED => 'LOCKED',
        self::UNLOCKED => 'UNLOCKED',
        self::LOCKING => 'LOCKING',
        self::UNLOCKING => 'UNLOCKING',
        self::LOCK_FAILED => 'LOCK_FAILED',
        self::UNLOCK_FAILED => 'UNLOCK_FAILED',
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

