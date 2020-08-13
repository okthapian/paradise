<br/>
<?php 
$id=$_GET['id'];
 ?>
<div class="container">
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="./">Home</a>
        </li>
        <li class="breadcrumb-item active">Baca Program Kerja</li>
      </ol>
	<div class="row">
			    <?php 
        			include'koneksi.php';
        			$data=mysqli_query($konek,"SELECT * FROM proker WHERE id_proker=$id");
        			$new_data=mysqli_fetch_array($data);
        		?>
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
          <p align="center"><img class="img-fluid rounded mb-4" src="img/<?php echo $new_data['foto_proker'] ?>" alt=""></p>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-sm-12">
        	<p align="center">

        		
        		<?php	
        			echo "<b>".$new_data['judul_proker']."</b><br/>";
        			echo $new_data['isi_proker'];
        		 ?>
        	</p>
        </div>
	</div>
</div>