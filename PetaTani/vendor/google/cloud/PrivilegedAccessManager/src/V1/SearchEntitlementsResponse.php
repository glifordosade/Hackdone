<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `SearchEntitlements` method.
 *
 * Generated from protobuf message <code>google.cloud.privilegedaccessmanager.v1.SearchEntitlementsResponse</code>
 */
class SearchEntitlementsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of entitlements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privilegedaccessmanager.v1.Entitlement entitlements = 1;</code>
     */
    private $entitlements;
    /**
     * A token identifying a page of results the server should return.
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
     *     @type array<\Google\Cloud\PrivilegedAccessManager\V1\Entitlement>|\Google\Protobuf\Internal\RepeatedField $entitlements
     *           The list of entitlements.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1\Privilegedaccessmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of entitlements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privilegedaccessmanager.v1.Entitlement entitlements = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntitlements()
    {
        return $this->entitlements;
    }

    /**
     * The list of entitlements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privilegedaccessmanager.v1.Entitlement entitlements = 1;</code>
     * @param array<\Google\Cloud\PrivilegedAccessManager\V1\Entitlement>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntitlements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PrivilegedAccessManager\V1\Entitlement::class);
        $this->entitlements = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
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
