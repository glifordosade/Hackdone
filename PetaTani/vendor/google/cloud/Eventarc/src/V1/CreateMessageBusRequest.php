<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the CreateMessageBus method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.CreateMessageBusRequest</code>
 */
class CreateMessageBusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent collection in which to add this message bus.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The message bus to create.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.MessageBus message_bus = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $message_bus = null;
    /**
     * Required. The user-provided ID to be assigned to the MessageBus. It should
     * match the format (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$)
     *
     * Generated from protobuf field <code>string message_bus_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $message_bus_id = '';
    /**
     * Optional. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                               $parent       Required. The parent collection in which to add this message bus. Please see
     *                                                           {@see EventarcClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Eventarc\V1\MessageBus $messageBus   Required. The message bus to create.
     * @param string                               $messageBusId Required. The user-provided ID to be assigned to the MessageBus. It should
     *                                                           match the format (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$)
     *
     * @return \Google\Cloud\Eventarc\V1\CreateMessageBusRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Eventarc\V1\MessageBus $messageBus, string $messageBusId): self
    {
        return (new self())
            ->setParent($parent)
            ->setMessageBus($messageBus)
            ->setMessageBusId($messageBusId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent collection in which to add this message bus.
     *     @type \Google\Cloud\Eventarc\V1\MessageBus $message_bus
     *           Required. The message bus to create.
     *     @type string $message_bus_id
     *           Required. The user-provided ID to be assigned to the MessageBus. It should
     *           match the format (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$)
     *     @type bool $validate_only
     *           Optional. If set, validate the request and preview the review, but do not
     *           post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent collection in which to add this message bus.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent collection in which to add this message bus.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The message bus to create.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.MessageBus message_bus = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Eventarc\V1\MessageBus|null
     */
    public function getMessageBus()
    {
        return $this->message_bus;
    }

    public function hasMessageBus()
    {
        return isset($this->message_bus);
    }

    public function clearMessageBus()
    {
        unset($this->message_bus);
    }

    /**
     * Required. The message bus to create.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.MessageBus message_bus = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Eventarc\V1\MessageBus $var
     * @return $this
     */
    public function setMessageBus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Eventarc\V1\MessageBus::class);
        $this->message_bus = $var;

        return $this;
    }

    /**
     * Required. The user-provided ID to be assigned to the MessageBus. It should
     * match the format (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$)
     *
     * Generated from protobuf field <code>string message_bus_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMessageBusId()
    {
        return $this->message_bus_id;
    }

    /**
     * Required. The user-provided ID to be assigned to the MessageBus. It should
     * match the format (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$)
     *
     * Generated from protobuf field <code>string message_bus_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMessageBusId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_bus_id = $var;

        return $this;
    }

    /**
     * Optional. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}
