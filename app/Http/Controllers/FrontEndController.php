<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Material;
use App\Models\School;
use App\Models\SchoolBus;
use App\Models\SchoolMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    //

    public function howitworks(){
        return view('howitworks');
    }

    public function teacher(){
        return view('teacher');
    }

    public function schoolbus(){
        return view('buschool.schoolbus');
    }

    public function showschoolbus($id){
        $bus = SchoolBus::where('school_id',$id)->get();
        return view('buschool.show',compact('bus'));
    }

    public function materialstore(){
        
        return view('store.index');
    }

    public function getSchool($id){

        $school = School::where('province_id',$id)->get();


        echo json_encode(DB::table('schools')->where('province_id',$id)->get());
    }

    public function materialgrade(Request $request){

        $data = $request->all();
        $material = SchoolMaterial::where('grade_id',$data['grade'])->where('school_id',1)->get();

        $grade = Grade::find($data['grade']);
        
        return view('store.showgrade',compact('material','grade'));
    }




}
