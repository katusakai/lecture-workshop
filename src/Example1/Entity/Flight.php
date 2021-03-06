<?php declare(strict_types=1);

namespace Example1\Entity;

use DateTime;

class Flight
{
    /** @var int */
    private $id;

    /** @var string */
    private $flightNumber;

    /** @var DateTime */
    private $scheduledDate;

    /** @var int */
    private $aircraftId;

    public function __construct(int $id, string $flightNumber, DateTime $scheduledDate, int $aircraftId)
    {
        $this->id = $id;
        $this->flightNumber = $flightNumber;
        $this->scheduledDate = $scheduledDate;
        $this->aircraftId = $aircraftId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFlightNumber(): string
    {
        return $this->flightNumber;
    }

    public function getScheduledDate(): DateTime
    {
        return $this->scheduledDate;
    }

    public function getAircraftId(): int
    {
        return $this->aircraftId;
    }
}