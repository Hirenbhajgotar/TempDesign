

	<!-- jquery library -->
	<script src="<?= base_url('assets/admin/js/jquery-3.3.1.min.js') ?>"></script>
    
	<!-- jquery transition -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
	
	<!-- uikit -->
	<script src="<?= base_url('assets/js/uikit.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/uikit-icons.min.js') ?>"></script>
	
	<!-- parsley js -->
	<script src="<?= base_url('assets/admin/js/Dist/parsley.min.js') ?>"></script>

	<!-- cusome script -->
	<script src="<?= base_url('assets/admin/js/admin_script.js') ?>"></script>

	<script>
        $('#form').parsley();
        $('#register_form').parsley();
    </script>

	<!-- <?php
	if ($msg = $this->session->flashdata('msg')) {
			if (isset($msg)) {
				$message = $msg;
				?>
				<script>
					UIkit.notification({
					    message: '<?php echo $message ?>',
					    status: 'danger',
					    pos: 'top-right',
					    timeout: 5000
					});
				</script>
				<?php
			}
		}	
	
	?> -->
	
</body>
</html>