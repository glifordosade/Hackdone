<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An isolated set of Cloud Spanner resources on which databases can be hosted.
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A unique identifier for the instance, which cannot be changed
     * after the instance is created. Values are of the form
     * `projects/<project>/instances/[a-z][-a-z0-9]*[a-z0-9]`. The final
     * segment of the name must be between 2 and 64 characters in length.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. The name of the instance's configuration. Values are of the form
     * `projects/<project>/instanceConfigs/<configuration>`. See
     * also [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] and
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs].
     *
     * Generated from protobuf field <code>string config = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $config = '';
    /**
     * Required. The descriptive name for this instance as it appears in UIs.
     * Must be unique per project and between 4 and 30 characters in length.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * The number of nodes allocated to this instance. At most, one of either
     * `node_count` or `processing_units` should be present in the message.
     * Users can set the `node_count` field to specify the target number of nodes
     * allocated to the instance.
     * If autoscaling is enabled, `node_count` is treated as an `OUTPUT_ONLY`
     * field and reflects the current number of nodes allocated to the instance.
     * This might be zero in API responses for instances that are not yet in the
     * `READY` state.
     * If the instance has varying node count across replicas (achieved by
     * setting asymmetric_autoscaling_options in autoscaling config), the
     * node_count here is the maximum node count across all replicas.
     * For more information, see
     * [Compute capacity, nodes, and processing
     * units](https://cloud.google.com/spanner/docs/compute-capacity).
     *
     * Generated from protobuf field <code>int32 node_count = 5;</code>
     */
    private $node_count = 0;
    /**
     * The number of processing units allocated to this instance. At most, one of
     * either `processing_units` or `node_count` should be present in the message.
     * Users can set the `processing_units` field to specify the target number of
     * processing units allocated to the instance.
     * If autoscaling is enabled, `processing_units` is treated as an
     * `OUTPUT_ONLY` field and reflects the current number of processing units
     * allocated to the instance.
     * This might be zero in API responses for instances that are not yet in the
     * `READY` state.
     * If the instance has varying processing units per replica
     * (achieved by setting asymmetric_autoscaling_options in autoscaling config),
     * the processing_units here is the maximum processing units across all
     * replicas.
     * For more information, see
     * [Compute capacity, nodes and processing
     * units](https://cloud.google.com/spanner/docs/compute-capacity).
     *
     * Generated from protobuf field <code>int32 processing_units = 9;</code>
     */
    private $processing_units = 0;
    /**
     * Output only. Lists the compute capacity per ReplicaSelection. A replica
     * selection identifies a set of replicas with common properties. Replicas
     * identified by a ReplicaSelection are scaled with the same compute capacity.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaComputeCapacity replica_compute_capacity = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $replica_compute_capacity;
    /**
     * Optional. The autoscaling configuration. Autoscaling is enabled if this
     * field is set. When autoscaling is enabled, node_count and processing_units
     * are treated as OUTPUT_ONLY fields and reflect the current compute capacity
     * allocated to the instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig autoscaling_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $autoscaling_config = null;
    /**
     * Output only. The current instance state. For
     * [CreateInstance][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstance],
     * the state must be either omitted or set to `CREATING`. For
     * [UpdateInstance][google.spanner.admin.instance.v1.InstanceAdmin.UpdateInstance],
     * the state must be either omitted or set to `READY`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. Cloud Labels can be used to filter collections of
     * resources. They can be used to control how resource metrics are aggregated.
     * And they can be used as arguments to policy management rules (e.g. route,
     * firewall, load balancing, etc.).
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `[a-z0-9_-]{0,63}`.
     *  * No more than 64 labels can be associated with a given resource.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * If you plan to use labels in your own code, please note that additional
     * characters may be allowed in the future. And so you are advised to use an
     * internal label representation, such as JSON, which doesn't rely upon
     * specific characters being disallowed.  For example, representing labels
     * as the string:  name + "_" + value  would prove problematic if we were to
     * allow "_" in a future release.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     */
    private $labels;
    /**
     * Deprecated. This field is not populated.
     *
     * Generated from protobuf field <code>repeated string endpoint_uris = 8;</code>
     */
    private $endpoint_uris;
    /**
     * Output only. The time at which the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time at which the instance was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. The `Edition` of the current instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.Edition edition = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $edition = 0;
    /**
     * Optional. Controls the default backup behavior for new databases within the
     * instance.
     * Note that `AUTOMATIC` is not permitted for free instances, as backups and
     * backup schedules are not allowed for free instances.
     * In the `GetInstance` or `ListInstances` response, if the value of
     * default_backup_schedule_type is unset or NONE, no default backup
     * schedule will be created for new databases within the instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.DefaultBackupScheduleType default_backup_schedule_type = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $default_backup_schedule_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A unique identifier for the instance, which cannot be changed
     *           after the instance is created. Values are of the form
     *           `projects/<project>/instances/[a-z][-a-z0-9]*[a-z0-9]`. The final
     *           segment of the name must be between 2 and 64 characters in length.
     *     @type string $config
     *           Required. The name of the instance's configuration. Values are of the form
     *           `projects/<project>/instanceConfigs/<configuration>`. See
     *           also [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] and
     *           [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs].
     *     @type string $display_name
     *           Required. The descriptive name for this instance as it appears in UIs.
     *           Must be unique per project and between 4 and 30 characters in length.
     *     @type int $node_count
     *           The number of nodes allocated to this instance. At most, one of either
     *           `node_count` or `processing_units` should be present in the message.
     *           Users can set the `node_count` field to specify the target number of nodes
     *           allocated to the instance.
     *           If autoscaling is enabled, `node_count` is treated as an `OUTPUT_ONLY`
     *           field and reflects the current number of nodes allocated to the instance.
     *           This might be zero in API responses for instances that are not yet in the
     *           `READY` state.
     *           If the instance has varying node count across replicas (achieved by
     *           setting asymmetric_autoscaling_options in autoscaling config), the
     *           node_count here is the maximum node count across all replicas.
     *           For more information, see
     *           [Compute capacity, nodes, and processing
     *           units](https://cloud.google.com/spanner/docs/compute-capacity).
     *     @type int $processing_units
     *           The number of processing units allocated to this instance. At most, one of
     *           either `processing_units` or `node_count` should be present in the message.
     *           Users can set the `processing_units` field to specify the target number of
     *           processing units allocated to the instance.
     *           If autoscaling is enabled, `processing_units` is treated as an
     *           `OUTPUT_ONLY` field and reflects the current number of processing units
     *           allocated to the instance.
     *           This might be zero in API responses for instances that are not yet in the
     *           `READY` state.
     *           If the instance has varying processing units per replica
     *           (achieved by setting asymmetric_autoscaling_options in autoscaling config),
     *           the processing_units here is the maximum processing units across all
     *           replicas.
     *           For more information, see
     *           [Compute capacity, nodes and processing
     *           units](https://cloud.google.com/spanner/docs/compute-capacity).
     *     @type array<\Google\Cloud\Spanner\Admin\Instance\V1\ReplicaComputeCapacity>|\Google\Protobuf\Internal\RepeatedField $replica_compute_capacity
     *           Output only. Lists the compute capacity per ReplicaSelection. A replica
     *           selection identifies a set of replicas with common properties. Replicas
     *           identified by a ReplicaSelection are scaled with the same compute capacity.
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig $autoscaling_config
     *           Optional. The autoscaling configuration. Autoscaling is enabled if this
     *           field is set. When autoscaling is enabled, node_count and processing_units
     *           are treated as OUTPUT_ONLY fields and reflect the current compute capacity
     *           allocated to the instance.
     *     @type int $state
     *           Output only. The current instance state. For
     *           [CreateInstance][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstance],
     *           the state must be either omitted or set to `CREATING`. For
     *           [UpdateInstance][google.spanner.admin.instance.v1.InstanceAdmin.UpdateInstance],
     *           the state must be either omitted or set to `READY`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     *           resources into groups that reflect a customer's organizational needs and
     *           deployment strategies. Cloud Labels can be used to filter collections of
     *           resources. They can be used to control how resource metrics are aggregated.
     *           And they can be used as arguments to policy management rules (e.g. route,
     *           firewall, load balancing, etc.).
     *            * Label keys must be between 1 and 63 characters long and must conform to
     *              the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *            * Label values must be between 0 and 63 characters long and must conform
     *              to the regular expression `[a-z0-9_-]{0,63}`.
     *            * No more than 64 labels can be associated with a given resource.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     *           If you plan to use labels in your own code, please note that additional
     *           characters may be allowed in the future. And so you are advised to use an
     *           internal label representation, such as JSON, which doesn't rely upon
     *           specific characters being disallowed.  For example, representing labels
     *           as the string:  name + "_" + value  would prove problematic if we were to
     *           allow "_" in a future release.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $endpoint_uris
     *           Deprecated. This field is not populated.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the instance was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which the instance was most recently updated.
     *     @type int $edition
     *           Optional. The `Edition` of the current instance.
     *     @type int $default_backup_schedule_type
     *           Optional. Controls the default backup behavior for new databases within the
     *           instance.
     *           Note that `AUTOMATIC` is not permitted for free instances, as backups and
     *           backup schedules are not allowed for free instances.
     *           In the `GetInstance` or `ListInstances` response, if the value of
     *           default_backup_schedule_type is unset or NONE, no default backup
     *           schedule will be created for new databases within the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A unique identifier for the instance, which cannot be changed
     * after the instance is created. Values are of the form
     * `projects/<project>/instances/[a-z][-a-z0-9]*[a-z0-9]`. The final
     * segment of the name must be between 2 and 64 characters in length.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A unique identifier for the instance, which cannot be changed
     * after the instance is created. Values are of the form
     * `projects/<project>/instances/[a-z][-a-z0-9]*[a-z0-9]`. The final
     * segment of the name must be between 2 and 64 characters in length.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The name of the instance's configuration. Values are of the form
     * `projects/<project>/instanceConfigs/<configuration>`. See
     * also [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] and
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs].
     *
     * Generated from protobuf field <code>string config = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Required. The name of the instance's configuration. Values are of the form
     * `projects/<project>/instanceConfigs/<configuration>`. See
     * also [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] and
     * [ListInstanceConfigs][google.spanner.admin.instance.v1.InstanceAdmin.ListInstanceConfigs].
     *
     * Generated from protobuf field <code>string config = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->config = $var;

        return $this;
    }

    /**
     * Required. The descriptive name for this instance as it appears in UIs.
     * Must be unique per project and between 4 and 30 characters in length.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The descriptive name for this instance as it appears in UIs.
     * Must be unique per project and between 4 and 30 characters in length.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The number of nodes allocated to this instance. At most, one of either
     * `node_count` or `processing_units` should be present in the message.
     * Users can set the `node_count` field to specify the target number of nodes
     * allocated to the instance.
     * If autoscaling is enabled, `node_count` is treated as an `OUTPUT_ONLY`
     * field and reflects the current number of nodes allocated to the instance.
     * This might be zero in API responses for instances that are not yet in the
     * `READY` state.
     * If the instance has varying node count across replicas (achieved by
     * setting asymmetric_autoscaling_options in autoscaling config), the
     * node_count here is the maximum node count across all replicas.
     * For more information, see
     * [Compute capacity, nodes, and processing
     * units](https://cloud.google.com/spanner/docs/compute-capacity).
     *
     * Generated from protobuf field <code>int32 node_count = 5;</code>
     * @return int
     */
    public function getNodeCount()
    {
        return $this->node_count;
    }

    /**
     * The number of nodes allocated to this instance. At most, one of either
     * `node_count` or `processing_units` should be present in the message.
     * Users can set the `node_count` field to specify the target number of nodes
     * allocated to the instance.
     * If autoscaling is enabled, `node_count` is treated as an `OUTPUT_ONLY`
     * field and reflects the current number of nodes allocated to the instance.
     * This might be zero in API responses for instances that are not yet in the
     * `READY` state.
     * If the instance has varying node count across replicas (achieved by
     * setting asymmetric_autoscaling_options in autoscaling config), the
     * node_count here is the maximum node count across all replicas.
     * For more information, see
     * [Compute capacity, nodes, and processing
     * units](https://cloud.google.com/spanner/docs/compute-capacity).
     *
     * Generated from protobuf field <code>int32 node_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->node_count = $var;

        return $this;
    }

    /**
     * The number of processing units allocated to this instance. At most, one of
     * either `processing_units` or `node_count` should be present in the message.
     * Users can set the `processing_units` field to specify the target number of
     * processing units allocated to the instance.
     * If autoscaling is enabled, `processing_units` is treated as an
     * `OUTPUT_ONLY` field and reflects the current number of processing units
     * allocated to the instance.
     * This might be zero in API responses for instances that are not yet in the
     * `READY` state.
     * If the instance has varying processing units per replica
     * (achieved by setting asymmetric_autoscaling_options in autoscaling config),
     * the processing_units here is the maximum processing units across all
     * replicas.
     * For more information, see
     * [Compute capacity, nodes and processing
     * units](https://cloud.google.com/spanner/docs/compute-capacity).
     *
     * Generated from protobuf field <code>int32 processing_units = 9;</code>
     * @return int
     */
    public function getProcessingUnits()
    {
        return $this->processing_units;
    }

    /**
     * The number of processing units allocated to this instance. At most, one of
     * either `processing_units` or `node_count` should be present in the message.
     * Users can set the `processing_units` field to specify the target number of
     * processing units allocated to the instance.
     * If autoscaling is enabled, `processing_units` is treated as an
     * `OUTPUT_ONLY` field and reflects the current number of processing units
     * allocated to the instance.
     * This might be zero in API responses for instances that are not yet in the
     * `READY` state.
     * If the instance has varying processing units per replica
     * (achieved by setting asymmetric_autoscaling_options in autoscaling config),
     * the processing_units here is the maximum processing units across all
     * replicas.
     * For more information, see
     * [Compute capacity, nodes and processing
     * units](https://cloud.google.com/spanner/docs/compute-capacity).
     *
     * Generated from protobuf field <code>int32 processing_units = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setProcessingUnits($var)
    {
        GPBUtil::checkInt32($var);
        $this->processing_units = $var;

        return $this;
    }

    /**
     * Output only. Lists the compute capacity per ReplicaSelection. A replica
     * selection identifies a set of replicas with common properties. Replicas
     * identified by a ReplicaSelection are scaled with the same compute capacity.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaComputeCapacity replica_compute_capacity = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicaComputeCapacity()
    {
        return $this->replica_compute_capacity;
    }

    /**
     * Output only. Lists the compute capacity per ReplicaSelection. A replica
     * selection identifies a set of replicas with common properties. Replicas
     * identified by a ReplicaSelection are scaled with the same compute capacity.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.instance.v1.ReplicaComputeCapacity replica_compute_capacity = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Spanner\Admin\Instance\V1\ReplicaComputeCapacity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicaComputeCapacity($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Instance\V1\ReplicaComputeCapacity::class);
        $this->replica_compute_capacity = $arr;

        return $this;
    }

    /**
     * Optional. The autoscaling configuration. Autoscaling is enabled if this
     * field is set. When autoscaling is enabled, node_count and processing_units
     * are treated as OUTPUT_ONLY fields and reflect the current compute capacity
     * allocated to the instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig autoscaling_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig|null
     */
    public function getAutoscalingConfig()
    {
        return $this->autoscaling_config;
    }

    public function hasAutoscalingConfig()
    {
        return isset($this->autoscaling_config);
    }

    public function clearAutoscalingConfig()
    {
        unset($this->autoscaling_config);
    }

    /**
     * Optional. The autoscaling configuration. Autoscaling is enabled if this
     * field is set. When autoscaling is enabled, node_count and processing_units
     * are treated as OUTPUT_ONLY fields and reflect the current compute capacity
     * allocated to the instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.AutoscalingConfig autoscaling_config = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig $var
     * @return $this
     */
    public function setAutoscalingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\AutoscalingConfig::class);
        $this->autoscaling_config = $var;

        return $this;
    }

    /**
     * Output only. The current instance state. For
     * [CreateInstance][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstance],
     * the state must be either omitted or set to `CREATING`. For
     * [UpdateInstance][google.spanner.admin.instance.v1.InstanceAdmin.UpdateInstance],
     * the state must be either omitted or set to `READY`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current instance state. For
     * [CreateInstance][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstance],
     * the state must be either omitted or set to `CREATING`. For
     * [UpdateInstance][google.spanner.admin.instance.v1.InstanceAdmin.UpdateInstance],
     * the state must be either omitted or set to `READY`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Instance\V1\Instance\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. Cloud Labels can be used to filter collections of
     * resources. They can be used to control how resource metrics are aggregated.
     * And they can be used as arguments to policy management rules (e.g. route,
     * firewall, load balancing, etc.).
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `[a-z0-9_-]{0,63}`.
     *  * No more than 64 labels can be associated with a given resource.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * If you plan to use labels in your own code, please note that additional
     * characters may be allowed in the future. And so you are advised to use an
     * internal label representation, such as JSON, which doesn't rely upon
     * specific characters being disallowed.  For example, representing labels
     * as the string:  name + "_" + value  would prove problematic if we were to
     * allow "_" in a future release.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Cloud Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. Cloud Labels can be used to filter collections of
     * resources. They can be used to control how resource metrics are aggregated.
     * And they can be used as arguments to policy management rules (e.g. route,
     * firewall, load balancing, etc.).
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z][a-z0-9_-]{0,62}`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `[a-z0-9_-]{0,63}`.
     *  * No more than 64 labels can be associated with a given resource.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * If you plan to use labels in your own code, please note that additional
     * characters may be allowed in the future. And so you are advised to use an
     * internal label representation, such as JSON, which doesn't rely upon
     * specific characters being disallowed.  For example, representing labels
     * as the string:  name + "_" + value  would prove problematic if we were to
     * allow "_" in a future release.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Deprecated. This field is not populated.
     *
     * Generated from protobuf field <code>repeated string endpoint_uris = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpointUris()
    {
        return $this->endpoint_uris;
    }

    /**
     * Deprecated. This field is not populated.
     *
     * Generated from protobuf field <code>repeated string endpoint_uris = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpointUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->endpoint_uris = $arr;

        return $this;
    }

    /**
     * Output only. The time at which the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which the instance was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which the instance was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The `Edition` of the current instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.Edition edition = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Optional. The `Edition` of the current instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.Edition edition = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setEdition($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Instance\V1\Instance\Edition::class);
        $this->edition = $var;

        return $this;
    }

    /**
     * Optional. Controls the default backup behavior for new databases within the
     * instance.
     * Note that `AUTOMATIC` is not permitted for free instances, as backups and
     * backup schedules are not allowed for free instances.
     * In the `GetInstance` or `ListInstances` response, if the value of
     * default_backup_schedule_type is unset or NONE, no default backup
     * schedule will be created for new databases within the instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.DefaultBackupScheduleType default_backup_schedule_type = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getDefaultBackupScheduleType()
    {
        return $this->default_backup_schedule_type;
    }

    /**
     * Optional. Controls the default backup behavior for new databases within the
     * instance.
     * Note that `AUTOMATIC` is not permitted for free instances, as backups and
     * backup schedules are not allowed for free instances.
     * In the `GetInstance` or `ListInstances` response, if the value of
     * default_backup_schedule_type is unset or NONE, no default backup
     * schedule will be created for new databases within the instance.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.Instance.DefaultBackupScheduleType default_backup_schedule_type = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultBackupScheduleType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Instance\V1\Instance\DefaultBackupScheduleType::class);
        $this->default_backup_schedule_type = $var;

        return $this;
    }

}
