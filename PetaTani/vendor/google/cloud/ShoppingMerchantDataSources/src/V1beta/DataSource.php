<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/datasources/v1beta/datasources.proto

namespace Google\Shopping\Merchant\DataSources\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [data source](https://support.google.com/merchants/answer/7439058) for
 * the Merchant Center account.
 *
 * Generated from protobuf message <code>google.shopping.merchant.datasources.v1beta.DataSource</code>
 */
class DataSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the data source.
     * Format:
     * `{datasource.name=accounts/{account}/dataSources/{datasource}}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. The data source id.
     *
     * Generated from protobuf field <code>int64 data_source_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data_source_id = 0;
    /**
     * Required. The displayed data source name in the Merchant Center UI.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Output only. Determines the type of input to the data source. Based on the
     * input some settings might not work. Only generic data sources can be
     * created through the API.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.DataSource.Input input = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $input = 0;
    /**
     * Optional. The field is used only when data is managed through a file.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.FileInput file_input = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $file_input = null;
    protected $Type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Shopping\Merchant\DataSources\V1beta\PrimaryProductDataSource $primary_product_data_source
     *           Required. The [primary data
     *           source](https://support.google.com/merchants/answer/7439058) for local
     *           and online products.
     *     @type \Google\Shopping\Merchant\DataSources\V1beta\SupplementalProductDataSource $supplemental_product_data_source
     *           Required. The [supplemental data
     *           source](https://support.google.com/merchants/answer/7439058) for local
     *           and online products.
     *     @type \Google\Shopping\Merchant\DataSources\V1beta\LocalInventoryDataSource $local_inventory_data_source
     *           Required. The [local
     *           inventory](https://support.google.com/merchants/answer/7023001) data
     *           source.
     *     @type \Google\Shopping\Merchant\DataSources\V1beta\RegionalInventoryDataSource $regional_inventory_data_source
     *           Required. The [regional
     *           inventory](https://support.google.com/merchants/answer/7439058) data
     *           source.
     *     @type \Google\Shopping\Merchant\DataSources\V1beta\PromotionDataSource $promotion_data_source
     *           Required. The
     *           [promotion](https://support.google.com/merchants/answer/2906014) data
     *           source.
     *     @type string $name
     *           Identifier. The name of the data source.
     *           Format:
     *           `{datasource.name=accounts/{account}/dataSources/{datasource}}`
     *     @type int|string $data_source_id
     *           Output only. The data source id.
     *     @type string $display_name
     *           Required. The displayed data source name in the Merchant Center UI.
     *     @type int $input
     *           Output only. Determines the type of input to the data source. Based on the
     *           input some settings might not work. Only generic data sources can be
     *           created through the API.
     *     @type \Google\Shopping\Merchant\DataSources\V1beta\FileInput $file_input
     *           Optional. The field is used only when data is managed through a file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta\Datasources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [primary data
     * source](https://support.google.com/merchants/answer/7439058) for local
     * and online products.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.PrimaryProductDataSource primary_product_data_source = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\DataSources\V1beta\PrimaryProductDataSource|null
     */
    public function getPrimaryProductDataSource()
    {
        return $this->readOneof(4);
    }

    public function hasPrimaryProductDataSource()
    {
        return $this->hasOneof(4);
    }

    /**
     * Required. The [primary data
     * source](https://support.google.com/merchants/answer/7439058) for local
     * and online products.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.PrimaryProductDataSource primary_product_data_source = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\DataSources\V1beta\PrimaryProductDataSource $var
     * @return $this
     */
    public function setPrimaryProductDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\DataSources\V1beta\PrimaryProductDataSource::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Required. The [supplemental data
     * source](https://support.google.com/merchants/answer/7439058) for local
     * and online products.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.SupplementalProductDataSource supplemental_product_data_source = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\DataSources\V1beta\SupplementalProductDataSource|null
     */
    public function getSupplementalProductDataSource()
    {
        return $this->readOneof(5);
    }

    public function hasSupplementalProductDataSource()
    {
        return $this->hasOneof(5);
    }

    /**
     * Required. The [supplemental data
     * source](https://support.google.com/merchants/answer/7439058) for local
     * and online products.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.SupplementalProductDataSource supplemental_product_data_source = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\DataSources\V1beta\SupplementalProductDataSource $var
     * @return $this
     */
    public function setSupplementalProductDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\DataSources\V1beta\SupplementalProductDataSource::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Required. The [local
     * inventory](https://support.google.com/merchants/answer/7023001) data
     * source.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.LocalInventoryDataSource local_inventory_data_source = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\DataSources\V1beta\LocalInventoryDataSource|null
     */
    public function getLocalInventoryDataSource()
    {
        return $this->readOneof(6);
    }

    public function hasLocalInventoryDataSource()
    {
        return $this->hasOneof(6);
    }

    /**
     * Required. The [local
     * inventory](https://support.google.com/merchants/answer/7023001) data
     * source.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.LocalInventoryDataSource local_inventory_data_source = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\DataSources\V1beta\LocalInventoryDataSource $var
     * @return $this
     */
    public function setLocalInventoryDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\DataSources\V1beta\LocalInventoryDataSource::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Required. The [regional
     * inventory](https://support.google.com/merchants/answer/7439058) data
     * source.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.RegionalInventoryDataSource regional_inventory_data_source = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\DataSources\V1beta\RegionalInventoryDataSource|null
     */
    public function getRegionalInventoryDataSource()
    {
        return $this->readOneof(7);
    }

    public function hasRegionalInventoryDataSource()
    {
        return $this->hasOneof(7);
    }

    /**
     * Required. The [regional
     * inventory](https://support.google.com/merchants/answer/7439058) data
     * source.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.RegionalInventoryDataSource regional_inventory_data_source = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\DataSources\V1beta\RegionalInventoryDataSource $var
     * @return $this
     */
    public function setRegionalInventoryDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\DataSources\V1beta\RegionalInventoryDataSource::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Required. The
     * [promotion](https://support.google.com/merchants/answer/2906014) data
     * source.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.PromotionDataSource promotion_data_source = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\DataSources\V1beta\PromotionDataSource|null
     */
    public function getPromotionDataSource()
    {
        return $this->readOneof(8);
    }

    public function hasPromotionDataSource()
    {
        return $this->hasOneof(8);
    }

    /**
     * Required. The
     * [promotion](https://support.google.com/merchants/answer/2906014) data
     * source.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.PromotionDataSource promotion_data_source = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\DataSources\V1beta\PromotionDataSource $var
     * @return $this
     */
    public function setPromotionDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\DataSources\V1beta\PromotionDataSource::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Identifier. The name of the data source.
     * Format:
     * `{datasource.name=accounts/{account}/dataSources/{datasource}}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the data source.
     * Format:
     * `{datasource.name=accounts/{account}/dataSources/{datasource}}`
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
     * Output only. The data source id.
     *
     * Generated from protobuf field <code>int64 data_source_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getDataSourceId()
    {
        return $this->data_source_id;
    }

    /**
     * Output only. The data source id.
     *
     * Generated from protobuf field <code>int64 data_source_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataSourceId($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_source_id = $var;

        return $this;
    }

    /**
     * Required. The displayed data source name in the Merchant Center UI.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The displayed data source name in the Merchant Center UI.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. Determines the type of input to the data source. Based on the
     * input some settings might not work. Only generic data sources can be
     * created through the API.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.DataSource.Input input = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Output only. Determines the type of input to the data source. Based on the
     * input some settings might not work. Only generic data sources can be
     * created through the API.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.DataSource.Input input = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\DataSources\V1beta\DataSource\Input::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Optional. The field is used only when data is managed through a file.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.FileInput file_input = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Shopping\Merchant\DataSources\V1beta\FileInput|null
     */
    public function getFileInput()
    {
        return $this->file_input;
    }

    public function hasFileInput()
    {
        return isset($this->file_input);
    }

    public function clearFileInput()
    {
        unset($this->file_input);
    }

    /**
     * Optional. The field is used only when data is managed through a file.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.datasources.v1beta.FileInput file_input = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Shopping\Merchant\DataSources\V1beta\FileInput $var
     * @return $this
     */
    public function setFileInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\DataSources\V1beta\FileInput::class);
        $this->file_input = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("Type");
    }

}
