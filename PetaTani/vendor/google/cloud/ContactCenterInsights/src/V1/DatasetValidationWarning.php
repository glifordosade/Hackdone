<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use UnexpectedValueException;

/**
 * Enum for the different types of issues a tuning dataset can have.
 * These warnings are currentlyraised when trying to validate a dataset for
 * tuning a scorecard.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.DatasetValidationWarning</code>
 */
class DatasetValidationWarning
{
    /**
     * Unspecified data validation warning.
     *
     * Generated from protobuf enum <code>DATASET_VALIDATION_WARNING_UNSPECIFIED = 0;</code>
     */
    const DATASET_VALIDATION_WARNING_UNSPECIFIED = 0;
    /**
     * A non-trivial percentage of the feedback labels are invalid.
     *
     * Generated from protobuf enum <code>TOO_MANY_INVALID_FEEDBACK_LABELS = 1;</code>
     */
    const TOO_MANY_INVALID_FEEDBACK_LABELS = 1;
    /**
     * The quantity of valid feedback labels provided is less than the
     * recommended minimum.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_FEEDBACK_LABELS = 2;</code>
     */
    const INSUFFICIENT_FEEDBACK_LABELS = 2;
    /**
     * One or more of the answers have less than the recommended minimum of
     * feedback labels.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_FEEDBACK_LABELS_PER_ANSWER = 3;</code>
     */
    const INSUFFICIENT_FEEDBACK_LABELS_PER_ANSWER = 3;
    /**
     * All the labels in the dataset come from a single answer choice.
     *
     * Generated from protobuf enum <code>ALL_FEEDBACK_LABELS_HAVE_THE_SAME_ANSWER = 4;</code>
     */
    const ALL_FEEDBACK_LABELS_HAVE_THE_SAME_ANSWER = 4;

    private static $valueToName = [
        self::DATASET_VALIDATION_WARNING_UNSPECIFIED => 'DATASET_VALIDATION_WARNING_UNSPECIFIED',
        self::TOO_MANY_INVALID_FEEDBACK_LABELS => 'TOO_MANY_INVALID_FEEDBACK_LABELS',
        self::INSUFFICIENT_FEEDBACK_LABELS => 'INSUFFICIENT_FEEDBACK_LABELS',
        self::INSUFFICIENT_FEEDBACK_LABELS_PER_ANSWER => 'INSUFFICIENT_FEEDBACK_LABELS_PER_ANSWER',
        self::ALL_FEEDBACK_LABELS_HAVE_THE_SAME_ANSWER => 'ALL_FEEDBACK_LABELS_HAVE_THE_SAME_ANSWER',
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
