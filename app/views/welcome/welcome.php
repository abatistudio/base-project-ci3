<?php $this->load->view($template.'head'); ?>

<!-- top menu -->
<?php $this->load->view($template.'menu'); ?>

<!-- kontent -->
<div class="w3-container">
	<div class="w3-row-padding">
		<div class="w3-col s12 m8 l8">
			<?php //for ($i=1; $i < 4; $i++):?>
			<?php foreach ($posts as $row):?>
				  <h3><a href="<?=$kelas; ?>/readposts/<?=$row['slugposts']; ?>" class="w3-link"><?=$row['titleposts'] ?></a></h3>
					<img src="images/<?=$row['thumbnailposts']; ?>" class="w3-border w3-image-textwrap" alt="<?=$row['thumbnailposts']; ?>">
					<?=$row['bodyposts']; ?>
					<p><a href="<?=$kelas; ?>/readposts/<?=$row['slugposts']; ?>" class="w3-link">Read More..</a></p>
					<div style="clear: left"></div>
					<hr>
			<?php endforeach; ?>
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

<?php $this->load->view($template.'foot'); ?>
