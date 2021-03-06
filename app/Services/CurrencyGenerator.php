<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 08.07.18
 * Time: 8:32
 */

namespace App\Services;


class CurrencyGenerator
{

    public static function generate() : array
    {
        return [

            new Currency(
                1,
                'Bitcoin',
                'btc',
                6623.91,
                new \DateTime(),
                true
            ) ,
            new Currency(
                2,
                'Ethereum' ,
                'eth',
                472.05,
                new \DateTime(),
                false
            ) ,
            new Currency(
                3,
                'Maker ',
                'mkr',
                553.91,
                new \DateTime(),
                true
            ) ,
            new Currency(
                4,
                'Dash ',
                'mkr',
                229.92,
                new \DateTime(),
                true
            ) ,
            new Currency(
                5,
                'Qtum ',
                'qtm',
                8.76,
                new \DateTime(),
                false
            ) ,



        ];
    }

}