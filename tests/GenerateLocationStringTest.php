<?php

require './models/LocationModel.php';

use Models\LocationModel;

class GenerateLocationStringTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testGeneratesLocationStringWithRow()
    {
        $expected = '101b1a';

        $model = new LocationModel();

        $model->setColumn('101');
        $model->setRow('b');
        $model->setBox('1');
        $model->setSection('a');

        $location = $model->toString();

        $this->assertEquals($expected, $location);
    }

    public function testGeneratesLocationStringWithoutRow()
    {
        $expected = '101b1';

        $model = new LocationModel();

        $model->setColumn('101');
        $model->setBox('b');
        $model->setSection('1');

        $location = $model->toString();

        $this->assertEquals($expected, $location);
    }
}