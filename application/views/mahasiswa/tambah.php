<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
  		<div class="card-header">
    Form Tambah Data Mahasiswa
  </div>
  <div class="card-body">
  	<?= validation_errors(); ?>
  		<font action="" method="post">
				 <div class="form-group">
    				<label for="nama">Nama</label>
    					<input type="text" name="nama" class="form-control" id="nama">
 				 </div>
 				  <div class="form-group">
    				<label for="nrp">NRP</label>
    					<input type="text" name="nrp" class="form-control" id="nrp">
 				 </div>
 				 <div class="form-group">
    				<label for="gmail">Gmail</label>
    					<input type="text" name="gmail" class="form-control" id="gmail">
 				 </div>
				  <div class="form-group">
				    <label for="jurusan">Jurusan</label>
				    <select class="form-control" id="jurusan" name="jurusan">
				      <option value="Teknik Informatika">Teknik Informatika</option>
				      <option value="Teknik Industri">Teknik Industri</option>
				      <option value="Teknik Pangan">Teknik Pangan</option>
				      <option value="Teknik Mesin">Teknik Mesin</option>
				      <option value="Teknik Panilogi">Teknik Panologi</option>
				      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
				      
				    </select>
				  </div>
				  <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah Data </button>
				
				
			</font>
   
  </div>
</div>

		
			
		</div>
		
	</div>
	











</div>