<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/kubernetes.proto

namespace Google\Cloud\SecurityCenter\V2\Kubernetes\Role;

use UnexpectedValueException;

/**
 * Types of Kubernetes roles.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.Kubernetes.Role.Kind</code>
 */
class Kind
{
    /**
     * Role type is not specified.
     *
     * Generated from protobuf enum <code>KIND_UNSPECIFIED = 0;</code>
     */
    const KIND_UNSPECIFIED = 0;
    /**
     * Kubernetes Role.
     *
     * Generated from protobuf enum <code>ROLE = 1;</code>
     */
    const ROLE = 1;
    /**
     * Kubernetes ClusterRole.
     *
     * Generated from protobuf enum <code>CLUSTER_ROLE = 2;</code>
     */
    const CLUSTER_ROLE = 2;

    private static $valueToName = [
        self::KIND_UNSPECIFIED => 'KIND_UNSPECIFIED',
        self::ROLE => 'ROLE',
        self::CLUSTER_ROLE => 'CLUSTER_ROLE',
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

