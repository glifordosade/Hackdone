<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_database.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Oracle APEX Application Development.
 * https://docs.oracle.com/en-us/iaas/api/#/en/database/20160918/datatypes/AutonomousDatabaseApex
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.AutonomousDatabaseApex</code>
 */
class AutonomousDatabaseApex extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Oracle APEX Application Development version.
     *
     * Generated from protobuf field <code>string apex_version = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $apex_version = '';
    /**
     * Output only. The Oracle REST Data Services (ORDS) version.
     *
     * Generated from protobuf field <code>string ords_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ords_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $apex_version
     *           Output only. The Oracle APEX Application Development version.
     *     @type string $ords_version
     *           Output only. The Oracle REST Data Services (ORDS) version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\AutonomousDatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The Oracle APEX Application Development version.
     *
     * Generated from protobuf field <code>string apex_version = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getApexVersion()
    {
        return $this->apex_version;
    }

    /**
     * Output only. The Oracle APEX Application Development version.
     *
     * Generated from protobuf field <code>string apex_version = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setApexVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->apex_version = $var;

        return $this;
    }

    /**
     * Output only. The Oracle REST Data Services (ORDS) version.
     *
     * Generated from protobuf field <code>string ords_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOrdsVersion()
    {
        return $this->ords_version;
    }

    /**
     * Output only. The Oracle REST Data Services (ORDS) version.
     *
     * Generated from protobuf field <code>string ords_version = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOrdsVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->ords_version = $var;

        return $this;
    }

}
