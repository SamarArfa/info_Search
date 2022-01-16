<?php

namespace App\Http\Controllers;

use App\Models\car_color;
use App\Models\cityOfBorn;
use App\Models\cityOfHome;
use App\Models\college;
use App\Models\crossing;
use App\Models\education;
use App\Models\Emp_work;
use App\Models\employee_cd;
use App\Models\gender;
use App\Models\hay_cd;
use App\Models\info;
use App\Models\manufacture_comp;
use App\Models\qualification;
use App\Models\region_cd;
use App\Models\religion_cd;
use App\Models\social_status_cd;
use App\Models\specialization;
use App\Models\status_cd;
use App\Models\travel_case;
use App\Models\travel_dest;
use App\Models\university;
use App\Models\vehicle_type;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $university=university::all();
        $college=college::all();
        $specialize=specialization::all();
        $qualif=qualification::all();

        // $cityBorn=$born->sortBy('name')->pluck('name')->unique();
        // $cityHome=$home->sortBy('name')->pluck('name')->unique();
        return view('education',compact('qualif','specialize','college','university'));
    }
    public function search(Request $request,info $infos)
    {

        $person= new education();

        $university=university::all();
        $college=college::all();
        $specialize=specialization::all();
        $qualif=qualification::all();

// if ( $person = $infos->where('status' , 0)) {

        if (isset($request->university)) {
            $person = $person->where('university', 'LIKE',  $request->university);
        } if (isset($request->college)) {
        $person = $person->where('college', 'LIKE', '%' . $request->college . '%');
    } if (isset($request->specialization)) {
        $person = $person->where('specialization', 'LIKE', '%' . $request->specialization . '%');

    } if (isset($request->qualification)) {
        $person = $person->where('qualification', 'LIKE', '%' . $request->qualification . '%');

    }
        if (isset($request->min_university_avg)&&isset($request->max_university_avg)) {
            // $person =  DB::table('infos')
            // ->whereBetween('age', [$request->age1 , $request->age2 ])
            // ->get();
            $person = $person->where('university_avg', '<=', $request->max_university_avg)->where('university_avg', '>=', $request->min_university_avg);

        }

        // }
        $person = $person->get();
        // dd( $property);
        return view('education',compact('person','qualif','specialize','college','university'));

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
    }
}
