<?php
/*
 * Copyright 2024 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/storage/control/v2/storage_control.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Storage\Control\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Storage\Control\V2\CreateFolderRequest;
use Google\Cloud\Storage\Control\V2\CreateManagedFolderRequest;
use Google\Cloud\Storage\Control\V2\DeleteFolderRequest;
use Google\Cloud\Storage\Control\V2\DeleteManagedFolderRequest;
use Google\Cloud\Storage\Control\V2\Folder;
use Google\Cloud\Storage\Control\V2\GetFolderRequest;
use Google\Cloud\Storage\Control\V2\GetManagedFolderRequest;
use Google\Cloud\Storage\Control\V2\GetStorageLayoutRequest;
use Google\Cloud\Storage\Control\V2\ListFoldersRequest;
use Google\Cloud\Storage\Control\V2\ListManagedFoldersRequest;
use Google\Cloud\Storage\Control\V2\ManagedFolder;
use Google\Cloud\Storage\Control\V2\RenameFolderRequest;
use Google\Cloud\Storage\Control\V2\StorageLayout;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: StorageControl service includes selected control plane operations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Folder> createFolderAsync(CreateFolderRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ManagedFolder> createManagedFolderAsync(CreateManagedFolderRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteFolderAsync(DeleteFolderRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteManagedFolderAsync(DeleteManagedFolderRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Folder> getFolderAsync(GetFolderRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ManagedFolder> getManagedFolderAsync(GetManagedFolderRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<StorageLayout> getStorageLayoutAsync(GetStorageLayoutRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listFoldersAsync(ListFoldersRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listManagedFoldersAsync(ListManagedFoldersRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> renameFolderAsync(RenameFolderRequest $request, array $optionalArgs = [])
 */
