<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memorystore/v1beta/memorystore.proto

namespace Google\Cloud\Memorystore\V1beta\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information of each PSC connection.
 *
 * Generated from protobuf message <code>google.cloud.memorystore.v1beta.Instance.ConnectionDetail</code>
 */
class ConnectionDetail extends \Google\Protobuf\Internal\Message
{
    protected $connection;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Memorystore\V1beta\PscAutoConnection $psc_auto_connection
     *           Detailed information of a PSC connection that is created through
     *           service connectivity automation.
     *     @type \Google\Cloud\Memorystore\V1beta\PscConnection $psc_connection
     *           Detailed information of a PSC connection that is created by the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memorystore\V1Beta\Memorystore::initOnce();
        parent::__construct($data);
    }

    /**
     * Detailed information of a PSC connection that is created through
     * service connectivity automation.
     *
     * Generated from protobuf field <code>.google.cloud.memorystore.v1beta.PscAutoConnection psc_auto_connection = 1;</code>
     * @return \Google\Cloud\Memorystore\V1beta\PscAutoConnection|null
     */
    public function getPscAutoConnection()
    {
        return $this->readOneof(1);
    }

    public function hasPscAutoConnection()
    {
        return $this->hasOneof(1);
    }

    /**
     * Detailed information of a PSC connection that is created through
     * service connectivity automation.
     *
     * Generated from protobuf field <code>.google.cloud.memorystore.v1beta.PscAutoConnection psc_auto_connection = 1;</code>
     * @param \Google\Cloud\Memorystore\V1beta\PscAutoConnection $var
     * @return $this
     */
    public function setPscAutoConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Memorystore\V1beta\PscAutoConnection::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Detailed information of a PSC connection that is created by the user.
     *
     * Generated from protobuf field <code>.google.cloud.memorystore.v1beta.PscConnection psc_connection = 2;</code>
     * @return \Google\Cloud\Memorystore\V1beta\PscConnection|null
     */
    public function getPscConnection()
    {
        return $this->readOneof(2);
    }

    public function hasPscConnection()
    {
        return $this->hasOneof(2);
    }

    /**
     * Detailed information of a PSC connection that is created by the user.
     *
     * Generated from protobuf field <code>.google.cloud.memorystore.v1beta.PscConnection psc_connection = 2;</code>
     * @param \Google\Cloud\Memorystore\V1beta\PscConnection $var
     * @return $this
     */
    public function setPscConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Memorystore\V1beta\PscConnection::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConnection()
    {
        return $this->whichOneof("connection");
    }

}

