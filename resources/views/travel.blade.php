
@extends('dashboard')


@section('content')
<div class="profile-sidebar">
    <h2 class="head" style="margin-right: 10px;text-align:center;color:#818181">البحث المتقدم </h2>
    <div class="profile-usermenu" style="padding: 10px">
        {!! Form::open(['url' => 'searchTravel' , 'action' =>'post']) !!}

        <div class="row">
            <label for="" class="col-lg-3">
                <div class="col-lg-9">

                    <select name="crossing" id="crossing" class="form-control">
                        <option value="" disabled selected>اختر </option>
                        @foreach($cross  as $crossing)

                            <option value="{{$crossing->name}}">{{$crossing->name}}</option>
                        @endforeach                    </select>
                </div>
                 المعبر: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="travel_dest" id="travel_dest" class="form-control">
                        <option value="" disabled selected>اختر </option>
                        @foreach($travel_dest  as $dest)

                            <option value="{{$dest->name}}">{{$dest->name}}</option>
                        @endforeach                    </select>
                </div>
                    جهة السفر: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="travel_case" id="travel_case" class="form-control">
                        <option value="" disabled selected>اختر</option>
                        @foreach($travel_case  as $case)

                            <option value="{{$case->name}}">{{$case->name}}</option>
                        @endforeach                    </select>
                </div>

                حالة السفر: </label>

            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <input type="text" name="reason_travel" id="reason_travel" class="form-control  required">
                </div>
                سبب السفر: </label>

        <div class="row"><div class="col-lg-12 text-center"style="display: block; margin-left: auto; margin-right: auto;width: 15%"><button type="submit" name="queryBtn" id="queryBtn" class="btn btn-primary" style="background-color: cadetblue;"><i class="fa fa-check"></i>&nbsp;استعلام</button></div></div>

        {!! Form::close() !!}
    </div>
</div>
<br/>
</div>
@endsection
