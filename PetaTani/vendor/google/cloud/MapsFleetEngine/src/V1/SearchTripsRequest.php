<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/trip_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SearchTrips request message.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.SearchTripsRequest</code>
 */
class SearchTripsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1;</code>
     */
    protected $header = null;
    /**
     * Required. Must be in the format `providers/{provider}`.
     * The provider must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * The vehicle associated with the trips in the request. If unspecified, the
     * returned trips do not contain:
     * * `current_route_segment`
     * * `remaining_waypoints`
     * * `remaining_distance_meters`
     * * `eta_to_first_waypoint`
     *
     * Generated from protobuf field <code>string vehicle_id = 4;</code>
     */
    protected $vehicle_id = '';
    /**
     * If set to true, the response includes Trips that influence a driver's
     * route.
     *
     * Generated from protobuf field <code>bool active_trips_only = 5;</code>
     */
    protected $active_trips_only = false;
    /**
     * If not set, the server decides the number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     */
    protected $page_size = 0;
    /**
     * Set this to a value previously returned in the `SearchTripsResponse` to
     * continue from previous results.
     *
     * Generated from protobuf field <code>string page_token = 7;</code>
     */
    protected $page_token = '';
    /**
     * If specified, returns the trips that have not been updated after the time
     * `(current - minimum_staleness)`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration minimum_staleness = 8;</code>
     */
    protected $minimum_staleness = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\V1\RequestHeader $header
     *           The standard Fleet Engine request header.
     *     @type string $parent
     *           Required. Must be in the format `providers/{provider}`.
     *           The provider must be the Project ID (for example, `sample-cloud-project`)
     *           of the Google Cloud Project of which the service account making
     *           this call is a member.
     *     @type string $vehicle_id
     *           The vehicle associated with the trips in the request. If unspecified, the
     *           returned trips do not contain:
     *           * `current_route_segment`
     *           * `remaining_waypoints`
     *           * `remaining_distance_meters`
     *           * `eta_to_first_waypoint`
     *     @type bool $active_trips_only
     *           If set to true, the response includes Trips that influence a driver's
     *           route.
     *     @type int $page_size
     *           If not set, the server decides the number of results to return.
     *     @type string $page_token
     *           Set this to a value previously returned in the `SearchTripsResponse` to
     *           continue from previous results.
     *     @type \Google\Protobuf\Duration $minimum_staleness
     *           If specified, returns the trips that have not been updated after the time
     *           `(current - minimum_staleness)`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\TripApi::initOnce();
        parent::__construct($data);
    }

    /**
     * The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1;</code>
     * @return \Google\Maps\FleetEngine\V1\RequestHeader|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1;</code>
     * @param \Google\Maps\FleetEngine\V1\RequestHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\V1\RequestHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Required. Must be in the format `providers/{provider}`.
     * The provider must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Must be in the format `providers/{provider}`.
     * The provider must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The vehicle associated with the trips in the request. If unspecified, the
     * returned trips do not contain:
     * * `current_route_segment`
     * * `remaining_waypoints`
     * * `remaining_distance_meters`
     * * `eta_to_first_waypoint`
     *
     * Generated from protobuf field <code>string vehicle_id = 4;</code>
     * @return string
     */
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }

    /**
     * The vehicle associated with the trips in the request. If unspecified, the
     * returned trips do not contain:
     * * `current_route_segment`
     * * `remaining_waypoints`
     * * `remaining_distance_meters`
     * * `eta_to_first_waypoint`
     *
     * Generated from protobuf field <code>string vehicle_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVehicleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vehicle_id = $var;

        return $this;
    }

    /**
     * If set to true, the response includes Trips that influence a driver's
     * route.
     *
     * Generated from protobuf field <code>bool active_trips_only = 5;</code>
     * @return bool
     */
    public function getActiveTripsOnly()
    {
        return $this->active_trips_only;
    }

    /**
     * If set to true, the response includes Trips that influence a driver's
     * route.
     *
     * Generated from protobuf field <code>bool active_trips_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setActiveTripsOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->active_trips_only = $var;

        return $this;
    }

    /**
     * If not set, the server decides the number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * If not set, the server decides the number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 6;</code>
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
     * Set this to a value previously returned in the `SearchTripsResponse` to
     * continue from previous results.
     *
     * Generated from protobuf field <code>string page_token = 7;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Set this to a value previously returned in the `SearchTripsResponse` to
     * continue from previous results.
     *
     * Generated from protobuf field <code>string page_token = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * If specified, returns the trips that have not been updated after the time
     * `(current - minimum_staleness)`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration minimum_staleness = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinimumStaleness()
    {
        return $this->minimum_staleness;
    }

    public function hasMinimumStaleness()
    {
        return isset($this->minimum_staleness);
    }

    public function clearMinimumStaleness()
    {
        unset($this->minimum_staleness);
    }

    /**
     * If specified, returns the trips that have not been updated after the time
     * `(current - minimum_staleness)`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration minimum_staleness = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinimumStaleness($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->minimum_staleness = $var;

        return $this;
    }

}
