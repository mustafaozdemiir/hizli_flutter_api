<?php

namespace App\Http\Controllers;

use App\Models\widget;
use App\Models\methods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $widgetTable = DB::table('widgets')->get();

        foreach ($widgetTable as $widget) {
            $widget->methods = DB::table('methods')->where('widget_id', $widget->id)->get();
        }


        return $widgetTable;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'type'=>'required',
            'kind'=>'required',
            'path'=>'required'
        ]);
        return widget::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\widget  $widget
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
              
        return widget::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\widget  $widget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $widget= widget::find($id);
        $widget->update($request->all());
        return $widget;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\widget  $widget
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
       return widget::destroy($id);
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
