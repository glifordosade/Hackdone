<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1\BackgroundJobLogEntry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details regarding a Seed background job.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.BackgroundJobLogEntry.SeedJobDetails</code>
 */
class SeedJobDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The connection profile which was used for the seed job.
     *
     * Generated from protobuf field <code>string connection_profile = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $connection_profile = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $connection_profile
     *           Output only. The connection profile which was used for the seed job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The connection profile which was used for the seed job.
     *
     * Generated from protobuf field <code>string connection_profile = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getConnectionProfile()
    {
        return $this->connection_profile;
    }

    /**
     * Output only. The connection profile which was used for the seed job.
     *
     * Generated from protobuf field <code>string connection_profile = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setConnectionProfile($var)
    {
        GPBUtil::checkString($var, True);
        $this->connection_profile = $var;

        return $this;
    }

}

