<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/routeoptimization/v1/route_optimization_service.proto

namespace Google\Maps\RouteOptimization\V1\InjectedSolutionConstraint\ConstraintRelaxation\Relaxation;

use UnexpectedValueException;

/**
 * Expresses the different constraint relaxation levels, which are
 * applied for a visit and those that follow when it satisfies the
 * threshold conditions.
 * The enumeration below is in order of increasing relaxation.
 *
 * Protobuf type <code>google.maps.routeoptimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation.Level</code>
 */
class Level
{
    /**
     * Implicit default relaxation level: no constraints are relaxed,
     * i.e., all visits are fully constrained.
     * This value must not be explicitly used in `level`.
     *
     * Generated from protobuf enum <code>LEVEL_UNSPECIFIED = 0;</code>
     */
    const LEVEL_UNSPECIFIED = 0;
    /**
     * Visit start times and vehicle start/end times will be relaxed, but
     * each visit remains bound to the same vehicle and the visit sequence
     * must be observed: no visit can be inserted between them or before
     * them.
     *
     * Generated from protobuf enum <code>RELAX_VISIT_TIMES_AFTER_THRESHOLD = 1;</code>
     */
    const RELAX_VISIT_TIMES_AFTER_THRESHOLD = 1;
    /**
     * Same as `RELAX_VISIT_TIMES_AFTER_THRESHOLD`, but the visit sequence
     * is also relaxed: visits can only be performed by this vehicle, but
     * can potentially become unperformed.
     *
     * Generated from protobuf enum <code>RELAX_VISIT_TIMES_AND_SEQUENCE_AFTER_THRESHOLD = 2;</code>
     */
    const RELAX_VISIT_TIMES_AND_SEQUENCE_AFTER_THRESHOLD = 2;
    /**
     * Same as `RELAX_VISIT_TIMES_AND_SEQUENCE_AFTER_THRESHOLD`, but the
     * vehicle is also relaxed: visits are completely free at or after the
     * threshold time and can potentially become unperformed.
     *
     * Generated from protobuf enum <code>RELAX_ALL_AFTER_THRESHOLD = 3;</code>
     */
    const RELAX_ALL_AFTER_THRESHOLD = 3;

    private static $valueToName = [
        self::LEVEL_UNSPECIFIED => 'LEVEL_UNSPECIFIED',
        self::RELAX_VISIT_TIMES_AFTER_THRESHOLD => 'RELAX_VISIT_TIMES_AFTER_THRESHOLD',
        self::RELAX_VISIT_TIMES_AND_SEQUENCE_AFTER_THRESHOLD => 'RELAX_VISIT_TIMES_AND_SEQUENCE_AFTER_THRESHOLD',
        self::RELAX_ALL_AFTER_THRESHOLD => 'RELAX_ALL_AFTER_THRESHOLD',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

