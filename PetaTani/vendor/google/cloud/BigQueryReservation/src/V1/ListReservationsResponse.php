<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [ReservationService.ListReservations][google.cloud.bigquery.reservation.v1.ReservationService.ListReservations].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.ListReservationsResponse</code>
 */
class ListReservationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of reservations visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.Reservation reservations = 1;</code>
     */
    private $reservations;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BigQuery\Reservation\V1\Reservation>|\Google\Protobuf\Internal\RepeatedField $reservations
     *           List of reservations visible to the user.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * List of reservations visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.Reservation reservations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * List of reservations visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.Reservation reservations = 1;</code>
     * @param array<\Google\Cloud\BigQuery\Reservation\V1\Reservation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Reservation\V1\Reservation::class);
        $this->reservations = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
