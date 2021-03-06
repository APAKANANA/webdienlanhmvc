create table phanquyen
(
	maquyen int auto_increment primary key,
	tenquyen nvarchar(50) not null
);

create table nguoidung
(
	manguoidung int auto_increment primary key,
	hoten nvarchar(50) not null,
	tendangnhap nvarchar(50) not null,
	pass nvarchar(20),
	cmnd nvarchar(50) not null,
	gioitinh nvarchar(3),
	ngaysinh date,
	email nvarchar(50) not null,
	diachi nvarchar(100),
	dienthoai nvarchar(20),
	maquyen int,
	foreign key(maquyen) references phanquyen(maquyen)
);

create table loaisanpham
(
	maloai int auto_increment primary key,
	tenloai nvarchar(50) not null
);
create table sanpham
(
	masanpham int auto_increment primary key,
	tensanpham nvarchar(50) not null,
	hinhanh nvarchar(100),
	mota text,
	congsuat nvarchar(20),
	kichthuoc nvarchar(20),
	diennangtieuthu nvarchar(20),
	gia float,
	sothangbaohanh int,
	luotxem int,
	nuocsx nvarchar(20),
	hang nvarchar(20),
	maloai int,
	foreign key(maloai) references loaisanpham(maloai)
);

create table baiviet
(
	mabaiviet int auto_increment primary key,
	tenbaiviet nvarchar(200),
	mota nvarchar(500),
	hinhanh nvarchar(100),
	noidung longtext,
	ngaycapnhat date,
	maloai int,
	foreign key(maloai) references loaisanpham(maloai)
);
create table khuvuc
(
	makhuvuc int auto_increment primary key,
	tenkhuvuc nvarchar(50) not null
);

create table hoadon
(
	sohoadon int auto_increment primary key,
	makhachhang int,
	manhanvien int,
	ngayhoadon datetime,
	trigia int,
	trangthai tinyint(1),
	foreign key(makhachhang) references nguoidung(manguoidung),
	foreign key(manhanvien) references nguoidung(manguoidung)
);
create table cthd
(
	sohoadon int,
	masanpham int,
	soluong int,
	foreign key(sohoadon) references hoadon(sohoadon),
	foreign key(masanpham) references sanpham(masanpham),
	constraint pk_cthd primary key(sohoadon, masanpham)
);


insert into phanquyen(tenquyen) values('Admin');
insert into phanquyen(tenquyen) values('Thu Ngân');
insert into phanquyen(tenquyen) values('Khách hàng');

insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Phạm Thị Phương','phuongpt','phuongpt','271111110','Nữ','1985-09-13','phuongpt@gmail.com','12 Võ Văn Ngân, Linh Chiểu, Thủ Đức, tpHCM','01685240193',1);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Nguyễn Thị Thanh Bình','binhntt','binhntt','271111111','Nữ','1990-03-20','binhntt@gmail.com','124 Võ Văn Ngân, Linh Chiểu, Thủ Đức, tpHCM','0973874564',2);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Lê Thị Hồng Nhiên','nhienlth','nhienlth','271111112','Nữ','1987-03-20','nhienlth@gmail.com','24 Nguyễn Thị Minh Khai, Nguyễn Cư Trinh, 1, tpHCM','01694583908',2);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Vũ Ngọc Vân Linh','linhvnv','linhvnv','271111113','Nữ','1990-09-15','linhvnv@gmail.com','33 Nguyễn Huệ, Bến Nghé, 1, tpHCM','0972890489',2);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Vũ Thị Tuyết Mai','maivtt','maivtt','271111114','Nữ','1990-02-01','maivtt@gmail.com','129 Đặng Văn Bi, Linh Chiểu, Thủ Đức, tpHCM','0978974876',2);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Đinh Thị Nụ','nutd','nudt','271111115','Nữ','1993-10-12','nudt@gmail.com','38 Tôn Đức Thắng, Bến Nghé, 1, tpHCM','01678907892',3);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Nguyễn Thanh Xuân','xuannt','xuannt','271111116','Nữ','1992-11-02','xuannt@gmail.com','123 Nguyễn Thị Minh Khai, Bến Nghé, 1, tpHCM','01684369045',3);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Nguyễn Thị Tuyết Trinh','trinhntt','trinhntt','271111117','Nữ','1991-04-05','trinhntt@gmail.com','33 Quang Trung, Bến Nghé, 1, tpHCM','01678904890',3);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Phạm Thị Quỳnh Như','nhuptq','nhuptq','271111118','Nữ','1992-10-03','nhuptq@gmail.com','139 Nguyễn Huệ, Bến Nghé, 1, tpHCM','0978987651',3);
insert into nguoidung(hoten,tendangnhap,pass,cmnd,gioitinh,ngaysinh,email,diachi,dienthoai,maquyen) values('Nguyễn Trần Phương Lan','lanntp','lanntp','271111119','Nữ','1991-12-05','phamthiphuonguit@gmail.com','1 Nguyễn Huệ, Bến Nghé, 1, tpHCM','0987890982',3);





