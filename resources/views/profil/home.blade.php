<?php 
$navDashbord = "active";
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
       <!-- ERRORS AND SUCCESS  -->
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif            

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">MES Messages</h1>
     
  

      </div>
     @include('profil.layouts.data')

<div id="results"><!-- results appear here --></div>
     <div class="ajax-loading"><img src="{{ asset('images/loading.gif') }}" /></div>
 
    </main>
                <

                   
    <style>
.wrapper > ul#results li {
  margin-bottom: 1px;
  background: #f9f9f9;
  padding: 20px;
  list-style: none;
}
#footer{
  display: none;
}
.ajax-loading{
  text-align: center;
}
</style>
     <script>
var page = 2;

load_more(page); 
$(window).scroll(function() { //detect page scroll
    if(($(document).height() - ($(window).height() + $(window).scrollTop())) / $(document).height()===0){ //if user scrolled from top to bottom of the page
        page++;
        load_more(page); //load content   
    }
   
});     
function load_more(page){
   $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $.ajax(
        {
            url: '?page=' + page,
              type: "get",
              beforeSend: function()
            {
                $('.ajax-loading').show();
            }
            
        })
        .done(function(data)
        {
          
            if(data.html == ""){
            
               
                //notify user if nothing to load
                $('.ajax-loading').html("Je n'ai pas de messages pour vous!");
                   
         
                return;
            }
            $('.ajax-loading').hide(); //hide loading animation once data is received
            $("#results").append(data.html); //append data into #results element          
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
            //  alert('No response from server');
        });
 }
</script>
@endsection
