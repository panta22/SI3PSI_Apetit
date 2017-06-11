<!-- Autor Dusan Pantic 533/2010 -->


 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
 
 <section id="contact" class="section-scroll main-section">
		<header class="section-header">
			<h2>Apetit Restaurant</h2>
		</header> 
	<div class="contact-content container section-padding">
		<div class="row">
			<div class="col-xs-12 col-md-5 v-card">
				
				<div class="row" style="line-height:100%">
					
                    <?php  echo validation_errors(); ?> 
                    <?php  echo form_open('userOrder/orderConfirm'); ?> 
					    <?php
					    	foreach ($order->result() as $row){
					    ?>
								<label for="name">Name: <?php echo $row->name;?></label>
							    <!-- <input type="text" placeholder="Enter email" id = "username" name="username" /> --> <br> </br>

							    <label for="description">Description: <?php echo $row->description;?></label><br></br>
							    <label for="description"><b>Price: <?php echo $row->price;?></b></label><br></br>

							   
					<?php	
							}
							foreach ($address->result() as $row){
					?>
								<label for="address">Address: <?php echo $row->address;?></label> </br>
								<label for="address">Apartment: <?php echo $row->apartment;?></label><br></br>
								<label for="address">Floor: <?php echo $row->floor;?></label><br></br>
								<label for="address">City: <?php echo $row->city;?></label><br></br>
								<label for="address">Phone: <?php echo $row->phone;?></label><br></br>

						<?php
							}
						?>	
							<input type="hidden" name="foodid" value="<?php echo $foodid;?>"><br>
						    <button class="btn btn-default btn-sm" type="submit">Order</button><br> </br>
						    <!-- <input type="checkbox" checked="checked">Remember me<br></br>
						    
							<a href="register" class="active">Registration</a> -->


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>


<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	// echo "Foodid je".$foodid;

	foreach ($order->result() as $row){
		echo $row->name;
		echo $row->description;
		echo $row->price;
	}
 ?> -->







<!-- <h6><?php echo $row->name;?></h6>
<p><?php echo $row->description;?></p> -->