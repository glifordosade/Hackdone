<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * WorkloadMetadataConfig defines the metadata configuration to expose to
 * workloads on the node pool.
 *
 * Generated from protobuf message <code>google.container.v1.WorkloadMetadataConfig</code>
 */
class WorkloadMetadataConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Mode is the configuration for how to expose metadata to workloads running
     * on the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig.Mode mode = 2;</code>
     */
    protected $mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mode
     *           Mode is the configuration for how to expose metadata to workloads running
     *           on the node pool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Mode is the configuration for how to expose metadata to workloads running
     * on the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig.Mode mode = 2;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Mode is the configuration for how to expose metadata to workloads running
     * on the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.WorkloadMetadataConfig.Mode mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\WorkloadMetadataConfig\Mode::class);
        $this->mode = $var;

        return $this;
    }

}
