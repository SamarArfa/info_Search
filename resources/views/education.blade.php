
@extends('dashboard')


@section('content')
<div class="profile-sidebar">
    <h2 class="head" style="margin-right: 10px;text-align:center;color:#818181">البحث المتقدم </h2>
    <div class="profile-usermenu" style="padding: 10px">
        {!! Form::open(['url' => 'searchEdu' , 'action' =>'post']) !!}

        <div class="row">
            <label for="" class="col-lg-3">
                <div class="col-lg-9">

                    <select name="university" id="university" class="form-control" >
                        <option value="" disabled selected>اختر </option>
                        @foreach($university  as $univer)

                            <option value="{{$univer->name}}">{{$univer->name}}</option>
                        @endforeach
                    </select>

                </div>
                الجامعة: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="college" id="college" class="form-control">
                        <option value="" disabled selected>اختر</option>
                        @foreach($college  as $colleg)

                            <option value="{{$colleg->name}}">{{$colleg->name}}</option>
                        @endforeach                    </select>
                </div>
                الكلية: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="specialization" id="specialization" class="form-control">
                        <option value="" disabled selected>اختر</option>
                        @foreach($specialize  as $special)

                            <option value="{{$special->name}}">{{$special->name}}</option>
                        @endforeach                    </select>
                </div>

                التخصص: </label>

            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <select name="qualification" id="qualification" class="form-control" >
                        <option value="" disabled selected>اختر </option>
                        @foreach($qualif  as $qual)

                            <option value="{{$qual->name}}">{{$qual->name}}</option>
                        @endforeach                    </select>
                </div>
                المؤهل العلمي: </label>
        {{--                  </li>--}}
        <br/>

      </label>
        <label for="" class="text-right margin-top-10 bold" style="width: 40%; margin-top: 2%;">
            <div class="col-lg-5"><input type="number" name="min_university_avg" id="min_university_avg" class="form-control text-center"  placeholder="من"></div>
            <div class="col-lg-5"><input type="number" name="max_university_avg" id="max_university_avg" class="form-control text-center"  placeholder="إلى"></div>
            المعدل الجامعي:
            {{--                    <input type="checkbox" name="age_chk" id="age_chk" class="form-control">--}}
            <br/>


        </label>
        </div>

        <div class="row"><div class="col-lg-12 text-center"style="display: block; margin-left: auto; margin-right: auto;width: 15%"><button type="submit" name="queryBtn" id="queryBtn" class="btn btn-primary" style="background-color: cadetblue;"><i class="fa fa-check"></i>&nbsp;استعلام</button></div></div>

        {!! Form::close() !!}
    </div>
</div>
<br/>
@endsection