insert into loaisanpham(tenloai) values('Tủ lạnh');
insert into loaisanpham(tenloai) values('Máy nóng lạnh');
insert into loaisanpham(tenloai) values('Máy giặt');
insert into loaisanpham(tenloai) values('Bình nước nóng');
insert into loaisanpham(tenloai) values('Điều hòa');
insert into loaisanpham(tenloai) values('Lò vi sóng');
insert into loaisanpham(tenloai) values('Bàn ủi');

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Tủ lạnh Toshiba Inve','1415985966-tl4.jpg','<p>Làm tươi thưc phẩm.</p>
<p>Không làm mất vitamin trong thưc phẩm khi bảo quản.</p>','8.0 BAR','80 cm3','1000W',9000,15,2,'Nhật','Toshiba',1);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Tủ lạnh GR-B48F','1415856420-tl8.jpg','<p>Tủ lạnh cao cấp nhất của Toshiba.</p>
<p>Có Nano photo plasma khử khuẩn, làm tuơi thực phẩm.</p>','8.0 BAR','100 cm3','1000W',9000,12,2,'Nhật','Toshiba',1);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Tủ lạnh GR-NF475','1415856368-tl2.jpg','<p><p>Đá rơi tự động, làm lạnh nhanh.</p>
<p>Có cửa điện giúp việc đóng mở tiện lợi hơn.</p>','8.0 BAR','100 cm3','1000W',9000,15,4,'Nhật','Toshiba',1);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nóng lạnh Ariston','1415856486-bnl2.jpg','<p>Thiết bị ổn định nhiệt chính xác cao.</p>
<p>Lớp cách nhiệt mật độ cao góp phần tiết kiệm điện năng.</p>','8.0 BAR','40 cm3','1000W',3050,24,5,'Việt Nam','Ariston',2);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nóng lạnh PRO-SS','1415858965-bnl5.jpg','<p>Kiểm soát nhiệt hiệu suất cao.</p>
<p>Siêu bền hơn nhờ công nghệ tráng Titan.</p>','8.0 BAR','20 cm3','1000W',3800,24,2,'Việt Nam','Ariston',2);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nóng lạnh TI','1415859022-bnl6.jpg','<p>Thanh đốt với công nghệ tự làm sạch SCHE.</p>
<p>Thuận lợi trong lắp đặt và bảo dưỡng.</p>','8.0 BAR','35 cm3','1000W',3500,24,6,'Việt Nam','Ariston',2);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nóng lạnh Ariston','1415859086-bnl1.jpg','<p>Hệ thống kiểm soát an toàn.</p>
<p>Kiểm soát nhiệt hiệu suất cao.</p>','8.0 BAR','15 cm3','1000W',2970,24,4,'Việt Nam','Ariston',2);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nóng lạnh PRO R','1415859132-bnl3.jpg','<p>TSS tích hợp thiết bị chống giật ELCB.</p>
<p>Tuổi thọ bình cao và tiết kiệm năng lượng.</p>','8.0 BAR','30 cm3','1000W',2670,24,4,'Việt Nam','Ariston',2);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nóng lạnh R-SS','1415859200-bnl4.jpg','<p>Thiết bị ổn định nhiệt chính xác cao.</p>
<p>Siêu bền hơn nhờ công nghệ tráng Titan.</p>','8.0 BAR','15 cm3','1000W',2630,24,4,'Việt Nam','Ariston',2);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Máy giặt NA-VR2200R','1415859286-mg1.jpg','<p>Giặt và khử nước công suất 9kg.</p>
<p>Năng suất sấy 6kg.</p>','8.0 BAR','1200 cm3','1200W',7500,15,2,'Nhật','National',3);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Máy giặt TW-2500VC','1415859326-mg5.jpg','<p>Máy có bộ chống khuẩn và hôi Ag+.</p>
<p>Điều hòa nhiệt độ chu kỳ động cơ.</p>','1.2 BAR','1200 cm3','1200W',8000,15,2,'Nhật','Toshiba',3);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nước nóng Ariston','1415984676-bnn1.jpg','<p>Lớp cách nhiệt góp phần tiết kiệm điện năng.</p>
<p>Kiểm soát nhiệt hiệu suất cao.</p>','8.0 BAR','15 cm3','1000W',2630,24,4,'Việt Nam','Ariston',4);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bình nước nóng Ariston PRO','1415984720-bnn2.jpg','<p>Kiểm soát nhiệt hiệu suất cao.</p>
<p>Khả năng tiết kiệm điện vượt trội.</p>','8.0 BAR','15 cm3','1000W',2800,24,3,'Việt Nam','Ariston',4);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Máy lạnh Reetech','1415859612-dh1.jpg','<p>Lưu lượng gió: 450/400/350 m3/h.</p>
<p>Phạm vi hiệu quả: 14 – 21 m2.</p>','1 Hp','50 cm3','1050 W',2340,24,3,'Việt Nam','Toshiba',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Máy lạnh Daikin','1415637984-dh2.jpg','<p>Wide-Angle louvers - Góc hắt gió rộng.</p>
<p>Chế độ làm lạnh/sưởi ấm nhanh.</p>','1 Hp','50 cm3','1000W',2300,24,1,'Việt Nam','Toshiba',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Điều Hòa Panasonic','1415859697-dh3.jpg','<p>Điều chỉnh hướng gió ngang bằng tay.</p>
<p>Lớp mạ chống ăn mòn độc đáo.</p>','11,900 BTU','100 cm3','1270W',7000,24,3,'Việt Nam','Panasonic',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Điều Hòa Inverter','1415859756-dh4.jpg','<p>Điều chỉnh hướng gió ngang bằng tay.</p>
<p>Hệ thống lọc khí tiên tiến cho căn phòng bạn.</p>','9000 BTU','100 cm3','790W',8000,24,3,'Việt Nam','Panasonic',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('ĐIều hòa LG - F12CN','1415859813-dh5.jpg','<p>Điều khiển tử xa.</p>
<p>Hoạt động êm ái.</p>','12000 BTU','100 cm3','900W',7100,24,3,'Việt Nam','LG',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Điều Hòa Mitsubishi','1415859848-dh6.jpg','<p>Chức năng tiện nghi.</p>
<p>Chọn góc độ lên xuống theo độ rộng mong muốn.</p>','9000 BTU','100 cm3','880W',8200,24,5,'Việt Nam','Mitsubishi',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('ĐIều hòa F12CN','1419360314-dh8.jpg','<p>Điều khiển tử xa.</p>
<p>Hoạt động êm ái.</p>','12000 BTU','100 cm3','900W',7100,24,3,'Việt Nam','LG',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Điều Hòa Mastax','1419360295-dh7.jpg','<p>Điều chỉnh hướng gió ngang bằng tay.</p>
<p>Hệ thống lọc khí tiên tiến cho căn phòng bạn.</p>','9000 BTU','100 cm3','790W',8000,24,3,'Việt Nam','Panasonic',5);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Lò vi sóng MH6022D','1415984101-lvs2.jpg','<p>Khoang lò có lớp tráng kháng khuẩn.</p>
<p>Mở cửa dạng ấn tự động thuận tiện.</p>','8.0 BAR','30 cm3','1000W',2000,15,2,'Việt Nam','LG',6);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Lò vi sóng MHD','1415984020-lvs4.jpg','<p>Nấu nhanh ăn ngon</p>
<p>Công nghệ vi sóng giúp thực phẩm chín nhanh.</p>','8.0 BAR','30 cm3','800W',2200,12,1,'Nhật','Toshiba',6);

