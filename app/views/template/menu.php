<div class="w3-container w3-black">
	<div class="w3-bar w3-large w3-black w3-opacity-min">
		<a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i>&nbsp;<b>TS</b>CODE</a></a>
		<div class="w3-dropdown-hover">
    	<button class="w3-button">BLOG</button>
	    <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    	<?php foreach ($category as $row): ?>
	      	<a href="<?=$kelas.'/readpostsbycategory/'.$row['idcategory']; ?>" class="w3-bar-item w3-button"><?=$row['nmcategory']; ?></a>
	      <?php endforeach; ?>
	    </div>
  	</div>
		<a href="#about" class="w3-bar-item w3-button">ABOUT</a>
		<a href="#contact" class="w3-bar-item w3-button">CONTACT</a>
<?php if(!$this->session->userdata('user')): ?>
		<a href="welcome/userin" class="w3-bar-item w3-button">LOGIN</a>
<?php else: ?>
		<a href="back/userout" class="w3-bar-item w3-button">LOGOUT</a>
<?php endif; ?>
	</div>
</div>