<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/emailpreferences.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateEmailPreferences method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.UpdateEmailPreferencesRequest</code>
 */
class UpdateEmailPreferencesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Email Preferences to be updated.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.EmailPreferences email_preferences = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $email_preferences = null;
    /**
     * Required. List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences $emailPreferences Required. Email Preferences to be updated.
     * @param \Google\Protobuf\FieldMask                                 $updateMask       Required. List of fields being updated.
     *
     * @return \Google\Shopping\Merchant\Accounts\V1beta\UpdateEmailPreferencesRequest
     *
     * @experimental
     */
    public static function build(\Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences $emailPreferences, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setEmailPreferences($emailPreferences)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences $email_preferences
     *           Required. Email Preferences to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. List of fields being updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Emailpreferences::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Email Preferences to be updated.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.EmailPreferences email_preferences = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences|null
     */
    public function getEmailPreferences()
    {
        return $this->email_preferences;
    }

    public function hasEmailPreferences()
    {
        return isset($this->email_preferences);
    }

    public function clearEmailPreferences()
    {
        unset($this->email_preferences);
    }

    /**
     * Required. Email Preferences to be updated.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.EmailPreferences email_preferences = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences $var
     * @return $this
     */
    public function setEmailPreferences($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences::class);
        $this->email_preferences = $var;

        return $this;
    }

    /**
     * Required. List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
