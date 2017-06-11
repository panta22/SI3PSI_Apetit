<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<nav id="main-navbar" class="hidden-xs hidden-sm">
	<div class="nav hidden-xs">
		<div class="main-reorder pull-right">
			<a href="#">
				<i class="fa fa-bars"></i>
			</a>
		</div>

		<div class="logo pull-left">
			<a href="#">
				<figure>
					<img src="/apetit/img/logo1.png" class="light-logo"/>
					<img src="/apetit/img/logo2.png" class="dark-logo"/>
				</figure>
			</a>
		</div>
		<div class="main-nav">
			<ul class="pull-right">
				<!-- <li>
					<a href="index4.html" class="">home</a>
										
				</li>	 -->			
				<?php
					if ($this->session->userdata('logged_in')) {
						$session_data = $this->session->userdata('logged_in');
						if($session_data['type'] == 1){
				?>
							<li>
								<a href="#" class="">Welcome <?php echo $username?>!</a>
							</li>

							<li>
								<a href="<?php echo site_url('userMenu');?>" class="hover-subnav ">menu</a>
								<div class="subnav image-subnav">
									
								</div>
							</li>	

							<li>
								<a href="<?php echo site_url('userMenu/getOrders');?>" class="">My Orders</a>	
							</li>
							
							<!-- <li>
								<a href="<?php echo site_url('home/contact');?>" class="">contact</a>	
							</li> -->

							<li>
								<a href="<?php echo site_url('userChangePass');?>" class="">Profile</a>
												
							</li>

							
							<li>
								<a href="<?php echo site_url('userMenu/logout');?>" class="">Logout</a>
												
							</li>

				<?php
						}
					

					else if($session_data['type'] == 2){
				?>
						<li>
							<a href="#" class="">Welcome <?php echo $username?>!</a>
						</li>
						
						<li>
							<a href="<?php echo site_url('employeeMenu');?>" class="hover-subnav ">menu</a>
							<div class="subnav image-subnav">
								
							</div>
						</li>	
						
						<li>
							<a href="<?php echo site_url('employeeAdd');?>" class="">AddFood</a>	
						</li>

						<li>
							<a href="<?php echo site_url('emplPendingController');?>" class="">Pending</a>	
						</li>

						<li>
							<a href="<?php echo site_url('employeeCompleted');?>" class="">Completed</a>	
						</li>
						
						<li>
							<a href="<?php echo site_url('userChangePass');?>" class="">Profile</a>
						</li>
						
						<li>
							<a href="<?php echo site_url('userMenu/logout');?>" class="active">Logout</a>
						</li>
					<?php
						}
					
					else if($session_data['type'] == 3){
				?>
						<li>
							<a href="#" class="">Welcome <?php echo $username?>!</a>
						</li>
							
						<li>
							<a href="<?php echo site_url('adminPage');?>" class="">Admin</a>
							
						</li>	
						
						<li>
							<a href="<?php echo site_url('userChangePass');?>" class="">Profile</a>
						</li>
						
						<li>
							<a href="<?php echo site_url('adminPage/logout');?>" class="">Logout</a>
						</li>
					<?php
						}
					
					}
						else {
					?>
							<li>
							<a href="<?php echo site_url('guestMenu');?>" class="hover-subnav ">menu</a>
							<div class="subnav image-subnav">
								
							</div>
						</li>	
						
						<!-- <li>
							<a href="contact.html" class="">contact</a>	
						</li> -->
						
						<li>
							<a href="<?php echo site_url('login');?>" class="active">Login</a>
											
						</li>
				<?php
							}
						
				?>
								
			</ul>
		</div>
	</div>
</nav>