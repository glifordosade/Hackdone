<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The protocol for the `ListAlertPolicies` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListAlertPoliciesRequest</code>
 */
class ListAlertPoliciesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     * alert policies are to be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * Note that this field names the parent container in which the alerting
     * policies to be listed are stored. To retrieve a single alerting policy
     * by name, use the
     * [GetAlertPolicy][google.monitoring.v3.AlertPolicyService.GetAlertPolicy]
     * operation, instead.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. If provided, this field specifies the criteria that must be met
     * by alert policies to be included in the response.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. A comma-separated list of fields by which to sort the result.
     * Supports the same set of field references as the `filter` field. Entries
     * can be prefixed with a minus sign to sort by the field in descending order.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';
    /**
     * Optional. The maximum number of results to return in a single response.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. If this field is not empty then it must contain the
     * `nextPageToken` value returned by a previous call to this method.  Using
     * this field causes the method to return more results from the previous
     * method call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * @param string $name Required. The
     *                     [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     *                     alert policies are to be listed. The format is:
     *
     *                     projects/[PROJECT_ID_OR_NUMBER]
     *
     *                     Note that this field names the parent container in which the alerting
     *                     policies to be listed are stored. To retrieve a single alerting policy
     *                     by name, use the
     *                     [GetAlertPolicy][google.monitoring.v3.AlertPolicyService.GetAlertPolicy]
     *                     operation, instead.
     *
     * @return \Google\Cloud\Monitoring\V3\ListAlertPoliciesRequest
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
     *           Required. The
     *           [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     *           alert policies are to be listed. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *           Note that this field names the parent container in which the alerting
     *           policies to be listed are stored. To retrieve a single alerting policy
     *           by name, use the
     *           [GetAlertPolicy][google.monitoring.v3.AlertPolicyService.GetAlertPolicy]
     *           operation, instead.
     *     @type string $filter
     *           Optional. If provided, this field specifies the criteria that must be met
     *           by alert policies to be included in the response.
     *           For more details, see [sorting and
     *           filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *     @type string $order_by
     *           Optional. A comma-separated list of fields by which to sort the result.
     *           Supports the same set of field references as the `filter` field. Entries
     *           can be prefixed with a minus sign to sort by the field in descending order.
     *           For more details, see [sorting and
     *           filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *     @type int $page_size
     *           Optional. The maximum number of results to return in a single response.
     *     @type string $page_token
     *           Optional. If this field is not empty then it must contain the
     *           `nextPageToken` value returned by a previous call to this method.  Using
     *           this field causes the method to return more results from the previous
     *           method call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\AlertService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     * alert policies are to be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * Note that this field names the parent container in which the alerting
     * policies to be listed are stored. To retrieve a single alerting policy
     * by name, use the
     * [GetAlertPolicy][google.monitoring.v3.AlertPolicyService.GetAlertPolicy]
     * operation, instead.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     * alert policies are to be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * Note that this field names the parent container in which the alerting
     * policies to be listed are stored. To retrieve a single alerting policy
     * by name, use the
     * [GetAlertPolicy][google.monitoring.v3.AlertPolicyService.GetAlertPolicy]
     * operation, instead.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. If provided, this field specifies the criteria that must be met
     * by alert policies to be included in the response.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. If provided, this field specifies the criteria that must be met
     * by alert policies to be included in the response.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. A comma-separated list of fields by which to sort the result.
     * Supports the same set of field references as the `filter` field. Entries
     * can be prefixed with a minus sign to sort by the field in descending order.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. A comma-separated list of fields by which to sort the result.
     * Supports the same set of field references as the `filter` field. Entries
     * can be prefixed with a minus sign to sort by the field in descending order.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return in a single response.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return in a single response.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. If this field is not empty then it must contain the
     * `nextPageToken` value returned by a previous call to this method.  Using
     * this field causes the method to return more results from the previous
     * method call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If this field is not empty then it must contain the
     * `nextPageToken` value returned by a previous call to this method.  Using
     * this field causes the method to return more results from the previous
     * method call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
