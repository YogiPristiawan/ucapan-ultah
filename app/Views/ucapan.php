<?php
$value = (int)$value;
for ($i = 1; $i <= $value; $i++) :
?>



    <div class="mt-3 gift p-3">
        <div>
            <h5 class="mb-0">Happy Birthday Yuriii!! :)</h5>
        </div>
        <div class="d-flex justify-content-center">

            <lottie-player src="<?= base_url(); ?>/public/animation/22936-gift.json" background="transparent" speed="1" style="width: 170px;" loop autoplay></lottie-player>

        </div>
    </div>

    <hr>



<?php endfor; ?>