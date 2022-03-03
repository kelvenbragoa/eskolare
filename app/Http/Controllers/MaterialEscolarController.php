<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\SchoolMaterial;
use Illuminate\Http\Request;

class MaterialEscolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $school = School::get();
        return view('admin.materialescolar.index', compact('school'));
    }

    public function addmaterial(School $school){

        return view('admin.materialescolar.addmaterial', compact('school'));
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
        //
        $data = $request->all();
        $material = $request->material_id;

        $mensagem = 'Materiais adicionado com sucesso';
        $mensagem2 = 'Materiais adicionado com sucesso. Materiais repetidos foram descartados';

        $msg = $mensagem;

        for ($i=0; $i < count($material); $i++) { 
            if(SchoolMaterial::where('material_id',$material[$i])->where('school_id',$data['school_id'])->where('grade_id',$data['grade_id'])->exists()){
                $msg = $mensagem2;
            }else{

                SchoolMaterial::create([
                    'material_id' => $material[$i],
                    'school_id' => $data['school_id'],
                    'grade_id' => $data['grade_id'],
                    
                ]);
            }
            
        }

        return redirect('/materialescolar')->with('messageSuccess', $msg);

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
        

        $school = School::find($id);

        $schoolmaterial = SchoolMaterial::where('school_id',$id)->get();

        return view('admin.materialescolar.show', compact('school','schoolmaterial'));
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

        $schoolmaterial = Schoolmaterial::find($id);
            $schoolmaterial->delete();
            return back()->with('messageSuccess','Success');
    }
}
