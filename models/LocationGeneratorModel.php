<?php

namespace Models;

class LocationGeneratorModel
{
    private $columnStart;
    private $columnEnd;
    private $rowStart;
    private $rowEnd;
    private $boxStart;
    private $boxEnd;
    private $sectionStart;
    private $sectionEnd;

    /**
     * @return mixed
     */
    public function getColumnStart()
    {
        return $this->columnStart;
    }

    /**
     * @param mixed $columnStart
     * @return LocationGeneratorModel
     */
    public function setColumnStart($columnStart)
    {
        $this->columnStart = $columnStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColumnEnd()
    {
        return $this->columnEnd;
    }

    /**
     * @param mixed $columnEnd
     * @return LocationGeneratorModel
     */
    public function setColumnEnd($columnEnd)
    {
        $this->columnEnd = $columnEnd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRowStart()
    {
        return $this->rowStart;
    }

    /**
     * @param mixed $rowStart
     * @return LocationGeneratorModel
     */
    public function setRowStart($rowStart)
    {
        $this->rowStart = $rowStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRowEnd()
    {
        return $this->rowEnd;
    }

    /**
     * @param mixed $rowEnd
     * @return LocationGeneratorModel
     */
    public function setRowEnd($rowEnd)
    {
        $this->rowEnd = $rowEnd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBoxStart()
    {
        return $this->boxStart;
    }

    /**
     * @param mixed $boxStart
     * @return LocationGeneratorModel
     */
    public function setBoxStart($boxStart)
    {
        $this->boxStart = $boxStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBoxEnd()
    {
        return $this->boxEnd;
    }

    /**
     * @param mixed $boxEnd
     * @return LocationGeneratorModel
     */
    public function setBoxEnd($boxEnd)
    {
        $this->boxEnd = $boxEnd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSectionStart()
    {
        return $this->sectionStart;
    }

    /**
     * @param mixed $sectionStart
     * @return LocationGeneratorModel
     */
    public function setSectionStart($sectionStart)
    {
        $this->sectionStart = $sectionStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSectionEnd()
    {
        return $this->sectionEnd;
    }

    /**
     * @param mixed $sectionEnd
     * @return LocationGeneratorModel
     */
    public function setSectionEnd($sectionEnd)
    {
        $this->sectionEnd = $sectionEnd;
        return $this;
    }
}