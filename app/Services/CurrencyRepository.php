<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 08.07.18
 * Time: 8:22
 */

namespace App\Services;


class CurrencyRepository implements CurrencyRepositoryInterface
{

    public $currencies;

    public function __construct(array $currencies) {
        $this->currencies = $currencies;
    }

    public function findAll(): array
    {
        return $this->currencies;
    }

    public function findActive(): array
    {
        $arrayFindActive = [];
        foreach ($this->currencies as $cur){
            $cur->isActive() == true ? $arrayFindActive[] = $cur : null;
        }
        return $arrayFindActive;
    }

    public function findById(int $id) : Currency
    {
//        $arrayFindID = [];
//        foreach ($this->currencies as $cur){
//            if ($cur->getId() === $id){
//                $arrayFindID = CurrencyPresenter::present($cur);
//            } else {
//                $arrayFindID = [];
//            }
//        }
//        return $arrayFindID;
//        return CurrencyPresenter::present(Currency::class);
    }

    public function save(Currency $currency): void
    {

    }

    public function delete(Currency $currency): void
    {

    }
}