insert into sanpham(tensanpham,hinhanh,mota,congsuat,kichthuoc,diennangtieuthu,gia,sothangbaohanh,luotxem,nuocsx,hang,maloai)
values('Bàn là Sharp','1419361828-bl1.jpg','<p>Bàn là có mặt đế bằng hợp kim nhôm chống dính cao cấp.</p>
<p>Mang đến những bộ quần áo được là phẳng phiu.</p>','8.0 BAR','30 cm3','1000W',420,12,5,'Thái Lan','Sharp',7);

insert into khuvuc(tenkhuvuc) values('Quận 1');
insert into khuvuc(tenkhuvuc) values('Quận 3');
insert into khuvuc(tenkhuvuc) values('Quận 5');
insert into khuvuc(tenkhuvuc) values('Tân Bình');
insert into khuvuc(tenkhuvuc) values('Thủ Đức');



insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH MÁY GIẶT SANYO - PANASONIC TẠI TPHCM','sửa chữa,bảo hành các loại máy giặt nhanh chóng, hiệu quả','1420360172-1415859286-mg1.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH M&Aacute;Y GIẶT SANYO - PANASONIC TẠI TPHCM</p>

<p>địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08)35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215</p>

<p>Địa chỉ li&ecirc;n hệ:</p>

<p><strong>Trụ sở ch&iacute;nh</strong> : 29 Đường số 1 (CX Chu Văn An) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1</strong> :18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2</strong> :120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3&nbsp;</strong>: 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4&nbsp;</strong>: 40/3 Trần Hưng Đạo &ndash; Q.5</p>

<p>Email: P&amp;P@yahoo.com Yahoo:P&amp;P</p>

 <p><span >&nbsp;<strong>QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG C&Aacute;C LOẠI M&Aacute;Y GIẶT MANG THƯƠNG HIỆU SANYO - PANASONIC KHI BỊ SỰ CỐ H&Atilde;Y VUI L&Ograve;NG LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!</strong></span></p>

<p>Trung t&acirc;m sửa chữa khắc phục nhanh c&aacute;c sự cố m&aacute;y giặt SANYO - PANASONIC chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan .( C&oacute; VAT) Sửa chữa &ndash; bảo h&agrave;nh m&aacute;y giặt kh&ocirc;ng vắt , m&aacute;y giặt bị k&ecirc;u, bị rung , m&aacute;y giặt giặt một chiều , m&aacute;y giặt kh&ocirc;ng cấp nước , m&aacute;y giặt kh&ocirc;ng xả, Sửa m&aacute;y giặt hư bo, m&aacute;y giặt liệt ph&iacute;m, m&aacute;y giặt hoạt động hay bị ngưng tắt đột ngột, m&aacute;y giặt kh&ocirc;ng giặt, bị tr&agrave;n nước.</p>

<p>Tất c&aacute;c c&aacute;c thiết bị sau khi sửa chữa thay thế đều được bảo h&agrave;nh. Nếu gia đ&igrave;nh c&oacute; thiết bị M&Aacute;Y GIẶT mang thương hiệu SANYO - PANASONIC gặp sự cố h&atilde;y nhấc m&aacute;y gọi ngay cho Trung t&acirc;m ch&uacute;ng t&ocirc;i để được phục vụ tốt nhất. C&ugrave;ng với hệ thống trạm BẢO H&Agrave;NH &ndash; SỬA CHỮA nằm trải đều khắp th&agrave;nh phố ch&uacute;ng t&ocirc;i đảm bảo phục vụ qu&yacute; kh&aacute;ch nhanh nhất, hiệu quả nhất!</p>

