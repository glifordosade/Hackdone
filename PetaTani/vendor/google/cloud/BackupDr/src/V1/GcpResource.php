<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Minimum details to identify a Google Cloud resource
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.GcpResource</code>
 */
class GcpResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the Google Cloud resource.
     *
     * Generated from protobuf field <code>string gcp_resourcename = 1;</code>
     */
    protected $gcp_resourcename = '';
    /**
     * Location of the resource: <region>/<zone>/"global"/"unspecified".
     *
     * Generated from protobuf field <code>string location = 2;</code>
     */
    protected $location = '';
    /**
     * Type of the resource. Use the Unified Resource Type,
     * eg. compute.googleapis.com/Instance.
     *
     * Generated from protobuf field <code>string type = 3;</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcp_resourcename
     *           Name of the Google Cloud resource.
     *     @type string $location
     *           Location of the resource: <region>/<zone>/"global"/"unspecified".
     *     @type string $type
     *           Type of the resource. Use the Unified Resource Type,
     *           eg. compute.googleapis.com/Instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the Google Cloud resource.
     *
     * Generated from protobuf field <code>string gcp_resourcename = 1;</code>
     * @return string
     */
    public function getGcpResourcename()
    {
        return $this->gcp_resourcename;
    }

    /**
     * Name of the Google Cloud resource.
     *
     * Generated from protobuf field <code>string gcp_resourcename = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcpResourcename($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcp_resourcename = $var;

        return $this;
    }

    /**
     * Location of the resource: <region>/<zone>/"global"/"unspecified".
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Location of the resource: <region>/<zone>/"global"/"unspecified".
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Type of the resource. Use the Unified Resource Type,
     * eg. compute.googleapis.com/Instance.
     *
     * Generated from protobuf field <code>string type = 3;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the resource. Use the Unified Resource Type,
     * eg. compute.googleapis.com/Instance.
     *
     * Generated from protobuf field <code>string type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}
