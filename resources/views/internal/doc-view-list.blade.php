@extends('layouts.master')

@section('content')


<script>
		$(document).ready(function() {
		    var msg = '{{Session::get('alert')}}';
		    var exist = '{{Session::has('alert')}}';
		    if(exist){
		    	setTimeout(function () { alert(msg); }, 100);
		    }
		});
	 </script>


	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

<script>
$(document).ready(function(e){
	    $(function() {
	    $(".preload").fadeOut(100, function() {
	        $(".content").fadeIn(100);  

	    });
	});

});
</script>

<style>
    table th td,table th,table td {
        padding-left: 10px;
        font-size: 13px !important;
        color: #717171;
    }

    table td p {
        margin-bottom: 3px;
    }

    #recipientsbox p:hover {
        cursor: pointer;
        color: red;
        text-decoration: underline;
        font-weight: bold;
    }

    #mailstatus p {
        padding: 5px;
        margin-bottom: 0px;
    }

    .theinnertbl {
        /*margin-top: -7px; */
        background: #f4f4f4;
        table-layout: unset;
    }

    .theinnertbl tr {
        /*
        border-left: 1px solid #e6e6e6;
        border-right: 1px solid #e6e6e6;
        */
        border-bottom: 1px solid #e6e6e6;
    }

    .theinnertbl tr th{
        font-size: 13px !important;
        font-weight: bold;
        color: #486f99;
        padding: 10px;
        position: relative;
    }

    .theinnertbl tr th span {
        padding: 5px;
    }

    .theinnertbl tr th span:hover {
        background: #f1f1f1;
        cursor: pointer;
    }

    .theinnertbl tr th span:hover > .dropdivdown__ {
        display: block;
        position: absolute;
        right: 0;
    }

    .dropdivdown {
        display: none;
        box-shadow: 0px 2px 5px #ccc;
        position: absolute;
        right: 0;
        z-index: 100000000000;
    }

    .dropdivdown ul{
        padding: 0px;
        margin: 0px;
    }

    .dropdivdown ul li{
        list-style: none;
        padding: 10px 17px;
        border: 1px solid #ccc;
        margin-top: -1px;
        background: #fff;
        font-weight: normal;
        font-size: 14px;
    }

    .dropdivdown ul li:hover {
        background: #f1f1f1;
    }

    .borderwhite {
        border: 1px solid #cacaca !important;
    }

    .whiteboxes {

    }

    .whiteboxes input[type="text"]{
        background: #fff !important;
    }

    .input-group-btn button {
        background: none !important;
    }

    .highprio {
        background: #F00;
        color: #fff;
        padding: 6px;
        text-align: center;
        border-radius: 99px;
    }

    .modprio {
         background: #3549B5;
        color: #fff;
        padding: 6px;
        text-align: center;
        border-radius: 99px;
    }

    .lowprio {
         background: #c3c3c3;
        color: #fff;
        padding: 6px;
        text-align: center;
        border-radius: 99px;
    }

    .confi {
         background: #FF6361;
        color: #fff;
        padding: 6px;
        text-align: center;
        border-radius: 99px;
    }

    .undef {
         background: #333333;
        color: #fff;
        padding: 6px;
        text-align: center;
        border-radius: 99px;
    }

    .thedatenavs {
        padding: 0px;
        margin: 0px;
        /*margin-left: 10px; */
    }

    .thedatenavs li{
        display: inline-block;
        margin-right: -1px;
        font-size: 14px;
        color: #737373;
        border: 1px solid #ccc;
        padding: 7px;
    }

    .thedatenavs li:hover{
        background: #f1f1f1;
    }

    .selected {
        background: #486f99;
        color: #fff !important;
        font-weight: bold;
        margin-bottom: 7px;
        text-align: center;
        position: relative;
    }

    .miniselected {
        color: #486f99 !important;
        border-bottom: 3px solid !important;
        font-weight: bold;
    }

    .actionbtns {
        display: flex;
        column-gap: 5px;
        list-style: none;
        padding: 0px;
        margin-left: 0px;
        font-size: 14px;
        margin-bottom: 0px;
        background: #dfdfdf;
        margin-top: -7px;
        font-weight: normal;
    }

    .actionbtns li {
        /*
        border-bottom: 3px solid #486f99;
        color: #486f99; */
        color: #737373;
        padding: 10px;
    }

    .actionbtns li:hover {
        color: #333;
    }

    .selected ul {
        display: flex;
        margin: 5px 0px 0px 0px;
        padding: 0px;
        background: #fff;
    }

    .selected:hover {
        background: #486f99 !important;
    }

    .selected::after {
        content: '';
        position: absolute;
        left: 39%;
        top: 100%;
        width: 0;
        height: 0;
        border-left: 13px solid transparent;
        border-right: 13px solid transparent;
        border-top: 9px solid #486f99;
        clear: both;
    }

    #theheaderdiv {
        height: 41px;
        overflow: hidden;

        transition: background 1s;
        -webkit-transition: background 1s;
        -o-transition: background 1s;
    }

    #theheaderdiv:hover {
        background: #e1dede;
        cursor: pointer;
    }

    .dontdisplay {
        display: none;
        background: #f9f9f9 !important;
        box-shadow: 0px 9px 10px #cecece !important;
    }

    .displaythis {
        display: table-row;
    }

    .theinnertbl tr:nth-child(4n+2) {
        background-color: #f2f2f2 !important;
    }

    .theinnertbl tbody tr:hover {
        cursor: pointer;
        background: #ddd;
    }

    tr:nth-child(2n) {
        background: none;
    }

    .selectedtr {
        
        border-left: 3px solid rgb(72, 111, 153) !important;
        /*
        border-right: 7px solid rgb(72, 111, 153) !important;
        */
        box-shadow: 0px 0px 20px #b0b0b0;
        background: #fff;
        position: relative;
    }

    .selectedtr td {
        padding: 15px;
        font-size: 15px !important;
        color: #000;
    }

    .theactionbtns {

    }

    .theactionbtns a {
        margin-top: 0px !important;
    }

    .lastaction {
        margin: 10px 0px 0px 0px;
        font-size: 13px;
        color: #808080;
        background: #fff;
        padding: 6px;
        font-weight: bold;
    }


</style>