<p>Nhận sửa chữa: M&aacute;y lạnh treo tường , &Acirc;m trần - M&aacute;y Nước N&oacute;ng - B&igrave;nh n&oacute;ng lạnh &ndash; Tủ lạnh &ndash; L&ograve; viba (vi s&oacute;ng) &ndash; L&ograve; nướng Tại Nh&agrave;.</p>
','2014/3/3',3);

insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH MÁY NƯỚC NÓNG PANASONIC TẠI TPHCM','Chuyên cung cấp các phụ kiện máy nước nóng chất lượng, bảo hành máy nước nóng tại nhà, hiệu quả,đáng tin cậy','1420361039-1415856486-bnl2.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH M&Aacute;Y NƯỚC N&Oacute;NG PANASONIC TẠI TPHCM</p>

<p>Địa chỉ tin cậy cho mọi gia đ&igrave;nh TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08) 35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215</p>

<p><strong>Trụ sở ch&iacute;nh</strong> : 29 Đường số 1 (CX Chu Văn An) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1 </strong>:18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2 </strong>:120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3</strong>: 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4</strong>: 40/3 Trần Hưng Đạo &ndash; Q.5</p>

 <p><span >Email:</span>&nbsp;P&amp;P@yahoo.com</p>

<p>Yahoo:P&amp;P</p>

<p><strong>QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG M&Aacute;Y NƯỚC N&Oacute;NG TRỰC TIẾP HOẶC GI&Aacute;N TIẾP MANG THƯƠNG HIỆU PANASONIC KHI BỊ SỰ CỐ H&Atilde;Y LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!</strong></p>

<p>Trung t&acirc;m chuy&ecirc;n sửa chữa khắc phục nhanh c&aacute;c sự cố hư hỏng m&aacute;y nước n&oacute;ng PANASONIC chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan ( C&oacute; VAT) - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng PANASONIC kh&ocirc;ng l&ecirc;n nguồn , B&aacute;o lỗi bo mạch. - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng PANASONIC chạm điện ra ngo&agrave;i , B&aacute;o đ&egrave;n đỏ. - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng PANASONIC kh&ocirc;ng n&oacute;ng , n&oacute;ng yếu hoặc n&oacute;ng qu&aacute;. - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng PANASONIC bị rỉ nước, k&ecirc;u to, bị &ugrave;&hellip;</p>

<p>Tất c&aacute;c c&aacute;c thiết bị sau khi sửa chữa thay thế đều được bảo h&agrave;nh. Nếu gia đ&igrave;nh c&oacute; thiết bị m&aacute;y nước n&oacute;ng mang thương hiệu PANASONIC gặp sự cố h&atilde;y nhấc m&aacute;y gọi ngay cho Trung t&acirc;m ch&uacute;ng t&ocirc;i để được phục vụ tốt nhất.</p>

<p>Nhận sửa chữa &ndash; Bảo h&agrave;nh: M&aacute;y lạnh treo tường , M&aacute;y lạnh &acirc;m trần - L&ograve; viba ( vi s&oacute;ng) &ndash; m&aacute;y giặt - Tủ lạnh Tại Nh&agrave;. &ldquo;SỰ H&Agrave;I L&Ograve;NG CỦA QU&Yacute; KH&Aacute;CH L&Agrave; TH&Agrave;NH C&Ocirc;NG CỦA CH&Uacute;NG T&Ocirc;I&rdquo;</p>
','2014/4/2',4);


insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH TỦ LẠNH  SHARP – SANYO TẠI TPHCM','Bảo hành tủ lạnh Sharp_thương hiệu đáng tin cậy của mọi nhà','1420361207-1415856368-tl2.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH TỦ LẠNH SHARP &ndash; SANYO TẠI TPHCM</p>

<p>Địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08)35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215 .</p>

<p><strong>Trụ sở ch&iacute;nh :</strong> 29 Đường số 1 ( CX Chu Văn An ) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1 :</strong>18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2 </strong>:120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3: </strong>485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4: </strong>40/3 Trần Hưng Đạo &ndash; Q.5</p>

<p><strong>Email:</strong> P&amp;P@yahoo.com Yahoo:P&amp;P</p>

<p><strong>TRUNG T&Acirc;M BẢO H&Agrave;NH - SỬA CHỮA TỦ LẠNH SHARP &ndash; SANYO UY T&Iacute;N TẠI TP.HCM - QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG C&Aacute;C LOẠI TỦ LẠNH MANG THƯƠNG HIỆU SHARP &ndash; SANYO KHI BỊ SỰ CỐ H&Atilde;Y VUI L&Ograve;NG LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!</strong></p>

<p>Trung t&acirc;m chuy&ecirc;n sửa chữa khắc phục nhanh c&aacute;c sự cố m&aacute;y lạnh SHARP &ndash; SANYO chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan (c&oacute; VAT phục vụ tận nơi)</p>

