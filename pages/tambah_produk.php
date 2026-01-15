<?php
// pages/tambahproduk.php
?>
<div class="card">
    <h3>Tambah Produk</h3>
    
    <?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>
    
    <form method="post">
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" required maxlength="20">
        </div>

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" required maxlength="100">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Pakaian">Pakaian</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Alat Tulis">Alat Tulis</option>
            </select>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" required min="1" value="0">
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" required min="0" value="0">
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <select name="satuan" required>
                <option value="">-- Pilih Satuan --</option>
                <option value="pcs">pcs</option>
                <option value="box">box</option>
                <option value="kg">kg</option>
                <option value="liter">liter</option>
            </select>
        </div>

        <button type="submit" name="simpan" class="btn btn-tambah">Simpan</button>
        <a href="dashboard.php?page=listproducts" class="btn btn-hapus">Batal</a>
    </form>
</div>

<style>
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    margin-right: 10px;
}

.btn-tambah {
    background: #27ae60;
    color: white;
}

.btn-hapus {
    background: #e74c3c;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}
</style>