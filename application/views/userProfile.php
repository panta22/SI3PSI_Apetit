<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 


?>


 <section id="contact" class="section-scroll main-section">
		<header class="section-header">
			<h2>Apetit Restaurant</h2>
		</header> 
	<div class="contact-content container section-padding">
		<div class="row">
			<div class="col-xs-12 col-md-5 v-card">
				
				<div class="row">
					
                   

                    <form action="userChangePass/verifyChangePass" method="POST">
						<label for="oldpassword"><b>Old Password</b></label>
					    <input type="password" placeholder="Enter Old Password" id = "oldpassword" name="oldpassword" /> <br> </br>

					    <label for="newpassword"><b>New Password</b></label>
					    <input type="password" placeholder="Enter Password" id = "newpassword" name="newpassword" /> <br> </br>

					    <button name = "btn_login" type="submit" value = "Submit">Change</button>
				    </form>
						    <!-- <input type="checkbox" checked="checked">Remember me<br></br> -->
						    
							<!-- <a href="register" class="active">Registration</a> -->


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>