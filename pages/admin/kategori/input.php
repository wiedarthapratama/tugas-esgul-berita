<?php
    session_start();
    if(!$_SESSION['email']){
        echo "<script>document.location='?p=login'</script>";
    }
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            Input Kategori
        </h5>
        <form method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                        <a href="?p=admin-kategori" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php 
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];

        include "./config/config_header.php";
        $sql = "INSERT INTO kategori (nama) VALUES ('$nama')";
        if ($conn->query($sql) === TRUE) {
        echo "<script>document.location='?p=admin-kategori'</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        include "./config/config_footer.php";
    }
?>