<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/physical_schema.proto

namespace Google\Cloud\DataCatalog\V1\PhysicalSchema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schema in Avro JSON format.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.PhysicalSchema.AvroSchema</code>
 */
class AvroSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * JSON source of the Avro schema.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           JSON source of the Avro schema.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\PhysicalSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * JSON source of the Avro schema.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * JSON source of the Avro schema.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

