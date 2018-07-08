<?php

namespace App\Services;

use phpDocumentor\Reflection\Types\Boolean;

class Currency
{
    // todo implement
    private $id;
    private $name;
    private $shortName;
    private $actualCourse;
    private $actualCourseDate;
    private $isActive;

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

    public function setName($name) : void
    {
        $this->name = $name;
    }

    public function setShortName($shortName) : void
    {
        $this->shortName = $shortName;
    }

    public function setActualCourse($actualCourse) : void
    {
        $this->actualCourse = $actualCourse;
    }

    public function setActualCourseDate($actualCourseDate) : void
    {
        $this->actualCourseDate = $actualCourseDate;
    }

    public function setIsActive($isActive) : void
    {
        $this->isActive = $isActive;
    }




}