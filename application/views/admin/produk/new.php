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

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/produk/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/produk/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Product name" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="number" name="harga" min="0" placeholder="Product price" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('harga') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name">Gambar</label>
                                <input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" type="file" name="gambar" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('gambar') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Deskripsi</label>
                                <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" name="deskripsi" placeholder="Product description..."></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('deskripsi') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
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

        <?php $this->load->view("admin/_partials/js") ?>

</body>

</html>