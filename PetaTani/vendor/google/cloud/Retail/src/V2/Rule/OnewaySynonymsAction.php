<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Maps a set of terms to a set of synonyms.
 * Set of synonyms will be treated as synonyms of each query term only.
 * `query_terms` will not be treated as synonyms of each other.
 * Example: "sneakers" will use a synonym of "shoes".
 * "shoes" will not use a synonym of "sneakers".
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rule.OnewaySynonymsAction</code>
 */
class OnewaySynonymsAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Terms from the search query.
     * Will treat synonyms as their synonyms.
     * Not themselves synonyms of the synonyms.
     * Can specify up to 100 terms.
     *
     * Generated from protobuf field <code>repeated string query_terms = 3;</code>
     */
    private $query_terms;
    /**
     * Defines a set of synonyms.
     * Cannot contain duplicates.
     * Can specify up to 100 synonyms.
     *
     * Generated from protobuf field <code>repeated string synonyms = 4;</code>
     */
    private $synonyms;
    /**
     * Will be [deprecated = true] post migration;
     *
     * Generated from protobuf field <code>repeated string oneway_terms = 2;</code>
     */
    private $oneway_terms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $query_terms
     *           Terms from the search query.
     *           Will treat synonyms as their synonyms.
     *           Not themselves synonyms of the synonyms.
     *           Can specify up to 100 terms.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $synonyms
     *           Defines a set of synonyms.
     *           Cannot contain duplicates.
     *           Can specify up to 100 synonyms.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $oneway_terms
     *           Will be [deprecated = true] post migration;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Terms from the search query.
     * Will treat synonyms as their synonyms.
     * Not themselves synonyms of the synonyms.
     * Can specify up to 100 terms.
     *
     * Generated from protobuf field <code>repeated string query_terms = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryTerms()
    {
        return $this->query_terms;
    }

    /**
     * Terms from the search query.
     * Will treat synonyms as their synonyms.
     * Not themselves synonyms of the synonyms.
     * Can specify up to 100 terms.
     *
     * Generated from protobuf field <code>repeated string query_terms = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryTerms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->query_terms = $arr;

        return $this;
    }

    /**
     * Defines a set of synonyms.
     * Cannot contain duplicates.
     * Can specify up to 100 synonyms.
     *
     * Generated from protobuf field <code>repeated string synonyms = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * Defines a set of synonyms.
     * Cannot contain duplicates.
     * Can specify up to 100 synonyms.
     *
     * Generated from protobuf field <code>repeated string synonyms = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSynonyms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->synonyms = $arr;

        return $this;
    }

    /**
     * Will be [deprecated = true] post migration;
     *
     * Generated from protobuf field <code>repeated string oneway_terms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOnewayTerms()
    {
        return $this->oneway_terms;
    }

    /**
     * Will be [deprecated = true] post migration;
     *
     * Generated from protobuf field <code>repeated string oneway_terms = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOnewayTerms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->oneway_terms = $arr;

        return $this;
    }

}

