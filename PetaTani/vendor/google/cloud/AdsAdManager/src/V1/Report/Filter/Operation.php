<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace Google\Ads\AdManager\V1\Report\Filter;

use UnexpectedValueException;

/**
 * Supported filter operations.
 *
 * Protobuf type <code>google.ads.admanager.v1.Report.Filter.Operation</code>
 */
class Operation
{
    /**
     * For scalar operands, checks if the operand is in the set of provided
     * filter values.
     * For list operands, checks if any element in the operand is in the set
     * of provided filter values.
     * Default value.
     *
     * Generated from protobuf enum <code>IN = 0;</code>
     */
    const IN = 0;
    /**
     * For scalar operands, checks that the operand is not in the set of
     * provided filter values.
     * For list operands, checks that none of the elements in the operand
     * is in the set of provided filter values.
     *
     * Generated from protobuf enum <code>NOT_IN = 1;</code>
     */
    const NOT_IN = 1;
    /**
     * For scalar string operands, checks if the operand contains any of the
     * provided filter substrings.
     * For string list operands, checks if any string in the operand contains
     * any of the provided filter substrings.
     *
     * Generated from protobuf enum <code>CONTAINS = 2;</code>
     */
    const CONTAINS = 2;
    /**
     * For scalar string operands, checks that the operand contains none of
     * the provided filter substrings.
     * For string list operands, checks that none of the strings in the
     * operand contain none of the provided filter substrings.
     *
     * Generated from protobuf enum <code>NOT_CONTAINS = 3;</code>
     */
    const NOT_CONTAINS = 3;
    /**
     * Operand is less than the provided filter value.
     *
     * Generated from protobuf enum <code>LESS_THAN = 4;</code>
     */
    const LESS_THAN = 4;
    /**
     * Operand is less than or equal to provided filter value.
     *
     * Generated from protobuf enum <code>LESS_THAN_EQUALS = 5;</code>
     */
    const LESS_THAN_EQUALS = 5;
    /**
     * Operand is greater than provided filter value.
     *
     * Generated from protobuf enum <code>GREATER_THAN = 6;</code>
     */
    const GREATER_THAN = 6;
    /**
     * Operand is greater than or equal to provided filter value.
     *
     * Generated from protobuf enum <code>GREATER_THAN_EQUALS = 7;</code>
     */
    const GREATER_THAN_EQUALS = 7;
    /**
     * Operand is between provided filter values.
     *
     * Generated from protobuf enum <code>BETWEEN = 8;</code>
     */
    const BETWEEN = 8;
    /**
     * Operand matches against a regex or set of regexes (one must match)
     *
     * Generated from protobuf enum <code>MATCHES = 9;</code>
     */
    const MATCHES = 9;
    /**
     * Operand negative matches against a regex or set of regexes (none must
     * match)
     *
     * Generated from protobuf enum <code>NOT_MATCHES = 10;</code>
     */
    const NOT_MATCHES = 10;

    private static $valueToName = [
        self::IN => 'IN',
        self::NOT_IN => 'NOT_IN',
        self::CONTAINS => 'CONTAINS',
        self::NOT_CONTAINS => 'NOT_CONTAINS',
        self::LESS_THAN => 'LESS_THAN',
        self::LESS_THAN_EQUALS => 'LESS_THAN_EQUALS',
        self::GREATER_THAN => 'GREATER_THAN',
        self::GREATER_THAN_EQUALS => 'GREATER_THAN_EQUALS',
        self::BETWEEN => 'BETWEEN',
        self::MATCHES => 'MATCHES',
        self::NOT_MATCHES => 'NOT_MATCHES',
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

