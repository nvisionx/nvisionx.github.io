<?php 
$page = 'product';
$rowCount = 0;
include 'header.php'; 
?>
<br>
<br>
<br>

<?php

$file = 'data.json'; // path to your JSON file
$jsonData = file_get_contents($file); // put the contents of the file into a variable
$modalInfo = json_decode($jsonData); // decode the JSON feed


// foreach ($modalInfo as $info) {
// 	echo $info->title . '<br>';
// }
?>
<style type="text/css">
.flexmb{
	display: flex;
}
	@media all and (max-width: 600px) {
    .flexmb { 
        display: block;
        margin: 0px;
        
    }
}
</style>
<div class="container" style="margin-top:30px;color: black;">
  <div class="row flexmb">
    <?php foreach ($modalInfo as $info) : ?>
        <div class="col-lg-3" style="margin-top:30px; display: flex;">
        	<div class="thumbnail " style="flex: 1;border: outset grey 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
          <a data-toggle="modal" data-target="#<?php echo $info->modal ?>">
            <img src="images/<?php echo $info->image ?>" class="img-responsive" width="255px" height="70px">
            <br>
            <h6 class="text-center" style="margin-bottom: 16px;"><?php echo $info->title ?></strong></h6>
            <div style="padding: 10px;margin-bottom: 5px;">
            <!--<p><b style="font-size: 14px;"> Composition: </b><?php echo $info->composition ?>
          </p>-->
            <b style="font-size: 1em;"> FORM: </b> <?php echo $info->form ?> 
            <button class="btn btn-info btn-sm" style="float: right;">View</button>
            
        </div>
            </a>
    </div>
        </div>
          <!-- Modal -->
            <div class="modal fade" id="<?php echo $info->modal ?>" role="dialog">
              <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $info->title ?></h4>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-lg-6">
                          <img src="products/<?php echo $info->product_cover ?>" class="img-responsive">
                            </div>
                        <div class="col-lg-6">
                          <p><b style="font-size: 1em;"> Description: </b><?php echo $info->description ?></p>
                          <p><b style="font-size: 1em;"> Composition: </b><?php echo $info->composition ?></p>
                          <p><b style="font-size: 1em;"> Dosage: </b><?php echo $info->Dosage ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>
    <?php
      $rowCount++;
    if($rowCount % 4 == 0) echo '</div><div class="row flexmb">';
    ?>
        
        
		<?php endforeach; ?>
  </div>
</div>
<br>
<?php 
include 'footer.php'; 
?>


