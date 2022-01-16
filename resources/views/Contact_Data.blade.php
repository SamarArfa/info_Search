
@extends('dashboard')


@section('content')
<div class="profile-sidebar">
    <h2 class="head" style="margin-right: 10px;text-align:center;color:#818181">البحث المتقدم </h2>
    <div class="profile-usermenu" style="padding: 10px">
        {!! Form::open(['url' => 'search' , 'action' =>'post']) !!}

        <div class="row">
            <label for="" class="col-lg-3">
                <div class="col-lg-9">

                    <input type="text" name="mobile" id="mobile" class="form-control  required">
                </div>
                رقم الجوال: </label>
            <label for="" class="col-lg-3 text-right margin-top-10 bold">
                <div class="col-lg-9">

                    <input type="text" name="phone" id="phone" class="form-control  required">
                </div>
                 الهاتف: </label>


            <div class="row"><div class="col-lg-12 text-center"style="display: block; margin-left: auto; margin-right: auto;width: 15%"><button type="submit" name="queryBtn" id="queryBtn" class="btn btn-primary" style="background-color: cadetblue;"><i class="fa fa-check"></i>&nbsp;استعلام</button></div></div>

            {!! Form::close() !!}
        </div>
    </div>
    <br/>
</div>
@endsection
