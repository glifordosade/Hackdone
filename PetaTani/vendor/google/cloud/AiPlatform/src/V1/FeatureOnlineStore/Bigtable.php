<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store.proto

namespace Google\Cloud\AIPlatform\V1\FeatureOnlineStore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureOnlineStore.Bigtable</code>
 */
class Bigtable extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Autoscaling config applied to Bigtable Instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.Bigtable.AutoScaling auto_scaling = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $auto_scaling = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable\AutoScaling $auto_scaling
     *           Required. Autoscaling config applied to Bigtable Instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Autoscaling config applied to Bigtable Instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.Bigtable.AutoScaling auto_scaling = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable\AutoScaling|null
     */
    public function getAutoScaling()
    {
        return $this->auto_scaling;
    }

    public function hasAutoScaling()
    {
        return isset($this->auto_scaling);
    }

    public function clearAutoScaling()
    {
        unset($this->auto_scaling);
    }

    /**
     * Required. Autoscaling config applied to Bigtable Instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.Bigtable.AutoScaling auto_scaling = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable\AutoScaling $var
     * @return $this
     */
    public function setAutoScaling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable\AutoScaling::class);
        $this->auto_scaling = $var;

        return $this;
    }

}

