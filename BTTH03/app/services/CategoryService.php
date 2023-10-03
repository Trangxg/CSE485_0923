<?php
// Lớp service quản lý danh mục thể loại
class CategoryService {
    private $categories;

    public function __construct() {
        $this->categories = array(
            array('id' => 1, 'name' => 'Nhạc trẻ'),
            array('id' => 2, 'name' => 'Nhạc borelo'),
            array('id' => 3, 'name' => 'Nhạc tình ca'),
        );
    }

    public function getAllCategories() {
        return $this->categories;
    }

    public function getCategoryById($idTheLoai) {
        foreach ($this->categories as $category) {
            if ($category['idTheLoai'] == $idTheLoai) {
                return $category;
            }
        }
        return null;
    }
}

// Lớp service quản lý danh sách bài hát
class SongService {
    private $songs;

    public function __construct() {
        $this->songs = array(
            array('id' => 1, 'tenBaiHat' => 'Ngày hôm qua','caSi' => 'Ca sĩ 1', 'idTheLoai' => 1),
            array('id' => 2, 'tenBaiHat' => 'Ngày hôm nay','caSi' => 'Ca sĩ 2', 'idTheLoai' => 1),
            array('id' => 3, 'tenBaiHat' => 'Ngày mai','caSi' => 'Ca sĩ 3', 'idTheLoai' => 1),
            array('id' => 1, 'tenBaiHat' => 'Bình minh','caSi' => 'Ca sĩ 4', 'idTheLoai' => 2),
            array('id' => 1, 'tenBaiHat' => 'Hoàng','caSi' => 'Ca sĩ 5', 'idTheLoai' => 3),
            
        );
    }

    public function getAllSongs() {
        return $this->songs;
    }

    public function getSongById($songId) {
        foreach ($this->songs as $song) {
            if ($song['id'] == $songId) {
                return $song;
            }
        }
        return null;
    }
}

// Sử dụng các service để lấy và hiển thị dữ liệu
$categoryService = new CategoryService();
$songService = new SongService();

// In danh mục thể loại
echo "Danh mục thể loại:<br>";
$categories = $categoryService->getAllCategories();
foreach ($categories as $category) {
    echo "ID: " . $category['id'] . ", Tên: " . $category['name'] . "<br>";
}

// In danh sách bài hát
echo "<br>Danh sách bài hát:<br>";
$songs = $songService->getAllSongs();
foreach ($songs as $song) {
    echo "ID: " . $song['id'] . ", Tiêu đề: " . $song['title'] . ", Thể loại: ";
    $category = $categoryService->getCategoryById($song['category_id']);
    if ($category) {
        echo $category['name'];
    }
    echo "<br>";
}
?>