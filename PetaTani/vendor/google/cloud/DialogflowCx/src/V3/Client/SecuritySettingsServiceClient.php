<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/cx/v3/security_settings.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\Cx\V3\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\Cx\V3\CreateSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3\DeleteSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3\GetSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListSecuritySettingsRequest;
use Google\Cloud\Dialogflow\Cx\V3\SecuritySettings;
use Google\Cloud\Dialogflow\Cx\V3\UpdateSecuritySettingsRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Service for managing security settings for Dialogflow.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<SecuritySettings> createSecuritySettingsAsync(CreateSecuritySettingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteSecuritySettingsAsync(DeleteSecuritySettingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SecuritySettings> getSecuritySettingsAsync(GetSecuritySettingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSecuritySettingsAsync(ListSecuritySettingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SecuritySettings> updateSecuritySettingsAsync(UpdateSecuritySettingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class SecuritySettingsServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3.SecuritySettingsService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/security_settings_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/security_settings_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/security_settings_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ . '/../resources/security_settings_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * deidentify_template resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $deidentifyTemplate
     *
     * @return string The formatted deidentify_template resource.
     */
    public static function deidentifyTemplateName(
        string $organization,
        string $location,
        string $deidentifyTemplate
    ): string {
        return self::getPathTemplate('deidentifyTemplate')->render([
            'organization' => $organization,
            'location' => $location,
            'deidentify_template' => $deidentifyTemplate,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * inspect_template resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $inspectTemplate
     *
     * @return string The formatted inspect_template resource.
     */
    public static function inspectTemplateName(string $organization, string $location, string $inspectTemplate): string
    {
        return self::getPathTemplate('inspectTemplate')->render([
            'organization' => $organization,
            'location' => $location,
            'inspect_template' => $inspectTemplate,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location_deidentify_template resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $deidentifyTemplate
     *
     * @return string The formatted organization_location_deidentify_template resource.
     */
    public static function organizationLocationDeidentifyTemplateName(
        string $organization,
        string $location,
        string $deidentifyTemplate
    ): string {
        return self::getPathTemplate('organizationLocationDeidentifyTemplate')->render([
            'organization' => $organization,
            'location' => $location,
            'deidentify_template' => $deidentifyTemplate,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_location_inspect_template resource.
     *
     * @param string $organization
     * @param string $location
     * @param string $inspectTemplate
     *
     * @return string The formatted organization_location_inspect_template resource.
     */
    public static function organizationLocationInspectTemplateName(
        string $organization,
        string $location,
        string $inspectTemplate
    ): string {
        return self::getPathTemplate('organizationLocationInspectTemplate')->render([
            'organization' => $organization,
            'location' => $location,
            'inspect_template' => $inspectTemplate,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_deidentify_template resource.
     *
     * @param string $project
     * @param string $location
     * @param string $deidentifyTemplate
     *
     * @return string The formatted project_location_deidentify_template resource.
     */
    public static function projectLocationDeidentifyTemplateName(
        string $project,
        string $location,
        string $deidentifyTemplate
    ): string {
        return self::getPathTemplate('projectLocationDeidentifyTemplate')->render([
            'project' => $project,
            'location' => $location,
            'deidentify_template' => $deidentifyTemplate,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_inspect_template resource.
     *
     * @param string $project
     * @param string $location
     * @param string $inspectTemplate
     *
     * @return string The formatted project_location_inspect_template resource.
     */
    public static function projectLocationInspectTemplateName(
        string $project,
        string $location,
        string $inspectTemplate
    ): string {
        return self::getPathTemplate('projectLocationInspectTemplate')->render([
            'project' => $project,
            'location' => $location,
            'inspect_template' => $inspectTemplate,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * security_settings resource.
     *
     * @param string $project
     * @param string $location
     * @param string $securitySettings
     *
     * @return string The formatted security_settings resource.
     */
    public static function securitySettingsName(string $project, string $location, string $securitySettings): string
    {
        return self::getPathTemplate('securitySettings')->render([
            'project' => $project,
            'location' => $location,
            'security_settings' => $securitySettings,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - deidentifyTemplate: organizations/{organization}/locations/{location}/deidentifyTemplates/{deidentify_template}
     * - inspectTemplate: organizations/{organization}/locations/{location}/inspectTemplates/{inspect_template}
     * - location: projects/{project}/locations/{location}
     * - organizationLocationDeidentifyTemplate: organizations/{organization}/locations/{location}/deidentifyTemplates/{deidentify_template}
     * - organizationLocationInspectTemplate: organizations/{organization}/locations/{location}/inspectTemplates/{inspect_template}
     * - projectLocationDeidentifyTemplate: projects/{project}/locations/{location}/deidentifyTemplates/{deidentify_template}
     * - projectLocationInspectTemplate: projects/{project}/locations/{location}/inspectTemplates/{inspect_template}
     * - securitySettings: projects/{project}/locations/{location}/securitySettings/{security_settings}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Create security settings in the specified location.
     *
     * The async variant is
     * {@see SecuritySettingsServiceClient::createSecuritySettingsAsync()} .
     *
     * @example samples/V3/SecuritySettingsServiceClient/create_security_settings.php
     *
     * @param CreateSecuritySettingsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecuritySettings
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createSecuritySettings(
        CreateSecuritySettingsRequest $request,
        array $callOptions = []
    ): SecuritySettings {
        return $this->startApiCall('CreateSecuritySettings', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings].
     *
     * The async variant is
     * {@see SecuritySettingsServiceClient::deleteSecuritySettingsAsync()} .
     *
     * @example samples/V3/SecuritySettingsServiceClient/delete_security_settings.php
     *
     * @param DeleteSecuritySettingsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteSecuritySettings(DeleteSecuritySettingsRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteSecuritySettings', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings]. The
     * returned settings may be stale by up to 1 minute.
     *
     * The async variant is
     * {@see SecuritySettingsServiceClient::getSecuritySettingsAsync()} .
     *
     * @example samples/V3/SecuritySettingsServiceClient/get_security_settings.php
     *
     * @param GetSecuritySettingsRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecuritySettings
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSecuritySettings(GetSecuritySettingsRequest $request, array $callOptions = []): SecuritySettings
    {
        return $this->startApiCall('GetSecuritySettings', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all security settings in the specified location.
     *
     * The async variant is
     * {@see SecuritySettingsServiceClient::listSecuritySettingsAsync()} .
     *
     * @example samples/V3/SecuritySettingsServiceClient/list_security_settings.php
     *
     * @param ListSecuritySettingsRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listSecuritySettings(
        ListSecuritySettingsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListSecuritySettings', $request, $callOptions);
    }

    /**
     * Updates the specified
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings].
     *
     * The async variant is
     * {@see SecuritySettingsServiceClient::updateSecuritySettingsAsync()} .
     *
     * @example samples/V3/SecuritySettingsServiceClient/update_security_settings.php
     *
     * @param UpdateSecuritySettingsRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SecuritySettings
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateSecuritySettings(
        UpdateSecuritySettingsRequest $request,
        array $callOptions = []
    ): SecuritySettings {
        return $this->startApiCall('UpdateSecuritySettings', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see SecuritySettingsServiceClient::getLocationAsync()} .
     *
     * @example samples/V3/SecuritySettingsServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see SecuritySettingsServiceClient::listLocationsAsync()}
     * .
     *
     * @example samples/V3/SecuritySettingsServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}