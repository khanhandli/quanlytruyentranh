
---Tạo database tên QLTT

--Tạo table users
CREATE TABLE users(user VARCHAR(255),password VARCHAR(255));



INSERT INTO users
    VALUES ('nhuy','123');



-- TAO BANG TRYEN NGAN
CREATE TABLE TruyenNgan(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255));
--Triger tu đọng cập nhập vào truyện tổng hợp
CREATE TRIGGER truyen_ngan AFTER INSERT ON TruyenNgan
FOR EACH ROW
    INSERT INTO TruyenTH(id,TenTruyen,TrangBia,SoChuong,TenTG)
    VALUES (NEW.id,NEW.TenTruyen,NEW.TrangBia,NEW.SoChuong,NEW.TenTG);

--tạo bảng truyện cười
	CREATE TABLE TruyenCuoi(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255));
--Triger tu đọng cập nhập vào truyện tổng hợp
CREATE TRIGGER truyen_cuoi AFTER INSERT ON TruyenCuoi
FOR EACH ROW
    INSERT INTO TruyenTH(id,TenTruyen,TrangBia,SoChuong,TenTG)
    VALUES (NEW.id,NEW.TenTruyen,NEW.TrangBia,NEW.SoChuong,NEW.TenTG);


--tạo bảng truyện ma
    CREATE TABLE TruyenMa(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255));

CREATE TRIGGER truyen_ma AFTER INSERT ON TruyenMa
FOR EACH ROW
    INSERT INTO TruyenTH(id,TenTruyen,TrangBia,SoChuong,TenTG)
    VALUES (NEW.id,NEW.TenTruyen,NEW.TrangBia,NEW.SoChuong,NEW.TenTG);


--tạo bảng truyệ tiểu thuyết
    CREATE TABLE TruyenTT(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255));

CREATE TRIGGER truyen_tt AFTER INSERT ON TruyenTT
FOR EACH ROW
    INSERT INTO TruyenTH(id,TenTruyen,TrangBia,SoChuong,TenTG)
    VALUES (NEW.id,NEW.TenTruyen,NEW.TrangBia,NEW.SoChuong,NEW.TenTG);


--Tạo bảng truyện tổng hợp

    CREATE TABLE TruyenTH(
    id INT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255));


---Tao bang tác giả

CREATE TABLE TacGia(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTG VARCHAR(255),
    GioiTinh VARCHAR(255),
    NamSinh VARCHAR(255),
    QuocTich VARCHAR(255));


INSERT INTO TacGia(TenTG,GioiTinh,NamSinh,QuocTich)
    VALUES('nhuy','NAM','2000','VN');
