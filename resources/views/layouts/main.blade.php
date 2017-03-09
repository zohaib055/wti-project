<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include("layouts.head")

@if(Auth::check())
<body class="page-body  page-fade-only" data-url="">

@else

<body class="page-body login-page login-form-fall" data-url="">

@endif

 @if(Auth::check())

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always --> 

  @section("sidebar")
    
    @include('layouts.sidebar') 

  @show

 @endif

@if(Auth::check())  
<div class="main-content">

@endif

@if(Auth::check())        
<div class="row">
    
   @include("layouts.widgets.profile1")
    
   @include("layouts.widgets.profile2")
</div>

<hr />

@endif

@if(Session::has('msg'))

@component('inc.alert')
    
    @slot('type')

     {{ Session::get('type') }}
        
    @endslot

    @slot('title')

        Message : 
        
    @endslot

     {{ Session::get('msg') }}

@endcomponent

@endif


@section("content")

 <h3>Not Available</h3>

@show

<!-- Footer -->

@if(Auth::check())  

@include("layouts.footer")
</div>
</div>
@endif
    @include("layouts.scripts")

</body>
</html>