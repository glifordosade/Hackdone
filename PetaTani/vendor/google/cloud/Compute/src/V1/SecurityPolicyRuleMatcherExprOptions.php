<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyRuleMatcherExprOptions</code>
 */
class SecurityPolicyRuleMatcherExprOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * reCAPTCHA configuration options to be applied for the rule. If the rule does not evaluate reCAPTCHA tokens, this field has no effect.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions recaptcha_options = 389151558;</code>
     */
    private $recaptcha_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions $recaptcha_options
     *           reCAPTCHA configuration options to be applied for the rule. If the rule does not evaluate reCAPTCHA tokens, this field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * reCAPTCHA configuration options to be applied for the rule. If the rule does not evaluate reCAPTCHA tokens, this field has no effect.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions recaptcha_options = 389151558;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions|null
     */
    public function getRecaptchaOptions()
    {
        return $this->recaptcha_options;
    }

    public function hasRecaptchaOptions()
    {
        return isset($this->recaptcha_options);
    }

    public function clearRecaptchaOptions()
    {
        unset($this->recaptcha_options);
    }

    /**
     * reCAPTCHA configuration options to be applied for the rule. If the rule does not evaluate reCAPTCHA tokens, this field has no effect.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions recaptcha_options = 389151558;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions $var
     * @return $this
     */
    public function setRecaptchaOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRuleMatcherExprOptionsRecaptchaOptions::class);
        $this->recaptcha_options = $var;

        return $this;
    }

}
