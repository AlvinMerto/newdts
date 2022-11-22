<table>
	<thead>
		<tr>
			<th colspan="5" style='font-weight: normal;'> 
				<span class='spanbtns' style='text-transform: capitalize;'> <?php echo $type; ?> </span>
			</th>
		</tr>
		<tr>
			<th style='font-size: 10px !important;'> <i class="fa fa-hashtag" aria-hidden="true"></i> </th>
			<th> Document Title </th>

			<?php if (strtolower($type) !='complete') { ?>
				<th> Document Forwarded</th>
				<th> Number of days </th>
			<?php } ?>
			<th> </th>
		</tr>
	</thead>
	<?php if (count($data) > 0) { ?>
		<tbody>
		<?php
			$count = 1;
			foreach($data as $d) {
				echo "<tr data-trid='{$d->id}'>";
					echo "<td>".$count."</td>";
					echo "<td>".$d->doctitle."</td>";
					if (strtolower($type) !='complete') {
						echo "<td> <i class='fa fa-calendar-o' aria-hidden='true'></i> &nbsp; ".date("D - M. d, Y", strtotime($d->doc_date_ff))."</td>";
						echo "<td>".$d->day_count."</td>";
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
