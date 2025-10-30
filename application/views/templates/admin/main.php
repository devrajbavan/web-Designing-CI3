<?php $this->load->view('templates/admin/header'); ?>

<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content" class="container-fluid">

            <?php $this->load->view($content_view); ?>

        </div>
        <?php $this->load->view('templates/admin/footer'); ?>
    </div>

</div>
