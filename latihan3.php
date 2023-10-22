<!DOCTYPE html>
<html>
<head>
  <title>PERTEMUAN3</title>
</head>
<style>
    .box {
      width: 100px;
      height: 100px;
      background-color: #666;
      margin: 10px;
      text-align: center;
      font-size: 50px;
    }
  </style>
<body>
    <div class="outbox">
  <?php
  $A="A";
  $B="B";
  $C="C";
  ?>
  </div>

</br>
<div class= "kotak">
<div class="box">
     <?php echo $A; ?>
</div>
<style>
    .box {
      width: 100px;
      height: 100px;
      display:inline-block;
      background-color: #ccc;
      margin: 10px;
      text-align: center;
      font-size: 50px;
    }
    .kotak{
      border: 5px solid blueviolet;
      padding : 10px;
      margin: 5px;
      widht: 1%;
    }
    </style>
    </br>

<div class="box">
<?php echo $A; ?>
</div>

<div class="box">
<?php echo $B; ?>

</div>

</br>
<div class ="box">
<?php echo $A; ?>

</div>

<div class="box">

<?php echo $B; ?>

</div>

<div class="box">

<?php echo $C;
 ?>

</div>
  </div>
</BODY>
</html>