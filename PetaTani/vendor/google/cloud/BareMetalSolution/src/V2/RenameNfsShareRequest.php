<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/nfs_share.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message requesting rename of a server.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.RenameNfsShareRequest</code>
 */
class RenameNfsShareRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `name` field is used to identify the nfsshare.
     * Format: projects/{project}/locations/{location}/nfsshares/{nfsshare}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The new `id` of the nfsshare.
     *
     * Generated from protobuf field <code>string new_nfsshare_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $new_nfsshare_id = '';

    /**
     * @param string $name          Required. The `name` field is used to identify the nfsshare.
     *                              Format: projects/{project}/locations/{location}/nfsshares/{nfsshare}
     *                              Please see {@see BareMetalSolutionClient::nFSShareName()} for help formatting this field.
     * @param string $newNfsshareId Required. The new `id` of the nfsshare.
     *
     * @return \Google\Cloud\BareMetalSolution\V2\RenameNfsShareRequest
     *
     * @experimental
     */
    public static function build(string $name, string $newNfsshareId): self
    {
        return (new self())
            ->setName($name)
            ->setNewNfsshareId($newNfsshareId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The `name` field is used to identify the nfsshare.
     *           Format: projects/{project}/locations/{location}/nfsshares/{nfsshare}
     *     @type string $new_nfsshare_id
     *           Required. The new `id` of the nfsshare.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\NfsShare::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `name` field is used to identify the nfsshare.
     * Format: projects/{project}/locations/{location}/nfsshares/{nfsshare}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The `name` field is used to identify the nfsshare.
     * Format: projects/{project}/locations/{location}/nfsshares/{nfsshare}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The new `id` of the nfsshare.
     *
     * Generated from protobuf field <code>string new_nfsshare_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNewNfsshareId()
    {
        return $this->new_nfsshare_id;
    }

    /**
     * Required. The new `id` of the nfsshare.
     *
     * Generated from protobuf field <code>string new_nfsshare_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNewNfsshareId($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_nfsshare_id = $var;

        return $this;
    }

}
