<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <link rel="stylesheet" href="/css/app.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>
    
<body>
    <?= $this->include('navbar'); ?>
    <?= $this->include('sidebar'); ?>

    <?= $this->renderSection('content'); ?>

    <script src="js/app.min.js"></script>
    <script src="assets/fontawesome/js/all.min.js"></script> 
</body>

</html>