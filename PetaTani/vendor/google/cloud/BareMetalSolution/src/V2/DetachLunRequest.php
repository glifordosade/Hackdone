<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/instance.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for detach specific LUN from an Instance.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.DetachLunRequest</code>
 */
class DetachLunRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the instance.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $instance = '';
    /**
     * Required. Name of the Lun to detach.
     *
     * Generated from protobuf field <code>string lun = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $lun = '';
    /**
     * If true, performs lun unmapping without instance reboot.
     *
     * Generated from protobuf field <code>bool skip_reboot = 3;</code>
     */
    protected $skip_reboot = false;

    /**
     * @param string $instance Required. Name of the instance. Please see
     *                         {@see BareMetalSolutionClient::instanceName()} for help formatting this field.
     * @param string $lun      Required. Name of the Lun to detach. Please see
     *                         {@see BareMetalSolutionClient::lunName()} for help formatting this field.
     *
     * @return \Google\Cloud\BareMetalSolution\V2\DetachLunRequest
     *
     * @experimental
     */
    public static function build(string $instance, string $lun): self
    {
        return (new self())
            ->setInstance($instance)
            ->setLun($lun);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Required. Name of the instance.
     *     @type string $lun
     *           Required. Name of the Lun to detach.
     *     @type bool $skip_reboot
     *           If true, performs lun unmapping without instance reboot.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the instance.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Required. Name of the instance.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Required. Name of the Lun to detach.
     *
     * Generated from protobuf field <code>string lun = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLun()
    {
        return $this->lun;
    }

    /**
     * Required. Name of the Lun to detach.
     *
     * Generated from protobuf field <code>string lun = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLun($var)
    {
        GPBUtil::checkString($var, True);
        $this->lun = $var;

        return $this;
    }

    /**
     * If true, performs lun unmapping without instance reboot.
     *
     * Generated from protobuf field <code>bool skip_reboot = 3;</code>
     * @return bool
     */
    public function getSkipReboot()
    {
        return $this->skip_reboot;
    }

    /**
     * If true, performs lun unmapping without instance reboot.
     *
     * Generated from protobuf field <code>bool skip_reboot = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipReboot($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_reboot = $var;

        return $this;
    }

}
