<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/effective_security_health_analytics_custom_module.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An EffectiveSecurityHealthAnalyticsCustomModule is the representation of
 * a Security Health Analytics custom module at a specified level of the
 * resource hierarchy: organization, folder, or project. If a custom module is
 * inherited from a parent organization or folder, the value of the
 * `enablementState` property in EffectiveSecurityHealthAnalyticsCustomModule is
 * set to the value that is effective in the parent, instead of  `INHERITED`.
 * For example, if the module is enabled in a parent organization or folder, the
 * effective enablement_state for the module in all child folders or projects is
 * also `enabled`. EffectiveSecurityHealthAnalyticsCustomModule is read-only.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.EffectiveSecurityHealthAnalyticsCustomModule</code>
 */
class EffectiveSecurityHealthAnalyticsCustomModule extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the custom module.
     * Its format is
     * "organizations/{organization}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     * or
     * "folders/{folder}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     * or
     * "projects/{project}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The user-specified configuration for the module.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomConfig custom_config = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $custom_config = null;
    /**
     * Output only. The effective state of enablement for the module at the given
     * level of the hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EffectiveSecurityHealthAnalyticsCustomModule.EnablementState enablement_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $enablement_state = 0;
    /**
     * Output only. The display name for the custom module. The name must be
     * between 1 and 128 characters, start with a lowercase letter, and contain
     * alphanumeric characters or underscores only.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the custom module.
     *           Its format is
     *           "organizations/{organization}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     *           or
     *           "folders/{folder}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     *           or
     *           "projects/{project}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}"
     *     @type \Google\Cloud\SecurityCenter\V1\CustomConfig $custom_config
     *           Output only. The user-specified configuration for the module.
     *     @type int $enablement_state
     *           Output only. The effective state of enablement for the module at the given
     *           level of the hierarchy.
     *     @type string $display_name
     *           Output only. The display name for the custom module. The name must be
     *           between 1 and 128 characters, start with a lowercase letter, and contain
     *           alphanumeric characters or underscores only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\EffectiveSecurityHealthAnalyticsCustomModule::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the custom module.
     * Its format is
     * "organizations/{organization}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     * or
     * "folders/{folder}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     * or
     * "projects/{project}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the custom module.
     * Its format is
     * "organizations/{organization}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     * or
     * "folders/{folder}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}",
     * or
     * "projects/{project}/securityHealthAnalyticsSettings/effectiveCustomModules/{customModule}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The user-specified configuration for the module.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomConfig custom_config = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\SecurityCenter\V1\CustomConfig|null
     */
    public function getCustomConfig()
    {
        return $this->custom_config;
    }

    public function hasCustomConfig()
    {
        return isset($this->custom_config);
    }

    public function clearCustomConfig()
    {
        unset($this->custom_config);
    }

    /**
     * Output only. The user-specified configuration for the module.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomConfig custom_config = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\SecurityCenter\V1\CustomConfig $var
     * @return $this
     */
    public function setCustomConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\CustomConfig::class);
        $this->custom_config = $var;

        return $this;
    }

    /**
     * Output only. The effective state of enablement for the module at the given
     * level of the hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EffectiveSecurityHealthAnalyticsCustomModule.EnablementState enablement_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEnablementState()
    {
        return $this->enablement_state;
    }

    /**
     * Output only. The effective state of enablement for the module at the given
     * level of the hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EffectiveSecurityHealthAnalyticsCustomModule.EnablementState enablement_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEnablementState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\EffectiveSecurityHealthAnalyticsCustomModule\EnablementState::class);
        $this->enablement_state = $var;

        return $this;
    }

    /**
     * Output only. The display name for the custom module. The name must be
     * between 1 and 128 characters, start with a lowercase letter, and contain
     * alphanumeric characters or underscores only.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The display name for the custom module. The name must be
     * between 1 and 128 characters, start with a lowercase letter, and contain
     * alphanumeric characters or underscores only.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
