
@extends('dashboard')


@section('content')
<div class="profile-sidebar">
    <h2 class="head" style="margin-right: 10px;text-align:center;color:#818181">البحث المتقدم </h2>
    <div class="profile-usermenu" style="padding: 10px">
        {!! Form::open(['url' => 'searchTransport' , 'action' =>'post']) !!}

        <div class="row">
            <label for="" class="col-lg-3">
                <div class="col-lg-9">

                    <input type="number" name="vehicle_id" id="vehicle_id" class="form-control  required"></div>
                رقم المركبة: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="vehicle_type" id="vehicle_type" class="form-control">
                        <option value="" disabled selected>اختر</option>
                        @foreach($vehicle_type  as $type)

                            <option value="{{$type->name}}">{{$type->name}}</option>
                        @endforeach                    </select>
                </div>
                نوع السيارة: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="car_color" id="car_color" class="form-control">
                        <option value="" disabled selected>اختر </option>
                        @foreach($car_color  as $color)

                            <option value="{{$color->name}}">{{$color->name}}</option>
                        @endforeach                    </select>
                </div>

                لون السيارة: </label>

            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="manufacture_comp" id="manufacture_comp" class="form-control" >
                        <option value="" disabled selected>اختر</option>
                        @foreach($manufacture_comp  as $comp)

                            <option value="{{$comp->name}}">{{$comp->name}}</option>
                        @endforeach                    </select>
                </div>
                الشركة المصنعة: </label>
            <label for="" class="text-right margin-top-10 bold"style="width: 30%;    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 2%;">
                <div class="col-lg-10"><input type="number" name="license_number" id="license_number" class="form-control  required"></div>
                رقم الرخصة:</label>
        </div>
        {{--                  </li>--}}
        <br/>
        <br/>

        <br/>
        <br/>

        </label>
        <div class="row"><div class="col-lg-12 text-center"style="display: block; margin-left: auto; margin-right: auto;width: 15%"><button type="submit" name="queryBtn" id="queryBtn" class="btn btn-primary" style="background-color: cadetblue;"><i class="fa fa-check"></i>&nbsp;استعلام</button></div></div>

        {!! Form::close() !!}
    </div>
</div>
<br/>
@endsection
