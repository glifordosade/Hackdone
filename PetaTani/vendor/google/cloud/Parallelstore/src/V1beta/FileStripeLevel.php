<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1beta/parallelstore.proto

namespace Google\Cloud\Parallelstore\V1beta;

use UnexpectedValueException;

/**
 * Represents the striping options for files.
 *
 * Protobuf type <code>google.cloud.parallelstore.v1beta.FileStripeLevel</code>
 */
class FileStripeLevel
{
    /**
     * If not set, FileStripeLevel will default to FILE_STRIPE_LEVEL_BALANCED
     *
     * Generated from protobuf enum <code>FILE_STRIPE_LEVEL_UNSPECIFIED = 0;</code>
     */
    const FILE_STRIPE_LEVEL_UNSPECIFIED = 0;
    /**
     * Minimum file striping
     *
     * Generated from protobuf enum <code>FILE_STRIPE_LEVEL_MIN = 1;</code>
     */
    const FILE_STRIPE_LEVEL_MIN = 1;
    /**
     * Medium file striping
     *
     * Generated from protobuf enum <code>FILE_STRIPE_LEVEL_BALANCED = 2;</code>
     */
    const FILE_STRIPE_LEVEL_BALANCED = 2;
    /**
     * Maximum file striping
     *
     * Generated from protobuf enum <code>FILE_STRIPE_LEVEL_MAX = 3;</code>
     */
    const FILE_STRIPE_LEVEL_MAX = 3;

    private static $valueToName = [
        self::FILE_STRIPE_LEVEL_UNSPECIFIED => 'FILE_STRIPE_LEVEL_UNSPECIFIED',
        self::FILE_STRIPE_LEVEL_MIN => 'FILE_STRIPE_LEVEL_MIN',
        self::FILE_STRIPE_LEVEL_BALANCED => 'FILE_STRIPE_LEVEL_BALANCED',
        self::FILE_STRIPE_LEVEL_MAX => 'FILE_STRIPE_LEVEL_MAX',
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
