<?php

namespace Classes;

use Models\LocationModel;

class Location
{
    public function getModelFromString($string)
    {
        $split = (new String)->split($string);

        $split = array_filter($split);

        if (count($split) === 4) {
            return (new LocationModel)
                ->setColumn($split[0])
                ->setRow($split[1])
                ->setBox($split[2])
                ->setSection($split[3]);
        }

        return (new LocationModel)
            ->setColumn($split[0])
            ->setBox($split[1])
            ->setSection($split[2]);
    }
}