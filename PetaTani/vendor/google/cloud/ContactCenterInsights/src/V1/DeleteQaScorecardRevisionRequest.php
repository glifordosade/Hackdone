<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to delete a QaScorecardRevision.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.DeleteQaScorecardRevisionRequest</code>
 */
class DeleteQaScorecardRevisionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the QaScorecardRevision to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. If set to true, all of this QaScorecardRevision's child resources
     * will also be deleted. Otherwise, the request will only succeed if it has
     * none.
     *
     * Generated from protobuf field <code>bool force = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $force = false;

    /**
     * @param string $name Required. The name of the QaScorecardRevision to delete. Please see
     *                     {@see ContactCenterInsightsClient::qaScorecardRevisionName()} for help formatting this field.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\DeleteQaScorecardRevisionRequest
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
     *           Required. The name of the QaScorecardRevision to delete.
     *     @type bool $force
     *           Optional. If set to true, all of this QaScorecardRevision's child resources
     *           will also be deleted. Otherwise, the request will only succeed if it has
     *           none.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the QaScorecardRevision to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the QaScorecardRevision to delete.
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
     * Optional. If set to true, all of this QaScorecardRevision's child resources
     * will also be deleted. Otherwise, the request will only succeed if it has
     * none.
     *
     * Generated from protobuf field <code>bool force = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. If set to true, all of this QaScorecardRevision's child resources
     * will also be deleted. Otherwise, the request will only succeed if it has
     * none.
     *
     * Generated from protobuf field <code>bool force = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}
