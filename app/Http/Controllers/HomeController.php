<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $docs = DB::table('externals')
                ->get();

        foreach ($docs as $i)
        {
            $doc_id = $i->id;
            //$daysForExtraCoding=0;

            $prevdate = $i->doc_date_ff;
            $curdate = Carbon::now();
            $daysForExtraCoding = Carbon::parse($prevdate)->diffInDaysFiltered(function(Carbon $date) {
                return !$date->isWeekend();
            }, $curdate);

            $diff = Carbon::parse($curdate)->diffInDays($prevdate);

            $update_doc = DB::table('externals')
                            ->where(['externals.id'=>$doc_id,'externals.status'=>'pending'])
                            ->update([
                                'day_count'=>$diff,
                            ]);

        }



        $days_cnt = DB::table('external_history')
                    ->get();

        foreach ($days_cnt as $x) 
        {
            $_id = $x->id;
            //$daysForExtraCodingx=0;

            $prevdatex = $x->date_ff;
            $curdatex = Carbon::now();
            $daysForExtraCodingx = Carbon::parse($prevdatex)->diffInDaysFiltered(function(Carbon $date) {
                return !$date->isWeekend();
            }, $curdatex);

            $diffx = Carbon::parse($curdate)->diffInDays($prevdatex);

            $update_days = DB::table('external_history')
                        ->where(['external_history.id'=>$_id,'external_history.stat'=>'pending'])
                        ->update([
                            'days_count'=>$diffx,
                        ]);

        }
        //Internal//

        $internaldocs = DB::table('internals')
                ->get();

        foreach ($internaldocs as $i)
        {
            $internaldoc_id = $i->id;
            //$daysForExtraCoding=0;

            $internalprevdate = $i->doc_date_ff;
            $internalcurdate = Carbon::now();
            $internaldaysForExtraCoding = Carbon::parse($internalprevdate)->diffInDaysFiltered(function(Carbon $date) {
                return !$date->isWeekend();
            }, $internalcurdate);

            $internaldiff = Carbon::parse($internalcurdate)->diffInDays($internalprevdate);

            $internalupdate_doc = DB::table('internals')
                            ->where(['internals.id'=>$internaldoc_id,'internals.status'=>'pending'])
                            ->update([
                                'day_count'=>$internaldiff,
                            ]);

        }



        $internaldays_cnt = DB::table('internal_history')
                    ->get();

        foreach ($internaldays_cnt as $x) 
        {
            $internal_id = $x->id;
            //$daysForExtraCodingx=0;

            $internalprevdatex = $x->date_ff;
            $internalcurdatex = Carbon::now();
            $internaldaysForExtraCodingx = Carbon::parse($internalprevdatex)->diffInDaysFiltered(function(Carbon $date) {
                return !$date->isWeekend();
            }, $internalcurdatex);

            $internaldiffx = Carbon::parse($internalcurdate)->diffInDays($internalprevdatex);

            $internalupdate_days = DB::table('internal_history')
                        ->where(['internal_history.id'=>$internal_id,'internal_history.stat'=>'pending'])
                        ->update([
                            'days_count'=>$internaldiffx,
                        ]);

        }

        //Outgoing//
        

        $outgoingdocs = DB::table('outgoings')
                ->get();

        foreach ($outgoingdocs as $i)
        {
            $outgoingdoc_id = $i->id;
            //$daysForExtraCoding=0;

            $outgoingprevdate = $i->doc_date_ff;
            $outgoingcurdate = Carbon::now();
            $outgoingdaysForExtraCoding = Carbon::parse($outgoingprevdate)->diffInDaysFiltered(function(Carbon $date) {
                return !$date->isWeekend();
            }, $outgoingcurdate);

            $outgoingdiff = Carbon::parse($outgoingcurdate)->diffInDays($outgoingprevdate);

            $outgoingupdate_doc = DB::table('outgoings')
                            ->where(['outgoings.id'=>$outgoingdoc_id,'outgoings.status'=>'pending'])
                            ->update([
                                'day_count'=>$outgoingdiff,
                            ]);

        }



        $outgoingdays_cnt = DB::table('outgoing_history')
                    ->get();

        foreach ($outgoingdays_cnt as $x) 
        {
            $outgoing_id = $x->id;
            //$daysForExtraCodingx=0;

            $outgoingprevdatex = $x->date_ff;
            $outgoingcurdatex = Carbon::now();
            $outgoingdaysForExtraCodingx = Carbon::parse($outgoingprevdatex)->diffInDaysFiltered(function(Carbon $date) {
                return !$date->isWeekend();
            }, $outgoingcurdatex);

            $outgoingdiffx = Carbon::parse($outgoingcurdate)->diffInDays($outgoingprevdatex);

            $outgoingupdate_days = DB::table('outgoing_history')
                        ->where(['outgoing_history.id'=>$outgoing_id,'outgoing_history.stat'=>'pending'])
                        ->update([
                            'days_count'=>$outgoingdiffx,
                        ]);
        }
        

        return view('home');
    }

    public function toexcel() {

    }

    public function secretary() {
        return view("admin.secretaryview");
    }

    public function outgoinglists() {
        return view("outgoing.outgoinglists");
    }

    public function internallists_pending() {
        $type  = "pending";
        $from  = "internal";

        if (Auth::user()->access_level >=4 ) {
            $data  = DB::table("internals")
                    ->join("internal_history","internals.id",'=','internal_history.ref_id')
                    ->where("internals.status",$type)
                    ->orWhere("internals.status","on-going")
                    ->groupBy("internals.id")
                    ->orderBy("internals.day_count","DESC")
                    ->get();
        } else {
            $data  = DB::table("internals")
                    ->join("internal_history","internals.id",'=','internal_history.ref_id')
                    ->where("internals.status",$type)
                    ->orWhere("internal_history.empto",Auth::user()->id)
                    ->orWhere("internal_history.empfrom",Auth::user()->id)
                    ->Where("internals.status","on-going")
                    ->groupBy("internals.id")
                    ->orderBy("internals.day_count","DESC")
                    ->get();
        }
        return view("internal.internallists", compact("data","type","from"));
    }

    public function internallists_complete() {
        $type  = "complete";
        $from  = "internal";
        $data  = DB::table("internals")
                    ->join("internal_history","internals.id",'=','internal_history.ref_id')
                    ->where("internals.status",$type)
                    ->groupBy("internals.id")
                    ->orderBy("internals.day_count","DESC")
                    ->get();
                 
        return view("internal.internallists", compact("data","type","from"));
    }

    public function externallists_pending() {
        $type  = "pending";
        $from  = "external";
        $data  = DB::table("externals")
                    ->join("external_history","externals.id","=","external_history.ref_id")
                    ->where("externals.status",$type)
                    ->orWhere("externals.status","on-going")
                    ->groupBy("externals.id")
                    ->orderBy("externals.day_count","DESC")
                    ->get();
                 
        return view("internal.internallists", compact("data","type","from"));
    }

    public function externallists_complete() {
       $type  = "complete";
       $from  = "external";
       $data  = DB::table("externals")
                    ->join("external_history","externals.id","=","external_history.ref_id")
                    ->where("externals.status",$type)
                    ->groupBy("externals.id")
                    ->orderBy("externals.day_count","DESC")
                    ->get();
                 
        return view("internal.internallists", compact("data","type","from"));
    }

    public function outgoinglists_pending() {
        $type  = "pending";
        $from  = "outgoing";
        $data  = DB::table("outgoings")
                    ->join("outgoing_history","outgoings.id","=","outgoing_history.ref_id")
                    ->where("outgoings.status",$type)
                    ->orWhere("outgoings.status","on-going")
                    ->groupBy("outgoings.id")
                    ->orderBy("outgoings.day_count","DESC")
                    ->get();
                 
        return view("internal.internallists", compact("data","type","from"));
    }


    public function outgoinglists_complete() {
        $type  = "complete";
        $from  = "outgoing";
        $data  = DB::table("outgoings")
                    ->join("outgoing_history","outgoings.id","=","outgoing_history.ref_id")
                    ->where("outgoings.status",$type)
                    ->groupBy("outgoings.id")
                    ->orderBy("outgoings.day_count","DESC")
                    ->get();
                 
        return view("internal.internallists", compact("data","type"));
    }

    public function printroutingslip() {
        $data = [];

        $id   = $_GET['id'];
        $from = $_GET['from'];

        switch($from) {
            case "internal":
                $data = DB::table("internal_history")
                        ->join("internals","internals.id","=","internal_history.ref_id")
                        ->where(["internal_history.ref_id"=>$id])
                        ->orderBy("internal_history.id","ASC")
                        ->get();
                break;
            case "external":
                 $data = DB::table("external_history")
                        ->join("externals","externals.id","=","external_history.ref_id")
                        ->where(["external_history.ref_id"=>$id])
                        ->orderBy("external_history.id","ASC")
                        ->get();
                break;
            case "outgoing":
                 $data = DB::table("outgoing_history")
                        ->join("outgoings","outgoings.id","=","outgoing_history.ref_id")
                        ->where(["outgoing_history.ref_id"=>$id])
                        ->orderBy("outgoing_history.id","ASC")
                        ->get();
                break;
        }

        return view("admin.routingslip", compact('data'));
    }

    public function tracking_number()
    {

        $data = DB::table('tracking_number')
                ->orderBy('id','desc')
                ->get();

        return view('tracking.tracking-number',compact('data'));
    }

    public function tracking_details($id)
    {
        if(request()->ajax())
        {
            $data = DB::table('tracking_number')
                    ->where(['tracking_number.id'=>$id])
                    ->get();

            return response()->JSON(['data' => $data]);
        }
    }

    public function tracking_barcode($id)
    {
        if(request()->ajax())
        {
            $data = DB::table('tracking_number')
                    ->where(['tracking_number.barcode'=>$id])
                    ->get();

            return response()->JSON(['data' => $data]);
        }
    }

    public function filter_number($type)
    {
        $data = DB::table('tracking_number')
                ->where(['tracking_number.doctype'=>$type])
                ->orderBy('id','desc')
                ->paginate(10)
                ->onEachSide(2);

        return view('tracking.tracking-number',compact('data'));
    }

    public function admin_users_control(){

        $userlist = DB::table('users')
                    ->orderBy('users.f_name')
                    ->paginate(25)
                    ->onEachSide(2);

        $docs = DB::table('internals')
            ->get();

        $datefilter = DB::table('internals')
                        ->groupBy('internals.doc_receive')
                        ->orderBy('internals.id','asc')
                        ->get();

        foreach ($docs as $i)
            {
                $prevdate = $i->doc_date_ff;
                $doc_id = $i->id;

                    $curdate = Carbon::now();

                    $diff = Carbon::parse($curdate)->diffInDays($prevdate);

                    $update_doc = DB::table('internals')
                            ->where(['internals.id'=>$doc_id,'internals.status'=>'pending'])
                            ->update([
                                'day_count'=>$diff,
                            ]);
            }

        $data = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('users.division','asc')
                    ->get();

        $employees = DB::table('users')
                    ->orderBy('users.f_name')
                    ->get();

        //dd($data);
        
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();
        
        //$papcode = DB::table("pap_codes")->get();
        
        if(Auth::user()->access_level == 5)
        {
            return view('admin.admin-control',compact('data','papcode','userlist','datefilter','employees'));
        }else{
            return view('admin.access-not-allowed',compact('data','papcode','userlist','datefilter','employees'));
        }
    }

    public function addname(Request $req) {
        if (request()->ajax()) {
             
             $data = DB::insert('insert into users (name, f_name) values (?,?)',[$req->input("username"),$req->input("fullname")]);

             return response()->json(['inserted' => $data]);
        }
    }

    public function gethistory(Request $req) {
        if (request()->ajax()) {
            $table = $req->input("table");
            $id    = $req->input("id");

           $data   = DB::select("select * from {$table} where id = (select max(id) from {$table} where ref_id ='{$id}')");

            // if (count($data)-1 > 0) {
                return response()->json(['history' => "Last action was when ". $data[0]->destination." on ".$data[0]->date_forwared ]);
            // } else {
            //    return response()->json(['history' => "No history of action");
            // }
            //return response()->json(['history' => $sql]);
        }
    }

    public function setuserinactive(Request $req) {
        if (request()->ajax()) {
           $id = $req->input("id");

           $data = DB::table("users")
                     ->where(['users.id'=>$id])
                     ->update(['users.division'=>null]);

           return response()->json(["updatedrow" => $data]);
        }
    }

    public function setasactive(Request $req) {
        if (request()->ajax()) {
            $id     = $req->input("id");
            $office = $req->input("office");

            $data   = DB::table("users")
                        ->where(["users.id" => $id])
                        ->update(["users.division" => $office]);

            return response()->json(["updatedrow" => $data]);
        }
    }

    public function updateemail(Request $req) {
        if (request()->ajax()) {
            $id     = $req->input("id");
            $email  = $req->input("email");

            $data   = DB::table("users")
                        ->where(["users.id" => $id])
                        ->update(["users.email" => $email]);

            return response()->json(["updatedrow" => $data]);
        }
    }

    public function updateposition(Request $req) {
        if (request()->ajax()) {
            $id       = $req->input("id");
            $position = $req->input("position");

            $data     = DB::table("users")
                        ->where("users.id",$id)
                        ->update(["users.position" => $position]);

            return response()->json(["updatedrow" => $data ]);
        }
    }

    public function updatefullname(Request $req) {
        if (request()->ajax()) {
            $id     = $req->input("id");
            $email  = $req->input("fullname");

            $data   = DB::table("users")
                        ->where(["users.id" => $id])
                        ->update(["users.f_name" => $email]);

            return response()->json(["updatedrow" => $data]);
        }
    }

    public function admin_users_control_edit(Request $request,$id)
    {
        if(request()->ajax())
        {
            $data = DB::table('users')
                    ->where(['users.id'=>$id])
                    ->update([
                            'access_level' => $request->get('_accesslevel'),
                        ]);
            return response()->JSON(['data' => $data]); 
        }
    }

    public function filter_by_division($division)
    {
        $userlist = DB::table('users')
                    ->where(['users.division'=>$division])
                    ->orderBy('users.f_name','asc')
                    ->paginate(25)
                    ->onEachSide(2);

        $docs = DB::table('internals')
            ->get();

        $datefilter = DB::table('internals')
                        ->groupBy('internals.doc_receive')
                        ->orderBy('internals.id','asc')
                        ->get();

        foreach ($docs as $i)
            {
                $prevdate = $i->doc_date_ff;
                $doc_id = $i->id;

                    $curdate = Carbon::now();

                    $diff = Carbon::parse($curdate)->diffInDays($prevdate);

                    $update_doc = DB::table('internals')
                            ->where(['internals.id'=>$doc_id,'internals.status'=>'pending'])
                            ->update([
                                'day_count'=>$diff,
                            ]);
            }

        $employees = DB::table('users')
                    ->orderBy('users.f_name')
                    ->get();

        //dd($data);
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();

        $data = DB::table('users')
                ->groupBy('users.division')
                ->orderBy('users.f_name','asc')
                ->get();

        return view('admin.admin-control',compact('data','papcode','userlist','datefilter','employees'));
    }

    public function getdivisionoffice(Request $req) {
        if (request()->ajax()) {
            $id     = $req->get("id");
            
            $data   = DB::table("pap_codes")
                        ->where("id",$id)
                        ->get();

            return response()->JSON(['data'=>$data]);
        }
    }

    public function updatedivoffice(Request $req) {
        if (request()->ajax()) {
            $id       = $req->get("id");
            $div      = $req->get("division");
            $desc     = $req->get("respocenter");

            // $data     = DB::insert("insert into pap_codes (division,respocenter) values (?,?)",["division"=>$div,"respocenter"=>$desc]);
            $data     = DB::table("pap_codes")
                        ->where("pap_codes.id",$id)
                        ->update(["division"=>$div,"respocenter"=>$desc]);

            return response()->JSON(['updatedrow'=>$data]);
        }
    }

    public function updateusername(Request $req) {
        if (request()->ajax()){
            $id       = $req->get("id");
            $username = $req->get("username");

            $data     = DB::table("users")
                        ->where("id",$id)
                        ->update(["name"=>$username]);

            return response()->JSON(["updatedrow"=>$data]);
        }
    }

    public function addnewdivoffice(Request $req) {
        if (request()->ajax()){
            $div      = $req->get("division");
            $desc     = $req->get("respocenter");

            $data     = DB::insert("insert into pap_codes (division,respocenter) values(?,?)",[$div,$desc]);

            return response()->JSON(["updatedrow"=>$data]);
        }
    }

    public function deletedivoff(Request $req) {
        if (request()->ajax()) {
            $id   = $req->get("id");

            $data = DB::table("pap_codes")
                    ->where("id",$id)
                    ->delete();

            return response()->JSON(["updatedrow"=>$data]);
        }
    }

    public function filter_by_name($name)
    {
        $userlist = DB::table('users')
                    ->where(['users.f_name'=>$name])
                    ->orderBy('users.f_name','asc')
                    ->paginate(25)
                    ->onEachSide(2);

        $thedivs = DB::table('users')
                    ->orderBy('users.f_name')
                    ->paginate(25)
                    ->onEachSide(2);

        $docs = DB::table('internals')
            ->get();

        $datefilter = DB::table('internals')
                        ->groupBy('internals.doc_receive')
                        ->orderBy('internals.id','asc')
                        ->get();

        foreach ($docs as $i)
            {
                $prevdate = $i->doc_date_ff;
                $doc_id = $i->id;

                    $curdate = Carbon::now();

                    $diff = Carbon::parse($curdate)->diffInDays($prevdate);

                    $update_doc = DB::table('internals')
                            ->where(['internals.id'=>$doc_id,'internals.status'=>'pending'])
                            ->update([
                                'day_count'=>$diff,
                            ]);
            }

        $employees = DB::table('users')
                    ->orderBy('users.f_name')
                    ->get();

        //dd($data);
        /*
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();
        */

        $papcode = DB::table("pap_codes")->get();

        $data = DB::table('users')
                ->groupBy('users.division')
                ->orderBy('users.f_name','asc')
                ->get();

        return view('admin.admin-control',compact('data','papcode','userlist','datefilter','employees','thedivs'));
    }

    public function view_library()
    {

        $employees = DB::table('users')
                    ->orderBy('users.f_name')
                    ->get();

        //dd($data);
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


        $data=DB::table('library')
                ->orderBy('library.id','desc')
                ->get();

        return view('library.library-view',compact('data','papcode','employees'));
    }

    public function entry_library()
    {
        $employees = DB::table('users')
                    ->orderBy('users.f_name')
                    ->get();

        //dd($data);
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


        $data=DB::table('library')
                ->orderBy('library.id','desc')
                ->get();

        return view('library.library-new-entry',compact('data','papcode','employees'));
    }

    public function save_library(Request $request)
    {
        if(request()->ajax())
        {
            $data = DB::insert('insert into library (doc_full_desc) values (?)',
                [
                    //$request->get('_abbv'),
                    $request->get('_fulldetail'),
                ]);

            return response()->JSON(['data' => $data]);
        }
    }

    public function edit_library($id)
    {
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


        $data = DB::table('library')
                ->where(['library.id'=> $id])
                ->get();

        return view('library.library-edit-entry',compact('papcode','data'));
    }

    public function update_library(Request $request, $id)
    {
        if(request()->ajax())
        {

            $data = DB::table('library')
                            ->where(['library.id'=>$id])
                            ->update([
                                //'doc_lib_abbrv'=>$request->get('_abbv'),
                                'doc_full_desc'=>$request->get('_fulldetail'),

                            ]);
            

            return response()->JSON(['data' => $data]);
        }

    }

    public function remove_library($id)
    {
        

            $dle = DB::table('library')
                        ->where(['library.id'=>$id])
                        ->delete();

            $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


            $data=DB::table('library')
                ->orderBy('library.id','desc')
                ->get();

            //return response()->JSON(['data' => $data]);
                return view('library.library-view',compact('data','papcode'));
        
    }

    /////////////////////////COURIER//////////////////////////////////////
    public function courier_view_library()
    {

        $employees = DB::table('users')
                    ->orderBy('users.f_name')
                    ->get();

        //dd($data);
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


        $data=DB::table('courier')
                ->orderBy('courier.id','desc')
                ->get();

        return view('courier.courier-view',compact('data','papcode','employees'));
    }

    public function courier_entry_library()
    {
        $employees = DB::table('users')
                    ->orderBy('users.f_name')
                    ->get();

        //dd($data);
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


        $data=DB::table('courier')
                ->orderBy('courier.id','desc')
                ->get();

        return view('courier.courier-new-entry',compact('data','papcode','employees'));
    }

    public function courier_save_library(Request $request)
    {
        if(request()->ajax())
        {
            $data = DB::insert('insert into courier (courier_desc) values (?)',
                [
                    //$request->get('_abbv'),
                    $request->get('_fulldetail'),
                ]);

            return response()->JSON(['data' => $data]);
        }
    }

    public function courier_edit_library($id)
    {
        $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


        $data = DB::table('courier')
                ->where(['courier.id'=> $id])
                ->get();

        return view('courier.courier-edit-entry',compact('papcode','data'));
    }

    public function courier_update_library(Request $request, $id)
    {
        if(request()->ajax())
        {

            $data = DB::table('courier')
                            ->where(['courier.id'=>$id])
                            ->update([
                                //'courier_abbv'=>$request->get('_abbv'),
                                'courier_desc'=>$request->get('_fulldetail'),

                            ]);
            

            return response()->JSON(['data' => $data]);
        }

    }

    public function courier_remove_library($id)
    {
        

            $dle = DB::table('courier')
                        ->where(['courier.id'=>$id])
                        ->delete();

            $papcode = DB::table('users')
                    ->groupBy('users.division')
                    ->orderBy('division','asc')
                    ->get();


            $data=DB::table('courier')
                ->orderBy('courier.id','desc')
                ->get();

            //return response()->JSON(['data' => $data]);
                return view('courier.courier-view',compact('data','papcode'));

    }

    public function barcode()
    {
        return view('/barcode.barcode-input');
    }
}
