<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->config->item("title", "club") . (empty($title) ? "" : " - " . $title);?></title>
		<meta charset="UTF-8">
		<meta name="description" content="<?php echo $this->config->item("description", "club");?>">
		<meta name="tags" content="u.s. constitution,constitution club,instance,constitution,club,open source">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.png" type="image/x-icon">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width, height=device-height">
		<meta property="og:title" content="<?php echo $this->config->item("title", "club") . (empty($title) ? "" : " - " . $title);?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://<?php echo base_url();?>">
		<meta property="og:image" content="/assets/img/logo.png">
		<meta property="og:site_name" content="Constitution Club">
		<meta property="og:description" content="<?php echo $this->config->item("description", "club");?>">
		<meta property="og:locale" content="language_en_US">
		<meta name="theme-color" content="#FF0000">
		<meta name="msapplication-navbutton-color" content="#FF0000">
		<meta name="apple-mobile-web-app-status-bar-style" content="#FF0000">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/bulma.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	</head>
	<!-- Body -->
	<body>
		<span id="top"></span>
		<div id="body-container">
			<div id="header" class="noselect">
				<nav class="navbar">
					<div class="navbar-brand">
						<a class="navbar-item navbar-item-home" href="/">
							<img src="/assets/img/title.png" alt="<?php echo $this->config->item("title", "club");?>">
						</a>
						<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>

					<div class="navbar-menu">
						<div class="navbar-start">
							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link is-arrowless" href="/about-us">
									<span><i class="fa fa-users"></i>&nbsp;About Us</span>
								</a>
								<div class="navbar-dropdown">
									<a class="navbar-item" href="/about-us/constitution">
										<span><i class="fa fa-quote-left"></i>&nbsp;Club Constitution</span>
									</a>
									<a class="navbar-item" href="/about-us/goals">
										<span><i class="fa fa-handshake"></i>&nbsp;Goals</span>
									</a>
									<a class="navbar-item" href="/about-us/leadership">
										<span><i class="fa fa-graduation-cap"></i>&nbsp;Leadership</span>
									</a>
								</div>
							</div>
							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link is-arrowless" href="/constitution">
									<span><i class="fa fa-book"></i>&nbsp;U.S. Constitution</span>
								</a>
								<div class="navbar-dropdown">
									<a class="navbar-item" href="/constitution/about">
										<span><i class="fa fa-question"></i>&nbsp;What is it</span>
									</a>
									<hr class="navbar-divider">
									<a class="navbar-item" href="/constitution/preamble">
										<span><i class="fa fa-bell"></i>&nbsp;Preamble</span>
									</a>
									<a class="navbar-item" href="/constitution/articles">
										<span><i class="fa fa-university"></i>&nbsp;Articles</span>
									</a>
									<a class="navbar-item" href="/constitution/ammendments">
										<span><i class="fa fa-archive"></i>&nbsp;Ammendments</span>
									</a>
								</div>
							</div>
							<a class="navbar-item navbar-item-posts" href="/news">
								<span><i class="fa fa-newspaper"></i>&nbsp;News</span>
							</a>
							<a class="navbar-item navbar-item-events" href="/event">
								<span><i class="fa fa-flag"></i>&nbsp;Events</span>
							</a>
							<a class="navbar-item navbar-item-events" href="/contact-us">
								<span><i class="fa fa-envelope"></i>&nbsp;Contact Us</span>
							</a>
						</div>

						<div class="navbar-end">
							<div class="navbar-item">
								<div class="buttons">
									
									<a class="button is-link">
										<i class="fa fa-user-circle"></i>&nbsp;Log In
									</a>

								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<br>
