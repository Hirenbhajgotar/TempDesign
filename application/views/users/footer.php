
	
	<!-- Contect -->
	<div class="uk-section" id="contect" >
	    <div class="uk-container ">

	        <h1 class="uk-text-center contect_head" style="color: #fff">Get in Touch</h1>
	        <hr class="uk-divider-small uk-text-center">

	        <div class="uk-grid-match uk-child-width-1-1@m uk-margin-large-top" uk-grid>
	            <div class=" uk-text-center uk-light">
	            	<h2 class="uk-margin-remove">Want more templates?</h2>
	            	<p class="uk-margin-remove uk-text-muted">Subscribe to get awsome framework related Templates</p>
					<form action="<?= base_url('Subscription/Subscribe') ?>" method="post" class="uk-margin" uk-margin>
						<div class="">
					        <div class="uk-inline">
					            <button style="background-color: #6f5090; border-left: none; border-width: 0.5px; border-color: #b7a7c7; cursor: pointer;" class="uk-form-icon uk-form-icon-flip" type="submit"><i class="fas fa-paper-plane"></i></button>
					            <input class="uk-input uk-form-width-large uk-form-large" name="email" type="text" placeholder="Email address..">
					        	<?= form_error('email') ?>
					        </div>
					    </div>
					</form>
	            </div>
	            <!-- <hr class="uk-divider-icon"> -->
	        </div>
	        <div class="uk-margin-large-top">
	        	<!-- <span class="uk-align-right">© 2019 TempDesign. All rights reserved.</span> -->
	        	<!-- <a href="#!" class="uk-link-reset uk-align-left"><i class="fas fa-paper-plane"></i></a>
				<a href="#!" class="uk-link-reset uk-align-left"><i class="fas fa-paper-plane"></i></a> -->
	        </div>
	    </div>
	</div>

	<div class="uk-section uk-section-xsmall uk-section-muted">
	    <div class="uk-container">
	        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
	            <div>
	            	<span class="uk-align-right">© 2019 TempDesign. All rights reserved.</span>
					<!-- <a href="#!" style="display: inline;" class="uk-link-reset"><i class="fas fa-paper-plane"></i></a>
					<a href="#!" style="display: inline;" class="uk-link-reset"><i class="fas fa-paper-plane"></i></a> -->
	            </div>
	            
	        </div>

	    </div>
	</div>



	<script src="<?= base_url('/assets/js/uikit.min.js') ?>"></script>
	<script src="<?= base_url('/assets/js/uikit-icon.min.js') ?>"></script>
	<script>
		var typed3 = new Typed('#typed', {
		    strings: ['Bootstrap', 'Materialize CSS', 'Bulma', 'Uikit'],
		    typeSpeed: 0,
		    backSpeed: 0,
		    // fadeOut: true,
		    shuffle: true,
		    cursorChar: '_',
		    smartBackspace: true, // this is a default
		    loop: true
		  });
	</script>
</body>
</html>