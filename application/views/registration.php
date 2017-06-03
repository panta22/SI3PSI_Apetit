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
						<table padding = "5px" border="0">
						<?php  echo validation_errors(); ?> 
                            <?php  echo form_open('register'); ?> 
							<tr>
								<td><label><b>Username</b></label></td>
							    <td><input type="text" name="username" required></td> 
						    </tr>
							<tr>    
							    <td><label><b>Email</b></label></td>
							    <td><input type="text"  name="email" required></td>
							</tr>
							<tr>
							    <td><label><b>Password</b></label></td>
							    <td><input type="Password"  name="password" required></td>
							</tr>
							<tr>
							    <td><label><b>Confirm Password</b></label></td>
							    <td><input type="Password"  name="password" required></td>
							 </tr>
							 <tr>
							    <td colspan = "2" align = "center"><button  class="btn btn-default btn-sm" type="submit">Register</button></td>
							 </tr>	
						</table>	    				    


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>