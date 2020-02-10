<?php

declare(strict_types=1);

namespace Shapecode\Bundle\CronBundle\Entity;

use DateTime;

class CronJobResult extends AbstractEntity implements CronJobResultInterface
{
    /**
     * @var DateTime
     */
    protected $runAt;

    /**
     * @var float
     */
    protected $runTime;

    /**
     * @var int
     */
    protected $statusCode;

    /**
     * @var string|null
     */
    protected $output;

    /**
     * @var CronJobInterface
     */
    protected $cronJob;

    public function __construct()
    {
        parent::__construct();

        $this->runAt = new DateTime();
    }

    public function setRunAt(DateTime $runAt) : void
    {
        $this->runAt = $runAt;
    }

    public function getRunAt() : DateTime
    {
        return $this->runAt;
    }

    public function setRunTime(float $runTime) : void
    {
        $this->runTime = $runTime;
    }

    public function getRunTime() : float
    {
        return $this->runTime;
    }

    public function getStatusCode() : int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode) : void
    {
        $this->statusCode = $statusCode;
    }

    public function setOutput(?string $output) : void
    {
        $this->output = $output;
    }

    public function getOutput() : ?string
    {
        return $this->output;
    }

    public function setCronJob(CronJobInterface $job) : void
    {
        $this->cronJob = $job;
    }

    public function getCronJob() : CronJobInterface
    {
        return $this->cronJob;
    }

    public function __toString() : string
    {
        return $this->getCronJob()->getCommand() . ' - ' . $this->getRunAt()->format('d.m.Y H:i P');
    }
}