<?php
$host = 'localhost';
$dbname = 'QuanLyBaiHat';
$username = 'root';
$password = '123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class = " container-fluid vh-100">
                <nav class="nav bg-warning mb-5">
                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                <a class="nav-link" href="#">Tạo mới bài hát</a>
                <a class="nav-link" href="#">Thay đổi thông tin bài hát</a>
                </nav>
            <h2 class="text-center mt-5">Danh sách các bài hát</h2>

            <table class="table col-9 mx-5 mt-2">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bài hát</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                try {
                    // Thực hiện truy vấn SELECT
                    $stmt = $pdo->query("SELECT * FROM BaiHat");
                    
                    // Lấy kết quả trả về dưới dạng mảng kết hợp (associative array)
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    // In kết quả
                    foreach ($results as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['idBaiHat']; ?></td>
                            <td><?php echo $row['tenBaiHat']; ?></td>
                            <td><a href="#"><i class="bi bi-pencil"></i></a></td>
                            <td><a href="#"><i class="bi bi-trash"></i></a></td>
                        </tr>
                        <?php
                    }
                } catch (PDOException $e) {
                    echo "Query failed: " . $e->getMessage();
                }
                ?>
                
                    
                </tr>
                </tbody>
            </table>
            
            
        
    </div>
</body>
</html>