<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/conversions/v1beta/conversionsources.proto

namespace Google\Shopping\Merchant\Conversions\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the GetConversionSource method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.conversions.v1beta.GetConversionSourceRequest</code>
 */
class GetConversionSourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the conversion source to be fetched.
     * Format: accounts/{account}/conversionsources/{conversion_source}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the conversion source to be fetched.
     *                     Format: accounts/{account}/conversionsources/{conversion_source}
     *                     Please see {@see ConversionSourcesServiceClient::conversionSourceName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Conversions\V1beta\GetConversionSourceRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the conversion source to be fetched.
     *           Format: accounts/{account}/conversionsources/{conversion_source}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Conversions\V1Beta\Conversionsources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the conversion source to be fetched.
     * Format: accounts/{account}/conversionsources/{conversion_source}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the conversion source to be fetched.
     * Format: accounts/{account}/conversionsources/{conversion_source}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
