<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a single stream that gets data inside the storage system.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.WriteStream</code>
 */
class WriteStream extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the stream, in the form
     * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Immutable. Type of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStream.Type type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $type = 0;
    /**
     * Output only. Create time of the stream. For the _default stream, this is
     * the creation_time of the table.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Commit time of the stream.
     * If a stream is of `COMMITTED` type, then it will have a commit_time same as
     * `create_time`. If the stream is of `PENDING` type, empty commit_time
     * means it is not committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $commit_time = null;
    /**
     * Output only. The schema of the destination table. It is only returned in
     * `CreateWriteStream` response. Caller should generate data that's
     * compatible with this schema to send in initial `AppendRowsRequest`.
     * The table schema could go out of date during the life time of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableSchema table_schema = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $table_schema = null;
    /**
     * Immutable. Mode of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStream.WriteMode write_mode = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $write_mode = 0;
    /**
     * Immutable. The geographic location where the stream's dataset resides. See
     * https://cloud.google.com/bigquery/docs/locations for supported
     * locations.
     *
     * Generated from protobuf field <code>string location = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the stream, in the form
     *           `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
     *     @type int $type
     *           Immutable. Type of the stream.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time of the stream. For the _default stream, this is
     *           the creation_time of the table.
     *     @type \Google\Protobuf\Timestamp $commit_time
     *           Output only. Commit time of the stream.
     *           If a stream is of `COMMITTED` type, then it will have a commit_time same as
     *           `create_time`. If the stream is of `PENDING` type, empty commit_time
     *           means it is not committed.
     *     @type \Google\Cloud\BigQuery\Storage\V1\TableSchema $table_schema
     *           Output only. The schema of the destination table. It is only returned in
     *           `CreateWriteStream` response. Caller should generate data that's
     *           compatible with this schema to send in initial `AppendRowsRequest`.
     *           The table schema could go out of date during the life time of the stream.
     *     @type int $write_mode
     *           Immutable. Mode of the stream.
     *     @type string $location
     *           Immutable. The geographic location where the stream's dataset resides. See
     *           https://cloud.google.com/bigquery/docs/locations for supported
     *           locations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the stream, in the form
     * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the stream, in the form
     * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Immutable. Type of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStream.Type type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Immutable. Type of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStream.Type type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Storage\V1\WriteStream\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. Create time of the stream. For the _default stream, this is
     * the creation_time of the table.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create time of the stream. For the _default stream, this is
     * the creation_time of the table.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Commit time of the stream.
     * If a stream is of `COMMITTED` type, then it will have a commit_time same as
     * `create_time`. If the stream is of `PENDING` type, empty commit_time
     * means it is not committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCommitTime()
    {
        return $this->commit_time;
    }

    public function hasCommitTime()
    {
        return isset($this->commit_time);
    }

    public function clearCommitTime()
    {
        unset($this->commit_time);
    }

    /**
     * Output only. Commit time of the stream.
     * If a stream is of `COMMITTED` type, then it will have a commit_time same as
     * `create_time`. If the stream is of `PENDING` type, empty commit_time
     * means it is not committed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCommitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->commit_time = $var;

        return $this;
    }

    /**
     * Output only. The schema of the destination table. It is only returned in
     * `CreateWriteStream` response. Caller should generate data that's
     * compatible with this schema to send in initial `AppendRowsRequest`.
     * The table schema could go out of date during the life time of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableSchema table_schema = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\TableSchema|null
     */
    public function getTableSchema()
    {
        return $this->table_schema;
    }

    public function hasTableSchema()
    {
        return isset($this->table_schema);
    }

    public function clearTableSchema()
    {
        unset($this->table_schema);
    }

    /**
     * Output only. The schema of the destination table. It is only returned in
     * `CreateWriteStream` response. Caller should generate data that's
     * compatible with this schema to send in initial `AppendRowsRequest`.
     * The table schema could go out of date during the life time of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.TableSchema table_schema = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\TableSchema $var
     * @return $this
     */
    public function setTableSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\TableSchema::class);
        $this->table_schema = $var;

        return $this;
    }

    /**
     * Immutable. Mode of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStream.WriteMode write_mode = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getWriteMode()
    {
        return $this->write_mode;
    }

    /**
     * Immutable. Mode of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.WriteStream.WriteMode write_mode = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setWriteMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Storage\V1\WriteStream\WriteMode::class);
        $this->write_mode = $var;

        return $this;
    }

    /**
     * Immutable. The geographic location where the stream's dataset resides. See
     * https://cloud.google.com/bigquery/docs/locations for supported
     * locations.
     *
     * Generated from protobuf field <code>string location = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Immutable. The geographic location where the stream's dataset resides. See
     * https://cloud.google.com/bigquery/docs/locations for supported
     * locations.
     *
     * Generated from protobuf field <code>string location = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}
