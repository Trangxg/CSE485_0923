<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bai6</title>
</head>
<body>
  <?php
    $keys = array(
      "field1"=>"first",
      "field2"=>"second",
      "field3"=>"third"
    );
    $values = array(
      "field1value"=>"dinosaur",
      "field2value"=>"pig",
      "field3value"=>"platypus"
    );
    $keysAndValues = array_combine($keys,$values);
    //"print_r" vaf "var_dump" thuonng su dung de debug vaf kieem tra gia tri cua bien,, "echo" va "json_encode" su dung de hien thi gia tri cho nguoi dung
    foreach($keysAndValues as $key => $value){
      echo $key."=>".$value."<br>";
    }
 
  ?>
</body>
</html>
