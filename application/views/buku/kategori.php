<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-3">
            <?php if(validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toogle="modal" data-target="#kategoriBaruModal"><i class="fas fa-file-alt"></i> Tambah Kategori</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Pilihan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $a = 1;
                        foreach ($kategori as $k) : ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <th><?= $k['kategori']; ?></th>
                        <td>
                            <a href="<?= base_url('buku/ubahbuku/').$k['id']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('buku/hapusbuku/').$k['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul. ' ' . $k['kategori']; ?>?')" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>