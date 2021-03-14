<?php $this->load->view($template.'head'); ?>
<!-- top menu -->
<?php $this->load->view($template.'menu'); ?>

<div class="w3-content" style="width: 30%;">
	<div class="w3-center">
    <img src="images/img_avatar4.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
 	</div>

  <form class="w3-container" action="welcome/userin" method="post">
    <div class="w3-section">
      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Username" name="username" required>
      <input class="w3-input w3-border" type="password" placeholder="Password" name="password" required>
      <input class="w3-button w3-block w3-green w3-section w3-padding"  type="submit" name="login" value="Login">
      <input class="w3-check w3-margin-top" type="checkbox"> Remember me
    </div>
  </form>

  <div class="w3-container w3-light-grey">
    <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
  </div>

	<?php $login = $this->session->flashdata('login'); ?>
		<?php if(isset($login)): ?>
			<div class="w3-panel w3-red w3-display-container">
	  		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
	  		<h4>Informasi</h4>
	  		<p class="w3-center">Login anda gagal</p>
			</div>
		<?php endif; ?>

</div>
<br>
<?php $this->load->view($template.'copyright') ?>

<?php $this->load->view($template.'foot'); ?>