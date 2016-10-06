	<div id="call-for-action" class="grid_3">
		<div id="get-in-touch">
			<button id="contact-us">Get mixing</button>
			<div id="contact-form">
				<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <label for="name">Name:</label>
                    <input type="name" id="name" name="name" placeholder="<?php isset($name_error)? placeholder_text('don\'t forget to enter your name '): ''; ?>" value="<?php value_holder(@$name); ?>">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="<?php isset($email_error)? print $email_error : ''; ?>" value="<?php value_holder(@$email); ?>">

                    <label for="phone">Phone: <span>optional)</span></label>
                    <input type="phone" id="phone" name="phone" placeholder="<?php isset($phone_error)? placeholder_text('don\'t forget to enter your phone '): ''; ?>" value="<?php value_holder(@$phone); ?>">

					<label>Website Type</label>
                    <select id="language" name="website_type">
                    	<option value="" selected="selected">Select Type</option>
                    	<option value="basic">Basic Website</option>
                    	<option value="blog">Blog</option>
                    	<option value="e-commerce">E-Commerce</option>
                    	<option value="other">Custom Design</option>
					</select>

					<button type="submit">Get in touch</button>
			</div>
		</div>
	</div>