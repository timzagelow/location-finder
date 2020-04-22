<?php

namespace Classes;

use \Models\LocationGeneratorModel;
use \Models\LocationModel;

class LocationGenerator
{
    public function generate(LocationGeneratorModel $model)
    {
        $locations = [];

        $columns = range($model->getColumnStart(), $model->getColumnEnd());
        $rows = range($model->getRowStart(), $model->getRowEnd());
        $boxes = range($model->getBoxStart(), $model->getBoxEnd());
        $sections = range($model->getSectionStart(), $model->getSectionEnd());

        if (empty($model->getRowStart())) {
            foreach ($columns as $column) {
                foreach ($boxes as $box) {
                    foreach ($sections as $section) {
                        $locations[] = (new LocationModel)
                            ->setColumn($column)
                            ->setBox($box)
                            ->setSection($section);
                    }
                }
            }
        } else {
            foreach ($columns as $column) {
                foreach ($rows as $row) {
                    foreach ($boxes as $box) {
                        foreach ($sections as $section) {
                            $locations[] = (new LocationModel)
                                ->setColumn($column)
                                ->setRow($row)
                                ->setBox($box)
                                ->setSection($section);
                        }
                    }
                }
            }
        }

        return $locations;
    }
}