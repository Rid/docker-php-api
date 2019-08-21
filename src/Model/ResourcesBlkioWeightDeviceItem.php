<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ResourcesBlkioWeightDeviceItem
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var int
     */
    protected $weight;

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int|null $weight
     *
     * @return self
     */
    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
