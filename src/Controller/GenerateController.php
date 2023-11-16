<?php

use RaihanNih\QrCode\Factory\QRCodeFactory;

$url = $_POST["url"] ?? "";
$name = $_POST["name"] ?? "";

if ($url === "" ||  $name === "") {
    echo "<script>alert('Name and URL cannot be empty!');</script>";
    echo "<script>window.location = '/';</script>";
}

if (!str_contains($url, 'http://') && !str_contains($url, 'https://')) {
    echo "<script>alert('The URL must begin with http:// or https://');</script>";
    echo "<script>window.location = '/';</script>";
}

$qrcode = new QRCodeFactory($url, $name);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRCode Creator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700|Karla:400,700|Poppins:400,500,600,700|Montserrat:400|Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= RESOURCES ?>/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-container">
                    <div class="qrcode-name">
                        <h5 class="mb-4"><?= $qrcode->getName() ?></h5>
                    </div>
                    <form class="input-form">
                        <div class="form-group">
                            <div class="qrcode-container">
                                <center><?= $qrcode->render(); ?></center>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" id="save" class="btn">Save</button>
                            <button type="button" id="back" class="btn">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= RESOURCES ?>/download.js"></script>
</body>

</html>