<p>&bull; Tủ lạnh thiếu ga</p>

<p>&bull; Tủ lạnh bị tắc ẩm</p>

<p>&bull; Tắc bẩn 1 phần phin lọc</p>

<p>&bull; Thermostat hoạt động kh&ocirc;ng ch&iacute;nh x&aacute;c</p>

<p>&bull; Do nạp ga qu&aacute; nhiều</p>

<p>&bull; Do d&agrave;n lạnh b&aacute;m tuyết nhiều</p>

<p>&bull; Do hỏng b&ecirc;n trong block</p>

<p>&bull; Do hỏng thermic</p>

<p>&bull; Do vỏ tủ kh&ocirc;ng k&iacute;n hoặc cửa tủ bị k&ecirc;nh M&aacute;y n&eacute;n kh&ocirc;ng hoạt động</p>

<p>&bull; Hỏng thermic</p>

<p>&bull; Hỏng rơle khởi động</p>

<p>&bull; Hỏng bloc</p>
','2014/4/4',1);

insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH MÁY GIẶT TOSHIBA TẠI TPHCM','sửa chữa,bảo hành các loại máy giặt nhanh chóng, hiệu quả','1420361454-1415859326-mg5.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH M&Aacute;Y GIẶT TOSHIBA TẠI TPHCM địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08)35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215</p>

<p>Địa chỉ li&ecirc;n hệ:</p>

<p><strong>Trụ sở ch&iacute;nh </strong>: 29 Đường số 1 (CX Chu Văn An) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1</strong> :18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2 </strong>:120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3 </strong>: 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4</strong> : 40/3 Trần Hưng Đạo &ndash; Q.5</p>

<p>Email: P&amp;P@yahoo.com Yahoo:P&amp;P</p>

<p>&nbsp;QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG C&Aacute;C LOẠI M&Aacute;Y GIẶT MANG THƯƠNG HIỆU TOSHIBA&nbsp;&nbsp;KHI BỊ SỰ CỐ H&Atilde;Y VUI L&Ograve;NG LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!</p>

<p>Trung t&acirc;m sửa chữa khắc phục nhanh c&aacute;c sự cố m&aacute;y giặt TOSHIBA chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan .( C&oacute; VAT) Sửa chữa &ndash; bảo h&agrave;nh m&aacute;y giặt kh&ocirc;ng vắt , m&aacute;y giặt bị k&ecirc;u, bị rung , m&aacute;y giặt giặt một chiều , m&aacute;y giặt kh&ocirc;ng cấp nước , m&aacute;y giặt kh&ocirc;ng xả, Sửa m&aacute;y giặt hư bo, m&aacute;y giặt liệt ph&iacute;m, m&aacute;y giặt hoạt động hay bị ngưng tắt đột ngột, m&aacute;y giặt kh&ocirc;ng giặt, bị tr&agrave;n nước. Tất c&aacute;c c&aacute;c thiết bị sau khi sửa chữa thay thế đều được bảo h&agrave;nh.</p>

<p>Nếu gia đ&igrave;nh c&oacute; thiết bị M&Aacute;Y GIẶT mang thương hiệu TOSHIBA gặp sự cố h&atilde;y nhấc m&aacute;y gọi ngay cho Trung t&acirc;m ch&uacute;ng t&ocirc;i để được phục vụ tốt nhất. C&ugrave;ng với hệ thống trạm BẢO H&Agrave;NH &ndash; SỬA CHỮA nằm trải đều khắp th&agrave;nh phố ch&uacute;ng t&ocirc;i đảm bảo phục vụ qu&yacute; kh&aacute;ch nhanh nhất, hiệu quả nhất!</p>

 <p><span >Nhận sửa chữa: M&aacute;y lạnh treo tường , &Acirc;m trần - M&aacute;y Nước N&oacute;ng - B&igrave;nh n&oacute;ng lạnh &ndash; Tủ lạnh &ndash; L&ograve; viba (vi s&oacute;ng) &ndash; L&ograve; nướng Tại Nh&agrave;.</span></p>
','2014/3/3',3);

insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH MÁY NƯỚC NÓNG SANYO TẠI TPHCM','Chuyên cung cấp các phụ kiện máy nước nóng chất lượng, bảo hành máy nước nóng tại nhà, hiệu quả,đáng tin cậy','1420361728-1415859022-bnl6.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH M&Aacute;Y NƯỚC N&Oacute;NG SANYO&nbsp;TẠI TPHCM Địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08) 35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215</p>

<p><strong>Trụ sở ch&iacute;nh</strong> : 29 Đường số 1 (CX Chu Văn An) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1</strong> :18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2</strong> :120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3</strong>: 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4</strong>: 40/3 Trần Hưng Đạo &ndash; Q.5</p>

 <p><span ><strong>Email:</strong></span>&nbsp;P&amp;P@yahoo.com Yahoo:P&amp;P</p>

<p>QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG M&Aacute;Y NƯỚC N&Oacute;NG TRỰC TIẾP HOẶC GI&Aacute;N TIẾP MANG THƯƠNG HIỆU SANYO&nbsp;KHI BỊ SỰ CỐ H&Atilde;Y LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!</p>

