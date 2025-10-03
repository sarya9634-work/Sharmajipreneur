<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pricing Packages</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #fff;
      font-family: 'Poppins', sans-serif;
    }
    .pricing-card {
      background: #101522;
      color: #fff;
      border-radius: 20px;
      padding: 30px;
      text-align: center;
      transition: 0.3s ease-in-out;
      position: relative;
      overflow: hidden;
      min-height: 460px;
    }
    .pricing-card:hover {
      transform: translateY(-10px);
    }
    .pricing-card img {
      width: 140px;
      margin-bottom: 20px;
    }
    .pricing-card h4 {
      font-size: 1.5rem;
      margin-bottom: 15px;
      font-weight: 600;
    }
    .pricing-card p {
      font-size: 0.95rem;
      color: #cfcfcf;
      min-height: 100px;
    }
    .price {
      font-size: 1.7rem;
      font-weight: bold;
      margin: 15px 0;
    }
    .btn-buy {
      background: #00b894;
      color: #fff;
      font-weight: 500;
      padding: 10px 25px;
      border-radius: 10px;
    }
    .btn-buy:hover {
      background: #019170;
      color: #fff;
    }
    .arrow-box {
      width: 45px;
      height: 45px;
      background: #0d111d;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 20px auto 0;
    }
    .arrow-box i {
      color: #fff;
      font-size: 20px;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row g-4 justify-content-center">

    <!-- Supreme -->
    <div class="col-md-3">
      <div class="pricing-card">
        <img src="img/supreme.png" alt="Supreme">
        <h4>Supreme</h4>
        <p>Get everything from Pro, plus advanced digital, finance, and creative skills. Build unstoppable expertise with high-demand courses.</p>
        <div class="price">₹17700</div>
        <a href="#" class="btn btn-buy">Buy Now</a>
        <div class="arrow-box mt-3"><i class="bi bi-arrow-right"></i></div>
      </div>
    </div>

    <!-- Premium -->
    <div class="col-md-3">
      <div class="pricing-card">
        <img src="img/w_supreme.png" alt="Premium">
        <h4>Premium</h4>
        <p>Includes Pro & Supreme, plus advanced courses in finance, tech, and creativity. Perfect for ambitious learners aiming to maximize skills.</p>
        <div class="price">₹22999</div>
        <a href="#" class="btn btn-buy">Buy Now</a>
        <div class="arrow-box mt-3"><i class="bi bi-arrow-right"></i></div>
      </div>
    </div>

    <!-- Premium Plus -->
    <div class="col-md-3">
      <div class="pricing-card">
        <img src="img/premium+Plus.png" alt="Premium Plus">
        <h4>Premium Plus</h4>
        <p>Unlock every course from Pro, Supreme, and Premium plus specialized training in VFX, Python, fitness, and more.</p>
        <div class="price">₹29999</div>
        <a href="#" class="btn btn-buy">Buy Now</a>
        <div class="arrow-box mt-3"><i class="bi bi-arrow-right"></i></div>
      </div>
    </div>

    <!-- Pro -->
    <div class="col-md-3">
      <div class="pricing-card">
        <img src="img/pro.png" alt="Pro">
        <h4>Pro</h4>
        <p>Master essential skills like digital marketing, copywriting, Facebook ads, and content creation. Unlock certification and support.</p>
        <div class="price">₹11800</div>
        <a href="#" class="btn btn-buy">Buy Now</a>
        <div class="arrow-box mt-3"><i class="bi bi-arrow-right"></i></div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>
</html>
