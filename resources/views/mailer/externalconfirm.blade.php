<table>
	<tr>
		<td>
		<td>
			<div style="border: solid 1px #000; max-width: 1200px; float: right; padding-right: 40px; padding-left: 40px;">
				<p style="font-family: Arial, serif; font-size: 9px;">In following up, pls cite Reference #</p>
				<p style="font-family: Arial, serif; font-size: 14px; font-weight: bold;">{{ $data1['barcode'] }}</p>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><img src="{{ $message->embed(public_path() .'/images/minda_logo.png') }}" alt="" height="140px;"></td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="font-weight: bold;">REPUBLIC OF THE PHILIPPINES</td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="font-weight: bold; font-size: 16px;">MINDANAO DEVELOPMENT AUTHORITY</td>
	</tr>
	<tr>
		<td colspan="2" align="center">14th Floor, Pryce Tower, Pryce Business Park</td>
	</tr>
	<tr>
		<td colspan="2" align="center">JP Laurel Avenue, Davao City, Philippines 8000</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="font-weight: bold; font-size: 14px; color: #0140FE;">ACKNOWLEGEMENT RECEIPT</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td colspan="2" align="justify">
			<p>&emsp;
				The <span style="font-weight: bold;">MINDANAO DEVELOPMENT AUTHORITY</span> hereby acknowledge the receipt of your letter/request which has been uploaded to the MinDA Document Tracking System and routed to the appropriate office/s with the following information.
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td>&emsp;Sender:</td>
		<td>{{ strtoupper($data1['sender']) }}</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td>&emsp;Document Title:</td>
		<td>{{ $data1['docdesc'] }}</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td>&emsp;Document Reference No:</td>
		<td>{{ $data1['barcode'] }}</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td>&emsp;Date and Time Uploaded:</td>
		<td>{{ Carbon\Carbon::now(+8)->format('l jS \\of F Y @ h:i:s A') }}</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td>&emsp;Uploaded By:</td>
		<td>{{Auth::user()->f_name}}</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td>&emsp;Routed To:</td>
		<td>{{strtoupper($data1['signerdiv'])}} - {{$data1['signer']}}</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td></td>
		<td>CC:</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td>&emsp;Total no of pages received:</td>
		<td>{{ $data1['ncopy'] }} copy and {{ $data1['npages'] }} pages</td>
	</tr>
	<tr>
		<td colspan="2" height="20px;" align="center" style="font-weight: bold;"></td>
	</tr>
	<tr>
		<td colspan="2" align="justify">
			<p>&emsp;The determination of the completeness of the documentary requirements submitted, if any, is subject to the evaluation of the technical person in charge.
			&emsp;This receipt is system generated and does not require signature.
			</p>
		</td>
	</tr>
	<tr>
		<td>Received by:</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="2" align="left"><img src="{{ $message->embed(public_path() .'/images/dts-image_minda-document_tracking_system.png') }}" alt="" height="100px;"></td>
	</tr>
</table>
<br>
<br>
<p style="color: #A4A4A4; font-weight: bold; font-family: Georgia, serif;">14th Floor, Pryce Tower Pryce Business Park JP Laurel Avenue Davao City, Philippines 8000<br></p>
<p>www.minda.gov.ph<br><br></p>
<!--p style="color: #A4A4A4;">Telefax No.: (082) 221-7060/(082) 221-6929</p-->