
@extends('dashboard')


@section('content')

<div class="sidebar">




  <div class="tab">
   <button class="tablinks" onclick="openCity(event, 'personalInfo')"><i class="fa fa-address-card" aria-hidden="true"></i>معلومات شخصية  </button>
   <button class="tablinks" onclick="openCity(event, 'education')"><i class="fa fa-book" aria-hidden="true"></i>التعليم  </button>
   <button class="tablinks" onclick="openCity(event, 'Transportation')"><i class="fa fa-car" aria-hidden="true"></i>المواصلات  </button>
   <button class="tablinks" onclick="openCity(event, 'travel')"><i class="fa fa-plane" aria-hidden="true"></i>حركة السفر  </button>
   <button class="tablinks" onclick="openCity(event, 'Contact_Data')"><i class="fa fa-phone" aria-hidden="true"></i>بيانات الاتصال  </button>
   <button class="tablinks" onclick="openCity(event, 'work_data')"><i class="fa fa-briefcase" aria-hidden="true"></i>  بيانات العمل  </button>
  </div>

        <div id="personalInfo" class="tabcontent" style="display:block">
            @include('searchOfInfo');

        </div>

          <div id="education" class="tabcontent" style="display:block">
              @include('education');

          </div>

          <div id="Transportation" class="tabcontent"style="display:block">
              @include('transportation');

          </div>
        <div id="travel" class="tabcontent" style="display:block">
            @include('travel');

        </div>

        <div id="Contact_Data" class="tabcontent" style="display:block">
            @include('Contact_Data');

        </div>

        <div id="work_data" class="tabcontent"style="display:block">
            @include('work_data');

        </div>
  </div>

<div class="main">
    @include('main')

    @if(isset($child))

        <div style="float:left; ">
            <img src =" {{asset('images/' . $person1->image)}}" height="200" width="250" style="border-radius: 50%;"/>

        </div>

    @endif


</div>




@endsection

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

$('.click').click(function(){
     window.location = $(this).data('href');
     //use window.open if you want a link to open in a new window
});

</script>

</html>
