<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/css/v1/css_product_common.proto

namespace Google\Shopping\Css\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The certification for the product. Use the this attribute to describe
 * certifications, such as energy efficiency ratings, associated with a product.
 *
 * Generated from protobuf message <code>google.shopping.css.v1.Certification</code>
 */
class Certification extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the certification. At this time, the most common value is
     * "EPREL", which represents energy efficiency certifications in the EU
     * European Registry for Energy Labeling (EPREL) database.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The authority or certification body responsible for issuing the
     * certification. At this time, the most common value is "EC" or
     * “European_Commission” for energy labels in the EU.
     *
     * Generated from protobuf field <code>string authority = 2;</code>
     */
    protected $authority = '';
    /**
     * The code of the certification. For example, for the EPREL certificate with
     * the link https://eprel.ec.europa.eu/screen/product/dishwashers2019/123456
     * the code is 123456. The code is required for European Energy Labels.
     *
     * Generated from protobuf field <code>string code = 3;</code>
     */
    protected $code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the certification. At this time, the most common value is
     *           "EPREL", which represents energy efficiency certifications in the EU
     *           European Registry for Energy Labeling (EPREL) database.
     *     @type string $authority
     *           The authority or certification body responsible for issuing the
     *           certification. At this time, the most common value is "EC" or
     *           “European_Commission” for energy labels in the EU.
     *     @type string $code
     *           The code of the certification. For example, for the EPREL certificate with
     *           the link https://eprel.ec.europa.eu/screen/product/dishwashers2019/123456
     *           the code is 123456. The code is required for European Energy Labels.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Css\V1\CssProductCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the certification. At this time, the most common value is
     * "EPREL", which represents energy efficiency certifications in the EU
     * European Registry for Energy Labeling (EPREL) database.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the certification. At this time, the most common value is
     * "EPREL", which represents energy efficiency certifications in the EU
     * European Registry for Energy Labeling (EPREL) database.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The authority or certification body responsible for issuing the
     * certification. At this time, the most common value is "EC" or
     * “European_Commission” for energy labels in the EU.
     *
     * Generated from protobuf field <code>string authority = 2;</code>
     * @return string
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * The authority or certification body responsible for issuing the
     * certification. At this time, the most common value is "EC" or
     * “European_Commission” for energy labels in the EU.
     *
     * Generated from protobuf field <code>string authority = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthority($var)
    {
        GPBUtil::checkString($var, True);
        $this->authority = $var;

        return $this;
    }

    /**
     * The code of the certification. For example, for the EPREL certificate with
     * the link https://eprel.ec.europa.eu/screen/product/dishwashers2019/123456
     * the code is 123456. The code is required for European Energy Labels.
     *
     * Generated from protobuf field <code>string code = 3;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The code of the certification. For example, for the EPREL certificate with
     * the link https://eprel.ec.europa.eu/screen/product/dishwashers2019/123456
     * the code is 123456. The code is required for European Energy Labels.
     *
     * Generated from protobuf field <code>string code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

}
