<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchRequest\ConversationalSearchSpec\UserAnswer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This field specifies the selected answers during the conversational
 * search.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SearchRequest.ConversationalSearchSpec.UserAnswer.SelectedAnswer</code>
 */
class SelectedAnswer extends \Google\Protobuf\Internal\Message
{
    /**
     * This field is deprecated and should not be set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.ProductAttributeValue product_attribute_values = 1 [deprecated = true];</code>
     * @deprecated
     */
    private $product_attribute_values;
    /**
     * This field specifies the selected answer which is a attribute
     * key-value.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductAttributeValue product_attribute_value = 2;</code>
     */
    protected $product_attribute_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Retail\V2\ProductAttributeValue>|\Google\Protobuf\Internal\RepeatedField $product_attribute_values
     *           This field is deprecated and should not be set.
     *     @type \Google\Cloud\Retail\V2\ProductAttributeValue $product_attribute_value
     *           This field specifies the selected answer which is a attribute
     *           key-value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * This field is deprecated and should not be set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.ProductAttributeValue product_attribute_values = 1 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getProductAttributeValues()
    {
        @trigger_error('product_attribute_values is deprecated.', E_USER_DEPRECATED);
        return $this->product_attribute_values;
    }

    /**
     * This field is deprecated and should not be set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.ProductAttributeValue product_attribute_values = 1 [deprecated = true];</code>
     * @param array<\Google\Cloud\Retail\V2\ProductAttributeValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setProductAttributeValues($var)
    {
        @trigger_error('product_attribute_values is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\ProductAttributeValue::class);
        $this->product_attribute_values = $arr;

        return $this;
    }

    /**
     * This field specifies the selected answer which is a attribute
     * key-value.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductAttributeValue product_attribute_value = 2;</code>
     * @return \Google\Cloud\Retail\V2\ProductAttributeValue|null
     */
    public function getProductAttributeValue()
    {
        return $this->product_attribute_value;
    }

    public function hasProductAttributeValue()
    {
        return isset($this->product_attribute_value);
    }

    public function clearProductAttributeValue()
    {
        unset($this->product_attribute_value);
    }

    /**
     * This field specifies the selected answer which is a attribute
     * key-value.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductAttributeValue product_attribute_value = 2;</code>
     * @param \Google\Cloud\Retail\V2\ProductAttributeValue $var
     * @return $this
     */
    public function setProductAttributeValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\ProductAttributeValue::class);
        $this->product_attribute_value = $var;

        return $this;
    }

}

