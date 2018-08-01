<?php

declare(strict_types=1);

namespace Shapecode\Bundle\CronBundle\Entity;

use DateTime;

interface AbstractEntityInterface
{
    public function setCreatedAt(DateTime $createdAt) : void;

    public function getCreatedAt() : DateTime;

    public function setUpdatedAt(DateTime $updatedAt) : void;

    public function getUpdatedAt() : DateTime;

    /**
     * @return int|null
     */
    public function getId();

    /**
     * @param integer|null $id
     */
    public function setId($id = null): void;
}
