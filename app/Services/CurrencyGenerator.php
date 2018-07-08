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
            )

        ];
    }

}