<?php

namespace App\Http\Controllers\Admin;

use App\Services\CurrencyRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrenciesController extends Controller
{
    public function index()
    {
        $repos = app(CurrencyRepositoryInterface::class)->findAll();
        return view('currencies' , [
            'repos' => $repos
        ]);
    }
}
