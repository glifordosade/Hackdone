<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the [GetPolicy]
 * [google.cloud.orgpolicy.v2.OrgPolicy.GetPolicy] method.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.GetPolicyRequest</code>
 */
class GetPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the policy. See
     * [Policy][google.cloud.orgpolicy.v2.Policy] for naming requirements.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the policy. See
     *                     [Policy][google.cloud.orgpolicy.v2.Policy] for naming requirements. Please see
     *                     {@see OrgPolicyClient::policyName()} for help formatting this field.
     *
     * @return \Google\Cloud\OrgPolicy\V2\GetPolicyRequest
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
     *           Required. Resource name of the policy. See
     *           [Policy][google.cloud.orgpolicy.v2.Policy] for naming requirements.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the policy. See
     * [Policy][google.cloud.orgpolicy.v2.Policy] for naming requirements.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the policy. See
     * [Policy][google.cloud.orgpolicy.v2.Policy] for naming requirements.
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
