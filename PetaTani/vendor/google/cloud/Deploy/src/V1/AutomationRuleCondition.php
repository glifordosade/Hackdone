<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `AutomationRuleCondition` contains conditions relevant to an
 * `Automation` rule.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.AutomationRuleCondition</code>
 */
class AutomationRuleCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Details around targets enumerated in the rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $targets_present_condition = null;
    protected $rule_type_condition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\TargetsPresentCondition $targets_present_condition
     *           Optional. Details around targets enumerated in the rule.
     *     @type \Google\Cloud\Deploy\V1\TimedPromoteReleaseCondition $timed_promote_release_condition
     *           Optional. TimedPromoteReleaseCondition contains rule conditions specific
     *           to a an Automation with a timed promote release rule defined.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Details around targets enumerated in the rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\TargetsPresentCondition|null
     */
    public function getTargetsPresentCondition()
    {
        return $this->targets_present_condition;
    }

    public function hasTargetsPresentCondition()
    {
        return isset($this->targets_present_condition);
    }

    public function clearTargetsPresentCondition()
    {
        unset($this->targets_present_condition);
    }

    /**
     * Optional. Details around targets enumerated in the rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\TargetsPresentCondition $var
     * @return $this
     */
    public function setTargetsPresentCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\TargetsPresentCondition::class);
        $this->targets_present_condition = $var;

        return $this;
    }

    /**
     * Optional. TimedPromoteReleaseCondition contains rule conditions specific
     * to a an Automation with a timed promote release rule defined.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TimedPromoteReleaseCondition timed_promote_release_condition = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\TimedPromoteReleaseCondition|null
     */
    public function getTimedPromoteReleaseCondition()
    {
        return $this->readOneof(2);
    }

    public function hasTimedPromoteReleaseCondition()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. TimedPromoteReleaseCondition contains rule conditions specific
     * to a an Automation with a timed promote release rule defined.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TimedPromoteReleaseCondition timed_promote_release_condition = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\TimedPromoteReleaseCondition $var
     * @return $this
     */
    public function setTimedPromoteReleaseCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\TimedPromoteReleaseCondition::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRuleTypeCondition()
    {
        return $this->whichOneof("rule_type_condition");
    }

}