<p>Trung t&acirc;m chuy&ecirc;n sửa chữa khắc phục nhanh c&aacute;c sự cố hư hỏng m&aacute;y nước n&oacute;ng TOSHIBA&nbsp;chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan ( C&oacute; VAT) - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng SANYO kh&ocirc;ng l&ecirc;n nguồn , B&aacute;o lỗi bo mạch. - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng PANASONIC chạm điện ra ngo&agrave;i , B&aacute;o đ&egrave;n đỏ.</p>

<p>- Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng SANYO kh&ocirc;ng n&oacute;ng , n&oacute;ng yếu hoặc n&oacute;ng qu&aacute;. - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng PANASONIC bị rỉ nước, k&ecirc;u to, bị &ugrave;&hellip; Tất c&aacute;c c&aacute;c thiết bị sau khi sửa chữa thay thế đều được bảo h&agrave;nh.</p>

<p>Nếu gia đ&igrave;nh c&oacute; thiết bị m&aacute;y nước n&oacute;ng mang thương hiệu SANYO gặp sự cố h&atilde;y nhấc m&aacute;y gọi ngay cho Trung t&acirc;m ch&uacute;ng t&ocirc;i để được phục vụ tốt nhất. Nhận sửa chữa &ndash; Bảo h&agrave;nh: M&aacute;y lạnh treo tường , M&aacute;y lạnh &acirc;m trần - L&ograve; viba ( vi s&oacute;ng) &ndash; m&aacute;y giặt - Tủ lạnh Tại Nh&agrave;.</p>

<p><em>&ldquo;SỰ H&Agrave;I L&Ograve;NG CỦA QU&Yacute; KH&Aacute;CH L&Agrave; TH&Agrave;NH C&Ocirc;NG CỦA CH&Uacute;NG T&Ocirc;I&rdquo;</em></p>
','2014/4/2',4);


insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH TỦ LẠNH  SAMSUNG TẠI TPHCM','Bảo hành tủ lạnh Sharp_thương hiệu đáng tin cậy của mọi nhà','1420362032-1415856420-tl8.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH TỦ LẠNH SAMSUNG TẠI TPHCM Địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08)35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215 .</p>

<p><strong>Trụ sở ch&iacute;nh </strong>: 29 Đường số 1 ( CX Chu Văn An ) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1 </strong>:18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2</strong> :120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3 </strong>: 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4&nbsp;</strong>: 40/3 Trần Hưng Đạo &ndash; Q.5</p>

<p><strong>Email</strong>: P&amp;P@yahoo.com &nbsp;</p>

<p><strong>Yahoo</strong>:P&amp;P</p>

<p><strong>TRUNG T&Acirc;M BẢO H&Agrave;NH - SỬA CHỮA TỦ LẠNH SAMSUNG UY T&Iacute;N TẠI TP.HCM - QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG C&Aacute;C LOẠI TỦ LẠNH MANG THƯƠNG HIỆU SAMSUNG KHI BỊ SỰ CỐ H&Atilde;Y VUI L&Ograve;NG LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT! </strong></p>

<p>Trung t&acirc;m chuy&ecirc;n sửa chữa khắc phục nhanh c&aacute;c sự cố m&aacute;y lạnh SAMSUNG chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan (c&oacute; VAT phục vụ tận nơi)</p>

<p>&nbsp;&bull; Tủ lạnh thiếu ga</p>

<p>&bull; Tủ lạnh bị tắc ẩm</p>

<p>&bull; Tắc bẩn 1 phần phin lọc</p>

<p>&bull; Thermostat hoạt động kh&ocirc;ng ch&iacute;nh x&aacute;</p>

<p>c &bull; Do nạp ga qu&aacute; nhiều</p>

<p>&bull; Do d&agrave;n lạnh b&aacute;m tuyết nhiều</p>

<p>&bull; Do hỏng b&ecirc;n trong block</p>

<p>&bull; Do hỏng thermic</p>

<p>&bull; Do vỏ tủ kh&ocirc;ng k&iacute;n hoặc cửa tủ bị k&ecirc;nh M&aacute;y n&eacute;n kh&ocirc;ng hoạt động</p>

<p>&bull; Hỏng thermic</p>

<p>&bull; Hỏng rơle khởi động</p>

<p>&bull; Hỏng bloc</p>
','2014/4/4',1);

insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH MÁY GIẶT SAMSUNG TẠI TPHCM','sửa chữa,bảo hành các loại máy giặt nhanh chóng, hiệu quả','1420362544-maygiat.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH M&Aacute;Y GIẶT SAMSUNG TẠI TPHCM địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08)35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215</p>

<p>Địa chỉ li&ecirc;n hệ:</p>

<p><strong>Trụ sở ch&iacute;nh</strong> : 29 Đường số 1 (CX Chu Văn An) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1</strong> :18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2</strong> :120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3</strong>: 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4</strong>: 40/3 Trần Hưng Đạo &ndash; Q.5<br />
<strong>&nbsp;Email:</strong>&nbsp;P&amp;P@yahoo.com Yahoo:P&amp;P</p>

<p>QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG C&Aacute;C LOẠI M&Aacute;Y GIẶT MANG THƯƠNG HIỆU SANYO - PANASONIC KHI BỊ SỰ CỐ H&Atilde;Y VUI L&Ograve;NG LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!</p>

