<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data byte</title>
</head>
<body>
    
<?php
  
   $v1= "10";
   $v2="20";

   $v3="30";
  
   if(is_numeric($v1) && is_numeric($v2))
   echo $v1+$v2;
   else
    echo "invalid data type";


        // the datatype specifier
    echo"<p>Data type of v1 = ".gettype($v1);
    echo"<p>Data type of v2 = ".gettype($v2);
    $v1 += $v2;
    echo"<p>Data type of v1 = ".gettype($v1);
    $v4=(int)$v3;
    echo"<p>data type of v4 =".gettype($v4);

    $v5=10/3;
    echo"<p>Data type of v5 =".gettype($v5);

    $v1 +=$v5;
    echo"<p>Data type of v1 =".gettype($v1);

    $v6="5 subject";
    echo"<p>Data type of v6 =".gettype($v6);
    settype($v6,"integer");
    echo "<p>v6 =".$v6;
    echo "<p>Data type of v6=".gettype($v6);
    //  $v6 = (unset)v6;
    echo"<p>Data Type of v6 =".gettype($v6);
    $v7 = true;
    $v8 = false;
    echo "<p>Data type of v7 =".gettype($v7);
    echo "<p>Data type of v8 =".gettype($v8);
    echo "<p>v7=".(int)$v7;
    echo "<p>v8=".(int)$v8;


?>


</body>
</html>