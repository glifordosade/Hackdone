<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for rouge score metric - calculates the recall of n-grams in prediction
 * as compared to reference - returns a score ranging between 0 and 1.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RougeSpec</code>
 */
class RougeSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Supported rouge types are rougen[1-9], rougeL, and rougeLsum.
     *
     * Generated from protobuf field <code>string rouge_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $rouge_type = '';
    /**
     * Optional. Whether to use stemmer to compute rouge score.
     *
     * Generated from protobuf field <code>bool use_stemmer = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $use_stemmer = false;
    /**
     * Optional. Whether to split summaries while using rougeLsum.
     *
     * Generated from protobuf field <code>bool split_summaries = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $split_summaries = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rouge_type
     *           Optional. Supported rouge types are rougen[1-9], rougeL, and rougeLsum.
     *     @type bool $use_stemmer
     *           Optional. Whether to use stemmer to compute rouge score.
     *     @type bool $split_summaries
     *           Optional. Whether to split summaries while using rougeLsum.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Supported rouge types are rougen[1-9], rougeL, and rougeLsum.
     *
     * Generated from protobuf field <code>string rouge_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRougeType()
    {
        return $this->rouge_type;
    }

    /**
     * Optional. Supported rouge types are rougen[1-9], rougeL, and rougeLsum.
     *
     * Generated from protobuf field <code>string rouge_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRougeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->rouge_type = $var;

        return $this;
    }

    /**
     * Optional. Whether to use stemmer to compute rouge score.
     *
     * Generated from protobuf field <code>bool use_stemmer = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getUseStemmer()
    {
        return $this->use_stemmer;
    }

    /**
     * Optional. Whether to use stemmer to compute rouge score.
     *
     * Generated from protobuf field <code>bool use_stemmer = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setUseStemmer($var)
    {
        GPBUtil::checkBool($var);
        $this->use_stemmer = $var;

        return $this;
    }

    /**
     * Optional. Whether to split summaries while using rougeLsum.
     *
     * Generated from protobuf field <code>bool split_summaries = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSplitSummaries()
    {
        return $this->split_summaries;
    }

    /**
     * Optional. Whether to split summaries while using rougeLsum.
     *
     * Generated from protobuf field <code>bool split_summaries = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSplitSummaries($var)
    {
        GPBUtil::checkBool($var);
        $this->split_summaries = $var;

        return $this;
    }

}
