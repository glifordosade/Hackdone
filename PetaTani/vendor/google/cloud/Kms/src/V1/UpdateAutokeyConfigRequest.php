<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/autokey_admin.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateAutokeyConfig][google.cloud.kms.v1.AutokeyAdmin.UpdateAutokeyConfig].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.UpdateAutokeyConfigRequest</code>
 */
class UpdateAutokeyConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] with values to
     * update.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.AutokeyConfig autokey_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $autokey_config = null;
    /**
     * Required. Masks which fields of the
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] to update, e.g.
     * `keyProject`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Kms\V1\AutokeyConfig $autokeyConfig Required. [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] with values to
     *                                                          update.
     * @param \Google\Protobuf\FieldMask         $updateMask    Required. Masks which fields of the
     *                                                          [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] to update, e.g.
     *                                                          `keyProject`.
     *
     * @return \Google\Cloud\Kms\V1\UpdateAutokeyConfigRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Kms\V1\AutokeyConfig $autokeyConfig, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAutokeyConfig($autokeyConfig)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Kms\V1\AutokeyConfig $autokey_config
     *           Required. [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] with values to
     *           update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Masks which fields of the
     *           [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] to update, e.g.
     *           `keyProject`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\AutokeyAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] with values to
     * update.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.AutokeyConfig autokey_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Kms\V1\AutokeyConfig|null
     */
    public function getAutokeyConfig()
    {
        return $this->autokey_config;
    }

    public function hasAutokeyConfig()
    {
        return isset($this->autokey_config);
    }

    public function clearAutokeyConfig()
    {
        unset($this->autokey_config);
    }

    /**
     * Required. [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] with values to
     * update.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.AutokeyConfig autokey_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Kms\V1\AutokeyConfig $var
     * @return $this
     */
    public function setAutokeyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\AutokeyConfig::class);
        $this->autokey_config = $var;

        return $this;
    }

    /**
     * Required. Masks which fields of the
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] to update, e.g.
     * `keyProject`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Masks which fields of the
     * [AutokeyConfig][google.cloud.kms.v1.AutokeyConfig] to update, e.g.
     * `keyProject`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
