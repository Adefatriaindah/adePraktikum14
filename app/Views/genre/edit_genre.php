<?php $this->extend("layout/page_layout"); ?>
<?php $this->section("content"); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2> Halaman Edit Genre </h2>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/genre/" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/genre/edit_genre" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Tambahkan genre input id -->
                        <input type="hidden" value="<?= $genre["id_genre"] ?>" name="id_genre">
                        <div class="col-md-6">
                            <label for="nama_genre" class="form-label">Nama Genre</label>
                            <!-- Tambahkan kondisi pada value -->
                            <input type="text" class="form-control <?= isset($errors['nama_genre']) ? 'is-invalid ' : ''; ?>" id="nama_genre" name="nama_genre" value="<?= isset($errors['nama_genre']) ? old('nama_genre') : $genre["nama_genre"]; ?>">

                            <?php if (isset($errors['nama_genre'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['nama_genre'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $this->endSection() ?>