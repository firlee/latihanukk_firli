<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form action="simpan_catatan.php" method="post">
            <div class="form-group">
                <label>Tanggal</label>
                <input name="tanggal" type="date" required class=form-control placeholder="Pilih Tanggal">
            </div>
            <div class="form-group">
                <label>Waktu</label>
                <input name="jam" type="time" required class=form-control placeholder="Masukkan Waktu">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input name="harga" type="text" required class=form-control placeholder="Masukkan Harga">
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input name="nama barang" type="text" required class=form-control placeholder="Nama Barang ">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-paint-brush"></i> CLEAR</button>
        </form>
    </div>
</div>