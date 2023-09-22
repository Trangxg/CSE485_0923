<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bai1</title>
</head>
<body>
  <?php
//viet ham tong-tich-hieu-thuong
$arrs=array(2,5,6,9,2,5,6,12,5);
$total = array_sum($arrs);
echo "Tong cua mang la: ".$total;


$product=array_product($arrs);
echo "Tich cua mang la: ".$product;

$diff = $arrs[0];
foreach($arrs as $value){
  $diff -= $value;
}
echo "Hieu cua mang la: ".$diff;

$div = $arrs[0];
foreach ($arrs as $value){
  $div /= $value;
}
echo "Thuong cua mang la: ".$div;
?>
</body>
</html>

