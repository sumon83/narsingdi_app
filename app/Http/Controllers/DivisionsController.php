<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Divisions::all();
        return view("pages.division")->with("divisions", $divisions);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $division = new Divisions;
        $this->validate($request, [
            'division_name' => 'required',
            'division_name_bangla' => 'required',
            'division_code' => 'required',
        ]);
        $division->division_name_eng = $request->input("division_name");
        $division->division_name_bangla = $request->input("division_name_bangla");
        $division->division_code = $request->input("division_code");
        $division->country_code = 880;
        $division->active_status = 1;
        $division->delete_status = 0;
        $division->created_at = date('Y-m-d H:i:s');
        //$division->update_at = $request->input("update_at");

        $division->save();

        return redirect('/division')->with('success', 'Division Inserted Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function show(Divisions $divisions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Divisions::find($id);
        return view('pages.edit')->with('division', $division);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //var_dump($request);die;
        $division =Divisions::find($id);
        $this->validate($request, [
            'division_name_eng' => 'required',
            'division_name_bangla' => 'required',
            'division_code' => 'required',
        ]);
        $division->division_name_eng = $request->input("division_name_eng");
        $division->division_name_bangla = $request->input("division_name_bangla");
        $division->division_code = $request->input("division_code");
        //$division->update_at = $request->input("update_at");

        $division->save();

        return redirect('/division')->with('success', 'Division updated successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Divisions  $divisions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Divisions::find($id);
        $division->delete($id);
        return redirect('/division')->with('success', 'Division deleted successfully');
    }
}
