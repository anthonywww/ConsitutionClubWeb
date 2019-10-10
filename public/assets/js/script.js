$(document).ready(function() {

	// Mobile Navbar
	$(".navbar-burger").click(function() {
		// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
		$(".navbar-burger").toggleClass("is-active");
		$(".navbar-menu").toggleClass("is-active");
	});

	// Console
	console.log('A Constitution Club Web instance https://github.com/anthonywww/ConsitutionClubWeb forged in the %cU%cS%cA%c.', 'background:#AA0000;color:#FFFFFF', 'background:#FFFFFF;color:#000000', 'background:#0000AA;color:#FFFFFF');
});
