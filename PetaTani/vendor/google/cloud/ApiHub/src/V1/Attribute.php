<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An attribute in the API Hub.
 * An attribute is a name value pair which can be attached to different
 * resources in the API hub based on the scope of the attribute. Attributes can
 * either be pre-defined by the API Hub or created by users.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.Attribute</code>
 */
class Attribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the attribute in the API Hub.
     * Format:
     * `projects/{project}/locations/{location}/attributes/{attribute}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the attribute.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. The description of the attribute.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. The definition type of the attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.DefinitionType definition_type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $definition_type = 0;
    /**
     * Required. The scope of the attribute. It represents the resource in the API
     * Hub to which the attribute can be linked.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.Scope scope = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $scope = 0;
    /**
     * Required. The type of the data of the attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.DataType data_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_type = 0;
    /**
     * Optional. The list of allowed values when the attribute value is of type
     * enum. This is required when the data_type of the attribute is ENUM. The
     * maximum number of allowed values of an attribute will be 1000.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Attribute.AllowedValue allowed_values = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_values;
    /**
     * Optional. The maximum number of values that the attribute can have when
     * associated with an API Hub resource. Cardinality 1 would represent a
     * single-valued attribute. It must not be less than 1 or greater than 20. If
     * not specified, the cardinality would be set to 1 by default and represent a
     * single-valued attribute.
     *
     * Generated from protobuf field <code>int32 cardinality = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cardinality = 0;
    /**
     * Output only. When mandatory is true, the attribute is mandatory for the
     * resource specified in the scope. Only System defined attributes can be
     * mandatory.
     *
     * Generated from protobuf field <code>bool mandatory = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $mandatory = false;
    /**
     * Output only. The time at which the attribute was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which the attribute was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of the attribute in the API Hub.
     *           Format:
     *           `projects/{project}/locations/{location}/attributes/{attribute}`
     *     @type string $display_name
     *           Required. The display name of the attribute.
     *     @type string $description
     *           Optional. The description of the attribute.
     *     @type int $definition_type
     *           Output only. The definition type of the attribute.
     *     @type int $scope
     *           Required. The scope of the attribute. It represents the resource in the API
     *           Hub to which the attribute can be linked.
     *     @type int $data_type
     *           Required. The type of the data of the attribute.
     *     @type array<\Google\Cloud\ApiHub\V1\Attribute\AllowedValue>|\Google\Protobuf\Internal\RepeatedField $allowed_values
     *           Optional. The list of allowed values when the attribute value is of type
     *           enum. This is required when the data_type of the attribute is ENUM. The
     *           maximum number of allowed values of an attribute will be 1000.
     *     @type int $cardinality
     *           Optional. The maximum number of values that the attribute can have when
     *           associated with an API Hub resource. Cardinality 1 would represent a
     *           single-valued attribute. It must not be less than 1 or greater than 20. If
     *           not specified, the cardinality would be set to 1 by default and represent a
     *           single-valued attribute.
     *     @type bool $mandatory
     *           Output only. When mandatory is true, the attribute is mandatory for the
     *           resource specified in the scope. Only System defined attributes can be
     *           mandatory.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the attribute was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which the attribute was last updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\CommonFields::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of the attribute in the API Hub.
     * Format:
     * `projects/{project}/locations/{location}/attributes/{attribute}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the attribute in the API Hub.
     * Format:
     * `projects/{project}/locations/{location}/attributes/{attribute}`
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
     * Required. The display name of the attribute.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the attribute.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. The description of the attribute.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the attribute.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The definition type of the attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.DefinitionType definition_type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDefinitionType()
    {
        return $this->definition_type;
    }

    /**
     * Output only. The definition type of the attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.DefinitionType definition_type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDefinitionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Attribute\DefinitionType::class);
        $this->definition_type = $var;

        return $this;
    }

    /**
     * Required. The scope of the attribute. It represents the resource in the API
     * Hub to which the attribute can be linked.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.Scope scope = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. The scope of the attribute. It represents the resource in the API
     * Hub to which the attribute can be linked.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.Scope scope = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Attribute\Scope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Required. The type of the data of the attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.DataType data_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Required. The type of the data of the attribute.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute.DataType data_type = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Attribute\DataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Optional. The list of allowed values when the attribute value is of type
     * enum. This is required when the data_type of the attribute is ENUM. The
     * maximum number of allowed values of an attribute will be 1000.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Attribute.AllowedValue allowed_values = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedValues()
    {
        return $this->allowed_values;
    }

    /**
     * Optional. The list of allowed values when the attribute value is of type
     * enum. This is required when the data_type of the attribute is ENUM. The
     * maximum number of allowed values of an attribute will be 1000.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Attribute.AllowedValue allowed_values = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\ApiHub\V1\Attribute\AllowedValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApiHub\V1\Attribute\AllowedValue::class);
        $this->allowed_values = $arr;

        return $this;
    }

    /**
     * Optional. The maximum number of values that the attribute can have when
     * associated with an API Hub resource. Cardinality 1 would represent a
     * single-valued attribute. It must not be less than 1 or greater than 20. If
     * not specified, the cardinality would be set to 1 by default and represent a
     * single-valued attribute.
     *
     * Generated from protobuf field <code>int32 cardinality = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCardinality()
    {
        return $this->cardinality;
    }

    /**
     * Optional. The maximum number of values that the attribute can have when
     * associated with an API Hub resource. Cardinality 1 would represent a
     * single-valued attribute. It must not be less than 1 or greater than 20. If
     * not specified, the cardinality would be set to 1 by default and represent a
     * single-valued attribute.
     *
     * Generated from protobuf field <code>int32 cardinality = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCardinality($var)
    {
        GPBUtil::checkInt32($var);
        $this->cardinality = $var;

        return $this;
    }

    /**
     * Output only. When mandatory is true, the attribute is mandatory for the
     * resource specified in the scope. Only System defined attributes can be
     * mandatory.
     *
     * Generated from protobuf field <code>bool mandatory = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Output only. When mandatory is true, the attribute is mandatory for the
     * resource specified in the scope. Only System defined attributes can be
     * mandatory.
     *
     * Generated from protobuf field <code>bool mandatory = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setMandatory($var)
    {
        GPBUtil::checkBool($var);
        $this->mandatory = $var;

        return $this;
    }

    /**
     * Output only. The time at which the attribute was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the attribute was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which the attribute was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the attribute was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}
