<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User specified templates and configs for how to deidentify structured,
 * unstructures, and image files. User must provide either a unstructured
 * deidentify template or at least one redact image config.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.TransformationConfig</code>
 */
class TransformationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * De-identify template.
     * If this template is specified, it will serve as the default de-identify
     * template. This template cannot contain `record_transformations` since it
     * can be used for unstructured content such as free-form text files. If this
     * template is not set, a default `ReplaceWithInfoTypeConfig` will be used to
     * de-identify unstructured content.
     *
     * Generated from protobuf field <code>string deidentify_template = 1;</code>
     */
    protected $deidentify_template = '';
    /**
     * Structured de-identify template.
     * If this template is specified, it will serve as the de-identify template
     * for structured content such as delimited files and tables. If this template
     * is not set but the `deidentify_template` is set, then `deidentify_template`
     * will also apply to the structured content. If neither template is set, a
     * default `ReplaceWithInfoTypeConfig` will be used to de-identify structured
     * content.
     *
     * Generated from protobuf field <code>string structured_deidentify_template = 2;</code>
     */
    protected $structured_deidentify_template = '';
    /**
     * Image redact template.
     * If this template is specified, it will serve as the de-identify template
     * for images. If this template is not set, all findings in the image will be
     * redacted with a black box.
     *
     * Generated from protobuf field <code>string image_redact_template = 4;</code>
     */
    protected $image_redact_template = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $deidentify_template
     *           De-identify template.
     *           If this template is specified, it will serve as the default de-identify
     *           template. This template cannot contain `record_transformations` since it
     *           can be used for unstructured content such as free-form text files. If this
     *           template is not set, a default `ReplaceWithInfoTypeConfig` will be used to
     *           de-identify unstructured content.
     *     @type string $structured_deidentify_template
     *           Structured de-identify template.
     *           If this template is specified, it will serve as the de-identify template
     *           for structured content such as delimited files and tables. If this template
     *           is not set but the `deidentify_template` is set, then `deidentify_template`
     *           will also apply to the structured content. If neither template is set, a
     *           default `ReplaceWithInfoTypeConfig` will be used to de-identify structured
     *           content.
     *     @type string $image_redact_template
     *           Image redact template.
     *           If this template is specified, it will serve as the de-identify template
     *           for images. If this template is not set, all findings in the image will be
     *           redacted with a black box.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * De-identify template.
     * If this template is specified, it will serve as the default de-identify
     * template. This template cannot contain `record_transformations` since it
     * can be used for unstructured content such as free-form text files. If this
     * template is not set, a default `ReplaceWithInfoTypeConfig` will be used to
     * de-identify unstructured content.
     *
     * Generated from protobuf field <code>string deidentify_template = 1;</code>
     * @return string
     */
    public function getDeidentifyTemplate()
    {
        return $this->deidentify_template;
    }

    /**
     * De-identify template.
     * If this template is specified, it will serve as the default de-identify
     * template. This template cannot contain `record_transformations` since it
     * can be used for unstructured content such as free-form text files. If this
     * template is not set, a default `ReplaceWithInfoTypeConfig` will be used to
     * de-identify unstructured content.
     *
     * Generated from protobuf field <code>string deidentify_template = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeidentifyTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->deidentify_template = $var;

        return $this;
    }

    /**
     * Structured de-identify template.
     * If this template is specified, it will serve as the de-identify template
     * for structured content such as delimited files and tables. If this template
     * is not set but the `deidentify_template` is set, then `deidentify_template`
     * will also apply to the structured content. If neither template is set, a
     * default `ReplaceWithInfoTypeConfig` will be used to de-identify structured
     * content.
     *
     * Generated from protobuf field <code>string structured_deidentify_template = 2;</code>
     * @return string
     */
    public function getStructuredDeidentifyTemplate()
    {
        return $this->structured_deidentify_template;
    }

    /**
     * Structured de-identify template.
     * If this template is specified, it will serve as the de-identify template
     * for structured content such as delimited files and tables. If this template
     * is not set but the `deidentify_template` is set, then `deidentify_template`
     * will also apply to the structured content. If neither template is set, a
     * default `ReplaceWithInfoTypeConfig` will be used to de-identify structured
     * content.
     *
     * Generated from protobuf field <code>string structured_deidentify_template = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStructuredDeidentifyTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->structured_deidentify_template = $var;

        return $this;
    }

    /**
     * Image redact template.
     * If this template is specified, it will serve as the de-identify template
     * for images. If this template is not set, all findings in the image will be
     * redacted with a black box.
     *
     * Generated from protobuf field <code>string image_redact_template = 4;</code>
     * @return string
     */
    public function getImageRedactTemplate()
    {
        return $this->image_redact_template;
    }

    /**
     * Image redact template.
     * If this template is specified, it will serve as the de-identify template
     * for images. If this template is not set, all findings in the image will be
     * redacted with a black box.
     *
     * Generated from protobuf field <code>string image_redact_template = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setImageRedactTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_redact_template = $var;

        return $this;
    }

}
