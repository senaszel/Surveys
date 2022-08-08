<?php

namespace App\Http\Controllers;

use App\Http\Enums\QuestionTypesEnum;
use Illuminate\Http\Request;

class SurveysController extends Controller
{
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
        $SurveysController = $this;
        $test = 'test ok';
        return view('surveys.create',compact('SurveysController','test'));
    }

    public static function renderComponent(QuestionTypesEnum $questionTypesEnum = QuestionTypesEnum::ABCD) {
        $ret = '';
        switch ($questionTypesEnum) {
            case QuestionTypesEnum::OPEN :
                $ret = 'components.questionTypes.Open';
                break;
            case QuestionTypesEnum::TRUE_OR_FALSE :
                $ret = 'components.questionTypes.TrueOrFalse';
                break;
            case QuestionTypesEnum::ABCD :
                $ret = 'components.questionTypes.ABCD';
                break;
            default :
                $ret = 'components.questionTypes.ABCD';
                break;
        }
        return view($ret)->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // temporary used as view
        return view('surveys.store');
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
