<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta\ProductView;

use UnexpectedValueException;

/**
 * A product's [click
 * potential](https://support.google.com/merchants/answer/188488) estimates
 * its performance potential compared to highest performing products of the
 * merchant. Click potential of a product helps merchants to prioritize which
 * products to fix and helps them understand how products are performing
 * against their potential.
 *
 * Protobuf type <code>google.shopping.merchant.reports.v1beta.ProductView.ClickPotential</code>
 */
class ClickPotential
{
    /**
     * Unknown predicted clicks impact.
     *
     * Generated from protobuf enum <code>CLICK_POTENTIAL_UNSPECIFIED = 0;</code>
     */
    const CLICK_POTENTIAL_UNSPECIFIED = 0;
    /**
     * Potential to receive a low number of clicks compared to the highest
     * performing products of the merchant.
     *
     * Generated from protobuf enum <code>LOW = 1;</code>
     */
    const LOW = 1;
    /**
     * Potential to receive a moderate number of clicks compared to the highest
     * performing products of the merchant.
     *
     * Generated from protobuf enum <code>MEDIUM = 2;</code>
     */
    const MEDIUM = 2;
    /**
     * Potential to receive a similar number of clicks as the highest performing
     * products of the merchant.
     *
     * Generated from protobuf enum <code>HIGH = 3;</code>
     */
    const HIGH = 3;

    private static $valueToName = [
        self::CLICK_POTENTIAL_UNSPECIFIED => 'CLICK_POTENTIAL_UNSPECIFIED',
        self::LOW => 'LOW',
        self::MEDIUM => 'MEDIUM',
        self::HIGH => 'HIGH',
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

