<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FM Hotel - ABOUT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <?php require('inc/links.php'); ?>
  <style>
    .box:hover{
      border-top-color: var(--teal) !important;
    }
  </style>
</head>
<body class="bg-light">


  <?php require('inc/header.php'); ?>
  
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Molestiae alias omnis enim cumque consequatur placeat 
        quia quas recusandae minima atque qui, temporibus repellendus
        ad soluta,quibusdam expedita eos, quo rem?
      </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Labore quasi laborum illum dicta, optio placeat voluptatibus!
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 oredr-1">
        <img src="images/about/about.jpg" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark box">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3"> 100 ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark box">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">250+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark box">
          <img src="images/about/reviews.svg" width="70px">
          <h4 class="mt-3"> 190+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark box">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3"> 100+ STAFF</h4>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php') ?>





</body>
</html>