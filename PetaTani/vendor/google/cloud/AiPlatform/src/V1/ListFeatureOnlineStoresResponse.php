<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store_admin_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [FeatureOnlineStoreAdminService.ListFeatureOnlineStores][google.cloud.aiplatform.v1.FeatureOnlineStoreAdminService.ListFeatureOnlineStores].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListFeatureOnlineStoresResponse</code>
 */
class ListFeatureOnlineStoresResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The FeatureOnlineStores matching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureOnlineStore feature_online_stores = 1;</code>
     */
    private $feature_online_stores;
    /**
     * A token, which can be sent as
     * [ListFeatureOnlineStoresRequest.page_token][google.cloud.aiplatform.v1.ListFeatureOnlineStoresRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\FeatureOnlineStore>|\Google\Protobuf\Internal\RepeatedField $feature_online_stores
     *           The FeatureOnlineStores matching the request.
     *     @type string $next_page_token
     *           A token, which can be sent as
     *           [ListFeatureOnlineStoresRequest.page_token][google.cloud.aiplatform.v1.ListFeatureOnlineStoresRequest.page_token]
     *           to retrieve the next page. If this field is omitted, there are no
     *           subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStoreAdminService::initOnce();
        parent::__construct($data);
    }

    /**
     * The FeatureOnlineStores matching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureOnlineStore feature_online_stores = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatureOnlineStores()
    {
        return $this->feature_online_stores;
    }

    /**
     * The FeatureOnlineStores matching the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureOnlineStore feature_online_stores = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\FeatureOnlineStore>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatureOnlineStores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\FeatureOnlineStore::class);
        $this->feature_online_stores = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as
     * [ListFeatureOnlineStoresRequest.page_token][google.cloud.aiplatform.v1.ListFeatureOnlineStoresRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as
     * [ListFeatureOnlineStoresRequest.page_token][google.cloud.aiplatform.v1.ListFeatureOnlineStoresRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
