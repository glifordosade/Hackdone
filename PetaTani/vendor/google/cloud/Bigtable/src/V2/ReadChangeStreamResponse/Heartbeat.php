<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2\ReadChangeStreamResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A periodic message with information that can be used to checkpoint
 * the state of a stream.
 *
 * Generated from protobuf message <code>google.bigtable.v2.ReadChangeStreamResponse.Heartbeat</code>
 */
class Heartbeat extends \Google\Protobuf\Internal\Message
{
    /**
     * A token that can be provided to a subsequent `ReadChangeStream` call
     * to pick up reading at the current stream position.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamContinuationToken continuation_token = 1;</code>
     */
    protected $continuation_token = null;
    /**
     * An estimate of the commit timestamp that is usually lower than or equal
     * to any timestamp for a record that will be delivered in the future on the
     * stream. It is possible that, under particular circumstances that a future
     * record has a timestamp is is lower than a previously seen timestamp. For
     * an example usage see
     * https://beam.apache.org/documentation/basics/#watermarks
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_low_watermark = 2;</code>
     */
    protected $estimated_low_watermark = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\V2\StreamContinuationToken $continuation_token
     *           A token that can be provided to a subsequent `ReadChangeStream` call
     *           to pick up reading at the current stream position.
     *     @type \Google\Protobuf\Timestamp $estimated_low_watermark
     *           An estimate of the commit timestamp that is usually lower than or equal
     *           to any timestamp for a record that will be delivered in the future on the
     *           stream. It is possible that, under particular circumstances that a future
     *           record has a timestamp is is lower than a previously seen timestamp. For
     *           an example usage see
     *           https://beam.apache.org/documentation/basics/#watermarks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * A token that can be provided to a subsequent `ReadChangeStream` call
     * to pick up reading at the current stream position.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamContinuationToken continuation_token = 1;</code>
     * @return \Google\Cloud\Bigtable\V2\StreamContinuationToken|null
     */
    public function getContinuationToken()
    {
        return $this->continuation_token;
    }

    public function hasContinuationToken()
    {
        return isset($this->continuation_token);
    }

    public function clearContinuationToken()
    {
        unset($this->continuation_token);
    }

    /**
     * A token that can be provided to a subsequent `ReadChangeStream` call
     * to pick up reading at the current stream position.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.StreamContinuationToken continuation_token = 1;</code>
     * @param \Google\Cloud\Bigtable\V2\StreamContinuationToken $var
     * @return $this
     */
    public function setContinuationToken($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\StreamContinuationToken::class);
        $this->continuation_token = $var;

        return $this;
    }

    /**
     * An estimate of the commit timestamp that is usually lower than or equal
     * to any timestamp for a record that will be delivered in the future on the
     * stream. It is possible that, under particular circumstances that a future
     * record has a timestamp is is lower than a previously seen timestamp. For
     * an example usage see
     * https://beam.apache.org/documentation/basics/#watermarks
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_low_watermark = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEstimatedLowWatermark()
    {
        return $this->estimated_low_watermark;
    }

    public function hasEstimatedLowWatermark()
    {
        return isset($this->estimated_low_watermark);
    }

    public function clearEstimatedLowWatermark()
    {
        unset($this->estimated_low_watermark);
    }

    /**
     * An estimate of the commit timestamp that is usually lower than or equal
     * to any timestamp for a record that will be delivered in the future on the
     * stream. It is possible that, under particular circumstances that a future
     * record has a timestamp is is lower than a previously seen timestamp. For
     * an example usage see
     * https://beam.apache.org/documentation/basics/#watermarks
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_low_watermark = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEstimatedLowWatermark($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->estimated_low_watermark = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Heartbeat::class, \Google\Cloud\Bigtable\V2\ReadChangeStreamResponse_Heartbeat::class);
