<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/pipeline.proto

namespace Google\Cloud\Eventarc\V1\Pipeline\Destination;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a HTTP endpoint destination.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.Pipeline.Destination.HttpEndpoint</code>
 */
class HttpEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI of the HTTP enpdoint.
     * The value must be a RFC2396 URI string.
     * Examples: `https://svc.us-central1.p.local:8080/route`.
     * Only the HTTPS protocol is supported.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';
    /**
     * Optional. The CEL expression used to modify how the destination-bound
     * HTTP request is constructed.
     * If a binding expression is not specified here, the message
     * is treated as a CloudEvent and is mapped to the HTTP request according
     * to the CloudEvent HTTP Protocol Binding Binary Content Mode. In this
     * representation, all fields except the `data` and `datacontenttype`
     * field on the message are mapped to HTTP request headers with a prefix
     * of `ce-`.
     * To construct the HTTP request payload and the value of the content-type
     * HTTP header, the payload format is defined as follows:
     * 1) Use the output_payload_format_type on the Pipeline.Destination if it
     *    is set, else:
     * 2) Use the input_payload_format_type on the Pipeline if it is set,
     *    else:
     * 3) Treat the payload as opaque binary data.
     * The `data` field of the message is converted to the payload format or
     * left as-is for case 3) and then attached as the payload of the HTTP
     * request. The `content-type` header on the HTTP request is set to the
     * payload format type or left empty for case 3). However, if a mediation
     * has updated the `datacontenttype` field on the message so that it is
     * not the same as the payload format type but it is still a prefix of the
     * payload format type, then the `content-type` header on the HTTP request
     * is set to this `datacontenttype` value. For example, if the
     * `datacontenttype` is "application/json" and the payload format type is
     * "application/json; charset=utf-8", then the `content-type` header on
     * the HTTP request is set to "application/json; charset=utf-8".
     * If a non-empty binding expression is specified then this expression is
     * used to modify the default CloudEvent HTTP Protocol Binding Binary
     * Content representation.
     * The result of the CEL expression must be a map of key/value pairs
     * which is used as follows:
     * - If a map named `headers` exists on the result of the expression,
     * then its key/value pairs are directly mapped to the HTTP request
     * headers. The headers values are constructed from the corresponding
     * value type’s canonical representation. If the `headers` field doesn’t
     * exist then the resulting HTTP request will be the headers of the
     * CloudEvent HTTP Binding Binary Content Mode representation of the final
     * message. Note: If the specified binding expression, has updated the
     * `datacontenttype` field on the message so that it is not the same as
     * the payload format type but it is still a prefix of the payload format
     * type, then the `content-type` header in the `headers` map is set to
     * this `datacontenttype` value.
     * - If a field named `body` exists on the result of the expression then
     * its value is directly mapped to the body of the request. If the value
     * of the `body` field is of type bytes or string then it is used for
     * the HTTP request body as-is, with no conversion. If the body field is
     * of any other type then it is converted to a JSON string. If the body
     * field does not exist then the resulting payload of the HTTP request
     * will be data value of the CloudEvent HTTP Binding Binary Content Mode
     * representation of the final message as described earlier.
     * - Any other fields in the resulting expression will be ignored.
     * The CEL expression may access the incoming CloudEvent message in its
     * definition, as follows:
     * - The `data` field of the incoming CloudEvent message can be accessed
     * using the `message.data` value. Subfields of `message.data` may also be
     * accessed if an input_payload_format has been specified on the Pipeline.
     * - Each attribute of the incoming CloudEvent message can be accessed
     * using the `message.<key>` value, where <key> is replaced with the
     * name of the attribute.
     * - Existing headers can be accessed in the CEL expression using the
     * `headers` variable. The `headers` variable defines a map of key/value
     * pairs corresponding to the HTTP headers of the CloudEvent HTTP Binding
     * Binary Content Mode representation of the final message as described
     * earlier. For example, the following CEL expression can be used to
     * construct an HTTP request by adding an additional header to the HTTP
     * headers of the CloudEvent HTTP Binding Binary Content Mode
     * representation of the final message and by overwriting the body of the
     * request:
     * ```
     * {
     *   "headers": headers.merge({"new-header-key": "new-header-value"}),
     *   "body": "new-body"
     * }
     * ```
     * Additionally, the following CEL extension functions are provided for
     * use in this CEL expression:
     * - toBase64Url:
     *   map.toBase64Url() -> string
     *     - Converts a CelValue to a base64url encoded string
     * - toJsonString: map.toJsonString() -> string
     *     - Converts a CelValue to a JSON string
     * - merge:
     *   map1.merge(map2) -> map3
     *     - Merges the passed CEL map with the existing CEL map the
     *     function is applied to.
     *     - If the same key exists in both maps, if the key's value is type
     *     map both maps are merged else the value from the passed map is
     *     used.
     * - denormalize:
     *   map.denormalize() -> map
     *     - Denormalizes a CEL map such that every value of type map or key
     *     in the map is expanded to return a single level map.
     *     - The resulting keys are "." separated indices of the map keys.
     *     - For example:
     *       {
     *         "a": 1,
     *         "b": {
     *           "c": 2,
     *           "d": 3
     *         }
     *         "e": [4, 5]
     *       }
     *       .denormalize()
     *       -> {
     *         "a": 1,
     *         "b.c": 2,
     *         "b.d": 3,
     *         "e.0": 4,
     *         "e.1": 5
     *       }
     * - setField:
     *   map.setField(key, value) -> message
     *     - Sets the field of the message with the given key to the
     *     given value.
     *     - If the field is not present it will be added.
     *     - If the field is present it will be overwritten.
     *     - The key can be a dot separated path to set a field in a nested
     *     message.
     *     - Key must be of type string.
     *     - Value may be any valid type.
     * - removeFields:
     *   map.removeFields([key1, key2, ...]) -> message
     *     - Removes the fields of the map with the given keys.
     *     - The keys can be a dot separated path to remove a field in a
     *     nested message.
     *     - If a key is not found it will be ignored.
     *     - Keys must be of type string.
     * - toMap:
     *   [map1, map2, ...].toMap() -> map
     *     - Converts a CEL list of CEL maps to a single CEL map
     * - toDestinationPayloadFormat():
     *   message.data.toDestinationPayloadFormat() -> string or bytes
     *     - Converts the message data to the destination payload format
     *     specified in Pipeline.Destination.output_payload_format
     *     - This function is meant to be applied to the message.data field.
     *     - If the destination payload format is not set, the function will
     *     return the message data unchanged.
     * - toCloudEventJsonWithPayloadFormat:
     *   message.toCloudEventJsonWithPayloadFormat() -> map
     *     - Converts a message to the corresponding structure of JSON
     *     format for CloudEvents
     *     - This function applies toDestinationPayloadFormat() to the
     *     message data. It also sets the corresponding datacontenttype of
     *     the CloudEvent, as indicated by
     *     Pipeline.Destination.output_payload_format. If no
     *     output_payload_format is set it will use the existing
     *     datacontenttype on the CloudEvent if present, else leave
     *     datacontenttype absent.
     *     - This function expects that the content of the message will
     *     adhere to the standard CloudEvent format. If it doesn’t then this
     *     function will fail.
     *     - The result is a CEL map that corresponds to the JSON
     *     representation of the CloudEvent. To convert that data to a JSON
     *     string it can be chained with the toJsonString function.
     * The Pipeline expects that the message it receives adheres to the
     * standard CloudEvent format. If it doesn’t then the outgoing message
     * request may fail with a persistent error.
     *
     * Generated from protobuf field <code>string message_binding_template = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $message_binding_template = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. The URI of the HTTP enpdoint.
     *           The value must be a RFC2396 URI string.
     *           Examples: `https://svc.us-central1.p.local:8080/route`.
     *           Only the HTTPS protocol is supported.
     *     @type string $message_binding_template
     *           Optional. The CEL expression used to modify how the destination-bound
     *           HTTP request is constructed.
     *           If a binding expression is not specified here, the message
     *           is treated as a CloudEvent and is mapped to the HTTP request according
     *           to the CloudEvent HTTP Protocol Binding Binary Content Mode. In this
     *           representation, all fields except the `data` and `datacontenttype`
     *           field on the message are mapped to HTTP request headers with a prefix
     *           of `ce-`.
     *           To construct the HTTP request payload and the value of the content-type
     *           HTTP header, the payload format is defined as follows:
     *           1) Use the output_payload_format_type on the Pipeline.Destination if it
     *              is set, else:
     *           2) Use the input_payload_format_type on the Pipeline if it is set,
     *              else:
     *           3) Treat the payload as opaque binary data.
     *           The `data` field of the message is converted to the payload format or
     *           left as-is for case 3) and then attached as the payload of the HTTP
     *           request. The `content-type` header on the HTTP request is set to the
     *           payload format type or left empty for case 3). However, if a mediation
     *           has updated the `datacontenttype` field on the message so that it is
     *           not the same as the payload format type but it is still a prefix of the
     *           payload format type, then the `content-type` header on the HTTP request
     *           is set to this `datacontenttype` value. For example, if the
     *           `datacontenttype` is "application/json" and the payload format type is
     *           "application/json; charset=utf-8", then the `content-type` header on
     *           the HTTP request is set to "application/json; charset=utf-8".
     *           If a non-empty binding expression is specified then this expression is
     *           used to modify the default CloudEvent HTTP Protocol Binding Binary
     *           Content representation.
     *           The result of the CEL expression must be a map of key/value pairs
     *           which is used as follows:
     *           - If a map named `headers` exists on the result of the expression,
     *           then its key/value pairs are directly mapped to the HTTP request
     *           headers. The headers values are constructed from the corresponding
     *           value type’s canonical representation. If the `headers` field doesn’t
     *           exist then the resulting HTTP request will be the headers of the
     *           CloudEvent HTTP Binding Binary Content Mode representation of the final
     *           message. Note: If the specified binding expression, has updated the
     *           `datacontenttype` field on the message so that it is not the same as
     *           the payload format type but it is still a prefix of the payload format
     *           type, then the `content-type` header in the `headers` map is set to
     *           this `datacontenttype` value.
     *           - If a field named `body` exists on the result of the expression then
     *           its value is directly mapped to the body of the request. If the value
     *           of the `body` field is of type bytes or string then it is used for
     *           the HTTP request body as-is, with no conversion. If the body field is
     *           of any other type then it is converted to a JSON string. If the body
     *           field does not exist then the resulting payload of the HTTP request
     *           will be data value of the CloudEvent HTTP Binding Binary Content Mode
     *           representation of the final message as described earlier.
     *           - Any other fields in the resulting expression will be ignored.
     *           The CEL expression may access the incoming CloudEvent message in its
     *           definition, as follows:
     *           - The `data` field of the incoming CloudEvent message can be accessed
     *           using the `message.data` value. Subfields of `message.data` may also be
     *           accessed if an input_payload_format has been specified on the Pipeline.
     *           - Each attribute of the incoming CloudEvent message can be accessed
     *           using the `message.<key>` value, where <key> is replaced with the
     *           name of the attribute.
     *           - Existing headers can be accessed in the CEL expression using the
     *           `headers` variable. The `headers` variable defines a map of key/value
     *           pairs corresponding to the HTTP headers of the CloudEvent HTTP Binding
     *           Binary Content Mode representation of the final message as described
     *           earlier. For example, the following CEL expression can be used to
     *           construct an HTTP request by adding an additional header to the HTTP
     *           headers of the CloudEvent HTTP Binding Binary Content Mode
     *           representation of the final message and by overwriting the body of the
     *           request:
     *           ```
     *           {
     *             "headers": headers.merge({"new-header-key": "new-header-value"}),
     *             "body": "new-body"
     *           }
     *           ```
     *           Additionally, the following CEL extension functions are provided for
     *           use in this CEL expression:
     *           - toBase64Url:
     *             map.toBase64Url() -> string
     *               - Converts a CelValue to a base64url encoded string
     *           - toJsonString: map.toJsonString() -> string
     *               - Converts a CelValue to a JSON string
     *           - merge:
     *             map1.merge(map2) -> map3
     *               - Merges the passed CEL map with the existing CEL map the
     *               function is applied to.
     *               - If the same key exists in both maps, if the key's value is type
     *               map both maps are merged else the value from the passed map is
     *               used.
     *           - denormalize:
     *             map.denormalize() -> map
     *               - Denormalizes a CEL map such that every value of type map or key
     *               in the map is expanded to return a single level map.
     *               - The resulting keys are "." separated indices of the map keys.
     *               - For example:
     *                 {
     *                   "a": 1,
     *                   "b": {
     *                     "c": 2,
     *                     "d": 3
     *                   }
     *                   "e": [4, 5]
     *                 }
     *                 .denormalize()
     *                 -> {
     *                   "a": 1,
     *                   "b.c": 2,
     *                   "b.d": 3,
     *                   "e.0": 4,
     *                   "e.1": 5
     *                 }
     *           - setField:
     *             map.setField(key, value) -> message
     *               - Sets the field of the message with the given key to the
     *               given value.
     *               - If the field is not present it will be added.
     *               - If the field is present it will be overwritten.
     *               - The key can be a dot separated path to set a field in a nested
     *               message.
     *               - Key must be of type string.
     *               - Value may be any valid type.
     *           - removeFields:
     *             map.removeFields([key1, key2, ...]) -> message
     *               - Removes the fields of the map with the given keys.
     *               - The keys can be a dot separated path to remove a field in a
     *               nested message.
     *               - If a key is not found it will be ignored.
     *               - Keys must be of type string.
     *           - toMap:
     *             [map1, map2, ...].toMap() -> map
     *               - Converts a CEL list of CEL maps to a single CEL map
     *           - toDestinationPayloadFormat():
     *             message.data.toDestinationPayloadFormat() -> string or bytes
     *               - Converts the message data to the destination payload format
     *               specified in Pipeline.Destination.output_payload_format
     *               - This function is meant to be applied to the message.data field.
     *               - If the destination payload format is not set, the function will
     *               return the message data unchanged.
     *           - toCloudEventJsonWithPayloadFormat:
     *             message.toCloudEventJsonWithPayloadFormat() -> map
     *               - Converts a message to the corresponding structure of JSON
     *               format for CloudEvents
     *               - This function applies toDestinationPayloadFormat() to the
     *               message data. It also sets the corresponding datacontenttype of
     *               the CloudEvent, as indicated by
     *               Pipeline.Destination.output_payload_format. If no
     *               output_payload_format is set it will use the existing
     *               datacontenttype on the CloudEvent if present, else leave
     *               datacontenttype absent.
     *               - This function expects that the content of the message will
     *               adhere to the standard CloudEvent format. If it doesn’t then this
     *               function will fail.
     *               - The result is a CEL map that corresponds to the JSON
     *               representation of the CloudEvent. To convert that data to a JSON
     *               string it can be chained with the toJsonString function.
     *           The Pipeline expects that the message it receives adheres to the
     *           standard CloudEvent format. If it doesn’t then the outgoing message
     *           request may fail with a persistent error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Pipeline::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI of the HTTP enpdoint.
     * The value must be a RFC2396 URI string.
     * Examples: `https://svc.us-central1.p.local:8080/route`.
     * Only the HTTPS protocol is supported.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The URI of the HTTP enpdoint.
     * The value must be a RFC2396 URI string.
     * Examples: `https://svc.us-central1.p.local:8080/route`.
     * Only the HTTPS protocol is supported.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Optional. The CEL expression used to modify how the destination-bound
     * HTTP request is constructed.
     * If a binding expression is not specified here, the message
     * is treated as a CloudEvent and is mapped to the HTTP request according
     * to the CloudEvent HTTP Protocol Binding Binary Content Mode. In this
     * representation, all fields except the `data` and `datacontenttype`
     * field on the message are mapped to HTTP request headers with a prefix
     * of `ce-`.
     * To construct the HTTP request payload and the value of the content-type
     * HTTP header, the payload format is defined as follows:
     * 1) Use the output_payload_format_type on the Pipeline.Destination if it
     *    is set, else:
     * 2) Use the input_payload_format_type on the Pipeline if it is set,
     *    else:
     * 3) Treat the payload as opaque binary data.
     * The `data` field of the message is converted to the payload format or
     * left as-is for case 3) and then attached as the payload of the HTTP
     * request. The `content-type` header on the HTTP request is set to the
     * payload format type or left empty for case 3). However, if a mediation
     * has updated the `datacontenttype` field on the message so that it is
     * not the same as the payload format type but it is still a prefix of the
     * payload format type, then the `content-type` header on the HTTP request
     * is set to this `datacontenttype` value. For example, if the
     * `datacontenttype` is "application/json" and the payload format type is
     * "application/json; charset=utf-8", then the `content-type` header on
     * the HTTP request is set to "application/json; charset=utf-8".
     * If a non-empty binding expression is specified then this expression is
     * used to modify the default CloudEvent HTTP Protocol Binding Binary
     * Content representation.
     * The result of the CEL expression must be a map of key/value pairs
     * which is used as follows:
     * - If a map named `headers` exists on the result of the expression,
     * then its key/value pairs are directly mapped to the HTTP request
     * headers. The headers values are constructed from the corresponding
     * value type’s canonical representation. If the `headers` field doesn’t
     * exist then the resulting HTTP request will be the headers of the
     * CloudEvent HTTP Binding Binary Content Mode representation of the final
     * message. Note: If the specified binding expression, has updated the
     * `datacontenttype` field on the message so that it is not the same as
     * the payload format type but it is still a prefix of the payload format
     * type, then the `content-type` header in the `headers` map is set to
     * this `datacontenttype` value.
     * - If a field named `body` exists on the result of the expression then
     * its value is directly mapped to the body of the request. If the value
     * of the `body` field is of type bytes or string then it is used for
     * the HTTP request body as-is, with no conversion. If the body field is
     * of any other type then it is converted to a JSON string. If the body
     * field does not exist then the resulting payload of the HTTP request
     * will be data value of the CloudEvent HTTP Binding Binary Content Mode
     * representation of the final message as described earlier.
     * - Any other fields in the resulting expression will be ignored.
     * The CEL expression may access the incoming CloudEvent message in its
     * definition, as follows:
     * - The `data` field of the incoming CloudEvent message can be accessed
     * using the `message.data` value. Subfields of `message.data` may also be
     * accessed if an input_payload_format has been specified on the Pipeline.
     * - Each attribute of the incoming CloudEvent message can be accessed
     * using the `message.<key>` value, where <key> is replaced with the
     * name of the attribute.
     * - Existing headers can be accessed in the CEL expression using the
     * `headers` variable. The `headers` variable defines a map of key/value
     * pairs corresponding to the HTTP headers of the CloudEvent HTTP Binding
     * Binary Content Mode representation of the final message as described
     * earlier. For example, the following CEL expression can be used to
     * construct an HTTP request by adding an additional header to the HTTP
     * headers of the CloudEvent HTTP Binding Binary Content Mode
     * representation of the final message and by overwriting the body of the
     * request:
     * ```
     * {
     *   "headers": headers.merge({"new-header-key": "new-header-value"}),
     *   "body": "new-body"
     * }
     * ```
     * Additionally, the following CEL extension functions are provided for
     * use in this CEL expression:
     * - toBase64Url:
     *   map.toBase64Url() -> string
     *     - Converts a CelValue to a base64url encoded string
     * - toJsonString: map.toJsonString() -> string
     *     - Converts a CelValue to a JSON string
     * - merge:
     *   map1.merge(map2) -> map3
     *     - Merges the passed CEL map with the existing CEL map the
     *     function is applied to.
     *     - If the same key exists in both maps, if the key's value is type
     *     map both maps are merged else the value from the passed map is
     *     used.
     * - denormalize:
     *   map.denormalize() -> map
     *     - Denormalizes a CEL map such that every value of type map or key
     *     in the map is expanded to return a single level map.
     *     - The resulting keys are "." separated indices of the map keys.
     *     - For example:
     *       {
     *         "a": 1,
     *         "b": {
     *           "c": 2,
     *           "d": 3
     *         }
     *         "e": [4, 5]
     *       }
     *       .denormalize()
     *       -> {
     *         "a": 1,
     *         "b.c": 2,
     *         "b.d": 3,
     *         "e.0": 4,
     *         "e.1": 5
     *       }
     * - setField:
     *   map.setField(key, value) -> message
     *     - Sets the field of the message with the given key to the
     *     given value.
     *     - If the field is not present it will be added.
     *     - If the field is present it will be overwritten.
     *     - The key can be a dot separated path to set a field in a nested
     *     message.
     *     - Key must be of type string.
     *     - Value may be any valid type.
     * - removeFields:
     *   map.removeFields([key1, key2, ...]) -> message
     *     - Removes the fields of the map with the given keys.
     *     - The keys can be a dot separated path to remove a field in a
     *     nested message.
     *     - If a key is not found it will be ignored.
     *     - Keys must be of type string.
     * - toMap:
     *   [map1, map2, ...].toMap() -> map
     *     - Converts a CEL list of CEL maps to a single CEL map
     * - toDestinationPayloadFormat():
     *   message.data.toDestinationPayloadFormat() -> string or bytes
     *     - Converts the message data to the destination payload format
     *     specified in Pipeline.Destination.output_payload_format
     *     - This function is meant to be applied to the message.data field.
     *     - If the destination payload format is not set, the function will
     *     return the message data unchanged.
     * - toCloudEventJsonWithPayloadFormat:
     *   message.toCloudEventJsonWithPayloadFormat() -> map
     *     - Converts a message to the corresponding structure of JSON
     *     format for CloudEvents
     *     - This function applies toDestinationPayloadFormat() to the
     *     message data. It also sets the corresponding datacontenttype of
     *     the CloudEvent, as indicated by
     *     Pipeline.Destination.output_payload_format. If no
     *     output_payload_format is set it will use the existing
     *     datacontenttype on the CloudEvent if present, else leave
     *     datacontenttype absent.
     *     - This function expects that the content of the message will
     *     adhere to the standard CloudEvent format. If it doesn’t then this
     *     function will fail.
     *     - The result is a CEL map that corresponds to the JSON
     *     representation of the CloudEvent. To convert that data to a JSON
     *     string it can be chained with the toJsonString function.
     * The Pipeline expects that the message it receives adheres to the
     * standard CloudEvent format. If it doesn’t then the outgoing message
     * request may fail with a persistent error.
     *
     * Generated from protobuf field <code>string message_binding_template = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMessageBindingTemplate()
    {
        return $this->message_binding_template;
    }

    /**
     * Optional. The CEL expression used to modify how the destination-bound
     * HTTP request is constructed.
     * If a binding expression is not specified here, the message
     * is treated as a CloudEvent and is mapped to the HTTP request according
     * to the CloudEvent HTTP Protocol Binding Binary Content Mode. In this
     * representation, all fields except the `data` and `datacontenttype`
     * field on the message are mapped to HTTP request headers with a prefix
     * of `ce-`.
     * To construct the HTTP request payload and the value of the content-type
     * HTTP header, the payload format is defined as follows:
     * 1) Use the output_payload_format_type on the Pipeline.Destination if it
     *    is set, else:
     * 2) Use the input_payload_format_type on the Pipeline if it is set,
     *    else:
     * 3) Treat the payload as opaque binary data.
     * The `data` field of the message is converted to the payload format or
     * left as-is for case 3) and then attached as the payload of the HTTP
     * request. The `content-type` header on the HTTP request is set to the
     * payload format type or left empty for case 3). However, if a mediation
     * has updated the `datacontenttype` field on the message so that it is
     * not the same as the payload format type but it is still a prefix of the
     * payload format type, then the `content-type` header on the HTTP request
     * is set to this `datacontenttype` value. For example, if the
     * `datacontenttype` is "application/json" and the payload format type is
     * "application/json; charset=utf-8", then the `content-type` header on
     * the HTTP request is set to "application/json; charset=utf-8".
     * If a non-empty binding expression is specified then this expression is
     * used to modify the default CloudEvent HTTP Protocol Binding Binary
     * Content representation.
     * The result of the CEL expression must be a map of key/value pairs
     * which is used as follows:
     * - If a map named `headers` exists on the result of the expression,
     * then its key/value pairs are directly mapped to the HTTP request
     * headers. The headers values are constructed from the corresponding
     * value type’s canonical representation. If the `headers` field doesn’t
     * exist then the resulting HTTP request will be the headers of the
     * CloudEvent HTTP Binding Binary Content Mode representation of the final
     * message. Note: If the specified binding expression, has updated the
     * `datacontenttype` field on the message so that it is not the same as
     * the payload format type but it is still a prefix of the payload format
     * type, then the `content-type` header in the `headers` map is set to
     * this `datacontenttype` value.
     * - If a field named `body` exists on the result of the expression then
     * its value is directly mapped to the body of the request. If the value
     * of the `body` field is of type bytes or string then it is used for
     * the HTTP request body as-is, with no conversion. If the body field is
     * of any other type then it is converted to a JSON string. If the body
     * field does not exist then the resulting payload of the HTTP request
     * will be data value of the CloudEvent HTTP Binding Binary Content Mode
     * representation of the final message as described earlier.
     * - Any other fields in the resulting expression will be ignored.
     * The CEL expression may access the incoming CloudEvent message in its
     * definition, as follows:
     * - The `data` field of the incoming CloudEvent message can be accessed
     * using the `message.data` value. Subfields of `message.data` may also be
     * accessed if an input_payload_format has been specified on the Pipeline.
     * - Each attribute of the incoming CloudEvent message can be accessed
     * using the `message.<key>` value, where <key> is replaced with the
     * name of the attribute.
     * - Existing headers can be accessed in the CEL expression using the
     * `headers` variable. The `headers` variable defines a map of key/value
     * pairs corresponding to the HTTP headers of the CloudEvent HTTP Binding
     * Binary Content Mode representation of the final message as described
     * earlier. For example, the following CEL expression can be used to
     * construct an HTTP request by adding an additional header to the HTTP
     * headers of the CloudEvent HTTP Binding Binary Content Mode
     * representation of the final message and by overwriting the body of the
     * request:
     * ```
     * {
     *   "headers": headers.merge({"new-header-key": "new-header-value"}),
     *   "body": "new-body"
     * }
     * ```
     * Additionally, the following CEL extension functions are provided for
     * use in this CEL expression:
     * - toBase64Url:
     *   map.toBase64Url() -> string
     *     - Converts a CelValue to a base64url encoded string
     * - toJsonString: map.toJsonString() -> string
     *     - Converts a CelValue to a JSON string
     * - merge:
     *   map1.merge(map2) -> map3
     *     - Merges the passed CEL map with the existing CEL map the
     *     function is applied to.
     *     - If the same key exists in both maps, if the key's value is type
     *     map both maps are merged else the value from the passed map is
     *     used.
     * - denormalize:
     *   map.denormalize() -> map
     *     - Denormalizes a CEL map such that every value of type map or key
     *     in the map is expanded to return a single level map.
     *     - The resulting keys are "." separated indices of the map keys.
     *     - For example:
     *       {
     *         "a": 1,
     *         "b": {
     *           "c": 2,
     *           "d": 3
     *         }
     *         "e": [4, 5]
     *       }
     *       .denormalize()
     *       -> {
     *         "a": 1,
     *         "b.c": 2,
     *         "b.d": 3,
     *         "e.0": 4,
     *         "e.1": 5
     *       }
     * - setField:
     *   map.setField(key, value) -> message
     *     - Sets the field of the message with the given key to the
     *     given value.
     *     - If the field is not present it will be added.
     *     - If the field is present it will be overwritten.
     *     - The key can be a dot separated path to set a field in a nested
     *     message.
     *     - Key must be of type string.
     *     - Value may be any valid type.
     * - removeFields:
     *   map.removeFields([key1, key2, ...]) -> message
     *     - Removes the fields of the map with the given keys.
     *     - The keys can be a dot separated path to remove a field in a
     *     nested message.
     *     - If a key is not found it will be ignored.
     *     - Keys must be of type string.
     * - toMap:
     *   [map1, map2, ...].toMap() -> map
     *     - Converts a CEL list of CEL maps to a single CEL map
     * - toDestinationPayloadFormat():
     *   message.data.toDestinationPayloadFormat() -> string or bytes
     *     - Converts the message data to the destination payload format
     *     specified in Pipeline.Destination.output_payload_format
     *     - This function is meant to be applied to the message.data field.
     *     - If the destination payload format is not set, the function will
     *     return the message data unchanged.
     * - toCloudEventJsonWithPayloadFormat:
     *   message.toCloudEventJsonWithPayloadFormat() -> map
     *     - Converts a message to the corresponding structure of JSON
     *     format for CloudEvents
     *     - This function applies toDestinationPayloadFormat() to the
     *     message data. It also sets the corresponding datacontenttype of
     *     the CloudEvent, as indicated by
     *     Pipeline.Destination.output_payload_format. If no
     *     output_payload_format is set it will use the existing
     *     datacontenttype on the CloudEvent if present, else leave
     *     datacontenttype absent.
     *     - This function expects that the content of the message will
     *     adhere to the standard CloudEvent format. If it doesn’t then this
     *     function will fail.
     *     - The result is a CEL map that corresponds to the JSON
     *     representation of the CloudEvent. To convert that data to a JSON
     *     string it can be chained with the toJsonString function.
     * The Pipeline expects that the message it receives adheres to the
     * standard CloudEvent format. If it doesn’t then the outgoing message
     * request may fail with a persistent error.
     *
     * Generated from protobuf field <code>string message_binding_template = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMessageBindingTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_binding_template = $var;

        return $this;
    }

}

