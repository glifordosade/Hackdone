<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/google_channel_config.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A GoogleChannelConfig is a resource that stores the custom settings
 * respected by Eventarc first-party triggers in the matching region.
 * Once configured, first-party event data will be protected
 * using the specified custom managed encryption key instead of Google-managed
 * encryption keys.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.GoogleChannelConfig</code>
 */
class GoogleChannelConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the config. Must be in the format of,
     * `projects/{project}/locations/{location}/googleChannelConfig`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Resource name of a KMS crypto key (managed by the user) used to
     * encrypt/decrypt their event data.
     * It must match the pattern
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string crypto_key_name = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $crypto_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the config. Must be in the format of,
     *           `projects/{project}/locations/{location}/googleChannelConfig`.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type string $crypto_key_name
     *           Optional. Resource name of a KMS crypto key (managed by the user) used to
     *           encrypt/decrypt their event data.
     *           It must match the pattern
     *           `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\GoogleChannelConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the config. Must be in the format of,
     * `projects/{project}/locations/{location}/googleChannelConfig`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the config. Must be in the format of,
     * `projects/{project}/locations/{location}/googleChannelConfig`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Resource name of a KMS crypto key (managed by the user) used to
     * encrypt/decrypt their event data.
     * It must match the pattern
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string crypto_key_name = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCryptoKeyName()
    {
        return $this->crypto_key_name;
    }

    /**
     * Optional. Resource name of a KMS crypto key (managed by the user) used to
     * encrypt/decrypt their event data.
     * It must match the pattern
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string crypto_key_name = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_name = $var;

        return $this;
    }

}
