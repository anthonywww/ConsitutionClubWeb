<section class="section">
	<div class="columns">
		<div class="column is-4 is-offset-4">
			<h1 class="title">Messages</h1>
			<h2 class="subtitle">Contact Us Messages</h2>
<?php if (!empty($error_message)):?>
			<p class="content error-message"><b>Error:</b>&nbsp;<?php echo $error_message;?></p>
<?php endif;?>
<?php if (!empty($success_message)):?>
			<p class="content success-message"><b>Success:</b>&nbsp;<?php echo $success_message;?></p>
<?php endif;?>




		</div>
	</div>
</section>
