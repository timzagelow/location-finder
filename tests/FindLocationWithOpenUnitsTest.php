<?php

use Classes\Location;
use Models\LocationModel;
use Models\UnitModel;

class FindLocationWithOpenUnitsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testFullLocationReturnsClosed()
    {
        $unitModel = (new UnitModel)
            ->setType('CD')
            ->setQuantity(30);
        $unitLocation = '101b3c';

        $location = (new Location)->getModelFromString($unitLocation);

        $location->addUnit($unitModel);
        $location->setMaxUnitQuantity(1);

        $this->assertFalse($location->isOpen());
    }

    public function testFullLocationReturnsOpen()
    {
        $unitModel = (new UnitModel)
            ->setType('CD')
            ->setQuantity(30);
        $unitLocation = '101b3c';

        $location = (new Location)->getModelFromString($unitLocation);

        $location->addUnit($unitModel);
        $location->setMaxUnitQuantity(31);

        $this->assertTrue($location->isOpen());
    }

    public function testLocationWithMaxUnitsEqualToUnitsReturnsClosed()
    {
        $unitModel = (new UnitModel)
            ->setType('CD')
            ->setQuantity(30);
        $unitLocation = '101b3c';

        $location = (new Location)->getModelFromString($unitLocation);

        $location->addUnit($unitModel);
        $location->setMaxUnitQuantity(30);

        $this->assertFalse($location->isOpen());
    }

    public function testFindOpenLocationWithCertainType()
    {
        $unitModel = (new UnitModel)
            ->setType('CD')
            ->setQuantity(30);
        $unitLocation = '101b3c';

        $location = (new Location)->getModelFromString($unitLocation);

        $location->addUnit($unitModel);
        $location->setMaxUnitQuantity(31);
        $location->setType('Media');

        $this->assertTrue($location->isOpen());
        $this->assertEquals('Media', $location->getType());
    }
}