<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Preprocessing configurations.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.PreprocessingConfig</code>
 */
class PreprocessingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Color preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Color color = 1;</code>
     */
    protected $color = null;
    /**
     * Denoise preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Denoise denoise = 2;</code>
     */
    protected $denoise = null;
    /**
     * Deblock preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Deblock deblock = 3;</code>
     */
    protected $deblock = null;
    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Audio audio = 4;</code>
     */
    protected $audio = null;
    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Crop crop = 5;</code>
     */
    protected $crop = null;
    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Pad pad = 6;</code>
     */
    protected $pad = null;
    /**
     * Specify the video deinterlace configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Deinterlace deinterlace = 7;</code>
     */
    protected $deinterlace = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Color $color
     *           Color preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Denoise $denoise
     *           Denoise preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deblock $deblock
     *           Deblock preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Audio $audio
     *           Audio preprocessing configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Crop $crop
     *           Specify the video cropping configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Pad $pad
     *           Specify the video pad filter configuration.
     *     @type \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deinterlace $deinterlace
     *           Specify the video deinterlace configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Color preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Color color = 1;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Color|null
     */
    public function getColor()
    {
        return $this->color;
    }

    public function hasColor()
    {
        return isset($this->color);
    }

    public function clearColor()
    {
        unset($this->color);
    }

    /**
     * Color preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Color color = 1;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Color $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Color::class);
        $this->color = $var;

        return $this;
    }

    /**
     * Denoise preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Denoise denoise = 2;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Denoise|null
     */
    public function getDenoise()
    {
        return $this->denoise;
    }

    public function hasDenoise()
    {
        return isset($this->denoise);
    }

    public function clearDenoise()
    {
        unset($this->denoise);
    }

    /**
     * Denoise preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Denoise denoise = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Denoise $var
     * @return $this
     */
    public function setDenoise($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Denoise::class);
        $this->denoise = $var;

        return $this;
    }

    /**
     * Deblock preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Deblock deblock = 3;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deblock|null
     */
    public function getDeblock()
    {
        return $this->deblock;
    }

    public function hasDeblock()
    {
        return isset($this->deblock);
    }

    public function clearDeblock()
    {
        unset($this->deblock);
    }

    /**
     * Deblock preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Deblock deblock = 3;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deblock $var
     * @return $this
     */
    public function setDeblock($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deblock::class);
        $this->deblock = $var;

        return $this;
    }

    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Audio audio = 4;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Audio|null
     */
    public function getAudio()
    {
        return $this->audio;
    }

    public function hasAudio()
    {
        return isset($this->audio);
    }

    public function clearAudio()
    {
        unset($this->audio);
    }

    /**
     * Audio preprocessing configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Audio audio = 4;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Audio $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Audio::class);
        $this->audio = $var;

        return $this;
    }

    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Crop crop = 5;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Crop|null
     */
    public function getCrop()
    {
        return $this->crop;
    }

    public function hasCrop()
    {
        return isset($this->crop);
    }

    public function clearCrop()
    {
        unset($this->crop);
    }

    /**
     * Specify the video cropping configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Crop crop = 5;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Crop $var
     * @return $this
     */
    public function setCrop($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Crop::class);
        $this->crop = $var;

        return $this;
    }

    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Pad pad = 6;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Pad|null
     */
    public function getPad()
    {
        return $this->pad;
    }

    public function hasPad()
    {
        return isset($this->pad);
    }

    public function clearPad()
    {
        unset($this->pad);
    }

    /**
     * Specify the video pad filter configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Pad pad = 6;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Pad $var
     * @return $this
     */
    public function setPad($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Pad::class);
        $this->pad = $var;

        return $this;
    }

    /**
     * Specify the video deinterlace configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Deinterlace deinterlace = 7;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deinterlace|null
     */
    public function getDeinterlace()
    {
        return $this->deinterlace;
    }

    public function hasDeinterlace()
    {
        return isset($this->deinterlace);
    }

    public function clearDeinterlace()
    {
        unset($this->deinterlace);
    }

    /**
     * Specify the video deinterlace configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PreprocessingConfig.Deinterlace deinterlace = 7;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deinterlace $var
     * @return $this
     */
    public function setDeinterlace($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PreprocessingConfig\Deinterlace::class);
        $this->deinterlace = $var;

        return $this;
    }

}
