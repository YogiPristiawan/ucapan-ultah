<div id="emoji" class="mb-3 mt-2 d-flex justify-content-center">
    <div class="position-absolute" style="z-index: 999999999; top: 10px;">
        <lottie-player src="<?= base_url(); ?>/public/animation/37361-birthday-hat.json" background="transparent" speed="1" style="width: 100px;" loop autoplay></lottie-player>
    </div>
    <div>
        <lottie-player src="<?= base_url(); ?>/public/animation/15108-confetti-banner.json" background="transparent" speed="1" style="width: 300px;" loop autoplay></lottie-player>
    </div>
</div>
<h6 class="card-title">ciieee Happy Birthday ya :)... semoga panjang umur, sehat selalu, sukses terus pokokknya..</h6><br>
<h6 class="card-title mb-4">Ayoo <i>Make a wish</i> sekarang..</h6>
<p id="alert">eitss di isi dulu dong...</p>
<textarea name="wishes" id="input" rows="2" class="form-control mb-2" placeholder="jawab di sini..."></textarea>
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success mt-2" role="status" id="spinner">
        <span class="sr-only">Loading...</span>
    </div>
    <button id="next" class="btn btn-success" onclick="thanks();">Next</button>
</div>
<hr>