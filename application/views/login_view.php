<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
 
 <section id="contact" class="section-scroll main-section">
		<header class="section-header">
			<h2>Apetit Restaurant kurac</h2>
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
						    <input type="checkbox" checked="checked">Remember me<br></br>
						    
							<a href="register" class="   active ">Registration</a>


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>