<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\DockerRepository;

use UnexpectedValueException;

/**
 * Predefined list of publicly available Docker repositories like Docker
 * Hub.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1.RemoteRepositoryConfig.DockerRepository.PublicRepository</code>
 */
class PublicRepository
{
    /**
     * Unspecified repository.
     *
     * Generated from protobuf enum <code>PUBLIC_REPOSITORY_UNSPECIFIED = 0;</code>
     */
    const PUBLIC_REPOSITORY_UNSPECIFIED = 0;
    /**
     * Docker Hub.
     *
     * Generated from protobuf enum <code>DOCKER_HUB = 1;</code>
     */
    const DOCKER_HUB = 1;

    private static $valueToName = [
        self::PUBLIC_REPOSITORY_UNSPECIFIED => 'PUBLIC_REPOSITORY_UNSPECIFIED',
        self::DOCKER_HUB => 'DOCKER_HUB',
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

