create database BTTH01B;
use BTTH01B;

create table tacgia(
  ma_tgia int unsigned primary key auto_increment,
  ten_tgia varchar(100) not null,
  hinh_tgia varchar(100)
);
insert into tacgia('ma_tgia', 'ten_tgia', 'hinh_tgia')
values            (1,'')

create table theloai(
  ma_tloai int unsigned primary key auto_increment,
  ten_tloai varchar(50) not null,
);

create table baiviet(
  ma_bviet int unsigned primary key auto_increment,
  tieude varchar(200) not null,
  ten_bhat varchar(100) not null,
  ma_tloai int unsigned not null,
  tomtat text not null,
  noidung text,
  ma_tgia int unsigned not null,
  ngayviet datetime default curdate(),
  hinhanh varchar(200),
  foreign key (ma_tloai) references theloai(ma_theloai),
  foreign key (ma_tgia) references tacgia(ma_tacgia),
);

