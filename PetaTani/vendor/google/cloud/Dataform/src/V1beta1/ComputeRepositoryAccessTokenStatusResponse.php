<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ComputeRepositoryAccessTokenStatus` response message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.ComputeRepositoryAccessTokenStatusResponse</code>
 */
class ComputeRepositoryAccessTokenStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates the status of the Git access token.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.ComputeRepositoryAccessTokenStatusResponse.TokenStatus token_status = 1;</code>
     */
    private $token_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $token_status
     *           Indicates the status of the Git access token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates the status of the Git access token.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.ComputeRepositoryAccessTokenStatusResponse.TokenStatus token_status = 1;</code>
     * @return int
     */
    public function getTokenStatus()
    {
        return $this->token_status;
    }

    /**
     * Indicates the status of the Git access token.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.ComputeRepositoryAccessTokenStatusResponse.TokenStatus token_status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTokenStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataform\V1beta1\ComputeRepositoryAccessTokenStatusResponse\TokenStatus::class);
        $this->token_status = $var;

        return $this;
    }

}
