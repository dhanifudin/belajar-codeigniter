<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <?php if (isset($results)) { ?>
  <table class="table table-striped">
    <thead>
      <th>NIM</th>
      <th>Nama</th>
      <th>Alamat</th>
    </thead>
    <tbody>
    <?php foreach ($results as $data) { ?>
    <tr>
      <td><?php echo $data->nim ?></td>
      <td><?php echo $data->nama ?></td>
      <td><?php echo $data->alamat ?></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <?php echo $links ?>
  <?php } else { ?>
  <div>Tidak ada data</div>
  <?php } ?>
</div>

<?php $this->load->view('layouts/base_end') ?>
