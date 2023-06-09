<?= $this->extend('layout/templates') ?>
<?= $this->section('content') ?>

<?= $this->include('component/alert') ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pelanggan</h3>
            </div>
            <div class="card-body">
                <a href="<?= base_url('pelanggan/create') ?>" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tipe</th>
                            <th>Penawaran Diskon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(count(esc($pelanggan)) > 0){
                            $i = 1;
                    ?>
                        <?php foreach(esc($pelanggan) as $p) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= esc($p->tipe) ?></td>
                                <td><?= number_format(esc($p->discount)).' %' ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?= base_url('pelanggan/update/'.esc($p->id)) ?>" class="btn btn-warning text-light rounded mx-1" title="Edit Data">
                                            <i class="fa fa-edit"></i> Edit Data
                                        </a>
                                        <a href="<?= base_url('pelanggan/delete/'.esc($p->id)) ?>" onclick="if(confirm('Are you sure to delete this data?') === false) event.preventDefault()" class="btn btn-danger rounded mx-1" title="Delete Data">
                                            <i class="fa fa-trash"></i> Delete Data
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="6" class="text-center">tidak ada data</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>