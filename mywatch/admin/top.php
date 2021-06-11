<?php
session_start();
include_once("../koneksi.php");
if (!isset($_SESSION['username'])) {
  header("Location: ../");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta nama="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Link Google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

  <!-- Link CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />

  <title>MyWatch Store Indonesia - Toko Jam Tangan Original dengan Harga Terbaik!</title>

</head>

<style>
  body {
    background-color: #f3f6f9;
  }
</style>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="./">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="tambah" class="nav-link text-primary">Tambah Barang</a>
          </li>
          <li class="nav-item">
            <a href="logout" class="nav-link btn btn-danger">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header -->