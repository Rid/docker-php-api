<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class Config
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
    The client must send the version number along with the modified specification when updating these objects.
    This approach ensures safe concurrency and determinism in that the change on the object
    may not be applied if the version number has changed from the last read. In other words,
    if two update requests specify the same base version, only one of the requests can succeed.
    As a result, two separate update requests that happen at the same time will not
    unintentionally overwrite each other.

     *
     * @var ObjectVersion
     */
    protected $version;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var ConfigSpec
     */
    protected $spec;

    /**
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
    The client must send the version number along with the modified specification when updating these objects.
    This approach ensures safe concurrency and determinism in that the change on the object
    may not be applied if the version number has changed from the last read. In other words,
    if two update requests specify the same base version, only one of the requests can succeed.
    As a result, two separate update requests that happen at the same time will not
    unintentionally overwrite each other.

     *
     * @return ObjectVersion|null
     */
    public function getVersion(): ?ObjectVersion
    {
        return $this->version;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
    The client must send the version number along with the modified specification when updating these objects.
    This approach ensures safe concurrency and determinism in that the change on the object
    may not be applied if the version number has changed from the last read. In other words,
    if two update requests specify the same base version, only one of the requests can succeed.
    As a result, two separate update requests that happen at the same time will not
    unintentionally overwrite each other.

     *
     * @param ObjectVersion|null $version
     *
     * @return self
     */
    public function setVersion(?ObjectVersion $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return ConfigSpec|null
     */
    public function getSpec(): ?ConfigSpec
    {
        return $this->spec;
    }

    /**
     * @param ConfigSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?ConfigSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }
}
