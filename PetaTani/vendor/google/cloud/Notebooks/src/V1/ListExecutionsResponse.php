<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for listing scheduled notebook executions
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.ListExecutionsResponse</code>
 */
class ListExecutionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of returned instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.Execution executions = 1;</code>
     */
    private $executions;
    /**
     * Page token that can be used to continue listing from the last result in the
     * next list call.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Executions IDs that could not be reached. For example:
     *     ['projects/{project_id}/location/{location}/executions/imagenet_test1',
     *      'projects/{project_id}/location/{location}/executions/classifier_train1']
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Notebooks\V1\Execution>|\Google\Protobuf\Internal\RepeatedField $executions
     *           A list of returned instances.
     *     @type string $next_page_token
     *           Page token that can be used to continue listing from the last result in the
     *           next list call.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Executions IDs that could not be reached. For example:
     *               ['projects/{project_id}/location/{location}/executions/imagenet_test1',
     *                'projects/{project_id}/location/{location}/executions/classifier_train1']
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of returned instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.Execution executions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExecutions()
    {
        return $this->executions;
    }

    /**
     * A list of returned instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.Execution executions = 1;</code>
     * @param array<\Google\Cloud\Notebooks\V1\Execution>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExecutions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V1\Execution::class);
        $this->executions = $arr;

        return $this;
    }

    /**
     * Page token that can be used to continue listing from the last result in the
     * next list call.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Page token that can be used to continue listing from the last result in the
     * next list call.
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

    /**
     * Executions IDs that could not be reached. For example:
     *     ['projects/{project_id}/location/{location}/executions/imagenet_test1',
     *      'projects/{project_id}/location/{location}/executions/classifier_train1']
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Executions IDs that could not be reached. For example:
     *     ['projects/{project_id}/location/{location}/executions/imagenet_test1',
     *      'projects/{project_id}/location/{location}/executions/classifier_train1']
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}
