<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State for Hierarchy Controller
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.HierarchyControllerState</code>
 */
class HierarchyControllerState extends \Google\Protobuf\Internal\Message
{
    /**
     * The version for Hierarchy Controller
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerVersion version = 1;</code>
     */
    protected $version = null;
    /**
     * The deployment state for Hierarchy Controller
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerDeploymentState state = 2;</code>
     */
    protected $state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerVersion $version
     *           The version for Hierarchy Controller
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerDeploymentState $state
     *           The deployment state for Hierarchy Controller
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * The version for Hierarchy Controller
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerVersion version = 1;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerVersion|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * The version for Hierarchy Controller
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerVersion version = 1;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerVersion $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerVersion::class);
        $this->version = $var;

        return $this;
    }

    /**
     * The deployment state for Hierarchy Controller
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerDeploymentState state = 2;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerDeploymentState|null
     */
    public function getState()
    {
        return $this->state;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * The deployment state for Hierarchy Controller
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerDeploymentState state = 2;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerDeploymentState $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerDeploymentState::class);
        $this->state = $var;

        return $this;
    }

}
