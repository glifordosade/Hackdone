<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/service.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for "LivestreamService.CreateAsset".
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.CreateAssetRequest</code>
 */
class CreateAssetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location for the resource, in the form of:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The asset resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Asset asset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $asset = null;
    /**
     * Required. The ID of the asset resource to be created.
     * This value must be 1-63 characters, begin and end with `[a-z0-9]`,
     * could contain dashes (-) in between.
     *
     * Generated from protobuf field <code>string asset_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $asset_id = '';
    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';

    /**
     * @param string                                  $parent  Required. The parent location for the resource, in the form of:
     *                                                         `projects/{project}/locations/{location}`. Please see
     *                                                         {@see LivestreamServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Video\LiveStream\V1\Asset $asset   Required. The asset resource to be created.
     * @param string                                  $assetId Required. The ID of the asset resource to be created.
     *                                                         This value must be 1-63 characters, begin and end with `[a-z0-9]`,
     *                                                         could contain dashes (-) in between.
     *
     * @return \Google\Cloud\Video\LiveStream\V1\CreateAssetRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Video\LiveStream\V1\Asset $asset, string $assetId): self
    {
        return (new self())
            ->setParent($parent)
            ->setAsset($asset)
            ->setAssetId($assetId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent location for the resource, in the form of:
     *           `projects/{project}/locations/{location}`.
     *     @type \Google\Cloud\Video\LiveStream\V1\Asset $asset
     *           Required. The asset resource to be created.
     *     @type string $asset_id
     *           Required. The ID of the asset resource to be created.
     *           This value must be 1-63 characters, begin and end with `[a-z0-9]`,
     *           could contain dashes (-) in between.
     *     @type string $request_id
     *           A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported `(00000000-0000-0000-0000-000000000000)`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location for the resource, in the form of:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent location for the resource, in the form of:
     * `projects/{project}/locations/{location}`.
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
     * Required. The asset resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Asset asset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\LiveStream\V1\Asset|null
     */
    public function getAsset()
    {
        return $this->asset;
    }

    public function hasAsset()
    {
        return isset($this->asset);
    }

    public function clearAsset()
    {
        unset($this->asset);
    }

    /**
     * Required. The asset resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Asset asset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\LiveStream\V1\Asset $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\Asset::class);
        $this->asset = $var;

        return $this;
    }

    /**
     * Required. The ID of the asset resource to be created.
     * This value must be 1-63 characters, begin and end with `[a-z0-9]`,
     * could contain dashes (-) in between.
     *
     * Generated from protobuf field <code>string asset_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAssetId()
    {
        return $this->asset_id;
    }

    /**
     * Required. The ID of the asset resource to be created.
     * This value must be 1-63 characters, begin and end with `[a-z0-9]`,
     * could contain dashes (-) in between.
     *
     * Generated from protobuf field <code>string asset_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAssetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_id = $var;

        return $this;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
