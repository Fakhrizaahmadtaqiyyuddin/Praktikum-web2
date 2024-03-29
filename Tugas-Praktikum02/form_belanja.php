<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Belanja</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1>Belanja Online</h1>
                <form action="form_belanja.php" method="POST">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih_produk" id="pilih_produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="pilih_produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="kulkas">
                                <label for="pilih_produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="mesin cuci">
                                <label for="pilih_produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="offset-4 col-8">
                        <button name="kirim" type="kirim" class="btn btn-success">Kirim</button>
                    </div>
            </div>

            </form>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
                    <div class="list-group-item">
                        TV : Rp4.200.000
                    </div>
                    <div class="list-group-item">
                        Kulkas : Rp3.100.000
                    </div>
                    <div class="list-group-item">
                        Mesin Cuci : Rp3.800.000
                    </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga dapat berubah setiap waktu!</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Customer</th>
                <th scope="col">Pilih Produk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['kirim'])) {
                    $customer = $_POST['customer'];
                    $produk = $_POST['pilih_produk'];
                    $jumlah = $_POST['jumlah'];
                    if ($produk == 'TV'){
                        $harga = 4200000;
                    }
                     else if ($produk == 'kulkas') {
                        $harga = 3100000;
                    } 
                    else if ($produk == 'mesin cuci') {
                        $harga = 3800000;
                    } 
                    else  {
                        $harga = 0;
                    }
                    $total_harga = $harga * $jumlah
                }
                ?>

                    <tr>
                    <td><?= $customer ?></td>
                    <td><?= $produk ?></td>
                    <td><?= $jumlah ?></td>
                    <td><?= number_format($total_harga); ?></td>
                </tr>
                
            </tbody>
</body>

</html> 