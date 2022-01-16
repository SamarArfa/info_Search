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
use App\Models\transport;
use App\Models\travel_case;
use App\Models\travel_dest;
use App\Models\university;
use App\Models\vehicle_type;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vehicle_type=vehicle_type::all();
        $car_color=car_color::all();
        $manufacture_comp=manufacture_comp::all();

        // $cityBorn=$born->sortBy('name')->pluck('name')->unique();
        // $cityHome=$home->sortBy('name')->pluck('name')->unique();
        return view('transportation',compact('manufacture_comp'
            ,'car_color','vehicle_type'));
    }
    public function search(Request $request,info $infos)
    {

        $person= new transport();

        $vehicle_type=vehicle_type::all();
        $car_color=car_color::all();
        $manufacture_comp=manufacture_comp::all();
// if ( $person = $infos->where('status' , 0)) {

        if (isset($request->vehicle_id)) {
            $person = $person->where('vehicle_id', 'LIKE',  $request->vehicle_id );
        } if (isset($request->vehicle_type)) {
        $person = $person->where('vehicle_type', 'LIKE', '%' . $request->vehicle_type . '%');
        } if (isset($request->car_color)) {
            $person = $person->where('car_color', 'LIKE', '%' . $request->car_color . '%');

        } if (isset($request->manufacture_comp)) {
            $person = $person->where('manufacture_comp', 'LIKE', '%' . $request->manufacture_comp . '%');

        }
        if (isset($request->license_number)) {
            $person = $person->where('license_number', 'LIKE', '%' . $request->license_number . '%');
        }



        // }
        $person = $person->get();
        // dd( $property);
        return view('transportation',compact('person','manufacture_comp'
            ,'car_color','vehicle_type'));

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
