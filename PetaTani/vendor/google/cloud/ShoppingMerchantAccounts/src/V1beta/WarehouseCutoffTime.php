<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/shippingsettings.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The latest time of day that an order can be accepted and begin processing.
 * Later orders will be processed in the next day. The time is based on the
 * warehouse postal code.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.WarehouseCutoffTime</code>
 */
class WarehouseCutoffTime extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Hour of the cutoff time until which an order has to be placed to
     * be processed in the same day by the warehouse. Hour is based on the
     * timezone of warehouse.
     *
     * Generated from protobuf field <code>optional int32 hour = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $hour = null;
    /**
     * Required. Minute of the cutoff time until which an order has to be placed
     * to be processed in the same day by the warehouse. Minute is based on the
     * timezone of warehouse.
     *
     * Generated from protobuf field <code>optional int32 minute = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $minute = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hour
     *           Required. Hour of the cutoff time until which an order has to be placed to
     *           be processed in the same day by the warehouse. Hour is based on the
     *           timezone of warehouse.
     *     @type int $minute
     *           Required. Minute of the cutoff time until which an order has to be placed
     *           to be processed in the same day by the warehouse. Minute is based on the
     *           timezone of warehouse.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Shippingsettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Hour of the cutoff time until which an order has to be placed to
     * be processed in the same day by the warehouse. Hour is based on the
     * timezone of warehouse.
     *
     * Generated from protobuf field <code>optional int32 hour = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getHour()
    {
        return isset($this->hour) ? $this->hour : 0;
    }

    public function hasHour()
    {
        return isset($this->hour);
    }

    public function clearHour()
    {
        unset($this->hour);
    }

    /**
     * Required. Hour of the cutoff time until which an order has to be placed to
     * be processed in the same day by the warehouse. Hour is based on the
     * timezone of warehouse.
     *
     * Generated from protobuf field <code>optional int32 hour = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setHour($var)
    {
        GPBUtil::checkInt32($var);
        $this->hour = $var;

        return $this;
    }

    /**
     * Required. Minute of the cutoff time until which an order has to be placed
     * to be processed in the same day by the warehouse. Minute is based on the
     * timezone of warehouse.
     *
     * Generated from protobuf field <code>optional int32 minute = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMinute()
    {
        return isset($this->minute) ? $this->minute : 0;
    }

    public function hasMinute()
    {
        return isset($this->minute);
    }

    public function clearMinute()
    {
        unset($this->minute);
    }

    /**
     * Required. Minute of the cutoff time until which an order has to be placed
     * to be processed in the same day by the warehouse. Minute is based on the
     * timezone of warehouse.
     *
     * Generated from protobuf field <code>optional int32 minute = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMinute($var)
    {
        GPBUtil::checkInt32($var);
        $this->minute = $var;

        return $this;
    }

}
