<?php

$value = strtolower($value);

if ($value === "ica") : ?>
    <div class="d-flex justify-content-center">
        <lottie-player src="<?= base_url(); ?>/public/animation/31548-robot-says-hello.json" background="transparent" speed="1" style="width: 170px;" loop autoplay></lottie-player>
    </div>
    <h6 class="card-title mb-4">Haii Ica, hope you have a awesome day! <br><br>
        Dah langsung aja, sekarang umur nya berapa??</h6>
<?php else : ?>
    <div class="d-flex justify-content-center mb-3 mt-2">
        <lottie-player src="<?= base_url(); ?>/public/animation/10111-meh.json" background="transparent" speed="1" style="width: 80px;" loop autoplay></lottie-player>
    </div>
    <h6 class="card-title">Ahh bohong, kamu Ica kan?</h6>
    <h6 class="card-title mb-4"> Dah langsung aja, sekarang umur nya berapa??</h6>
<?php endif; ?>
<p id="alert">eitss di isi dulu dong...</p>
<input id="input" type="number" class="form-control mb-2" placeholder="jawab di sini..." style="height: 35px;">
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success mt-2" role="status" id="spinner">
        <span class="sr-only">Loading...</span>
    </div>
    <button id="next" class="btn btn-success" onclick="ultah();">Next</button>
</div>
<hr>