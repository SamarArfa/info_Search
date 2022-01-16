<!DOCTYPE html>
<html>
<head>
    <title>الصفحة الرئيسية</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">




    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="css/style">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <link rel="stylesheet" href="https://cdn.pannellum.org/2.4/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.pannellum.org/2.2/pannellum.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photo-sphere-viewer@4/dist/photo-sphere-viewer.min.css"/>



{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">--}}

{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>

{{--    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>--}}




    <style>
    body {font-family: "Lato", sans-serif;}


    .navbar {
    height: 100%;
    width: 100%;
    /*position: fixed ;*/
    /*z-index: 1;*/
    top: 0;
    /*left: 70%;*/
    /*background-color: #111;*/
    /*overflow-x: hidden;*/
    /*padding-top: 16px;*/
        direction: rtl;
    }

    .navbar a {
        /* padding: 6px 8px 6px 16px; */
        text-decoration: none;
        font-size: 20px;
        color: white;
        /* display: block; */
        background-color: inherit;
        float: right;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
    }
    .navbar-light .navbar-brand a{
    /*float: right;*/
    color: whitesmoke;
    /* font-size: 20px; */
    /* padding: 14px 16px; */


    }

     a:hover {
    color: black;
    }


    @media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .navbar-brand a {font-size: 18px;}
    }





    /* Change background color of buttons on hover */
    .navbar-brand a:hover {
    background-color: black;
    }

    /* Create an active/current tablink class */
    .navbar-brand a.active {
    background-color: black;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: cadetblue;
        color: cadetblue;
    }
    </style>
</head>

<body style="direction: rtl;">

<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: cadetblue;">
    <div class="container">

        <a class="navbar-brand mr-auto" href="{{ route('searchInfo') }}" style="color: whitesmoke;"><i class="fa fa-address-card" aria-hidden="true"></i>معلومات شخصية  </a>
        <a class="navbar-brand mr-auto" href="{{ route('searchEdu') }}"style="color: whitesmoke;"><i class="fa fa-book" aria-hidden="true"></i>التعليم  </a>
        <a class="navbar-brand mr-auto" href="{{ route('searchTransport') }}"style="color: whitesmoke;"><i class="fa fa-car" aria-hidden="true"></i>المواصلات  </a>
        <a class="navbar-brand mr-auto" href="{{ route('searchTravel') }}"style="color: whitesmoke;"><i class="fa fa-plane" aria-hidden="true"></i>حركة السفر  </a>
        <a class="navbar-brand mr-auto" href="{{ route('contact') }}"style="color: whitesmoke;"><i class="fa fa-phone" aria-hidden="true"></i>بيانات الاتصال  </a>
        <a class="navbar-brand mr-auto" href="{{ route('searchWork') }}"style="color: whitesmoke;"><i class="fa fa-briefcase" aria-hidden="true"></i>  بيانات العمل  </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
{{--                        <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>--}}
                    </li>
                    <li class="nav-item">
{{--                        <a class="nav-link" href="{{ route('register-user') }}">تسجيل مسخدم جديد</a>--}}
                    </li>
                @else
                    <li class="nav-item">
{{--                        <a class="nav-link" href="{{ route('signout') }}">تسجيل خروج</a>--}}
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')

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
                            <th class="text-center">الإجراء</th>

                            <!-- <th class="text-center">معلومات اخرى</th> -->

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($person as $key => $allPersons)

                            <tr class="click"
{{--                                data-href="{{ route('index',$allPersons->id)}}"--}}
                            >
{{--                                <a data-toggle="modal" id="smallButton" data-target="#smallModal"--}}
{{--                                   data-attr="{{ route('moreInfo',$allPersons->ssn) }}" title="show">--}}
                                <td>{{$allPersons->ssn}}</td>
                                <td>{{$allPersons->first_name}}</td>
                                <td>{{$allPersons->second_name}}</td>
                                <td>{{$allPersons->third_name}}</td>
                                <td>{{$allPersons->last_name}}</td>
                                <td>{{$allPersons->age}}</td>
                                <td>{{$allPersons->cityOfHome}}</td>
                                <td>{{$allPersons->cityOfBorn}}</td>

                                <td>{{$allPersons->gender}}</td>
                                <td><a  id="queryBtn" class="btn btn-primary" href="{{route('pdf',$allPersons->ssn)}}" style="background-color: red;color: white;">PDF</a>
                                   <div class="pull-right">
                                            <a class="btn btn-success text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                                               data-attr="{{ route('moreInfo',$allPersons->id) }}" title="Create a project"> <i class="fas fa-eye text-success  fa-lg"></i>

                                            </a>
                                   </div>

                                </td>
                                <td>
                                    <img src="{{$allPersons->image}}" width="100%">
                                </td>
                            <!-- <td>
                                        <a href="{{ route('index',$allPersons->id)}}"
                                           class="btn btn-info btn-sm"><i class="material-icons">الابناء </i></a>
                                        <a href="{{ url('index',$allPersons->id)}}"
                                           class="btn btn-primary btn-sm"><i class="material-icons">تفاصيل </i></a>

                                    </td> -->

{{--                                </a>--}}
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



        <!-- medium modal -->
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="    width: 200%;    margin-right: -50%;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="mediumBody">
                            <div>
                                <!-- the result to be displayed apply here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



</body>
<script>
    // display a modal (medium modal)
    $(document).on('click', '#mediumButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#mediumModal').modal("show");
                $('#mediumBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });
</script>

</html>
