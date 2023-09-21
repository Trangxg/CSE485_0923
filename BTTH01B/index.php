<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>
<body>
  
  <div class="container-fluid border border-primary">
    <header class="row">
      <div class="col-8">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><img src="logo.png" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-5" href="index.php">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-5" href="login.php">ĐĂNG NHẬP</a>
          </li>
        </ul>
      </div>

      <div class="col-4 mt-5">
        <input type="text" placeholder=" nội dung tìm kiếm" class="">
        <button class="btn btn-outline-success" type="submit">Tìm</button>
      </div>
    </header>  
    
    <div>
      <img src="bg.png" alt="">
    </div>

    <div>
      <h3 style="text-align:center" class="text-danger">TOP BÀI HÁT YÊU THÍCH</h3>
    </div>

    <div class="row">
      <div class="card col-3">
        <img src="anh1.png" class="card-img-top" alt="...">
        <a href="detail1.php" class="text-primary text-center text-decoration-none">Cây, lá và gió</a>
      </div>
      <div class="card col-3">
        <img src="anh2.png" class="card-img-top" alt="...">
        <a href="#" class="text-primary text-center text-decoration-none">Cuộc sống mến thương</a>
      </div>
      <div class="card col-3">
        <img src="anh3.png" class="card-img-top" alt="...">
        <a href="#" class="text-primary text-center text-decoration-none">Lòng mẹ</a>
      </div>
      <div class="card col-3">
        <img src="anh4.png" class="card-img-top" alt="...">
        <a href="#" class="text-primary text-center text-decoration-none">Phôi pha</a>
      </div>
      <div class="card col-3">
        <img src="anh5.png" class="card-img-top" alt="...">
        <a href="#" class="text-primary text-center text-decoration-none">Nơi tình yêu bắt đầu</a>
      </div>
    </div>
    
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    
  </div>
  
</body>
</html>