<?php 
include_once('includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");
$date=$_GET['input_date'];
$sql = "SELECT * FROM `draw_resultfiles` WHERE date = '$date'";
$db->sql($sql);
$res = $db->getResult();
foreach ($res as $row) {
  $yb80bb7740288fda1=$row['id'];?>

<div class="single-list">
    <div class="light-area">
        <div class="light-area-top">
            <div class="left">
                <!-- <img src="assets/images/d2.png" alt=""> -->
                <h4> <?=$row['name']?></h4>
            </div>
            <div class="right">
                <span><?=$row['day'].$row['time']?></span>
                <h6><?=$row['prize']?></h6>
            </div>
        </div>
    </div>
    <div class="color-area">
        <div class="light-area">
            <div class="text-center">
                <a href="http://admin.andamanlottery.com/<?=$row['file'];?>" class="custom-button2">Download</a>

            </div>

        </div>

        
    </div>
</div>


<?php }?>