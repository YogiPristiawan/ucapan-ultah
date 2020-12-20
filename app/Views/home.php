<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4" id="container">
	<div class="row p-3">
		<div class="col-12">
			<div class="card shadow-sm text-center">
				<div class="card-body">
					<div id="bungkus">
						<div class="d-flex justify-content-center">

							<lottie-player src="<?= base_url(); ?>/public/animation/6308-risinghand.json" background="transparent" speed="1" style="width: 130px;" loop autoplay></lottie-player>

						</div>
						<h5 class="card-title mb-4">Hai, dengan siapa nih?</h5>
						<p id="alert">eitss di isi dulu dong...</p>
						<input id="input" type="text" class="form-control mb-2" placeholder="jawab di sini..." style="height: 35px;">

						<div class="d-flex justify-content-center">
							<div class="spinner-border text-success mt-2" role="status" id="spinner">
								<span class="sr-only">Loading...</span>
							</div>

							<button id="next" class="btn btn-success" onclick="user();">Next</button>
						</div>
						<hr>

					</div>


				</div>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection(); ?>