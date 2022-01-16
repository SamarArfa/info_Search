<!DOCTYPE html>
<html>
<head>
    <title>بيانات المواطن </title>
</head>
<body style="font-family: DejaVu Sans, sans-serif;direction: rtl">


    <table  style=" direction: rtl;width: 80%;
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
            <th class="text-center">الهوية </th>
            <th class="text-center">الاسم </th>
            <th class="text-center">اسم الاب</th>
            <th class="text-center">اسم الجد</th>
            <th class="text-center">الاسم </th>
            <th class="text-center">اسم الاب</th>
            <th class="text-center">اسم الجد</th>
            <!-- <th class="text-center">معلومات اخرى</th> -->

        </tr>
        </thead>
        <tbody>
        @foreach($child as $key => $childs)

            <tr class="click" data-href="" >
                <td>{{$childs->ssn}}</td>
                <td>{{$childs->first_name}}</td>
                <td>{{$childs->second_name}}</td>
                <td>{{$childs->third_name}}</td>
                <td>{{$childs->last_name}}</td>
                <td>{{$childs->age}}</td>
                <td>{{$childs->gender}}</td>
                <td>{{$childs->employee}}</td>
                <td>{{$childs->region_cd}}</td>
                <td>{{$childs->hay_cd}}</td>
                <td>{{$childs->social_status_cd}}</td>
                <td>{{$childs->status_cd}}</td>
                <td>{{$childs->religion_cd}}</td>
                <td>{{$childs->cityOfHome}}</td>
                <td>{{$childs->cityOfBorn}}</td>
                <td>{{$childs->employee ==1 ? 'موظف' : 'غير موظف'}}</td>


            </tr>
        @endforeach

        </tbody>

    </table>


</body>
</html>












































{{--<!DOCTYPE html>--}}
{{--<html dir="rtl">--}}
{{--<head>--}}
{{--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>--}}
{{--    <title>{{ $file_name }}</title>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            font-family: 'new_font', sans-serif;--}}
{{--            /* margin-top:    3.5cm;--}}
{{--            margin-bottom: 1cm;--}}
{{--            margin-left:   1cm;--}}
{{--            margin-right:  1cm; */--}}
{{--        }--}}
{{--        .myTitle{--}}
{{--            text-align: left !important;--}}
{{--            font-weight: bold;--}}
{{--        }--}}
{{--        .myData{--}}
{{--            text-align: right !important;--}}
{{--            font-size: 13px;--}}
{{--        }--}}
{{--        label.not_found{--}}
{{--            font-size: 16px;--}}
{{--            border: 0px;--}}
{{--            /*padding: 10px 20px;*/--}}
{{--            /* margin-right: 20px; */--}}
{{--            /* padding: 10px 20px 0px 0px; */--}}
{{--        }--}}

