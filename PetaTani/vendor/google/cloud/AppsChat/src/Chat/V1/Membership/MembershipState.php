<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/membership.proto

namespace Google\Apps\Chat\V1\Membership;

use UnexpectedValueException;

/**
 * Specifies the member's relationship with a space. Other membership states
 * might be supported in the future.
 *
 * Protobuf type <code>google.chat.v1.Membership.MembershipState</code>
 */
class MembershipState
{
    /**
     * Default value. Don't use.
     *
     * Generated from protobuf enum <code>MEMBERSHIP_STATE_UNSPECIFIED = 0;</code>
     */
    const MEMBERSHIP_STATE_UNSPECIFIED = 0;
    /**
     * The user is added to the space, and can participate in the space.
     *
     * Generated from protobuf enum <code>JOINED = 1;</code>
     */
    const JOINED = 1;
    /**
     * The user is invited to join the space, but hasn't joined it.
     *
     * Generated from protobuf enum <code>INVITED = 2;</code>
     */
    const INVITED = 2;
    /**
     * The user doesn't belong to the space and doesn't have a pending
     * invitation to join the space.
     *
     * Generated from protobuf enum <code>NOT_A_MEMBER = 3;</code>
     */
    const NOT_A_MEMBER = 3;

    private static $valueToName = [
        self::MEMBERSHIP_STATE_UNSPECIFIED => 'MEMBERSHIP_STATE_UNSPECIFIED',
        self::JOINED => 'JOINED',
        self::INVITED => 'INVITED',
        self::NOT_A_MEMBER => 'NOT_A_MEMBER',
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

