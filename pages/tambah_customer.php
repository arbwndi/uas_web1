<?php
include __DIR__ . '/../koneksi.php';

if (isset($_POST['simpan'])) {
    $kode     = $_POST['kode_pelanggan'];
    $nama     = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $nohp    = $_POST['no_hp'];
    $email     = $_POST['email'];

    mysqli_query($conn, "
        INSERT INTO barang
        (kode_pelanggan, nama_pelanggan, alamat, no_hp, email,)
        VALUES
        ('$kode', '$nama', '$alamat', '$nohp', '$email',)
    ");

    header("Location: dashboard.php?page=listproducts");
}
?>

<style>
    .card {
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
        max-width: 720px;
        margin-right: auto;
        margin-left: 0;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .card h3 {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 6px;
    }

    select,
    input {
        width: 100%;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    input:focus {
        outline: none;
        border-color: #3498db;
    }

    .btn {
        padding: 10px 16px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-tambah {
        background: #27ae60;
    }

    .btn-tambah:hover {
        background: #219150;
    }

    .btn-hapus {
        background: #c0392b;
    }

    .btn-hapus:hover {
        background: #a93226;
    }
</style>

<div class="card">
    <h3>Tambah pelanggan</h3>

    <form method="post">
        <div class="form-group">
            <label>Kode pelanggan</label>
            <input type="text" name="kode_pelanggan" required>
        </div>

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="pria">pria</option>
                <option value="wanita">wanita</option>
            </select>
        </div>



        <button type="submit" name="simpan" class="btn btn-tambah">Simpan</button>
        <a href="dashboard.php?page=List customer" class="btn btn-hapus">Batal</a>
    </form>
</div>
