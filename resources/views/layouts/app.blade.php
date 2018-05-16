<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.header')
@show


<body >
 
<div class="">

@include('layouts.partials.sidebar')

<div class="">
       

 <div class="">
            <div class="">

@yield('main-content')
            </div>
        </div>

</div>
</div>
<!-- ./wrapper -->
    @include('layouts.partials.scripts')
    @stack('scripts')    
    
@show

</body>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</html>
