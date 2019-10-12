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
<?php if(!empty($_SESSION['logged_in'])):?>
<?php if($_SESSION['permission'] >= 30):?>
					<br>
					<i class="fa fa-clock"></i>&nbsp;Page generated in {elapsed_time}s
					&bull; <i class="fa fa-microchip"></i>&nbsp;Memory used {memory_usage}
					&bull; <i class="fa fa-database"></i>&nbsp;Database queries <?php echo get_db_query_count();?>
<?php endif;?>
<?php endif;?>
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