<input type="hidden" name="type_input" id="type_input" value="<?php echo $window; ?>">
<div class="content-wrapper ml-2" style="width: 115%">
    <div class="row justify-content-center" style="width: 100%">
        <div class="col-md-8" style="width: 100%">
            <div class="card mt-3">
                <div style="font-size: 18px; color: #3b5998; font-weight: normal;" class="card-header" id='theheaderdiv'> <p style='margin: 0px;'> <?php echo ucfirst($window)." Documents"; ?> </p>
                                            <div style='display: flex;'> 
                                                <div class="sidebar-form borderwhite" style="width: 200px; margin-left: 5px;">
                                                    <div class="input-group whiteboxes">
                                                        <input type="text" id="q" name="q" class="form-control" placeholder="Barcode search...">
                                                        <span class="input-group-btn">
                                                            <button type="submit" name="search" id="search-btn" class="searchbtn btn btn-flat" style="height: 25pt; margin-top: -1px;" >
                                                              <i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="sidebar-form borderwhite" style="width: 200px; margin-left: 5px;">
                                                    <div class="input-group whiteboxes">
                                                        <input type="text" id="qsearchtxt" name="q" class="form-control" placeholder="Search a text in the description..." <?php if (isset($_GET['q'])){ echo "value='".$_GET['q']."'"; } ?>>
                                                        <span class="input-group-btn">
                                                            <button type="submit" name="search" id="search-txt-btn" class="search-txt-btn btn btn-flat" style="height: 25pt; margin-top: -1px;" >
                                                              <i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>

                                                <!--div class="sidebar-form borderwhite" style="width: 200px; margin-left: 5px;">
                                                    <div class="input-group whiteboxes">
                                                        <input type="text" list="datelist" placeholder="Filter by date" name="ff_date" id="ff_date" class="form-control">
                                                        <span class="input-group-btn">
                                                            <button type="submit" name="search" id="search-btn-date" class="searchbtn-date btn btn-flat" >
                                                              <i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                            <datalist id="datelist">
                                                                @if($datefilter->count()>0)
                                                                    @foreach($datefilter as $l)
                                                                        <option value="{{ date('M d, Y', strtotime($l->doc_receive)) }}">
                                                                    @endforeach
                                                                @endif
                                                            </datalist>
                                                    </div>
                                                </div-->
                                            </div>
                </div>
                	<div class="card-body" style="display: flex; justify-content: center; padding:0px; background:transparent;">

    					<section style="width: 100%">
                            
    						      <!-- search form   -->

								<table>
                                    <tr>
                                        <input type="hidden" id="q_user_level" name="q_user_level" class="form-control" value="{{ Auth::user()->access_level }}">

                                        <!-- filter-date/Nov 15, 2021 -->

                                        <?php $date = date("M d, Y"); $today = "/filter-date/".$date; // date("M d, Y"); ?>
                                        <td style='padding-left: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; overflow-x: auto;' colspan="10">
                                            <p style="font-size: 14px; color: #8a8b8c; font-weight: normal; margin-bottom: 10px; margin-left: 11px;margin-top: 10px;">  
                                                <?php 
                                                    if (isset($search)) {
                                                        $whattodisplay = null;
                                                        if (date("M. d, Y", strtotime($search)) == date("M. d, Y")) {
                                                            $whattodisplay = "Displaying documents routed to you Today";
                                                        } else {
                                                            if ($search == "needsaction") {
                                                                $whattodisplay = "Displaying all the documents that require your attention";
                                                            } else {
                                                                $whattodisplay = "Displaying the movement of document that were routed to you last ".date("l - M. d, Y", strtotime($search));
                                                            }
                                                        }

                                                        if ($search != "all") {
                                                            echo "<i class='fa fa-caret-right' aria-hidden='true'></i> ".$whattodisplay;
                                                        }
                                                    }

                                                    if (isset($sort)){ echo $sort ." documents"; }
                                                ?>
                                            </p>
                                            <ul class='thedatenavs'>
                                                <?php if ($window == "internal") { ?>
                                                    <a href="{{url('internal-document-list-view')}}/?action=2" style='margin-right: -3px;'>
                                                <?php } else if($window == "external") { ?>
                                                    <a href="{{url('external-document-list-view')}}?action=2" style='margin-right: -3px;'>
                                                <?php } ?>
                                                    <?php if ($window != "outgoing") { 
                                                        $sel = null;
                                                        if (isset($search)) {
                                                            if ($search == "needsaction") {
                                                                $sel = "selected";
                                                            }
                                                        }
                                                        ?> 
                                                        <li class='<?php echo $sel; ?>'>
                                                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Needs your Action
                                                        </li>
                                                    <?php } ?>
                                                </a>
                                                <?php if ($window == "internal") { ?>
                                                    <a href="{{url('internal-document-list-view')}}" style='margin-right: -3px;'>
                                                <?php } else if($window == "external") { ?>
                                                    <a href="{{url('external-document-list-view')}}" style='margin-right: -3px;'>
                                                <?php } else if($window == "outgoing") { ?>
                                                    <a href="{{url('outgoing-document-list-view')}}" style='margin-right: -3px;'>
                                                <?php } ?>
                                                    <li class = '<?php if(isset($search)){ if ($search == 'all') { echo "selected"; }} ?>' style='padding: 7px 40px; '>
                                                        All <?php // if (Auth::user()->access_level == 4) { echo " documents routed to your office"; } ?>
                                                    </li>
                                                </a>

                                                <?php $theseldate = null; if(!isset($sort)){  ?>
                                                    <?php if ($window == "internal") { ?>
                                                        <a href="{{ url('internal-document/filter-date/') }}/{{$date}}" style='margin-right: -3px;'/> 
                                                    <?php } else if($window == "external") { ?>
                                                        <a href="{{ url('external-document/filter-date/') }}/{{$date}}" style='margin-right: -3px;'/> 
                                                    <?php } else if($window == "outgoing") { ?>
                                                        <a href="{{ url('outgoing-document/filter-date/') }}/{{$date}}" style='margin-right: -3px;'/> 
                                                    <?php } ?>
                                                        <?php 
                                                            $todate = null;

                                                            if (isset($search)) {
                                                                if (date("M. d, Y") == date("M. d, Y",strtotime($search))) {
                                                                    if ($window == "internal") {
                                                                        $theseldate = url('internal-document/filter-date/')."/".$date;
                                                                    } else if ($window == "external") {
                                                                        $theseldate = url('external-document/filter-date/')."/".$date;
                                                                    } else if ($window == "outgoing") {
                                                                        $theseldate = url('outgoing-document/filter-date/')."/".$date;
                                                                    }
                                                                    $todate     = "selected";
                                                                }
                                                            }
                                                        ?>
                                                        <li style="font-size: 14px;" class='{{$todate}}'> <i class="fa fa-calendar-o" aria-hidden="true"></i> Today <?php if ($todate != null) { echo "-".date("M. d, Y"); } ?></li>
                                                    </a>
                                                    <?php
                                                        
                                                        for($i = 1 ; $i <= 4; $i++) {
                                                            $thedates = date("M d, Y", strtotime("-{$i} days"));

                                                            if ($window == "internal") {
                                                                $datelink = url('internal-document/filter-date/')."/".$thedates;
                                                            } else if ($window == "external") {
                                                                $datelink = url('external-document/filter-date/')."/".$thedates;
                                                            } else if ($window == "outgoing") {
                                                                $datelink = url('outgoing-document/filter-date/')."/".$thedates;
                                                            }

                                                            $selecteddate = null;

                                                            if (isset($search)) {
                                                                if ($thedates == date("M d, Y", strtotime($search))) {
                                                                    $selecteddate = "selected";
                                                                    $theseldate   = $datelink;
                                                                }
                                                            }

                                                            echo "<a href='{$datelink}' ><li class='{$selecteddate}' title='".date("D - M. d, Y", strtotime("-{$i} days"))."'><i class='fa fa-calendar-o' aria-hidden='true'></i> ";
                                                                if ($selecteddate != null) {
                                                                    echo date("D - M. d, Y", strtotime("-{$i} days"));
                                                                } else {
                                                                    echo date("D", strtotime("-{$i} days"));
                                                                }
                                                            echo "</li></a>";

                                                        }
                                                    ?>
                                                    <input type='date' id='thedatefilterinput' style="font-family: arial;font-size: 13px;padding: 8px;border: 1px solid #ccc; margin-left: -3px;background: #eee;"/>
                                                <?php } ?>

                                            </ul>
                                            
                                            <?php 
                                                $actbtn_na  = null;
                                                $actbtn_fw  = null;
                                                $actbtn_fty = null;

                                                if (isset($_GET['action'])) {
                                                    if ($_GET['action'] == 1111111) { // forwarded to you
                                                        $actbtn_fty = "selected";
                                                    } else if ($_GET['action'] == 2) { // needed action
                                                         $actbtn_na = "miniselected";
                                                        // $actbtn_na = "btn btn-primary";
                                                    } else if ($_GET['action'] == 3) { // you forwarded
                                                         $actbtn_fw = "miniselected";
                                                        // $actbtn_fw = "btn btn-primary";
                                                    }
                                                }

                                                if (isset($dontdisplay)) {
                                                    $theseldate = url("internal-document-list-view");
                                                }
                                            ?>
                                            
                                            
                                        </td>
                                        <!--td>
                                            <div class="d-flex" style="float: right;">
                                                <div>
                                                    <div style="font-weight: bold;">SORT</div>
                                                    <a onClick="sortView(); return false;" href="{{url('/internal-document-list-view-sort')}}">
                                                        <img src="{{ url('/images/sort.png') }}" alt="sort" width="20" height="20">
                                                    </a>
                                                </div>
                                            </div>
                                        </td-->
                                    </tr>
                                </table>
								   
								    
								      <!-- /.search form -->
    					<!--Content-->
                                            <?php if (!isset($dontdisplay)) { ?>
                                                <?php if (!isset($sort)) { ?>
                                                    <?php if ($window != "outgoing") { ?>
                                                    <ul class='actionbtns'>
                                                        <a href="<?php echo $theseldate."/?action=2"; ?>"> 
                                                            <li class='<?php echo $actbtn_na; ?>'> <i class='fa fa-bell' aria-hidden='true'></i> Needs your action </li> 
                                                        </a>
                                                        <a href="<?php echo $theseldate."/?action=3"; ?>"> 
                                                            <li class='<?php echo $actbtn_fw; ?>'> <i class='fa fa-share' aria-hidden='true'></i> You forwarded </li> 
                                                        </a>
                                                        <!--a href="<?php //echo $theseldate."/?action=2"; ?>"> 
                                                            <li class='<?php //echo $actbtn_fty; ?>'> <i class='fa fa-share' aria-hidden='true'></i> forwarded to you</li> 
                                                        </a-->
                                                    </ul>
                                                    <?php } ?>
                                                <?php } ?>

                                            <?php } ?>

                            @if($data->count()>0)

    						<table class='theinnertbl'>
                                <thead style='background: #fff;'>
                                    <!--tr style='background: #e6e6e6;'>
                                        <th colspan="10">
                                            
                                        </th>
                                    </tr-->
        							<tr class="border_bottom" style="box-shadow: 0px 2px 5px #ccc;position: relative;">
                                        <th>Document Date 
                                            <?php if (!isset($_GET['action'])) { ?>
                                                <span> <i class="fa fa-angle-double-down" id= 'sortid' aria-hidden="true" style=""></i> 
                                                    <div class='dropdivdown'>
                                                        <ul>
                                                            <?php 
                                                                $connector = null;
                                                                if (isset($_GET['page'])) {
                                                                    $connector = "&page=".$_GET['page'];
                                                                } else {
                                                                    $connector = null;
                                                                }
                                                            ?>
                                                            <a href='?sort=docdate&order=1'> <li> <i class="fa fa-sort-amount-asc" aria-hidden="true" style='margin-right: 9px;'></i> Newest First </li> </a>
                                                            <a href='?sort=docdate&order=2'> <li> <i class="fa fa-sort-amount-desc" aria-hidden="true" style='margin-right: 9px;'></i> Oldest First </li> </a>
                                                            <?php if ($window == "internal") { ?>
                                                                <a href="{{url('internal-document-list-view')}}">
                                                            <?php } else if($window == "external") { ?>
                                                                <a href="{{url('external-document-list-view')}}">
                                                            <?php } else if($window == "outgoing") { ?>
                                                                <a href="{{url('outgoing-document-list-view')}}">
                                                            <?php } ?>
                                                                <li> <i class="fa fa-eraser" aria-hidden="true" style='margin-right: 9px;'></i> Reset Filter </li>
                                                                </a>
                                                        </ul>
                                                    </div>
                                                </span>
                                            <?php } ?>
                                        </th>  
        								<th>Barcode</th>
        								<th>Document Category/Type <!--span> <i class="fa fa-angle-double-down" aria-hidden="true" style=""></i> </span--></th>
        								<th>Description</th>
        								<th>Office/Division </th>
        								<th>Status</th>
        								<th># Days</th>
                                        <th>Classification <span> <i class="fa fa-angle-double-down" aria-hidden="true" style=""></i> </span></th>
        								<!--th>Action</th-->
        							</tr>
                                </thead>
                            <tbody>
                                <?php $priority = null; $count = 0; // var_dump($data); ?>
    							@foreach($data as $d)
                                    <?php
                                        
                                        if (isset($_GET['action'])) {
                                            if ($d->actioned == 2) { // forwarded :: 
                                                // determine if its from you or needs your action
                                                if ($_GET['action'] == 2) {
                                                    if ($d->empto == Auth::user()->id) { // needs your action
                                                        // continue;
                                                    } else {
                                                        break;
                                                    }
                                                } else if ($_GET['action']==3) {
                                                    if ($d->empfrom == Auth::user()->id) { // forwarded to you
                                                        // continue;
                                                    } else {
                                                        break;
                                                    }
                                                }
                                            }
                                        }
                                        
                                    ?>
                                <tr class='withcontent' data-theid='<?php echo $d->ref_id; ?>'>
                                    @if($d->actioned == 0)
                                        @if($d->classification == 1 && $d->confi_name == Auth::user()->f_name)
                                             @if($d->days_count>5)
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td>{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td>{{$d->barcode}}</td>
                                                <td>{{$d->doctitle}}</td>
                                                <td>{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td>{{$d->agency}}</td>
                                                <td><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td>{{$d->days_count}}</td>
                                                <td>Confidential</td-->
                                             @else
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td>{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td>{{$d->barcode}}</td>
                                                <td>{{$d->doctitle}}</td>
                                                <td>{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td>{{$d->agency}}</td>
                                                <td><a href="#" style="text-decoration: none; color: #FE0001;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{$d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td>{{$d->days_count}}</td>
                                                <td>Confidential</td-->
                                            @endif
                                        @elseif($d->classification == 1 && $d->confi_name == Auth::user()->f_name || $d->classification == 1 && Auth::user()->access_level==5)
                                            @if($d->days_count>5)
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td>{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td>{{$d->barcode}}</td>
                                                <td>{{$d->doctitle}}</td>
                                                <td>{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td>{{$d->agency}}</td>
                                                <td><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td>{{$d->days_count}}</td>
                                                <td>Confidential</td-->
                                            @else
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="color: #045FB4; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #045FB4;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #045FB4;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;"><a href="#" style="text-decoration: none; color: #045FB4;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">Confidential</td-->
                                            @endif
                                        @elseif($d->classification == 1 && $d->confi_name != Auth::user()->f_name)
                                            @if($d->days_count>5)
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">Confidential</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">Confidential</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">Confidential</td>
                                                <td align="center"><div id="stattooltip_{{$d->id}}" style="background: #F4A8A9; color: #434243; font-weight: bold;">Confidential></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">Confidential</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">Confidential</td-->
                                            @else
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="color: #DF013A; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #DF013A;">Confidential</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #DF013A;">Confidential</td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">Confidential</td>
                                                <td align="center"><span style="color: #DF013A; font-weight: bold;">Confidential></td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">Confidential</td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">Confidential</td-->
                                            @endif
                                        @elseif($d->classification == 2)
                                            @if($d->days_count>5)
                                                <?php $priority = "High Priority"; $class='highprio'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">High Priority</td-->
                                            @else
                                                <?php $priority = "High Priority"; $class='highprio'; ?>
                                                <!--td align="center" style="color: #DF013A; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #DF013A;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #DF013A;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: bold;">High Priority</td-->
                                            @endif
                                        @elseif($d->classification == 3)
                                            @if($d->days_count>5)
                                                <?php $priority = "Moderate Priority"; $class='modprio'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">Moderate Priority</td-->
                                            @else
                                                <?php $priority = "Moderate Priority"; $class='modprio'; ?>
                                                <!--td align="center" style="color: #B505AE; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #B505AE; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #B505AE;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #B505AE;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #B505AE; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="color: #B505AE; font-weight: bold;"><a href="#" style="text-decoration: none; color: #B505AE;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #B505AE; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #B505AE; font-weight: bold;">Moderate Priority</td-->
                                            @endif
                                        @elseif($d->classification == 4)
                                            @if($d->days_count>5)
                                                <?php $priority = "Low Priority"; $class='lowprio'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">Low Priority</td-->
                                            @else
                                                <?php $priority = "Low Priority"; $class='lowprio'; ?>
                                                <!--td align="center" style="color: #045FB4; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #045FB4;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #045FB4;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;"><a href="#" style="text-decoration: none; color: #045FB4;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: bold;">Low Priority</td-->
                                            @endif
                                        @else
                                            @if($d->days_count>5)
                                                <?php $priority = "Undefined"; $class='undef'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: bold;">Undefined</td-->
                                            @else
                                                <?php $priority = "Undefined"; $class='undef'; ?>
                                                <!--td align="center" style="color: #0A610A; font-weight: bold;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #0A610A; font-weight: bold;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #0A610A;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: bold;color: #0A610A;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #0A610A; font-weight: bold;">{{$d->agency}}</td>
                                                <td align="center" style="color: #0A610A; font-weight: bold;"><a href="#" style="text-decoration: none; color: #0A610A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #0A610A; font-weight: bold;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #0A610A; font-weight: bold;">Undefined</td-->
                                            @endif
                                        @endif

                                    @else

                                        @if($d->classification == 1 && $d->confi_name == Auth::user()->f_name)
                                            @if($d->days_count>5)
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Confidential</td-->
                                            @else
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="color: #045FB4; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #045FB4;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #045FB4;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;"><a href="#" style="text-decoration: none; color: #045FB4;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">Confidential</td-->
                                            @endif
                                        @elseif($d->classification == 1 && $d->confi_name == Auth::user()->f_name || $d->classification == 1 && Auth::user()->access_level==5)
                                            @if($d->days_count>5)
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Confidential</td-->
                                            @else
                                                <?php $priority = "Confidential"; $class='confi'; ?>   
                                                <!--td align="center" style="color: #045FB4; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #045FB4;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #045FB4;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;"><a href="#" style="text-decoration: none; color: #045FB4;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">Confidential</td-->
                                            @endif
                                        @elseif($d->classification == 1 && $d->confi_name != Auth::user()->f_name)
                                            @if($d->days_count>5)
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">Confidential</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">Confidential</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Confidential</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Confidential</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Confidential</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Confidential</td-->
                                            @else
                                                <?php $priority = "Confidential"; $class='confi'; ?>
                                                <!--td align="center" style="color: #DF013A; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #DF013A;">Confidential</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #DF013A;">Confidential</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">Confidential</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">Confidential</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">Confidential</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">Confidential</td-->
                                            @endif
                                        @elseif($d->classification == 2)
                                            @if($d->days_count>5)
                                                 <?php $priority = "High Priority"; $class='highprio'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">
                                                    <a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a>
                                                </td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">High Priority</td-->
                                            @else
                                                <?php $priority = "High Priority"; $class='highprio'; ?>
                                                <!--td align="center" style="color: #DF013A; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #DF013A;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #DF013A;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">
                                                    <a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a>
                                                    
                                                </td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #DF013A; font-weight: normal;">High Priority</td-->
                                            @endif
                                        @elseif($d->classification == 3)
                                            @if($d->days_count>5)
                                                <?php $priority = "Moderate Priority"; $class='modprio'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Moderate Priority</td-->
                                            @else
                                                <?php $priority = "Moderate Priority"; $class='modprio'; ?>
                                                <!--td align="center" style="color: #B505AE; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #B505AE; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #B505AE;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #B505AE;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #B505AE; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="color: #B505AE; font-weight: normal;"><a href="#" style="text-decoration: none; color: #B505AE;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #B505AE; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #B505AE; font-weight: normal;">Moderate Priority</td-->
                                            @endif
                                        @elseif($d->classification == 4)
                                            @if($d->days_count>5)
                                                <?php $priority = "Low Priority"; $class='lowprio'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Low Priority</td-->
                                            @else
                                                <?php $priority = "Low Priority"; $class='lowprio'; ?>
                                                <!--td align="center" style="color: #045FB4; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #045FB4;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #045FB4;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;"><a href="#" style="text-decoration: none; color: #045FB4;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #045FB4; font-weight: normal;">Low Priority</td-->
                                            @endif
                                        @else
                                            @if($d->days_count>5)
                                                <?php $priority = "undefined"; $class='undef'; ?>
                                                <!--td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;background: #F4A8A9; color: #434243;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;"><a href="#" style="text-decoration: none; color: #DF013A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="background: #F4A8A9; color: #434243; font-weight: normal;">Undefined</td-->
                                            @else
                                                <?php $priority = "undefined"; $class='undef'; ?>
                                                <!--td align="center" style="color: #0A610A; font-weight: normal;">{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                                <td align="center" style="color: #0A610A; font-weight: normal;">{{$d->barcode}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #0A610A;">{{$d->doctitle}}</td>
                                                <td align="left" style="white-space: pre-wrap; font-weight: normal;color: #0A610A;">{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                                <td align="center" style="color: #0A610A; font-weight: normal;">{{$d->agency}}</td>
                                                <td align="center" style="color: #0A610A; font-weight: normal;"><a href="#" style="text-decoration: none; color: #0A610A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}"
       class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                                <td align="center" style="color: #0A610A; font-weight: normal;">{{$d->days_count}}</td>
                                                <td align="center" style="color: #0A610A; font-weight: normal;">Undefined</td-->
                                            @endif
                                        @endif
                                    @endif
                                        <?php if ($priority != null): ?>
                                            <td>{{date('M d, Y', strtotime($d->doc_receive))}}</td>
                                            <td>{{$d->barcode}}</td>
                                            <td>{{$d->doctitle}}</td>
                                            <td style='white-space: normal;'>{!! Str::limit($d->description, 100, ' ...') !!}</td>
                                            <td>{{$d->agency}}</td>
                                            <td><a href="#" style="text-decoration: none; color: #0A610A;" data-toggle="tooltip" data-placement="auto" title="" data-original-title="<b>Latest Action:</b><br>{{$d->destination}}<br>{{ $d->date_forwared }}<br><br>{{$d->remarks}}" class="rem-tooltip" data-html="true">{{$d->status}}</a></td>
                                            <td>{{$d->days_count}}</td>
                                            <td> 
                                                <?php 
                                                    echo "<p class='{$class}'>".$priority."</p>"; 
                                                ?>
                                            </td>
                                        <?php endif; ?>
                                    @if($d->days_count>5)
                                        <!--td align="center">
                                            @if($d->confi_name == Auth::user()->f_name && $d->classification == 1 || $d->classification == 1 && Auth::user()->access_level==5)
                                                <a href="{{url('/internal-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-success pl-4 pr-4"><span class="fa fa-envelope-open-o" aria-hidden="true"></span> View</a>
                                            @elseif($d->classification != 1)
                                                <a href="{{url('/internal-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-success pl-4 pr-4"><span class="fa fa-envelope-open-o" aria-hidden="true"></span> View</a>
                                            @endif
                                            @if($d->status=='complete' && Auth::user()->division == $d->dept)
                                                @if(Auth::user()->access_level==5)
                                                    <br>
                                                    <a href="javascript:void(0);" id="{{$d->ref_id}}" class="go_edit_btn btn btn-small btn-danger mt-2  pl-4 pr-4"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </a>
                                                @endif
                                            @else
                                                    <br>
                                                @if($d->confi_name == Auth::user()->f_name && $d->classification == 1)
                                                    <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-primary mt-2  pl-3 pr-3"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Action</a>
                                                @elseif($d->confi_name != Auth::user()->f_name && $d->classification == 1)
                                                    <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-primary mt-2  pl-3 pr-3"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Action</a>
                                                @elseif($d->classification != 1)
                                                    <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-primary mt-2  pl-3 pr-3"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Action</a>
                                                @endif

                                                @if(Auth::user()->access_level==5)
                                                    <br>
                                                    <a href="javascript:void(0);" id="{{$d->ref_id}}" class="go_edit_btn btn btn-small btn-danger mt-2  pl-4 pr-4"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </a>
                                                @endif
                                            @endif
                                        </td-->
                                    @else
                                        <!--td align="center" >
                                            @if($d->confi_name == Auth::user()->f_name && $d->classification == 1 || $d->classification == 1 && Auth::user()->access_level==5)
                                                <a href="{{url('/internal-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-success pl-4 pr-4"><span class="fa fa-envelope-open-o" aria-hidden="true"></span> View</a>
                                            @elseif($d->classification != 1)
                                                <a href="{{url('/internal-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-success pl-4 pr-4"><span class="fa fa-envelope-open-o" aria-hidden="true"></span> View</a>
                                            @endif
                                            @if($d->status=='complete' && Auth::user()->division == $d->dept)
                                                @if(Auth::user()->access_level==5)
                                                    <br>
                                                    <a href="javascript:void(0);" id="{{$d->ref_id}}" class="go_edit_btn btn btn-small btn-danger mt-2  pl-4 pr-4"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </a>
                                                @endif
                                            @else
                                                    <br>
                                                @if($d->confi_name == Auth::user()->f_name && $d->classification == 1)
                                                    <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-primary mt-2  pl-3 pr-3"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Action</a>
                                                @elseif($d->confi_name != Auth::user()->f_name && $d->classification == 1)
                                                    <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-primary mt-2  pl-3 pr-3"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Action</a>
                                                @elseif($d->classification != 1)
                                                    <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-primary mt-2  pl-3 pr-3"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span> Action</a>
                                                @endif

                                                @if(Auth::user()->access_level==5)
                                                    <br>
                                                    <a href="javascript:void(0);" id="{{$d->ref_id}}" class="go_edit_btn btn btn-small btn-danger mt-2  pl-4 pr-4"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </a>
                                                @endif
                                            @endif
                                        </td-->
                                    @endif
                                    </tr>
                                    <tr class='dontdisplay'>
                                        <td style="text-align: left;" colspan="8">
                                            <div style='display: contents;' class='theactionbtns'>
                                                @if($d->confi_name == Auth::user()->f_name && $d->classification == 1 || $d->classification == 1 && Auth::user()->access_level==5)
                                                    <?php if ($window == "internal") { ?>
                                                        <a href="{{url('/internal-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-small btn-default"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>View</a>
                                                    <?php } else if ($window == "external") { ?>
                                                        <a href="{{url('/external-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-small btn-default"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>View</a>
                                                    <?php } else if ($window == "outgoing") { ?>
                                                        <a href="{{url('/outgoing-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-small btn-default"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>View</a>
                                                    <?php } ?>
                                                @elseif($d->classification != 1)
                                                    <?php if ($window == "internal") { ?>
                                                        <a href="{{url('/internal-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-small btn-default"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>View</a>
                                                    <?php } else if ($window == "external") { ?>
                                                        <a href="{{url('/external-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-small btn-default"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>View</a>
                                                    <?php } else if ($window == "outgoing") { ?>
                                                        <a href="{{url('/outgoing-document-track-list-view/view-document-tracking')}}/{{$d->ref_id}}" id="{{$d->id}}" class="btn btn-small btn-default"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>View</a>
                                                    <?php } ?>
                                                @endif
                                                @if($d->status=='complete' && Auth::user()->division == $d->dept)
                                                    @if(Auth::user()->access_level==5)
                                                        <a href="javascript:void(0);" id="{{$d->ref_id}}" class="go_edit_btn btn btn-small btn-default mt-2  pl-4 pr-4"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </a>
                                                    @endif
                                                @else
                                                    @if($d->confi_name == Auth::user()->f_name && $d->classification == 1)
                                                        <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-default"><span class="fa fa-paper-plane-o" aria-hidden="true"></span> Forward </a>
                                                    @elseif($d->confi_name != Auth::user()->f_name && $d->classification == 1)
                                                        <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-default"><span class="fa fa-paper-plane-o" aria-hidden="true"></span> Forward</a>
                                                    @elseif($d->classification != 1)
                                                        <a href="#" id="{{$d->ref_id}}" class="btn-ff btn btn-default"><span class="fa fa-paper-plane-o" aria-hidden="true"></span> Forward</a>
                                                    @endif

                                                    @if(Auth::user()->access_level==5)
                                                        <a href="javascript:void(0);" id="{{$d->ref_id}}" class="go_edit_btn btn btn-small btn-default"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </a>
                                                    @endif
                                                @endif
                                            </div>
                                        </td>
                                </tr>
    							@endforeach

    	                       </tbody>
    						</table>

                            @else
                                <div style="font-size: 16px; color: #7b7b7b; text-align: center;border: 1px dashed #ccc; margin: 10px;" class="justify-content-center p-5">No Record Found</div>
                            @endif

    						<!--@if($data->count() > 0)-->
								<div class="justify-content-center" style="font-size: 10px; margin-top: 10px; margin-bottom: 50px;">
                                    <!--{{ $data->links() }}-->
                                    <?php 
                                        if (isset($_GET['sort']) && isset($_GET['order'])) {
                                            echo $data->appends(["sort"=>$_GET['sort'], "order"=>$_GET['order']])->render();
                                        } else {
                                            echo $data->render();
                                        }
                                    ?>
                                </div>
							<!--@endif-->

                           

    					<!--Content End-->
    					</section>
    				</div>

				
			</div>
		</div>
	</div>
</div>


<!-- Forward Modal -->


<div class="modal fade" id="doc-ff" tabindex="-1" role="dialog" aria-labelledby="ff-modal-label" aria-hidden="true">
  <div class="modal-dialog  modal-lg" style="min-width: auto; max-width: 50%"  role="document">
    <div class="modal-content">
      <div class="modal-header"><span style="font-size: 17px; color: #97918F; text-align: center;"><strong>Forwarding of document</strong></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.reload();">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <span id="form_result"></span>
            <table style="table-layout:fixed;border-collapse: collapse;">
                <tr>
                    <th style="font-size: 15px; color: #0B3861;" text-align="left"> 
                        Level of priority
                    </th>
                    <td> 
                        <select class="form-control btn btn-primary" id="docclassification" name="docclassification" onchange="checkClass()" style="width: 130px;"></select>
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 15px; color: #0B3861;" text-align="left">Forward to:</th>
                    <td class="p-3" style="border-bottom: none;">
                        <p> Division </p>
                        <select id='divisionselect' class='btn btn-default' style='width: 100%;'>
                            <optgroup label="Division">
                                <?php 
                                        if ($div->count()>0) {
                                            foreach($div as $d) {
                                                if (strlen($d->division) > 0) {
                                                    echo "<option value='{$d->division}'>";
                                                        echo $d->division;
                                                    echo "</option>";
                                                }
                                            }
                                        }
                                    
                                ?>
                            </optgroup>
                        </select>

                        <input list="divisions" placeholder="Division" name="ff_divisions" id="ff_divisions" class="form-control" onchange="getUserList(this);" style='display:none;'>
                        <datalist id="divisions">
                            @if($div->count()>0)
                            @foreach($div as $d)
                                <option value="{{ $d->division }}"></option>
                            @endforeach
                            @endif
                        </datalist>

                        <input type="hidden" id="optselect" name="optselect">
                    </td>
                    <!-- mark here -->
                    <input type="hidden" id="_id" name="_id" value="">
                    <input type="hidden" id="person" name="person" value="">

                <!--/tr>
                <tr-->
                    
                    <td colspan="2" valign="middle" class="mt-1" align="left" style="margin-left: -5px !important;">
                        <p> Employee Name </p>
                        <input list="userlist" placeholder="MinDA Employee" name="ff_employees" id="ff_employees" class="form-control">
                            <datalist id="userlist">
                                @if($userlist->count()>0)
                                    @foreach($userlist as $l)
                                        <option value="{{ $l->f_name }}" data-empid="{{$l->id}}">
                                    @endforeach
                                @endif
                            </datalist>
                    </td>
                    <td style='padding: 0px;'>
                        <p> &nbsp; </p>
                        <button class='btn btn-default' id='addthisemp'> Add </button>                        
                    </td>
                </tr>
                <tr>
                    <td colspan="5" align="center"><span style="font-style: italic;">"Note: double-click the box or down arrow to show the list"</span></td>
                </tr>
        </table>
        <table>
                <tr style='border-top:1px solid #ccc; border-bottom: 1px solid #ccc;'>
                    <th style="font-size: 15px; color: #0B3861;" align="left">Action</th>
                    <!--th style="font-size: 15px; color: #0B3861;" align="left">Specific Instruction <span id='insfor'> </span> </th-->
                    <th style="font-size: 15px; color: #0B3861;" align="left"> Recipients </th>
                    <td> &nbsp; </td>
                </tr>
                <tr>
                    <td align="left" style="word-wrap: break-word; vertical-align:top;" >
                        <p>
                            <input type="checkbox" name="for_appro_action" id="for_appro_action" style="vertical-align: text-bottom;"><b> <label for='for_appro_action'>for appropriate action </label></b>
                        </p>
                        <p>
                            <input type="checkbox" name="for_info" id="for_info" style="vertical-align: text-bottom; font-weight: bold;"><b> <label for='for_info'> for information </label> </b>
                        </p>
                        <p>
                            <input type="checkbox" name="for_reference" id="for_reference" style="vertical-align: text-bottom; font-weight: bold;"><b> <label for='for_reference'> for reference </label></b>
                        </p>
                        <p>
                            <input type="checkbox" name="for_guidance" id="for_guidance" style="vertical-align: text-bottom; font-weight: bold;"><b> <label for='for_guidance'> for guidance </label></b>
                        </p>
                        <p>
                            <input type="checkbox" name="for_review" id="for_review" style="vertical-align: text-bottom;"><b> <label for='for_review'> for review and evaluation </label></b>
                        </p>
                        <p>
                            <input type="checkbox" name="for_signature" id="for_signature" style="vertical-align: text-bottom;"><b> <label for='for_signature'> for approval/signature </label> </b>
                        </p>
                        <p>
                            <input type="checkbox" name="for_instruction" id="for_instruction" style="vertical-align: text-bottom;"><b> <label for='for_instruction'> for instruction </label> </b>
                        </p>
                    </td>
                    <td style="vertical-align: top;">
                        <div id='recipientsbox'>

                        </div>
                        <!--p> <input type="text" style="padding: 10px;width: 100%;border: 1px solid #ccc;border-radius: 4px;"> </p>
                        <p> <button class='btn btn-default'> Add Instruction </button> </p-->
                    </td>
                    <td style='vertical-align: top;'>
                        <!--div>
                            <p> Presentation </p>
                        </div-->
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td align="left" class="p-3" style="border-bottom: none; background: #fff">
                        <label for="remarks" style="font-size: 15px; color: #0B3861;" >Remarks</label><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea id="remarks" name="remarks" rows="3" style="width: 100%; max-width: 100%;border: 1px solid #ccc;border-radius: 4px;resize: none;padding: 10px;" placeholder=""></textarea>
                    </td>
                </tr>
                
                <tr id="busywait" style="display: none;">
                    <td colspan="2" align="center"><span style="color: #3A01DF;"><img src="{{ url('/images/busy_wait.gif') }}" height="40px">
                        <b>Sending mails... Please wait...</b></span>
                    </td>
                </tr>

            </table>

            <div class="modal-footer">
                <table>
                    <tr>
                        {{--<input type="hidden" id="completedoc" name="completedoc" value="{{$data[0]->retdoc}}">--}}

                        <td class="p-3" style="border-top: solid thin #fff;">
                            <span style="float: left;" class="mr-3">
                            @if(Auth::user()->access_level==4)
                                <a href="javascript:void(0);" class="go_approve btn btn-small btn-default mr-3"><span class="fa fa-smile-o" aria-hidden="true"></span> Approve</a>

                                <a href="javascript:void(0);" class="go_disapprove btn btn-small btn-default mr-3"><span class="fa fa-frown-o" aria-hidden="true"></span> Disapprove</a>
                            @elseif(Auth::user()->access_level==5 and Auth::user()->division=='AD')
                                <a href="javascript:void(0);" class="go_approve btn btn-small btn-default mr-3"><span class="fa fa-smile-o" aria-hidden="true"></span> Approve</a>

                                <a href="javascript:void(0);" class="go_disapprove btn btn-small btn-default mr-3"><span class="fa fa-frown-o" aria-hidden="true"></span> Disapprove</a>
                            @endif

                            <a href="javascript:void(0);" class="go_complete btn btn-small btn-success mr-3"><span class="fa fa-check-square-o" aria-hidden="true"></span> Complete</a>

                            </span>
                            <span style='float:right;'> 
                                <a href="javascript:void(0);" class="go_btn btn btn-small btn-primary"><span class="fa fa-share-square-o" aria-hidden="true"></span> Forward</a>    
                            </span>
                        </td>
                    </tr>
                </table>
                <div id='mailstatus' style="width: 100%;background: #f9f9f9;text-align: left;font-weight: normal;">

                </div>
            </div>

    </div>

  </div>
</div>


<!-- Edit Modal -->
<div class="modal fade" id="doc-edit" tabindex="-1" role="dialog"aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog  modal-lg" style="min-width: auto; max-width: 50%;"  role="document">
    <div class="modal-content">
      <div class="modal-header"><span style="font-size: 24px; color: #FF4000; text-align: center;"><strong>EDIT DOCUMENT</strong></span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.reload();"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <span id="form_result"></span>

      <table border="1px #fff solid;" style="align-self: center;" width="auto">

        <tr>
            <td><span style="margin-left: 30px;">Date</span></td>
            <td><input class="form-control ml-5" style="width: auto;" type="date" name="docdate" id="docdate" value="" required placeholder="Date Received" title="Date Received"></td>
        </tr>
        <tr>
            <td><span style="margin-left: 30px;">Briefer Number</span></td>
            <td><input class="form-control ml-5" style="width: 200px;" type="text" name="briefer" id="briefer" value="" required placeholder="Briefer Number"></td>
        </tr>
        <tr>
            <td><span style="margin-left: 30px;">Barcode</span></td>
            <td><input class="form-control ml-5" style="width: 200px;" type="text" name="barcode" id="barcode" value="" required placeholder="Barcode Number"></td>
        </tr>
        <tr>
            <td><span style="margin-left: 30px;">Division/Office</span></td>
            <td>
                <input list="division_datalist" name="agency" id="agency" class="form-control ml-5" style="width: 200px;" required placeholder="Division/Office"></td>
                                        <datalist id="division_datalist">
                                            @if($div->count()>0)
                                            @foreach($div as $u)
                                                <option value="{{ $u->division }}">
                                            @endforeach
                                            @endif
                                        </datalist>
                                        <input type="hidden" id="userselect" name="userselect">
            </td>
        </tr>
        <tr>
            <td><span style="margin-left: 30px;">Routed to</span></td>
            <td>
            
                <input list="user_datalist" name="signature" id="signature" class="form-control ml-5" style="width: 200px;" required placeholder="Signatory"></td>
                                        <datalist id="user_datalist">
                                            @if($userlist->count()>0)
                                            @foreach($userlist as $u)
                                                <option value="{{ $u->f_name }}">
                                            @endforeach
                                            @endif
                                        </datalist>
                                        <input type="hidden" id="userselect" name="userselect">
                
            </td>
        </tr>
        <tr>
            <td><span style="margin-left: 30px;">Document Category/Type</span></td>
            <td>
                <input list="memo_datalist" name="doctitle" id="doctitle" class="form-control ml-5" style="width: 300px;" required placeholder="Document Category/Type"></td>
                                        <datalist id="memo_datalist">
                                            @if($lib->count()>0)
                                            @foreach($lib as $l)
                                                <option value="{{ $l->doc_full_desc }}">
                                            @endforeach
                                            @endif
                                        </datalist>
                                        <input type="hidden" id="optselect" name="optselect">
            </td>
        </tr>
        <tr>
            <td><span style="margin-left: 30px;">Document Description</span></td>
            <td>
                <input class="form-control mr-5  ml-5" style="width: 300px;" type="text" name="docdesc" id="docdesc" placeholder="Subject/Description" value='' required>
                <!--textarea class="form-control mr-5  ml-5" style="width: 300px;" name="docdesc" id="docdesc" placeholder="Subject/Description"></textarea-->
            </td>
        </tr>
        <tr>
            <td colspan="2"><span style="margin-left: 30px;">
                <input type="checkbox" name="chkdocreturn" id="chkdocreturn" class="checkbox-success" style="vertical-align: text-bottom;"> Return this Document
            </td>
        </tr>
        <input type="hidden" name="edit_id" id="edit_id" value="">

        <tr>
            <td colspan="2">
                <button class="btn-upload btn btn-warning">
                    <span class="fa fa-paperclip" aria-hidden="true"></span> Attach Files </button> 
                <button class="btn_save btn btn-success" style="padding-left: 20px; padding-right: 20px; float: right;">
                    <span class="fa fa-floppy-o" aria-hidden="true"></span> Save</button>
            </td>
        </tr>
    </table>
  </div>
</div>
</div>


<script src="{{ asset('js/moment.min.js') }}"></script>
<script>
    $(document).ready(function() {

        // alert(getOffset(".selected").left);
        // uniqueclassselected

        var opened = false;
        $(document).find("#theheaderdiv").on("click",function(){
            if (opened == false) {
                opened = true;
                $("#theheaderdiv").css("height","auto");
            } else {
                opened = false;
                $("#theheaderdiv").css("height","41px");
            }
        });

        var dropdownshow = true;
        $(document).find(".theinnertbl tr th span").on("click", function(){
            if (dropdownshow == true) {
                dropdownshow = false;
                $(this).find(".dropdivdown").show();

                $(this).find("#sortid").removeClass('fa-angle-double-down');
                $(this).find("#sortid").addClass('fa-angle-double-up');
            } else {
                $(this).find(".dropdivdown").hide();
                dropdownshow = true;    

                $(this).find("#sortid").addClass('fa-angle-double-down');
                $(this).find("#sortid").removeClass('fa-angle-double-up');
            }
        });

        $(document).find(".theinnertbl tbody tr.withcontent").on("click",function(){
            $(this).siblings().removeAttr("style");
            $(this).siblings().removeClass("selectedtr");

            $(this).addClass("selectedtr");
            $(this).next().addClass("selectedtr").show();

            var table       = null;

            var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
            var id          = $(this).data("theid");

            var typeinput = null;
            typeinput = $(document).find("#type_input").val();

            if (typeinput == "internal") {
                table = "internal_history";
            } else if (typeinput == "external") {
                table = "external_history";
            } else if (typeinput == "outgoing") {
                table = "outgoing_history";
            }

            $(this).siblings().find(".lastaction").remove();

            var dis = $(this).siblings(".selectedtr td");

            $.ajax({
                url: "{{ url('admin/gethistory') }}",
                type: "POST",
                data: {_token: CSRF_TOKEN,id: id, table : table},
                success : function(data){
                    $("<p class='lastaction'>"+data['history']+"</p>").appendTo(".dontdisplay td");
                }, error : function() {
                    window.location.href = "{{ url('/login') }}";
                }
            });
            
        });

        // internal, external, outgoing
        var typeinput = null;
            typeinput = $(document).find("#type_input").val();

        $(document).find("#thedatefilterinput").on("change",function(){
            var thedateval = $(this).val();

            // 2022-09-21
            var themonths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
            var year  = thedateval.split("-")[0];
            var month = themonths[thedateval.split("-")[1]-1];
            var day   = thedateval.split("-")[2];

            var theurl = null;

            if (typeinput == "internal") {
                theurl = "{{ url('internal-document/filter-date/') }}/"+month+" "+day+","+year;
            } else if (typeinput == "external") {
                theurl = "{{ url('external-document/filter-date/') }}/"+month+" "+day+","+year;
            } else if (typeinput == "outgoing") {
                theurl = "{{ url('outgoing-document/filter-date/') }}/"+month+" "+day+","+year;
            }

            var datelink = theurl;
            window.location.href =datelink ;
        });

        // set the default value
            // division            
            var defval = $(document).find("#divisionselect").val();
        //    getUserList(false,defval);

            $(document).find("#ff_divisions").val(defval);

            // employees 
            $(document).find("#ff_employees").val("");

            $(document).on("change keyup paste","#ff_employees" ,function() {
                var thename = $(this).val();
                $(document).find("#insfor").text("for "+thename);
            });

        // end 

        $(document).on("click","#addthisemp",function(){
            var theemp = $(document).find("#ff_employees").val();
                         $(document).find("#ff_employees").val("");

                $("<p>"+theemp+"</p>")
                    .on("click", function(){
                        var conf = confirm("are you sure you want to remove?");

                        if (conf) { // confirmed delete
                            $(this).remove();
                        }
                    }).appendTo("#recipientsbox");
        });

        $(document).on("change","#divisionselect",function(){
            var theval = $(this).val();

            getUserList(false, theval);

            $(document).find("#ff_divisions").val( theval );
        });

        $(document).on("click", ".btn-ff", function() {
            var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
            var id   = $(this).attr("id");
            var alvel = $('input#q_user_level').val(); 

            //alert(alvel);

            var theval = $(document).find("#divisionselect").val();
            getUserList(false, theval);

            var theurl = null;

            if (typeinput == "internal") {
                theurl = "{{ url('/internal-document/document-return-category') }}/"+id;
            } else if (typeinput == "external") {
                theurl = "{{ url('/external-document/document-return-category') }}/"+id;
            } else if (typeinput == "outgoing") {
                theurl = "{{ url('/outgoing-document/document-return-category') }}/"+id;
            }

            $.ajax({
                url: theurl,
                type: "GET",
                data: {_token: CSRF_TOKEN,_id: id, typeinput : typeinput},

                success: function(response){
                    console.log(response);

                    $('input#completedoc').val(response.data[0].retdoc);

                    //$('input#docclassification').val('3');
                    //$('.id_100 option[value=val2]').attr('selected','selected');

                    var $dropdown = $('#docclassification');
                    var cls = response.data[0].classification;
                    $dropdown.val('').text('');

                        if(cls==1){
                            $dropdown.append($("<option selected/>").val('1').text('Confidential'));
                            $dropdown.append($("<option />").val('2').text('High Priority'));
                            $dropdown.append($("<option />").val('3').text('Moderate Priority'));
                            $dropdown.append($("<option />").val('4').text('Low Priority'));
                            $dropdown.append($("<option />").val('5').text('Undefined'));
                        }else if(cls==2){
                            $dropdown.append($("<option />").val('1').text('Confidential'));
                            $dropdown.append($("<option selected/>").val('2').text('High Priority'));
                            $dropdown.append($("<option />").val('3').text('Moderate Priority'));
                            $dropdown.append($("<option />").val('4').text('Low Priority'));
                            $dropdown.append($("<option />").val('5').text('Undefined'));
                        }else if(cls==3){
                            $dropdown.append($("<option />").val('1').text('Confidential'));
                            $dropdown.append($("<option />").val('2').text('High Priority'));
                            $dropdown.append($("<option selected/>").val('3').text('Moderate Priority'));
                            $dropdown.append($("<option />").val('4').text('Low Priority'));
                            $dropdown.append($("<option />").val('5').text('Undefined'));
                        }else if(cls==4){
                            $dropdown.append($("<option />").val('1').text('Confidential'));
                            $dropdown.append($("<option />").val('2').text('High Priority'));
                            $dropdown.append($("<option />").val('3').text('Moderate Priority'));
                            $dropdown.append($("<option selected/>").val('4').text('Low Priority'));
                            $dropdown.append($("<option />").val('5').text('Undefined'));
                        }else{
                            $dropdown.append($("<option />").val('1').text('Confidential'));
                            $dropdown.append($("<option />").val('2').text('High Priority'));
                            $dropdown.append($("<option />").val('3').text('Moderate Priority'));
                            $dropdown.append($("<option />").val('4').text('Low Priority'));
                            $dropdown.append($("<option selected/>").val('5').text('Undefined'));
                        }
                    
                    $('input#_id').val(id);

                    if(response.data[0].retdoc == 1 && alvel != 5){
                        //document.getElementsByClassName('go_complete').style.display='none';
                        document.querySelector('.go_complete').style.display='none';
                    }

                    $('#doc-ff').modal('show');
                    
                  },
                  error: function(ex){
                    //alert(JSON.stringify(ex));
                    window.location.href="{{ url('/home') }}";
                  },
                });
                //ex.preventDefault();


            
            //checkClass(); 
            setTimeout(function (){
                $('input#ff_divisions').focus();
                
            }, 1000);
        });       
    });


    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();

    var recipients_lists = [];

    var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

    //document.getElementById("date").innerHTML = months[n.getMonth()] + " " + d + ", " + y;
    //document.getElementById("date").innerHTML = months[n.getMonth()] + " " + y;

    $(document).on("click", ".go_btn", function(e) {
        var CSRF_TOKEN  =   $('meta[name="csrf-token"]').attr('content');
        var dept        =   $('input#ff_divisions').val(); // mark here
        var x_id        =   $('input#_id').val();
        var rem         =   $('textarea#remarks').val();

        /*
        var faction     =   $('input#for_appro_action').val();
        var finfo       =   $('input#for_info').val();
        var fguidance   =   $('input#for_guidance').val();
        var freference  =   $('input#for_reference').val();
        var freview  =   $('input#for_review').val();
        */

        //alert(dept);

        if (document.getElementById('for_appro_action').checked) {
            var faction = 1;
        } else {
             var faction = 0;
        }

        if (document.getElementById('for_info').checked) {
            var finfo = 1;
        } else {
             var finfo = 0;
        }

        if (document.getElementById('for_guidance').checked) {
            var fguidance = 1;
        } else {
             var fguidance = 0;
        }

        if (document.getElementById('for_reference').checked) {
            var freference = 1;
        } else {
             var freference = 0;
        }

        if (document.getElementById('for_review').checked) {
            var freview = 1;
        } else {
             var freview = 0;
        }

        if (document.getElementById('for_signature').checked) {
            var fsignature = 1;
        } else {
             var fsignature = 0;
        }

        if (document.getElementById('for_instruction').checked) {
            var finstruction = 1;
        } else {
             var finstruction = 0;
        }

        var pr          = $('#docclassification option:selected').val();
        var confiname   =   $('input#ff_employees').val();

        if(dept.length === 0){
            //alert("Please specify the Division you want to forward this document");
            swal({
                              position: 'center',
                              icon: 'info',
                              title: 'Please specify the Division  you want to forward this document',
                              showConfirmButton: false
                            });
        }else{

            document.getElementById('busywait').style.display = "table-row";

            var els = $(document).find("#recipientsbox").children("p");

            for(var i=0;i<=els.length-1;i++) {
                // innerText
                recipients_lists.push(els[i].innerText);
            }

            // console.log(els[0].innerText);

        //    return;
        // send email
            forwardtoemps(0,CSRF_TOKEN,x_id,rem,dept,faction,finfo,fguidance,freference,freview,fsignature,finstruction,confiname,pr);
        //     document.getElementById('busywait').style.display = "none"; 
        //    window.location.reload();
            e.preventDefault();
            
        }
        
    });
    
    function forwardtoemps(startswith, CSRF_TOKEN,x_id,rem,dept,faction,finfo,fguidance,freference,freview,fsignature,finstruction,confiname,pr) {

        var typeinput = null;
            typeinput = $(document).find("#type_input").val();


        var theurl = null;

            if (typeinput == "internal") {
                theurl = "{{ url('/internal-document/forward') }}/"+x_id;
            } else if (typeinput == "external") {
                theurl = "{{ url('/external-document/forward') }}/"+x_id;
            } else if (typeinput == "outgoing") {
                theurl = "{{ url('/outgoing-document/forward') }}/"+x_id;
            }

        $.ajax({
                url: theurl,
                type: "POST",
                data: {_token: CSRF_TOKEN,
                       _id: x_id,
                       remarks: rem, 
                       division: dept, 
                       for_appro_action: faction, 
                       for_info:finfo, 
                       for_guidance:fguidance, 
                       for_reference:freference, 
                       for_review:freview, 
                       for_signature:fsignature,
                       for_instruction:finstruction,
                       confi:recipients_lists[startswith],
                       _classification:pr},

                success: function(response){
                    console.log(response);

                    //tempAlert("Document forwarded successfully save.",2000);

                    // sent email here
                    $("<p> Mail is sent to "+recipients_lists[startswith]+" </p>").appendTo("#mailstatus");

                    // swal({
                    //           position: 'center',
                    //           icon: 'info',
                    //           title: 'Document forwarded successfully.',
                    //           showConfirmButton: false,
                    //           timer: 1500
                    //         });

                    if (startswith < recipients_lists.length-1) {
                        var thenewstart = startswith+1;
                        forwardtoemps(thenewstart, CSRF_TOKEN,x_id,rem,dept,faction,finfo,fguidance,freference,freview,fsignature,finstruction,confiname,pr);
                    }

                    if (startswith == recipients_lists.length-1) {
                        document.getElementById('busywait').style.display = "none";    
                    }

                    //$('#doc-ff').modal('hide');
                    //window.location.href="{{ url('/internal-document-list-view') }}";
                    
                  },
                  error: function(ex){
                    swal({
                              position: 'center',
                              icon: 'error',
                              title: 'Sending mail failed!, please check your internet connection and Email Addresses',
                              showConfirmButton: false
                            });
                    //alert(JSON.stringify(ex));
                    // window.location.href="{{ url('/home') }}";
                  },
                });
    }
    
    $(document).on("click", ".go_complete", function(e) {
        var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
        var dept        =   $('input#ff_divisions').val();
        var x_id        =   $('input#_id').val();

            var typeofinput = null;
                typeofinput = $(document).find("#type_input").val();

            var theurl   = null;

            if (typeofinput == "internal") {
                theurl   = "{{ url('/internal-document/doc-tracking-complete') }}/"+x_id;
            } else if (typeofinput == "external") {
                theurl = "{{ url('/external-document/doc-tracking-complete') }}/"+x_id;
            } else if (typeofinput == "outgoing") {
                theurl = "{{ url('/outgoing-document/doc-tracking-complete') }}/"+x_id;
            }

            $.ajax({
                url: theurl,
                type: "POST",
                data: {_token: CSRF_TOKEN,_id: x_id,division: dept},

                success: function(response){
                    console.log(response);

                    //tempAlert("Document tacking Complete.",2000);

                    swal({
                              position: 'center',
                              icon: 'info',
                              title: 'Document tacking Complete.',
                              showConfirmButton: false,
                              timer: 1500
                            });

                    $('#doc-ff').modal('hide');
                    window.location.href="{{ url('/internal-document-list-view') }}";
                  },
                  error: function(ex){
                    //alert(JSON.stringify(ex));
                    window.location.href="{{ url('/home') }}";
                  },
                });
                e.preventDefault();
            
    });

    $(document).on("click", ".go_approve", function(e) {

        var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
        var dept        =   $('input#ff_divisions').val();
        var x_id        =   $('input#_id').val();

            var typeofinput = null;
                typeofinput = $(document).find("#type_input").val();

            var theurl   = null;

            if (typeofinput == "internal") {
                theurl   = "{{ url('/internal-document/doc-tracking-approve') }}/"+x_id;
            } else if (typeofinput == "external") {
                theurl = "{{ url('/external-document/doc-tracking-approve') }}/"+x_id;
            } else if (typeofinput == "outgoing") {
                theurl = "{{ url('/outgoing-document/doc-tracking-approve') }}/"+x_id;
            }

            $.ajax({
                url: "{{ url('') }}/"+x_id,
                type: "POST",
                data: {_token: CSRF_TOKEN,_id: x_id,division: dept},

                success: function(response){
                    console.log(response);

                    //tempAlert("Document Approve",2000);

                    swal({
                              position: 'center',
                              icon: 'info',
                              title: 'Document Approve.',
                              showConfirmButton: false,
                              timer: 1500
                            });

                    $('#doc-ff').modal('hide');
                    window.location.href="{{ url('/internal-document-list-view') }}";
                  },
                  error: function(ex){
                    //alert(JSON.stringify(ex));
                    window.location.href="{{ url('/home') }}";
                  },
                });
                e.preventDefault();

    });

    $(document).on("click", ".go_disapprove", function(e) {

        var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
        var dept        =   $('input#ff_divisions').val();
        var x_id        =   $('input#_id').val();

            var typeofinput = null;
                typeofinput = $(document).find("#type_input").val();

            var theurl   = null;

            if (typeofinput == "internal") {
                theurl   = "{{ url('/internal-document/doc-tracking-disapprove') }}/"+x_id;
            } else if (typeofinput == "external") {
                theurl = "{{ url('/external-document/doc-tracking-disapprove') }}/"+x_id;
            } else if (typeofinput == "outgoing") {
                theurl = "{{ url('/outgoing-document/doc-tracking-disapprove') }}/"+x_id;
            }

            $.ajax({
                url: theurl,
                type: "POST",
                data: {_token: CSRF_TOKEN,_id: x_id,division: dept},

                success: function(response){
                    console.log(response);

                    //tempAlert("Document Approve",2000);

                    swal({
                              position: 'center',
                              icon: 'info',
                              title: 'Document Disapprove.',
                              showConfirmButton: false,
                              timer: 1500
                            });

                    $('#doc-ff').modal('hide');
                    window.location.href="{{ url('/internal-document-list-view') }}";
                  },
                  error: function(ex){
                    //alert(JSON.stringify(ex));
                    window.location.href="{{ url('/home') }}";
                  },
                });
                e.preventDefault();

    });


    $(document).ready(function() {

        $(document).on("keyup","#q", function(e){
            if (e.key == "Enter" || e.key == "enter" || e.key == "ENTER") {
                //var x = document.getElementById("q").value;

                var x =  $('input#q').val();

                var typeinput = null;
                    typeinput = $(document).find("#type_input").val();

                var theurl = null;

                if (typeinput == "external") {
                    theurl = "{{ url('/external-document/search-document') }}/"+x;
                } else if (typeinput == 'internal') {
                    theurl = "{{ url('/internal-document/search-document') }}/"+x;
                } else if (typeinput == 'outgoing') {
                    theurl = "{{ url('/outgoing-document/search-document') }}/"+x;
                }

                if(x.length > 0){
                    window.location = theurl;
                }else{
                    swal({
                                  position: 'center',
                                  icon: 'warning',
                                  dangerMode: true,
                                  title: 'Search Criteria is empty!',
                                  showConfirmButton: false,
                                  timer: 1500
                                });
                }
            }
        });

        $(document).on("click", ".searchbtn", function() {
             //var x = document.getElementById("q").value;

            var x =  $('input#q').val();

            var typeinput = null;
                typeinput = $(document).find("#type_input").val();

            var theurl = null;

            if (typeinput == "external") {
                theurl = "{{ url('/external-document/search-document') }}/"+x;
            } else if (typeinput == 'internal') {
                theurl = "{{ url('/internal-document/search-document') }}/"+x;
            } else if (typeinput == 'outgoing') {
                theurl = "{{ url('/outgoing-document/search-document') }}/"+x;
            }

            if(x.length > 0){
                window.location = theurl;
            }else{
                swal({
                              position: 'center',
                              icon: 'warning',
                              dangerMode: true,
                              title: 'Search Criteria is empty!',
                              showConfirmButton: false,
                              timer: 1500
                            });
            }
        });

        $(document).on("keyup","#qsearchtxt", function(e){
            if (e.key == "Enter" || e.key == "enter" || e.key == "ENTER") {
                var x =  $('input#qsearchtxt').val();

                var typeinput = null;
                    typeinput = $(document).find("#type_input").val();

                var theurl = null;

                if (typeinput == "external") {
                    theurl = "{{ url('external-document-list-view') }}/?q="+x;
                } else if (typeinput == 'internal') {
                    theurl = "{{ url('/internal-document-list-view') }}/?q="+x;
                } else if (typeinput == 'outgoing') {
                    theurl = "{{ url('outgoing-document-list-view') }}/?q="+x;
                }

                if(x.length > 0){
                    window.location = theurl;
                }else{
                    swal({
                                  position: 'center',
                                  icon: 'warning',
                                  dangerMode: true,
                                  title: 'Search Criteria is empty!',
                                  showConfirmButton: false,
                                  timer: 1500
                                });
                }
            }
        });

        $(document).on("click",".search-txt-btn",function(){
            var x =  $('input#qsearchtxt').val();

            var typeinput = null;
                typeinput = $(document).find("#type_input").val();

            var theurl = null;

            if (typeinput == "external") {
                theurl = "{{ url('external-document-list-view') }}/?q="+x;
            } else if (typeinput == 'internal') {
                theurl = "{{ url('/internal-document-list-view') }}/?q="+x;
            } else if (typeinput == 'outgoing') {
                theurl = "{{ url('outgoing-document-list-view') }}/?q="+x;
            }

            if(x.length > 0){
                window.location = theurl;
            }else{
                swal({
                              position: 'center',
                              icon: 'warning',
                              dangerMode: true,
                              title: 'Search Criteria is empty!',
                              showConfirmButton: false,
                              timer: 1500
                            });
            }
        });
    });


    $(document).ready(function() {

        $(document).on("click", ".searchbtn-date", function() {
             //var x = document.getElementById("q").value;

             var x =  $('input#ff_date').val();

            if(x.length > 0){
                window.location = "{{ url('/internal-document/filter-date') }}/" + x
            }else{
                swal({
                              position: 'center',
                              icon: 'warning',
                              dangerMode: true,
                              title: 'Search Criteria is empty!',
                              showConfirmButton: false,
                              timer: 1500
                            });
            }
        });       
    });

    $(document).ready(function() {
        var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');

        $(document).on("click", ".go_edit_btn", function(e) {
            var x_id        =   this.id;

            var typeinput = null;
                typeinput = $(document).find("#type_input").val();

            var theurl = null;

            if (typeinput == "external") {
                theurl = "{{ url('/external-document/edit-document-details') }}/"+x_id;
            } else if (typeinput == 'internal') {
                theurl = "{{ url('/internal-document/edit-document-details') }}/"+x_id;
            } else if (typeinput == 'outgoing') {
                theurl = "{{ url('/outgoing-document/edit-document-details') }}/"+x_id;
            }

             $.ajax({
                url: theurl,
                type: "GET",
                data: {_token: CSRF_TOKEN,_id: x_id},

                success: function(response){
                    console.log(response);

                    var doccheck = response.data[0].retdoc;

                    if(doccheck == 1){
                        $('input#chkdocreturn').prop('checked', true);
                    }else{
                        $('input#chkdocreturn').prop('checked', false);
                    }

                    $('input#edit_id').val(response.data[0].id);
                    $('input#docdate').val(response.data[0].doc_receive);
                    $('input#barcode').val(response.data[0].barcode);
                    $('input#agency').val(response.data[0].agency);
                    $('input#signature').val(response.data[0].signatory);
                    $('input#doctitle').val(response.data[0].doctitle);
                    $('input#docdesc').val(response.data[0].description);
                    $('input#briefer').val(response.data[0].briefer_number);

                    $('#doc-edit').modal('show');
                    
                  },
                  error: function(ex){
                    //alert(JSON.stringify(ex));
                    window.location.href="{{ url('/home') }}";
                  },
                });
                e.preventDefault();

            //alert('Edit Clicked '+x_id);
            
        });       
    });

    $(document).ready(function() {
        $(document).on("click", ".btn_save", function(e) {

            //alert('Save clicked');

            var CSRF_TOKEN  =       $('meta[name="csrf-token"]').attr('content');
            var x_id        =       $('input#edit_id').val();
            var docdate     =       $('input#docdate').val();
            var barcode     =       $('input#barcode').val();
            var agency      =       $('input#agency').val();
            var signature   =       $('input#signature').val();
            var doctitle    =       $('input#doctitle').val();
            var desc        =       $('input#docdesc').val(); 
            var briefer     =       $('input#briefer').val();
            var retdoc      =       0;

            var a_level=0;

            if (document.getElementById('chkdocreturn').checked) {
                retdoc=1;
            }else{
                retdoc=0;
            }

            var typeofinput = null;
                typeofinput = $(document).find("#type_input").val();

            var theurl   = null;

            if (typeofinput == "internal") {
                theurl   = "{{ url('/internal-document/update-document-details') }}/"+x_id;
            } else if (typeofinput == "external") {
                theurl = "{{ url('/external-document/update-document-details') }}/"+x_id;
            } else if (typeofinput == "outgoing") {
                theurl = "{{ url('/outgoing-document/update-document-details') }}/"+x_id;
            }

             $.ajax({
                url: theurl,
                type: "POST",
                data: {_token: CSRF_TOKEN,_id: x_id, _docdate: docdate, _barcode: barcode, _agency: agency, _signature: signature, _doctitle: doctitle,_desc: desc,_briefer: briefer, returndoc:retdoc},

                success: function(response){
                    //console.log(response);

                    //tempAlert("Update Successful....",2000);

                    swal({
                              position: 'center',
                              icon: 'info',
                              title: 'Update Successful...',
                              showConfirmButton: false,
                              timer: 1500
                            });

                    $('#doc-edit').modal('hide');
                    window.location.href="{{ url('/internal-document-list-view') }}";
                  },
                  error: function(e){
                    //alert(JSON.stringify(e));
                    window.location.href="{{ url('/home') }}";
                  },
                });
                e.preventDefault();
            
        });       
    });

function tempAlert(msg,duration)

    {
     var el = document.createElement("div");
     el.setAttribute("style","position:fixed;top:50%;left:45%;margin: 0 auto;background-color:#F4FA58; border: solid thin #01A9DB; border-radius: 3px; padding-left: 15px; padding-right: 15px; padding-top: 6px; padding-bottom: 6px; color: #0B2161;box-shadow:2px 5px 5px #585858;-moz-box-shadow:2px 5px 5px #585858;-webkit-box-shadow:2px 5px 5px #585858;");
     el.innerHTML = msg;

     setTimeout(function(){
      el.parentNode.removeChild(el);
     },duration);
     document.body.appendChild(el);
     $(el).hide().fadeIn('slow');
    }

function warnAlert(msg,duration)

    {
     var elx = document.createElement("div");
     elx.setAttribute("style","position:fixed;top:50%;left:45%;margin: 0 auto;background-color:#FF0000; border: solid thin #DF0101; border-radius: 3px; padding-left: 25px; padding-right: 25px; padding-top: 12px; padding-bottom: 12px; background: #F4A8A9; color: #434243;box-shadow:2px 5px 5px #585858;-moz-box-shadow:2px 5px 5px #585858;-webkit-box-shadow:2px 5px 5px #585858;");
     elx.innerHTML = msg;

     setTimeout(function(){
      elx.parentNode.removeChild(elx);
     },duration);
     document.body.appendChild(elx);
     $(elx).hide().fadeIn('slow');
    }

$('#tt').on({
  "click": function() {
    $(this).tooltip({ items: "#tt", content: "Displaying on click"});
    $(this).tooltip("open");
  },
  "mouseout": function() {      
     $(this).tooltip("disable");   
  }
});


function checkClass() {
    //var e = document.getElementById("docclassification");
    var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
    var e           =   $("#docclassification :selected").val();
    var x_id        =   $('input#_id').val();
    var doctype     =   $('select#docclassification').val();
    var dept        =   $('input#ff_divisions').val();

    //if(dept.length === 0){
    //        alert("Please specify the Division first");
    //}else{

        //if(e > 3){
        //    document.getElementById("ff_employees").disabled = true;
        //    document.getElementById("ff_employees").value="";
        //}else{
        //    document.getElementById("ff_employees").disabled = false;
        //}

            //alert(doctype);
    var typeofinput = null;
        typeofinput = $(document).find("#type_input").val();

    var theurl = null;
    
    if (typeofinput == "internal") {
        theurl = "{{ url('/internal-document/docclass') }}/"+x_id;
    } else if (typeofinput == "external") {
        theurl = "{{ url('/external-document/docclass') }}/"+x_id;
    } else if (typeofinput == "outgoing") {
        theurl = "{{ url('/outgoing-document/docclass') }}/"+x_id;
    }

            $.ajax({
                url: theurl,
                type: "POST",
                data: {_token: CSRF_TOKEN,_id: x_id,docclass: doctype},

                    success: function(response){
                        console.log(response);

                        //tempAlert("Autosaving....Please refresh the page...",2000);
                        swal({
                              position: 'center',
                              icon: 'info',
                              title: 'Autosaving....Please refresh the page...',
                              showConfirmButton: false,
                              timer: 1500
                            });

                            //$('#doc-ff').modal('hide');
                            //window.location.href="{{ url('/internal-document-list-view') }}";
                    },
                        error: function(ex){
                        //alert(JSON.stringify(ex));
                        window.location.href="{{ url('/internal-document-list-view') }}";
                    },
        }); 
    //}
}


function confideName(){

    var CSRF_TOKEN  = $('meta[name="csrf-token"]').attr('content');
    var dept        =   $('input#ff_divisions').val();
    var x_id        =   $('input#_id').val();
    var doctype     =   $('select#docclassification').val();
    var cname       =   $('input#ff_employees').val();

    //if(dept.length === 0){
    //        alert("Please specify the Division first");
    //}else{
    
    var typeofinput = null;
        typeofinput = $(document).find("#type_input").val();

    var theurl   = null;

    if (typeofinput == "internal") {
        theurl   = "{{ url('/internal-document/confidential') }}/"+x_id;
    } else if (typeofinput == "external") {
        theurl = "{{ url('/external-document/confidential') }}/"+x_id;
    } else if (typeofinput == "outgoing") {
        theurl = "{{ url('/outgoing-document/confidential') }}/"+x_id;
    }
            $.ajax({
                url: theurl,
                type: "POST",
                data: {_token: CSRF_TOKEN,_id: x_id,docclass: doctype, confiname: cname},

                success: function(response){
                    console.log(response);

                    //tempAlert("Autosaving....",2000);
                    if(cname.length>0)
                    {
                        swal({
                                  position: 'bottom',
                                  icon: 'info',
                                  title: 'Autosaving....Please refresh the page...',
                                  showConfirmButton: false,
                                  showClass: {
                                    popup: `
                                      animate__animated
                                      animate__fadeInUp
                                      animate__faster
                                    `
                                  },
                                  timer: 1500
                                });
                    }

                    //$('#doc-ff').modal('hide');
                    //window.location.href="{{ url('/internal-document-list-view') }}";
                  },
                  error: function(ex){
                    //alert(JSON.stringify(ex));
                    window.location.href="{{ url('/internal-document-list-view') }}";
                  },
                });
    //}

    
//    alert(doctype);
}


function sortView(){
    var arr = (window.location.pathname).split("/");
    var val = (arr[arr.length-1]);
    var sortval = 0;

    if(val.includes('sort-az')){
        var sortval = 2;
    }else{
       var sortval = 1; 
    }

    var typeofinput = null;
        typeofinput = $(document).find("#type_input").val();

    var theurl   = null;
    var theinurl = null;

    if (typeofinput == "internal") {
        theurl   = "{{ url('/internal-document-list-view-sort-az') }}/"+x_id;
        theinurl = "{{ url('/internal-document-list-view') }}";
    } else if (typeofinput == "external") {
        theurl = "{{ url('/external-document-list-view-sort-az') }}/"+x_id;
        theinurl = "{{ url('/external-document-list-view') }}";
    } else if (typeofinput == "outgoing") {
        theurl = "{{ url('/outgoing-document-list-view-sort-az') }}/"+x_id;
        theinurl = "{{ url('/outgoing-document-list-view') }}";
    }

    if(sortval === 1){
        window.location.href= theurl;
    }else{
        window.location.href= theinurl;
    }

}

$(document).ready(function() {

    $(document).on("click", ".btn-upload", function() {
        var x_id        =   $('input#edit_id').val();

        var typeinput = null;
            typeinput = $(document).find("#type_input").val();

        var theurl = null;

        if (typeinput == "external") {
            window.location.href="{{ url('/external-document-new-entry/upload-image') }}/"+x_id;
        } else if (typeinput == 'internal') {
            window.location.href="{{ url('/internal-document-new-entry/upload-image') }}/"+x_id;
        } else if (typeinput == 'outgoing') {
            window.location.href="{{ url('/outgoing-document-new-entry/upload-image') }}/"+x_id;
        }

        
    });
});


function getUserList(ul, div = false){
        
        var u = null;

        if (ul != false) {
            u = (ul.value || ul.options[ul.selectedIndex].value);
        } else {
            if (div == false) {
                // alert("Division is empty");
            } else {
                u = div;
            }
        }

        $.ajax({
                url: "{{ url('/get-users') }}/"+u,
                context: document.body,
                success: function(data){
                  console.log(data);

                    $('#userlist').find('option').remove();
                    $.each(data.data, function(key, value) {
                            
                            $('#userlist').append(`<option value="${value.f_name}">${value.f_name}</option>`);
                        
                    });
              
                }

        });
    };

function getOffset(el) {
  const rect = el.getBoundingClientRect();
  return {
    left: rect.left + window.scrollX,
    top: rect.top + window.scrollY
  };
}

</script>
@endsection