<div class="container">
    <div class="row mt-5">
        <div class="col mt-4">

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form group">
            <label for="kode">NIM</label>
            <input type="numeric" class="form-control" id="NIM" placeholder="Masukan NIM">
        </div>
        <div class="form group">
            <label for="kode">Nama_mahasiswa</label>
            <input type="text" class="form-control" id="Nama_mahasiswa" placeholder="Masukan Nama_Mahasiswa">
        </div>
        <div class="form group">
            <label for="kode">Prodi</label>
            <input type="text" class="form-control" id="Prodi" placeholder="Masukan Prodi">
        </div>
        <div class="form group">
            <label for="kode">Semester</label>
            <input type="numeric" class="form-control" id="Semester" placeholder="Masukan Semester">
        </div>
        <div class="form group">
            <label for="kode">SKS</label>
            <input type="numeric" class="form-control" id="SKS" placeholder="Masukan SKS">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama_Mahasiswa</th>
      <th scope="col">Prodi</th>
      <th scope="col">Semester</th>
      <th scope="col">SKS</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($mahasiswa as $mhs): ?>
        <tr>
        <th scope="row"><?= htmlspecialchars($mhs['NIM']); ?></th>
        <td><?= htmlspecialchars($mhs['Nama_Mahasiswa']); ?></td>
        <td><?= htmlspecialchars($mhs['Prodi']); ?></td>
        <td><?= htmlspecialchars($mhs['Semester']); ?></td>
        <td><?= htmlspecialchars($mhs['SKS']); ?></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>