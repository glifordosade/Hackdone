<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/attachment.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An attachment in Google Chat.
 *
 * Generated from protobuf message <code>google.chat.v1.Attachment</code>
 */
class Attachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Resource name of the attachment, in the form
     * `spaces/{space}/messages/{message}/attachments/{attachment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Output only. The original file name for the content, not the full path.
     *
     * Generated from protobuf field <code>string content_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $content_name = '';
    /**
     * Output only. The content type (MIME type) of the file.
     *
     * Generated from protobuf field <code>string content_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $content_type = '';
    /**
     * Output only. The thumbnail URL which should be used to preview the
     * attachment to a human user. Chat apps shouldn't use this URL to download
     * attachment content.
     *
     * Generated from protobuf field <code>string thumbnail_uri = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $thumbnail_uri = '';
    /**
     * Output only. The download URL which should be used to allow a human user to
     * download the attachment. Chat apps shouldn't use this URL to download
     * attachment content.
     *
     * Generated from protobuf field <code>string download_uri = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $download_uri = '';
    /**
     * Output only. The source of the attachment.
     *
     * Generated from protobuf field <code>.google.chat.v1.Attachment.Source source = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $source = 0;
    protected $data_ref;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Resource name of the attachment, in the form
     *           `spaces/{space}/messages/{message}/attachments/{attachment}`.
     *     @type string $content_name
     *           Output only. The original file name for the content, not the full path.
     *     @type string $content_type
     *           Output only. The content type (MIME type) of the file.
     *     @type \Google\Apps\Chat\V1\AttachmentDataRef $attachment_data_ref
     *           Optional. A reference to the attachment data. This field is used to
     *           create or update messages with attachments, or with the media API to
     *           download the attachment data.
     *     @type \Google\Apps\Chat\V1\DriveDataRef $drive_data_ref
     *           Output only. A reference to the Google Drive attachment. This field is
     *           used with the Google Drive API.
     *     @type string $thumbnail_uri
     *           Output only. The thumbnail URL which should be used to preview the
     *           attachment to a human user. Chat apps shouldn't use this URL to download
     *           attachment content.
     *     @type string $download_uri
     *           Output only. The download URL which should be used to allow a human user to
     *           download the attachment. Chat apps shouldn't use this URL to download
     *           attachment content.
     *     @type int $source
     *           Output only. The source of the attachment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Attachment::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Resource name of the attachment, in the form
     * `spaces/{space}/messages/{message}/attachments/{attachment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Resource name of the attachment, in the form
     * `spaces/{space}/messages/{message}/attachments/{attachment}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. The original file name for the content, not the full path.
     *
     * Generated from protobuf field <code>string content_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getContentName()
    {
        return $this->content_name;
    }

    /**
     * Output only. The original file name for the content, not the full path.
     *
     * Generated from protobuf field <code>string content_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setContentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_name = $var;

        return $this;
    }

    /**
     * Output only. The content type (MIME type) of the file.
     *
     * Generated from protobuf field <code>string content_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Output only. The content type (MIME type) of the file.
     *
     * Generated from protobuf field <code>string content_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_type = $var;

        return $this;
    }

    /**
     * Optional. A reference to the attachment data. This field is used to
     * create or update messages with attachments, or with the media API to
     * download the attachment data.
     *
     * Generated from protobuf field <code>.google.chat.v1.AttachmentDataRef attachment_data_ref = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Apps\Chat\V1\AttachmentDataRef|null
     */
    public function getAttachmentDataRef()
    {
        return $this->readOneof(4);
    }

    public function hasAttachmentDataRef()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. A reference to the attachment data. This field is used to
     * create or update messages with attachments, or with the media API to
     * download the attachment data.
     *
     * Generated from protobuf field <code>.google.chat.v1.AttachmentDataRef attachment_data_ref = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Apps\Chat\V1\AttachmentDataRef $var
     * @return $this
     */
    public function setAttachmentDataRef($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\AttachmentDataRef::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. A reference to the Google Drive attachment. This field is
     * used with the Google Drive API.
     *
     * Generated from protobuf field <code>.google.chat.v1.DriveDataRef drive_data_ref = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Apps\Chat\V1\DriveDataRef|null
     */
    public function getDriveDataRef()
    {
        return $this->readOneof(7);
    }

    public function hasDriveDataRef()
    {
        return $this->hasOneof(7);
    }

    /**
     * Output only. A reference to the Google Drive attachment. This field is
     * used with the Google Drive API.
     *
     * Generated from protobuf field <code>.google.chat.v1.DriveDataRef drive_data_ref = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Apps\Chat\V1\DriveDataRef $var
     * @return $this
     */
    public function setDriveDataRef($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\DriveDataRef::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. The thumbnail URL which should be used to preview the
     * attachment to a human user. Chat apps shouldn't use this URL to download
     * attachment content.
     *
     * Generated from protobuf field <code>string thumbnail_uri = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getThumbnailUri()
    {
        return $this->thumbnail_uri;
    }

    /**
     * Output only. The thumbnail URL which should be used to preview the
     * attachment to a human user. Chat apps shouldn't use this URL to download
     * attachment content.
     *
     * Generated from protobuf field <code>string thumbnail_uri = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setThumbnailUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbnail_uri = $var;

        return $this;
    }

    /**
     * Output only. The download URL which should be used to allow a human user to
     * download the attachment. Chat apps shouldn't use this URL to download
     * attachment content.
     *
     * Generated from protobuf field <code>string download_uri = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDownloadUri()
    {
        return $this->download_uri;
    }

    /**
     * Output only. The download URL which should be used to allow a human user to
     * download the attachment. Chat apps shouldn't use this URL to download
     * attachment content.
     *
     * Generated from protobuf field <code>string download_uri = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->download_uri = $var;

        return $this;
    }

    /**
     * Output only. The source of the attachment.
     *
     * Generated from protobuf field <code>.google.chat.v1.Attachment.Source source = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Output only. The source of the attachment.
     *
     * Generated from protobuf field <code>.google.chat.v1.Attachment.Source source = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\Attachment\Source::class);
        $this->source = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataRef()
    {
        return $this->whichOneof("data_ref");
    }

}
