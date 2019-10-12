<section class="section">
	<div class="columns">
		<div class="column is-4 is-offset-4">
			<h1 class="title">Login</h1>
			<h2 class="subtitle">Login to the <?php echo $this->config->item("title", "club");?></h2>
<?php if (!empty($error_message)):?>
			<p class="content error-message"><b>Error:</b>&nbsp;<?php echo $error_message;?></p>
<?php endif;?>
			<form enctype="application/x-www-form-urlencoded" action="/user/login" method="post">
				<div class="field">
					<p class="control has-icons-left has-icons-right">
						<input name="email" class="input" type="<?php echo empty($this->config->item("admin_password", "club")) ? "email" : "text";?>" placeholder="Email" required>
						<span class="icon is-small is-left">
							<i class="fa fa-envelope"></i>
						</span>
					</p>
				</div>

				<div class="field">
					<p class="control has-icons-left">
						<input name="password" class="input" type="password" placeholder="Password" required>
						<span class="icon is-small is-left">
							<i class="fa fa-lock"></i>
						</span>
					</p>
				</div>

				<div class="field">
					<p class="control">
						<input name="csrf_token" type="hidden" value="<?php echo $csrf_token;?>">
						<button class="button is-link" type="submit">
							<i class="fa fa-sign-in-alt"></i>&nbsp;Login
						</button>
					</p>
				</div>
			</form>
		</div>
	</div>
</section>
