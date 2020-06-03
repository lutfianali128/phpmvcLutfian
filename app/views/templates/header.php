<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
     <div class="container">
     <a class="navbar-brand" href="<?= BASEURL; ?>">Php Mvc</a> 
     <button class="navbar-toggler" type="button" data-tonggle="coapse"
     data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
     aria-expanded="false" aria-label="toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/Mahasiswa">Mahasiswa</a>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">about</a>
        </div>
    </div>
    </div>
 </nav>
 <br>
 <br>

