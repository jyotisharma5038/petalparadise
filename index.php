<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel=stylesheet href="css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Petal Paradise</title>
  </head>
  <body>
    <!-- head -->
    <section class="bg-img py-md-5">
  <nav class="navbar navbar-light pt-md-4">
  <div class="container-fluid">
    <div class="row align-items-center ms-md-4">   
    <!-- <img src="images/logo (5).jpg" class="w-logo"> -->
    <!-- <h4 class="navbar-brand text-white fw-bold fs-6">PETAL PARADISE</h4> -->
    </div>
    <!-- <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<div class=" text-center d-flex flex-column justify-content-center align-items-center">
<small class="text-white my-5">
WELCOME TO PETAL PARADISE
</small>
<div class="text-white col-md-6">
  <span class="font-h" >Let's Make Beautiful Flowers a Part of Your Life.</span>
  <p>Explore a vibrant tapestry of blooms and arrangements that add color, fragrance, and elegance to your life. Discover the perfect floral expression for every moment and occasion.</p>
  <button class="btn btn-light"><a class="text-decoration-none mt-4 mb-5 text-dark" href="#shop">SHOP NOW</a>   
  </button>
</div>
</div>
</section>
<!-- end of heade -->
 <!-- information -->
  <section class=" py-5 bg-light">
    <div class="container">
 <div class="row g-2">
  <div class="col">
    <div class="col-11">
     
      <div class="card-body">
        <h5 class="card-title text-success fw-bold">Order Online</h5>
        <p class="card-text">This is a longer card with text below as a natural lead-in to additional content. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="col-11">
     
      <div class="card-body">
        <h5 class="card-title text-success fw-bold">Free Shipping</h5>
        <p class="card-text">This is a longer card with text below as a natural lead-in to additional content.</p>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="col-11">
     
      <div class="card-body">
        <h5 class="card-title text-success fw-bold">More Freshness</h5>
        <p class="card-text">This is a longer card with text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="col-11">
     
      <div class="card-body">
        <h5 class="card-title text-success fw-bold">Safe Payment</h5>
        <p class="card-text">This is a longer card with text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
</div>
</div>
  </section>
  <!-- end of information -->
   <!-- about -->
    <div class="container py-5">
    <div class="row py-5">
      <div class="col-md-6  container py-5 d-flex">
        <img src="images/bg-dr.jpg" class="circle">
       </div>
      
      <div class="col-md-6 container py-5">
      <span class="fw-bolder text-success">ABOUT PETAL PARADISE</span>
      <h2 class="fst pt-3">Blossoming Your Special Moments with Nature's Finest</h2>
      <p class="text-muted f-w">Welcome to Petal Paradise, where floral artistry meets passion for nature's beauty. Our story is rooted in a deep love for flowers and a commitment to creating unforgettable moments for our customers. a commitment to creating unforgettable moments.</p>
      <!-- <button class="btn btn-outline-success px-3 py-2">READ MORE</button>-->
      </div> 
    </div>
    </div>
    <!--end of about -->
    
    <section class="py-5 bg-light"  id="shop">
    <div class="container">
    <div class=" text-center row justify-content-center">
<small class="text-success fw-bold mt-5 mb-3">
NEW AARIVALS
</small>
<div class="col-9">
  <span class="font-n" >Discover the Latest Additions at Your Top Choice Flower Shop</span>
  <p class="text-muted">Share some details here. This is Flexible section where you can share anything you want.</p>
</div>
</div>
    </div>
    
    <!-- shop -->
    <div class=" d-flex justify-content-center pt-5 col-12 flex-wrap pb-5 ">
    <?php 
    include 'admin/inc/db.php';
    ?>
    <?php
$query = "SELECT * FROM new";
$result = mysqli_query($conn, $query);
?>
<?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <div class="col-3 me-4 mb-4 text-center" >
                      <img src="admin/img/<?php echo $row['new_img'];?>" class=" mt-xl-5 w-100 " >
                      <h6 class="fw-bold  pt-3 ps-3"><?php echo $row['new_name'];?></h6>
                      <span class="fw-bold  text-success pt-1 ps-3"><?php echo $row['new_des'];?></span>                     
                    </div>
                    
                      <?php
          }
      } else {
          echo "<tr><td colspan='3'>No data found</td></tr>";
      }
     
      ?>   
    </div>
    </section>
    <!-- new-arrivals-completed -->
     <!-- special-offer -->
     <section class="bgimg">
     <div class="container">
     <div class="row py-5 justify-content-center text-center"> 
      <div class="col-md-6 container py-5">
      <span class="fw-bolder text-white">SPECIAL OFFER</span>
      <h2 class="font-h text-white pt-3">Your Floral Journey Begins Here: Get 20% Off Your First Order!</h2>
      <p class="text-white">
      </p>
      <button class="btn btn-success px-3 py-2"><a class="text-white text-decoration-none"  href="#shopi">SHOP NOW</a></button>
      </div>
    </div>
     </div>
     </section>
     <!-- end of spcial offer -->
     <div class="bg-light text-dark bg-sc py-5">
    <div class="container">
    <div class=" text-center row justify-content-center">
