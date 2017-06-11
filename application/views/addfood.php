<!-- Autor Dusan Pantic 533/2010 -->

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
	                        <?php  echo form_open_multipart('verifyAddFood');?> 
							<tr>
								<td><label><b>Name</b></label></td>
							    <td><input type="text"  name="name" required></td>
							</tr>
							<tr>
							    <td><label><b>Price</b></label></td>
							    <td><input type="text"  name="price" required></td>
							</tr>
							<tr>
								<td><label><b>Description</b></label></td>
							    <td><input type="text"  name="description" required></td>
							</tr>
							<tr>
							<td>
								</td>
									<td><input type="file"  name="picture" size="20" required></td>
								</tr>
							<tr>
							    <td colspan="2" align="center">
							    </br>
							    	<button class="btn btn-default btn-sm" type="submit">Add</button>
							    </td>
							</tr>	
						</table>	    				    


						
				</div>
					

				</div>
			</div>
			
		</div>
	</div>
</section>