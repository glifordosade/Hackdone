<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/service.proto

namespace Google\Cloud\GkeHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `GkeHub.GetMembership` method.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1.GetMembershipRequest</code>
 */
class GetMembershipRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Membership resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The Membership resource name in the format
     *                     `projects/&#42;/locations/&#42;/memberships/*`. Please see
     *                     {@see GkeHubClient::membershipName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeHub\V1\GetMembershipRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The Membership resource name in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Membership resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The Membership resource name in the format
     * `projects/&#42;&#47;locations/&#42;&#47;memberships/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
