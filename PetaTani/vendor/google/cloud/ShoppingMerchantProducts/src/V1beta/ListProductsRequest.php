<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/products/v1beta/products.proto

namespace Google\Shopping\Merchant\Products\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the ListProducts method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.products.v1beta.ListProductsRequest</code>
 */
class ListProductsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account to list processed products for.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of products to return. The service may return fewer than
     * this value.
     * The maximum value is 250; values above 250 will be coerced to 250.
     * If unspecified, the maximum number of products will be returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous `ListProducts` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListProducts` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The account to list processed products for.
     *                       Format: accounts/{account}
     *                       Please see {@see ProductsServiceClient::accountName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Products\V1beta\ListProductsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account to list processed products for.
     *           Format: accounts/{account}
     *     @type int $page_size
     *           The maximum number of products to return. The service may return fewer than
     *           this value.
     *           The maximum value is 250; values above 250 will be coerced to 250.
     *           If unspecified, the maximum number of products will be returned.
     *     @type string $page_token
     *           A page token, received from a previous `ListProducts` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListProducts` must
     *           match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Products\V1Beta\Products::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account to list processed products for.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account to list processed products for.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of products to return. The service may return fewer than
     * this value.
     * The maximum value is 250; values above 250 will be coerced to 250.
     * If unspecified, the maximum number of products will be returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of products to return. The service may return fewer than
     * this value.
     * The maximum value is 250; values above 250 will be coerced to 250.
     * If unspecified, the maximum number of products will be returned.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListProducts` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListProducts` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListProducts` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListProducts` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
