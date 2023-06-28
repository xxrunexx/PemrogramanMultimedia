<ul class="collection">
	<?php foreach ($home_post as $data) :?> <!-- Perulangan untuk menampilkan data -->
		<li class="collection-item avatar">
			<img src="<?=site_url("upload/post/".$data['filename']) ?>" class="circle">
			<p class="title"><?= $data['name'] ;?></p>
			<small><?= $data['description'] ;?></small>
			<a href="<?=site_url('welcome/index/'.$data['id'])  ?>" class="secondary-content"> <!-- Masuk ke halaman detail data... -->
				<i class="material-icons">visibility</i> <!-- Ketika icon visibility ditekan -->
			</a>
		</li>
	<?php endforeach ?>
</ul>
<button>
	<a href="<?php echo site_url('welcome/deleteall/'); ?>"> DELETE ALL</a>
	
</button>