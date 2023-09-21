<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm mới thể loại-vùng quản trị</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body clas="border border-primary">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Administration</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="index.php">Trang chủ</a>
          <a class="nav-link" href="#">Trang ngoài</a>
          <a class="nav-link active" href="category.php">Thể loại</a>
          <a class="nav-link" href="#">Tác giả</a>
          <a class="nav-link" href="#">Bài viết</a>
        </div>
      </div>
    </div>
  </nav>
  
  <div class="mt-5 text-center">
    <h2 class="fw-bold">THÊM MỚI THỂ LOẠI</h2>
    <div class="input-group mt-4 mb-3">
      <span class="input-group-text ms-5" id="inputGroup-sizing-default">Tên thể loại</span>
      <input type="text" class="col-9">
    </div>
    <div class="row">
      <div class="col-7"></div>
      <div class="col-5">
        <a href="" class="btn btn-success">Thêm</a>
        <a href="category.php" class="btn btn-warning">Quay lại</a>
      </div>
    </div>
</div>
  </div>

  <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-1 mt-5" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
  </footer>

</body>
</html>