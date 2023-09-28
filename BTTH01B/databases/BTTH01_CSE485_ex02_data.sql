create database BTTH01B;
use BTTH01B;

create table tacgia(
  ma_tgia int unsigned primary key auto_increment,
  ten_tgia varchar(100) not null,
  hinh_tgia varchar(100)
);
insert into tacgia('ma_tgia', 'ten_tgia', 'hinh_tgia')
values            (1,'Nhacvietplus');
                  (2,'Fancy');
                  (3,'Mr.Siro');
                  (4,'Thu Trang');


create table theloai(
  ma_tloai int unsigned primary key auto_increment,
  ten_tloai varchar(50) not null,
);
insert into theloai('ma_tloai','ten_tloai')
values            (1,'Nhạc trữ tình');
                  (2,'Nhạc bolero');
                  (3,'Nhạc trẻ');
                  (4,'Nhạc vàng');


create table baiviet(
  ma_bviet int unsigned primary key auto_increment,
  tieude varchar(200) not null,
  ten_bhat varchar(100) not null,
  ma_tloai int unsigned not null,
  tomtat text not null,
  noidung text,
  ma_tgia int unsigned not null,
  ngayviet datetime,
  hinhanh varchar(200),
  foreign key (ma_tloai) references theloai(ma_theloai),
  foreign key (ma_tgia) references tacgia(ma_tacgia),
);
insert into baiviet('ma_bviet','tieude','ten_bhat','ma_tloai','tomtat','noidung','ma_tgia','ngayviet','hinhanh')
values        (1,'Tình yêu bong bóng','Em của ngày hôm qua', 3,"Xin chao ngay mai",null,1,'1-1-2023',null);
              (2,'Anh và em','Hôm nay em buồn',3,"Xin chao ngay mai",null,3,'2-1-2013',null);
              (3,'Em và Anh','Một ngày đầy nắng',1,"Xin chao ngay mai",null,1,'5-1-2013',null);
              (4,'Hiện tại và tương lai','Gieo quẻ',2,"Xin chao ngay mai",null,1,'2-10-2013',null);
              (5,'Hiện tại và tương lai','Tình yêu chúng mình',1,"Xin chao ngay mai",null,2,'20-12-2018',null);


