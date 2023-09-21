<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết</title>
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
        <button class="border border-primary">Tìm</button>
      </div>
    </header>  
    <hr>
    
    <form class="col-4 vh-90 vw-60 ms-5 mb-5 bg-secondary row">
      <h2 class="mt-4">Sign in</h2>
      <div class="input-group mb-3 mt-1">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
        <input type="text" class="form-control w-10" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
        <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="form-check">
        <input class="form-check-input ms-1" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <div class="row"> 
        <div class="col-9"></div>
        <button class="col-3 mt-2  btn btn-warning" type="submit">Login</button>
      </div>

      <hr>
      <div class="text-center ">
        Don't have an account? <a href="" class="text-warning text-decoration-none">Sign Up</a><br>
        <a href="" class="text-warning text-decoration-none">Forgot your password?</a>
      </div>
    </form>

    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    
  </div>
  
</body>
</html>