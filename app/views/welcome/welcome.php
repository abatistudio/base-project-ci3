<?php $this->load->view($template.'head'); ?>

<!-- top menu -->
<?php $this->load->view($template.'menu'); ?>

<!-- kontent -->
<div class="w3-container">
	<div class="w3-row-padding">
		<div class="w3-col s12 m8 l8">
			<?php for ($i=1; $i < 4; $i++):?>
				  <h3><a href="#" class="w3-link">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna-<?=$i; ?></a></h3>
				
				<img src="images/img_car.jpg" class="w3-border w3-image-textwrap" alt="The Car">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<hr>
			<?php endfor; ?>
		</div>
		<div class="w3-col s12 m4 l4">
			<p><input class="w3-input w3-border" type="text" name="search" placeholder="Pencarian"></p>
			<img src="images/img_car.jpg" class="w3-border" alt="Norway" style="padding:4px;height: 150px; width:100%">
			<p>
	  		<h3>Blog Terbaru</h3>
			  <ul class="w3-ul">
			    <li><a href="#" class="w3-link">Lorem ipsum dolor sit amet</a></li>
			    <li><a href="#" class="w3-link">onsectetur adipisicing elit</a></li>
			    <li><a href="#" class="w3-link">Ut enim ad minim veniam</a></li>
			    <li><a href="#" class="w3-link">quis nostrud exercitation ullamco</a></li>
			  </ul>
			</p>
		</div>
	</div>
</div>

<?php $this->load->view($template.'formlogin') ?>
<!-- footer -->
<?php $this->load->view($template.'copyright') ?>

<script type="text/javascript">
	$(document).ready(function() {
		let kelas = '<?=$kelas; ?>';

	});
</script>
<?php $this->load->view($template.'foot'); ?>