<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1\Card;

use UnexpectedValueException;

/**
 * In Google Workspace Add-ons,
 * determines how a card is displayed.
 * [Google Workspace
 * Add-ons](https://developers.google.com/workspace/add-ons):
 *
 * Protobuf type <code>google.apps.card.v1.Card.DisplayStyle</code>
 */
class DisplayStyle
{
    /**
     * Don't use. Unspecified.
     *
     * Generated from protobuf enum <code>DISPLAY_STYLE_UNSPECIFIED = 0;</code>
     */
    const DISPLAY_STYLE_UNSPECIFIED = 0;
    /**
     * The header of the card appears at the bottom of the
     * sidebar, partially covering the current top card of the stack. Clicking
     * the header pops the card into the card stack. If the card has no header,
     * a generated header is used instead.
     *
     * Generated from protobuf enum <code>PEEK = 1;</code>
     */
    const PEEK = 1;
    /**
     * Default value. The card is shown by replacing the view of the top card in
     * the card stack.
     *
     * Generated from protobuf enum <code>REPLACE = 2;</code>
     */
    const REPLACE = 2;

    private static $valueToName = [
        self::DISPLAY_STYLE_UNSPECIFIED => 'DISPLAY_STYLE_UNSPECIFIED',
        self::PEEK => 'PEEK',
        self::REPLACE => 'REPLACE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

