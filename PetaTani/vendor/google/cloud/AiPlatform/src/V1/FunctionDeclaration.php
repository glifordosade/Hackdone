<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Structured representation of a function declaration as defined by the
 * [OpenAPI 3.0 specification](https://spec.openapis.org/oas/v3.0.3). Included
 * in this declaration are the function name, description, parameters and
 * response type. This FunctionDeclaration is a representation of a block of
 * code that can be used as a `Tool` by the model and executed by the client.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FunctionDeclaration</code>
 */
class FunctionDeclaration extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the function to call.
     * Must start with a letter or an underscore.
     * Must be a-z, A-Z, 0-9, or contain underscores, dots and dashes, with a
     * maximum length of 64.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Optional. Description and purpose of the function.
     * Model uses it to decide how and whether to call the function.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Describes the parameters to this function in JSON Schema Object
     * format. Reflects the Open API 3.03 Parameter Object. string Key: the name
     * of the parameter. Parameter names are case sensitive. Schema Value: the
     * Schema defining the type used for the parameter. For function with no
     * parameters, this can be left unset. Parameter names must start with a
     * letter or an underscore and must only contain chars a-z, A-Z, 0-9, or
     * underscores with a maximum length of 64. Example with 1 required and 1
     * optional parameter: type: OBJECT properties:
     *  param1:
     *    type: STRING
     *  param2:
     *    type: INTEGER
     * required:
     *  - param1
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema parameters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $parameters = null;
    /**
     * Optional. Describes the output from this function in JSON Schema format.
     * Reflects the Open API 3.03 Response Object. The Schema defines the type
     * used for the response value of the function.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema response = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $response = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the function to call.
     *           Must start with a letter or an underscore.
     *           Must be a-z, A-Z, 0-9, or contain underscores, dots and dashes, with a
     *           maximum length of 64.
     *     @type string $description
     *           Optional. Description and purpose of the function.
     *           Model uses it to decide how and whether to call the function.
     *     @type \Google\Cloud\AIPlatform\V1\Schema $parameters
     *           Optional. Describes the parameters to this function in JSON Schema Object
     *           format. Reflects the Open API 3.03 Parameter Object. string Key: the name
     *           of the parameter. Parameter names are case sensitive. Schema Value: the
     *           Schema defining the type used for the parameter. For function with no
     *           parameters, this can be left unset. Parameter names must start with a
     *           letter or an underscore and must only contain chars a-z, A-Z, 0-9, or
     *           underscores with a maximum length of 64. Example with 1 required and 1
     *           optional parameter: type: OBJECT properties:
     *            param1:
     *              type: STRING
     *            param2:
     *              type: INTEGER
     *           required:
     *            - param1
     *     @type \Google\Cloud\AIPlatform\V1\Schema $response
     *           Optional. Describes the output from this function in JSON Schema format.
     *           Reflects the Open API 3.03 Response Object. The Schema defines the type
     *           used for the response value of the function.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Tool::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the function to call.
     * Must start with a letter or an underscore.
     * Must be a-z, A-Z, 0-9, or contain underscores, dots and dashes, with a
     * maximum length of 64.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the function to call.
     * Must start with a letter or an underscore.
     * Must be a-z, A-Z, 0-9, or contain underscores, dots and dashes, with a
     * maximum length of 64.
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
     * Optional. Description and purpose of the function.
     * Model uses it to decide how and whether to call the function.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description and purpose of the function.
     * Model uses it to decide how and whether to call the function.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Describes the parameters to this function in JSON Schema Object
     * format. Reflects the Open API 3.03 Parameter Object. string Key: the name
     * of the parameter. Parameter names are case sensitive. Schema Value: the
     * Schema defining the type used for the parameter. For function with no
     * parameters, this can be left unset. Parameter names must start with a
     * letter or an underscore and must only contain chars a-z, A-Z, 0-9, or
     * underscores with a maximum length of 64. Example with 1 required and 1
     * optional parameter: type: OBJECT properties:
     *  param1:
     *    type: STRING
     *  param2:
     *    type: INTEGER
     * required:
     *  - param1
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema parameters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Schema|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * Optional. Describes the parameters to this function in JSON Schema Object
     * format. Reflects the Open API 3.03 Parameter Object. string Key: the name
     * of the parameter. Parameter names are case sensitive. Schema Value: the
     * Schema defining the type used for the parameter. For function with no
     * parameters, this can be left unset. Parameter names must start with a
     * letter or an underscore and must only contain chars a-z, A-Z, 0-9, or
     * underscores with a maximum length of 64. Example with 1 required and 1
     * optional parameter: type: OBJECT properties:
     *  param1:
     *    type: STRING
     *  param2:
     *    type: INTEGER
     * required:
     *  - param1
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema parameters = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Schema $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Schema::class);
        $this->parameters = $var;

        return $this;
    }

    /**
     * Optional. Describes the output from this function in JSON Schema format.
     * Reflects the Open API 3.03 Response Object. The Schema defines the type
     * used for the response value of the function.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema response = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Schema|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Optional. Describes the output from this function in JSON Schema format.
     * Reflects the Open API 3.03 Response Object. The Schema defines the type
     * used for the response value of the function.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema response = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Schema $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Schema::class);
        $this->response = $var;

        return $this;
    }

}
