<br/>
<div class="container">
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="./">Home</a>
        </li>
        <li class="breadcrumb-item active">Program Kerja</li>
     </ol>
	<div class="row">
		<?php 
			include'koneksi.php';
			$proker=mysqli_query($konek,"SELECT * FROM proker");
			while ($data=mysqli_fetch_array($proker)) {
		?>
			<div class="col-lg-4 mb-4">
	          <div class="card h-100 text-center">
	            <img class="card-img-top" width="40%" src="img/<?php echo $data['foto_proker'] ?>" alt="">
	            <div class="card-body">
	              <h4 class="card-title"><?php echo $data['judul_proker']; ?></h4>
	              <p class="card-text"><?php echo substr($data['isi_proker'],0,45),"......" ?></p>
	            </div>
	            <div class="card-footer">
	              <a href="index.php?halaman=baca&id=<?php echo $data['id_proker'] ?>">Selengkapnya</a>
	            </div>
	          </div>
	        </div>
		<?php
			}
		 ?>
	</div>
</div>