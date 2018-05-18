<!DOCTYPE html>
<html>
  <head>
    <title>Mahasiswa Pagination</title>
  </head>

  <body>
    <div>
      <h1>Mahasiswa</h1>

      <?php if (isset($results)) { ?>
      <table>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
        </tr>

        <?php foreach ($results as $data) { ?>
        <tr>
          <td><?php echo $data->nim ?></td>
          <td><?php echo $data->nama ?></td>
          <td><?php echo $data->alamat ?></td>
        </tr>
        <?php } ?>
      </table>
      <?php echo $links ?>
      <?php } else { ?>
      <div>Tidak ada data</div>
      <?php } ?>

    </div>
  </body>
</html>
