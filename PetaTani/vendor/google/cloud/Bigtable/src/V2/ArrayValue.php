<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ArrayValue` is an ordered list of `Value`.
 *
 * Generated from protobuf message <code>google.bigtable.v2.ArrayValue</code>
 */
class ArrayValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The ordered elements in the array.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Value values = 1;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Bigtable\V2\Value>|\Google\Protobuf\Internal\RepeatedField $values
     *           The ordered elements in the array.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The ordered elements in the array.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Value values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The ordered elements in the array.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.Value values = 1;</code>
     * @param array<\Google\Cloud\Bigtable\V2\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\Value::class);
        $this->values = $arr;

        return $this;
    }

}
