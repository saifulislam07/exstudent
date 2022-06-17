<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use Illuminate\Http\Request;
use Validator;

class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $aboutme = Aboutme::all();
        return view('admin.pages.aboutme.aboutme', get_defined_vars());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.aboutme.addaboutme', get_defined_vars());
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
            'contact' => 'required',
            'details' => 'required',
            'title' => 'required',
            // 'homeimage' => 'required|image|mimes:jpeg,png,jpg',
            // 'aboutppageimage' => 'required|image|mimes:jpeg,png,jpg',
            // 'storyimage' => 'required|image|mimes:jpeg,png,jpg',
            // 'coverimage' => 'required|image|mimes:jpeg,png,jpg',
            'mylogo' => 'required|mimes:jpeg,png,jpg',
        ]);

        // $homeimage = time() . '.' . 'home' . '.' . $request->homeimage->extension();
        // $aboutppageimage = time() . '.' . 'about' . '.' . $request->aboutppageimage->extension();
        // $storyimage = time() . '.' . 'story' . '.' . $request->storyimage->extension();
        // $coverimage = time() . '.' . 'cover' . '.' . $request->coverimage->extension();
        $mylogo = time() . '.' . 'abc' . '.' . '.' . $request->mylogo->extension();

        // $request->homeimage->move(public_path('aboutmes'), $homeimage);
        // $request->aboutppageimage->move(public_path('aboutmes'), $aboutppageimage);
        // $request->storyimage->move(public_path('aboutmes'), $storyimage);
        // $request->coverimage->move(public_path('aboutmes'), $coverimage);
        $request->mylogo->move(public_path('aboutmes'), $mylogo);




        $aboutme = new Aboutme();
        $aboutme->contact = $request->contact;
        $aboutme->email = $request->email;
        $aboutme->title = $request->title;
        $aboutme->details = $request->details;
        $aboutme->status = 1;
        // $aboutme->homeimage = $homeimage;
        // $aboutme->aboutppageimage = $aboutppageimage;
        // $aboutme->storyimage = $storyimage;
        // $aboutme->coverimage = $coverimage;
        $aboutme->mylogo = $mylogo;
        $aboutme->save();
        session()->flash('success', 'About details Updated Successfully.');

        return redirect('/aboutme');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutme $aboutme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function edit(Aboutme $aboutme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutme $aboutme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutme  $aboutme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutme $aboutme)
    {
        //
    }
}