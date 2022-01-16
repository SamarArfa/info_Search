@if(isset($person))

    @if(count($person) > 0)
{{--        <div class="row"><div class="col-lg-12 text-center"style="display: block; margin-left: auto; margin-right: auto;width: 15%"><a  id="queryBtn" class="btn btn-primary" href="{{route('export',$person)}}" style="background-color: #e3f2fd;"><i class="fa fa-check"></i>&nbsp;تصدير لملف إكسل</a></div></div>--}}

        <div class="col-lg-9">
                <div class="profile-content">

                    <div class="card-body">
                        <table id="table" class="table table-bordered table-striped" style=" direction: rtl;width: 80%;
    float: right;">
                            <thead>
                            <tr>
                                <th class="text-center">الهوية </th>
                                <th class="text-center">الاسم </th>
                                <th class="text-center">اسم الاب</th>
                                <th class="text-center">اسم الجد</th>
                                <th class="text-center">العائلة</th>
                                <th class="text-center">العمر</th>
                                <th class="text-center">مكان السكن</th>
                                <th class="text-center">مكان الميلاد</th>
                                <th class="text-center">الجنس</th>
                                <!-- <th class="text-center">معلومات اخرى</th> -->

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($person as $key => $allPersons)
                                <tr class="click" data-href="{{ route('index',$allPersons->id)}}" >
                                    <td>{{$allPersons->ssn}}</td>
                                    <td>{{$allPersons->first_name}}</td>
                                    <td>{{$allPersons->second_name}}</td>
                                    <td>{{$allPersons->third_name}}</td>
                                    <td>{{$allPersons->last_name}}</td>
                                    <td>{{$allPersons->age}}</td>
                                    <td>{{$allPersons->cityOfHome}}</td>
                                    <td>{{$allPersons->cityOfBorn}}</td>

                                    <td>{{$allPersons->gender}}</td>
                                    <!-- <td>
                                        <a href="{{ route('index',$allPersons->id)}}"
                                           class="btn btn-info btn-sm"><i class="material-icons">الابناء </i></a>
                                        <a href="{{ url('index',$allPersons->id)}}"
                                           class="btn btn-primary btn-sm"><i class="material-icons">تفاصيل </i></a>

                                    </td> -->


                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                   </div>


                        @else
                            <div class= 'alert alert-danger'>
                                لا يتوفر معلومات حاليا
                            </div>
                        @endif


</div>

    @endif












