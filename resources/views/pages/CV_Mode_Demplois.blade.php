<?php 
$nav = "active";

?>
@extends('layouts/layout')


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/111.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">MODE D'EMPLOI</h2>
          </div>
        </div>
      </div>
    </section>
		
<section class="ftco-section ftco-degree-bg">
     
      	<div class="container-fluid">
        <div class="row">
         
           <div class="col-sm ftco-animate">
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-2">Categories</h3>
              <ul class="categories">
                <li><a href="{{url('/News')}}">News </a></li>
                <li><a href="{{url('/Economie21th')}}">Économie 21th </a></li>
                <li><a href="{{url('/CvModeDemplois')}}">CV Mode d'emplois </a></li>
                <li><a href="{{url('/LentretienDembauche')}}">L'entretien d'embauche </a></li>
                <li><a href="{{url('/NosConseils')}}">Nos conseils </a></li>
                <li><a href="{{url('/LesSitesDeRechercheDemploi')}}">Les sites de recherche d'emploi </a></li>
                  <li><a href="{{url('/blog')}}">TOUS LES ARTICLES </a></li>
              </ul>
            </div>
         
           </div>
          <div class="col-lg-6 ftco-animate">
           
@include('pages.data')

            
     <div id="results"><!-- results appear here --></div>
     <div class="ajax-loading"><img src="{{ asset('images/loading.gif') }}" /></div>
     
</div>	
	 <div class="col">
      
    </div>
			</div>			 
				
	   </div>
	   </div> 
	  </div>	 
	  	 </div>	
	
    </section> 
	<!-- .section -->


   
		
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
var page = 1;


$(window).scroll(function() { //detect page scroll
    if(($(document).height() - ($(window).height() + $(window).scrollTop())) / $(document).height()===0) { //if user scrolled from top to bottom of the page
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
                $('.ajax-loading').html("Je n'ai plus d'articles disponible pour vous!");
                   document.querySelector("#footer").style.display="block";
         
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