
			<div class="navbar-static-bottom row-fluid">
			<Br><b>Footer Footer Footer Footer Footer Footer Footer Footer </b>
			</div>
		</div>
		<div class="col-md-2">
			<?php 
				echo "<pre><b>GET:</b><br>";
				var_dump($_GET);
				echo "<b>POST:</b><br>";
				var_dump($_POST);
				echo "</pre>"; 
				echo site_url();
			?>
		</div>


	</div>
</div>
<?php
include 'footer.php';
?>