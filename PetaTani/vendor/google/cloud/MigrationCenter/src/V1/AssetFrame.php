<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains data reported from an inventory source on an asset.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.AssetFrame</code>
 */
class AssetFrame extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the data was reported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp report_time = 10;</code>
     */
    protected $report_time = null;
    /**
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     */
    private $labels;
    /**
     * Generic asset attributes.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 12;</code>
     */
    private $attributes;
    /**
     * Asset performance data samples.
     * Samples that are from more than 40 days ago or after tomorrow are ignored.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PerformanceSample performance_samples = 13;</code>
     */
    private $performance_samples;
    /**
     * Optional. Trace token is optionally provided to assist with debugging and
     * traceability.
     *
     * Generated from protobuf field <code>string trace_token = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $trace_token = '';
    protected $FrameData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\MigrationCenter\V1\MachineDetails $machine_details
     *           Asset information specific for virtual machines.
     *     @type \Google\Protobuf\Timestamp $report_time
     *           The time the data was reported.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels as key value pairs.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Generic asset attributes.
     *     @type array<\Google\Cloud\MigrationCenter\V1\PerformanceSample>|\Google\Protobuf\Internal\RepeatedField $performance_samples
     *           Asset performance data samples.
     *           Samples that are from more than 40 days ago or after tomorrow are ignored.
     *     @type string $trace_token
     *           Optional. Trace token is optionally provided to assist with debugging and
     *           traceability.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Asset information specific for virtual machines.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDetails machine_details = 1;</code>
     * @return \Google\Cloud\MigrationCenter\V1\MachineDetails|null
     */
    public function getMachineDetails()
    {
        return $this->readOneof(1);
    }

    public function hasMachineDetails()
    {
        return $this->hasOneof(1);
    }

    /**
     * Asset information specific for virtual machines.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.MachineDetails machine_details = 1;</code>
     * @param \Google\Cloud\MigrationCenter\V1\MachineDetails $var
     * @return $this
     */
    public function setMachineDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\MachineDetails::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The time the data was reported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp report_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReportTime()
    {
        return $this->report_time;
    }

    public function hasReportTime()
    {
        return isset($this->report_time);
    }

    public function clearReportTime()
    {
        unset($this->report_time);
    }

    /**
     * The time the data was reported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp report_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReportTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->report_time = $var;

        return $this;
    }

    /**
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Generic asset attributes.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Generic asset attributes.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Asset performance data samples.
     * Samples that are from more than 40 days ago or after tomorrow are ignored.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PerformanceSample performance_samples = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPerformanceSamples()
    {
        return $this->performance_samples;
    }

    /**
     * Asset performance data samples.
     * Samples that are from more than 40 days ago or after tomorrow are ignored.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.PerformanceSample performance_samples = 13;</code>
     * @param array<\Google\Cloud\MigrationCenter\V1\PerformanceSample>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPerformanceSamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\MigrationCenter\V1\PerformanceSample::class);
        $this->performance_samples = $arr;

        return $this;
    }

    /**
     * Optional. Trace token is optionally provided to assist with debugging and
     * traceability.
     *
     * Generated from protobuf field <code>string trace_token = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTraceToken()
    {
        return $this->trace_token;
    }

    /**
     * Optional. Trace token is optionally provided to assist with debugging and
     * traceability.
     *
     * Generated from protobuf field <code>string trace_token = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTraceToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_token = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrameData()
    {
        return $this->whichOneof("FrameData");
    }

}
