<?php require_once('inc/header.php') ?>

<section class="landing grid_6">
	<div id="about-pickandmix" class="grid_3">
    	<div class="text">
            <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
	</div>
	<div id="call-for-action" class="grid_3">
		<div id="get-in-touch">
			<button id="contact-us">Get mixing</button>
			<div id="contact-form">
				<form method="post" action="<?php $_SEVER['PHP_SELF']; ?>">
                	
                    <label for="name">Name:</label><br />
                    <input type="name" id="name" name="name"><br />

                    <label for="email">Email:</label><br />
                    <input type="email" id="email" name="email"><br />

                    <label for="phone">Phone:</label><br />
                    <input type="phone" id="phone" name="phone"><br />

					<label>Website Type</label><br />
                    <select id="language" name="user_language">
                    	<option value="type">Select Type</option>
                    	<option value="basic">Basic Website</option>
                    	<option value="blog">Blog</option>
                    	<option value="e-commerce">E-Commerce</option>
                    	<option value="other">Custom Design</option>
					</select>

					<button type="submit">Get in touch</button><br />
			</div>
		</div>
	</div>
</section>

<?php require_once('inc/footer.php');?>