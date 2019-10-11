<?php
$quotes = json_decode(file_get_contents(FCPATH . "assets/quotes.json"), true);
$quote = $quotes[array_rand($quotes, 1)];
?>
		</div>
		<!-- Footer -->
		<footer class="footer hero">
			<div class="content has-text-centered">
				<p><?php echo "\"" . $quote["quote"] . "\"&nbsp;-&nbsp;" . $quote["author"];?></p>
				<span style="font-size:10px">
					Powered by <a href="https://github.com/anthonywww/ConstitutionClubWeb">CCW</a> &bull;
					Copyright &copy; <?php echo date('Y');?> <?php echo $this->config->item("title", "club");?> &bull;
					<a href="https://www.law.cornell.edu/uscode/text/17/107" title="Educational Instance" alt="Educational Instance">U.S.C. § 107 Fair Use</a>
				</span>
			</div>
		</footer>
		<!-- JS -->
		<script type="text/javascript" src="/assets/js/jquery.js" defer></script>
		<script type="text/javascript" src="/assets/js/video.js" defer></script>
<?php if(date('m') == "12"):?>
		<script type="text/javascript" src="/assets/js/snow.js" defer></script>
<?php endif;?>
		<script type="text/javascript" src="/assets/js/script.js" defer></script>
	</body>
</html>
