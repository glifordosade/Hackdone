<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchResponse\Summary;

use UnexpectedValueException;

/**
 * An Enum for summary-skipped reasons.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.SearchResponse.Summary.SummarySkippedReason</code>
 */
class SummarySkippedReason
{
    /**
     * Default value. The summary skipped reason is not specified.
     *
     * Generated from protobuf enum <code>SUMMARY_SKIPPED_REASON_UNSPECIFIED = 0;</code>
     */
    const SUMMARY_SKIPPED_REASON_UNSPECIFIED = 0;
    /**
     * The adversarial query ignored case.
     * Only used when
     * [SummarySpec.ignore_adversarial_query][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ignore_adversarial_query]
     * is set to `true`.
     *
     * Generated from protobuf enum <code>ADVERSARIAL_QUERY_IGNORED = 1;</code>
     */
    const ADVERSARIAL_QUERY_IGNORED = 1;
    /**
     * The non-summary seeking query ignored case.
     * Google skips the summary if the query is chit chat.
     * Only used when
     * [SummarySpec.ignore_non_summary_seeking_query][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ignore_non_summary_seeking_query]
     * is set to `true`.
     *
     * Generated from protobuf enum <code>NON_SUMMARY_SEEKING_QUERY_IGNORED = 2;</code>
     */
    const NON_SUMMARY_SEEKING_QUERY_IGNORED = 2;
    /**
     * The out-of-domain query ignored case.
     * Google skips the summary if there are no high-relevance search results.
     * For example, the data store contains facts about company A but the
     * user query is asking questions about company B.
     *
     * Generated from protobuf enum <code>OUT_OF_DOMAIN_QUERY_IGNORED = 3;</code>
     */
    const OUT_OF_DOMAIN_QUERY_IGNORED = 3;
    /**
     * The potential policy violation case.
     * Google skips the summary if there is a potential policy violation
     * detected. This includes content that may be violent or toxic.
     *
     * Generated from protobuf enum <code>POTENTIAL_POLICY_VIOLATION = 4;</code>
     */
    const POTENTIAL_POLICY_VIOLATION = 4;
    /**
     * The LLM addon not enabled case.
     * Google skips the summary if the LLM addon is not enabled.
     *
     * Generated from protobuf enum <code>LLM_ADDON_NOT_ENABLED = 5;</code>
     */
    const LLM_ADDON_NOT_ENABLED = 5;
    /**
     * The no relevant content case.
     * Google skips the summary if there is no relevant content in the
     * retrieved search results.
     *
     * Generated from protobuf enum <code>NO_RELEVANT_CONTENT = 6;</code>
     */
    const NO_RELEVANT_CONTENT = 6;
    /**
     * The jail-breaking query ignored case.
     * For example, "Reply in the tone of a competing company's CEO".
     * Only used when
     * [SearchRequest.ContentSearchSpec.SummarySpec.ignore_jail_breaking_query]
     * is set to `true`.
     *
     * Generated from protobuf enum <code>JAIL_BREAKING_QUERY_IGNORED = 7;</code>
     */
    const JAIL_BREAKING_QUERY_IGNORED = 7;
    /**
     * The customer policy violation case.
     * Google skips the summary if there is a customer policy violation
     * detected. The policy is defined by the customer.
     *
     * Generated from protobuf enum <code>CUSTOMER_POLICY_VIOLATION = 8;</code>
     */
    const CUSTOMER_POLICY_VIOLATION = 8;
    /**
     * The non-answer seeking query ignored case.
     * Google skips the summary if the query doesn't have clear intent.
     * Only used when
     * [SearchRequest.ContentSearchSpec.SummarySpec.ignore_non_answer_seeking_query]
     * is set to `true`.
     *
     * Generated from protobuf enum <code>NON_SUMMARY_SEEKING_QUERY_IGNORED_V2 = 9;</code>
     */
    const NON_SUMMARY_SEEKING_QUERY_IGNORED_V2 = 9;

    private static $valueToName = [
        self::SUMMARY_SKIPPED_REASON_UNSPECIFIED => 'SUMMARY_SKIPPED_REASON_UNSPECIFIED',
        self::ADVERSARIAL_QUERY_IGNORED => 'ADVERSARIAL_QUERY_IGNORED',
        self::NON_SUMMARY_SEEKING_QUERY_IGNORED => 'NON_SUMMARY_SEEKING_QUERY_IGNORED',
        self::OUT_OF_DOMAIN_QUERY_IGNORED => 'OUT_OF_DOMAIN_QUERY_IGNORED',
        self::POTENTIAL_POLICY_VIOLATION => 'POTENTIAL_POLICY_VIOLATION',
        self::LLM_ADDON_NOT_ENABLED => 'LLM_ADDON_NOT_ENABLED',
        self::NO_RELEVANT_CONTENT => 'NO_RELEVANT_CONTENT',
        self::JAIL_BREAKING_QUERY_IGNORED => 'JAIL_BREAKING_QUERY_IGNORED',
        self::CUSTOMER_POLICY_VIOLATION => 'CUSTOMER_POLICY_VIOLATION',
        self::NON_SUMMARY_SEEKING_QUERY_IGNORED_V2 => 'NON_SUMMARY_SEEKING_QUERY_IGNORED_V2',
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

