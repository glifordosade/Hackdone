<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for deleting a notebook environment.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.DeleteEnvironmentRequest</code>
 */
class DeleteEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Format:
     *                     `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *
     * @return \Google\Cloud\Notebooks\V1\DeleteEnvironmentRequest
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
     *           Required. Format:
     *           `projects/{project_id}/locations/{location}/environments/{environment_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
