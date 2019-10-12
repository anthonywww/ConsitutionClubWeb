<section class="section">
	<div class="columns">
		<div class="column is-4 is-offset-4">
			<h1 class="title">Contact Us</h1>
			<h2 class="subtitle">Send us your hate mail!</h2>
<?php if (!empty($error_message)):?>
			<p class="content error-message"><b>Error:</b>&nbsp;<?php echo $error_message;?></p>
<?php endif;?>
<?php if (!empty($success_message)):?>
			<p class="content success-message"><b>Success:</b>&nbsp;<?php echo $success_message;?></p>
<?php endif;?>
			<form enctype="application/x-www-form-urlencoded" action="/contact-us" method="post">
				<div class="field">
					<p class="control has-icons-left has-icons-right">
<?php if (empty($_SESSION["logged_in"])):?>
						<input name="email" class="input" type="email" placeholder="Your email" required>
<?php else:?>
						<input name="email" class="input" type="email" value="<?php echo $_SESSION["email"];?>" disabled>
<?php endif;?>
						<span class="icon is-small is-left">
							<i class="fa fa-address-card"></i>
						</span>
					</p>
				</div>

				<div class="field">
					<p class="control has-icons-left">
						<input name="subject" class="input" type="text" placeholder="Subject" maxlength="40" required>
						<span class="icon is-small is-left">
							<i class="fa fa-info-circle"></i>
						</span>
					</p>
				</div>

				<div class="field">
					<p class="control">
						<textarea id="message" name="message" placeholder="Your message" maxlength="255" class="textarea" required></textarea>
					</p>
					<span id="message_counter"></span>
				</div>

				<script>
					document.addEventListener('DOMContentLoaded', function(event) {
						$("#message").on("input", function(){
							var len = $("#message").val().length;
							var maxlen = $("#message").attr("maxlength");
							$("#message_counter").text(len + " / " + maxlen);
						});
					});
				</script>

<?php if (empty($_SESSION["logged_in"])):?>
				<!-- TODO: Require a CAPTCHA -->
<?php endif;?>

				<div class="field">
					<p class="control">
						<input name="csrf_token" type="hidden" value="<?php echo $csrf_token;?>">
						<button class="button is-link" type="submit">
							<i class="fa fa-envelope"></i>&nbsp;Send
						</button>
					</p>
				</div>
			</form>
		</div>
	</div>
</section>
