<div class="container mt-4">

<div class="row">
        <div class="col-lg 6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

            <div class="row mb-3">
            <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa </button>
            </div>
            </div>


            <div class="row mb-3">
            <div class="col-lg-6">
                <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="cari mahasiswa" name="keyword" id="keyword" autocomplete="off"> 
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
                </div>
                </form>
            </div>
            </div>

   <div class="row">
    <div class="col-lg-6">
        <!--modal-->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
     <input type="hidden" name="id" id="id">
      <div class="form-group">
          <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama">
      </div>

      <div class="form-group">
          <label for="email">email</label>
      <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
          <label for="NRP">NRP</label>
      <input type="Number" class="form-control" id="NRP" name="NRP">
      </div>

      <div class="form-group">
          <label for="sekolah">Sekolah</label>
      <input type="text" class="form-control" id="sekolah" name="sekolah">
      </div>

      <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <select class="form-control" id="jurusan" name="jurusan">
          <option value="TKR">TEKNIK KENDARAAN RINGAN</option>
          <option value="TSM">TEKHNIK SEPEDA MOTOR</option>
          <option value="TKJ">TEKHNIK KOMPUTER DAN JARINGAN</option>
          <option value="RPL">REKAYASA PERANGKAT LUNAK</option>
          <option value="Multimedia">MULTIMEDIA</option>
          <option value="APH">AGRIBISNIS PERKEMBANGBIAKAN HORTIKULTURA</option>
          <option value="PPT">PERTANIAN DAN PEMULIAAN TANAMAN</option>
        </select>
        </div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
<button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
</div>
</div>
</div>
</div>
<h3>Daftar Mahasiswa</h3>
  <ul class="list-group">
    <?php foreach( $data['mhs'] as $mhs) : ?>
        <li class="list-group-item ">
            <?= $mhs['nama']; ?>
        <a href="<?= BASEURL; ?> /mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda yakin untuk menghapus data ini?');">hapus</a>
        
        <a href="<?= BASEURL; ?> /mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-right m tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id=" <?= $mhs['id']; ?> ">edit</a>

        <a href="<?= BASEURL; ?> /mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right mr-1">detail</a>
    </li>
    <?php endforeach; ?>
    </ul>
   </div>
 </div>
</div>
