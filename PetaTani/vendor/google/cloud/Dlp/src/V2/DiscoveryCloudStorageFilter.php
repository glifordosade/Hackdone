<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Determines which buckets will have profiles generated within an organization
 * or project. Includes the ability to filter by regular expression patterns
 * on project ID and bucket name.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryCloudStorageFilter</code>
 */
class DiscoveryCloudStorageFilter extends \Google\Protobuf\Internal\Message
{
    protected $filter;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\FileStoreCollection $collection
     *           Optional. A specific set of buckets for this filter to apply to.
     *     @type \Google\Cloud\Dlp\V2\CloudStorageResourceReference $cloud_storage_resource_reference
     *           Optional. The bucket to scan. Targets including this can only include one
     *           target (the target with this bucket). This enables profiling the contents
     *           of a single bucket, while the other options allow for easy profiling of
     *           many bucets within a project or an organization.
     *     @type \Google\Cloud\Dlp\V2\AllOtherResources $others
     *           Optional. Catch-all. This should always be the last target in the list
     *           because anything above it will apply first. Should only appear once in a
     *           configuration. If none is specified, a default one will be added
     *           automatically.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A specific set of buckets for this filter to apply to.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileStoreCollection collection = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dlp\V2\FileStoreCollection|null
     */
    public function getCollection()
    {
        return $this->readOneof(1);
    }

    public function hasCollection()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. A specific set of buckets for this filter to apply to.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileStoreCollection collection = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dlp\V2\FileStoreCollection $var
     * @return $this
     */
    public function setCollection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FileStoreCollection::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. The bucket to scan. Targets including this can only include one
     * target (the target with this bucket). This enables profiling the contents
     * of a single bucket, while the other options allow for easy profiling of
     * many bucets within a project or an organization.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageResourceReference cloud_storage_resource_reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dlp\V2\CloudStorageResourceReference|null
     */
    public function getCloudStorageResourceReference()
    {
        return $this->readOneof(2);
    }

    public function hasCloudStorageResourceReference()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. The bucket to scan. Targets including this can only include one
     * target (the target with this bucket). This enables profiling the contents
     * of a single bucket, while the other options allow for easy profiling of
     * many bucets within a project or an organization.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudStorageResourceReference cloud_storage_resource_reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dlp\V2\CloudStorageResourceReference $var
     * @return $this
     */
    public function setCloudStorageResourceReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CloudStorageResourceReference::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. Catch-all. This should always be the last target in the list
     * because anything above it will apply first. Should only appear once in a
     * configuration. If none is specified, a default one will be added
     * automatically.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AllOtherResources others = 100 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dlp\V2\AllOtherResources|null
     */
    public function getOthers()
    {
        return $this->readOneof(100);
    }

    public function hasOthers()
    {
        return $this->hasOneof(100);
    }

    /**
     * Optional. Catch-all. This should always be the last target in the list
     * because anything above it will apply first. Should only appear once in a
     * configuration. If none is specified, a default one will be added
     * automatically.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.AllOtherResources others = 100 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dlp\V2\AllOtherResources $var
     * @return $this
     */
    public function setOthers($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\AllOtherResources::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
        return $this->whichOneof("filter");
    }

}
