<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/custom_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The spec of a Container.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ContainerSpec</code>
 */
class ContainerSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI of a container image in the Container Registry that is to
     * be run on each worker replica.
     *
     * Generated from protobuf field <code>string image_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $image_uri = '';
    /**
     * The command to be invoked when the container is started.
     * It overrides the entrypoint instruction in Dockerfile when provided.
     *
     * Generated from protobuf field <code>repeated string command = 2;</code>
     */
    private $command;
    /**
     * The arguments to be passed when starting the container.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     */
    private $args;
    /**
     * Environment variables to be passed to the container.
     * Maximum limit is 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.EnvVar env = 4;</code>
     */
    private $env;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image_uri
     *           Required. The URI of a container image in the Container Registry that is to
     *           be run on each worker replica.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $command
     *           The command to be invoked when the container is started.
     *           It overrides the entrypoint instruction in Dockerfile when provided.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           The arguments to be passed when starting the container.
     *     @type array<\Google\Cloud\AIPlatform\V1\EnvVar>|\Google\Protobuf\Internal\RepeatedField $env
     *           Environment variables to be passed to the container.
     *           Maximum limit is 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\CustomJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI of a container image in the Container Registry that is to
     * be run on each worker replica.
     *
     * Generated from protobuf field <code>string image_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getImageUri()
    {
        return $this->image_uri;
    }

    /**
     * Required. The URI of a container image in the Container Registry that is to
     * be run on each worker replica.
     *
     * Generated from protobuf field <code>string image_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_uri = $var;

        return $this;
    }

    /**
     * The command to be invoked when the container is started.
     * It overrides the entrypoint instruction in Dockerfile when provided.
     *
     * Generated from protobuf field <code>repeated string command = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * The command to be invoked when the container is started.
     * It overrides the entrypoint instruction in Dockerfile when provided.
     *
     * Generated from protobuf field <code>repeated string command = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommand($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->command = $arr;

        return $this;
    }

    /**
     * The arguments to be passed when starting the container.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * The arguments to be passed when starting the container.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Environment variables to be passed to the container.
     * Maximum limit is 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.EnvVar env = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * Environment variables to be passed to the container.
     * Maximum limit is 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.EnvVar env = 4;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\EnvVar>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\EnvVar::class);
        $this->env = $arr;

        return $this;
    }

}
