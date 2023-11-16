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
                    <h5 class="mb-4">QRCode Creator</h5>
                    <form class="input-form" method="post" action="/result">
                        <div class="form-group">
                            <label for="name">Link name:</label>
                            <input type="text" class="form-control" placeholder="Enter Link name" name="name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="url">URL:</label>
                            <input type="text" class="form-control" placeholder="Enter URL" name="url" autocomplete="off">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="render" class="btn">Render</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>