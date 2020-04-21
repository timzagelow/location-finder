<?php

require './classes/Location.php';

use Models\LocationModel;
use Classes\Location;

class GenerateLocationModelFromStringTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testInitsObjectWithAllProperties()
    {
        $string = '101b2a';

        $location = new Location();
        $model = $location->getModelFromString($string);

        $expectedModel = (new LocationModel)
            ->setColumn('101')
            ->setRow('b')
            ->setBox('2')
            ->setSection('a');

        $this->assertEquals($model->getColumn(), $expectedModel->getColumn());
        $this->assertEquals($model->getRow(), $expectedModel->getRow());
        $this->assertEquals($model->getBox(), $expectedModel->getBox());
        $this->assertEquals($model->getSection(), $expectedModel->getSection());
    }

    public function testInitsObjectWithNoRow()
    {
        $string = '101b2';

        $location = new Location();
        $model = $location->getModelFromString($string);

        $expectedModel = (new LocationModel)
            ->setColumn('101')
            ->setBox('b')
            ->setSection('2');

        $this->assertEquals($model->getColumn(), $expectedModel->getColumn());
        $this->assertEquals($model->getBox(), $expectedModel->getBox());
        $this->assertEquals($model->getSection(), $expectedModel->getSection());
    }
}