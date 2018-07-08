<?php

namespace App\Services;

use phpDocumentor\Reflection\Types\Boolean;

class Currency
{
    // todo implement
    public $id;
    public $name;
    public $shortName;
    public $actualCourse;
    public $actualCourseDate;
    public $isActive;

    public function __construct(
        int $id,
        string $name,
        string $shortName,
        float $actualCourse,
        \DateTime $actualCourseDate,
        bool $isActive
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->shortName = $shortName;
        $this->actualCourse = $actualCourse;
        $this->actualCourseDate = $actualCourseDate;
        $this->isActive = $isActive;
    }


    // todo implement methods
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getShortName()
    {
        return $this->shortName;
    }

    public function getActualCourse()
    {
        return $this->actualCourse;
    }

    public function getActualCourseDate()
    {
        return $this->actualCourseDate;
    }

    public function isActive()
    {
        return $this->isActive;
    }
}