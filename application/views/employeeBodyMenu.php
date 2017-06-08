<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
	if (isset($_POST["user_id"])) {
		echo "THIS IS A FOOD ID " . $_POST["user_id"];
	}
?>

<div class="section-intro"  data-opacity-start="30" data-opacity-end="100" data-background="img/demo/menu-bg.jpg">

	<div class="pre-content">
		<div class="container"> 
			<div class="row">   
				<div class="col-xs-12">
					<h1 class="parallax-element-first">Menu à la carte</h1>
					
				</div>
			</div>  
		</div>
	</div>  
	<a class="arrow1 arrow-section hidden-xs" href="#">
		<i class="fa fa-angle-down"></i>
	</a>
	<a class="arrow2 arrow-section hidden-xs" href="#" style="">
		<i class="fa fa-angle-up"></i>
	</a> 
</div> 
<div class="section-space"></div>
<section id="menu" class="section-scroll main-section menu">
	<!-- <ul class="list-category"> -->

		<?php 
			// foreach ($foodsection->result() as $row)  
   //       	{ 
		 ?>

			<!-- <li> 
				<span class="filter" data-filter=".promotions"><?php echo $row->category_name;?></span>
			</li> -->

		<?php
			// }
		?>


			<!-- <li>    
				<span class="filter" data-filter=".promotions">Promotions</span>
			</li>
			<li>
				<span class="filter" data-filter=".starters">starters</span>
			</li>
			<li>
				<span class="filter" data-filter=".salads">salads</span>
			</li>
			<li>
				<span class="filter" data-filter=".soups">soups</span>
			</li>
			<li>
				<span class="filter" data-filter=".mains">mains</span>
			</li>
			<li>
				<span class="filter" data-filter=".desserts">desserts</span>
			</li>
			<li>
				<span class="filter" data-filter=".drinks">drinks</span>
			</li> -->

	<!-- </ul> -->

	
	<div class="container-fluid menu-content mixitup">

		<div class="mix promotions" data-myorder="1">
			<div class="row">
				<div class="col-xs-12 menu-category sticky-header sticky-header first-header fixed visible">
					<h2>Specialities</h2>
				</div>
			</div>
			<div class="row"> 
			<!-- start foreach -->
			<?php  
         		foreach ($h->result() as $row)  
         		{  
         			if($row->status){
            ?>
		        <div class="menu-item">

					<a href="/apetit/img/demo/food/1.jpg" class="open-overlay">
						<figure>
							<img src="img/placeholder.png" data-src="/apetit/img/demo/food/1.jpg" alt="Menu item"/>
							<div class="actions">
								<i class="icon-magnifier-add"></i>
							</div>
						</figure>
					</a>
					<div class="item-description">
						
						<div class="">
							<div class=""> 
								<h6><?php echo $row->name;?></h6>
								<p><?php echo $row->description;?></p>
								<span class="old-price"></span>
								<span class="new-price item-price"><?php echo $row->price;?> RSD</span>
								<form action="employeeDelete" method="post">
								<?php  //echo validation_errors(); ?> 
                        			<?php  //echo form_open('employeeDelete'); ?>
									<input type="hidden" name="foodid" value="<?php echo $row->specialty_id;?>"><br>
									<input type="submit" name="button-del" value="Delete">
								</form>
								<!-- <div class="shop-button" id="<?php echo $row->specialty_id;?>"><a href="#" class="btn btn-default btn-sm">Delete</a></div> -->
							</div>
						</div>
					</div>
				</div>
         	<?php
         			}
     			}  
         	?>

			<!-- end foreach -->

			</div>

		</div>
	</div>
</section>