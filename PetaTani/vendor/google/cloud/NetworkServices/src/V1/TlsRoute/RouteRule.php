<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/tls_route.proto

namespace Google\Cloud\NetworkServices\V1\TlsRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how to match traffic and how to route traffic when traffic is
 * matched.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.TlsRoute.RouteRule</code>
 */
class RouteRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. RouteMatch defines the predicate used to match requests to a
     * given action. Multiple match types are "OR"ed for evaluation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.TlsRoute.RouteMatch matches = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $matches;
    /**
     * Required. The detailed rule defining how to route matched traffic.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TlsRoute.RouteAction action = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $action = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetworkServices\V1\TlsRoute\RouteMatch>|\Google\Protobuf\Internal\RepeatedField $matches
     *           Required. RouteMatch defines the predicate used to match requests to a
     *           given action. Multiple match types are "OR"ed for evaluation.
     *     @type \Google\Cloud\NetworkServices\V1\TlsRoute\RouteAction $action
     *           Required. The detailed rule defining how to route matched traffic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\TlsRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. RouteMatch defines the predicate used to match requests to a
     * given action. Multiple match types are "OR"ed for evaluation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.TlsRoute.RouteMatch matches = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * Required. RouteMatch defines the predicate used to match requests to a
     * given action. Multiple match types are "OR"ed for evaluation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.TlsRoute.RouteMatch matches = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\NetworkServices\V1\TlsRoute\RouteMatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkServices\V1\TlsRoute\RouteMatch::class);
        $this->matches = $arr;

        return $this;
    }

    /**
     * Required. The detailed rule defining how to route matched traffic.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TlsRoute.RouteAction action = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\TlsRoute\RouteAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    public function hasAction()
    {
        return isset($this->action);
    }

    public function clearAction()
    {
        unset($this->action);
    }

    /**
     * Required. The detailed rule defining how to route matched traffic.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TlsRoute.RouteAction action = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\TlsRoute\RouteAction $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\TlsRoute\RouteAction::class);
        $this->action = $var;

        return $this;
    }

}