<p>Trung t&acirc;m sửa chữa khắc phục nhanh c&aacute;c sự cố m&aacute;y giặt SAMSUNG &nbsp;chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan .( C&oacute; VAT) Sửa chữa &ndash; bảo h&agrave;nh m&aacute;y giặt kh&ocirc;ng vắt , m&aacute;y giặt bị k&ecirc;u, bị rung , m&aacute;y giặt giặt một chiều , m&aacute;y giặt kh&ocirc;ng cấp nước , m&aacute;y giặt kh&ocirc;ng xả, Sửa m&aacute;y giặt hư bo, m&aacute;y giặt liệt ph&iacute;m, m&aacute;y giặt hoạt động hay bị ngưng tắt đột ngột, m&aacute;y giặt kh&ocirc;ng giặt, bị tr&agrave;n nước.</p>

<p>Tất c&aacute;c c&aacute;c thiết bị sau khi sửa chữa thay thế đều được bảo h&agrave;nh. Nếu gia đ&igrave;nh c&oacute; thiết bị M&Aacute;Y GIẶT mang thương hiệu SAMSUNG gặp sự cố h&atilde;y nhấc m&aacute;y gọi ngay cho Trung t&acirc;m ch&uacute;ng t&ocirc;i để được phục vụ tốt nhất.</p>

<p>C&ugrave;ng với hệ thống trạm BẢO H&Agrave;NH &ndash; SỬA CHỮA nằm trải đều khắp th&agrave;nh phố ch&uacute;ng t&ocirc;i đảm bảo phục vụ qu&yacute; kh&aacute;ch nhanh nhất, hiệu quả nhất! Nhận sửa chữa: M&aacute;y lạnh treo tường , &Acirc;m trần - M&aacute;y Nước N&oacute;ng - B&igrave;nh n&oacute;ng lạnh &ndash; Tủ lạnh &ndash; L&ograve; viba (vi s&oacute;ng) &ndash; L&ograve; nướng Tại Nh&agrave;.</p>
','2014/3/3',3);

insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH MÁY NƯỚC NÓNG ELECTRONIC TẠI TPHCM','Chuyên cung cấp các phụ kiện máy nước nóng chất lượng, bảo hành máy nước nóng tại nhà, hiệu quả,đáng tin cậy','1420362827-electrolux_ewe351axsw_1.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH M&Aacute;Y NƯỚC N&Oacute;NG ELECTRONIC TẠI TPHCM Địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08) 35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215</p>

<p><strong>Trụ sở ch&iacute;nh</strong> : 29 Đường số 1 (CX Chu Văn An) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1 </strong>:18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2</strong> :120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3</strong>: 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4</strong>: 40/3 Trần Hưng Đạo &ndash; Q.5</p>

 <p><span ><strong>Email</strong></span>: P&amp;P@yahoo.com Yahoo:P&amp;P&nbsp;</p>

<p><strong>QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG M&Aacute;Y NƯỚC N&Oacute;NG TRỰC TIẾP HOẶC GI&Aacute;N TIẾP MANG THƯƠNG HIỆU ELECTRONIC KHI BỊ SỰ CỐ H&Atilde;Y LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT!</strong></p>

<p>Trung t&acirc;m chuy&ecirc;n sửa chữa khắc phục nhanh c&aacute;c sự cố hư hỏng m&aacute;y nước n&oacute;ng ELECTRONIC chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan ( C&oacute; VAT) - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng ELECTRONIC kh&ocirc;ng l&ecirc;n nguồn , B&aacute;o lỗi bo mạch.</p>

<p>&nbsp;Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng PANASONIC chạm điện ra ngo&agrave;i , B&aacute;o đ&egrave;n đỏ. - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng ELECTRONIC kh&ocirc;ng n&oacute;ng , n&oacute;ng yếu hoặc n&oacute;ng qu&aacute;. - Sửa chữa - bảo h&agrave;nh m&aacute;y nước n&oacute;ng ELECTRONIC bị rỉ nước, k&ecirc;u to, bị &ugrave;&hellip; Tất c&aacute;c c&aacute;c thiết bị sau khi sửa chữa thay thế đều được bảo h&agrave;nh.</p>

<p>Nếu gia đ&igrave;nh c&oacute; thiết bị m&aacute;y nước n&oacute;ng mang thương hiệu ELECTRONIC gặp sự cố h&atilde;y nhấc m&aacute;y gọi ngay cho Trung t&acirc;m ch&uacute;ng t&ocirc;i để được phục vụ tốt nhất. Nhận sửa chữa &ndash; Bảo h&agrave;nh: M&aacute;y lạnh treo tường , M&aacute;y lạnh &acirc;m trần - L&ograve; viba ( vi s&oacute;ng) &ndash; m&aacute;y giặt - Tủ lạnh Tại Nh&agrave;.</p>

<p><strong><em>&ldquo;SỰ H&Agrave;I L&Ograve;NG CỦA QU&Yacute; KH&Aacute;CH L&Agrave; TH&Agrave;NH C&Ocirc;NG CỦA CH&Uacute;NG T&Ocirc;I&rdquo;</em></strong></p>
','2014/4/2',4);


