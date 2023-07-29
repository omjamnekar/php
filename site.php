<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // lower case and upper case
   $phrase = "Giraffe Academy";
   echo strtolower($phrase);
   echo strtoupper($phrase);

   // lenght of the string
   echo strlen($phrase);

   // selecting the particular word in string 
   echo $phrase[6];
   //changing whole string temperurly
   echo[$phreas] = "rth";
    
   // replacing curtain sub string in string 
   echo str_replace("Giraffe","panda",$phrase);
   
   //fatching substring from main string 
   echo substr($phrase,8,4);

    ?>
</body>
</html>