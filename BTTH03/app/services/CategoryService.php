<?php
// Mảng lưu trữ danh mục thể loại
$categories = array(
    array('idTheLoai' => 1, 'tenTheLoai' => 'Nhạc trẻ'),
    array('idTheLoai' => 2, 'tenTheLoai' => 'Nhạc bolero'),
    array('idTheLoai' => 3, 'tenTheLoai' => 'Nhạc tình ca'),
    // ...
);

// Mảng lưu trữ danh sách bài hát
$songs = array(
    array('idBaiHat' => 1, 'tenBaiHat' => 'Song 1', 'category_idTheLoai' => 1),
    array('id' => 2, 'title' => 'Song 2', 'category_id' => 2),
    array('id' => 3, 'title' => 'Song 3', 'category_id' => 1),
    // ...
);

// Hàm thêm bài hát mới
function addSong($title, $categoryId) {
    global $songs;
    $newSongId = count($songs) + 1;
    $newSong = array('id' => $newSongId, 'title' => $title, 'category_id' => $categoryId);
    $songs[] = $newSong;
    return $newSongId;
}

// Hàm xóa bài hát theo ID
function deleteSong($songId) {
    global $songs;
    foreach ($songs as $key => $song) {
        if ($song['id'] == $songId) {
            unset($songs[$key]);
            return true;
        }
    }
    return false;
}

// Hàm cập nhật thông tin bài hát
function updateSong($songId, $title, $categoryId) {
    global $songs;
    foreach ($songs as &$song) {
        if ($song['id'] == $songId) {
            $song['title'] = $title;
            $song['category_id'] = $categoryId;
            return true;
        }
    }
    return false;
}

// Hàm lấy danh sách bài hát
function getAllSongs() {
    global $songs;
    return $songs;
}

// Hàm lấy danh sách thể loại
function getAllCategories() {
    global $categories;
    return $categories;
}

// Sử dụng các hàm để thực hiện các chức năng
echo "Danh sách thể loại:<br>";
$categories = getAllCategories();
foreach ($categories as $category) {
    echo "ID: " . $category['id'] . ", Tên: " . $category['name'] . "<br>";
}

echo "<br>Danh sách bài hát:<br>";
$songs = getAllSongs();
foreach ($songs as $song) {
    echo "ID: " . $song['id'] . ", Tiêu đề: " . $song['title'] . ", Thể loại ID: " . $song['category_id'] . "<br>";
}

// Thêm bài hát mới
$newSongId = addSong('New Song', 1);
echo "<br>Bài hát mới có ID: " . $newSongId . "<br>";

// Xóa bài hát
if (deleteSong(2)) {
    echo "<br>Bài hát có ID 2 đã được xóa.<br>";
} else {
    echo "<br>Không tìm thấy bài hát có ID 2.<br>";
}

// Cập nhật thông tin bài hát
if (updateSong(1, 'Updated Song', 3)) {
    echo "<br>Thông tin bài hát có ID 1 đã được cập nhật.<br>";
} else {
    echo "<br>Không tìm thấy bài hát có ID 1.<br>";
}
?>




<!-- ````<?php
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

    public function getSongById($idBaiHat) {
        foreach ($this->songs as $song) {
            if ($song['id'] == $idBaiHat) {
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
    echo "ID: " . $category['idTheLoai'] . ", Tên: " . $category['tenTheLoai'] . "<br>";
}

// In danh sách bài hát
echo "<br>Danh sách bài hát:<br>";
$songs = $songService->getAllSongs();
foreach ($songs as $song) {
    echo "ID: " . $song['idBaiHat'] . ", Tên Bài hát: " . $song['tenBaiHat'] . ", Thể loại: ".$song['idTheLoai'];
    $category = $categoryService->getCategoryById($song['idTheLoai']);
    if ($category) {
        echo $category['tenTheLoai'];
    }
    echo "<br>";
}
?>```` -->