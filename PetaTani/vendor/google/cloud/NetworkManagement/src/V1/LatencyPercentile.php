<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/connectivity_test.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Latency percentile rank and value.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.LatencyPercentile</code>
 */
class LatencyPercentile extends \Google\Protobuf\Internal\Message
{
    /**
     * Percentage of samples this data point applies to.
     *
     * Generated from protobuf field <code>int32 percent = 1;</code>
     */
    protected $percent = 0;
    /**
     * percent-th percentile of latency observed, in microseconds.
     * Fraction of percent/100 of samples have latency lower or
     * equal to the value of this field.
     *
     * Generated from protobuf field <code>int64 latency_micros = 2;</code>
     */
    protected $latency_micros = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $percent
     *           Percentage of samples this data point applies to.
     *     @type int|string $latency_micros
     *           percent-th percentile of latency observed, in microseconds.
     *           Fraction of percent/100 of samples have latency lower or
     *           equal to the value of this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\ConnectivityTest::initOnce();
        parent::__construct($data);
    }

    /**
     * Percentage of samples this data point applies to.
     *
     * Generated from protobuf field <code>int32 percent = 1;</code>
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Percentage of samples this data point applies to.
     *
     * Generated from protobuf field <code>int32 percent = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->percent = $var;

        return $this;
    }

    /**
     * percent-th percentile of latency observed, in microseconds.
     * Fraction of percent/100 of samples have latency lower or
     * equal to the value of this field.
     *
     * Generated from protobuf field <code>int64 latency_micros = 2;</code>
     * @return int|string
     */
    public function getLatencyMicros()
    {
        return $this->latency_micros;
    }

    /**
     * percent-th percentile of latency observed, in microseconds.
     * Fraction of percent/100 of samples have latency lower or
     * equal to the value of this field.
     *
     * Generated from protobuf field <code>int64 latency_micros = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLatencyMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->latency_micros = $var;

        return $this;
    }

}
