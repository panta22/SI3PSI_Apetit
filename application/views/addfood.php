<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section id="contact" class="section-scroll main-section">
		<header class="section-header">
			<h2>Add Food</h2>
		</header> 
	<div class="contact-content container section-padding">
		<div class="row">
			<div class="col-xs-12 col-md-5 v-card">
				
				<div class="row">
						<table padding = "5px" border="0">
						<?php  echo validation_errors(); ?> 
                            <?php  echo form_open('verifyAddFood'); ?> 
							<tr>
								<td><label><b>CategoryID</b></label></td>
							    <td><input type="text" name="category_id" required></td>
								<td><label><b>Name</b></label></td>
							    <td><input type="text"  name="name" required></td>
						    </tr>
							<tr>    
							    <td><label><b>Price</b></label></td>
							    <td><input type="text"  name="price" required></td>
								<td><label><b>Description</b></label></td>
							    <td><input type="text"  name="description" required></td>
							</tr>
							
							<!-- <tr>
							    <td><label><b>Password</b></label></td>
							    <td><input type="Password"  name="password" required></td>
								<td><label><b>Floor</b></label></td>
							    <td><input type="text"  name="floor" required></td>
							</tr>
							<tr>
							    <td><label><b>Confirm Password</b></label></td>
							    <td><input type="Password"  name="cpassword" required></td>
								<td><label><b>Phone</b></label></td>
							    <td><input type="text"  name="phone" required></td>
								
							 </tr>
							 <tr align = "right">
								 <td></td>
								 <td></td>
								<td><label><b>City</b></label></td>
							    <td><input type="text"  name="city" required></td>
							 </tr> -->
							 <tr>
							    <td colspan="2" align="center"><button class="btn btn-default btn-sm" type="submit">Add</button></td>
							 </tr>	
						</table>	    				    


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>