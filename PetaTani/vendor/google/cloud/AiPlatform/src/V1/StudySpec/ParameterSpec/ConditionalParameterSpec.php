<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a parameter spec with condition from its parent parameter.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec</code>
 */
class ConditionalParameterSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The spec for a conditional parameter.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec parameter_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parameter_spec = null;
    protected $parent_value_condition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\DiscreteValueCondition $parent_discrete_values
     *           The spec for matching values from a parent parameter of
     *           `DISCRETE` type.
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\IntValueCondition $parent_int_values
     *           The spec for matching values from a parent parameter of `INTEGER`
     *           type.
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\CategoricalValueCondition $parent_categorical_values
     *           The spec for matching values from a parent parameter of
     *           `CATEGORICAL` type.
     *     @type \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec $parameter_spec
     *           Required. The spec for a conditional parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * The spec for matching values from a parent parameter of
     * `DISCRETE` type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec.DiscreteValueCondition parent_discrete_values = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\DiscreteValueCondition|null
     */
    public function getParentDiscreteValues()
    {
        return $this->readOneof(2);
    }

    public function hasParentDiscreteValues()
    {
        return $this->hasOneof(2);
    }

    /**
     * The spec for matching values from a parent parameter of
     * `DISCRETE` type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec.DiscreteValueCondition parent_discrete_values = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\DiscreteValueCondition $var
     * @return $this
     */
    public function setParentDiscreteValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\DiscreteValueCondition::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The spec for matching values from a parent parameter of `INTEGER`
     * type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec.IntValueCondition parent_int_values = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\IntValueCondition|null
     */
    public function getParentIntValues()
    {
        return $this->readOneof(3);
    }

    public function hasParentIntValues()
    {
        return $this->hasOneof(3);
    }

    /**
     * The spec for matching values from a parent parameter of `INTEGER`
     * type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec.IntValueCondition parent_int_values = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\IntValueCondition $var
     * @return $this
     */
    public function setParentIntValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\IntValueCondition::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The spec for matching values from a parent parameter of
     * `CATEGORICAL` type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec.CategoricalValueCondition parent_categorical_values = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\CategoricalValueCondition|null
     */
    public function getParentCategoricalValues()
    {
        return $this->readOneof(4);
    }

    public function hasParentCategoricalValues()
    {
        return $this->hasOneof(4);
    }

    /**
     * The spec for matching values from a parent parameter of
     * `CATEGORICAL` type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec.ConditionalParameterSpec.CategoricalValueCondition parent_categorical_values = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\CategoricalValueCondition $var
     * @return $this
     */
    public function setParentCategoricalValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec\ConditionalParameterSpec\CategoricalValueCondition::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Required. The spec for a conditional parameter.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec parameter_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec|null
     */
    public function getParameterSpec()
    {
        return $this->parameter_spec;
    }

    public function hasParameterSpec()
    {
        return isset($this->parameter_spec);
    }

    public function clearParameterSpec()
    {
        unset($this->parameter_spec);
    }

    /**
     * Required. The spec for a conditional parameter.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.ParameterSpec parameter_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec $var
     * @return $this
     */
    public function setParameterSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec::class);
        $this->parameter_spec = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentValueCondition()
    {
        return $this->whichOneof("parent_value_condition");
    }

}

