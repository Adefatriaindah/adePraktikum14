<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container">

    <h1>Data Genre</h1>
    <table class="table table-striped" border="1" cellspacing="2" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama genre</th>
            <th>Action</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($genre as $genre) : ?>

            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $genre['nama_genre'] ?></td>
                <td>
                    <a href="/genre/update/<?= encryptUrl($genre["id_genre"]); ?>" class="btn btn-success">Update</a>
                    <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!-- tambahkan dari sini  -->
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/genre/destroy/<?= encryptUrl($genre['id_genre']) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>

  <!-- sampai sini -->

<?= $this->endSection() ?>