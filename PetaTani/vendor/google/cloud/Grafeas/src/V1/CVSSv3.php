<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/cvss.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Common Vulnerability Scoring System version 3.
 * For details, see https://www.first.org/cvss/specification-document
 *
 * Generated from protobuf message <code>grafeas.v1.CVSSv3</code>
 */
class CVSSv3 extends \Google\Protobuf\Internal\Message
{
    /**
     * The base score is a function of the base metric scores.
     *
     * Generated from protobuf field <code>float base_score = 1;</code>
     */
    protected $base_score = 0.0;
    /**
     * Generated from protobuf field <code>float exploitability_score = 2;</code>
     */
    protected $exploitability_score = 0.0;
    /**
     * Generated from protobuf field <code>float impact_score = 3;</code>
     */
    protected $impact_score = 0.0;
    /**
     * Base Metrics
     * Represents the intrinsic characteristics of a vulnerability that are
     * constant over time and across user environments.
     *
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.AttackVector attack_vector = 5;</code>
     */
    protected $attack_vector = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.AttackComplexity attack_complexity = 6;</code>
     */
    protected $attack_complexity = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.PrivilegesRequired privileges_required = 7;</code>
     */
    protected $privileges_required = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.UserInteraction user_interaction = 8;</code>
     */
    protected $user_interaction = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Scope scope = 9;</code>
     */
    protected $scope = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact confidentiality_impact = 10;</code>
     */
    protected $confidentiality_impact = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact integrity_impact = 11;</code>
     */
    protected $integrity_impact = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact availability_impact = 12;</code>
     */
    protected $availability_impact = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $base_score
     *           The base score is a function of the base metric scores.
     *     @type float $exploitability_score
     *     @type float $impact_score
     *     @type int $attack_vector
     *           Base Metrics
     *           Represents the intrinsic characteristics of a vulnerability that are
     *           constant over time and across user environments.
     *     @type int $attack_complexity
     *     @type int $privileges_required
     *     @type int $user_interaction
     *     @type int $scope
     *     @type int $confidentiality_impact
     *     @type int $integrity_impact
     *     @type int $availability_impact
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Cvss::initOnce();
        parent::__construct($data);
    }

    /**
     * The base score is a function of the base metric scores.
     *
     * Generated from protobuf field <code>float base_score = 1;</code>
     * @return float
     */
    public function getBaseScore()
    {
        return $this->base_score;
    }

    /**
     * The base score is a function of the base metric scores.
     *
     * Generated from protobuf field <code>float base_score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBaseScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->base_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float exploitability_score = 2;</code>
     * @return float
     */
    public function getExploitabilityScore()
    {
        return $this->exploitability_score;
    }

    /**
     * Generated from protobuf field <code>float exploitability_score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setExploitabilityScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->exploitability_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float impact_score = 3;</code>
     * @return float
     */
    public function getImpactScore()
    {
        return $this->impact_score;
    }

    /**
     * Generated from protobuf field <code>float impact_score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setImpactScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->impact_score = $var;

        return $this;
    }

    /**
     * Base Metrics
     * Represents the intrinsic characteristics of a vulnerability that are
     * constant over time and across user environments.
     *
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.AttackVector attack_vector = 5;</code>
     * @return int
     */
    public function getAttackVector()
    {
        return $this->attack_vector;
    }

    /**
     * Base Metrics
     * Represents the intrinsic characteristics of a vulnerability that are
     * constant over time and across user environments.
     *
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.AttackVector attack_vector = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAttackVector($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\AttackVector::class);
        $this->attack_vector = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.AttackComplexity attack_complexity = 6;</code>
     * @return int
     */
    public function getAttackComplexity()
    {
        return $this->attack_complexity;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.AttackComplexity attack_complexity = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAttackComplexity($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\AttackComplexity::class);
        $this->attack_complexity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.PrivilegesRequired privileges_required = 7;</code>
     * @return int
     */
    public function getPrivilegesRequired()
    {
        return $this->privileges_required;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.PrivilegesRequired privileges_required = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPrivilegesRequired($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\PrivilegesRequired::class);
        $this->privileges_required = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.UserInteraction user_interaction = 8;</code>
     * @return int
     */
    public function getUserInteraction()
    {
        return $this->user_interaction;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.UserInteraction user_interaction = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setUserInteraction($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\UserInteraction::class);
        $this->user_interaction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Scope scope = 9;</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Scope scope = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\Scope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact confidentiality_impact = 10;</code>
     * @return int
     */
    public function getConfidentialityImpact()
    {
        return $this->confidentiality_impact;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact confidentiality_impact = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setConfidentialityImpact($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\Impact::class);
        $this->confidentiality_impact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact integrity_impact = 11;</code>
     * @return int
     */
    public function getIntegrityImpact()
    {
        return $this->integrity_impact;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact integrity_impact = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setIntegrityImpact($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\Impact::class);
        $this->integrity_impact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact availability_impact = 12;</code>
     * @return int
     */
    public function getAvailabilityImpact()
    {
        return $this->availability_impact;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.CVSSv3.Impact availability_impact = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailabilityImpact($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\CVSSv3\Impact::class);
        $this->availability_impact = $var;

        return $this;
    }

}
