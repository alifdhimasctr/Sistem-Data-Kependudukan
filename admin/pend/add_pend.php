<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penduduk" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" placeholder="Tempat Lahir" required>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lh" name="tgl_lh" placeholder="Tanggal Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelain</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option>- Pilih -</option>
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
				</div>
			</div>

			

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-6">
					<select name="agama" id="agama" class="form-control" required>
						<option disabled selected>- Pilih Agama -</option>
						<option>Islam</option>
						<option>Kristen</option>
						<option>Katolik</option>
						<option>Hindu</option>
						<option>Buddha</option>
						<option>Konghucu</option>
					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pend" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_pdd (nik, nama, tempat_lh, tgl_lh, jekel, agama, pekerjaan) VALUES (
            '".$_POST['nik']."',
            '".$_POST['nama']."',
			'".$_POST['tempat_lh']."',
			'".$_POST['tgl_lh']."',
            '".$_POST['jekel']."',
			'".$_POST['agama']."',
			'".$_POST['pekerjaan']."'
            )";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pend';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pend';
          }
      })</script>";
    }}
     //selesai proses simpan data
