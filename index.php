<?php require_once('inc/header.php') ?>

<section class="landing">
	<div id="about-pickandmix">
		<p>
			"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
		</p>
	</div>
	<div id="call-for-action">
		<div id="get-in-touch">
			<button id="contact-us">Get mixing</button>
			<div id="contact-form">
				<form method="post" action="<?php $_SEVER['REQUEST_SELF']; ?>">
					<ol>
						<li><label>name</label><input type="text" name="name"></li>
						<li><label>email</label><input type="email" name="email"></li>
						<li><label>phone</label><input type="phone" name="phone"></li>
						<li>
							<label>Website type</label>
								<ul>
									<li>
										<span>Basic website</span>
										<input type="radio" name="website-type" value="basic">
									</li>
									<li>
										<span>Blog </span>
										<input type="radio" name="website-type" value="blog">
									</li>
									<li>
										<span>e-comemerce</span>
										<input type="radio" name="website-type" value="e-com">
									</li>
									<li>
										<span>customer design</span>
										<input type="radio" name="website-type" value="other">
									</li>
								</ul>
						</li>
						<li><button type="submit">Get in touch</button></li>
					</ol>
				</form>
			</div>
		</div>
	</div>
</section>

<?php require_once('inc/footer.php');?>