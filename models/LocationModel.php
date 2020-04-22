<?php

namespace Models;

class LocationModel
{
    /** @var string */
    private $column;
    /** @var string */
    private $row;
    /** @var string */
    private $box;
    /** @var string */
    private $section;
    /** @var UnitModel[] */
    private $units;
    /** @var integer */
    private $maxUnitQuantity;
    /** @var string */
    private $type;

    public function toString()
    {
        return $this->column . $this->row . $this->box . $this->section;
    }

    public function isOpen()
    {
        $unitQuantity = 0;

        foreach ($this->units as $unit) {
            $unitQuantity += $unit->getQuantity();
        }

        return $unitQuantity < $this->maxUnitQuantity;
    }

    /**
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @param string $column
     * @return LocationModel
     */
    public function setColumn($column)
    {
        $this->column = $column;
        return $this;
    }

    /**
     * @return string
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param string $row
     * @return LocationModel
     */
    public function setRow($row)
    {
        $this->row = $row;
        return $this;
    }

    /**
     * @return string
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * @param string $box
     * @return LocationModel
     */
    public function setBox($box)
    {
        $this->box = $box;
        return $this;
    }

    /**
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param string $section
     * @return LocationModel
     */
    public function setSection($section)
    {
        $this->section = $section;
        return $this;
    }

    /**
     * @return UnitModel[]
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param UnitModel[] $units
     * @return LocationModel
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    public function addUnit($unit)
    {
        $this->units[] = $unit;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxUnitQuantity()
    {
        return $this->maxUnitQuantity;
    }

    /**
     * @param int $maxUnitQuantity
     * @return LocationModel
     */
    public function setMaxUnitQuantity($maxUnitQuantity)
    {
        $this->maxUnitQuantity = $maxUnitQuantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return LocationModel
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}