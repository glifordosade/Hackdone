<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/promotions/v1beta/promotions.proto

namespace Google\Shopping\Merchant\Promotions\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a promotion. See the following articles for more details.
 * Required promotion input attributes to pass data validation checks are
 * primarily defined below:
 * * [Promotions data
 * specification](https://support.google.com/merchants/answer/2906014)
 * * [Local promotions data
 * specification](https://support.google.com/merchants/answer/10146130)
 * After inserting, updating a promotion input, it may take several minutes
 * before the final promotion can be retrieved.
 *
 * Generated from protobuf message <code>google.shopping.merchant.promotions.v1beta.Promotion</code>
 */
class Promotion extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the promotion.
     * Format: `accounts/{account}/promotions/{promotion}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. The user provided promotion ID to uniquely identify the
     * promotion. Follow [minimum
     * requirements](https://support.google.com/merchants/answer/7050148?ref_topic=7322920&sjid=871860036916537104-NC#minimum_requirements)
     * to prevent promotion disapprovals.
     *
     * Generated from protobuf field <code>string promotion_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $promotion_id = '';
    /**
     * Required. The two-letter [ISO
     * 639-1](http://en.wikipedia.org/wiki/ISO_639-1) language code for the
     * promotion.
     * Promotions is only for [selected
     * languages](https://support.google.com/merchants/answer/4588281?ref_topic=6396150&sjid=18314938579342094533-NC#option3&zippy=).
     *
     * Generated from protobuf field <code>string content_language = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $content_language = '';
    /**
     * Required. The target country used as part of the unique identifier.
     * Represented as a [CLDR territory
     * code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml).
     * Promotions are only available in selected
     * countries, [Free Listings and Shopping
     * ads](https://support.google.com/merchants/answer/4588460) [Local Inventory
     * ads](https://support.google.com/merchants/answer/10146326)
     *
     * Generated from protobuf field <code>string target_country = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_country = '';
    /**
     * Required. [Redemption
     * channel](https://support.google.com/merchants/answer/13837674?ref_topic=13773355&sjid=17642868584668136159-NC)
     * for the promotion. At least one channel is required.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.promotions.v1beta.RedemptionChannel redemption_channel = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $redemption_channel;
    /**
     * Output only. The primary data source of the promotion.
     *
     * Generated from protobuf field <code>string data_source = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data_source = '';
    /**
     * Optional. A list of promotion attributes.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.promotions.v1beta.Attributes attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $attributes = null;
    /**
     * Optional. A list of custom (merchant-provided) attributes. It can also be
     * used for submitting any attribute of the data specification in its generic
     * form (for example,
     * `{ "name": "size type", "value": "regular" }`).
     * This is useful for submitting attributes not explicitly exposed by the
     * API.
     *
     * Generated from protobuf field <code>repeated .google.shopping.type.CustomAttribute custom_attributes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $custom_attributes;
    /**
     * Output only. The [status of a
     * promotion](https://support.google.com/merchants/answer/3398326?ref_topic=7322924&sjid=5155774230887277618-NC),
     * data validation issues, that is, information about a promotion computed
     * asynchronously.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.promotions.v1beta.PromotionStatus promotion_status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $promotion_status = null;
    /**
     * Optional. Represents the existing version (freshness) of the promotion,
     * which can be used to preserve the right order when multiple updates are
     * done at the same time.
     * If set, the insertion is prevented when version number is lower than
     * the current version number of the existing promotion. Re-insertion (for
     * example, promotion refresh after 30 days) can be performed with the current
     * `version_number`.
     * If the operation is prevented, the aborted exception will be
     * thrown.
     *
     * Generated from protobuf field <code>optional int64 version_number = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $version_number = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of the promotion.
     *           Format: `accounts/{account}/promotions/{promotion}`
     *     @type string $promotion_id
     *           Required. The user provided promotion ID to uniquely identify the
     *           promotion. Follow [minimum
     *           requirements](https://support.google.com/merchants/answer/7050148?ref_topic=7322920&sjid=871860036916537104-NC#minimum_requirements)
     *           to prevent promotion disapprovals.
     *     @type string $content_language
     *           Required. The two-letter [ISO
     *           639-1](http://en.wikipedia.org/wiki/ISO_639-1) language code for the
     *           promotion.
     *           Promotions is only for [selected
     *           languages](https://support.google.com/merchants/answer/4588281?ref_topic=6396150&sjid=18314938579342094533-NC#option3&zippy=).
     *     @type string $target_country
     *           Required. The target country used as part of the unique identifier.
     *           Represented as a [CLDR territory
     *           code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml).
     *           Promotions are only available in selected
     *           countries, [Free Listings and Shopping
     *           ads](https://support.google.com/merchants/answer/4588460) [Local Inventory
     *           ads](https://support.google.com/merchants/answer/10146326)
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $redemption_channel
     *           Required. [Redemption
     *           channel](https://support.google.com/merchants/answer/13837674?ref_topic=13773355&sjid=17642868584668136159-NC)
     *           for the promotion. At least one channel is required.
     *     @type string $data_source
     *           Output only. The primary data source of the promotion.
     *     @type \Google\Shopping\Merchant\Promotions\V1beta\Attributes $attributes
     *           Optional. A list of promotion attributes.
     *     @type array<\Google\Shopping\Type\CustomAttribute>|\Google\Protobuf\Internal\RepeatedField $custom_attributes
     *           Optional. A list of custom (merchant-provided) attributes. It can also be
     *           used for submitting any attribute of the data specification in its generic
     *           form (for example,
     *           `{ "name": "size type", "value": "regular" }`).
     *           This is useful for submitting attributes not explicitly exposed by the
     *           API.
     *     @type \Google\Shopping\Merchant\Promotions\V1beta\PromotionStatus $promotion_status
     *           Output only. The [status of a
     *           promotion](https://support.google.com/merchants/answer/3398326?ref_topic=7322924&sjid=5155774230887277618-NC),
     *           data validation issues, that is, information about a promotion computed
     *           asynchronously.
     *     @type int|string $version_number
     *           Optional. Represents the existing version (freshness) of the promotion,
     *           which can be used to preserve the right order when multiple updates are
     *           done at the same time.
     *           If set, the insertion is prevented when version number is lower than
     *           the current version number of the existing promotion. Re-insertion (for
     *           example, promotion refresh after 30 days) can be performed with the current
     *           `version_number`.
     *           If the operation is prevented, the aborted exception will be
     *           thrown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Promotions\V1Beta\Promotions::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of the promotion.
     * Format: `accounts/{account}/promotions/{promotion}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the promotion.
     * Format: `accounts/{account}/promotions/{promotion}`
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
     * Required. The user provided promotion ID to uniquely identify the
     * promotion. Follow [minimum
     * requirements](https://support.google.com/merchants/answer/7050148?ref_topic=7322920&sjid=871860036916537104-NC#minimum_requirements)
     * to prevent promotion disapprovals.
     *
     * Generated from protobuf field <code>string promotion_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPromotionId()
    {
        return $this->promotion_id;
    }

    /**
     * Required. The user provided promotion ID to uniquely identify the
     * promotion. Follow [minimum
     * requirements](https://support.google.com/merchants/answer/7050148?ref_topic=7322920&sjid=871860036916537104-NC#minimum_requirements)
     * to prevent promotion disapprovals.
     *
     * Generated from protobuf field <code>string promotion_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPromotionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->promotion_id = $var;

        return $this;
    }

    /**
     * Required. The two-letter [ISO
     * 639-1](http://en.wikipedia.org/wiki/ISO_639-1) language code for the
     * promotion.
     * Promotions is only for [selected
     * languages](https://support.google.com/merchants/answer/4588281?ref_topic=6396150&sjid=18314938579342094533-NC#option3&zippy=).
     *
     * Generated from protobuf field <code>string content_language = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getContentLanguage()
    {
        return $this->content_language;
    }

    /**
     * Required. The two-letter [ISO
     * 639-1](http://en.wikipedia.org/wiki/ISO_639-1) language code for the
     * promotion.
     * Promotions is only for [selected
     * languages](https://support.google.com/merchants/answer/4588281?ref_topic=6396150&sjid=18314938579342094533-NC#option3&zippy=).
     *
     * Generated from protobuf field <code>string content_language = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setContentLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_language = $var;

        return $this;
    }

    /**
     * Required. The target country used as part of the unique identifier.
     * Represented as a [CLDR territory
     * code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml).
     * Promotions are only available in selected
     * countries, [Free Listings and Shopping
     * ads](https://support.google.com/merchants/answer/4588460) [Local Inventory
     * ads](https://support.google.com/merchants/answer/10146326)
     *
     * Generated from protobuf field <code>string target_country = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetCountry()
    {
        return $this->target_country;
    }

    /**
     * Required. The target country used as part of the unique identifier.
     * Represented as a [CLDR territory
     * code](https://github.com/unicode-org/cldr/blob/latest/common/main/en.xml).
     * Promotions are only available in selected
     * countries, [Free Listings and Shopping
     * ads](https://support.google.com/merchants/answer/4588460) [Local Inventory
     * ads](https://support.google.com/merchants/answer/10146326)
     *
     * Generated from protobuf field <code>string target_country = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_country = $var;

        return $this;
    }

    /**
     * Required. [Redemption
     * channel](https://support.google.com/merchants/answer/13837674?ref_topic=13773355&sjid=17642868584668136159-NC)
     * for the promotion. At least one channel is required.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.promotions.v1beta.RedemptionChannel redemption_channel = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRedemptionChannel()
    {
        return $this->redemption_channel;
    }

    /**
     * Required. [Redemption
     * channel](https://support.google.com/merchants/answer/13837674?ref_topic=13773355&sjid=17642868584668136159-NC)
     * for the promotion. At least one channel is required.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.promotions.v1beta.RedemptionChannel redemption_channel = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRedemptionChannel($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Shopping\Merchant\Promotions\V1beta\RedemptionChannel::class);
        $this->redemption_channel = $arr;

        return $this;
    }

    /**
     * Output only. The primary data source of the promotion.
     *
     * Generated from protobuf field <code>string data_source = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDataSource()
    {
        return $this->data_source;
    }

    /**
     * Output only. The primary data source of the promotion.
     *
     * Generated from protobuf field <code>string data_source = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDataSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_source = $var;

        return $this;
    }

    /**
     * Optional. A list of promotion attributes.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.promotions.v1beta.Attributes attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Shopping\Merchant\Promotions\V1beta\Attributes|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    public function hasAttributes()
    {
        return isset($this->attributes);
    }

    public function clearAttributes()
    {
        unset($this->attributes);
    }

    /**
     * Optional. A list of promotion attributes.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.promotions.v1beta.Attributes attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Shopping\Merchant\Promotions\V1beta\Attributes $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Promotions\V1beta\Attributes::class);
        $this->attributes = $var;

        return $this;
    }

    /**
     * Optional. A list of custom (merchant-provided) attributes. It can also be
     * used for submitting any attribute of the data specification in its generic
     * form (for example,
     * `{ "name": "size type", "value": "regular" }`).
     * This is useful for submitting attributes not explicitly exposed by the
     * API.
     *
     * Generated from protobuf field <code>repeated .google.shopping.type.CustomAttribute custom_attributes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomAttributes()
    {
        return $this->custom_attributes;
    }

    /**
     * Optional. A list of custom (merchant-provided) attributes. It can also be
     * used for submitting any attribute of the data specification in its generic
     * form (for example,
     * `{ "name": "size type", "value": "regular" }`).
     * This is useful for submitting attributes not explicitly exposed by the
     * API.
     *
     * Generated from protobuf field <code>repeated .google.shopping.type.CustomAttribute custom_attributes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Shopping\Type\CustomAttribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Type\CustomAttribute::class);
        $this->custom_attributes = $arr;

        return $this;
    }

    /**
     * Output only. The [status of a
     * promotion](https://support.google.com/merchants/answer/3398326?ref_topic=7322924&sjid=5155774230887277618-NC),
     * data validation issues, that is, information about a promotion computed
     * asynchronously.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.promotions.v1beta.PromotionStatus promotion_status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Shopping\Merchant\Promotions\V1beta\PromotionStatus|null
     */
    public function getPromotionStatus()
    {
        return $this->promotion_status;
    }

    public function hasPromotionStatus()
    {
        return isset($this->promotion_status);
    }

    public function clearPromotionStatus()
    {
        unset($this->promotion_status);
    }

    /**
     * Output only. The [status of a
     * promotion](https://support.google.com/merchants/answer/3398326?ref_topic=7322924&sjid=5155774230887277618-NC),
     * data validation issues, that is, information about a promotion computed
     * asynchronously.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.promotions.v1beta.PromotionStatus promotion_status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Shopping\Merchant\Promotions\V1beta\PromotionStatus $var
     * @return $this
     */
    public function setPromotionStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Promotions\V1beta\PromotionStatus::class);
        $this->promotion_status = $var;

        return $this;
    }

    /**
     * Optional. Represents the existing version (freshness) of the promotion,
     * which can be used to preserve the right order when multiple updates are
     * done at the same time.
     * If set, the insertion is prevented when version number is lower than
     * the current version number of the existing promotion. Re-insertion (for
     * example, promotion refresh after 30 days) can be performed with the current
     * `version_number`.
     * If the operation is prevented, the aborted exception will be
     * thrown.
     *
     * Generated from protobuf field <code>optional int64 version_number = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getVersionNumber()
    {
        return isset($this->version_number) ? $this->version_number : 0;
    }

    public function hasVersionNumber()
    {
        return isset($this->version_number);
    }

    public function clearVersionNumber()
    {
        unset($this->version_number);
    }

    /**
     * Optional. Represents the existing version (freshness) of the promotion,
     * which can be used to preserve the right order when multiple updates are
     * done at the same time.
     * If set, the insertion is prevented when version number is lower than
     * the current version number of the existing promotion. Re-insertion (for
     * example, promotion refresh after 30 days) can be performed with the current
     * `version_number`.
     * If the operation is prevented, the aborted exception will be
     * thrown.
     *
     * Generated from protobuf field <code>optional int64 version_number = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersionNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->version_number = $var;

        return $this;
    }

}
