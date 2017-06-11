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
					
				<table style="width:100%">
				  <tr>
				    <th>Order Date</th>
				    <th>Specialty</th>
				    <th>Amount</th>
				    <th>Status</th>
				    <th>Action</th>
				  </tr>
				  <?php  
         		foreach ($pendingOrders->result() as $row) 
         		{ 
            	?>
            		<tr>
            		<form action="employeeChangeStatus/changeStatus" method="POST">
				  	
				  		<td><?php echo $row->date;?></td>
					  	<td><?php echo $row->name;?></td>
					    <td><?php echo $row->price;?></td>
					    <td><?php echo $row->order_status;?></td>
					    <td><select name="order_status">
		  					<option <?php if ($row->order_status == "Pending") echo "Accept" ?> value="Accepted">Accept</option>
		  					<option <?php if ($row->order_status == "Pending") echo "Accept" ?> value="Rejected">Reject</option>
							</select> 
						</td>
						<input type="hidden" name="order_id" value="<?php echo $row->order_id;?>"><br>
					    <td><button class="btn btn-default btn-sm" type="submit">Change</button></td>
				    	</form>
				
				 	</tr>

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
