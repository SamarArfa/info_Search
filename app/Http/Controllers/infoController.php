<?php

namespace App\Http\Controllers;

use App\Models\car_color;
use App\Models\college;
use App\Models\crossing;
use App\Models\Emp_work;
use App\Models\employee_cd;
use App\Models\gender;
use App\Models\hay_cd;
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
use Illuminate\Support\Facades\DB;
use App\Models\info;
use App\Models\cityOfBorn;
use App\Models\cityOfHome;
use App\Models\familyinfo;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $person= info::all();
        $born= cityOfBorn::all();
        $home=cityOfHome::all();
        $region_cd=region_cd::all();
        $hay_cd=hay_cd::all();
        $gender=gender::all();
        $social_status_cd=social_status_cd::all();
        $status_cd=status_cd::all();
        $religion_cd=religion_cd::all();
        // $cityBorn=$born->sortBy('name')->pluck('name')->unique();
        // $cityHome=$home->sortBy('name')->pluck('name')->unique();
        return view('searchOfInfo',compact('born','home','religion_cd','status_cd',
            'social_status_cd','gender','hay_cd','region_cd'));

    }

    public function search(Request $request,info $infos)
    {

        $person= new info();
        $born= cityOfBorn::all();
        $home=cityOfHome::all();
        $region_cd=region_cd::all();
        $hay_cd=hay_cd::all();
        $gender=gender::all();
        $social_status_cd=social_status_cd::all();
        $status_cd=status_cd::all();
        $religion_cd=religion_cd::all();
// if ( $person = $infos->where('status' , 0)) {

        if (isset($request->ssn)) {
            $person = $person->where('ssn', 'LIKE',  '%' . $request->ssn . '%');
         } if (isset($request->first_name)) {
            $person = $person->where('first_name', 'LIKE', '%' . $request->first_name . '%');
        } if (isset($request->second_name)) {
            $person = $person->where('second_name', 'LIKE', '%' . $request->second_name . '%');

        } if (isset($request->third_name)) {
            $person = $person->where('third_name', 'LIKE', '%' . $request->third_name . '%');

        }
         if (isset($request->last_name)) {
            $person = $person->where('last_name', 'LIKE', '%' . $request->last_name . '%');
        }
        if (isset($request->min_age)&&isset($request->max_age)) {
             $person =  DB::table('infos')->whereBetween('age', [$request->max_age , $request->min_age ]);

//            $person = $person->where('age', '<=', $request->max_age)->where('age', '>=', $request->min_age);

         } if (isset($request->gender)) {
            $person = $person->where('gender', 'LIKE', '%' . $request->gender . '%');
        } if (isset($request->cityOfHome)) {
            $person = $person->where('cityOfHome', 'LIKE', '%' . $request->cityOfHome . '%');

        } if (isset($request->cityOfBorn)) {
            $person = $person->where('cityOfBorn', 'LIKE', '%' . $request->cityOfBorn . '%');

        }
        if (isset($request->employee)) {
        $person = $person->where('employee', 'LIKE', '%' . $request->employee . '%');

        }if (isset($request->region_cd)) {
            $person = $person->where('region_cd', 'LIKE', $request->region_cd );
        }
        if (isset($request->hay_cd)) {
            // $person =  DB::table('infos')
            // ->whereBetween('age', [$request->age1 , $request->age2 ])
            // ->get();
            $person = $person->where('hay_cd', 'LIKE', '%' .$request->hay_cd. '%');

        } if (isset($request->social_status_cd)) {
        $person = $person->where('social_status_cd', 'LIKE', '%' . $request->social_status_cd . '%');
    } if (isset($request->status_cd)) {
        $person = $person->where('status_cd', 'LIKE', '%' . $request->status_cd . '%');

    } if (isset($request->religion_cd)) {
        $person = $person->where('religion_cd', 'LIKE', '%' . $request->religion_cd . '%');

    }


    // }
            $person = $person->get();
//             dd( $person);
            return view('searchOfInfo',compact('person','born','home','religion_cd','status_cd',
                'social_status_cd','gender','hay_cd','region_cd'));

    }



    public function displayFamilyInfo($id){
        $person1= info::find($id);


        $person= info::all();

        $born= cityOfBorn::all();
        $home=cityOfHome::all();
        $work_emp=Emp_work::all();
        $emp_cd=employee_cd::all();
        $cross=crossing::all();
        $travel_dest=travel_dest::all();
        $travel_case=travel_case::all();
        $vehicle_type=vehicle_type::all();
        $car_color=car_color::all();
        $manufacture_comp=manufacture_comp::all();
        $university=university::all();
        $college=college::all();
        $specialize=specialization::all();
        $qualif=qualification::all();
        $region_cd=region_cd::all();
        $hay_cd=hay_cd::all();
        $gender=gender::all();
        $social_status_cd=social_status_cd::all();
        $status_cd=status_cd::all();
        $religion_cd=religion_cd::all();
        $child = DB::table('infos')->where('secondName', 'LIKE', $person1->firstName)->where('thirdName', 'LIKE', $person1->secondName)
        ->where('familyName', 'LIKE', $person1->familyName);
        return view('index',compact('person','born','home','religion_cd','status_cd',
            'social_status_cd','gender','hay_cd','region_cd','qualif','specialize','college','university','manufacture_comp'
            ,'car_color','vehicle_type','travel_case','travel_dest','cross','emp_cd','work_emp'));


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
        $person= new info();

        $person=$person->where('id', 'LIKE',   $id )->get();
//        $person= info::find($id);
//        dd($person);
        return view('main',compact('person'));
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
