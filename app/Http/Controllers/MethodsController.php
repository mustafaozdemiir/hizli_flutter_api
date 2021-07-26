<?php

namespace App\Http\Controllers;

use App\Models\methods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $methodTables = DB::table('methods')->get();
        return $methodTables;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\methods  $methods
     * @return \Illuminate\Http\Response
     */
    public function show(methods $methods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\methods  $methods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, methods $methods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\methods  $methods
     * @return \Illuminate\Http\Response
     */
    public function destroy(methods $methods)
    {
        //
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search( $name)
    {
       return widget::where('name','like','%'.$name.'%')->get();
    }

}
