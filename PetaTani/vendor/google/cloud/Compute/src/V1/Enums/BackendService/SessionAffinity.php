<?php
/*
 * Copyright 2022 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Enums\BackendService;

/**
 * SessionAffinity contains string constants that represent the names of each value
 * in the google.cloud.compute.v1.BackendService.SessionAffinity descriptor.
 */
class SessionAffinity
{
    const UNDEFINED_SESSION_AFFINITY = 'UNDEFINED_SESSION_AFFINITY';

    const CLIENT_IP = 'CLIENT_IP';

    const CLIENT_IP_NO_DESTINATION = 'CLIENT_IP_NO_DESTINATION';

    const CLIENT_IP_PORT_PROTO = 'CLIENT_IP_PORT_PROTO';

    const CLIENT_IP_PROTO = 'CLIENT_IP_PROTO';

    const GENERATED_COOKIE = 'GENERATED_COOKIE';

    const HEADER_FIELD = 'HEADER_FIELD';

    const HTTP_COOKIE = 'HTTP_COOKIE';

    const NONE = 'NONE';

    const STRONG_COOKIE_AFFINITY = 'STRONG_COOKIE_AFFINITY';
}