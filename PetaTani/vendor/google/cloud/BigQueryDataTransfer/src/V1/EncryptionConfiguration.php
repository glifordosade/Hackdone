<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/transfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the encryption configuration for a transfer.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.EncryptionConfiguration</code>
 */
class EncryptionConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the KMS key used for encrypting BigQuery data.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue kms_key_name = 1;</code>
     */
    protected $kms_key_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $kms_key_name
     *           The name of the KMS key used for encrypting BigQuery data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the KMS key used for encrypting BigQuery data.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue kms_key_name = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    public function hasKmsKeyName()
    {
        return isset($this->kms_key_name);
    }

    public function clearKmsKeyName()
    {
        unset($this->kms_key_name);
    }

    /**
     * Returns the unboxed value from <code>getKmsKeyName()</code>

     * The name of the KMS key used for encrypting BigQuery data.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue kms_key_name = 1;</code>
     * @return string|null
     */
    public function getKmsKeyNameUnwrapped()
    {
        return $this->readWrapperValue("kms_key_name");
    }

    /**
     * The name of the KMS key used for encrypting BigQuery data.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue kms_key_name = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the KMS key used for encrypting BigQuery data.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue kms_key_name = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setKmsKeyNameUnwrapped($var)
    {
        $this->writeWrapperValue("kms_key_name", $var);
        return $this;}

}
