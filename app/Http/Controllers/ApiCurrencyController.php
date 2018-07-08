<?php

namespace App\Http\Controllers;

use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepository;
use App\Services\CurrencyRepositoryInterface;
use Illuminate\Http\Request;

class ApiCurrencyController extends Controller
{
    public $repository;

    public function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getActiveCurrency()
    {
        $json_currency = [];

        foreach ($this->repository->findActive() as $currency){
            $json_currency[] = CurrencyPresenter::present($currency);
        }
        return response()->json($json_currency);
    }

    public function getCurrencyByID(int $id)
    {
        $repositoryID = app(CurrencyRepositoryInterface::class)->findById($id);

        if($repositoryID !== null){
            return response()->json(CurrencyPresenter::present($repositoryID));
        } else {
            return response()->json([
                'message' => 'Current currency not found'
            ], 404);
        }
    }
}
