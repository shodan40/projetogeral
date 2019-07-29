<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Layout</title>
    <?php 
        $bootstrap = base_url('assets/css/bootstrap.min.css');
        $fontawesome = base_url('assets/css/all.css');
    ?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $bootstrap; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $fontawesome; ?>">    
</head>
<body>

<h1>Top</h1>
    <!-- Conteudo -->
    <?php 
        $this->renderSection('conteudo');
    ?>
<h1>Bottom</h1>

    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/fontawesome.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>