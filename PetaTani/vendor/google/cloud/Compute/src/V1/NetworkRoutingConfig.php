<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A routing configuration attached to a network resource. The message includes the list of routers associated with the network, and a flag indicating the type of routing behavior to enforce network-wide.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkRoutingConfig</code>
 */
class NetworkRoutingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Enable comparison of Multi-Exit Discriminators (MED) across routes with different neighbor ASNs when using the STANDARD BGP best path selection algorithm.
     *
     * Generated from protobuf field <code>optional bool bgp_always_compare_med = 213102902;</code>
     */
    private $bgp_always_compare_med = null;
    /**
     * The BGP best path selection algorithm to be employed within this network for dynamic routes learned by Cloud Routers. Can be LEGACY (default) or STANDARD.
     * Check the BgpBestPathSelectionMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string bgp_best_path_selection_mode = 317816297;</code>
     */
    private $bgp_best_path_selection_mode = null;
    /**
     * Allows to define a preferred approach for handling inter-region cost in the selection process when using the STANDARD BGP best path selection algorithm. Can be DEFAULT or ADD_COST_TO_MED.
     * Check the BgpInterRegionCost enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string bgp_inter_region_cost = 462142689;</code>
     */
    private $bgp_inter_region_cost = null;
    /**
     * The network-wide routing mode to use. If set to REGIONAL, this network's Cloud Routers will only advertise routes with subnets of this network in the same region as the router. If set to GLOBAL, this network's Cloud Routers will advertise routes with all subnets of this network, across regions.
     * Check the RoutingMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string routing_mode = 475143548;</code>
     */
    private $routing_mode = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $bgp_always_compare_med
     *           Enable comparison of Multi-Exit Discriminators (MED) across routes with different neighbor ASNs when using the STANDARD BGP best path selection algorithm.
     *     @type string $bgp_best_path_selection_mode
     *           The BGP best path selection algorithm to be employed within this network for dynamic routes learned by Cloud Routers. Can be LEGACY (default) or STANDARD.
     *           Check the BgpBestPathSelectionMode enum for the list of possible values.
     *     @type string $bgp_inter_region_cost
     *           Allows to define a preferred approach for handling inter-region cost in the selection process when using the STANDARD BGP best path selection algorithm. Can be DEFAULT or ADD_COST_TO_MED.
     *           Check the BgpInterRegionCost enum for the list of possible values.
     *     @type string $routing_mode
     *           The network-wide routing mode to use. If set to REGIONAL, this network's Cloud Routers will only advertise routes with subnets of this network in the same region as the router. If set to GLOBAL, this network's Cloud Routers will advertise routes with all subnets of this network, across regions.
     *           Check the RoutingMode enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Enable comparison of Multi-Exit Discriminators (MED) across routes with different neighbor ASNs when using the STANDARD BGP best path selection algorithm.
     *
     * Generated from protobuf field <code>optional bool bgp_always_compare_med = 213102902;</code>
     * @return bool
     */
    public function getBgpAlwaysCompareMed()
    {
        return isset($this->bgp_always_compare_med) ? $this->bgp_always_compare_med : false;
    }

    public function hasBgpAlwaysCompareMed()
    {
        return isset($this->bgp_always_compare_med);
    }

    public function clearBgpAlwaysCompareMed()
    {
        unset($this->bgp_always_compare_med);
    }

    /**
     * Enable comparison of Multi-Exit Discriminators (MED) across routes with different neighbor ASNs when using the STANDARD BGP best path selection algorithm.
     *
     * Generated from protobuf field <code>optional bool bgp_always_compare_med = 213102902;</code>
     * @param bool $var
     * @return $this
     */
    public function setBgpAlwaysCompareMed($var)
    {
        GPBUtil::checkBool($var);
        $this->bgp_always_compare_med = $var;

        return $this;
    }

    /**
     * The BGP best path selection algorithm to be employed within this network for dynamic routes learned by Cloud Routers. Can be LEGACY (default) or STANDARD.
     * Check the BgpBestPathSelectionMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string bgp_best_path_selection_mode = 317816297;</code>
     * @return string
     */
    public function getBgpBestPathSelectionMode()
    {
        return isset($this->bgp_best_path_selection_mode) ? $this->bgp_best_path_selection_mode : '';
    }

    public function hasBgpBestPathSelectionMode()
    {
        return isset($this->bgp_best_path_selection_mode);
    }

    public function clearBgpBestPathSelectionMode()
    {
        unset($this->bgp_best_path_selection_mode);
    }

    /**
     * The BGP best path selection algorithm to be employed within this network for dynamic routes learned by Cloud Routers. Can be LEGACY (default) or STANDARD.
     * Check the BgpBestPathSelectionMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string bgp_best_path_selection_mode = 317816297;</code>
     * @param string $var
     * @return $this
     */
    public function setBgpBestPathSelectionMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->bgp_best_path_selection_mode = $var;

        return $this;
    }

    /**
     * Allows to define a preferred approach for handling inter-region cost in the selection process when using the STANDARD BGP best path selection algorithm. Can be DEFAULT or ADD_COST_TO_MED.
     * Check the BgpInterRegionCost enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string bgp_inter_region_cost = 462142689;</code>
     * @return string
     */
    public function getBgpInterRegionCost()
    {
        return isset($this->bgp_inter_region_cost) ? $this->bgp_inter_region_cost : '';
    }

    public function hasBgpInterRegionCost()
    {
        return isset($this->bgp_inter_region_cost);
    }

    public function clearBgpInterRegionCost()
    {
        unset($this->bgp_inter_region_cost);
    }

    /**
     * Allows to define a preferred approach for handling inter-region cost in the selection process when using the STANDARD BGP best path selection algorithm. Can be DEFAULT or ADD_COST_TO_MED.
     * Check the BgpInterRegionCost enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string bgp_inter_region_cost = 462142689;</code>
     * @param string $var
     * @return $this
     */
    public function setBgpInterRegionCost($var)
    {
        GPBUtil::checkString($var, True);
        $this->bgp_inter_region_cost = $var;

        return $this;
    }

    /**
     * The network-wide routing mode to use. If set to REGIONAL, this network's Cloud Routers will only advertise routes with subnets of this network in the same region as the router. If set to GLOBAL, this network's Cloud Routers will advertise routes with all subnets of this network, across regions.
     * Check the RoutingMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string routing_mode = 475143548;</code>
     * @return string
     */
    public function getRoutingMode()
    {
        return isset($this->routing_mode) ? $this->routing_mode : '';
    }

    public function hasRoutingMode()
    {
        return isset($this->routing_mode);
    }

    public function clearRoutingMode()
    {
        unset($this->routing_mode);
    }

    /**
     * The network-wide routing mode to use. If set to REGIONAL, this network's Cloud Routers will only advertise routes with subnets of this network in the same region as the router. If set to GLOBAL, this network's Cloud Routers will advertise routes with all subnets of this network, across regions.
     * Check the RoutingMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string routing_mode = 475143548;</code>
     * @param string $var
     * @return $this
     */
    public function setRoutingMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->routing_mode = $var;

        return $this;
    }

}
