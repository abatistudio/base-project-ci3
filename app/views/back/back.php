<?php $this->load->view($template.'head'); ?>

	<div class="w3-container w3-teal">
  	<h1>Blog Admin</h1>
	</div>

	<div class="w3-container">
		<h3>This Back</h3>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  <p><a class="w3-button w3-red" href="back/userout">Logout</a></p>
	</div>

<?php $this->load->view($template.'copyright') ?>

<script type="text/javascript">
	$(document).ready(function() {
		let kelas = '<?=$kelas; ?>';

	});
</script>
<?php $this->load->view($template.'foot'); ?>