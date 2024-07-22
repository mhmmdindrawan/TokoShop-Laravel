<div class="container menu-wrapper fixed-top d-none d-lg-block">
  <div class="flex justify-center items-center space-x-8">
    <a class="text-gray-700 hover:text-green-500 font-semibold transition-colors duration-200" href="#">Home</a>
    <a class="text-gray-700 hover:text-green-500 font-semibold transition-colors duration-200" href="#">Best Seller</a>
    <a class="text-gray-700 hover:text-green-500 font-semibold transition-colors duration-200" href="#">New Arrival</a>
    <a class="text-gray-700 hover:text-green-500 font-semibold transition-colors duration-200" href="#">Blog</a>
  </div>
</div>

<!-- Header -->
<section class="header">
  <div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{ asset('themes/indotoko/assets/img/slide1.jpg') }}" class="d-block w-100" alt="slide 1">
      </div>
      <div class="carousel-item">
          <img src="{{ asset('themes/indotoko/assets/img/slide2.png') }}" class="d-block w-100" alt="slide 2">
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
  </div>
  </div>
</section>