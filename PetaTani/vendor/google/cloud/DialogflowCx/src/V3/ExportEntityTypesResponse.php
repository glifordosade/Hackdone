<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [EntityTypes.ExportEntityTypes][google.cloud.dialogflow.cx.v3.EntityTypes.ExportEntityTypes].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ExportEntityTypesResponse</code>
 */
class ExportEntityTypesResponse extends \Google\Protobuf\Internal\Message
{
    protected $exported_entity_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_types_uri
     *           The URI to a file containing the exported entity types. This field is
     *           populated only if `entity_types_uri` is specified in
     *           [ExportEntityTypesRequest][google.cloud.dialogflow.cx.v3.ExportEntityTypesRequest].
     *     @type \Google\Cloud\Dialogflow\Cx\V3\InlineDestination $entity_types_content
     *           Uncompressed byte content for entity types. This field is populated only
     *           if `entity_types_content_inline` is set to true in
     *           [ExportEntityTypesRequest][google.cloud.dialogflow.cx.v3.ExportEntityTypesRequest].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI to a file containing the exported entity types. This field is
     * populated only if `entity_types_uri` is specified in
     * [ExportEntityTypesRequest][google.cloud.dialogflow.cx.v3.ExportEntityTypesRequest].
     *
     * Generated from protobuf field <code>string entity_types_uri = 1;</code>
     * @return string
     */
    public function getEntityTypesUri()
    {
        return $this->readOneof(1);
    }

    public function hasEntityTypesUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * The URI to a file containing the exported entity types. This field is
     * populated only if `entity_types_uri` is specified in
     * [ExportEntityTypesRequest][google.cloud.dialogflow.cx.v3.ExportEntityTypesRequest].
     *
     * Generated from protobuf field <code>string entity_types_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityTypesUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Uncompressed byte content for entity types. This field is populated only
     * if `entity_types_content_inline` is set to true in
     * [ExportEntityTypesRequest][google.cloud.dialogflow.cx.v3.ExportEntityTypesRequest].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.InlineDestination entity_types_content = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\InlineDestination|null
     */
    public function getEntityTypesContent()
    {
        return $this->readOneof(2);
    }

    public function hasEntityTypesContent()
    {
        return $this->hasOneof(2);
    }

    /**
     * Uncompressed byte content for entity types. This field is populated only
     * if `entity_types_content_inline` is set to true in
     * [ExportEntityTypesRequest][google.cloud.dialogflow.cx.v3.ExportEntityTypesRequest].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.InlineDestination entity_types_content = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\InlineDestination $var
     * @return $this
     */
    public function setEntityTypesContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\InlineDestination::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getExportedEntityTypes()
    {
        return $this->whichOneof("exported_entity_types");
    }

}
