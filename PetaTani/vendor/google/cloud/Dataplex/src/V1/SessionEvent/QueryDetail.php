<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1\SessionEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execution details of the query.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.SessionEvent.QueryDetail</code>
 */
class QueryDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique Query id identifying the query.
     *
     * Generated from protobuf field <code>string query_id = 1;</code>
     */
    protected $query_id = '';
    /**
     * The query text executed.
     *
     * Generated from protobuf field <code>string query_text = 2;</code>
     */
    protected $query_text = '';
    /**
     * Query Execution engine.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.QueryDetail.Engine engine = 3;</code>
     */
    protected $engine = 0;
    /**
     * Time taken for execution of the query.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 4;</code>
     */
    protected $duration = null;
    /**
     * The size of results the query produced.
     *
     * Generated from protobuf field <code>int64 result_size_bytes = 5;</code>
     */
    protected $result_size_bytes = 0;
    /**
     * The data processed by the query.
     *
     * Generated from protobuf field <code>int64 data_processed_bytes = 6;</code>
     */
    protected $data_processed_bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query_id
     *           The unique Query id identifying the query.
     *     @type string $query_text
     *           The query text executed.
     *     @type int $engine
     *           Query Execution engine.
     *     @type \Google\Protobuf\Duration $duration
     *           Time taken for execution of the query.
     *     @type int|string $result_size_bytes
     *           The size of results the query produced.
     *     @type int|string $data_processed_bytes
     *           The data processed by the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Logs::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique Query id identifying the query.
     *
     * Generated from protobuf field <code>string query_id = 1;</code>
     * @return string
     */
    public function getQueryId()
    {
        return $this->query_id;
    }

    /**
     * The unique Query id identifying the query.
     *
     * Generated from protobuf field <code>string query_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_id = $var;

        return $this;
    }

    /**
     * The query text executed.
     *
     * Generated from protobuf field <code>string query_text = 2;</code>
     * @return string
     */
    public function getQueryText()
    {
        return $this->query_text;
    }

    /**
     * The query text executed.
     *
     * Generated from protobuf field <code>string query_text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryText($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_text = $var;

        return $this;
    }

    /**
     * Query Execution engine.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.QueryDetail.Engine engine = 3;</code>
     * @return int
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Query Execution engine.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.QueryDetail.Engine engine = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEngine($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail\Engine::class);
        $this->engine = $var;

        return $this;
    }

    /**
     * Time taken for execution of the query.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Time taken for execution of the query.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * The size of results the query produced.
     *
     * Generated from protobuf field <code>int64 result_size_bytes = 5;</code>
     * @return int|string
     */
    public function getResultSizeBytes()
    {
        return $this->result_size_bytes;
    }

    /**
     * The size of results the query produced.
     *
     * Generated from protobuf field <code>int64 result_size_bytes = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setResultSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->result_size_bytes = $var;

        return $this;
    }

    /**
     * The data processed by the query.
     *
     * Generated from protobuf field <code>int64 data_processed_bytes = 6;</code>
     * @return int|string
     */
    public function getDataProcessedBytes()
    {
        return $this->data_processed_bytes;
    }

    /**
     * The data processed by the query.
     *
     * Generated from protobuf field <code>int64 data_processed_bytes = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataProcessedBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_processed_bytes = $var;

        return $this;
    }

}

