<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm bài hát mới </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
</head>
<body>
    <div class = " container-fluid vh-100">
          <nav class="nav bg-warning mb-5">
              <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
              <a class="nav-link" href="#">Tạo mới bài hát</a>
              <a class="nav-link" href="#">Thay đổi thông tin bài hát</a>
          </nav>
          <div class="row justify-content-center">
              <div class="col-md-6">
                  <form method ="POST">
                      <h2 class="text-center">Biểu mẫu tạo bài hát</h2>
                      <div class="form-group">
                          <label for="">Tên Bài Hát:</label>
                          <input type="text" class="form-control" id="tenBaiHat" placeholder="Nhập tên bài hát">
                      </div>
                      <div class="form-group">
                          <label for="">Ca Sĩ:</label>
                          <input type="text" class="form-control" id="caSi" placeholder="Nhập tên ca sĩ ">
                      </div>
                      <div class="form-group">
                          <label for="tenTheLoai" class="form-label mt-2">Thể loại</label>
                          <select name="tenTheLoai" id="tenTheLoai" class="form-select" required>
                                <option value="" selected disabled>Chọn thể loại</option>
                                <?php
                                    foreach ($category_list as $category) {

                                ?>
                                        <option value="<?= $category['idTheLoai'] ?>"><?= $category['tenTheLoai'] ?></option>
                                <?php
                                    }
                                ?>

                      </div>
                      <button type="submit" class="btn btn-success">Thêm</button>
                  </form>
                  
              </div>
          </div>
            
              
        
    </div>
</body>
</html>