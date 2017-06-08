<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
 
 
 <section id="contact" class="section-scroll main-section">
		<header class="section-header">
			<h2>Apetit Restaurant</h2>
		</header> 
	<div class="contact-content container section-padding">
		<div class="row">
			<div class="col-xs-12 col-md-5 v-card">
				
				<div class="row">
					
                            <?php  echo validation_errors(); ?> 
                            <?php  echo form_open('verifylogin'); ?> 
							<label for="username"><b>Username</b></label>
						    <input type="text" placeholder="Enter email" id = "username" name="username" /> <br> </br>

						    <label for="password"><b>Password</b></label>
						    <input type="password" placeholder="Enter Password" id = "password" name="password" /> <br> </br>

						    <button name = "btn_login" type="submit" value = "Login">Login</button>
						    
						    
							<a href="register" class="active">Registration</a>


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>