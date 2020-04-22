<?php

require './classes/LocationGenerator.php';
require './models/LocationGeneratorModel.php';

use Classes\LocationGenerator;
use Models\LocationGeneratorModel;

class GenerateLocationsFromRangesTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testGenerateLocationsWithAllProperties()
    {
        $model = (new LocationGeneratorModel)
            ->setColumnStart('1')
            ->setColumnEnd('10')
            ->setRowStart('a')
            ->setRowEnd('e')
            ->setBoxStart('50')
            ->setBoxEnd('55')
            ->setSectionStart('g')
            ->setSectionEnd('h');

        $locations = (new LocationGenerator)->generate($model);

        $this->assertCount(600, $locations);
    }

    public function testGenerateLocationsWithoutRows()
    {
        $model = (new LocationGeneratorModel)
            ->setColumnStart('1')
            ->setColumnEnd('10')
            ->setBoxStart('50')
            ->setBoxEnd('55')
            ->setSectionStart('g')
            ->setSectionEnd('h');

        $locations = (new LocationGenerator)->generate($model);

        $this->assertCount(120, $locations);
    }
}