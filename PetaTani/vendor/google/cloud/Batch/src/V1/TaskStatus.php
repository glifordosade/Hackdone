<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/task.proto

namespace Google\Cloud\Batch\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of a task.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.TaskStatus</code>
 */
class TaskStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Task state.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.TaskStatus.State state = 1;</code>
     */
    protected $state = 0;
    /**
     * Detailed info about why the state is reached.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.StatusEvent status_events = 2;</code>
     */
    private $status_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Task state.
     *     @type array<\Google\Cloud\Batch\V1\StatusEvent>|\Google\Protobuf\Internal\RepeatedField $status_events
     *           Detailed info about why the state is reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * Task state.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.TaskStatus.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Task state.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.TaskStatus.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Batch\V1\TaskStatus\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Detailed info about why the state is reached.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.StatusEvent status_events = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatusEvents()
    {
        return $this->status_events;
    }

    /**
     * Detailed info about why the state is reached.
     *
     * Generated from protobuf field <code>repeated .google.cloud.batch.v1.StatusEvent status_events = 2;</code>
     * @param array<\Google\Cloud\Batch\V1\StatusEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatusEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Batch\V1\StatusEvent::class);
        $this->status_events = $arr;

        return $this;
    }

}
