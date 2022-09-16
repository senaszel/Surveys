<?php

namespace App\Http\Controllers;

use App\Interfaces\CreateSurveysInterface;
use Illuminate\Http\Request;

class SurveysController extends Controller
{
    private $CreateSurveysService;

    public function __construct(CreateSurveysInterface $CreateSurveysService)
    {
        $this->CreateSurveysService = $CreateSurveysService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surveys.index');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ostatnio_dodane_index()
    {
        return view('surveys.ostatnio_dodane_index');
    }


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function najpopularniejsze_index()
    {
        return view('surveys.najpopularniejsze_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-survey');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->CreateSurveysService->store($request->collect());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
