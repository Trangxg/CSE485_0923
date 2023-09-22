<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bai3</title>
</head>
<body>

  <?php
// Mảng chứa các giá trị
  $myArray = array("PHP","HTML",'CSS','JS');

  // Số cột bạn muốn hiển thị
  $numColumns = 1;
  echo '<h4>Ten khoa hoc</h4>';
  echo "<table>";
  for ($i = 0; $i < count($myArray); $i++) {
      if ($i % $numColumns == 0) {
          // Bắt đầu một dòng mới cho cột mới
          echo "<tr>";
      }

      echo "<td>" . $myArray[$i] . "</td>";

      if ($i % $numColumns == $numColumns - 1 || $i == count($myArray) - 1) {
          // Kết thúc dòng
          echo "</tr>";
      }
  }
  echo "</table>";
  ?>

</body>
</html>

