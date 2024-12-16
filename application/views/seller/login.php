<!DOCTYPE html>
<html>
<?php $this->load->view('admin/include-head.php'); ?>

<!-- Raghu class="h-100 w-100" -->
<body class="hold-transition login-page  bg-admin" style="background-image: url('<?= base_url('assets/admin/images/seller-login-bg.jpg') ?>');">
    <!-- <img src="<?= base_url('assets/admin/images/seller-login-bg.jpg') ?>" style="height: 100vh;"> -->
    <!-- <div class="overlay"></div> -->
	<?php $this->load->view('seller/pages/' . $main_page); ?>
	<!-- Footer -->
	<?php $this->load->view('admin/include-script.php'); ?>
</body>

</html>