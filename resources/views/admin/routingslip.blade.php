<html>
<head>
	<style>
		* {
			font-family: calibri;
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
			width: 6%;
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
							echo $data[0]->briefer_number;
						?>
					</td>
				<th> Date Received: </th>
					<td>
						<?php
							echo date("M. d, Y", strtotime($data[0]->doc_receive));
						?>
					</td>
			</tr>
			<tr>
				<th> Document Type: </th>
				<td colspan="3">
					<?php
						echo $data[0]->type;
					?>
				</td>
			</tr>
			<tr>
				<th> Subject: </th>
				<td colspan="3">
					<?php
						echo $data[0]->doctitle;
					?>
				</td>
			</tr>
		</table>
		<table>
			<thead>
				<th> DATE </th>
				<th colspan='2'> ROUTING </th>
				<th> REMARKS </th>
			</thead>
			<tbody>
				<?php 
					if (count($data)>0) {
						foreach($data as $d) {
							echo "<tr>";
								echo "<td> {$d->date_forwared} </td>";
								// echo "<td> {$d->empto} </td>";
								// echo "<td> {$d->empfrom} </td>";
								echo "<td colspan='2'> {$d->destination} </td>";
								echo "<td> {$d->remarks} </td>";
							echo "</tr>";
						}
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
