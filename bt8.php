<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bai8</title>
</head>
<body>
  <?php
  $array = array('programming','php','basic','dev','is','program is PHP');

  $doDaiMin =PHP_INT_MAX;
  $doDaiMax=0;
  $tenChuoiMin ="";
  $tenChuoiMax="";

  for($i=0; $i<count($array);$i++){
    $chuoi =$array[$i];
    $doDai=strlen($chuoi);
    if($doDai<$doDaiMin){
      $doDaiMin=$doDai;
      $tenChuoiMin =$chuoi;
    }
    if($doDai>$doDaiMax){
      $doDaiMax =$doDai;
      $tenChuoiMax=$chuoi;
    }
  };
  echo "Chuỗi có độ dài nhỏ nhất là '$tenChuoiMin' với độ dài là $doDaiMin".'<br>';
  echo "Chuỗi có độ dài lớn nhất là '$tenChuoiMax' với độ dài là $doDaiMax";
  ?>
</body>
</html>