<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/job.proto

namespace Google\Cloud\Batch\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LogsPolicy describes if and how a job's logs are preserved. Logs include
 * information that is automatically written by the Batch service agent and any
 * information that you configured the job's runnables to write to the `stdout`
 * or `stderr` streams.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.LogsPolicy</code>
 */
class LogsPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * If and where logs should be saved.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy.Destination destination = 1;</code>
     */
    protected $destination = 0;
    /**
     * When `destination` is set to `PATH`, you must set this field to the path
     * where you want logs to be saved. This path can point to a local directory
     * on the VM or (if congifured) a directory under the mount path of any
     * Cloud Storage bucket, network file system (NFS), or writable persistent
     * disk that is mounted to the job. For example, if the job has a bucket with
     * `mountPath` set to `/mnt/disks/my-bucket`, you can write logs to the
     * root directory of the `remotePath` of that bucket by setting this field to
     * `/mnt/disks/my-bucket/`.
     *
     * Generated from protobuf field <code>string logs_path = 2;</code>
     */
    protected $logs_path = '';
    /**
     * Optional. When `destination` is set to `CLOUD_LOGGING`, you can optionally
     * set this field to configure additional settings for Cloud Logging.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy.CloudLoggingOption cloud_logging_option = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cloud_logging_option = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $destination
     *           If and where logs should be saved.
     *     @type string $logs_path
     *           When `destination` is set to `PATH`, you must set this field to the path
     *           where you want logs to be saved. This path can point to a local directory
     *           on the VM or (if congifured) a directory under the mount path of any
     *           Cloud Storage bucket, network file system (NFS), or writable persistent
     *           disk that is mounted to the job. For example, if the job has a bucket with
     *           `mountPath` set to `/mnt/disks/my-bucket`, you can write logs to the
     *           root directory of the `remotePath` of that bucket by setting this field to
     *           `/mnt/disks/my-bucket/`.
     *     @type \Google\Cloud\Batch\V1\LogsPolicy\CloudLoggingOption $cloud_logging_option
     *           Optional. When `destination` is set to `CLOUD_LOGGING`, you can optionally
     *           set this field to configure additional settings for Cloud Logging.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * If and where logs should be saved.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy.Destination destination = 1;</code>
     * @return int
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * If and where logs should be saved.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy.Destination destination = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Batch\V1\LogsPolicy\Destination::class);
        $this->destination = $var;

        return $this;
    }

    /**
     * When `destination` is set to `PATH`, you must set this field to the path
     * where you want logs to be saved. This path can point to a local directory
     * on the VM or (if congifured) a directory under the mount path of any
     * Cloud Storage bucket, network file system (NFS), or writable persistent
     * disk that is mounted to the job. For example, if the job has a bucket with
     * `mountPath` set to `/mnt/disks/my-bucket`, you can write logs to the
     * root directory of the `remotePath` of that bucket by setting this field to
     * `/mnt/disks/my-bucket/`.
     *
     * Generated from protobuf field <code>string logs_path = 2;</code>
     * @return string
     */
    public function getLogsPath()
    {
        return $this->logs_path;
    }

    /**
     * When `destination` is set to `PATH`, you must set this field to the path
     * where you want logs to be saved. This path can point to a local directory
     * on the VM or (if congifured) a directory under the mount path of any
     * Cloud Storage bucket, network file system (NFS), or writable persistent
     * disk that is mounted to the job. For example, if the job has a bucket with
     * `mountPath` set to `/mnt/disks/my-bucket`, you can write logs to the
     * root directory of the `remotePath` of that bucket by setting this field to
     * `/mnt/disks/my-bucket/`.
     *
     * Generated from protobuf field <code>string logs_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLogsPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->logs_path = $var;

        return $this;
    }

    /**
     * Optional. When `destination` is set to `CLOUD_LOGGING`, you can optionally
     * set this field to configure additional settings for Cloud Logging.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy.CloudLoggingOption cloud_logging_option = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Batch\V1\LogsPolicy\CloudLoggingOption|null
     */
    public function getCloudLoggingOption()
    {
        return $this->cloud_logging_option;
    }

    public function hasCloudLoggingOption()
    {
        return isset($this->cloud_logging_option);
    }

    public function clearCloudLoggingOption()
    {
        unset($this->cloud_logging_option);
    }

    /**
     * Optional. When `destination` is set to `CLOUD_LOGGING`, you can optionally
     * set this field to configure additional settings for Cloud Logging.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.LogsPolicy.CloudLoggingOption cloud_logging_option = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Batch\V1\LogsPolicy\CloudLoggingOption $var
     * @return $this
     */
    public function setCloudLoggingOption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\LogsPolicy\CloudLoggingOption::class);
        $this->cloud_logging_option = $var;

        return $this;
    }

}
