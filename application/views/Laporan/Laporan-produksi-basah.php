<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>er pailaran | system for monitoring estate</title>

  </head>

  <body>
     <table border="2">
                      <thead>
                        
                        <tr>
                          <th style="width: 10%">No.Ref Pro</th>
                          <th>Tanggal</th>
                          <th>Quantity (Kg)</th>
                          <th>Kwalitas (Ms)</th>
                          <th>Status Kebun</th>
                          <th>Keterangan</th>
                          <th style="width: 15%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach($produksi_basah as $row){ 
                        ?>
                        <tr>
                          <td>R.PRO- <?= $no ++?></td>
                          <td><?= date('d F Y', strtotime($row->tanggal)) ?></td>
                          <td><?= $row->hasil ?></td>
                          <td><?= $row->kualitas ?></td>
                          <td><?= $row->nama_afdeling ?></td>
                          <td><?= $row->deskripsi ?></td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <?php } ?>

                      </tbody>
                    </table>
  </body>
</html>