<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use UnexpectedValueException;

/**
 * Table copy job operation type.
 *
 * Protobuf type <code>google.cloud.audit.BigQueryAuditMetadata.OperationType</code>
 */
class OperationType
{
    /**
     * Unspecified operation type.
     *
     * Generated from protobuf enum <code>OPERATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const OPERATION_TYPE_UNSPECIFIED = 0;
    /**
     * The source and the destination table have the same table type.
     *
     * Generated from protobuf enum <code>COPY = 1;</code>
     */
    const COPY = 1;
    /**
     * The source table type is TABLE and
     * the destination table type is SNAPSHOT.
     *
     * Generated from protobuf enum <code>SNAPSHOT = 2;</code>
     */
    const SNAPSHOT = 2;
    /**
     * The source table type is SNAPSHOT and
     * the destination table type is TABLE.
     *
     * Generated from protobuf enum <code>RESTORE = 3;</code>
     */
    const RESTORE = 3;

    private static $valueToName = [
        self::OPERATION_TYPE_UNSPECIFIED => 'OPERATION_TYPE_UNSPECIFIED',
        self::COPY => 'COPY',
        self::SNAPSHOT => 'SNAPSHOT',
        self::RESTORE => 'RESTORE',
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

