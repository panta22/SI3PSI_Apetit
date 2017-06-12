<!-- Autor Dusan Savic 539/2010 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 
 <section id="contact" class="section-scroll main-section">
		<header class="section-header">
			<h2>Apetit Restaurant</h2>
		</header> 
	<div class="contact-content container section-padding">
		<div class="row">
			<div class="col-xs-12 col-md-5 v-card">
				
				<div class="row">
					
				<table style="width:900px">
					<tr>
						<th>Order Date</th>
						<th>Address</th>
						<th>Specialty</th>
						<th>Price</th>
						<th>Status</th>
					</tr>
					<?php  
	         			foreach ($pending->result() as $row) 
	         			{ 
            		?>
	                    	<form action='emplPendingController/confirm' method="post">
							  	<tr>
							  		<td><?php echo $row->date;?></td>
							  		<td><?php echo $row->address . ", ". $row->apartment . ", ". $row->floor;?></td>
								  	<td><?php echo $row->name;?></td>
								    <td><?php echo $row->total;?></td>
								    <td><?php echo $row->order_status;?></td>
								    <td>
								    	<select name="order_status">
								    	<option value="Accepted">Accept</option>
								    	<option value="Rejected">Reject</option>
								    	</select>
								    </td>
								    
								 	<td>
								 		<input type="hidden" name="order_id" value="<?php echo $row->order_id;?>">
								 		<button class="btn btn-default btn-sm" type="submit">Confirm</button>
								 	</td>
							 	</tr>
						 	</form>
					<?php
					
						}
					?>
				</table> 
				
				</br>
				</br>
				


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>
