<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/control_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for ListControls method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ListControlsResponse</code>
 */
class ListControlsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All the Controls for a given data store.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Control controls = 1;</code>
     */
    private $controls;
    /**
     * Pagination token, if not returned indicates the last page.
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
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Control>|\Google\Protobuf\Internal\RepeatedField $controls
     *           All the Controls for a given data store.
     *     @type string $next_page_token
     *           Pagination token, if not returned indicates the last page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ControlService::initOnce();
        parent::__construct($data);
    }

    /**
     * All the Controls for a given data store.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Control controls = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getControls()
    {
        return $this->controls;
    }

    /**
     * All the Controls for a given data store.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Control controls = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Control>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setControls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Control::class);
        $this->controls = $arr;

        return $this;
    }

    /**
     * Pagination token, if not returned indicates the last page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pagination token, if not returned indicates the last page.
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
