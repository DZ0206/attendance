<?php
include_once 'includes\session.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="css/site.css"/>
    
    <title>Attendance - <?php echo $title ?> </title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link active" href="viewrecords.php">View Attendees</a>
          </div>
        </div>
        <div class="navbar-nav ml-auto">
          <?php if(!isset($_SESSION['id'])){ ?>
            <a class = "nav-link active" aria-current="page" href="login.php">Log in</a>
          <?php } else { ?>
            <a class = "nav-link active" aria-current="page" href="logout.php">Log Out</a>
          <?php } ?>
        </div>
      </div>
    </nav>
    <div class="container">
    <br/>