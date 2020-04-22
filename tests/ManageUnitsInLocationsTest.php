<?php

require './models/UnitModel.php';

use Models\UnitModel;
use Classes\Location;

class ManageUnitsInLocationsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testAddUnitWithLocationStringToModel()
    {
        $unitModel = (new UnitModel)
            ->setType('CD')
            ->setQuantity(30);
        $unitLocation = '101b3c';

        $location = (new Location)->getModelFromString($unitLocation);

        $location->addUnit($unitModel);

        $this->assertEquals($unitLocation, $location->toString());
        $this->assertEquals('CD', $location->getUnits()[0]->getType());
        $this->assertEquals(30, $location->getUnits()[0]->getQuantity());
    }
}