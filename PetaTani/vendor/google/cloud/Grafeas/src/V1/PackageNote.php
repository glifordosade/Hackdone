<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/package.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PackageNote represents a particular package version.
 *
 * Generated from protobuf message <code>grafeas.v1.PackageNote</code>
 */
class PackageNote extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the package.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Deprecated.
     * The various channels by which a package is distributed.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Distribution distribution = 10;</code>
     */
    private $distribution;
    /**
     * The type of package; whether native or non native (e.g., ruby gems,
     * node.js packages, etc.).
     *
     * Generated from protobuf field <code>string package_type = 11;</code>
     */
    protected $package_type = '';
    /**
     * The cpe_uri in [CPE format](https://cpe.mitre.org/specification/)
     * denoting the package manager version distributing a package.
     * The cpe_uri will be blank for language packages.
     *
     * Generated from protobuf field <code>string cpe_uri = 12;</code>
     */
    protected $cpe_uri = '';
    /**
     * The CPU architecture for which packages in this distribution channel were
     * built. Architecture will be blank for language packages.
     *
     * Generated from protobuf field <code>.grafeas.v1.Architecture architecture = 13;</code>
     */
    protected $architecture = 0;
    /**
     * The version of the package.
     *
     * Generated from protobuf field <code>.grafeas.v1.Version version = 14;</code>
     */
    protected $version = null;
    /**
     * A freeform text denoting the maintainer of this package.
     *
     * Generated from protobuf field <code>string maintainer = 15;</code>
     */
    protected $maintainer = '';
    /**
     * The homepage for this package.
     *
     * Generated from protobuf field <code>string url = 16;</code>
     */
    protected $url = '';
    /**
     * The description of this package.
     *
     * Generated from protobuf field <code>string description = 17;</code>
     */
    protected $description = '';
    /**
     * Licenses that have been declared by the authors of the package.
     *
     * Generated from protobuf field <code>.grafeas.v1.License license = 18;</code>
     */
    protected $license = null;
    /**
     * Hash value, typically a file digest, that allows unique
     * identification a specific package.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Digest digest = 19;</code>
     */
    private $digest;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the package.
     *     @type array<\Grafeas\V1\Distribution>|\Google\Protobuf\Internal\RepeatedField $distribution
     *           Deprecated.
     *           The various channels by which a package is distributed.
     *     @type string $package_type
     *           The type of package; whether native or non native (e.g., ruby gems,
     *           node.js packages, etc.).
     *     @type string $cpe_uri
     *           The cpe_uri in [CPE format](https://cpe.mitre.org/specification/)
     *           denoting the package manager version distributing a package.
     *           The cpe_uri will be blank for language packages.
     *     @type int $architecture
     *           The CPU architecture for which packages in this distribution channel were
     *           built. Architecture will be blank for language packages.
     *     @type \Grafeas\V1\Version $version
     *           The version of the package.
     *     @type string $maintainer
     *           A freeform text denoting the maintainer of this package.
     *     @type string $url
     *           The homepage for this package.
     *     @type string $description
     *           The description of this package.
     *     @type \Grafeas\V1\License $license
     *           Licenses that have been declared by the authors of the package.
     *     @type array<\Grafeas\V1\Digest>|\Google\Protobuf\Internal\RepeatedField $digest
     *           Hash value, typically a file digest, that allows unique
     *           identification a specific package.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Package::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the package.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the package.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Deprecated.
     * The various channels by which a package is distributed.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Distribution distribution = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * Deprecated.
     * The various channels by which a package is distributed.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Distribution distribution = 10;</code>
     * @param array<\Grafeas\V1\Distribution>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDistribution($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\Distribution::class);
        $this->distribution = $arr;

        return $this;
    }

    /**
     * The type of package; whether native or non native (e.g., ruby gems,
     * node.js packages, etc.).
     *
     * Generated from protobuf field <code>string package_type = 11;</code>
     * @return string
     */
    public function getPackageType()
    {
        return $this->package_type;
    }

    /**
     * The type of package; whether native or non native (e.g., ruby gems,
     * node.js packages, etc.).
     *
     * Generated from protobuf field <code>string package_type = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPackageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_type = $var;

        return $this;
    }

    /**
     * The cpe_uri in [CPE format](https://cpe.mitre.org/specification/)
     * denoting the package manager version distributing a package.
     * The cpe_uri will be blank for language packages.
     *
     * Generated from protobuf field <code>string cpe_uri = 12;</code>
     * @return string
     */
    public function getCpeUri()
    {
        return $this->cpe_uri;
    }

    /**
     * The cpe_uri in [CPE format](https://cpe.mitre.org/specification/)
     * denoting the package manager version distributing a package.
     * The cpe_uri will be blank for language packages.
     *
     * Generated from protobuf field <code>string cpe_uri = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCpeUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpe_uri = $var;

        return $this;
    }

    /**
     * The CPU architecture for which packages in this distribution channel were
     * built. Architecture will be blank for language packages.
     *
     * Generated from protobuf field <code>.grafeas.v1.Architecture architecture = 13;</code>
     * @return int
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }

    /**
     * The CPU architecture for which packages in this distribution channel were
     * built. Architecture will be blank for language packages.
     *
     * Generated from protobuf field <code>.grafeas.v1.Architecture architecture = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setArchitecture($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\Architecture::class);
        $this->architecture = $var;

        return $this;
    }

    /**
     * The version of the package.
     *
     * Generated from protobuf field <code>.grafeas.v1.Version version = 14;</code>
     * @return \Grafeas\V1\Version|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * The version of the package.
     *
     * Generated from protobuf field <code>.grafeas.v1.Version version = 14;</code>
     * @param \Grafeas\V1\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\Version::class);
        $this->version = $var;

        return $this;
    }

    /**
     * A freeform text denoting the maintainer of this package.
     *
     * Generated from protobuf field <code>string maintainer = 15;</code>
     * @return string
     */
    public function getMaintainer()
    {
        return $this->maintainer;
    }

    /**
     * A freeform text denoting the maintainer of this package.
     *
     * Generated from protobuf field <code>string maintainer = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setMaintainer($var)
    {
        GPBUtil::checkString($var, True);
        $this->maintainer = $var;

        return $this;
    }

    /**
     * The homepage for this package.
     *
     * Generated from protobuf field <code>string url = 16;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The homepage for this package.
     *
     * Generated from protobuf field <code>string url = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * The description of this package.
     *
     * Generated from protobuf field <code>string description = 17;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of this package.
     *
     * Generated from protobuf field <code>string description = 17;</code>
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
     * Licenses that have been declared by the authors of the package.
     *
     * Generated from protobuf field <code>.grafeas.v1.License license = 18;</code>
     * @return \Grafeas\V1\License|null
     */
    public function getLicense()
    {
        return $this->license;
    }

    public function hasLicense()
    {
        return isset($this->license);
    }

    public function clearLicense()
    {
        unset($this->license);
    }

    /**
     * Licenses that have been declared by the authors of the package.
     *
     * Generated from protobuf field <code>.grafeas.v1.License license = 18;</code>
     * @param \Grafeas\V1\License $var
     * @return $this
     */
    public function setLicense($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\License::class);
        $this->license = $var;

        return $this;
    }

    /**
     * Hash value, typically a file digest, that allows unique
     * identification a specific package.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Digest digest = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Hash value, typically a file digest, that allows unique
     * identification a specific package.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Digest digest = 19;</code>
     * @param array<\Grafeas\V1\Digest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDigest($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\Digest::class);
        $this->digest = $arr;

        return $this;
    }

}
