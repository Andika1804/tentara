
<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('tentara/tambah')?>" class="btn btn-primary">Tambah Data Tentara</a>
        </div>
</div>

<table class="table mt-3" id="example">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3> Daftar Tentara</h3>
            <ul class="list-group">
                <?php foreach ( $tentara as $tnr ) : ?>
                    <li class="list-group-item">
                        <?= $tnr['nama'] ?>
                        <a href="<?= base_url(); ?>tentara/hapus/<?= $tnr['id']; ?>
                        " class="badge badge-danger float-right" onclick="return">Hapus</a>
                        <a href="<?= base_url(); ?>tentara/detail/<?= $tnr['id']; ?>
                        " class="badge badge-primary float-right" onclick="return">Detail</a>
                        
                    </li>
                <?php endforeach; ?>
             </ul>
        </div>
    </div>

</div>