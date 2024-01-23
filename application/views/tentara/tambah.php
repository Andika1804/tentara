<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Tentara
                </div>
                <div class="card-body">
                    <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Masukan Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="pangkat">Masukan Pangkat</label>
                            <select class="form-control" id="pangkat" name="pangkat">
                                <?php foreach ($pangkat as $pkt): ?>
                                    <option value="<?= $pkt["id_pangkat"] ?>">
                                        <?= $pkt["pangkat"] ?> <?= $pkt["id_pangkat"] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode_tugas">Kode Penempatan Tugas</label>
                            <select class="form-control" id="kode_tugas" name="kode_tugas">
                                <?php foreach ($wilayah as $wly): ?>
                                    <option value="<?= $wly["id_wilayah"] ?>">
                                        <?= $wly["id_wilayah"] ?> <?= $wly["wilayah"] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <input class="btn btn-primary mt-3" type="submit" name="tombolTambah" value="tombol data"> 
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
