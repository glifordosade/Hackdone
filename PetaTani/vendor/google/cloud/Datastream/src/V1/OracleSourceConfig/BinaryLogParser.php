<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1\OracleSourceConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration to use Binary Log Parser CDC technique.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.OracleSourceConfig.BinaryLogParser</code>
 */
class BinaryLogParser extends \Google\Protobuf\Internal\Message
{
    protected $log_file_access;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\OracleAsmLogFileAccess $oracle_asm_log_file_access
     *           Use Oracle ASM.
     *     @type \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\LogFileDirectories $log_file_directories
     *           Use Oracle directories.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Use Oracle ASM.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleSourceConfig.BinaryLogParser.OracleAsmLogFileAccess oracle_asm_log_file_access = 1;</code>
     * @return \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\OracleAsmLogFileAccess|null
     */
    public function getOracleAsmLogFileAccess()
    {
        return $this->readOneof(1);
    }

    public function hasOracleAsmLogFileAccess()
    {
        return $this->hasOneof(1);
    }

    /**
     * Use Oracle ASM.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleSourceConfig.BinaryLogParser.OracleAsmLogFileAccess oracle_asm_log_file_access = 1;</code>
     * @param \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\OracleAsmLogFileAccess $var
     * @return $this
     */
    public function setOracleAsmLogFileAccess($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\OracleAsmLogFileAccess::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Use Oracle directories.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleSourceConfig.BinaryLogParser.LogFileDirectories log_file_directories = 2;</code>
     * @return \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\LogFileDirectories|null
     */
    public function getLogFileDirectories()
    {
        return $this->readOneof(2);
    }

    public function hasLogFileDirectories()
    {
        return $this->hasOneof(2);
    }

    /**
     * Use Oracle directories.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleSourceConfig.BinaryLogParser.LogFileDirectories log_file_directories = 2;</code>
     * @param \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\LogFileDirectories $var
     * @return $this
     */
    public function setLogFileDirectories($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser\LogFileDirectories::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getLogFileAccess()
    {
        return $this->whichOneof("log_file_access");
    }

}

