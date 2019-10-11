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
						<video id='my-video' class='video-js' controls preload='auto' width='640' height='264' poster='/assets/img/main_video_poster.png' data-setup='{}'>
							<source src='/assets/media/main_video.webm' type='video/webm'>
							<source src='/assets/media/main_video.mp4' type='video/mp4'>
							<p class='vjs-no-js'>
								To view this video please enable JavaScript, and consider upgrading to a web browser that <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
							</p>
						</video>
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
						<div class="column is-8 has-text-centered">
							<a class="twitter-timeline" data-lang="en" data-height="350" data-dnt="true" data-link-color="#1A378E" href="https://twitter.com/POTUS?ref_src=twsrc%5Etfw">Tweets by POTUS</a>
							<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