<small class="text-success fw-bold mt-5 mb-3">
BEST SELLING
</small>
<div class="col-9">
  <span class="font-n" >Blossom with the Best Our Top-Selling Flowers</span>
  <p class="text-muted">Share some details here. This is Flexible section where you can share anything you want.</p>
</div>
</div>
    </div>
    
    <!-- shop -->
    <div class=" d-flex justify-content-center pt-5 col-12 flex-wrap pb-5 " id="shopi">
    <?php 
    include 'admin/inc/db.php';
    ?>
    <?php
$query = "SELECT * FROM best";
$result = mysqli_query($conn, $query);
?>
<?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <div class="col-3 me-4 mb-4 text-center">
                      <img src="admin/img/<?php echo $row['best_img'];?>" class=" mt-xl-5 w-100 " >
                      <h6 class="fw-bold  pt-3 ps-3"><?php echo $row['best_name'];?></h6>
                      <span class="fw-bold  text-success pt-1 ps-3"><?php echo $row['best_des'];?></span>                     
                    </div>
                    
                      <?php
          }
      } else {
          echo "<tr><td colspan='3'>No data found</td></tr>";
      }
     
      ?>   
    </div>
     </div>
    <!-- new-arrivals-completed -->
     <!-- testmonials -->
     <section  class="container">
    <div class=" text-center row justify-content-center">
<small class="text-success fw-bold mt-5 mb-3">
TESTIMONAIL
</small>
<div class="col-9">
  <span class="font-n" >Hear From Our Happy Customers</span>
  <p class="">Share some details here. This is Flexible section where you can share anything you want.</p>
</div>
</div>
 <div class="card-group g-2 text-center pt-4">
  <div class="col">
    <div class="col-md-11">
     
      <div class="card-body">
        <h5 class="card-title text-warning fw-bold">
        <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h5>
        <p class="card-text">I've been a loyal customer of Petal Paradise for years, and they never cease to amaze me. The flowers are always fresh, the arrangements are stunning, and the service is top-notch. </p>
        <div class="d-flex col-12 justify-content-center gap-3 mt-4">
          <div>
          <img src="images/client.webp" class="test-img">
          </div>
          <div class="d-flex flex-column">
            <span class=" fw-bold">SARA</span>
            <small class="text-muted">Business Owner</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="col-md-11">
     
      <div class="card-body">
        <h5 class="card-title text-warning fw-bold">
        <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h5>
        <p class="card-text">I've been a loyal customer of Petal Paradise for years, and they never cease to amaze me. The flowers are always fresh, the arrangements are stunning, and the service is top-notch.</p>
        
        <div class="d-flex col-12 justify-content-center gap-3 mt-4">
          <div>
          <img src="images/client.webp" class="test-img">
          </div>
          <div class="d-flex flex-column">
            <span class=" fw-bold">Angel</span>
            <small class="text-muted">Fashion Dseigner</small>
          </div>
        </div>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="col-md-11">
     
      <div class="card-body">
        <h5 class="card-title text-warning fw-bold">
        <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </h5>
        <p class="card-text">I've been a loyal customer of Petal Paradise for years, and they never cease to amaze me. The flowers are always fresh, the arrangements are stunning, and the service is top-notch.</p>
        <div class="d-flex col-12 justify-content-center gap-3 mt-4">
          <div>
          <img src="images/client.webp" class="test-img">
          </div>
          <div class="d-flex flex-column">
            <span class=" fw-bold">OLIVIA</span>
            <small class="text-muted">Business Owner</small>
          </div>
        </div>
        </div>
    </div>
  </div> 
</div>
  </section>
    <!-- testimonials completed-->
     <!-- footer -->
      <section class="bg-light py-5 mt-5">
        <div class="container">
        <div class="row container py-5">
          <div class="col-md-6 col-12">
           <h3>Petal Paradise</h3>
           <p class="text-muted">Welcome to the world of Petal Paradise, where flowers come to life with love and creativity. Discover our story, our passion for flowers, and our commitment to making every moment memorable.</p>
          </div>
          <div class="col d-flex justify-content-center align-items-center text-center">
            <div class="col-md-6 col-12">
          <h4>Contact Us</h4>
          <p class="text-muted">Address: 13 Fifth Avenue, New York 101660
Email: contact@info.com
Phone: +91 987 654 321</p>
          </div>
          </div>
        </div>
        </div>
      </section>
      <!-- copywrites -->
       <div class="d-flex justify-content-center align-items-center text-center bg-light pb-3">
       <small>Copyright © 2025 Petal Paradise</small>
       </div>
      <!-- end of footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>