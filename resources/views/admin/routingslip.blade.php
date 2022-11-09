<html>
<head>
	<style>
		* {
			font-family: calibri;
			font-size: .9rem;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		table tbody tr td, 
		table thead th, 
		table tr th {
			border: 1px solid #ccc;
			padding: 10px;
		}

		.logopic {
			width: 10%;
		}

		#startprinthere {
			height: 100%;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<div id='startprinthere'>

		<table>
			<tr>
				<td colspan='4' style='text-align: center;'> <img class='logopic' src="{{ url('images/MinDA_Official.jpg') }}"/> </td>
			</tr>
			<tr>
				<td colspan='4' style="text-align: center;font-weight: bold;border-top: 2px solid #777676;border-bottom: 2px solid #777676;"> ROUTING SLIP </td>
			</tr>
			<tr>
				<th> Control No. </th>
					<td> 
						<?php
							if (count($data)>0) {
								echo $data[0]->barcode;
							}
						?>
					</td>
				<th> Date Received: </th>
					<td>
						<?php
							if (count($data)>0) {
								echo date("M. d, Y", strtotime($data[0]->doc_receive));
							}
						?>
					</td>
			</tr>
			<!--tr>
				<th> Document Type: </th>
				<td colspan="3">
					<?php
						// echo $data[0]->type;
					?>
				</td>
			</tr-->
			<tr>
				<th> Subject: </th>
				<td colspan="3">
					<?php
						if (count($data)>0) {
							echo "[".$data[0]->agency."] ";
							echo $data[0]->description;
						}
					?>
				</td>
			</tr>
		</table>
		<table>
			<thead>
				<th style='width: 15%;'> DATE </th>
				<!--th colspan='2'> ROUTING </th-->
				<th style='width: 10%;'> FROM </th>
				<th style='width: 10%;'> TO </th>
				<th> REMARKS </th>
			</thead>
			<tbody>
				<?php 
					if (count($data)>=1) {
						echo "<tr>";
							echo "<td> {$data[1]->date_forwared} </td>";
							echo "<td> RECORDS </td>";
							echo "<td> OED </td>";
							echo "<td> {$data[1]->remarks} </td>";
						echo "</tr>";

						/*
						foreach($data as $d) {
							echo "<tr>";
								echo "<td> {$d->date_forwared} </td>";
								echo "<td> RECORDS </td>";
								echo "<td> OED </td>";
								// echo "<td colspan='2'> {$d->destination} </td>";
								echo "<td>  </td>";
							echo "</tr>";
						}
						*/
					}
				?>
				<!--tr>
					<td> MONTH 2X, 2XXX </td>
					<td> Sample </td>
					<td> Sample </td>
					<td> Lorem Ipsum dolor set amit consectitur </td>
				</tr>
				<tr>
					<td> MONTH 2X, 2XXX </td>
					<td> Sample </td>
					<td> Sample </td>
					<td> Lorem Ipsum dolor set amit consectitur </td>
				</tr>
				<tr>
					<td> MONTH 2X, 2XXX </td>
					<td> Sample </td>
					<td> Sample </td>
					<td> Lorem Ipsum dolor set amit consectitur </td>
				</tr-->
			</tbody>
		</table>
	</div>
	<script>
		window.onload = function() {
			window.print();
		}
	</script>
</body>
<html>
