<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an identifier of an object in the data source.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.SourceObjectIdentifier</code>
 */
class SourceObjectIdentifier extends \Google\Protobuf\Internal\Message
{
    protected $source_identifier;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastream\V1\SourceObjectIdentifier\OracleObjectIdentifier $oracle_identifier
     *           Oracle data source object identifier.
     *     @type \Google\Cloud\Datastream\V1\SourceObjectIdentifier\MysqlObjectIdentifier $mysql_identifier
     *           Mysql data source object identifier.
     *     @type \Google\Cloud\Datastream\V1\SourceObjectIdentifier\PostgresqlObjectIdentifier $postgresql_identifier
     *           PostgreSQL data source object identifier.
     *     @type \Google\Cloud\Datastream\V1\SourceObjectIdentifier\SqlServerObjectIdentifier $sql_server_identifier
     *           SQLServer data source object identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Oracle data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.OracleObjectIdentifier oracle_identifier = 1;</code>
     * @return \Google\Cloud\Datastream\V1\SourceObjectIdentifier\OracleObjectIdentifier|null
     */
    public function getOracleIdentifier()
    {
        return $this->readOneof(1);
    }

    public function hasOracleIdentifier()
    {
        return $this->hasOneof(1);
    }

    /**
     * Oracle data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.OracleObjectIdentifier oracle_identifier = 1;</code>
     * @param \Google\Cloud\Datastream\V1\SourceObjectIdentifier\OracleObjectIdentifier $var
     * @return $this
     */
    public function setOracleIdentifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SourceObjectIdentifier\OracleObjectIdentifier::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Mysql data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.MysqlObjectIdentifier mysql_identifier = 2;</code>
     * @return \Google\Cloud\Datastream\V1\SourceObjectIdentifier\MysqlObjectIdentifier|null
     */
    public function getMysqlIdentifier()
    {
        return $this->readOneof(2);
    }

    public function hasMysqlIdentifier()
    {
        return $this->hasOneof(2);
    }

    /**
     * Mysql data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.MysqlObjectIdentifier mysql_identifier = 2;</code>
     * @param \Google\Cloud\Datastream\V1\SourceObjectIdentifier\MysqlObjectIdentifier $var
     * @return $this
     */
    public function setMysqlIdentifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SourceObjectIdentifier\MysqlObjectIdentifier::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * PostgreSQL data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.PostgresqlObjectIdentifier postgresql_identifier = 3;</code>
     * @return \Google\Cloud\Datastream\V1\SourceObjectIdentifier\PostgresqlObjectIdentifier|null
     */
    public function getPostgresqlIdentifier()
    {
        return $this->readOneof(3);
    }

    public function hasPostgresqlIdentifier()
    {
        return $this->hasOneof(3);
    }

    /**
     * PostgreSQL data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.PostgresqlObjectIdentifier postgresql_identifier = 3;</code>
     * @param \Google\Cloud\Datastream\V1\SourceObjectIdentifier\PostgresqlObjectIdentifier $var
     * @return $this
     */
    public function setPostgresqlIdentifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SourceObjectIdentifier\PostgresqlObjectIdentifier::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * SQLServer data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.SqlServerObjectIdentifier sql_server_identifier = 4;</code>
     * @return \Google\Cloud\Datastream\V1\SourceObjectIdentifier\SqlServerObjectIdentifier|null
     */
    public function getSqlServerIdentifier()
    {
        return $this->readOneof(4);
    }

    public function hasSqlServerIdentifier()
    {
        return $this->hasOneof(4);
    }

    /**
     * SQLServer data source object identifier.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceObjectIdentifier.SqlServerObjectIdentifier sql_server_identifier = 4;</code>
     * @param \Google\Cloud\Datastream\V1\SourceObjectIdentifier\SqlServerObjectIdentifier $var
     * @return $this
     */
    public function setSqlServerIdentifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SourceObjectIdentifier\SqlServerObjectIdentifier::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceIdentifier()
    {
        return $this->whichOneof("source_identifier");
    }

}
