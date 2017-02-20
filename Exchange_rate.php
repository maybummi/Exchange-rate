<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Exchange rate</title>
 <style type="text/css">

body {
   
}

</style></head>

<body>
<div class = "table_02" align="center">
   
   <div class="top-header" align="center"><h2>CURRENCY CONVERTER</h2></div>

  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
   case 1:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." ดอลลาร์สหรัฐอเมริกา (USD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." ดอลลาร์สหรัฐอเมริกา(USD)";
    break;
   case 2:
    $coin_m=32.83;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." วอน (KRW)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." วอน(KRW)";
    break;    
   case 3:
    $coin_m=3.24;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m."  ญี่ปุ่น (JPY)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เยน(JPY)";
    break;    
  }
 
  ?>
 
</div>
</body>
</html>