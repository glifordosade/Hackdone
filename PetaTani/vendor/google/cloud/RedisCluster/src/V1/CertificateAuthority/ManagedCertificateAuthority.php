<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1\CertificateAuthority;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.CertificateAuthority.ManagedCertificateAuthority</code>
 */
class ManagedCertificateAuthority extends \Google\Protobuf\Internal\Message
{
    /**
     * The PEM encoded CA certificate chains for redis managed
     * server authentication
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.CertificateAuthority.ManagedCertificateAuthority.CertChain ca_certs = 1;</code>
     */
    private $ca_certs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Redis\Cluster\V1\CertificateAuthority\ManagedCertificateAuthority\CertChain>|\Google\Protobuf\Internal\RepeatedField $ca_certs
     *           The PEM encoded CA certificate chains for redis managed
     *           server authentication
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * The PEM encoded CA certificate chains for redis managed
     * server authentication
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.CertificateAuthority.ManagedCertificateAuthority.CertChain ca_certs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCaCerts()
    {
        return $this->ca_certs;
    }

    /**
     * The PEM encoded CA certificate chains for redis managed
     * server authentication
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.CertificateAuthority.ManagedCertificateAuthority.CertChain ca_certs = 1;</code>
     * @param array<\Google\Cloud\Redis\Cluster\V1\CertificateAuthority\ManagedCertificateAuthority\CertChain>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCaCerts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Redis\Cluster\V1\CertificateAuthority\ManagedCertificateAuthority\CertChain::class);
        $this->ca_certs = $arr;

        return $this;
    }

}

