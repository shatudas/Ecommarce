@php

$setting=DB::table('setting_information')->first();

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="MHS">
 <!--favicon icon-->
 <link rel="icon" type="image/png" href="{{ asset($setting->favicon) }}">
 <title>Dashboard ||{{$setting->title}}</title>

 <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <link href="{{asset('backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/css/main.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/summernote/summernote-bs4.css" rel="stylesheet">
 <link href="{{asset('backend')}}/assets/vendor/select2/css/select2.css" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('backend')}}/assets/css/toast.css">


 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden" onload="startTime()" onload="startTime()">

 <!------- start-------->
 <header class="app-header navbar bg-dark" >
  
  <div class="navbar-brand bg-dark text-center" style="background-color:#ccc;">
   <a class="" href="{{ route('admin.home') }}">
    <label class="logo_text text-uppercase text-white" style="font-size:24px; margin-top:-5px; font-weight:600;"><span style="color:#E67E22;"> E </span>MART</label>
   </a>
  </div>


  <!--left side nav toggle start-->
  <ul class="nav navbar-nav mr-auto" >
   <li class="nav-item d-lg-none" style="color:#fff;">
    <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-align-right" ></i></button>
   </li>
   <li class="nav-item d-md-down-none">
    <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-align-right"></i></a>
   </li>
  </ul>
  
  <ul class="nav navbar-nav ml-auto">
   <li class="nav-item dropdown dropdown-slide">
    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <img src="{{ Auth()->user()->image }}">
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
     <div class="dropdown-header pb-3">
      <div class="media d-user">
       <img class="align-self-center mr-3" src="{{ Auth()->user()->image }}" alt="John Doe">
       <div class="media-body">
        <h5 class="mt-0 mb-0">{{ Auth()->user()->name }}</h5>
        <span>{{ Auth()->user()->email }}</span>
       </div>
      </div>
     </div>
     <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class=" ti-unlock"></i>Logout</a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
     </form>
    </div>
   </li>

   <li class="nav-item d-lg-none">
    <button class="navbar-toggler mobile-rightside-toggler" type="button"><i class="icon-options-vertical"></i></button>
   </li>
   <li class="nav-item d-md-down-none">
    <a class="nav-link navbar-toggler right-sidebar-toggler" href="#"><i class="icon-options-vertical"></i></a>
   </li>
  </ul>

 </header>

 <div class="app-body">

  @include('backend.layouts.sidebar')
  @yield('backcontent')

 </div>


 

 <script src="{{asset('backend')}}/assets/vendor/jquery/jquery.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/popper.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
 <script class="include" type="text/javascript" src="{{asset('backend')}}/assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/lobicard/js/lobicard.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/jquery.scrollTo.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/chartjs/Chart.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/vmap-init.js"></script>
 <script src="{{asset('backend')}}/assets/js/scripts.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/select2/js/select2.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/select2-init.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/data-tables/jquery.dataTables.min.js"></script>
 <script src="{{asset('backend')}}/assets/vendor/data-tables/dataTables.bootstrap4.min.js"></script>
 
	<!---------excel print copy cdn------>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>


<!-----datatable script----->
 <script>
  $(document).ready(function() {
   $('#bs4-table').DataaTble();
  } );
 </script>
<!----------excel print copy script------>
 <script>
  $(document).ready(function() {
   $('#table').DataTable();
  } );
 </script>

<!----------toster  notification------->
<script>
  @if (Session::has('messege'))
  var type="{{ Session::get('alert-type', 'info') }}"
  switch(type){
   case 'info':
   toastr.options.positionClass = 'toast-top-right';
   toastr.info("{{ Session::get('messege') }}");
   break;
   case 'success':
   toastr.options.positionClass = 'toast-top-right';
   toastr.success("{{ Session::get('messege') }}");
   break;
   case 'warning':
   toastr.options.positionClass = 'toast-top-right';
   toastr.warning("{{ Session::get('messege') }}");
   break;
   case 'error':
   toastr.options.positionClass = 'toast-top-right';
   toastr.error("{{ Session::get('messege') }}");
   break;
  }
  @endif
 </script>

