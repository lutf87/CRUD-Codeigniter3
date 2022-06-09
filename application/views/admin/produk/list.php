<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head") ?>
</head>

<body id="page-top">

    <?php $this->load->view("admin/_partials/navbar") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("admin/_partials/breadcrumb") ?>

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/produk/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produk as $produk) : ?>
                                        <tr>
                                            <td width="150">
                                                <?php echo $produk->nama ?>
                                            </td>
                                            <td>
                                                <?php echo $produk->harga ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url('upload/produk/' . $produk->gambar) ?>" width="64" />
                                            </td>
                                            <td class="small">
                                                <?php echo substr($produk->deskripsi, 0, 120) ?>...</td>
                                            <td width="250">
                                                <a href="<?php echo site_url('admin/produk/edit/' . $produk->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('admin/produk/delete/' . $produk->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partials/footer") ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php $this->load->view("admin/_partials/scrolltop") ?>
    <?php $this->load->view("admin/_partials/modal") ?>

    <?php $this->load->view("admin/_partials/js") ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
</body>

</html>