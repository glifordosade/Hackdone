<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that allows executing scripts on the VM.
 * The `ExecResource` has 2 stages: `validate` and `enforce` and both stages
 * accept a script as an argument to execute.
 * When the `ExecResource` is applied by the agent, it first executes the
 * script in the `validate` stage. The `validate` stage can signal that the
 * `ExecResource` is already in the desired state by returning an exit code
 * of `100`. If the `ExecResource` is not in the desired state, it should
 * return an exit code of `101`. Any other exit code returned by this stage
 * is considered an error.
 * If the `ExecResource` is not in the desired state based on the exit code
 * from the `validate` stage, the agent proceeds to execute the script from
 * the `enforce` stage. If the `ExecResource` is already in the desired
 * state, the `enforce` stage will not be run.
 * Similar to `validate` stage, the `enforce` stage should return an exit
 * code of `100` to indicate that the resource in now in its desired state.
 * Any other exit code is considered an error.
 * NOTE: An exit code of `100` was chosen over `0` (and `101` vs `1`) to
 * have an explicit indicator of `in desired state`, `not in desired state`
 * and errors. Because, for example, Powershell will always return an exit
 * code of `0` unless an `exit` statement is provided in the script. So, for
 * reasons of consistency and being explicit, exit codes `100` and `101`
 * were chosen.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource</code>
 */
class ExecResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. What to run to validate this resource is in the desired
     * state. An exit code of 100 indicates "in desired state", and exit code
     * of 101 indicates "not in desired state". Any other exit code indicates
     * a failure running validate.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec validate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $validate = null;
    /**
     * What to run to bring this resource into the desired state.
     * An exit code of 100 indicates "success", any other exit code indicates
     * a failure running enforce.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec enforce = 2;</code>
     */
    protected $enforce = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec $validate
     *           Required. What to run to validate this resource is in the desired
     *           state. An exit code of 100 indicates "in desired state", and exit code
     *           of 101 indicates "not in desired state". Any other exit code indicates
     *           a failure running validate.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec $enforce
     *           What to run to bring this resource into the desired state.
     *           An exit code of 100 indicates "success", any other exit code indicates
     *           a failure running enforce.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. What to run to validate this resource is in the desired
     * state. An exit code of 100 indicates "in desired state", and exit code
     * of 101 indicates "not in desired state". Any other exit code indicates
     * a failure running validate.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec validate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec|null
     */
    public function getValidate()
    {
        return $this->validate;
    }

    public function hasValidate()
    {
        return isset($this->validate);
    }

    public function clearValidate()
    {
        unset($this->validate);
    }

    /**
     * Required. What to run to validate this resource is in the desired
     * state. An exit code of 100 indicates "in desired state", and exit code
     * of 101 indicates "not in desired state". Any other exit code indicates
     * a failure running validate.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec validate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec $var
     * @return $this
     */
    public function setValidate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec::class);
        $this->validate = $var;

        return $this;
    }

    /**
     * What to run to bring this resource into the desired state.
     * An exit code of 100 indicates "success", any other exit code indicates
     * a failure running enforce.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec enforce = 2;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec|null
     */
    public function getEnforce()
    {
        return $this->enforce;
    }

    public function hasEnforce()
    {
        return isset($this->enforce);
    }

    public function clearEnforce()
    {
        unset($this->enforce);
    }

    /**
     * What to run to bring this resource into the desired state.
     * An exit code of 100 indicates "success", any other exit code indicates
     * a failure running enforce.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource.Exec enforce = 2;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec $var
     * @return $this
     */
    public function setEnforce($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource\Exec::class);
        $this->enforce = $var;

        return $this;
    }

}

