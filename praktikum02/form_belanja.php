
  
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>               
        <div class="container-fluid bg-light p-5  shadow-sm">
            <div class="row">
              <div class="col-8">
                <form method="POST" action="form_belanja.php" class="form-horizontal ">
                  <h1 class="text-primary">SINAR ELEKTRONIK</h1>
                  <hr>
                  <div class="form-group row">
                    <label for="nama__pelanggan" class="col-sm-4 col-form-label"><b>Nama Pelanggan</b></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="namapelanggan">
                    </div>
                  </div>
                <!------------------------>

                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-4 pt-0"><b>Pilih Produk</b></legend>
                      <div class="col-sm-8">

                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="kipas_angin" name="produk" value="kipas" required>
                          <label class="form-check-label" for="kipasangin">
                            Kipas Angin
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="TVz" name="produk" value="TVz" required>
                          <label class="form-check-label" for="TV">
                            TV
                          </label>
                        </div>
                        <!--------------------------->
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="Magicom" name="produk" value="magicom" required>
                          <label class="form-check-label" for="Magicom">
                            Magicom
                          </label>
                        </div>

                      </div>  <!---col-->
                    </div> <!---row-->
                  </fieldset> 
                  <div class="form-group row">
                 
                    <label for="jumlah__" class="col-sm-4 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-5">
                      <input type="number" for="produk__" class="form-control" name="jumlah" value="" required>
                    </div>
                  </div>

                  <button href="" type="submit" class="btn btn-primary pl-5 pr-5" name="proses">Kirim</button>
                </form>
              </div> <!-----col-6-->
              <div class="col-4 " >
                  <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-primary p-2 text-white">Daftar Harga</li>
                    <li class="p-2">Kipas Angin : 1.000.000</li>
                    <li class="p-2 bg-light">TV : 3.500.000</li>
                    <li class="p-2">Magicom : 500.000</li>
                    <li class="bg-primary p-2 text-white">*Harga Dapat Berubah Setiap Saat</li>
                  </ul>
              </div>
            
            </div> <!---row-->
        </div> <!---containe-fluid-->

        <div class="container-fluid bg-light mt-5 mb-5 p-5 shadow-sm">
          <h1 class="animate__animated animate__bounce animate__infinite	infinite animate__delay-4s	4s">TOTAL BIAYA : </h1>
          <br>
          <?php
          $proses= $_POST['proses']; 
          $nama_pelanggan = $_POST['namapelanggan'];
          $produk = $_POST['produk'];
          $jumlah = $_POST['jumlah'];

          echo '<br/>Nama Customer: '.$nama_pelanggan;
          echo '<br/>Pilihan Produk : '.$produk;
          echo '<br/>Jumlah Beli : '.$jumlah;
          if($produk == "kipas") {
            echo "<br>Total : " . 1000000 * $jumlah;
          }
          else if ($produk == "TVz") {
            echo "<br>Total : " . 3500000 * $jumlah;
          }
          else {
            echo "<br>Total : " . 500000 * $jumlah;
          }
          ?>
        </div>
        


</body>
</html>