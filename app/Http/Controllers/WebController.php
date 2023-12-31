<?php

namespace App\Http\Controllers;
use App\Strategy\FirstStrategyFormat;
use App\Strategy\SecondStrategyFormat;
use App\Strategy\Context;
class WebController extends Controller
{
    public function index()
    {
        $initialObj = [
            ['brandName' => 'Ford', 'model' => 'Mustang', 'modelDetails' => 'GT rest 2',
                'modelYear' => '2014', 'productionYear' => '2013', 'color' => 'Oxford White'],
            ['brandName' => 'BMW', 'model' => '520i', 'modelDetails' => 'rest', 'modelYear' => '2001',
                'productionYear' => '2001', 'color' => 'Green'],
            ['brandName' => 'Toyota', 'model' => 'Camry', 'modelDetails' => 'SE', 'modelYear' => '2020',
                'productionYear' => '2019', 'color' => 'Silver'],
            ['brandName' => 'Honda', 'model' => 'Civic', 'modelDetails' => 'EX', 'modelYear' => '2022',
                'productionYear' => '2021', 'color' => 'Blue'],
        ];

        $firstStrategyFormat = new FirstStrategyFormat();
        $contextFirst = new Context($initialObj, $firstStrategyFormat);
        var_dump($contextFirst->executeStrategy());

        $secondStrategyFormat = new SecondStrategyFormat();
        $contextSecond = new Context($initialObj, $secondStrategyFormat);
        var_dump($contextSecond->executeStrategy());
    }


}


