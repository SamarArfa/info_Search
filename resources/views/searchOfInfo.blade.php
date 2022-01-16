
@extends('dashboard')


@section('content')
{{--    <div class="col-lg-3 fixed">--}}
      <div class="profile-sidebar">
          <h2 class="head" style="margin-right: 10px;text-align:center;color:#818181">البحث المتقدم </h2>
          <div class="profile-usermenu" style="padding: 10px">
              {!! Form::open(['url' => 'searchInfo' , 'action' =>'post']) !!}
{{--              <ul  style="margin-right: 0px; padding-right: 0px;">--}}

{{--                  <br/><br/>--}}
{{--                  <li>--}}

{{--                      <label style="float: right">  الاسم</label>--}}
{{--                      <br/>--}}
                      <div class="row">
                          <div class="col-lg-3"><input type="text" name="first_name" id="first_name" class="form-control" placeholder="الاسم الأول"></div>
                          <div class="col-lg-3"><input type="text" name="second_name" id="second_name" class="form-control" placeholder="اسم الأب"></div>
                          <div class="col-lg-3"><input type="text" name="third_name" id="third_name" class="form-control" placeholder="اسم الجد"></div>
                          <div class="col-lg-3"><input type="text" name="last_name" id="last_name" class="form-control" placeholder="اسم العائلة"></div>
                      </div>
                 <br/>
                 <br/>
                      <div class="row">
                          <label for="" class="text-right margin-top-10 bold" style="width: 40%">
                              <div class="col-lg-5"><input type="number" name="min_age" id="min_age" class="form-control text-center"  placeholder="من"></div>
                              <div class="col-lg-5"><input type="number" name="max_age" id="max_age" class="form-control text-center"  placeholder="إلى"></div>
                              العمر:
                              {{--                    <input type="checkbox" name="age_chk" id="age_chk" class="form-control">--}}
                          </label>

                          <label for="" class="text-right margin-top-10 bold"style="width: 30%">
                          <div class="col-lg-10"><input type="number" name="ssn" id="ssn" class="form-control  required"></div>
                              رقم الهوية:</label>
                          <div class="radio-list col-lg-9"style="width: 10%">
                              <label>     موظف   <input type="checkbox" name="employee" value="employee">&nbsp;&nbsp; </label>
                          </div>
                          <label for="" class="text-right margin-top-10 bold"style="width: 20%">
                          {{-- {!! Form::select("type"  ,[ '1'=>"فيلا" , '2'=>"شاليه",'3'=>"ارض" , '4'=>"شقة",'5'=>"بيت"], null, ['class' =>'form-control'] ) !!} --}}
                              <div class="col-lg-9">

                              <select name="cityOfBorn" class="form-control col-lg-5">
                              <option value="" disabled selected>اختر مكان الميلاد</option>
                              @foreach($born  as $borns)

                                  <option value="{{$borns->name}}">{{$borns->name}}</option>
                              @endforeach
                          </select>
                              </div>
                              مكان الميلاد:</label>
                          <br/>

                          </div>
                      <br/><br/>
              <div class="row">

                   <label for="" class="col-lg-3 text-right margin-top-10 bold">
                      <div class="col-lg-9">

                          <select name="region_cd" id="region_cd" class="form-control">
                              <option value="" disabled selected>اختر </option>
                              @foreach($region_cd  as $region)

                                  <option value="{{$region->name}}">{{$region->name}}</option>
                              @endforeach                          </select>
                      </div>
                       المحافظة: </label>
                  <label for="" class="col-lg-3 text-right margin-top-10 bold">
                        <div class="col-lg-9">

                          <select name="cityOfHome" id="cityOfHome" class="form-control">
                              <option value="" disabled selected>اختر</option>
                              @foreach($home  as $hom)

                                  <option value="{{$hom->name}}">{{$hom->name}}</option>
                              @endforeach                              </select>
                          </div>

                      المدينة: </label>

                      <label for="" class="col-lg-3 text-right margin-top-10 bold">
                  <div class="col-lg-9">

                  <select name="hay_cd" id="hay_cd" class="form-control" >
                      <option value="" disabled selected>اختر</option>
                      @foreach($hay_cd  as $hay)

                          <option value="{{$hay->name}}">{{$hay->name}}</option>
                      @endforeach                      </select>
                  </div>
                          الحي: </label>
              </div>
{{--                  </li>--}}
                  <br/>
                 <br/>
              <div class="row">
                  <label class="col-lg-3 text-right margin-top-10 bold">
                  <div class="col-lg-9">
                      <select name="gender" id="gender" class="form-control" >
                          <option value="" disabled selected>اختر</option>
                          @foreach($gender  as $gend)

                              <option value="{{$gend->name}}">{{$gend->name}}</option>
                          @endforeach
                      </select>
                  </div>
                      الجنس: </label>
                  <label class="col-lg-3 text-right margin-top-10 bold">
                  <div class="col-lg-9">
                      <select name="social_status_cd" id="social_status_cd" class="form-control">
                          <option value="" disabled selected>اختر</option>
                          @foreach($social_status_cd  as $social_stat)

                              <option value="{{$social_stat->name}}">{{$social_stat->name}}</option>
                          @endforeach
                      </select>
                  </div>
                      الحالة الاجتماعية: </label>
                  <label class="col-lg-3 text-right margin-top-10 bold">
                  <div class="col-lg-9">
                      <select name="status_cd" id="status_cd" class="form-control">
                          <option value="" disabled selected>اختر</option>
                          @foreach($status_cd  as $status)

                              <option value="{{$status->name}}">{{$status->name}}</option>
                          @endforeach
                      </select>
                  </div>
                      الحالة: </label>

                      <label for="" class="col-lg-3 text-right margin-top-10 bold">
                  <div class="col-lg-9">
                      <select name="religion_cd" id="religion_cd" class="form-control" >
                          <option value="" disabled selected>اختر</option>
                          @foreach($religion_cd  as $relig)

                              <option value="{{$relig->name}}">{{$relig->name}}</option>
                          @endforeach
                      </select>
                  </div>
                          الديانة: </label>
              </div>

                   <br/>
                 <br/>
                    <br/>
                 <br/>
              <div class="row"><div class="col-lg-12 text-center"style="display: block; margin-left: auto; margin-right: auto;width: 15%"><button type="submit" name="queryBtn" id="queryBtn" class="btn btn-primary" style="background-color: cadetblue;"><i class="fa fa-check"></i>&nbsp;استعلام</button></div></div>

              {!! Form::close() !!}
            </div>
          </div>
{{--    </div>--}}
          <br/>
@endsection
