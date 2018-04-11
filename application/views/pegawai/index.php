<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Daftar Pegawai</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <table class="table table-striped">
      <thead>
        <th>No</th>
        <th>Nama</th>
        <th>
          <a class="btn btn-primary" href="<?php echo site_url('pegawai/create') ?>">
            Tambah
          </a>
        </th>
      </thead>
      <tbody>
        <?php $number = 1; foreach($pegawai as $row) { ?>
        <tr>
          <td>
            <a href="<?php echo site_url('pegawai/show/'.$row->id) ?>">
              <?php echo $number++ ?>
            </a>
          </td>
          <td>
            <a href="<?php echo site_url('pegawai/show/'.$row->id) ?>">
              <?php echo $row->nama ?>
            </a>
          </td>
          <td>
            <a class="btn btn-info" href="<?php echo site_url('pegawai/edit/'.$row->id) ?>">
              Ubah
            </a>
            <button class="btn btn-danger">Hapus</button>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>
