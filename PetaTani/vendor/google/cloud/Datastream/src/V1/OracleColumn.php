<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Oracle Column.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.OracleColumn</code>
 */
class OracleColumn extends \Google\Protobuf\Internal\Message
{
    /**
     * Column name.
     *
     * Generated from protobuf field <code>string column = 1;</code>
     */
    protected $column = '';
    /**
     * The Oracle data type.
     *
     * Generated from protobuf field <code>string data_type = 2;</code>
     */
    protected $data_type = '';
    /**
     * Column length.
     *
     * Generated from protobuf field <code>int32 length = 3;</code>
     */
    protected $length = 0;
    /**
     * Column precision.
     *
     * Generated from protobuf field <code>int32 precision = 4;</code>
     */
    protected $precision = 0;
    /**
     * Column scale.
     *
     * Generated from protobuf field <code>int32 scale = 5;</code>
     */
    protected $scale = 0;
    /**
     * Column encoding.
     *
     * Generated from protobuf field <code>string encoding = 6;</code>
     */
    protected $encoding = '';
    /**
     * Whether or not the column represents a primary key.
     *
     * Generated from protobuf field <code>bool primary_key = 7;</code>
     */
    protected $primary_key = false;
    /**
     * Whether or not the column can accept a null value.
     *
     * Generated from protobuf field <code>bool nullable = 8;</code>
     */
    protected $nullable = false;
    /**
     * The ordinal position of the column in the table.
     *
     * Generated from protobuf field <code>int32 ordinal_position = 9;</code>
     */
    protected $ordinal_position = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column
     *           Column name.
     *     @type string $data_type
     *           The Oracle data type.
     *     @type int $length
     *           Column length.
     *     @type int $precision
     *           Column precision.
     *     @type int $scale
     *           Column scale.
     *     @type string $encoding
     *           Column encoding.
     *     @type bool $primary_key
     *           Whether or not the column represents a primary key.
     *     @type bool $nullable
     *           Whether or not the column can accept a null value.
     *     @type int $ordinal_position
     *           The ordinal position of the column in the table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Column name.
     *
     * Generated from protobuf field <code>string column = 1;</code>
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Column name.
     *
     * Generated from protobuf field <code>string column = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->column = $var;

        return $this;
    }

    /**
     * The Oracle data type.
     *
     * Generated from protobuf field <code>string data_type = 2;</code>
     * @return string
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * The Oracle data type.
     *
     * Generated from protobuf field <code>string data_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Column length.
     *
     * Generated from protobuf field <code>int32 length = 3;</code>
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Column length.
     *
     * Generated from protobuf field <code>int32 length = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->length = $var;

        return $this;
    }

    /**
     * Column precision.
     *
     * Generated from protobuf field <code>int32 precision = 4;</code>
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Column precision.
     *
     * Generated from protobuf field <code>int32 precision = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkInt32($var);
        $this->precision = $var;

        return $this;
    }

    /**
     * Column scale.
     *
     * Generated from protobuf field <code>int32 scale = 5;</code>
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Column scale.
     *
     * Generated from protobuf field <code>int32 scale = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setScale($var)
    {
        GPBUtil::checkInt32($var);
        $this->scale = $var;

        return $this;
    }

    /**
     * Column encoding.
     *
     * Generated from protobuf field <code>string encoding = 6;</code>
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Column encoding.
     *
     * Generated from protobuf field <code>string encoding = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Whether or not the column represents a primary key.
     *
     * Generated from protobuf field <code>bool primary_key = 7;</code>
     * @return bool
     */
    public function getPrimaryKey()
    {
        return $this->primary_key;
    }

    /**
     * Whether or not the column represents a primary key.
     *
     * Generated from protobuf field <code>bool primary_key = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrimaryKey($var)
    {
        GPBUtil::checkBool($var);
        $this->primary_key = $var;

        return $this;
    }

    /**
     * Whether or not the column can accept a null value.
     *
     * Generated from protobuf field <code>bool nullable = 8;</code>
     * @return bool
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Whether or not the column can accept a null value.
     *
     * Generated from protobuf field <code>bool nullable = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setNullable($var)
    {
        GPBUtil::checkBool($var);
        $this->nullable = $var;

        return $this;
    }

    /**
     * The ordinal position of the column in the table.
     *
     * Generated from protobuf field <code>int32 ordinal_position = 9;</code>
     * @return int
     */
    public function getOrdinalPosition()
    {
        return $this->ordinal_position;
    }

    /**
     * The ordinal position of the column in the table.
     *
     * Generated from protobuf field <code>int32 ordinal_position = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setOrdinalPosition($var)
    {
        GPBUtil::checkInt32($var);
        $this->ordinal_position = $var;

        return $this;
    }

}
