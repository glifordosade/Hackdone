<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User dialing in from a phone where the user's identity is unknown because
 * they haven't signed in with a Google Account.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.PhoneUser</code>
 */
class PhoneUser extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Partially redacted user's phone number when they call in.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Output only. Partially redacted user's phone number when they call in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Partially redacted user's phone number when they call in.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. Partially redacted user's phone number when they call in.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}
