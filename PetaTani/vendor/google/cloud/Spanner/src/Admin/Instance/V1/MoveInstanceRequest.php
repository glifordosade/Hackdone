<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [MoveInstance][google.spanner.admin.instance.v1.InstanceAdmin.MoveInstance].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.MoveInstanceRequest</code>
 */
class MoveInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The instance to move.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The target instance configuration where to move the instance.
     * Values are of the form `projects/<project>/instanceConfigs/<config>`.
     *
     * Generated from protobuf field <code>string target_config = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $target_config = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The instance to move.
     *           Values are of the form `projects/<project>/instances/<instance>`.
     *     @type string $target_config
     *           Required. The target instance configuration where to move the instance.
     *           Values are of the form `projects/<project>/instanceConfigs/<config>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The instance to move.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The instance to move.
     * Values are of the form `projects/<project>/instances/<instance>`.
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

    /**
     * Required. The target instance configuration where to move the instance.
     * Values are of the form `projects/<project>/instanceConfigs/<config>`.
     *
     * Generated from protobuf field <code>string target_config = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetConfig()
    {
        return $this->target_config;
    }

    /**
     * Required. The target instance configuration where to move the instance.
     * Values are of the form `projects/<project>/instanceConfigs/<config>`.
     *
     * Generated from protobuf field <code>string target_config = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_config = $var;

        return $this;
    }

}
