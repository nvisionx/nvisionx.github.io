<?php 
$page = 'career';
include 'header.php'; 
?>

<br>
<br>
<br>
<br>
<iframe src="#" id="fake-target" name="fake-target" style="width:0px; height:0px; border:0px;"></iframe>

<div class="container" style="color: black; font-family: Cambria">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Career Form</h1>
		<form target="fake-target" action="https://docs.google.com/forms/d/e/1FAIpQLSdacaDpVqM9VT-zZ2DauDKdPC4kXKMLiHapoC_khStPitNfoA/formResponse"  method="POST" id="mG61Hd" onsubmit="custommsg(); return true">

			<!--<form action="https://docs.google.com/forms/d/e/1FAIpQLSdacaDpVqM9VT-zZ2DauDKdPC4kXKMLiHapoC_khStPitNfoA/formResponse" target="_self" method="POST" id="mG61Hd">-->


			<div class="form-group">
			<label for="name">Name: </label>
			<input type="text"  class="form-control" placeholder="Enter Name" name="entry.2005620554" required>
			</div>

			<!--<input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Name" aria-describedby="i.desc.1633920210 i.err.1633920210" name="entry.2005620554" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">-->

			<div class="form-group">
    		<label for="email">Email: </label>
			<input  type="email" name="entry.1045781291" placeholder="Email ID" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[A-za-z0-9.-]+\.[A-Za-z]+$" required>
			</div>

			<!--<input type="email" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Email" aria-describedby="i.desc.227649005 i.err.227649005" name="entry.1045781291" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">-->


			<div class="form-group">
			<label for="email">Address: </label>
			<input  type="text" name="entry.1065046570" placeholder="Address" class="form-control" required>
			</div>

			<!--<textarea class="quantumWizTextinputPapertextareaInput exportTextarea" jsname="YPqjbf" data-rows="1" tabindex="0" aria-label="Address" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" required="" name="entry.1065046570" dir="auto" data-initial-dir="auto" data-initial-value="" aria-describedby="i.desc.790080973 i.err.790080973" style="height: 24px;"></textarea>-->


			<div class="form-group">
      		<label for="pwd">Phone Number:</label>
      		<input  type="number" class="form-control"  placeholder="Phone-Number" name="entry.1166974658" required>
    		</div>

    		<!--<input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Phone number" aria-describedby="i.desc.1770822543 i.err.1770822543" name="entry.1166974658" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">-->

			<div class="form-group">
			<label for="name">Qualification:</label>
			<input  type="text" class="form-control" placeholder="Education" name="entry.899903900" required>
			</div>

			<!--<input type="text" class="quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Qualification" aria-describedby="i.desc.1158173241 i.err.1158173241" name="entry.899903900" value="" required="" dir="auto" data-initial-dir="auto" data-initial-value="">-->


			<div class="form-group">
			<label for="name">About yourself:</label>
			<textarea rows=3 name="entry.839337160" class="form-control" placeholder="Description about you"></textarea>
			</div>

			<!--<textarea class="quantumWizTextinputPapertextareaInput exportTextarea" jsname="YPqjbf" data-rows="1" tabindex="0" aria-label="Comments" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" required="" name="entry.839337160" dir="auto" data-initial-dir="auto" data-initial-value="" aria-describedby="i.desc.1846923513 i.err.1846923513" style="height: 24px;"></textarea>-->

			<br>
			<input type="submit" class="btn btn-success btn-block" value="Submit">

			<!--<div role="button" class="quantumWizButtonPaperbuttonEl quantumWizButtonPaperbuttonFlat quantumWizButtonPaperbuttonDark quantumWizButtonPaperbutton2El2 freebirdFormviewerViewNavigationSubmitButton" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" jsname="M2UYVd" aria-disabled="false" tabindex="0"><div class="quantumWizButtonPaperbuttonRipple exportInk" jsname="ksKsZd"></div><div class="quantumWizButtonPaperbuttonFocusOverlay exportOverlay"></div><content class="quantumWizButtonPaperbuttonContent"><span class="quantumWizButtonPaperbuttonLabel exportLabel">Submit</span></content></div>-->

		</form><br>
		<div class="alert alert-success alert-dismissable fade in" style="display: none;" id="form-message">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Thank you!</strong> Your response has been sent, we will get back to you soon...
  	</div>
	</div>
</div>
</div>


  <script type="text/javascript">
   function custommsg() {
   
   // document.getElementById("form-message").innerHTML = "Thank you!<br/><a href='#end'><button class='btn'>Next</button></a>";
   // document.getElementById("form-container").style.display = "none";
   document.getElementById("mG61Hd").submit();

   var delayInMilliseconds = 500; //1 second

	setTimeout(function() {
  //your code to be executed after 1 second
  	document.getElementById("mG61Hd").reset();
    document.getElementById("form-message").style.display = "block";
	}, delayInMilliseconds);

   
           }
   </script>

<?php 
include 'footer.php'; 
?>