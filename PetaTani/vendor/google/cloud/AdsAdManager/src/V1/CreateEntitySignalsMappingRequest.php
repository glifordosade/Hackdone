<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/entity_signals_mapping_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request object for 'CreateEntitySignalsMapping' method.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.CreateEntitySignalsMappingRequest</code>
 */
class CreateEntitySignalsMappingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this EntitySignalsMapping will be
     * created. Format: `networks/{network_code}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The EntitySignalsMapping object to create.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.EntitySignalsMapping entity_signals_mapping = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entity_signals_mapping = null;

    /**
     * @param string                                        $parent               Required. The parent resource where this EntitySignalsMapping will be
     *                                                                            created. Format: `networks/{network_code}`
     *                                                                            Please see {@see EntitySignalsMappingServiceClient::networkName()} for help formatting this field.
     * @param \Google\Ads\AdManager\V1\EntitySignalsMapping $entitySignalsMapping Required. The EntitySignalsMapping object to create.
     *
     * @return \Google\Ads\AdManager\V1\CreateEntitySignalsMappingRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Ads\AdManager\V1\EntitySignalsMapping $entitySignalsMapping): self
    {
        return (new self())
            ->setParent($parent)
            ->setEntitySignalsMapping($entitySignalsMapping);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this EntitySignalsMapping will be
     *           created. Format: `networks/{network_code}`
     *     @type \Google\Ads\AdManager\V1\EntitySignalsMapping $entity_signals_mapping
     *           Required. The EntitySignalsMapping object to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\EntitySignalsMappingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this EntitySignalsMapping will be
     * created. Format: `networks/{network_code}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this EntitySignalsMapping will be
     * created. Format: `networks/{network_code}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The EntitySignalsMapping object to create.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.EntitySignalsMapping entity_signals_mapping = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\AdManager\V1\EntitySignalsMapping|null
     */
    public function getEntitySignalsMapping()
    {
        return $this->entity_signals_mapping;
    }

    public function hasEntitySignalsMapping()
    {
        return isset($this->entity_signals_mapping);
    }

    public function clearEntitySignalsMapping()
    {
        unset($this->entity_signals_mapping);
    }

    /**
     * Required. The EntitySignalsMapping object to create.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.EntitySignalsMapping entity_signals_mapping = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\AdManager\V1\EntitySignalsMapping $var
     * @return $this
     */
    public function setEntitySignalsMapping($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\EntitySignalsMapping::class);
        $this->entity_signals_mapping = $var;

        return $this;
    }

}
