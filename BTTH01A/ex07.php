<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bai7</title>
</head>
<body>
  <?php
    $arrs = array(12,5,200,10,125,60,90,345,-123,100,-125,0);
    
    foreach($arrs as $value){
      if($value>=100 && $value<=200 && $value %5 ==0 ){
        echo $value.'<br>';
      }
    }
  ?>
</body>
</html>