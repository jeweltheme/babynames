<?php

namespace App\Http\Controllers;

use App\BabyNames;
use App\BabyNameMeaning;
use Illuminate\Http\Request;
use App\Http\Requests\BabyNameRequest;

class BabyNamesController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('muslimbabyname');
    }

    public function getData(){
        return BabyNames::orderBy('n_english', 'ASC')->get();
        //return BabyNames::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //

        // $name=$req->input('name');
        // $roll=$req->input('roll');
        // $dept=$req->input('dept');

        // $data = array('name'=>$name,'roll'=>$roll,'dept'=>$dept );

        // DB::table('laravel1')->insert($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BabyNameRequest $request){

            $mbn = new BabyNames;
            $mbn->n_english = $request->n_english;
            $mbn->n_bangla = $request->n_bangla;
            $mbn->n_arabic = $request->n_arabic;
            $mbn->n_hindi = $request->n_hindi;
            $mbn->n_urdu = $request->n_urdu;

            $mbn->save();

            return $mbn;

            // $name_id = $mbn->id;
            // $mbn_mean = new BabyNameMeaning;
            // $mbn_mean->m_english = $request->m_english;
            // $mbn_mean->m_bangla = $request->m_bangla;
            // $mbn_mean->m_arabic = $request->m_arabic;
            // $mbn_mean->m_hindi = $request->m_hindi;
            // $mbn_mean->m_urdu =  $request->m_urdu;
            // $mbn_mean->name_id = $name_id;

            // $mbn_mean->save();




        //return $request->all();

        // $mbn = new BabyNames();
        // $mbn->n_english = $request->n_english;
        // $mbn->n_bangla = $request->n_bangla;
        // $mbn->n_arabic = $request->n_arabic;
        // $mbn->n_hindi = $request->n_hindi;
        // $mbn->n_urdu = $request->n_urdu;

        // $mbn->save();
        //DB::table('names')->$mbn->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BabyNames  $babyNames
     * @return \Illuminate\Http\Response
     */
    public function show(BabyNames $babyNames)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BabyNames  $babyNames
     * @return \Illuminate\Http\Response
     */
    public function edit(BabyNames $babyNames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BabyNames  $babyNames
     * @return \Illuminate\Http\Response
     */
    public function update(BabyNameRequest $request)
    {
        $mbn = BabyNames::find($request->id);
        $mbn->n_english = $request->n_english;
        $mbn->n_bangla = $request->n_bangla;
        $mbn->n_arabic = $request->n_arabic;
        $mbn->n_hindi = $request->n_hindi;
        $mbn->n_urdu = $request->n_urdu;

        $mbn->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BabyNames  $babyNames
     * @return \Illuminate\Http\Response
     */
    public function destroy(BabyNames $babyNames)
    {
        BabyNames::where('id', $babyNames->id)->delete();
    }
}
