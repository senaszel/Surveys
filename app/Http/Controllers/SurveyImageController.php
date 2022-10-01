<?php

namespace App\Http\Controllers;

use App\Models\SurveyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SurveyImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return view('surveys.image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->hasFile('surveyImage');
        if ($file){
            $newFile = $request->file('surveyImage');
            $filePath = $newFile->store('surveyImage');
            SurveyImage::create([
                'image_path' => $filePath
            ]);
        }

        return redirect(url('create-survey'));
        //return redirect()->action([SurveysController::class, 'index']);



       /*        $image=$request->hasFile('surveyImage');

        //dd($surveyImage);
        $data = $request->validate([
             'surveyImage' => 'image'
        ]);
        $path = $data['surveyImage'];
        //dd($data['surveyImage']);

        $data = $request['surveyImage']->store('surveyImage', 'public');
        //$path = $data['surveyImage']->storeAs('surveyImage', SurveyImage::id().'.png', 'public');
        //dd($image);
        if($data){

            $data = new SurveyImage($request->all());

            $data->save();

        }
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storee(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SurveyImage  $surveyImage
     * @return \Illuminate\Http\Response
     */
    public function show(SurveyImage $surveyImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SurveyImage  $surveyImage
     * @return \Illuminate\Http\Response
     */
    public function edit(SurveyImage $surveyImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SurveyImage  $surveyImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyImage $surveyImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SurveyImage  $surveyImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurveyImage $surveyImage)
    {
        //
    }
}
