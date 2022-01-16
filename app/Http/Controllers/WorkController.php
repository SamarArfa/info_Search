<?php

namespace App\Http\Controllers;

use App\Models\car_color;
use App\Models\cityOfBorn;
use App\Models\cityOfHome;
use App\Models\college;
use App\Models\crossing;
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
use App\Models\workinfo;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $work_emp=Emp_work::all();
        $emp_cd=employee_cd::all();

        return view('work_data',compact('emp_cd','work_emp'));
    }
    public function search(Request $request,info $infos)
    {

        $person= new workinfo();
        $work_emp=Emp_work::all();
        $emp_cd=employee_cd::all();

        if (isset($request->Emp_work)) {
            $person = $person->where('Emp_work', 'LIKE',  $request->Emp_work );
        } if (isset($request->employee_cd)) {
        $person = $person->where('employee_cd', 'LIKE', '%' . $request->employee_cd . '%');
    }
        // }
        $person = $person->get();
        // dd( $property);
        return view('work_data',compact('emp_cd','work_emp'));

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
