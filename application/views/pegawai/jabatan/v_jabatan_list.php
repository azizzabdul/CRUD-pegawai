<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
          </div>
<div class="row">
<div class="col-lg-12">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <div class="mr-auto bd-highlight font-weight-bold text-primary"><?= $title2 ?></div>
        <div class="bd-highlight font-weight-bold text-primary">
            <a href="<?= base_url('pegawai/Jabatan/tambah')?>" class="btn btn-lg btn-primary">Tambah</a>
        </div>
    </div>
    <div class="table-responsive p-3">
    <?php if ($this->session->flashdata('msg')): ?>
      <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          <?php echo $this->session->flashdata('msg'); ?>
      </div>
    <?php endif;?>
      <table class="table align-items-center table-flush table-hover" id="dataTableHover">
        <thead class="thead-light">
          <tr align="center">
            <th>No</th>
            <th>Jabatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i= 1; foreach($jabatan as $list) {?>
          <tr align="center">
              <td>
                <?= $i ?>
              </td>

              <td>
                <?= $list->jabatan ?>
              </td>

              <td>
              <a href='<?= site_url('pegawai/Jabatan/edit/' . $list->id) ?>' class='btn btn-info btn-sm'><i class='fa fa-edit'></i></a>
              <!-- <a href='<?= site_url('admin/Siswa/hapus/' . $list->id) ?>' class='btn btn-success btn-sm'><i class='fa fa-edit'></i></a> -->
              <a onclick="return confirm('Apakah anda yakin hapus data ini ?')" href='<?= site_url('pegawai/Jabatan/hapus/' . $list->id) ?>' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
              </td>
          </tr>
        </tbody>
        <?php $i++; }?>
      </table>
    </div>
  </div>
</div>
</div>
</div>