{{--        table{--}}
{{--            width: 100%;--}}
{{--            border: 1px solid #000 !important;--}}
{{--        }--}}

{{--        th{--}}
{{--            /*    background-color: #81DAF5; */--}}
{{--            background-color: #ccc;--}}
{{--            color: #000;--}}
{{--            text-align: center;--}}
{{--            font-size: 16px;--}}
{{--            height: 30px;--}}
{{--            padding: 10px;--}}
{{--        }--}}

{{--        td{--}}
{{--            text-align: center;--}}
{{--            height: 30px;--}}
{{--            font-size: 13px;--}}

{{--        }--}}
{{--        table{--}}
{{--            border: 1px solid #000;--}}
{{--        }--}}

{{--        /* .panel-body{--}}
{{--            border: 1px solid #000;--}}
{{--        } */--}}

{{--        h3{--}}
{{--            padding-right: 20px;--}}
{{--        }--}}
{{--        /* @page{--}}
{{--            header: page-header;--}}
{{--            footer: page-footer;--}}
{{--        } */--}}
{{--        /* @page{--}}
{{--           margin: 3.5cm 2cm;--}}
{{--           size: 8.5in 11in;--}}
{{--       }  */--}}

{{--    </style>--}}

{{--<?php--}}
{{--//dd($person_photos);--}}
{{--//header("content-type: image/jpeg");--}}
{{--?>--}}
{{--<body>--}}

{{-- <htmlpageheader name="page-header" style="padding-bottom: 200px;">--}}
{{--    <img src="{{ asset('images/header.jpg') }}" style="width: 100%; height: 200px;"/>--}}
{{--Page Header {PAGENO}--}}
{{--</htmlpageheader> --}}
{{--<!-- البيانات الشخصية -->--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">البيانات الشخصية</h2>--}}
{{--    </div>--}}

{{--    <div class="panel-body">--}}
{{--        --}}{{-- <label class='not_found'>لا يوجد تجريب</label> --}}
{{--        <?php--}}
{{--        foreach ($main_data as $row) {--}}
{{--            $CI_ID_NUM = $row->ci_id_num;--}}
{{--            $FULL_NAME_AR = $row->full_name_ar;--}}
{{--            $CI_BIRTH_DT = substr($row->ci_birth_dt,0,10);--}}
{{--            $AGE = $row->age;--}}
{{--            $SEX = $row->sex;--}}
{{--            $CI_MOTHER_ARB = $row->ci_mother_arb;--}}
{{--            $CI_PRV_FAMILY_ARB = $row->ci_prv_family_arb;--}}
{{--            $SOCIAL_STATUS = $row->social_status;--}}
{{--            $CI_RELIGION = $row->ci_religion;--}}
{{--            $STATE = $row->state;--}}
{{--            $CI_FIELD_AR = $row->ci_field_ar;--}}
{{--            $CI_REGION = $row->ci_region;--}}
{{--            $CI_CITY = $row->ci_city;--}}
{{--        }--}}
{{--        //echo "ci_id_num: ".$ci_id_num; exit();--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th width="20%" class="myTitle"><label class="bold">رقم الهوية:</label></th>--}}
{{--                <td width="25%" class="myData"><label class="text-right">{{ $CI_ID_NUM }}</label></td>--}}
{{--                <th width="25%" class="myTitle"><label class="bold">الاسم رباعي:</label></th>--}}
{{--                <td width="30%" class="myData"><label>{{ $FULL_NAME_AR }}</label></td>--}}
{{--                <td rowspan="7" colspan="2">--}}
{{--                    --}}{{-- <img height="180px" width="140px" src="data:image/jpeg;base64,{{ base64_encode( $photo ) }}" > --}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th class="myTitle"><label class="bold">تاريخ الميلاد:</label></th>--}}
{{--                <td class="myData"><label>{{ $CI_BIRTH_DT }}</label></td>--}}
{{--                <th class="myTitle"><label class="bold">العمر:</label></th>--}}
{{--                <td class="myData"><label>{{ $AGE }}</label></td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <th class="myTitle"><label class="bold">الجنس:</label></th>--}}
{{--                <td class="myData"><label>{{ $SEX }}</label></td>--}}
{{--                <th class="myTitle"><label class="bold">اسم العائلة السابق:</label></th>--}}
{{--                <td class="myData"><label>{{ $CI_PRV_FAMILY_ARB }}</label></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th class="myTitle"><label class="bold">اسم الأم:</label></th>--}}
{{--                <td class="myData"><label>{{ $CI_MOTHER_ARB }}</label></td>--}}
{{--                <th class="myTitle"><label class="bold">الديانة:</label></th>--}}
{{--                <td class="myData"><label>{{ $CI_RELIGION }}</label></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th class="myTitle"><label class="bold">الحالة الاجتماعية:</label></th>--}}
{{--                <td class="myData"><label>{{ $SOCIAL_STATUS }}</label></td>--}}
{{--                <th class="myTitle"><label class="bold">الحالة:</label></th>--}}
{{--                <td class="myData"><label>{{ $STATE }}</label></td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                --}}{{-- <th width="" class="myTitle"><label class="bold">الإقليم:</label></th>--}}
{{--                <td width="" class="myData"><label>{{ $CI_FIELD_AR }}</label></td> --}}
{{--                <th width="" class="myTitle"><label class="bold">المحافظة:</label></th>--}}
{{--                <td width="" class="myData"><label>{{ $CI_REGION }}</label></td>--}}
{{--                <th class="myTitle"><label class="bold">المدينة:</label></th>--}}
{{--                <td class="myData"><label>{{ $CI_CITY }}</label></td>--}}
{{--            </tr>--}}
{{--            --}}{{-- <tr>--}}
{{--                <th class="myTitle"><label class="bold">المدينة:</label></th>--}}
{{--                <td class="myData"><label>{{ $CI_CITY }}</label></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr> --}}

{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- أقرباء درجة أولى -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">أقرباء درجة أولى</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        if(count($rel_data) > 0){--}}
{{--        //dd($rel_data);--}}
{{--        ?>--}}

{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>العلاقة</th>--}}
{{--                <th>الجنس</th>--}}
{{--                <th>العمر</th>--}}
{{--                <th>الحالة الاجتماعية</th>--}}
{{--                --}}{{-- <th>الصورة</th> --}}
{{--            </tr>--}}
{{--            <?php--}}

{{--            //for($i=0 ; $i < count($rel_data) ; $i++){--}}
{{--            $i = 0;--}}
{{--            $wife_sons = array(286,287,288);--}}
{{--            foreach ($rel_data as $rd) {--}}

{{--            if(!in_array($rd->cf_relative_cd, $wife_sons)){--}}
{{--            $i++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $i }}</td>--}}
{{--                <td>{{ $rd->rel_ci_id_num }}</td>--}}
{{--                <td>{{ $rd->rel_full_name_arb }}</td>--}}
{{--                <td>{{ $rd->rel_desc_ar }}</td>--}}
{{--                <td>{{ $rd->rel_ci_sex_ar }}</td>--}}
{{--                <td>{{ $rd->rel_age }}</td>--}}
{{--                <td>{{ $rd->rel_ci_personal_desc }}</td>--}}
{{--                --}}{{-- <td><?php //echo '<img width="80" height="100" src="data:image/jpeg;base64,'.base64_encode( $rd->picture ).'"/>'; ?></td> --}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<!-- الزوجات/الأزواج -->--}}
{{--<?php--}}
{{--$has_wifes = array();--}}
{{--if(count($rel_data) > 0){--}}
{{--    foreach ($rel_data as $rd){--}}
{{--        if($rd->cf_relative_cd == 287 || $rd->cf_relative_cd == 288)--}}
{{--            $has_wifes[] = 1;--}}
{{--    }--}}
{{--}--}}
{{--?>--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">الزوجات/الأزواج</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        if(count($has_wifes) > 0){--}}
{{--        ?>--}}

{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>العلاقة</th>--}}
{{--                <th>الجنس</th>--}}
{{--                <th>العمر</th>--}}
{{--                <th>الحالة الاجتماعية</th>--}}
{{--                --}}{{-- <th>الصورة</th> --}}
{{--            </tr>--}}
{{--            <?php--}}

{{--            //for($i=0 ; $i < count($rel_data) ; $i++){--}}
{{--            $i = 0;--}}
{{--            foreach ($rel_data as $rd) {--}}

{{--            if($rd->cf_relative_cd == 287 || $rd->cf_relative_cd == 288){--}}
{{--            $i++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $i }}</td>--}}
{{--                <td>{{ $rd->rel_ci_id_num }}</td>--}}
{{--                <td>{{ $rd->rel_full_name_arb }}</td>--}}
{{--                <td>{{ $rd->rel_desc_ar }}</td>--}}
{{--                <td>{{ $rd->rel_ci_sex_ar }}</td>--}}
{{--                <td>{{ $rd->rel_age }}</td>--}}
{{--                <td>{{ $rd->rel_ci_personal_desc }}</td>--}}
{{--                --}}{{-- <td><?php //echo '<img width="80" height="100" src="data:image/jpeg;base64,'.base64_encode( $rd->picture ).'"/>'; ?></td> --}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- الأبناء -->--}}
{{--<?php--}}
{{--$has_sons = array();--}}
{{--if(count($rel_data) > 0){--}}
{{--    foreach ($rel_data as $rd){--}}
{{--        if($rd->cf_relative_cd == 286)--}}
{{--            $has_sons[] = 1;--}}
{{--    }--}}
{{--}--}}
{{--?>--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">الأبناء</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        if(count($has_sons) > 0){--}}
{{--        ?>--}}

{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>العلاقة</th>--}}
{{--                <th>الجنس</th>--}}
{{--                <th>العمر</th>--}}
{{--                <th>الحالة الاجتماعية</th>--}}
{{--                --}}{{-- <th>الصورة</th> --}}
{{--            </tr>--}}
{{--            <?php--}}

{{--            //for($i=0 ; $i < count($rel_data) ; $i++){--}}
{{--            $i = 0;--}}
{{--            foreach ($rel_data as $rd) {--}}

{{--            if($rd->cf_relative_cd == 286){--}}
{{--            $i++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $i }}</td>--}}
{{--                <td>{{ $rd->rel_ci_id_num }}</td>--}}
{{--                <td>{{ $rd->rel_full_name_arb }}</td>--}}
{{--                <td>{{ $rd->rel_desc_ar }}</td>--}}
{{--                <td>{{ $rd->rel_ci_sex_ar }}</td>--}}
{{--                <td>{{ $rd->rel_age }}</td>--}}
{{--                <td>{{ $rd->rel_ci_personal_desc }}</td>--}}
{{--                --}}{{-- <td><?php //echo '<img width="80" height="100" src="data:image/jpeg;base64,'.base64_encode( $rd->picture ).'"/>'; ?></td> --}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<!-- عقود الزواج والطلاق -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">عقود الزواج والطلاق</h2>--}}
{{--        <?php if (count($ljc_data) == 0) echo "<label class='not_found'>لا يوجد</label>"; ?>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        if(count($ljc_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>نوع العقد</th>--}}
{{--                <th>تاريخ العقد</th>--}}
{{--                <th>المحكمة</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            foreach($ljc_data as $row){--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $i+1 }}</td>--}}
{{--                <td>{{ $row->husband_ssn }}</td>--}}
{{--                <td>{{ $row->husband_fullname }}</td>--}}
{{--                <td>{{ $row->wife_ssn }}</td>--}}
{{--                <td>{{ $row->wife_fullname }}</td>--}}
{{--                <td>{{ $row->trans_desc }}</td>--}}
{{--                <td><?php echo substr($row->contract_dt, 0, 10); ?></td>--}}
{{--                <td>{{ $row->branch_desc }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        // else--}}
{{--        //     echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<!-- بيانات الدراسة -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات الدراسة</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        // $ljc_data = json_decode($ljc_data);--}}
{{--        // echo "LJC_Count: ".count($ljc_data);--}}
{{--        // dd($ljc_data);--}}
{{--        if(count($study_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" style="width: 100%;" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم رباعي</th>--}}
{{--                <th>سنة التخرج</th>--}}
{{--                <th>الجامعة</th>--}}
{{--                <th>الكلية</th>--}}
{{--                <th>التخصص</th>--}}
{{--                <th>المؤهل العلمي</th>--}}
{{--                <th>المعدل الجامعي</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($study_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->ssn }}</td>--}}
{{--                <td>{{ $row->full_name }}</td>--}}
{{--                <td>{{ $row->grade_year }}</td>--}}
{{--                <td>{{ $row->university }}</td>--}}
{{--                <td>{{ $row->collage }}</td>--}}
{{--                <td>{{ $row->speclize }}</td>--}}
{{--                <td>{{ $row->cert }}</td>--}}
{{--                <td>{{ $row->gpa }} %</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- بيانات العمل -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات العمل</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        // $ljc_data = json_decode($ljc_data);--}}
{{--        // echo "LJC_Count: ".count($ljc_data);--}}
{{--        // dd($ljc_data);--}}
{{--        if(count($work_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" style="width: 100%;" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>مكان العمل</th>--}}
{{--                <th>المسمى الوظيفي</th>--}}
{{--                <th>حالة العمل</th>--}}
{{--                <th>تاريخ التعيين</th>--}}
{{--                <th>مصدر المعلومة</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($work_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->institute }}</td>--}}
{{--                <td>{{ $row->job_title }}</td>--}}
{{--                <td>{{ $row->work_status }}</td>--}}
{{--                <td>{{ $row->hire_date }}</td>--}}
{{--                <td>{{ $row->source_data }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- قضايا وأحكام -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">قضايا وأحكام</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        if(count($judgment_data) > 0){--}}
{{--        ?>--}}

{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th width="5%">م</th>--}}
{{--                <th width="10%">الاتهام</th>--}}
{{--                <th width="50%">الحكم</th>--}}
{{--                <th width="10%">تاريخ الحكم</th>--}}
{{--                <th width="15%">اسم المحكمة</th>--}}
{{--                <th width="10%">ملاحظات</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            $i = 0;--}}
{{--            foreach ($judgment_data as $jd) {--}}
{{--            $i++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $i }}</td>--}}
{{--                <td>{{ $jd->accusation }}</td>--}}
{{--                <td>{{ $jd->judgement }}</td>--}}
{{--                <td>{{ $jd->j_date }}</td>--}}
{{--                <td>{{ $jd->court_name }}</td>--}}
{{--                <td>{{ $jd->notes }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">حركات السفر</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$move_trans_data = json_decode($move_trans_data);--}}
{{--        //dd($move_trans_data);--}}
{{--        if(count($move_trans_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>المعبر</th>--}}
{{--                <th>تاريخ السفر</th>--}}
{{--                <th>جهة السفر</th>--}}
{{--                <th>حالة السفر</th>--}}
{{--                <th>سبب السفر</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            $x = 0;--}}
{{--            //for($i=0 ; $i < count($move_trans_data) ; $i++){--}}
{{--            foreach ($move_trans_data as $mt) {--}}
{{--            $x++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $x }}</td>--}}
{{--                <td>{{ $mt->cross_desc }}</td>--}}
{{--                <td><?php echo substr($mt->ctzn_trans_dt, 0, 10); ?></td>--}}
{{--                <td>{{ $mt->arrive_from_desc }}</td>--}}
{{--                <td>{{ $mt->ctzn_status }}</td>--}}
{{--                <td>{{ $mt->visit_purpose_desc }}</td>--}}
{{--            </tr>--}}

{{--            --}}{{-- <tr>--}}
{{--                <td>{{ $i+1 }}</td>--}}
{{--                <td>{{ $move_trans_data[$i]->CROSS_DESC }}</td>--}}
{{--                <td><?php //echo substr($move_trans_data[$i]->MOVE_DT, 0, 10); ?></td>--}}
{{--                <td>{{ $move_trans_data[$i]->VISIT_PURPOSE_DESC }}</td>--}}
{{--                <td>{{ $move_trans_data[$i]->ARRIVE_FROM_DESC }}</td>--}}
{{--                <td>{{ $move_trans_data[$i]->CTZN_TRANS_TYPE_DESC }}</td>--}}
{{--                <td>{{ $move_trans_data[$i]->PASSPORT_NATION_DESC }}</td>--}}
{{--                <td>{{ $move_trans_data[$i]->PASSPORT_NUM }}</td>--}}
{{--            </tr> --}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<!-- السجلات التجارية  -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">السجلات التجارية</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($mne_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>اسم المالك</th>--}}
{{--                <th>رقم السجل التجاري</th>--}}
{{--                <th>تاريخ السجل التجاري</th>--}}
{{--                <th>النوع</th>--}}
{{--                <th>التصنيف</th>--}}
{{--                <th>حالته</th>--}}
{{--                <th>الملكية</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            foreach($mne_data as $row){--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $i+1 }}</td>--}}
{{--                <td>{{ $row->comp_name }}</td>--}}
{{--                <td>{{ $row->rec_code }}</td>--}}
{{--                <td>{{ $row->start_date }}</td>--}}
{{--                <td>{{ $row->rec_type_desc }}</td>--}}
{{--                <td>{{ $row->work_class_desc }}</td>--}}
{{--                <td>{{ $row->is_valid_desc }}</td>--}}
{{--                <td>{{ $row->person_type_desc }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<?php--}}
{{--//dd($contact_data);--}}
{{--?>--}}
{{--<!-- بيانات الاتصال والتواصل  -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات الاتصال والتواصل</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($contact_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>رقم الجوال</th>--}}
{{--                <th>رقم الهاتف</th>--}}
{{--                <th>البريد الإلكتروني</th>--}}
{{--                <th>العنوان</th>--}}
{{--                <th>أقرب معلم</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($contact_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->usermobile }}</td>--}}
{{--                <td>{{ $row->usertelephone }}</td>--}}
{{--                <td>{{ $row->useremail }}</td>--}}
{{--                <td><?php echo $row->gov_name.' / '.$row->city_name.' / '.$row->part_name.' / '.$row->street; ?></td>--}}
{{--                <td><?php echo $row->mamrk_type_name.' / '.$row->address_det ?></td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- بيانات العنوان المحدثة  -->--}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات العنوان المحدثة</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($new_address_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>المحافظة</th>--}}
{{--                <th>المدينة</th>--}}
{{--                <th>الحي</th>--}}
{{--                <th>الشارع</th>--}}
{{--                <th>نوع أقرب معلم</th>--}}
{{--                <th>أقرب معلم</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($contact_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->gov_name }}</td>--}}
{{--                <td>{{ $row->city_name }}</td>--}}
{{--                <td>{{ $row->part_name }}</td>--}}
{{--                <td>{{ $row->address_name }}</td>--}}
{{--                <td>{{ $row->mamrk_type_name }}</td>--}}
{{--                <td>{{ $row->address_det }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- بيانات المركبات  -->--}}

{{-- <h3>{{ dd(count($car_info)) }}</h3> --}}
{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات المركبات</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        // $has_data = 0;--}}
{{--        // foreach($car_info as $row){--}}
{{--        //     if(isset($row->rr))--}}
{{--        //         $has_data = 1;--}}
{{--        //     break;--}}
{{--        // }--}}
{{--        // if($has_data == 1){--}}
{{--        if($car > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>اسم المالك</th>--}}
{{--                <th>رقم المركبة</th>--}}
{{--                <th>نوع السيارة</th>--}}
{{--                <th>الشركة المصنعة</th>--}}
{{--                <th>تاريخ الملكية</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($car_info as $row){--}}
{{--            $no++;--}}
{{--            if(!isset($row->rr))--}}
{{--                break;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->owner_name }}</td>--}}
{{--                <td>{{ $row->car_no }}</td>--}}
{{--                <td>{{ $row->using_type_name }}</td>--}}
{{--                <td>{{ $row->car_company_name }}</td>--}}
{{--                <td>{{ $row->owner_date }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات رخص المركبات</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        if($licence > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>تاريخ الميلاد</th>--}}
{{--                <th>رقم الرخصة</th>--}}
{{--                <th>تاريخ الإصدار</th>--}}
{{--                <th>تاريخ الانتهاء</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            foreach($licence_data as $row){--}}

{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $row->rr }}</td>--}}
{{--                <td><?php echo $row->first_name." ".$row->second_name." ".$row->third_name." ".$row->family_name; ?></td>--}}
{{--                <td>{{ $row->birth_date }}</td>--}}
{{--                <td>{{ $row->license_no }}</td>--}}
{{--                <td>{{ $row->release_date }}</td>--}}
{{--                <td>{{ $row->expire_date }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات الطابو والأملاك</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($tabo_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>مساحة الملك</th>--}}
{{--                <th>فئة (المساحة)</th>--}}
{{--                <th>وصف فئة المساحة</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($tabo_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->owner_area  }}</td>--}}
{{--                <td>{{ $row->area_class }}</td>--}}
{{--                <td>{{ $row->area_class_desc }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">البيانات التأمين الصحي</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($moh_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th>م</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>العلاقة</th>--}}
{{--                <th>تاريخ الميلاد</th>--}}
{{--                <th>رقم التأمين</th>--}}
{{--                <th>نوع التأمين</th>--}}
{{--                <th>الحالة</th>--}}
{{--                <th>العيادة</th>--}}
{{--                <th>تاريخ البداية</th>--}}
{{--                <th>تاريخ النهاية</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($moh_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->dep_id_no  }}</td>--}}
{{--                <td>{{ $row->dep_name}}</td>--}}
{{--                <td>{{ $row->rel_type_desc  }}</td>--}}
{{--                <td>{{ $row->birth_date  }}</td>--}}
{{--                <td>{{ $row->card_no  }}</td>--}}
{{--                <td>{{ $row->ins_type_desc  }}</td>--}}
{{--                <td>{{ $row->ins_status_desc  }}</td>--}}
{{--                <td>{{ $row->clinic_code_desc  }}</td>--}}
{{--                <td>{{ $row->start_date  }}</td>--}}
{{--                <td>{{ $row->exp_date  }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات الحالة الصحية</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($medical_report_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-striped" style="border:1px solid #ddd">--}}
{{--            <tr>--}}
{{--                <th width="5%">م</th>--}}
{{--                <th width="15%">رقم الملف الطبي</th>--}}
{{--                <th width="15%">رقم التقرير</th>--}}
{{--                <th width="15%">القسم</th>--}}
{{--                <th width="15%">الطبيب</th>--}}
{{--                <th width="10%">تاريخ التقرير</th>--}}
{{--                <th width="20%">المستشفى</th>--}}
{{--                <th width="40%">التشخيص بالعربي</th>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($medical_report_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->mr_code }}</td>--}}
{{--                <td>{{ $row->mr_patient_cd }}</td>--}}
{{--                <td>{{ $row->loc_name_ar }}</td>--}}
{{--                <td>{{ $row->doctor_name }}</td>--}}
{{--                <td>{{ $row->mr_created_on }}</td>--}}
{{--                <td>{{ $row->dref_name_ar }}</td>--}}
{{--                <td>{{ $row->mr_diagnosis_ar  }}</td>--}}

{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات الشؤون الاجتماعية</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}

{{--        if($aid1 > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>رقم الهوية</th>--}}
{{--                <th>الاسم رباعي</th>--}}
{{--                <th>التصنيف</th>--}}
{{--                <th>النوع</th>--}}
{{--                <th>الكمية</th>--}}
{{--                <th>الفترة</th>--}}
{{--                <th>صفة المستفيد</th>--}}
{{--                <th>حالة الاستفادة</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($mosa_aid as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->id }}</td>--}}
{{--                <td>{{ $row->full_name }}</td>--}}
{{--                <td>{{ $row->aid_class }}</td>--}}
{{--                <td>{{ $row->aid_type }}</td>--}}
{{--                <td>{{ $row->aid_amount }}</td>--}}
{{--                <td>{{ $row->aid_periodic }}</td>--}}
{{--                <td>{{ $row->relationship }}</td>--}}
{{--                <td>{{ $row->file_status_desc }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات المساعدات</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if($aid2 > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>رقم هوية المستفيد</th>--}}
{{--                <th>اسم المستتفيد</th>--}}
{{--                <th>المبلغ</th>--}}
{{--                <th>العملة</th>--}}
{{--                <th>نوع المساعدة</th>--}}
{{--                <th>تاريخ تسليم المساعدة</th>--}}
{{--                <th>وصف المساعدة</th>--}}
{{--                <th>الجهة المقدمة للمساعدة</th>--}}
{{--                <th>ملاحظات</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($aid_byid as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->recpp_id }}</td>--}}
{{--                <td>{{ $row->recp_name  }}</td>--}}
{{--                <td>{{ $row->aid_amount2 }}</td>--}}
{{--                <td>{{ $row->currency }}</td>--}}
{{--                <td>{{ $row->srv_inf_name }}</td>--}}
{{--                <td><?php echo substr($row->recp_delv_dt, 0,10); ?></td>--}}
{{--                <td><?php echo $row->srv_type_main_nm . "/". $row->srv_type_sub_name . "/" . $row->srv_type_last_name; ?></td>--}}
{{--                <td>{{ $row->org_nm_mon }}</td>--}}
{{--                <td>{{ $row->class_type_nm }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}



{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">بيانات المنحة القطرية</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if($aid3 > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>المحافظة</th>--}}
{{--                <th>رقم هوية المستفيد</th>--}}
{{--                <th>اسم المستفيد</th>--}}
{{--                <th>الجنس</th>--}}
{{--                <th>حالة الوفاة</th>--}}
{{--                <th>تاريخ الميلاد</th>--}}
{{--                <th>الحالة الاجتماعية</th>--}}
{{--                <th>اسم الدفعة</th>--}}
{{--                <th>تاريخ الاستلام</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($qatar_aid_byid as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->ci_region }}</td>--}}
{{--                <td>{{ $row->emp_id }}</td>--}}
{{--                <td>{{ $row->emp_name }}</td>--}}
{{--                <td>{{ $row->sex }}</td>--}}
{{--                <td>{{ $row->state }}</td>--}}
{{--                <td>{{ $row->ci_birth_dt }}</td>--}}
{{--                <td>{{ $row->social_status }}</td>--}}
{{--                <td>{{ $row->p_name }}</td>--}}
{{--                <td>{{ $row->date_dep }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">حركات بيع الذهب</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($gold_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>تاريخ البيع</th>--}}
{{--                <th>محل البيع</th>--}}
{{--                <th>اسم البائع</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($gold_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->sal_dt }}</td>--}}
{{--                <td>{{ $row->shopname }}</td>--}}
{{--                <td>{{ $row->buyname }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">السلاح المرخص</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($weapon_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>تاريخ التجديد</th>--}}
{{--                <th>رقم الرخصة</th>--}}
{{--                <th>نوع السلاح</th>--}}
{{--                <th>الاسم</th>--}}
{{--                <th>رقم السلاح</th>--}}
{{--                <th>لون السلاح</th>--}}
{{--                <th>رقم SN للسلاح</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($weapon_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->releasedate }}</td>--}}
{{--                <td>{{ $row->licensenumber }}</td>--}}
{{--                <td>{{ $row->weapontype }}</td>--}}
{{--                <td>{{ $row->weaponname }}</td>--}}
{{--                <td>{{ $row->weaponnumber }}</td>--}}
{{--                <td>{{ $row->weaponcolor }}</td>--}}
{{--                <td>{{ $row->serialnumber }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">الحوالات المالية</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($money_trans_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>مكتب التحويل</th>--}}
{{--                <th>اسم المرسل</th>--}}
{{--                <th>دولة المرسل</th>--}}
{{--                <th>القيمة</th>--}}
{{--                <th>تاريخ الحوالة</th>--}}
{{--                <th>العمل</th>--}}
{{--                <th>نوع التحويل</th>--}}
{{--                <th>الحالة</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($money_trans_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->statisticjobs }}</td>--}}
{{--                <td>{{ $row->sendername }}</td>--}}
{{--                <td>{{ $row->sendercountry }}</td>--}}
{{--                <td>{{ $row->valuemoney }}</td>--}}
{{--                <td>{{ $row->transferdate }}</td>--}}
{{--                <td>{{ $row->transfercurrency }}</td>--}}
{{--                <td>{{ $row->transfertype }}</td>--}}
{{--                <td>{{ $row->status }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="panel panel-info">--}}
{{--    <div class="panel-heading">--}}
{{--        <h2 class="panel-title bold">الطرود البريدية</h2>--}}
{{--    </div>--}}
{{--    <div class="panel-body">--}}
{{--        <?php--}}
{{--        //$mne_data = json_decode($mne_data);--}}
{{--        if(count($post_data) > 0){--}}
{{--        ?>--}}
{{--        <table class="table table-wrapper table-responsive table-striped table-hover table-bordered" id="my_table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>نوع الطرد</th>--}}
{{--                <th>صاحب البعيثة</th>--}}
{{--                <th>كود التتبع</th>--}}
{{--                <th>ملاحظات</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <?php--}}
{{--            $no = 0;--}}
{{--            foreach($post_data as $row){--}}
{{--            $no++;--}}
{{--            ?>--}}
{{--            <tr>--}}
{{--                <td>{{ $no }}</td>--}}
{{--                <td>{{ $row->tname }}</td>--}}
{{--                <td>{{ $row->owner_name }}</td>--}}
{{--                <td>{{ $row->serial_no }}</td>--}}
{{--                <td>{{ $row->notes }}</td>--}}
{{--            </tr>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        <?php--}}
{{--        }--}}
{{--        else--}}
{{--            echo "<label class='not_found'>لا يوجد</label>";--}}
{{--        ?>--}}
{{--    </div>--}}
{{--</div>--}}

{{-- <htmlpagefooter name="page-footer">--}}
{{--    <img src="{{ asset('images/footer.jpg') }}" style="width: 100%; height: 200px;"/>--}}
{{--    {PAGENO}--}}
{{--</htmlpagefooter> --}}
{{--</body>--}}
{{--</html>--}}




