@extends('layouts.master')

@section('content')

<style>
	.thetabs {

	}

	.thetabs span{
		font-size: 12px;
		margin-right: 23px;
		padding: 7px 0px;
	}

	.thetabs span:hover {
		cursor: pointer;
		color:#333;
	}

	.hidethis {
		display:none;
	}

	.docbtns {
		color:#9b9797;
	}

	.selectedspan {
		color:#333;
		border-bottom: 3px solid;
	}

	.boxesdoctype {
		display: none;
	}

	.showthiswindow {
		display:block !important;
	}

	table {
		table-layout: unset !important;
	}

	table th, table td {
		font-size: 14px !important;
	}

	table tbody tr:hover {
		background-color: #f1f1f1;
		cursor: pointer;
	}

	.spanbtns {
		margin-right:10px;
		padding: 7px 0px;
	}

	.marginbot {
		margin-bottom: 10px;
	}

	.coloritwhite {
		background: #fff;
	}
</style>
<div class="content-wrapper" style="margin-left: 20px;">


<div class="content-wrapper">
    <section class="content-header">
        <div align="center" style="vertical-align: center;">
            {{--<img src="{{ url('/images/MinDA_Official.jpg') }}" alt="1" width="auto" height="auto">--}}

        <div class='row marginbot'>
						<div class='col-md-12 '>        	
        		 	<div class="card-header border-0 coloritwhite">
		           	<div style="margin-bottom: 0px;" class="card-title thetabs" align="left">
		           		<span class='docbtns selectedspan' data-tabid='internal'>INTERNAL DOCUMENTS</span>
		           		<span class='docbtns' data-tabid='external'>EXTERNAL DOCUMENTS</span>
		           		<span class='docbtns' data-tabid='outgoing'>OUTGOING DOCUMENTS</span>
		           	</div>
		          </div>
		        </div>
		    </div>
		    <div class='row'>
		        <div class='col-md-7'>      
		        <div class="card bg-gradient-info">
		        	  <div class="card-footer bg-transparent">
		              <div class="row">
		                <div class="container-fluid mt-5" style='margin-top: 0px !important;'>
		                	<div id='internal_pending' class='boxesdoctype'>
		                  		<p> loading internal documents ...</p>
		                 	</div>
			               	<div id='external_pending' class='boxesdoctype'>
			                		<p> loading external documents ...</p>
			               	</div>
			             		<div id='outgoing_pending' class='boxesdoctype'>
			                  		<p> loading outgoing documents ...</p>
			                </div>
		              	</div>
		              </div>
		            </div>
		        </div>
		      </div>
		      <div class='col-md-5'>
		      	<div class="card bg-gradient-info">
		        	  <div class="card-footer bg-transparent">
		              <div class="row">
		                <div class="container-fluid mt-5" style='margin-top: 0px !important;'>
		                	<div id='internal_complete' class='boxesdoctype'>
		                  		<p> loading internal documents ...</p>
		                 	</div>
			               	<div id='external_complete' class='boxesdoctype'>
			                		<p> loading external documents ...</p>
			               	</div>
			             		<div id='outgoing_complete' class='boxesdoctype'>
			                  		<p> loading outgoing documents ...</p>
			                </div>
		              	</div>
		              </div>
		            </div>
		        </div>
		      </div>
      	</div>

		<div style="height: 20px;" class="mb-5"></div>
    </section>

</div>

<script>

    var totapprove = 0;
	var totdisapprove = 0;

	$(document).ready(function () {
		
		display("internal");

	  internal_url = "{{url('/count-internal-docs')}}";

	$.get(internal_url, function (internal_response) {
		            console.log(internal_response);  
		            
		            var internal_r = internal_response.internal_data; 
		            var internal_p = internal_response.internal_cnt_p;
		            var internal_a = internal_response.internal_appr;
		            var internal_d = internal_response.internal_disapp;


		            document.getElementById("internall").innerHTML=internal_r;
		            document.getElementById("internpending").innerHTML=internal_p;
		            document.getElementById("internapprove").innerHTML=internal_a;
		            document.getElementById("interndisapprove").innerHTML=internal_d;

		            totapprove = totapprove+internal_a;
		            totdisapprove = totdisapprove+internal_d;


		      });

		url = "{{url('/count-external-docs')}}";

  	$.get(url, function (response) {
            console.log(response);  
            
            var r = response.data; 
            var p = response.cnt_p;
            var a = response.appr;
            var d = response.disapp;

            document.getElementById("incomnall").innerHTML=r;
            document.getElementById("incompending").innerHTML=p;
            document.getElementById("incomapprove").innerHTML=a;
            document.getElementById("incomdisapprove").innerHTML=d;

            totapprove = totapprove+a;
            totdisapprove = totdisapprove+d;

      });

  outgoing_url = "{{url('/count-outgoing-docs')}}";

  $.get(outgoing_url, function (outgoing_response) {
            console.log(outgoing_response);  
            
            var outgoing_r = outgoing_response.outgoing_data; 
            var outgoing_p = outgoing_response.outgoing_cnt_p;
            var outgoing_a = outgoing_response.outgoing_appr;
            var outgoing_d = outgoing_response.outgoing_disapp;

            document.getElementById("outall").innerHTML=outgoing_r;
            document.getElementById("outpending").innerHTML=outgoing_p;
            document.getElementById("outapprove").innerHTML=outgoing_a;
            document.getElementById("outdisapprove").innerHTML=outgoing_d;

            totapprove = totapprove+outgoing_a;
            totdisapprove = totdisapprove+outgoing_d;



      });

   $(document).on("click",".docbtns",function(){
   		$(this).siblings().removeClass("selectedspan");
   		$(this).addClass("selectedspan");

   		var tabid = $(this).data("tabid");

   		display(tabid);
   });

            //document.getElementById("totlapprove").innerHTML=totapprove;
   			//document.getElementById("totldisapprove").innerHTML=totdisapprove;

   $(document).on("click",".trtrigger",function(){
   		var href = $(this).data("href");

   		// window.location.href = href;
   		window.open(
			  href,
			  '_blank' // <- This is what makes it open in a new window.
			);
   });
});

	 function display(tabid) {
	 		$(document).find(".boxesdoctype").hide();
   		$(document).find("#"+tabid+"_pending").show();
   		$(document).find("#"+tabid+"_complete").show();

   		var urlpending = null;
   		var urlcomplete = null;
   		switch(tabid) {
   			case "internal": 
   				urlpending = "{{ url('/home/internal_pending') }}";
   				urlcomplete = "{{ url('/home/internal_complete') }}";
   			break;
   			case "external": 
   				urlpending = "{{ url('/home/external_pending') }}";
   				urlcomplete = "{{ url('/home/external_complete') }}";
   			break;
   			case "outgoing": 
   				urlpending = "{{ url('/home/outgoing_pending') }}";
   				urlcomplete = "{{ url('/home/outgoing_complete') }}";
   			break;
   		}

   		// load to pending table
   		$("#"+tabid+"_pending").load(urlpending,function(){

   		});

   		// load to complete table 
			$("#"+tabid+"_complete").load(urlcomplete,function(){

   		});   		
	 }
</script>
@endsection
