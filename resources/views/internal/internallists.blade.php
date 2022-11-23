<table>
	<thead>
		<tr>
			<th colspan="5" style='font-weight: normal;'> 
				<span class='spanbtns' style="text-transform: capitalize;font-size: 15px;font-weight: bold; <?php echo ($type=="pending")?"color: #3c8dbc;":"color: green;"?>"> 
					<?php 
						if (strtolower($type) == "pending") {
							echo "<i class='fa fa-refresh' aria-hidden='true'></i>";
							echo " On-going";
						} else {
							echo "<i class='fa fa-check-circle' aria-hidden='true'></i>";
							echo " ".$type;
						}
					?> 
				</span>
			</th>
		</tr>
		<tr>
			<th style='font-size: 10px !important;'> <i class="fa fa-hashtag" aria-hidden="true"></i> </th>
			<th> Document Description </th>

			<?php if (strtolower($type) !='complete') { ?>
				<th> Document Forwarded</th>
				<th> Number of daysss </th>
				<!--th> Status </th-->
			<?php } ?>
			<th> </th>
		</tr>
	</thead>
	<?php if (count($data) > 0) { ?>
		<tbody>
		<?php
		//var_dump($data);
			$count = 1;
			foreach($data as $d) {
				// internal
				// internal-document-track-list-view/view-document-tracking/21/?i=173

				// external
				// external-document-track-list-view/view-document-tracking/4/?i=24

				// outgoing
				// outgoing-document-track-list-view/view-document-tracking/1/?i=1

				$href = "";
				switch($from) {
					case "internal":
						$href = "internal-document-track-list-view/view-document-tracking/{$d->ref_id}/?i=$d->id";
						break;
					case "external":
						$href = "external-document-track-list-view/view-document-tracking/{$d->ref_id}/?i={$d->id}";
						break;
					case "outgoing":
						$href = "outgoing-document-track-list-view/view-document-tracking/{$d->ref_id}/?i={$d->id}";
						break;
				}	
				
				echo "<tr data-trid='{$d->id}' data-href='{$href}' class='trtrigger'>";
					echo "<td>".$count."</td>";
					echo "<td style='white-space: pre-wrap;'>".$d->description."</td>";
					if (strtolower($type) !='complete') {
						echo "<td> <i class='fa fa-calendar-o' aria-hidden='true'></i> &nbsp; ".date("D - M. d, Y", strtotime($d->doc_date_ff))."</td>";
						echo "<td>".$d->day_count."</td>";
						//echo "<td>".$d->status."</td>";
					}
					echo "<td style='color: #ccc;'> <i class='fa fa-chevron-right' aria-hidden='true'></i> </td>";
				echo "</tr>";
				$count++;
			}
		?>	
		
		</tbody>
	<?php } else { ?>
		<tbody>
			<td colspan="4" style='text-align: center;'> No documents found </td>
		<tbody>
	<?php } ?>
</table>

