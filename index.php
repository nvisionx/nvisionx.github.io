<?php 
$page = 'index';
include 'header.php'; 
?>










<div class="container" style="margin-top: 100px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
<!-- .carousel .item img {
  max-height: 768px;
  min-width: auto;
} -->
  <!-- Wrapper for slides -->
	  <div class="carousel-inner" style="max-height: 600px;
	  min-width: auto;">
    <div class="item active">
      <img class="img-responsive" src="carousel_images/3.jpg"  alt="Los Angeles">
    </div>

    <div class="item">
      <img class="img-responsive" src="carousel_images/1.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img class="img-responsive" src="carousel_images/9.jpg"  alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<?php 
include 'footer.php'; 
?>