<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/image.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataset metadata that is specific to image classification.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ImageClassificationDatasetMetadata</code>
 */
class ImageClassificationDatasetMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Type of the classification problem.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ClassificationType classification_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $classification_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $classification_type
     *           Required. Type of the classification problem.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Type of the classification problem.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ClassificationType classification_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getClassificationType()
    {
        return $this->classification_type;
    }

    /**
     * Required. Type of the classification problem.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ClassificationType classification_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setClassificationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AutoMl\V1\ClassificationType::class);
        $this->classification_type = $var;

        return $this;
    }

}
