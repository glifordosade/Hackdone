<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SecurityCenterManagement.ListEffectiveEventThreatDetectionCustomModules][google.cloud.securitycentermanagement.v1.SecurityCenterManagement.ListEffectiveEventThreatDetectionCustomModules].
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.ListEffectiveEventThreatDetectionCustomModulesResponse</code>
 */
class ListEffectiveEventThreatDetectionCustomModulesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of effective Event Threat Detection custom modules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycentermanagement.v1.EffectiveEventThreatDetectionCustomModule effective_event_threat_detection_custom_modules = 1;</code>
     */
    private $effective_event_threat_detection_custom_modules;
    /**
     * A pagination token. To retrieve the next page of results, call the method
     * again with this token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\SecurityCenterManagement\V1\EffectiveEventThreatDetectionCustomModule>|\Google\Protobuf\Internal\RepeatedField $effective_event_threat_detection_custom_modules
     *           The list of effective Event Threat Detection custom modules.
     *     @type string $next_page_token
     *           A pagination token. To retrieve the next page of results, call the method
     *           again with this token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of effective Event Threat Detection custom modules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycentermanagement.v1.EffectiveEventThreatDetectionCustomModule effective_event_threat_detection_custom_modules = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectiveEventThreatDetectionCustomModules()
    {
        return $this->effective_event_threat_detection_custom_modules;
    }

    /**
     * The list of effective Event Threat Detection custom modules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycentermanagement.v1.EffectiveEventThreatDetectionCustomModule effective_event_threat_detection_custom_modules = 1;</code>
     * @param array<\Google\Cloud\SecurityCenterManagement\V1\EffectiveEventThreatDetectionCustomModule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectiveEventThreatDetectionCustomModules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenterManagement\V1\EffectiveEventThreatDetectionCustomModule::class);
        $this->effective_event_threat_detection_custom_modules = $arr;

        return $this;
    }

    /**
     * A pagination token. To retrieve the next page of results, call the method
     * again with this token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A pagination token. To retrieve the next page of results, call the method
     * again with this token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
