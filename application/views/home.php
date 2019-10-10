<section class="hero is-fullheight is-welcome-cover" id="home_main">
	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="content is-large">
				<h1 class="subtitle is-1 is-uppercase">
					<?php echo $this->config->item("title", "club");?>
				</h1>
				<h2 class="subtitle is-3">
					<?php echo $this->config->item("description", "club");?>
				</h2>
				<div class="block">
					<a href="#home_goals" class="button is-link">
						Learn More
					</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="hero is-fullheight" id="home_goals">
	<div class="hero-body">
		<div class="container white-glass-container">
			<div class="columns">
				<div class="column is-8 is-offset-2 has-text-centered">
					<div class="block">
						<h2 class="subtitle is-2">Title</h2>
					</div>
					<div class="block">
						<h3 class="subtitle is-5">Subtitle</h3>
					</div>
					<div class="block">
						<blockquote class="is-large">
							Quote
						</blockquote>
						<br>
						<blockquote class="is-large">
							Quote
						</blockquote>
					</div>
					<div class="block">
						<a href="#home_news" class="button is-link">
							Recent News
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="hero is-fullheight" id="home_news">
	<div class="hero-body">
		<div class="container white-glass-container">
			<div class="columns">
				<div class="column is-8 is-offset-2 has-text-centered">
					<div class="block">
						<h2 class="subtitle is-2">Title</h2>
					</div>
					<div class="block">
						<blockquote class="is-large">
							Quote
						</blockquote>
					</div>

					<div class="columns is-centered">
						<div class="column is-4 has-text-centered">
							<i class="fa fa-cogs fa-3x"></i>
							<h5 class="subtitle is-5 is-uppercase">Subject</h5>
							<p>Subject Description</p>
						</div>
						<div class="column is-4 has-text-centered">
							<i class="fa fa-object-ungroup fa-3x"></i>
							<h5 class="subtitle is-5 is-uppercase">Subject</h5>
							<p>Subject Description</p>
						</div>
						<div class="column is-4 has-text-centered">
							<i class="fa fa-image fa-3x"></i>
							<h5 class="subtitle is-5 is-uppercase">Subject</h5>
							<p>Subject Description</p>
						</div>
						<div class="column is-4 has-text-centered">
							<a class="twitter-timeline" data-lang="en" data-dnt="true" data-theme="light" href="https://twitter.com/POTUS?ref_src=twsrc%5Etfw" crossorigin="anonymous">Tweets by POTUS</a>
							<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
