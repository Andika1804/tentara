<div class="container">
    <div class="row mt-">
        <div cldivss="col-md-6"></a>

                    <div class="card">
            <div class="card-header">
                Detail Data Tentara
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $tentara['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $tentara ['id_pangkat'] .' '. $tentara
                ['pangkat']; ?></h6>
                <p class="card-text"><?= $tentara ['id_wilayah'] .' '. $tentara['wilayah']; ?></p>
                <a href="<?= base_url(); ?>tentara" class="btn btn-primary">
                kembali</a>
            </div>
            </div>



    </div>
</div>