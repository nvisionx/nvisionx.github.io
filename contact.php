<?php 
$page = 'contact';
include 'header.php'; 
?>

<div class="container" style="margin-top: 150px;color: black;font-family: Georgia, serif;font-size: 18px">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Write to Us or Reach Us</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> 45, 4th Cross Rd, Huchappa Layout, Govindaraja Nagar Ward, Madhura Nagar, Kottigepalya, Bengaluru, Karnataka 560091</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 99028 28564</p>
      <p><span class="glyphicon glyphicon-envelope"></span> aristhealthcare@gmail.com</p> 
    </div>
    <div class="col-sm-7">
    <form  class="ajax" method="post" action="email.php" id="myform">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="fname" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="emailid" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="phone" name="phonenumber" placeholder="Phone Number" type="number" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="subject" name="sub" placeholder="Subject" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comment" placeholder="Message" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="submit" style="color: black">Send</button>
        </div>
      </div>
      <br>
		<div id="msg" class="alert alert-info alert-dismissable fade in" style="display: none;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <span id="mymsg"></span>
        </div>
     </form> 
    </div>
  </div>
</div>

<div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486.0053258666389!2d77.52574162962404!3d12.969125481629343!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0a5db75d6639f5c!2sArist+Health+Care!5e0!3m2!1sen!2sin!4v1540042459988" frameborder="0" style="width:100%;height:500px;border:0" allowfullscreen></iframe>
</div>

<?php 
include 'footer.php'; 
?>