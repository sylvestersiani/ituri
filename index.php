<?php require_once('inc/template/header.php') ?>


<section class="landing ">

	<?php   
			if (isset($_GET['home'])) {
	?>
			<h1> gallery</h1>
	<?php

			}  else {
	?>
					<div id="about-pickandmix" class="grid_3">
	    				<div class="text">
	            			<h1 class="introduction">Pick+Mix&copy;</h1>
	            			<p>
				                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
	            			</p>
	       				 </div>
					</div>
					<?php 
						if (isset($email_sent)) {
							include 'inc/template/success.php';
						}else{
							include 'inc/template/call-for-action.php';
						}
					?>
	<?php
			} 
	?>
	
</section>

<?php require_once('inc/template/footer.php');?>