<!----image show-------->
 <script type="text/javascript">
  function readURL(input)
  {
   if (input.files && input.files[0])
   {
    var reader = new FileReader();
    reader.onload = function (e)
    {
     $('#profile-img-tag').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
   }
  }
  $("#profile-img").change(function()
  {
   readURL(this);
  });
 </script>


{{-- <!-----image show script------->
<script type="text/javascript">
  $(document).ready(function(){
   $('#image').change(function(e){
   var reader = new FileReader();
   reader.onload=function(e){
    $('#showImage').attr('src',e.target.result);
   } 
   reader.readAsDataURL(e.target.files['0']);
   });
  });
</script>



<script type="text/javascript">
  $(document).ready(function(){
   $('#imageOne').change(function(e){
   var reader = new FileReader();
   reader.onload=function(e){
    $('#showImageOne').attr('src',e.target.result);
   } 
   reader.readAsDataURL(e.target.files['0']);
   });
  });
</script> --}}







<!-------Show password------>
 <script type="text/javascript"> 
  function Function() {
   var x = document.getElementById("passChack");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>

<!---------Show comfirm password------->
 <script type="text/javascript"> 
  function MyFunction() {
   var x = document.getElementById("ConPassChack");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>

 <!--------password chack---------->
 <script type="text/javascript">
  var check = function()
  {
   if (document.getElementById('passChack').value ==
    document.getElementById('ConPassChack').value)
   {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
   } 
   else 
   {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching';
   }
  }
 </script>


	<!---------scrollbar----------->
	 <style>
	  ::-webkit-scrollbar {
	   width: 4px;
	   height:5px;
	  }
	  ::-webkit-scrollbar-track {
	   background:#34495E; 
	  }
	  ::-webkit-scrollbar-thumb {
	   background:#85929E; 
	  }
	  ::-webkit-scrollbar-thumb:hover {
	   background:#D7DBDD; 
	  }
	 </style>


		<!----------excel print copy script------>
		<script type="text/javascript">
		 $(document).ready(function() {
		  $('#example').DataTable( {
		   responsive: true,
		   "order": [[ 0, "desc" ]],
		   "lengthMenu": [[10, 5, 15, 25, 50, -1], [10,5,15, 25, 50, "All"]],
		   dom: 'Bfrtip',
		   buttons: [
		   {
		    extend: 'copyHtml5',
		    exportOptions: {
		    columns: [ 0, ':visible' ]
		    }
		   },
		   {
		    extend: 'excelHtml5',
		    exportOptions: {
		    columns: ':visible'
		    }
		   },
		  'colvis','pageLength'
		   ]
		   });
		  });
		</script>

		<!----text editor  script --------->
		<script src="{{asset('backend')}}/assets/vendor/summernote/summernote-bs4.min.js"></script>
		 <script>
		  $(document).ready(function() {
		  $('#summernote').summernote({
		  height: 150,                 
		  minHeight: null,             
		  maxHeight: null,             
		  focus: true                  
		   });
		  });
		 </script>
		 
		 <script>
		  $(document).ready(function() {
		  $('#summernote1').summernote({
		  height: 150,                 
		  minHeight: null,             
		  maxHeight: null,            
		  focus: true                 
		  });
		  });
		 </script>

		 <script>
		  $(document).ready(function() {
		  $('#aboutsummernote').summernote({
		  height:300,                 
		  minHeight: null,             
		  maxHeight: null,             
		  focus: true                  
		  });
		  });
		 </script>

		 <script>
		  function startTime() {
		   var today = new Date();
		   var hr = today.getHours();
		   var min = today.getMinutes();
		   var sec = today.getSeconds();
		   ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
		   hr = (hr == 0) ? 12 : hr;
		   hr = (hr > 12) ? hr - 12 : hr;
		   hr = checkTime(hr);
		   min = checkTime(min);
		   sec = checkTime(sec);
		   document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
		   var time = setTimeout(function(){ startTime() }, 500);
		  }
		  function checkTime(i) {
		   if (i < 10) {
		    i = "0" + i;
		   }
		   return i;
		  }
		 </script>

</body>
</html>

