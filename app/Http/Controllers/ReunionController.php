<?php

namespace App\Http\Controllers;

use App\Models\reunion;
use Illuminate\Http\Request;

class ReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allmember = reunion::all();
        return view('admin.pages.reunion2022.reunion2022', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.reunion2022.addreunionregistration', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'first_name' => 'required',
            'year' => 'required'
        ]);

        $first_name = $request->first_name;
        $year = $request->year;
        $size = $request->size;

        for ($i = 0; $i < count($first_name); $i++) {
            $reunion = new reunion();
            $reunion->name = $first_name[$i];
            $reunion->year = $year[$i];
            $reunion->size = $size[$i];
            $reunion->status = 1;

            $reunion->save();
        }
        session()->flash('success', 'Registered member entry successfully');
        return redirect('/reunionregistration');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function show(reunion $reunion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function edit(reunion $reunion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reunion $reunion)
    {
        //
    }
    public function memberdataedit(Request $request)
    {
        $user = auth()->user();

        $update = reunion::find($request->oldid);
        $update->name = $request->name;
        $update->year = $request->year;
        $update->size = $request->size;
        $update->userid = $user->id;

        $update->save();
        session()->flash('success', 'Registered member Update successfully');
        return redirect('/reunionregistration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function destroy(reunion $reunion)
    {
        //
    }
}
