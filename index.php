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
  <form action="Exchange_rate.php" method="post">
      <table class="table_01"  width="500" border="0" align="center">
          <tr>
             <td colspan="2">
                <div class="top-header" align="center"><h2>CURRENCY CONVERTER</h2></div></td>
          </tr>
    
    <tr>
      <td width="150"><div align="right">จำนวนเงิน : </div></td>
      <td  width="212" ><input class= "table_01" type="text" name="money" size="20" maxlength="100" />  บาทไทย (THB)</td>
    </tr>     
    <tr>
      <td width="150"><div  align="right">เลือกสกุลเงิน : </div></td>
      <td width="212" ><select class="table_01 " name="coin" >
                <option  value="1" > ดอลลาร์สหรัฐอเมริกา (USD) </option>
                <option value="2" >เกาหลีวอน (KRW)</option>
                <option value="3" >เงินเยนญี่ปุ่น (JPY)</option>                 
              </select></td>
              
    </tr>  
    <tr>
      <td colspan="2"> <div  align="center"><input type="submit" value="คำนวณ" style="width:80px; font-size:16px; color:#FFFFFF; font-family: 'quarkbold'; background-color:#F87; " /></div></td>
    
  </table>

<div align="center"></div>

</body>
</html>

