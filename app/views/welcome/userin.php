<?php $this->load->view($template.'head'); ?>

<div class="w3-container w3-teal">
	<h1>My Blog</h1>
</div>

<div class="w3-container">
	<h3>Login User</h3>
	<form method="post">
		<label>Login</label>
		<input class="w3-input" type="text" name="username"><br>
		<label>Password</label>
		<input class="w3-input" type="password" name="password"><br>
		<input class="w3-button w3-green" type="submit" name="login" value="Login">
	</form>
	<?php $login = $this->session->flashdata('login'); ?>
	<?php if(isset($login)): ?>
		<div class="w3-panel w3-red w3-display-container">
  		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
  		<h3>Informasi</h3>
  		<p>Login anda gagal</p>
		</div>
	<?php endif; ?>
</div>

<?php $this->load->view($template.'copyright') ?>

<script type="text/javascript">
	$(document).ready(function() {
		let kelas = '<?=$kelas; ?>';

		// alert('halo');
	});
</script>
<?php $this->load->view($template.'foot'); ?>