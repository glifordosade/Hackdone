<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the Billable SKU information.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.BillableSku</code>
 */
class BillableSku extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of Billable SKU. Format:
     * billableSkus/{sku}.
     * Example:
     * billableSkus/6E1B-6634-470F".
     *
     * Generated from protobuf field <code>string sku = 1;</code>
     */
    protected $sku = '';
    /**
     * Unique human readable name for the SKU.
     *
     * Generated from protobuf field <code>string sku_display_name = 2;</code>
     */
    protected $sku_display_name = '';
    /**
     * Resource name of Service which contains Repricing SKU. Format:
     * services/{service}.
     * Example:
     * "services/B7D9-FDCB-15D8".
     *
     * Generated from protobuf field <code>string service = 3;</code>
     */
    protected $service = '';
    /**
     * Unique human readable name for the Service.
     *
     * Generated from protobuf field <code>string service_display_name = 4;</code>
     */
    protected $service_display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sku
     *           Resource name of Billable SKU. Format:
     *           billableSkus/{sku}.
     *           Example:
     *           billableSkus/6E1B-6634-470F".
     *     @type string $sku_display_name
     *           Unique human readable name for the SKU.
     *     @type string $service
     *           Resource name of Service which contains Repricing SKU. Format:
     *           services/{service}.
     *           Example:
     *           "services/B7D9-FDCB-15D8".
     *     @type string $service_display_name
     *           Unique human readable name for the Service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of Billable SKU. Format:
     * billableSkus/{sku}.
     * Example:
     * billableSkus/6E1B-6634-470F".
     *
     * Generated from protobuf field <code>string sku = 1;</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Resource name of Billable SKU. Format:
     * billableSkus/{sku}.
     * Example:
     * billableSkus/6E1B-6634-470F".
     *
     * Generated from protobuf field <code>string sku = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

    /**
     * Unique human readable name for the SKU.
     *
     * Generated from protobuf field <code>string sku_display_name = 2;</code>
     * @return string
     */
    public function getSkuDisplayName()
    {
        return $this->sku_display_name;
    }

    /**
     * Unique human readable name for the SKU.
     *
     * Generated from protobuf field <code>string sku_display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSkuDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku_display_name = $var;

        return $this;
    }

    /**
     * Resource name of Service which contains Repricing SKU. Format:
     * services/{service}.
     * Example:
     * "services/B7D9-FDCB-15D8".
     *
     * Generated from protobuf field <code>string service = 3;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Resource name of Service which contains Repricing SKU. Format:
     * services/{service}.
     * Example:
     * "services/B7D9-FDCB-15D8".
     *
     * Generated from protobuf field <code>string service = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Unique human readable name for the Service.
     *
     * Generated from protobuf field <code>string service_display_name = 4;</code>
     * @return string
     */
    public function getServiceDisplayName()
    {
        return $this->service_display_name;
    }

    /**
     * Unique human readable name for the Service.
     *
     * Generated from protobuf field <code>string service_display_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_display_name = $var;

        return $this;
    }

}
