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
         		foreach ($allOrders->result() as $row) 
         		{ 
         			if($row->status != 'Pending'){
            	?>
					  <tr>
					  		<td><?php echo $row->date;?></td>
					  		<td><?php echo $row->address . ", ". $row->apartment . ", ". $row->floor;?></td>
						  	<td><?php echo $row->name;?></td>
						    <td><?php echo $row->total;?></td>
						    <td style='color:
						    	<?php 
						    		if ($row->order_status == "Rejected") echo "red";
						    		if ($row->order_status == "Accepted") echo "green";
						    	?>
						    ';><?php echo $row->order_status;?></td>
					
					  </tr>
				<?php
					}
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
