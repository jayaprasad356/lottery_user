<?php 
include_once('includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");
$date=$_POST['input_date'];
$sql = "SELECT * FROM draw_resultfiles WHERE date = '$date'";
$db->sql($sql);
$res = $db->getResult();
foreach ($res as $row) {$yb80bb7740288fda1=$row['id'];?>
<div class="media mt-3">
  <div class="media-body p-3" style="border: 1px solid #d4d4d4;background-color: #019739;">
    <h4 style="color:#FFFFFF;text-align:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
        </svg>:<?=$row['time']?>
        </br>
        </br>
        <?=$row['name']?>
        </br>
        </br>
        <?=$row['day']?>
        </h4>
        <h4 style="color:#FFFFFF;text-align:center;font-size: 20px;"><span style="color:#FFFFFF;font-size: 15px;">First Prize</span></br><?=$row['prize']?></h4>
        <h4 style="text-align:center;"><a href="<?=$row['file'];?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download Result" class="btn btn-primary" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Download</a></h4>
  </div>
</div>
<?php }?>