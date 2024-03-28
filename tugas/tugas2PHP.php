<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2 class="mt-4 mb-4">Form Belanja</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="namaPelanggan">Nama Pelanggan:</label>
        <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" required>
      </div>
      <div class="form-group">
        <label for="namaProduk">Nama Produk:</label>
        <select class="form-control" id="namaProduk" name="namaProduk" required>
          <option value="TV">TV</option>
          <option value="KULKAS">KULKAS</option>
          <option value="MESIN CUCI">MESIN CUCI</option>
          <option value="AC">AC</option>
        </select>
      </div>
      <div class="form-group">
        <label for="jumlahBeli">Jumlah Beli:</label>
        <input type="number" class="form-control" id="jumlahBeli" name="jumlahBeli" required>
      </div>
      <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $namaPelanggan = $_POST["namaPelanggan"];
      $namaProduk = $_POST["namaProduk"];
      $jumlahBeli = $_POST["jumlahBeli"];
      
      $hargaSatuan = 0;
      switch ($namaProduk) {
        case 'TV':
          $hargaSatuan = 1000000;
          break;
        case 'KULKAS':
          $hargaSatuan = 2000000;
          break;
        case 'MESIN CUCI':
          $hargaSatuan = 1500000;
          break;
        case 'AC':
          $hargaSatuan = 3000000;
          break;
        default:
          break;
      }
      
      $totalBelanja = $hargaSatuan * $jumlahBeli;
      $diskon = 0.2 * $totalBelanja;
      $ppn = 0.1 * ($totalBelanja - $diskon);
      $hargaBersih = ($totalBelanja - $diskon) + $ppn;
    ?>
    <div class="mt-4">
      <h4>Detail Pembelian:</h4>
      <p>Nama Pelanggan: <?php echo $namaPelanggan; ?></p>
      <p>Nama Produk: <?php echo $namaProduk; ?></p>
      <p>Jumlah Beli: <?php echo $jumlahBeli; ?></p>
      <p>Harga Satuan: <?php echo "Rp " . number_format($hargaSatuan, 0, ',', '.'); ?></p>
      <p>Total Belanja: <?php echo "Rp " . number_format($totalBelanja, 0, ',', '.'); ?></p>
      <p>Diskon: <?php echo "Rp " . number_format($diskon, 0, ',', '.'); ?></p>
      <p>PPN: <?php echo "Rp " . number_format($ppn, 0, ',', '.'); ?></p>
      <p>Harga Bersih: <?php echo "Rp " . number_format($hargaBersih, 0, ',', '.'); ?></p>
    </div>
    <?php } ?>
  </div>
</body>
</html>
