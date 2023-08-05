<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet"> 
    <link rel = "stylesheet" type = "text/css" href = "<?= base_url('assets/css/style.css'); ?>">
</head>

<header class="d-flex align-items-center">
    <div class="brand"> K-style</div>
    <div class="row align-items-start bar">
        <div class="col-7">
            <a class="menu"> Home </a>
            <a class="menu"> New Collection </a>
            <a class="menu"> Best Seller </a>
            <a class="menu"> Seasonal </a>
        </div>
        <div class="col-5">
            <div class="dropdown">
                <a class="btn btn-sm btn-secondary dropdown-toggle dd" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  All Collection
                </a>
                <ul class="dropdown-menu dd-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item dd-item" href="#">Woman Series</a></li>
                  <li><a class="dropdown-item dd-item" href="#">Man Series</a></li>
                  <li><a class="dropdown-item dd-item" href="#">Accessories</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <a href="#">
            <i class="bi bi-bag ic" style="font-size: 2rem;"></i>
        </a>
        <a href="#">
            <i class="bi bi-person-circle icuser ic" style="font-size: 2rem;"></i>
        </a>
    </div>
</header>

<body>
    
</body>
</html>