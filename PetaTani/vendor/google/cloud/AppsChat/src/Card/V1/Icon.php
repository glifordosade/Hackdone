<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An icon displayed in a widget on a card. For an example in Google Chat apps,
 * see [Add an
 * icon](https://developers.google.com/workspace/chat/add-text-image-card-dialog#add_an_icon).
 * Supports
 * [built-in](https://developers.google.com/workspace/chat/format-messages#builtinicons)
 * and
 * [custom](https://developers.google.com/workspace/chat/format-messages#customicons)
 * icons.
 * [Google Workspace Add-ons and Chat
 * apps](https://developers.google.com/workspace/extend):
 *
 * Generated from protobuf message <code>google.apps.card.v1.Icon</code>
 */
class Icon extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A description of the icon used for accessibility.
     * If unspecified, the default value `Button` is provided. As a best practice,
     * you should set a helpful description for what the icon displays, and if
     * applicable, what it does. For example, `A user's account portrait`, or
     * `Opens a new browser tab and navigates to the Google Chat developer
     * documentation at https://developers.google.com/workspace/chat`.
     * If the icon is set in a [`Button`][google.apps.card.v1.Button], the
     * `altText` appears as helper text when the user hovers over the button.
     * However, if the button also sets `text`, the icon's `altText` is ignored.
     *
     * Generated from protobuf field <code>string alt_text = 3;</code>
     */
    protected $alt_text = '';
    /**
     * The crop style applied to the image. In some cases, applying a
     * `CIRCLE` crop causes the image to be drawn larger than a built-in
     * icon.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Widget.ImageType image_type = 4;</code>
     */
    protected $image_type = 0;
    protected $icons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $known_icon
     *           Display one of the built-in icons provided by Google Workspace.
     *           For example, to display an airplane icon, specify `AIRPLANE`.
     *           For a bus, specify `BUS`.
     *           For a full list of supported icons, see [built-in
     *           icons](https://developers.google.com/workspace/chat/format-messages#builtinicons).
     *     @type string $icon_url
     *           Display a custom icon hosted at an HTTPS URL.
     *           For example:
     *           ```
     *           "iconUrl":
     *           "https://developers.google.com/workspace/chat/images/quickstart-app-avatar.png"
     *           ```
     *           Supported file types include `.png` and `.jpg`.
     *     @type \Google\Apps\Card\V1\MaterialIcon $material_icon
     *           Display one of the [Google Material
     *           Icons](https://fonts.google.com/icons).
     *           For example, to display a [checkbox
     *           icon](https://fonts.google.com/icons?selected=Material%20Symbols%20Outlined%3Acheck_box%3AFILL%400%3Bwght%40400%3BGRAD%400%3Bopsz%4048),
     *           use
     *           ```
     *           "material_icon": {
     *             "name": "check_box"
     *           }
     *           ```
     *           [Google Chat apps](https://developers.google.com/workspace/chat):
     *     @type string $alt_text
     *           Optional. A description of the icon used for accessibility.
     *           If unspecified, the default value `Button` is provided. As a best practice,
     *           you should set a helpful description for what the icon displays, and if
     *           applicable, what it does. For example, `A user's account portrait`, or
     *           `Opens a new browser tab and navigates to the Google Chat developer
     *           documentation at https://developers.google.com/workspace/chat`.
     *           If the icon is set in a [`Button`][google.apps.card.v1.Button], the
     *           `altText` appears as helper text when the user hovers over the button.
     *           However, if the button also sets `text`, the icon's `altText` is ignored.
     *     @type int $image_type
     *           The crop style applied to the image. In some cases, applying a
     *           `CIRCLE` crop causes the image to be drawn larger than a built-in
     *           icon.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Card\V1\Card::initOnce();
        parent::__construct($data);
    }

    /**
     * Display one of the built-in icons provided by Google Workspace.
     * For example, to display an airplane icon, specify `AIRPLANE`.
     * For a bus, specify `BUS`.
     * For a full list of supported icons, see [built-in
     * icons](https://developers.google.com/workspace/chat/format-messages#builtinicons).
     *
     * Generated from protobuf field <code>string known_icon = 1;</code>
     * @return string
     */
    public function getKnownIcon()
    {
        return $this->readOneof(1);
    }

    public function hasKnownIcon()
    {
        return $this->hasOneof(1);
    }

    /**
     * Display one of the built-in icons provided by Google Workspace.
     * For example, to display an airplane icon, specify `AIRPLANE`.
     * For a bus, specify `BUS`.
     * For a full list of supported icons, see [built-in
     * icons](https://developers.google.com/workspace/chat/format-messages#builtinicons).
     *
     * Generated from protobuf field <code>string known_icon = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKnownIcon($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Display a custom icon hosted at an HTTPS URL.
     * For example:
     * ```
     * "iconUrl":
     * "https://developers.google.com/workspace/chat/images/quickstart-app-avatar.png"
     * ```
     * Supported file types include `.png` and `.jpg`.
     *
     * Generated from protobuf field <code>string icon_url = 2;</code>
     * @return string
     */
    public function getIconUrl()
    {
        return $this->readOneof(2);
    }

    public function hasIconUrl()
    {
        return $this->hasOneof(2);
    }

    /**
     * Display a custom icon hosted at an HTTPS URL.
     * For example:
     * ```
     * "iconUrl":
     * "https://developers.google.com/workspace/chat/images/quickstart-app-avatar.png"
     * ```
     * Supported file types include `.png` and `.jpg`.
     *
     * Generated from protobuf field <code>string icon_url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIconUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Display one of the [Google Material
     * Icons](https://fonts.google.com/icons).
     * For example, to display a [checkbox
     * icon](https://fonts.google.com/icons?selected=Material%20Symbols%20Outlined%3Acheck_box%3AFILL%400%3Bwght%40400%3BGRAD%400%3Bopsz%4048),
     * use
     * ```
     * "material_icon": {
     *   "name": "check_box"
     * }
     * ```
     * [Google Chat apps](https://developers.google.com/workspace/chat):
     *
     * Generated from protobuf field <code>.google.apps.card.v1.MaterialIcon material_icon = 5;</code>
     * @return \Google\Apps\Card\V1\MaterialIcon|null
     */
    public function getMaterialIcon()
    {
        return $this->readOneof(5);
    }

    public function hasMaterialIcon()
    {
        return $this->hasOneof(5);
    }

    /**
     * Display one of the [Google Material
     * Icons](https://fonts.google.com/icons).
     * For example, to display a [checkbox
     * icon](https://fonts.google.com/icons?selected=Material%20Symbols%20Outlined%3Acheck_box%3AFILL%400%3Bwght%40400%3BGRAD%400%3Bopsz%4048),
     * use
     * ```
     * "material_icon": {
     *   "name": "check_box"
     * }
     * ```
     * [Google Chat apps](https://developers.google.com/workspace/chat):
     *
     * Generated from protobuf field <code>.google.apps.card.v1.MaterialIcon material_icon = 5;</code>
     * @param \Google\Apps\Card\V1\MaterialIcon $var
     * @return $this
     */
    public function setMaterialIcon($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\MaterialIcon::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. A description of the icon used for accessibility.
     * If unspecified, the default value `Button` is provided. As a best practice,
     * you should set a helpful description for what the icon displays, and if
     * applicable, what it does. For example, `A user's account portrait`, or
     * `Opens a new browser tab and navigates to the Google Chat developer
     * documentation at https://developers.google.com/workspace/chat`.
     * If the icon is set in a [`Button`][google.apps.card.v1.Button], the
     * `altText` appears as helper text when the user hovers over the button.
     * However, if the button also sets `text`, the icon's `altText` is ignored.
     *
     * Generated from protobuf field <code>string alt_text = 3;</code>
     * @return string
     */
    public function getAltText()
    {
        return $this->alt_text;
    }

    /**
     * Optional. A description of the icon used for accessibility.
     * If unspecified, the default value `Button` is provided. As a best practice,
     * you should set a helpful description for what the icon displays, and if
     * applicable, what it does. For example, `A user's account portrait`, or
     * `Opens a new browser tab and navigates to the Google Chat developer
     * documentation at https://developers.google.com/workspace/chat`.
     * If the icon is set in a [`Button`][google.apps.card.v1.Button], the
     * `altText` appears as helper text when the user hovers over the button.
     * However, if the button also sets `text`, the icon's `altText` is ignored.
     *
     * Generated from protobuf field <code>string alt_text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAltText($var)
    {
        GPBUtil::checkString($var, True);
        $this->alt_text = $var;

        return $this;
    }

    /**
     * The crop style applied to the image. In some cases, applying a
     * `CIRCLE` crop causes the image to be drawn larger than a built-in
     * icon.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Widget.ImageType image_type = 4;</code>
     * @return int
     */
    public function getImageType()
    {
        return $this->image_type;
    }

    /**
     * The crop style applied to the image. In some cases, applying a
     * `CIRCLE` crop causes the image to be drawn larger than a built-in
     * icon.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Widget.ImageType image_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setImageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Card\V1\Widget\ImageType::class);
        $this->image_type = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getIcons()
    {
        return $this->whichOneof("icons");
    }

}
