<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupplanassociation.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for List BackupPlanAssociation
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.ListBackupPlanAssociationsResponse</code>
 */
class ListBackupPlanAssociationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of Backup Plan Associations in the project for the specified
     * location.
     * If the `{location}` value in the request is "-", the response contains a
     * list of instances from all locations. In case any location is unreachable,
     * the response will only return backup plan associations in reachable
     * locations and the 'unreachable' field will be populated with a list of
     * unreachable locations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupPlanAssociation backup_plan_associations = 1;</code>
     */
    private $backup_plan_associations;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BackupDR\V1\BackupPlanAssociation>|\Google\Protobuf\Internal\RepeatedField $backup_plan_associations
     *           The list of Backup Plan Associations in the project for the specified
     *           location.
     *           If the `{location}` value in the request is "-", the response contains a
     *           list of instances from all locations. In case any location is unreachable,
     *           the response will only return backup plan associations in reachable
     *           locations and the 'unreachable' field will be populated with a list of
     *           unreachable locations.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupplanassociation::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of Backup Plan Associations in the project for the specified
     * location.
     * If the `{location}` value in the request is "-", the response contains a
     * list of instances from all locations. In case any location is unreachable,
     * the response will only return backup plan associations in reachable
     * locations and the 'unreachable' field will be populated with a list of
     * unreachable locations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupPlanAssociation backup_plan_associations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBackupPlanAssociations()
    {
        return $this->backup_plan_associations;
    }

    /**
     * The list of Backup Plan Associations in the project for the specified
     * location.
     * If the `{location}` value in the request is "-", the response contains a
     * list of instances from all locations. In case any location is unreachable,
     * the response will only return backup plan associations in reachable
     * locations and the 'unreachable' field will be populated with a list of
     * unreachable locations.
     *
     * Generated from protobuf field <code>repeated .google.cloud.backupdr.v1.BackupPlanAssociation backup_plan_associations = 1;</code>
     * @param array<\Google\Cloud\BackupDR\V1\BackupPlanAssociation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBackupPlanAssociations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BackupDR\V1\BackupPlanAssociation::class);
        $this->backup_plan_associations = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}
