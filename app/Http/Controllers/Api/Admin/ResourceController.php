<?php

namespace App\Http\Controllers\Api\Admin;

use App\Services\Currency;
use App\Services\CurrencyPresenter;
use App\Services\CurrencyRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repos = app(CurrencyRepositoryInterface::class)->findAll();
        $json_currency = [];

        foreach ($repos as $currency) {
            $json_currency[] = CurrencyPresenter::present($currency);
        }
        return response()->json($json_currency);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repos = app(CurrencyRepositoryInterface::class);
        $currency = new Currency(
            $repos->getLastId(),
            $request->input('name'),
            $request->input('short_name'),
            $request->input('actual_course'),
            \DateTime::createFromFormat('Y-m-d H-i-s', $request->input('actual_course_date')),
            $request->input('active')
        );

        $repos->save($currency);
        return response()->json(CurrencyPresenter::present($currency));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currency = app(CurrencyRepositoryInterface::class)->findById($id);
        if ($currency !== null) {
            return response()->json(CurrencyPresenter::present($currency));
        } else {
            return response()->json([
                'message' => 'Current currency not found'
            ], 404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $repository = app(CurrencyRepositoryInterface::class);
        $currency = $repository->findById($id);

        if ($currency != null) {
            if (!empty($request->all())) {

                $currency->setName($request->input('name'));
                $currency->setShortName($request->input('short_name'));
                $currency->setActualCourse($request->input('actual_course'));
                $currency->setActualCourseDate(\DateTime::createFromFormat('Y-m-d H-i-s', $request->input('actual_course_date')));
                $currency->setIsActive($request->input('active'));

                $repository->save($currency);
                return response()->json(CurrencyPresenter::present($currency));
            }
        } else {
            return response()->json([
                'message' => 'Currency not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reposit = app(CurrencyRepositoryInterface::class);
        $currency = $reposit->findById($id);
        if($currency != null){
            $reposit->delete($currency);
            return response()->json([
                'message' => 'Current is deleted'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Current not found'
            ], 404);
        }


    }
}
