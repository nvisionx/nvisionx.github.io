<?php 
$page = 'index';
include 'header.php'; 
?>










<div class="container-fluid" style="margin-top: 60px; padding-left:0px; padding-right:0px">

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
	  <div class="carousel-inner" style="max-height: 550px;
	  min-width: auto;">
    <div class="item active">
      <img class="img-responsive" src="carousel_images/doctor.jpg"  alt="Doctor">
    </div>

    <div class="item">
      <img class="img-responsive" src="carousel_images/stethoscope.jpg" alt="Stethoscope">
    </div>

    <div class="item">
      <img class="img-responsive" src="carousel_images/medicines.jpg"  alt="Medicines">
    </div>
  </div>

  <!-- Left and right controls -->
<!--   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
<div class="container">

<br>
<br>  
<div>
<div class="row">
<div class="col-sm-12">
    <blockquote class="myBlockQuote" style="font-family: Georgia, serif;
    position: relative; text-align: justify;
    padding: 0.5em 2em 0.5em 3em;">
        Health is a state of complete physical, mental, and social well being, and not merely the absence of disease or infirmity. Health is a dynamic condition resulting from a body’s constant adjustment and adaptation in response to stresses and changes in the environment for maintaining an inner equilibrium called homeostasis.
    <footer>
            World Health Organization (WHO)
    </footer>
    </blockquote>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6">
    <p style="text-align: center"><u><em><strong>Organizational Focus</strong></em></u></p>
    <p style="font-size: 18px; padding-top:10px; font-family: Georgia, serif; text-align: justify;" >
We, at Arist Healthcare, focus on promoting well-being which involves prevention of diseases and improve health of the individual and that of the community.  People, in their busy schedule, often do not heed to their health. Hence, we aim to aid the people lead a healthy lifestyle and make the world a better place.</p>
    </div>
    <div class="col-sm-6">
    <p style="text-align: center"><u><em><strong>Product Focus</strong></em></u></p>

    <p style="font-size: 18px; padding-top:10px; font-family: Georgia, serif; text-align: justify;">Our products are focussed on Cardiovascular Disease (CVD), Diabetes Mellitus (commonly referred to as Diabetes), and also general health.
We manufature products of the highest quality and are made available to the public at a cost effective price.</p>
    </div>
</div>
</div>
</div>
</div>



<?php 
include 'footer.php'; 
?>