final class StorageControlClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.storage.control.v2.StorageControl';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'storage.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'storage.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
        'https://www.googleapis.com/auth/devstorage.full_control',
        'https://www.googleapis.com/auth/devstorage.read_only',
        'https://www.googleapis.com/auth/devstorage.read_write',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/storage_control_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/storage_control_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/storage_control_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
        ];
    }

    /** Implements ClientOptionsTrait::supportedTransports. */
    private static function supportedTransports()
    {
        return ['grpc', 'grpc-fallback'];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a bucket
     * resource.
     *
     * @param string $project
     * @param string $bucket
     *
     * @return string The formatted bucket resource.
     */
    public static function bucketName(string $project, string $bucket): string
    {
        return self::getPathTemplate('bucket')->render([
            'project' => $project,
            'bucket' => $bucket,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a folder
     * resource.
     *
     * @param string $project
     * @param string $bucket
     * @param string $folder
     *
     * @return string The formatted folder resource.
     */
    public static function folderName(string $project, string $bucket, string $folder): string
    {
        return self::getPathTemplate('folder')->render([
            'project' => $project,
            'bucket' => $bucket,
            'folder' => $folder,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * managed_folder resource.
     *
     * @param string $project
     * @param string $bucket
     * @param string $managedFolder
     *
     * @return string The formatted managed_folder resource.
     */
    public static function managedFolderName(string $project, string $bucket, string $managedFolder): string
    {
        return self::getPathTemplate('managedFolder')->render([
            'project' => $project,
            'bucket' => $bucket,
            'managed_folder' => $managedFolder,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * storage_layout resource.
     *
     * @param string $project
     * @param string $bucket
     *
     * @return string The formatted storage_layout resource.
     */
    public static function storageLayoutName(string $project, string $bucket): string
    {
        return self::getPathTemplate('storageLayout')->render([
            'project' => $project,
            'bucket' => $bucket,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - bucket: projects/{project}/buckets/{bucket}
     * - folder: projects/{project}/buckets/{bucket}/folders/{folder=**}
     * - managedFolder: projects/{project}/buckets/{bucket}/managedFolders/{managed_folder=**}
     * - storageLayout: projects/{project}/buckets/{bucket}/storageLayout
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
     *           as "<uri>:<port>". Default 'storage.googleapis.com:443'.
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
     *           The transport used for executing network requests. At the moment, supports only
     *           `grpc`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} method for the
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
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
     * Creates a new folder. This operation is only applicable to a hierarchical
     * namespace enabled bucket.
     *
     * The async variant is {@see StorageControlClient::createFolderAsync()} .
     *
     * @example samples/V2/StorageControlClient/create_folder.php
     *
     * @param CreateFolderRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Folder
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createFolder(CreateFolderRequest $request, array $callOptions = []): Folder
    {
        return $this->startApiCall('CreateFolder', $request, $callOptions)->wait();
    }

    /**
     * Creates a new managed folder.
     *
     * The async variant is {@see StorageControlClient::createManagedFolderAsync()} .
     *
     * @example samples/V2/StorageControlClient/create_managed_folder.php
     *
     * @param CreateManagedFolderRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ManagedFolder
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createManagedFolder(CreateManagedFolderRequest $request, array $callOptions = []): ManagedFolder
    {
        return $this->startApiCall('CreateManagedFolder', $request, $callOptions)->wait();
    }

    /**
     * Permanently deletes an empty folder. This operation is only applicable to a
     * hierarchical namespace enabled bucket.
     *
     * The async variant is {@see StorageControlClient::deleteFolderAsync()} .
     *
     * @example samples/V2/StorageControlClient/delete_folder.php
     *
     * @param DeleteFolderRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function deleteFolder(DeleteFolderRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteFolder', $request, $callOptions)->wait();
    }

    /**
     * Permanently deletes an empty managed folder.
     *
     * The async variant is {@see StorageControlClient::deleteManagedFolderAsync()} .
     *
     * @example samples/V2/StorageControlClient/delete_managed_folder.php
     *
     * @param DeleteManagedFolderRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function deleteManagedFolder(DeleteManagedFolderRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteManagedFolder', $request, $callOptions)->wait();
    }

    /**
     * Returns metadata for the specified folder. This operation is only
     * applicable to a hierarchical namespace enabled bucket.
     *
     * The async variant is {@see StorageControlClient::getFolderAsync()} .
     *
     * @example samples/V2/StorageControlClient/get_folder.php
     *
     * @param GetFolderRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Folder
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getFolder(GetFolderRequest $request, array $callOptions = []): Folder
    {
        return $this->startApiCall('GetFolder', $request, $callOptions)->wait();
    }

    /**
     * Returns metadata for the specified managed folder.
     *
     * The async variant is {@see StorageControlClient::getManagedFolderAsync()} .
     *
     * @example samples/V2/StorageControlClient/get_managed_folder.php
     *
     * @param GetManagedFolderRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ManagedFolder
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getManagedFolder(GetManagedFolderRequest $request, array $callOptions = []): ManagedFolder
    {
        return $this->startApiCall('GetManagedFolder', $request, $callOptions)->wait();
    }

    /**
     * Returns the storage layout configuration for a given bucket.
     *
     * The async variant is {@see StorageControlClient::getStorageLayoutAsync()} .
     *
     * @example samples/V2/StorageControlClient/get_storage_layout.php
     *
     * @param GetStorageLayoutRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return StorageLayout
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getStorageLayout(GetStorageLayoutRequest $request, array $callOptions = []): StorageLayout
    {
        return $this->startApiCall('GetStorageLayout', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a list of folders. This operation is only applicable to a
     * hierarchical namespace enabled bucket.
     *
     * The async variant is {@see StorageControlClient::listFoldersAsync()} .
     *
     * @example samples/V2/StorageControlClient/list_folders.php
     *
     * @param ListFoldersRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
    public function listFolders(ListFoldersRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListFolders', $request, $callOptions);
    }

    /**
     * Retrieves a list of managed folders for a given bucket.
     *
     * The async variant is {@see StorageControlClient::listManagedFoldersAsync()} .
     *
     * @example samples/V2/StorageControlClient/list_managed_folders.php
     *
     * @param ListManagedFoldersRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function listManagedFolders(ListManagedFoldersRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListManagedFolders', $request, $callOptions);
    }

    /**
     * Renames a source folder to a destination folder. This operation is only
     * applicable to a hierarchical namespace enabled bucket. During a rename, the
     * source and destination folders are locked until the long running operation
     * completes.
     *
     * The async variant is {@see StorageControlClient::renameFolderAsync()} .
     *
     * @example samples/V2/StorageControlClient/rename_folder.php
     *
     * @param RenameFolderRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function renameFolder(RenameFolderRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RenameFolder', $request, $callOptions)->wait();
    }
}