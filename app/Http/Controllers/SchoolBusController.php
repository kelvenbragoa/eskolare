<?php

namespace App\Http\Controllers;

use App\Models\SchoolBus;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SchoolBusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schoolbus = SchoolBus::get();
        return view('admin.schoolbus.index', compact('schoolbus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.schoolbus.create');
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
        $data = $request->all();
        
        $imagePath = request('image')->store('images','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
        $image->save();

        SchoolBus::create([

            'name' => $data['name'],
            'description' => $data['description'],
            'email' => $data['email'],
            'school_id' => $data['school_id'],
            'mobile' => $data['mobile'],
            'image' => $imagePath,
        ]);

        return back()->with('messageSuccess','Success');
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
        $schoolbus = SchoolBus::find($id);
        return view('admin.schoolbus.show',compact('schoolbus'));
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
        $schoolbus = SchoolBus::find($id);
        return view('admin.schoolbus.edit',compact('schoolbus'));
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
        $schoolbus = SchoolBus::find($id);
        $data = $request->all();

        if(request('image')){
            $imagePath = request('image')->store('material','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();
            $imageArray = ['image'=> $imagePath ];
        }
       
        $schoolbus->update(
            array_merge(
            $data,
            $imageArray ?? []
        )
            );
        return back()->with('messageSuccess','Success');
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
        $schoolbus = SchoolBus::find($id);
            $schoolbus->delete();
            return back()->with('messageSuccess','Success');
    }
}
