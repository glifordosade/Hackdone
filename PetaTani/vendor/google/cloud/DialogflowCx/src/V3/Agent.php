<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Agents are best described as Natural Language Understanding (NLU) modules
 * that transform user requests into actionable data. You can include agents
 * in your app, product, or service to determine user intent and respond to the
 * user in a natural way.
 * After you create an agent, you can add
 * [Intents][google.cloud.dialogflow.cx.v3.Intent], [Entity
 * Types][google.cloud.dialogflow.cx.v3.EntityType],
 * [Flows][google.cloud.dialogflow.cx.v3.Flow],
 * [Fulfillments][google.cloud.dialogflow.cx.v3.Fulfillment],
 * [Webhooks][google.cloud.dialogflow.cx.v3.Webhook],
 * [TransitionRouteGroups][google.cloud.dialogflow.cx.v3.TransitionRouteGroup]
 * and so on to manage the conversation flows.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Agent</code>
 */
class Agent extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the agent.
     * Required for the
     * [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     * method.
     * [Agents.CreateAgent][google.cloud.dialogflow.cx.v3.Agents.CreateAgent]
     * populates the name automatically.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The human-readable name of the agent, unique within the location.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Required. Immutable. The default language of the agent as a language tag.
     * See [Language
     * Support](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * for a list of the currently supported language codes.
     * This field cannot be set by the
     * [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     * method.
     *
     * Generated from protobuf field <code>string default_language_code = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $default_language_code = '';
    /**
     * The list of all languages supported by the agent (except for the
     * `default_language_code`).
     *
     * Generated from protobuf field <code>repeated string supported_language_codes = 4;</code>
     */
    private $supported_language_codes;
    /**
     * Required. The time zone of the agent from the [time zone
     * database](https://www.iana.org/time-zones), e.g., America/New_York,
     * Europe/Paris.
     *
     * Generated from protobuf field <code>string time_zone = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_zone = '';
    /**
     * The description of the agent. The maximum length is 500 characters. If
     * exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = '';
    /**
     * The URI of the agent's avatar. Avatars are used throughout the Dialogflow
     * console and in the self-hosted [Web
     * Demo](https://cloud.google.com/dialogflow/docs/integrations/web-demo)
     * integration.
     *
     * Generated from protobuf field <code>string avatar_uri = 7;</code>
     */
    protected $avatar_uri = '';
    /**
     * Speech recognition related settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SpeechToTextSettings speech_to_text_settings = 13;</code>
     */
    protected $speech_to_text_settings = null;
    /**
     * Immutable. Name of the start flow in this agent. A start flow will be
     * automatically created when the agent is created, and can only be deleted by
     * deleting the agent. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string start_flow = 16 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $start_flow = '';
    /**
     * Name of the
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings]
     * reference for the agent. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string security_settings = 17 [(.google.api.resource_reference) = {</code>
     */
    protected $security_settings = '';
    /**
     * Indicates if stackdriver logging is enabled for the agent.
     * Please use
     * [agent.advanced_settings][google.cloud.dialogflow.cx.v3.AdvancedSettings.LoggingSettings]
     * instead.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 18 [deprecated = true];</code>
     * @deprecated
     */
    protected $enable_stackdriver_logging = false;
    /**
     * Indicates if automatic spell correction is enabled in detect intent
     * requests.
     *
     * Generated from protobuf field <code>bool enable_spell_correction = 20;</code>
     */
    protected $enable_spell_correction = false;
    /**
     * Optional. Enable training multi-lingual models for this agent. These models
     * will be trained on all the languages supported by the agent.
     *
     * Generated from protobuf field <code>bool enable_multi_language_training = 40 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_multi_language_training = false;
    /**
     * Indicates whether the agent is locked for changes. If the agent is locked,
     * modifications to the agent will be rejected except for [RestoreAgent][].
     *
     * Generated from protobuf field <code>bool locked = 27;</code>
     */
    protected $locked = false;
    /**
     * Hierarchical advanced settings for this agent. The settings exposed at the
     * lower level overrides the settings exposed at the higher level.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.AdvancedSettings advanced_settings = 22;</code>
     */
    protected $advanced_settings = null;
    /**
     * Git integration settings for this agent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings git_integration_settings = 30;</code>
     */
    protected $git_integration_settings = null;
    /**
     * Settings on instructing the speech synthesizer on how to generate the
     * output audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TextToSpeechSettings text_to_speech_settings = 31;</code>
     */
    protected $text_to_speech_settings = null;
    /**
     * Gen App Builder-related agent-level settings.
     *
     * Generated from protobuf field <code>optional .google.cloud.dialogflow.cx.v3.Agent.GenAppBuilderSettings gen_app_builder_settings = 33;</code>
     */
    protected $gen_app_builder_settings = null;
    /**
     * Optional. Answer feedback collection settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.AnswerFeedbackSettings answer_feedback_settings = 38 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $answer_feedback_settings = null;
    /**
     * Optional. Settings for end user personalization.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.PersonalizationSettings personalization_settings = 42 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $personalization_settings = null;
    /**
     * Optional. Settings for custom client certificates.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.ClientCertificateSettings client_certificate_settings = 43 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $client_certificate_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique identifier of the agent.
     *           Required for the
     *           [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     *           method.
     *           [Agents.CreateAgent][google.cloud.dialogflow.cx.v3.Agents.CreateAgent]
     *           populates the name automatically.
     *           Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *     @type string $display_name
     *           Required. The human-readable name of the agent, unique within the location.
     *     @type string $default_language_code
     *           Required. Immutable. The default language of the agent as a language tag.
     *           See [Language
     *           Support](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           for a list of the currently supported language codes.
     *           This field cannot be set by the
     *           [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     *           method.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $supported_language_codes
     *           The list of all languages supported by the agent (except for the
     *           `default_language_code`).
     *     @type string $time_zone
     *           Required. The time zone of the agent from the [time zone
     *           database](https://www.iana.org/time-zones), e.g., America/New_York,
     *           Europe/Paris.
     *     @type string $description
     *           The description of the agent. The maximum length is 500 characters. If
     *           exceeded, the request is rejected.
     *     @type string $avatar_uri
     *           The URI of the agent's avatar. Avatars are used throughout the Dialogflow
     *           console and in the self-hosted [Web
     *           Demo](https://cloud.google.com/dialogflow/docs/integrations/web-demo)
     *           integration.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\SpeechToTextSettings $speech_to_text_settings
     *           Speech recognition related settings.
     *     @type string $start_flow
     *           Immutable. Name of the start flow in this agent. A start flow will be
     *           automatically created when the agent is created, and can only be deleted by
     *           deleting the agent. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *     @type string $security_settings
     *           Name of the
     *           [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings]
     *           reference for the agent. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *     @type bool $enable_stackdriver_logging
     *           Indicates if stackdriver logging is enabled for the agent.
     *           Please use
     *           [agent.advanced_settings][google.cloud.dialogflow.cx.v3.AdvancedSettings.LoggingSettings]
     *           instead.
     *     @type bool $enable_spell_correction
     *           Indicates if automatic spell correction is enabled in detect intent
     *           requests.
     *     @type bool $enable_multi_language_training
     *           Optional. Enable training multi-lingual models for this agent. These models
     *           will be trained on all the languages supported by the agent.
     *     @type bool $locked
     *           Indicates whether the agent is locked for changes. If the agent is locked,
     *           modifications to the agent will be rejected except for [RestoreAgent][].
     *     @type \Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings $advanced_settings
     *           Hierarchical advanced settings for this agent. The settings exposed at the
     *           lower level overrides the settings exposed at the higher level.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings $git_integration_settings
     *           Git integration settings for this agent.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TextToSpeechSettings $text_to_speech_settings
     *           Settings on instructing the speech synthesizer on how to generate the
     *           output audio content.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Agent\GenAppBuilderSettings $gen_app_builder_settings
     *           Gen App Builder-related agent-level settings.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Agent\AnswerFeedbackSettings $answer_feedback_settings
     *           Optional. Answer feedback collection settings.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Agent\PersonalizationSettings $personalization_settings
     *           Optional. Settings for end user personalization.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Agent\ClientCertificateSettings $client_certificate_settings
     *           Optional. Settings for custom client certificates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the agent.
     * Required for the
     * [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     * method.
     * [Agents.CreateAgent][google.cloud.dialogflow.cx.v3.Agents.CreateAgent]
     * populates the name automatically.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique identifier of the agent.
     * Required for the
     * [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     * method.
     * [Agents.CreateAgent][google.cloud.dialogflow.cx.v3.Agents.CreateAgent]
     * populates the name automatically.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The human-readable name of the agent, unique within the location.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The human-readable name of the agent, unique within the location.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Immutable. The default language of the agent as a language tag.
     * See [Language
     * Support](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * for a list of the currently supported language codes.
     * This field cannot be set by the
     * [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     * method.
     *
     * Generated from protobuf field <code>string default_language_code = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getDefaultLanguageCode()
    {
        return $this->default_language_code;
    }

    /**
     * Required. Immutable. The default language of the agent as a language tag.
     * See [Language
     * Support](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * for a list of the currently supported language codes.
     * This field cannot be set by the
     * [Agents.UpdateAgent][google.cloud.dialogflow.cx.v3.Agents.UpdateAgent]
     * method.
     *
     * Generated from protobuf field <code>string default_language_code = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_language_code = $var;

        return $this;
    }

    /**
     * The list of all languages supported by the agent (except for the
     * `default_language_code`).
     *
     * Generated from protobuf field <code>repeated string supported_language_codes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedLanguageCodes()
    {
        return $this->supported_language_codes;
    }

    /**
     * The list of all languages supported by the agent (except for the
     * `default_language_code`).
     *
     * Generated from protobuf field <code>repeated string supported_language_codes = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedLanguageCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->supported_language_codes = $arr;

        return $this;
    }

    /**
     * Required. The time zone of the agent from the [time zone
     * database](https://www.iana.org/time-zones), e.g., America/New_York,
     * Europe/Paris.
     *
     * Generated from protobuf field <code>string time_zone = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Required. The time zone of the agent from the [time zone
     * database](https://www.iana.org/time-zones), e.g., America/New_York,
     * Europe/Paris.
     *
     * Generated from protobuf field <code>string time_zone = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * The description of the agent. The maximum length is 500 characters. If
     * exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the agent. The maximum length is 500 characters. If
     * exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The URI of the agent's avatar. Avatars are used throughout the Dialogflow
     * console and in the self-hosted [Web
     * Demo](https://cloud.google.com/dialogflow/docs/integrations/web-demo)
     * integration.
     *
     * Generated from protobuf field <code>string avatar_uri = 7;</code>
     * @return string
     */
    public function getAvatarUri()
    {
        return $this->avatar_uri;
    }

    /**
     * The URI of the agent's avatar. Avatars are used throughout the Dialogflow
     * console and in the self-hosted [Web
     * Demo](https://cloud.google.com/dialogflow/docs/integrations/web-demo)
     * integration.
     *
     * Generated from protobuf field <code>string avatar_uri = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAvatarUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar_uri = $var;

        return $this;
    }

    /**
     * Speech recognition related settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SpeechToTextSettings speech_to_text_settings = 13;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\SpeechToTextSettings|null
     */
    public function getSpeechToTextSettings()
    {
        return $this->speech_to_text_settings;
    }

    public function hasSpeechToTextSettings()
    {
        return isset($this->speech_to_text_settings);
    }

    public function clearSpeechToTextSettings()
    {
        unset($this->speech_to_text_settings);
    }

    /**
     * Speech recognition related settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SpeechToTextSettings speech_to_text_settings = 13;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\SpeechToTextSettings $var
     * @return $this
     */
    public function setSpeechToTextSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\SpeechToTextSettings::class);
        $this->speech_to_text_settings = $var;

        return $this;
    }

    /**
     * Immutable. Name of the start flow in this agent. A start flow will be
     * automatically created when the agent is created, and can only be deleted by
     * deleting the agent. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string start_flow = 16 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getStartFlow()
    {
        return $this->start_flow;
    }

    /**
     * Immutable. Name of the start flow in this agent. A start flow will be
     * automatically created when the agent is created, and can only be deleted by
     * deleting the agent. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>`.
     *
     * Generated from protobuf field <code>string start_flow = 16 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setStartFlow($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_flow = $var;

        return $this;
    }

    /**
     * Name of the
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings]
     * reference for the agent. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string security_settings = 17 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSecuritySettings()
    {
        return $this->security_settings;
    }

    /**
     * Name of the
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings]
     * reference for the agent. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string security_settings = 17 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSecuritySettings($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_settings = $var;

        return $this;
    }

    /**
     * Indicates if stackdriver logging is enabled for the agent.
     * Please use
     * [agent.advanced_settings][google.cloud.dialogflow.cx.v3.AdvancedSettings.LoggingSettings]
     * instead.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 18 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getEnableStackdriverLogging()
    {
        @trigger_error('enable_stackdriver_logging is deprecated.', E_USER_DEPRECATED);
        return $this->enable_stackdriver_logging;
    }

    /**
     * Indicates if stackdriver logging is enabled for the agent.
     * Please use
     * [agent.advanced_settings][google.cloud.dialogflow.cx.v3.AdvancedSettings.LoggingSettings]
     * instead.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 18 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setEnableStackdriverLogging($var)
    {
        @trigger_error('enable_stackdriver_logging is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->enable_stackdriver_logging = $var;

        return $this;
    }

    /**
     * Indicates if automatic spell correction is enabled in detect intent
     * requests.
     *
     * Generated from protobuf field <code>bool enable_spell_correction = 20;</code>
     * @return bool
     */
    public function getEnableSpellCorrection()
    {
        return $this->enable_spell_correction;
    }

    /**
     * Indicates if automatic spell correction is enabled in detect intent
     * requests.
     *
     * Generated from protobuf field <code>bool enable_spell_correction = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSpellCorrection($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_spell_correction = $var;

        return $this;
    }

    /**
     * Optional. Enable training multi-lingual models for this agent. These models
     * will be trained on all the languages supported by the agent.
     *
     * Generated from protobuf field <code>bool enable_multi_language_training = 40 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableMultiLanguageTraining()
    {
        return $this->enable_multi_language_training;
    }

    /**
     * Optional. Enable training multi-lingual models for this agent. These models
     * will be trained on all the languages supported by the agent.
     *
     * Generated from protobuf field <code>bool enable_multi_language_training = 40 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableMultiLanguageTraining($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_multi_language_training = $var;

        return $this;
    }

    /**
     * Indicates whether the agent is locked for changes. If the agent is locked,
     * modifications to the agent will be rejected except for [RestoreAgent][].
     *
     * Generated from protobuf field <code>bool locked = 27;</code>
     * @return bool
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Indicates whether the agent is locked for changes. If the agent is locked,
     * modifications to the agent will be rejected except for [RestoreAgent][].
     *
     * Generated from protobuf field <code>bool locked = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocked($var)
    {
        GPBUtil::checkBool($var);
        $this->locked = $var;

        return $this;
    }

    /**
     * Hierarchical advanced settings for this agent. The settings exposed at the
     * lower level overrides the settings exposed at the higher level.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.AdvancedSettings advanced_settings = 22;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings|null
     */
    public function getAdvancedSettings()
    {
        return $this->advanced_settings;
    }

    public function hasAdvancedSettings()
    {
        return isset($this->advanced_settings);
    }

    public function clearAdvancedSettings()
    {
        unset($this->advanced_settings);
    }

    /**
     * Hierarchical advanced settings for this agent. The settings exposed at the
     * lower level overrides the settings exposed at the higher level.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.AdvancedSettings advanced_settings = 22;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings $var
     * @return $this
     */
    public function setAdvancedSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings::class);
        $this->advanced_settings = $var;

        return $this;
    }

    /**
     * Git integration settings for this agent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings git_integration_settings = 30;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings|null
     */
    public function getGitIntegrationSettings()
    {
        return $this->git_integration_settings;
    }

    public function hasGitIntegrationSettings()
    {
        return isset($this->git_integration_settings);
    }

    public function clearGitIntegrationSettings()
    {
        unset($this->git_integration_settings);
    }

    /**
     * Git integration settings for this agent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.GitIntegrationSettings git_integration_settings = 30;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings $var
     * @return $this
     */
    public function setGitIntegrationSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Agent\GitIntegrationSettings::class);
        $this->git_integration_settings = $var;

        return $this;
    }

    /**
     * Settings on instructing the speech synthesizer on how to generate the
     * output audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TextToSpeechSettings text_to_speech_settings = 31;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TextToSpeechSettings|null
     */
    public function getTextToSpeechSettings()
    {
        return $this->text_to_speech_settings;
    }

    public function hasTextToSpeechSettings()
    {
        return isset($this->text_to_speech_settings);
    }

    public function clearTextToSpeechSettings()
    {
        unset($this->text_to_speech_settings);
    }

    /**
     * Settings on instructing the speech synthesizer on how to generate the
     * output audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TextToSpeechSettings text_to_speech_settings = 31;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TextToSpeechSettings $var
     * @return $this
     */
    public function setTextToSpeechSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TextToSpeechSettings::class);
        $this->text_to_speech_settings = $var;

        return $this;
    }

    /**
     * Gen App Builder-related agent-level settings.
     *
     * Generated from protobuf field <code>optional .google.cloud.dialogflow.cx.v3.Agent.GenAppBuilderSettings gen_app_builder_settings = 33;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Agent\GenAppBuilderSettings|null
     */
    public function getGenAppBuilderSettings()
    {
        return $this->gen_app_builder_settings;
    }

    public function hasGenAppBuilderSettings()
    {
        return isset($this->gen_app_builder_settings);
    }

    public function clearGenAppBuilderSettings()
    {
        unset($this->gen_app_builder_settings);
    }

    /**
     * Gen App Builder-related agent-level settings.
     *
     * Generated from protobuf field <code>optional .google.cloud.dialogflow.cx.v3.Agent.GenAppBuilderSettings gen_app_builder_settings = 33;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Agent\GenAppBuilderSettings $var
     * @return $this
     */
    public function setGenAppBuilderSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Agent\GenAppBuilderSettings::class);
        $this->gen_app_builder_settings = $var;

        return $this;
    }

    /**
     * Optional. Answer feedback collection settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.AnswerFeedbackSettings answer_feedback_settings = 38 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Agent\AnswerFeedbackSettings|null
     */
    public function getAnswerFeedbackSettings()
    {
        return $this->answer_feedback_settings;
    }

    public function hasAnswerFeedbackSettings()
    {
        return isset($this->answer_feedback_settings);
    }

    public function clearAnswerFeedbackSettings()
    {
        unset($this->answer_feedback_settings);
    }

    /**
     * Optional. Answer feedback collection settings.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.AnswerFeedbackSettings answer_feedback_settings = 38 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Agent\AnswerFeedbackSettings $var
     * @return $this
     */
    public function setAnswerFeedbackSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Agent\AnswerFeedbackSettings::class);
        $this->answer_feedback_settings = $var;

        return $this;
    }

    /**
     * Optional. Settings for end user personalization.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.PersonalizationSettings personalization_settings = 42 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Agent\PersonalizationSettings|null
     */
    public function getPersonalizationSettings()
    {
        return $this->personalization_settings;
    }

    public function hasPersonalizationSettings()
    {
        return isset($this->personalization_settings);
    }

    public function clearPersonalizationSettings()
    {
        unset($this->personalization_settings);
    }

    /**
     * Optional. Settings for end user personalization.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.PersonalizationSettings personalization_settings = 42 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Agent\PersonalizationSettings $var
     * @return $this
     */
    public function setPersonalizationSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Agent\PersonalizationSettings::class);
        $this->personalization_settings = $var;

        return $this;
    }

    /**
     * Optional. Settings for custom client certificates.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.ClientCertificateSettings client_certificate_settings = 43 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Agent\ClientCertificateSettings|null
     */
    public function getClientCertificateSettings()
    {
        return $this->client_certificate_settings;
    }

    public function hasClientCertificateSettings()
    {
        return isset($this->client_certificate_settings);
    }

    public function clearClientCertificateSettings()
    {
        unset($this->client_certificate_settings);
    }

    /**
     * Optional. Settings for custom client certificates.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Agent.ClientCertificateSettings client_certificate_settings = 43 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Agent\ClientCertificateSettings $var
     * @return $this
     */
    public function setClientCertificateSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Agent\ClientCertificateSettings::class);
        $this->client_certificate_settings = $var;

        return $this;
    }

}
