<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\IngestionDataSourceSettings\CloudStorage;

use UnexpectedValueException;

/**
 * Possible states for ingestion from Cloud Storage.
 *
 * Protobuf type <code>google.pubsub.v1.IngestionDataSourceSettings.CloudStorage.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Ingestion is active.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Permission denied encountered while calling the Cloud Storage API. This
     * can happen if the Pub/Sub SA has not been granted the
     * [appropriate
     * permissions](https://cloud.google.com/storage/docs/access-control/iam-permissions):
     * - storage.objects.list: to list the objects in a bucket.
     * - storage.objects.get: to read the objects in a bucket.
     * - storage.buckets.get: to verify the bucket exists.
     *
     * Generated from protobuf enum <code>CLOUD_STORAGE_PERMISSION_DENIED = 2;</code>
     */
    const CLOUD_STORAGE_PERMISSION_DENIED = 2;
    /**
     * Permission denied encountered while publishing to the topic. This can
     * happen if the Pub/Sub SA has not been granted the [appropriate publish
     * permissions](https://cloud.google.com/pubsub/docs/access-control#pubsub.publisher)
     *
     * Generated from protobuf enum <code>PUBLISH_PERMISSION_DENIED = 3;</code>
     */
    const PUBLISH_PERMISSION_DENIED = 3;
    /**
     * The provided Cloud Storage bucket doesn't exist.
     *
     * Generated from protobuf enum <code>BUCKET_NOT_FOUND = 4;</code>
     */
    const BUCKET_NOT_FOUND = 4;
    /**
     * The Cloud Storage bucket has too many objects, ingestion will be
     * paused.
     *
     * Generated from protobuf enum <code>TOO_MANY_OBJECTS = 5;</code>
     */
    const TOO_MANY_OBJECTS = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::CLOUD_STORAGE_PERMISSION_DENIED => 'CLOUD_STORAGE_PERMISSION_DENIED',
        self::PUBLISH_PERMISSION_DENIED => 'PUBLISH_PERMISSION_DENIED',
        self::BUCKET_NOT_FOUND => 'BUCKET_NOT_FOUND',
        self::TOO_MANY_OBJECTS => 'TOO_MANY_OBJECTS',
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

