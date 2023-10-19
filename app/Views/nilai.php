<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: gray;
        }
    </style>
</head>
  <body>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Nilai siswa</h4>
            <button class="btn btn-primary btn-sm">Tambah</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
              <tr>
                  <th>No</th>
                  <th>Penilaian</th>
                  <th>nilai un</th>
                  <th>jumlah un</th>
                  <th>NPB</th>
                  <th>NPL</th>
                  <th>Jumlah nilai ppdb</th>
                  <th>tahun</th>
                  <th>kode mk</th>
              </tr>
              <?php foreach($nilai as $key=>$item):?>
              <tr>
                  <td><?= $key+1?></td>
                  <td><?= $item['Penilaian']?></td>
                  <td><?= $item['nilai_un']?></td>
                  <td><?= $item['jumlah_un']?></td>
                  <td><?= $item['NPD']?></td>
                  <td><?= $item['NPL']?></td>
                  <td><?= $item['Jumlah_total_nilai_akhir_PPDB']?></td>
                  <td><?= $item['tahun']?></td>
                  <td><?= $item['kode_mk']?></td>
              </tr>
              <?php endforeach; ?>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>