<?php

namespace App\Exports;

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
use App\Models\User;
use App\Models\vehicle_type;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $invoices;

    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }

    public function array(): array
    {
        // $result = [ [856985698], [965874215], [123456789], [987654321]];
        // return $result;
        return $this->invoices;
        // return [AfterSheet::class    => function(AfterSheet $event) {
        //     $event->sheet->getDelegate()->setRightToLeft(true);
        // },];
        // return [
        //     [1, 2, 3],
        //     [4, 5, 6]
        // ];
    }

    public function collection()
    {
        //dd(News::all());
        $result = [856985698, 965874215, 123456789, 987654321];
        $collect = collect($result);
        dd($collect);
        return $collect;
        //return News::all();
    }
}












//
//    protected $request;
//
//    function __construct(Request $request)
//    {
//        $this->request = $request;
//    }
//
//
//    public function collection()
//    {
//        $person = new info();
//
//// if ( $person = $infos->where('status' , 0)) {
//
//        if (isset($this->request->ssn)) {
//            $person = $person->where('ssn', 'LIKE', $this->request->ssn);
//        }
//        if (isset($this->request->first_name)) {
//            $person = $person->where('first_name', 'LIKE', '%' . $this->request->first_name . '%');
//        }
//        if (isset($this->request->second_name)) {
//            $person = $person->where('second_name', 'LIKE', '%' . $this->request->second_name . '%');
//
//        }
//        if (isset($this->request->third_name)) {
//            $person = $person->where('third_name', 'LIKE', '%' . $this->request->third_name . '%');
//
//        }
//        if (isset($this->request->last_name)) {
//            $person = $person->where('last_name', 'LIKE', '%' . $this->request->last_name . '%');
//        }
//        if (isset($this->request->min_age) && isset($this->request->max_age)) {
//            // $person =  DB::table('infos')
//            // ->whereBetween('age', [$request->age1 , $request->age2 ])
//            // ->get();
//            $person = $person->where('age', '<=', $this->request->max_age)->where('age', '>=', $request->min_age);
//
//        }
//        if (isset($this->request->gender)) {
//            $person = $person->where('gender', 'LIKE', '%' . $this->request->gender . '%');
//        }
//        if (isset($this->request->cityOfHome)) {
//            $person = $person->where('cityOfHome', 'LIKE', '%' . $this->request->cityOfHome . '%');
//
//        }
//        if (isset($this->request->cityOfBorn)) {
//            $person = $person->where('cityOfBorn', 'LIKE', '%' . $this->request->cityOfBorn . '%');
//
//        }
//        if (isset($request->employee)) {
//            $person = $person->where('employee', 'LIKE', '%' . $this->request->employee . '%');
//
//        }
//        if (isset($this->request->region_cd)) {
//            $person = $person->where('region_cd', 'LIKE', $this->request->region_cd);
//        }
//        if (isset($this->request->hay_cd)) {
//            // $person =  DB::table('infos')
//            // ->whereBetween('age', [$request->age1 , $request->age2 ])
//            // ->get();
//            $person = $person->where('hay_cd', 'LIKE', '%' . $this->request->hay_cd . '%');
//
//        }
//        if (isset($this->request->social_status_cd)) {
//            $person = $person->where('social_status_cd', 'LIKE', '%' . $this->request->social_status_cd . '%');
//        }
//        if (isset($this->request->status_cd)) {
//            $person = $person->where('status_cd', 'LIKE', '%' . $this->request->status_cd . '%');
//
//        }
//        if (isset($this->request->religion_cd)) {
//            $person = $person->where('religion_cd', 'LIKE', '%' . $this->request->religion_cd . '%');
//
//        }
//
//        return $person->get();
//
//
//    }
//
//
//
//
////    public function collection()
////    {
////        return MttRegistration::where('lifeskill_id',$this->id)->get()([
////            'first_name', 'email'
////        ]);
////    }
//}
