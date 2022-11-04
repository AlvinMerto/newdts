@extends('layouts.master')
<link rel='stylesheet' href="{{asset('css/sec.style.css')}}">
@section('content')

<div class="content-wrapper">
	<div class='col-md-12'>
		<h3>  </h3>
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Dashboard</h3>
				<div class="card-tools">
					<!--ul class='ulflex'>
						<li> Documents that needs action </li>
						<li> Completed documents </li>
					</ul-->
				</div>
			</div>
			<div class="card-body table-responsive p-0">
 				<table class="table table-hover text-nowrap">
 					<thead>
 						<th> Name </th>
 						<th> File </th>
 					</thead>
 				</table>
			</div>
	</div>	
</div>

@endsection