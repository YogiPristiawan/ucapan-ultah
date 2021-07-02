<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/css/bootstrap.css">
    <link rel="icon" href="<?= base_url(); ?>/public/favicon.ico" type="icon">

    <title>Document</title>
</head>

<style type="text/css">
    @font-face {
        font-family: "LilyScriptOne-Regular";
        src: url("<?= base_url(); ?>/public/font/LilyScriptOne-Regular.ttf") format("woff"),
            url("<?= base_url(); ?>/public/font/LilyScriptOne-Regular.woff") format("woff");
    }

    @font-face {
        font-family: "CherrySwash-Regular";
        src: url("<?= base_url(); ?>/public/font/CherrySwash-Regular.ttf") format("truetype"),
            url("<?= base_url(); ?>/public/font/cherryswash-regular-webfont.woff") format("woff");
    }

    .card {
        border-radius: 18px;
    }

    .heart {
        animation: heart 1s linear infinite;
    }

    @keyframes heart {
        0% {
            color: #ff14cd;
        }

        50% {
            font-size: 25%;
        }

        100% {
            font-size: 100%;
        }
    }

    #alert {
        color: red;
        font-size: 12px;
        display: none;
    }

    nav {
        background-color: #ddd;
    }

    body {
        font-family: "CherrySwash-Regular";
        background-color: #eee;
    }

    #selamat {
        font-family: "LilyScriptOne-Regular";
        color: #ffa5ec;
        display: none;
    }

    .gift {
        background-color: #555;
        border-radius: 20px;
    }

    footer {
        font-family: arial;
    }

    .spinner-border {
        display: none;
    }
</style>

<body>
    <nav>
        <div class="container-fluid text-center shadow-sm" style="height: 50px;">
            <p style="line-height: 50px; font-size: 20px;" id="nav">Wellcome</p>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer>
        <div class="text-center">
            <small>
                <small>
                    <span>&#169;</span> 2020. created by <span class="heart" style="color: #ff80e4;">❤</span> <a href="https://www.instagram.com/yugisans_/" style="color: #ff80e4; font-weight: bold; font-style: italic"> Kage Nui <span class="small font-weight-light">(click me!)</span></a>
                </small>
            </small>
        </div>
    </footer>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="<?= base_url(); ?>/public/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/scriptt.js"></script>
</body>

</html>