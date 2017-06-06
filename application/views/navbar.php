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
			<a href="index.html">
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
				
				<li>
					<a href="<?php echo site_url('menu');?>" class="hover-subnav ">menu</a>
					<div class="subnav image-subnav">
						
					</div>
				</li>	
				
				<li>
					<a href="contact.html" class="">contact</a>	
				</li>
				
				<li>
					<a href="<?php echo site_url('menu/login');?>" class="active">Login</a>
									
				</li>
								
			</ul>
		</div>
	</div>
</nav>