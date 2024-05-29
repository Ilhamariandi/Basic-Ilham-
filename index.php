<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card text-left mt-5 mb-5">
                    <div class="card-header text-center">
                        <h1>Form Biodata</h1>
                    </div>
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="form-group">
                                <label for="nama" class="badge badge-primary">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label mr-5">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id=""
                                        value="Laki-Laki"> Laki - Laki
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id=""
                                        value="Perempuan"> Perempuan
                                </label>
                            </div>
                            <div class="form-group mt-3">
                                <label for="alamat" class="badge badge-primary">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="usia" class="badge badge-primary">Usia</label>
                                <input type="text" class="form-control" name="usia" id="usia"
                                    placeholder="Masukkan Usia Anda">
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <button type="reset" class="btn btn-primary">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
