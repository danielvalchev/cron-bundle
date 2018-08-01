<?php

namespace Shapecode\Bundle\CronBundle\Entity;

use DateTime;

/**
 * Class AbstractEntity
 *
 * @package Shapecode\Bundle\CronBundle\Entity
 * @author  Nikita Loges
 */
abstract class AbstractEntity implements AbstractEntityInterface
{

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function setId($id = null): void
    {
        $this->id = $id;
    }

    /**
     * @inheritdoc
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @inheritdoc
     */
    public function getCreatedAt(): \DateTime
    {
        if (empty($this->createdAt)) {
            $this->setCreatedAt(new \DateTime());
        }

        return $this->createdAt;
    }

    /**
     * @inheritdoc
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @inheritdoc
     */
    public function getUpdatedAt(): \DateTime
    {
        if (empty($this->updatedAt)) {
            $this->setUpdatedAt(new \DateTime());
        }

        return $this->updatedAt;
    }
}
