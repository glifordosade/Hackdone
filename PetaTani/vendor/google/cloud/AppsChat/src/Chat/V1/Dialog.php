<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/message.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wrapper around the card body of the dialog.
 *
 * Generated from protobuf message <code>google.chat.v1.Dialog</code>
 */
class Dialog extends \Google\Protobuf\Internal\Message
{
    /**
     * Input only. Body of the dialog, which is rendered in a modal.
     * Google Chat apps don't support the following card entities:
     * `DateTimePicker`, `OnChangeAction`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Card body = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Card\V1\Card $body
     *           Input only. Body of the dialog, which is rendered in a modal.
     *           Google Chat apps don't support the following card entities:
     *           `DateTimePicker`, `OnChangeAction`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. Body of the dialog, which is rendered in a modal.
     * Google Chat apps don't support the following card entities:
     * `DateTimePicker`, `OnChangeAction`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Card body = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Apps\Card\V1\Card|null
     */
    public function getBody()
    {
        return $this->body;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * Input only. Body of the dialog, which is rendered in a modal.
     * Google Chat apps don't support the following card entities:
     * `DateTimePicker`, `OnChangeAction`.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Card body = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Apps\Card\V1\Card $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Card::class);
        $this->body = $var;

        return $this;
    }

}
