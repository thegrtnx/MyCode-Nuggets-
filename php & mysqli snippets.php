<?php
//currency
$g = 2000;
$h = number_format($g); // outputs 12
 
 echo $h;
if($h == "4") {

	echo "yes";
}


//duplicate values reduced to 1

$sql2="SELECT * FROM ichange_product WHERE Sold='In Stock' AND `Approved` = 'Approved' GROUP BY `Product_Category`";
$result_set2=query($sql2);
$row2= mysqli_fetch_array($result_set2); 


//generating random values from database
$sql="SELECT * FROM ichange_product WHERE Sold='In Stock' AND `Approved` = 'Approved' ORDER BY RAND() desc";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))

 	

//group array
$a = array("tomi", "tomi", "tomi", "bolu");

print_r(array_unique($a));


//getting a text value using jquery
var qwe 	 = $("#cat").text();
  

  
//PHP SERVER REQ
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];  



//sum a while loop
$r  =  $_SESSION['Username'];
 $sql="SELECT * FROM ichange_cart WHERE `Buyer_Username` = '$r' ORDER BY id desc";
 $result_set=query($sql);
 $total = 0;
 while($row= mysqli_fetch_array($result_set))
 {
    $GLOBALS['ctrl'] = $row['Product_Price'] * $row['qty'];

    echo $ctrl."<br/>";
    
    $total += $ctrl;

    echo $total;
   
}      


//convert string to int using javascript
parseInt(sttl);
?>