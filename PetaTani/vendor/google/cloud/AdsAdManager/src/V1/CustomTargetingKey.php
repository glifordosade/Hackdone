<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/custom_targeting_key_messages.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `CustomTargetingKey` resource.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.CustomTargetingKey</code>
 */
class CustomTargetingKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the `CustomTargetingKey`.
     * Format:
     * `networks/{network_code}/customTargetingKeys/{custom_targeting_key_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. `CustomTargetingKey` ID.
     *
     * Generated from protobuf field <code>int64 custom_targeting_key_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $custom_targeting_key_id = 0;
    /**
     * Immutable. Name of the key. Keys can contain up to 10 characters each. You
     * can use alphanumeric characters and symbols other than the following:
     * ", ', =, !, +, #, *, ~, ;, ^, (, ), <, >, [, ], the white space character.
     *
     * Generated from protobuf field <code>string ad_tag_name = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $ad_tag_name = '';
    /**
     * Optional. Descriptive name for the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Required. Indicates whether users will select from predefined values or
     * create new targeting values, while specifying targeting criteria for a line
     * item.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyTypeEnum.CustomTargetingKeyType type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Output only. Status of the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyStatusEnum.CustomTargetingKeyStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Required. Reportable state of the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyReportableTypeEnum.CustomTargetingKeyReportableType reportable_type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $reportable_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the `CustomTargetingKey`.
     *           Format:
     *           `networks/{network_code}/customTargetingKeys/{custom_targeting_key_id}`
     *     @type int|string $custom_targeting_key_id
     *           Output only. `CustomTargetingKey` ID.
     *     @type string $ad_tag_name
     *           Immutable. Name of the key. Keys can contain up to 10 characters each. You
     *           can use alphanumeric characters and symbols other than the following:
     *           ", ', =, !, +, #, *, ~, ;, ^, (, ), <, >, [, ], the white space character.
     *     @type string $display_name
     *           Optional. Descriptive name for the `CustomTargetingKey`.
     *     @type int $type
     *           Required. Indicates whether users will select from predefined values or
     *           create new targeting values, while specifying targeting criteria for a line
     *           item.
     *     @type int $status
     *           Output only. Status of the `CustomTargetingKey`.
     *     @type int $reportable_type
     *           Required. Reportable state of the `CustomTargetingKey`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\CustomTargetingKeyMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the `CustomTargetingKey`.
     * Format:
     * `networks/{network_code}/customTargetingKeys/{custom_targeting_key_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the `CustomTargetingKey`.
     * Format:
     * `networks/{network_code}/customTargetingKeys/{custom_targeting_key_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. `CustomTargetingKey` ID.
     *
     * Generated from protobuf field <code>int64 custom_targeting_key_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCustomTargetingKeyId()
    {
        return $this->custom_targeting_key_id;
    }

    /**
     * Output only. `CustomTargetingKey` ID.
     *
     * Generated from protobuf field <code>int64 custom_targeting_key_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCustomTargetingKeyId($var)
    {
        GPBUtil::checkInt64($var);
        $this->custom_targeting_key_id = $var;

        return $this;
    }

    /**
     * Immutable. Name of the key. Keys can contain up to 10 characters each. You
     * can use alphanumeric characters and symbols other than the following:
     * ", ', =, !, +, #, *, ~, ;, ^, (, ), <, >, [, ], the white space character.
     *
     * Generated from protobuf field <code>string ad_tag_name = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getAdTagName()
    {
        return $this->ad_tag_name;
    }

    /**
     * Immutable. Name of the key. Keys can contain up to 10 characters each. You
     * can use alphanumeric characters and symbols other than the following:
     * ", ', =, !, +, #, *, ~, ;, ^, (, ), <, >, [, ], the white space character.
     *
     * Generated from protobuf field <code>string ad_tag_name = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setAdTagName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_tag_name = $var;

        return $this;
    }

    /**
     * Optional. Descriptive name for the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. Descriptive name for the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Indicates whether users will select from predefined values or
     * create new targeting values, while specifying targeting criteria for a line
     * item.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyTypeEnum.CustomTargetingKeyType type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Indicates whether users will select from predefined values or
     * create new targeting values, while specifying targeting criteria for a line
     * item.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyTypeEnum.CustomTargetingKeyType type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\CustomTargetingKeyTypeEnum\CustomTargetingKeyType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. Status of the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyStatusEnum.CustomTargetingKeyStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyStatusEnum.CustomTargetingKeyStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\CustomTargetingKeyStatusEnum\CustomTargetingKeyStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Required. Reportable state of the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyReportableTypeEnum.CustomTargetingKeyReportableType reportable_type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getReportableType()
    {
        return $this->reportable_type;
    }

    /**
     * Required. Reportable state of the `CustomTargetingKey`.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.CustomTargetingKeyReportableTypeEnum.CustomTargetingKeyReportableType reportable_type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setReportableType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\CustomTargetingKeyReportableTypeEnum\CustomTargetingKeyReportableType::class);
        $this->reportable_type = $var;

        return $this;
    }

}
