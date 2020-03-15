<link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('dashboard_files/css/ionicons.min.css') }}">
   <link rel="stylesheet" href="{{ asset('dashboard_files/css/skin-blue.min.css') }}">

   @if (app()->getLocale() == 'ar')
   <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome-rtl.min.css') }}">
   <link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE-rtl.min.css') }}">
   <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap-rtl.min.css') }}">
   <link rel="stylesheet" href="{{ asset('dashboard_files/css/rtl.css') }}">
   <style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: 'Cairo', sans-serif !important;
    }
</style>
@else
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('dashboard_files/css/AdminLTE.min.css') }}">
@endif

 {{--<!-- jQuery 3 -->--}}
 <script src="{{ asset('dashboard_files/js/jquery.min.js') }}"></script>

 {{--noty--}}
 <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
 <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

 {{--morris--}}
 <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/morris/morris.css') }}">

 {{--<!-- iCheck -->--}}
 <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/icheck/all.css') }}">

 {{--html in  ie--}}
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>