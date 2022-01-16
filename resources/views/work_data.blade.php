
@extends('dashboard')


@section('content')
<div class="profile-sidebar">
    <h2 class="head" style="margin-right: 10px;text-align:center;color:#818181">البحث المتقدم </h2>
    <div class="profile-usermenu" style="padding: 10px">
        {!! Form::open(['url' => 'searchWork' , 'action' =>'post']) !!}

        <div class="row">
            <label for="" class="col-lg-3">
                <div class="col-lg-9">

                    <select name="Emp_work" id="Emp_work" class="form-control">
                        <option value="" disabled selected>اختر</option>
                        @foreach($work_emp  as $emp_wor)

                            <option value="{{$emp_wor->name}}">{{$emp_wor->name}}</option>
                        @endforeach                    </select>
                </div>
                مكان العمل: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="employee_cd" id="employee_cd" class="form-control">
                        <option value="" disabled selected>اختر </option>
                        @foreach($emp_cd  as $emp)

                            <option value="{{$emp->name}}">{{$emp->name}}</option>
                        @endforeach                    </select>
                </div>
                المسمى الوظيفي: </label>


            <div class="row"><div class="col-lg-12 text-center"style="display: block; margin-left: auto; margin-right: auto;width: 15%"><button type="submit" name="queryBtn" id="queryBtn" class="btn btn-primary" style="background-color: cadetblue;"><i class="fa fa-check"></i>&nbsp;استعلام</button></div></div>

            {!! Form::close() !!}
        </div>
    </div>
    <br/>
</div>
@endsection
