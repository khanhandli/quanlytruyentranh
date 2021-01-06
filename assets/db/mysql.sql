

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    hoten VARCHAR(255),
    email VARCHAR (255),
    user VARCHAR(50),
    password VARCHAR(50)
    );


CREATE TABLE img(
    id INT,
    Anh VARCHAR(255)
);

CREATE TABLE GioHang(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    SoChuong VARCHAR(255),
    Anh VARCHAR(255),
    Gia INT     
);

CREATE TRIGGER gio_hang AFTER INSERT ON GioHang
FOR EACH ROW
    INSERT INTO img(id,Anh)
    VALUES (NEW.id,NEW.Anh);



    CREATE TABLE TruyenTH(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255),
    Gia INT);

    CREATE TRIGGER truyen_th AFTER INSERT ON TruyenTH
FOR EACH ROW
    INSERT INTO GioHang(id,TenTruyen,SoChuong,Anh,Gia)
    VALUES (NEW.id,NEW.TenTruyen,NEW.SoChuong,NEW.TrangBia,NEW.Gia);

CREATE TABLE TruyenNgan(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255),
    Gia INT);



	CREATE TABLE TruyenCuoi(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255),
    Gia INT);



    CREATE TABLE TruyenMa(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255),
    Gia INT);


    CREATE TABLE TruyenTT(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTruyen VARCHAR(255),
    TrangBia VARCHAR(255),
    SoChuong VARCHAR(255),
    TenTG VARCHAR(255),
    Gia INT);


CREATE TABLE TacGia(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TenTG VARCHAR(255),
    GioiTinh VARCHAR(255),
    NamSinh VARCHAR(255),
    QuocTich VARCHAR(255),
    Gia INT);

INSERT INTO TacGia(TenTG,GioiTinh,NamSinh,QuocTich)
    VALUES('Nhiều-Tác-Giả','NAM','2000','VN');

CREATE TABLE donhang(id INT PRIMARY KEY AUTO_INCREMENT
    , name VARCHAR(255), 
    phone VARCHAR(255), 
    address VARCHAR(255), 
    note VARCHAR(255), 
    total INT, 
    created_time DATETIME, 
    last_updated DATETIME);