insert into baiviet (tenbaiviet,mota,hinhanh,noidung,ngaycapnhat,maloai) values('TRUNG TÂM BẢO HÀNH TỦ LẠNH  TOSHIBA TẠI TPHCM','Bảo hành tủ lạnh Sharp_thương hiệu đáng tin cậy của mọi nhà','1420363182-images.jpg','<p>TRUNG T&Acirc;M BẢO H&Agrave;NH TỦ LẠNH TOSHIBA TẠI TPHCM Địa chỉ tin cậy cho mọi gia đ&igrave;nh</p>

<p>TRUNG T&Acirc;M TIẾP NHẬN KH&Aacute;CH H&Agrave;NG (08)35036873 &ndash; 0914161204 FAX:(08)73076869 &ndash; MST:0304598215 .</p>

<p><strong>Trụ sở ch&iacute;nh :</strong> 29 Đường số 1 ( CX Chu Văn An ) &ndash; F26 &ndash; Q. B&igrave;nh Thạnh</p>

<p><strong>Chi nh&aacute;nh 1</strong> :18/161c1 Trần Quang Diệu - Q.3</p>

<p><strong>Chi nh&aacute;nh 2</strong> :120/5 Nguyễn Văn Linh &ndash; Q. 7</p>

<p><strong>Chi nh&aacute;nh 3:</strong> 485/24c Quang Trung - P.10 - G&ograve; vấp</p>

<p><strong>Chi nh&aacute;nh 4:</strong> 40/3 Trần Hưng Đạo &ndash; Q.5 Email: P&amp;P@yahoo.com Yahoo:P&amp;P</p>

<p><strong>TRUNG T&Acirc;M BẢO H&Agrave;NH - SỬA CHỮA TỦ LẠNH TOSHIBA UY T&Iacute;N TẠI TP.HCM - QU&Yacute; KH&Aacute;CH H&Agrave;NG ĐANG SỬ DỤNG C&Aacute;C LOẠI TỦ LẠNH MANG THƯƠNG HIỆU TOSHIBA KHI BỊ SỰ CỐ H&Atilde;Y VUI L&Ograve;NG LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I ĐỂ ĐƯỢC PHỤC VỤ TỐT NHẤT! </strong></p>

<p>Trung t&acirc;m chuy&ecirc;n sửa chữa khắc phục nhanh c&aacute;c sự cố m&aacute;y lạnh TOSHIBA chuy&ecirc;n nghiệp tại nh&agrave; v&agrave; cơ Quan (c&oacute; VAT phục vụ tận nơi)</p>

<p>&bull; Tủ lạnh thiếu ga</p>

<p>&bull; Tủ lạnh bị tắc ẩm</p>

<p>&bull; Tắc bẩn 1 phần phin lọc</p>

<p>&bull; Thermostat hoạt động kh&ocirc;ng ch&iacute;nh x&aacute;c</p>

<p>&bull; Do nạp ga qu&aacute; nhiều</p>

<p>&bull; Do d&agrave;n lạnh b&aacute;m tuyết nhiều</p>

<p>&bull; Do hỏng b&ecirc;n trong block</p>

<p>&bull; Do hỏng thermic</p>

<p>&bull; Do vỏ tủ kh&ocirc;ng k&iacute;n hoặc cửa tủ bị k&ecirc;nh M&aacute;y n&eacute;n kh&ocirc;ng hoạt động</p>

<p>&bull; Hỏng thermic</p>

<p>&bull; Hỏng rơle khởi động</p>

<p>&bull; Hỏng bloc</p>
','2014/4/4',1);



insert into hoadon (makhachhang,manhanvien,ngayhoadon,trigia,trangthai) values('7','5','2014/4/1','26000','1');
insert into hoadon (makhachhang,manhanvien,ngayhoadon,trigia,trangthai) values('8','4','2014/4/2','37400','1');
insert into hoadon (makhachhang,manhanvien,ngayhoadon,trigia,trangthai) values('9','4','2014/4/3','5600','1');
insert into hoadon (makhachhang,manhanvien,ngayhoadon,trigia,trangthai) values('10','2','2014/4/3','11000','1');
insert into hoadon (makhachhang,manhanvien,ngayhoadon,trigia,trangthai) values('10','3','2014/4/4','18680','1');

insert into cthd(sohoadon,masanpham,soluong) values('1','2','2');
insert into cthd(sohoadon,masanpham,soluong) values('1','11','1');

insert into cthd(sohoadon,masanpham,soluong) values('2','2','1');
insert into cthd(sohoadon,masanpham,soluong) values('2','11','3');
insert into cthd(sohoadon,masanpham,soluong) values('2','21','2');

insert into cthd(sohoadon,masanpham,soluong) values('3','13','2');

insert into cthd(sohoadon,masanpham,soluong) values('4','1','1');
insert into cthd(sohoadon,masanpham,soluong) values('4','20','1');

insert into cthd(sohoadon,masanpham,soluong) values('5','14','2');
insert into cthd(sohoadon,masanpham,soluong) values('5','16','2');



CREATE TABLE IF NOT EXISTS  `ci_sessions` (
session_id varchar(40) DEFAULT '0' NOT NULL,
ip_address varchar(45) DEFAULT '0' NOT NULL,
user_agent varchar(120) NOT NULL,
last_activity int(10) unsigned DEFAULT 0 NOT NULL,
user_data text NOT NULL,
PRIMARY KEY (session_id),
KEY `last_activity_idx` (`last_activity`)
);