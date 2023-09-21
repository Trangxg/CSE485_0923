<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang quản lý Thể loại-vùng Quản trị</title>
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
  
  <div class="mt-5">
    <a href="add_category.php" class="btn btn-success">Thêm mới</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tên thể loại</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xoá</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Nhạc trữ tình</td>
          <td><a href=""><i class="bi bi-pencil"></i></a></td>
          <td><a href="">
            <i class="bi bi-trash"></i>
          </a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Nhạc cách mạng</td>
          <td><a href=""><i class="bi bi-pencil"></i></a></td>
          <td><a href="">
            <i class="bi bi-trash"></i>
          </a></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Nhạc thất tình</td>
          <td><a href=""><i class="bi bi-pencil"></i></a></td>
          <td><a href="">
            <i class="bi bi-trash"></i>
          </a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-1 mt-5" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
  </footer>

</body>
</html>