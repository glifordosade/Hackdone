<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about how client should adjust the load to Bigtable.
 *
 * Generated from protobuf message <code>google.bigtable.v2.RateLimitInfo</code>
 */
class RateLimitInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Time that clients should wait before adjusting the target rate again.
     * If clients adjust rate too frequently, the impact of the previous
     * adjustment may not have been taken into account and may
     * over-throttle or under-throttle. If clients adjust rate too slowly, they
     * will not be responsive to load changes on server side, and may
     * over-throttle or under-throttle.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration period = 1;</code>
     */
    protected $period = null;
    /**
     * If it has been at least one `period` since the last load adjustment, the
     * client should multiply the current load by this value to get the new target
     * load. For example, if the current load is 100 and `factor` is 0.8, the new
     * target load should be 80. After adjusting, the client should ignore
     * `factor` until another `period` has passed.
     * The client can measure its load using any unit that's comparable over time
     * For example, QPS can be used as long as each request involves a similar
     * amount of work.
     *
     * Generated from protobuf field <code>double factor = 2;</code>
     */
    protected $factor = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $period
     *           Time that clients should wait before adjusting the target rate again.
     *           If clients adjust rate too frequently, the impact of the previous
     *           adjustment may not have been taken into account and may
     *           over-throttle or under-throttle. If clients adjust rate too slowly, they
     *           will not be responsive to load changes on server side, and may
     *           over-throttle or under-throttle.
     *     @type float $factor
     *           If it has been at least one `period` since the last load adjustment, the
     *           client should multiply the current load by this value to get the new target
     *           load. For example, if the current load is 100 and `factor` is 0.8, the new
     *           target load should be 80. After adjusting, the client should ignore
     *           `factor` until another `period` has passed.
     *           The client can measure its load using any unit that's comparable over time
     *           For example, QPS can be used as long as each request involves a similar
     *           amount of work.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * Time that clients should wait before adjusting the target rate again.
     * If clients adjust rate too frequently, the impact of the previous
     * adjustment may not have been taken into account and may
     * over-throttle or under-throttle. If clients adjust rate too slowly, they
     * will not be responsive to load changes on server side, and may
     * over-throttle or under-throttle.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration period = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPeriod()
    {
        return $this->period;
    }

    public function hasPeriod()
    {
        return isset($this->period);
    }

    public function clearPeriod()
    {
        unset($this->period);
    }

    /**
     * Time that clients should wait before adjusting the target rate again.
     * If clients adjust rate too frequently, the impact of the previous
     * adjustment may not have been taken into account and may
     * over-throttle or under-throttle. If clients adjust rate too slowly, they
     * will not be responsive to load changes on server side, and may
     * over-throttle or under-throttle.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration period = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->period = $var;

        return $this;
    }

    /**
     * If it has been at least one `period` since the last load adjustment, the
     * client should multiply the current load by this value to get the new target
     * load. For example, if the current load is 100 and `factor` is 0.8, the new
     * target load should be 80. After adjusting, the client should ignore
     * `factor` until another `period` has passed.
     * The client can measure its load using any unit that's comparable over time
     * For example, QPS can be used as long as each request involves a similar
     * amount of work.
     *
     * Generated from protobuf field <code>double factor = 2;</code>
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * If it has been at least one `period` since the last load adjustment, the
     * client should multiply the current load by this value to get the new target
     * load. For example, if the current load is 100 and `factor` is 0.8, the new
     * target load should be 80. After adjusting, the client should ignore
     * `factor` until another `period` has passed.
     * The client can measure its load using any unit that's comparable over time
     * For example, QPS can be used as long as each request involves a similar
     * amount of work.
     *
     * Generated from protobuf field <code>double factor = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setFactor($var)
    {
        GPBUtil::checkDouble($var);
        $this->factor = $var;

        return $this;
    }

}
