<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_discovery.proto

namespace Google\Cloud\Dataplex\V1\DataDiscoverySpec\StorageConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes CSV and similar semi-structured data formats.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataDiscoverySpec.StorageConfig.CsvOptions</code>
 */
class CsvOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The number of rows to interpret as header rows that should be
     * skipped when reading data rows.
     *
     * Generated from protobuf field <code>int32 header_rows = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $header_rows = 0;
    /**
     * Optional. The delimiter that is used to separate values. The default is
     * `,` (comma).
     *
     * Generated from protobuf field <code>string delimiter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $delimiter = '';
    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encoding = '';
    /**
     * Optional. Whether to disable the inference of data types for CSV data.
     * If true, all columns are registered as strings.
     *
     * Generated from protobuf field <code>bool type_inference_disabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type_inference_disabled = false;
    /**
     * Optional. The character used to quote column values. Accepts `"`
     * (double quotation mark) or `'` (single quotation mark). If unspecified,
     * defaults to `"` (double quotation mark).
     *
     * Generated from protobuf field <code>string quote = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $quote = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $header_rows
     *           Optional. The number of rows to interpret as header rows that should be
     *           skipped when reading data rows.
     *     @type string $delimiter
     *           Optional. The delimiter that is used to separate values. The default is
     *           `,` (comma).
     *     @type string $encoding
     *           Optional. The character encoding of the data. The default is UTF-8.
     *     @type bool $type_inference_disabled
     *           Optional. Whether to disable the inference of data types for CSV data.
     *           If true, all columns are registered as strings.
     *     @type string $quote
     *           Optional. The character used to quote column values. Accepts `"`
     *           (double quotation mark) or `'` (single quotation mark). If unspecified,
     *           defaults to `"` (double quotation mark).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The number of rows to interpret as header rows that should be
     * skipped when reading data rows.
     *
     * Generated from protobuf field <code>int32 header_rows = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getHeaderRows()
    {
        return $this->header_rows;
    }

    /**
     * Optional. The number of rows to interpret as header rows that should be
     * skipped when reading data rows.
     *
     * Generated from protobuf field <code>int32 header_rows = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setHeaderRows($var)
    {
        GPBUtil::checkInt32($var);
        $this->header_rows = $var;

        return $this;
    }

    /**
     * Optional. The delimiter that is used to separate values. The default is
     * `,` (comma).
     *
     * Generated from protobuf field <code>string delimiter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Optional. The delimiter that is used to separate values. The default is
     * `,` (comma).
     *
     * Generated from protobuf field <code>string delimiter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDelimiter($var)
    {
        GPBUtil::checkString($var, True);
        $this->delimiter = $var;

        return $this;
    }

    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Whether to disable the inference of data types for CSV data.
     * If true, all columns are registered as strings.
     *
     * Generated from protobuf field <code>bool type_inference_disabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getTypeInferenceDisabled()
    {
        return $this->type_inference_disabled;
    }

    /**
     * Optional. Whether to disable the inference of data types for CSV data.
     * If true, all columns are registered as strings.
     *
     * Generated from protobuf field <code>bool type_inference_disabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setTypeInferenceDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->type_inference_disabled = $var;

        return $this;
    }

    /**
     * Optional. The character used to quote column values. Accepts `"`
     * (double quotation mark) or `'` (single quotation mark). If unspecified,
     * defaults to `"` (double quotation mark).
     *
     * Generated from protobuf field <code>string quote = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Optional. The character used to quote column values. Accepts `"`
     * (double quotation mark) or `'` (single quotation mark). If unspecified,
     * defaults to `"` (double quotation mark).
     *
     * Generated from protobuf field <code>string quote = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQuote($var)
    {
        GPBUtil::checkString($var, True);
        $this->quote = $var;

        return $this;
    }

}

