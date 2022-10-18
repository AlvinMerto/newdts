<?php 
	
	namespace App\Classes;

	use DB;

	class Classes {
		public function settheaccesslevel($accesslvl, $div) {
			
			if($accesslvl=='5' and $div=='RECORDS'){
	            $div = DB::table('users')
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();

	        }else if($div=='RECORDS' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'RECORDS'])
	                    ->orWhere(['users.division'=>'OFAS'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();

	        }else if($div=='OC' and $accesslvl=='4'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'OFAS'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->orWhere(['users.division'=>'IPPAO'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->orWhere(['users.division'=>'RECORDS'])
	                    ->orWhere('users.division',"like",'AMO%')
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();

	        }else if($div=='OC' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'OC'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();

	        }else if($div=='PPPDO' and $accesslvl=='3'){

	            $div = DB::table('users')
	                    ->where(['users.division'=>'PPPDO'])
	                    ->orWhere(['users.division'=>'PRD'])
	                    ->orWhere(['users.division'=>'PFD'])
	                    ->orWhere(['users.division'=>'PDD'])
	                    ->orWhere(['users.division'=>'KMD'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OFAS'])
	                    ->orWhere(['users.division'=>'IPPAO'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='PPPDO' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='IPPAO' and $accesslvl=='3'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'IPPAO'])
	                    ->orWhere(['users.division'=>'IPD'])
	                    ->orWhere(['users.division'=>'IRD'])
	                    ->orWhere(['users.division'=>'PuRD'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OFAS'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='IPPAO' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'IPPAO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='OFAS' and $accesslvl=='3'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'OFAS'])
	                    ->orWhere(['users.division'=>'FD'])
	                    ->orWhere(['users.division'=>'AD'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->orWhere(['users.division'=>'IPPAO'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='OFAS' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'OFAS'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='PRD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PRD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='PRD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PRD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='PFD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PFD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='PFD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PFD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='PDD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PDD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='PDD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PDD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='KMD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'KMD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='KMD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'KMD'])
	                    ->orWhere(['users.division'=>'PPPDO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='IPD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'IPD'])
	                    ->orWhere(['users.division'=>'IPPAO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='IPD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'IPD'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='IRD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'IRD'])
	                    ->orWhere(['users.division'=>'IPPAO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='IRD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'IRD'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='PuRD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PuRD'])
	                    ->orWhere(['users.division'=>'IPPAO'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='PuRD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'PuRD'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='FD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'FD'])
	                    ->orWhere(['users.division'=>'OFAS'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='FD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'FD'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='AD' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AD'])
	                    ->orWhere(['users.division'=>'OFAS'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='AD' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AD'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='AMO-CM' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-CM'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='AMO-CM' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-CM'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='AMO-NM' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-NM'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='AMO-NM' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-NM'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='AMO-WM' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-WM'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='AMO-WM' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-WM'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='AMO-NEM' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-NEM'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='AMO-NEM' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-NEM'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else if($div=='AMO-SCM' and $accesslvl=='2'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-SCM'])
	                    ->orWhere(['users.division'=>'OC'])
	                    ->orWhere(['users.division'=>'OED'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }else if($div=='AMO-SCM' and $accesslvl=='1'){
	            $div = DB::table('users')
	                    ->where(['users.division'=>'AMO-SCM'])
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        else{
	            $div = DB::table('users')
	                    ->groupBy('users.division')
	                    ->orderBy('users.division', 'asc')
	                    ->get();
	        }

	        return $div;
		}
	}
?>