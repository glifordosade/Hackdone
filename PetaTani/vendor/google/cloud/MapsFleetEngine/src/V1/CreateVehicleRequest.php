<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicle_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `CreateVehicle` request message.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.CreateVehicleRequest</code>
 */
class CreateVehicleRequest extends \Google\Protobuf\Internal\Message
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
     * Required. Unique Vehicle ID.
     * Subject to the following restrictions:
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string vehicle_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vehicle_id = '';
    /**
     * Required. The Vehicle entity to create. When creating a Vehicle, the
     * following fields are required:
     * * `vehicleState`
     * * `supportedTripTypes`
     * * `maximumCapacity`
     * * `vehicleType`
     * When creating a Vehicle, the following fields are ignored:
     * * `name`
     * * `currentTrips`
     * * `availableCapacity`
     * * `current_route_segment`
     * * `current_route_segment_end_point`
     * * `current_route_segment_version`
     * * `current_route_segment_traffic`
     * * `route`
     * * `waypoints`
     * * `waypoints_version`
     * * `remaining_distance_meters`
     * * `remaining_time_seconds`
     * * `eta_to_next_waypoint`
     * * `navigation_status`
     * All other fields are optional and used if provided.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.Vehicle vehicle = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vehicle = null;

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
     *           Required. Unique Vehicle ID.
     *           Subject to the following restrictions:
     *           * Must be a valid Unicode string.
     *           * Limited to a maximum length of 64 characters.
     *           * Normalized according to [Unicode Normalization Form C]
     *           (http://www.unicode.org/reports/tr15/).
     *           * May not contain any of the following ASCII characters: '/', ':', '?',
     *           ',', or '#'.
     *     @type \Google\Maps\FleetEngine\V1\Vehicle $vehicle
     *           Required. The Vehicle entity to create. When creating a Vehicle, the
     *           following fields are required:
     *           * `vehicleState`
     *           * `supportedTripTypes`
     *           * `maximumCapacity`
     *           * `vehicleType`
     *           When creating a Vehicle, the following fields are ignored:
     *           * `name`
     *           * `currentTrips`
     *           * `availableCapacity`
     *           * `current_route_segment`
     *           * `current_route_segment_end_point`
     *           * `current_route_segment_version`
     *           * `current_route_segment_traffic`
     *           * `route`
     *           * `waypoints`
     *           * `waypoints_version`
     *           * `remaining_distance_meters`
     *           * `remaining_time_seconds`
     *           * `eta_to_next_waypoint`
     *           * `navigation_status`
     *           All other fields are optional and used if provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\VehicleApi::initOnce();
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
     * Required. Unique Vehicle ID.
     * Subject to the following restrictions:
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string vehicle_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }

    /**
     * Required. Unique Vehicle ID.
     * Subject to the following restrictions:
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string vehicle_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The Vehicle entity to create. When creating a Vehicle, the
     * following fields are required:
     * * `vehicleState`
     * * `supportedTripTypes`
     * * `maximumCapacity`
     * * `vehicleType`
     * When creating a Vehicle, the following fields are ignored:
     * * `name`
     * * `currentTrips`
     * * `availableCapacity`
     * * `current_route_segment`
     * * `current_route_segment_end_point`
     * * `current_route_segment_version`
     * * `current_route_segment_traffic`
     * * `route`
     * * `waypoints`
     * * `waypoints_version`
     * * `remaining_distance_meters`
     * * `remaining_time_seconds`
     * * `eta_to_next_waypoint`
     * * `navigation_status`
     * All other fields are optional and used if provided.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.Vehicle vehicle = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Maps\FleetEngine\V1\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    public function hasVehicle()
    {
        return isset($this->vehicle);
    }

    public function clearVehicle()
    {
        unset($this->vehicle);
    }

    /**
     * Required. The Vehicle entity to create. When creating a Vehicle, the
     * following fields are required:
     * * `vehicleState`
     * * `supportedTripTypes`
     * * `maximumCapacity`
     * * `vehicleType`
     * When creating a Vehicle, the following fields are ignored:
     * * `name`
     * * `currentTrips`
     * * `availableCapacity`
     * * `current_route_segment`
     * * `current_route_segment_end_point`
     * * `current_route_segment_version`
     * * `current_route_segment_traffic`
     * * `route`
     * * `waypoints`
     * * `waypoints_version`
     * * `remaining_distance_meters`
     * * `remaining_time_seconds`
     * * `eta_to_next_waypoint`
     * * `navigation_status`
     * All other fields are optional and used if provided.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.Vehicle vehicle = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Maps\FleetEngine\V1\Vehicle $var
     * @return $this
     */
    public function setVehicle($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\V1\Vehicle::class);
        $this->vehicle = $var;

        return $this;
    }

}
