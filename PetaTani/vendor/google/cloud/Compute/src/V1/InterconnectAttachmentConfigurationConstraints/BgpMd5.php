<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectAttachmentConfigurationConstraints;

use UnexpectedValueException;

/**
 * [Output Only] Whether the attachment's BGP session requires/allows/disallows BGP MD5 authentication. This can take one of the following values: MD5_OPTIONAL, MD5_REQUIRED, MD5_UNSUPPORTED. For example, a Cross-Cloud Interconnect connection to a remote cloud provider that requires BGP MD5 authentication has the interconnectRemoteLocation attachment_configuration_constraints.bgp_md5 field set to MD5_REQUIRED, and that property is propagated to the attachment. Similarly, if BGP MD5 is MD5_UNSUPPORTED, an error is returned if MD5 is requested.
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectAttachmentConfigurationConstraints.BgpMd5</code>
 */
class BgpMd5
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_BGP_MD5 = 0;</code>
     */
    const UNDEFINED_BGP_MD5 = 0;
    /**
     * MD5_OPTIONAL: BGP MD5 authentication is supported and can optionally be configured.
     *
     * Generated from protobuf enum <code>MD5_OPTIONAL = 532156673;</code>
     */
    const MD5_OPTIONAL = 532156673;
    /**
     * MD5_REQUIRED: BGP MD5 authentication must be configured.
     *
     * Generated from protobuf enum <code>MD5_REQUIRED = 218034496;</code>
     */
    const MD5_REQUIRED = 218034496;
    /**
     * MD5_UNSUPPORTED: BGP MD5 authentication must not be configured
     *
     * Generated from protobuf enum <code>MD5_UNSUPPORTED = 86962388;</code>
     */
    const MD5_UNSUPPORTED = 86962388;

    private static $valueToName = [
        self::UNDEFINED_BGP_MD5 => 'UNDEFINED_BGP_MD5',
        self::MD5_OPTIONAL => 'MD5_OPTIONAL',
        self::MD5_REQUIRED => 'MD5_REQUIRED',
        self::MD5_UNSUPPORTED => 'MD5_UNSUPPORTED',
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

