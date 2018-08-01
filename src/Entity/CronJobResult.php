<?php

namespace Shapecode\Bundle\CronBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CronJobResult
 *
 * @package Shapecode\Bundle\CronBundle\Entity
 * @author  Nikita Loges
 * @ORM\HasLifecycleCallbacks
 */
class CronJobResult extends AbstractEntity implements CronJobResultInterface
{

    /**
     * @var \DateTime
     */
    protected $runAt;

    /**
     * @var float
     */
    protected $runTime;

    /**
     * @var integer
     */
    protected $statusCode;

    /**
     * @var string
     */
    protected $output;

    /**
     * @var CronJob
     */
    protected $cronJob;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->runAt = new \DateTime();
    }

    /**
     * @inheritdoc
     */
    public function setRunAt(\DateTime $runAt): void
    {
        $this->runAt = $runAt;
    }

    /**
     * @inheritdoc
     */
    public function getRunAt(): \DateTime
    {
        return $this->runAt;
    }

    /**
     * @inheritdoc
     */
    public function setRunTime(float $runTime): void
    {
        $this->runTime = $runTime;
    }

    /**
     * @inheritdoc
     */
    public function getRunTime(): float
    {
        return $this->runTime;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @inheritdoc
     */
    public function setOutput(?string $output): void
    {
        $this->output = $output;
    }

    /**
     * @inheritdoc
     */
    public function getOutput(): ?string
    {
        return $this->output;
    }

    /**
     * @inheritdoc
     */
    public function setCronJob(CronJobInterface $job): void
    {
        $this->cronJob = $job;
    }

    /**
     * @inheritdoc
     */
    public function getCronJob(): CronJobInterface
    {
        return $this->cronJob;
    }
}
