<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AwsSourceDetails message describes a specific source details for the
 * AWS source type.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.AwsSourceDetails</code>
 */
class AwsSourceDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The AWS region that the source VMs will be migrated from.
     *
     * Generated from protobuf field <code>string aws_region = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $aws_region = '';
    /**
     * Output only. State of the source as determined by the health check.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceDetails.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Provides details on the state of the Source in case of an
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = null;
    /**
     * AWS resource tags to limit the scope of the source inventory.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.AwsSourceDetails.Tag inventory_tag_list = 10;</code>
     */
    private $inventory_tag_list;
    /**
     * AWS security group names to limit the scope of the source
     * inventory.
     *
     * Generated from protobuf field <code>repeated string inventory_security_group_names = 7;</code>
     */
    private $inventory_security_group_names;
    /**
     * User specified tags to add to every M2VM generated resource in AWS.
     * These tags will be set in addition to the default tags that are set as part
     * of the migration process. The tags must not begin with the reserved prefix
     * `m2vm`.
     *
     * Generated from protobuf field <code>map<string, string> migration_resources_user_tags = 8;</code>
     */
    private $migration_resources_user_tags;
    /**
     * Output only. The source's public IP. All communication initiated by this
     * source will originate from this IP.
     *
     * Generated from protobuf field <code>string public_ip = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $public_ip = '';
    protected $credentials_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VMMigration\V1\AwsSourceDetails\AccessKeyCredentials $access_key_creds
     *           AWS Credentials using access key id and secret.
     *     @type string $aws_region
     *           Immutable. The AWS region that the source VMs will be migrated from.
     *     @type int $state
     *           Output only. State of the source as determined by the health check.
     *     @type \Google\Rpc\Status $error
     *           Output only. Provides details on the state of the Source in case of an
     *           error.
     *     @type array<\Google\Cloud\VMMigration\V1\AwsSourceDetails\Tag>|\Google\Protobuf\Internal\RepeatedField $inventory_tag_list
     *           AWS resource tags to limit the scope of the source inventory.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $inventory_security_group_names
     *           AWS security group names to limit the scope of the source
     *           inventory.
     *     @type array|\Google\Protobuf\Internal\MapField $migration_resources_user_tags
     *           User specified tags to add to every M2VM generated resource in AWS.
     *           These tags will be set in addition to the default tags that are set as part
     *           of the migration process. The tags must not begin with the reserved prefix
     *           `m2vm`.
     *     @type string $public_ip
     *           Output only. The source's public IP. All communication initiated by this
     *           source will originate from this IP.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * AWS Credentials using access key id and secret.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceDetails.AccessKeyCredentials access_key_creds = 11;</code>
     * @return \Google\Cloud\VMMigration\V1\AwsSourceDetails\AccessKeyCredentials|null
     */
    public function getAccessKeyCreds()
    {
        return $this->readOneof(11);
    }

    public function hasAccessKeyCreds()
    {
        return $this->hasOneof(11);
    }

    /**
     * AWS Credentials using access key id and secret.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceDetails.AccessKeyCredentials access_key_creds = 11;</code>
     * @param \Google\Cloud\VMMigration\V1\AwsSourceDetails\AccessKeyCredentials $var
     * @return $this
     */
    public function setAccessKeyCreds($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\AwsSourceDetails\AccessKeyCredentials::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Immutable. The AWS region that the source VMs will be migrated from.
     *
     * Generated from protobuf field <code>string aws_region = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getAwsRegion()
    {
        return $this->aws_region;
    }

    /**
     * Immutable. The AWS region that the source VMs will be migrated from.
     *
     * Generated from protobuf field <code>string aws_region = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setAwsRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->aws_region = $var;

        return $this;
    }

    /**
     * Output only. State of the source as determined by the health check.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceDetails.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the source as determined by the health check.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceDetails.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\AwsSourceDetails\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Provides details on the state of the Source in case of an
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. Provides details on the state of the Source in case of an
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * AWS resource tags to limit the scope of the source inventory.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.AwsSourceDetails.Tag inventory_tag_list = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInventoryTagList()
    {
        return $this->inventory_tag_list;
    }

    /**
     * AWS resource tags to limit the scope of the source inventory.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.AwsSourceDetails.Tag inventory_tag_list = 10;</code>
     * @param array<\Google\Cloud\VMMigration\V1\AwsSourceDetails\Tag>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInventoryTagList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\AwsSourceDetails\Tag::class);
        $this->inventory_tag_list = $arr;

        return $this;
    }

    /**
     * AWS security group names to limit the scope of the source
     * inventory.
     *
     * Generated from protobuf field <code>repeated string inventory_security_group_names = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInventorySecurityGroupNames()
    {
        return $this->inventory_security_group_names;
    }

    /**
     * AWS security group names to limit the scope of the source
     * inventory.
     *
     * Generated from protobuf field <code>repeated string inventory_security_group_names = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInventorySecurityGroupNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->inventory_security_group_names = $arr;

        return $this;
    }

    /**
     * User specified tags to add to every M2VM generated resource in AWS.
     * These tags will be set in addition to the default tags that are set as part
     * of the migration process. The tags must not begin with the reserved prefix
     * `m2vm`.
     *
     * Generated from protobuf field <code>map<string, string> migration_resources_user_tags = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMigrationResourcesUserTags()
    {
        return $this->migration_resources_user_tags;
    }

    /**
     * User specified tags to add to every M2VM generated resource in AWS.
     * These tags will be set in addition to the default tags that are set as part
     * of the migration process. The tags must not begin with the reserved prefix
     * `m2vm`.
     *
     * Generated from protobuf field <code>map<string, string> migration_resources_user_tags = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMigrationResourcesUserTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->migration_resources_user_tags = $arr;

        return $this;
    }

    /**
     * Output only. The source's public IP. All communication initiated by this
     * source will originate from this IP.
     *
     * Generated from protobuf field <code>string public_ip = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPublicIp()
    {
        return $this->public_ip;
    }

    /**
     * Output only. The source's public IP. All communication initiated by this
     * source will originate from this IP.
     *
     * Generated from protobuf field <code>string public_ip = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPublicIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_ip = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getCredentialsType()
    {
        return $this->whichOneof("credentials_type");
    }

}
