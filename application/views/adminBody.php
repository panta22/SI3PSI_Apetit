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
				    <th>Username</th>
				    <th>Old User Type</th>
				    <th>New User Type</th>
				    <th>Action</th>
				  </tr>
				  <?php  
         		foreach ($users->result() as $row) 
         		{ 
            	?>
				  <tr>
				  <form action="adminPage/changeType" method="POST">
					  	<td><?php echo $row->username;?></td>
					    <td><?php echo $row->type;?></td>
					    <td><select name="type">
		  					<option <?php if ($row->type == 1) echo "selected" ?> value="1">User</option>
		  					<option <?php if ($row->type == 2) echo "selected" ?> value="2">Employee</option>
		  					<option <?php if ($row->type == 3) echo "selected" ?> value="3">Admin</option>
							</select> 
						</td>
						<input type="hidden" name="userid" value="<?php echo $row->id;?>"><br>
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
