<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Quản Lý Truyện Tranh</title>
    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet"
        href="../assets/fonts/fontawesome-pro-5.13.0/fontawesome-pro-5.13.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese"
        rel="stylesheet">
        <script type="text/javascript" src="../assets/js/jquery.js"></script>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">
                    <div class="header__flex">
                        <div class="header__img">
                            <a href="#">
                                <i class="fas fa-book-reader"></i>
                                <span class="header--title">TRUYỆN TRANH - TNMT</span>                  
                            </a>
                        </div>
                        <div class="header__info">
                            <i class="far fa-user-circle"></i>
                            <span>Huy Đạt DH8C6</span>
                            <ul>
                                <li class="header__info--text">Hồ Sơ</li>
                                <li class="header__info--text"><a href="../index.php">Thoát</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="header-nav">
                        <li class="header-nav__item ">
                            <a href="../php/TN.php" class="header-nav__item--text">Truyện Ngắn</a>
                        </li>
                        <li class="header-nav__item active">
                            <a href="../php/TC.php" class="header-nav__item--text">Truyện Cười</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="../php/TM.php" class="header-nav__item--text">Truyện Ma</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="../php/TTT.php" class="header-nav__item--text">Truyện Tiểu Thuyết</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="../php/TG.php" class="header-nav__item--text">Tác Giả</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="../php/TH.php" class="header-nav__item--text">Tổng hợp</a>
                        </li>
                    </ul>
                </div>
        </header>
        <?php 
    require_once('../resoures/dbhelp.php');
    $upload_directory = __DIR__ . DIRECTORY_SEPARATOR . "photo/";
    $id1 = $tentruyen  = $sochuong = $tentacgia =$gia = "";
    if (!empty($_POST)) {
        if (isset($_POST['tentruyen'])) {
            $tentruyen = $_POST['tentruyen'];
        }


        if (isset($_POST['sochuong'])) {
            $sochuong = $_POST['sochuong'];

        }

        if (isset($_POST['tentacgia'])) {
            $tentacgia = $_POST['tentacgia'];

        }
        if (isset($_POST['gia'])) {
            $gia = $_POST['gia'];

        }
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
        $anh = $_FILES['anh']['name'];

                if($anh != null)
                {

                $path = "photo/";
                $tmp_name = $_FILES['anh']['tmp_name'];
                $anh = $_FILES['anh']['name'];

                move_uploaded_file($tmp_name,$path.$anh);
        if ($id1 != '') {
            //update 
            $sql = "UPDATE TruyenCuoi SET  TenTruyen= '$tentruyen', TrangBia ='$anh',  SoChuong= '$sochuong',  TenTG= '$tentacgia', Gia = '$gia' WHERE id = " .$id1;
            $sql1 = "UPDATE TruyenTH SET  TenTruyen= '$tentruyen', TrangBia ='$anh',  SoChuong= '$sochuong',  TenTG= '$tentacgia', Gia = '$gia' WHERE id = " .$id1;
            $sql2 = "UPDATE GioHang SET  TenTruyen = '$tentruyen',SoChuong = '$sochuong',Anh ='$anh', Gia = '$gia' WHERE id = " .$id1;

        }else if($tentruyen != ''){ 
            //insert
            $sql = "INSERT INTO TruyenCuoi(TenTruyen,TrangBia,SoChuong,TenTG,Gia)
                VALUES('$tentruyen', '$anh', '$sochuong', '$tentacgia','$gia')";
            $sql1 = "INSERT INTO TruyenTH(TenTruyen,TrangBia,SoChuong,TenTG,Gia)
                VALUES('$tentruyen', '$anh', '$sochuong', '$tentacgia','$gia')";
                $sql2 = "INSERT INTO GioHang(TenTruyen,SoChuong,Anh,Gia)
                VALUES('$tentruyen','$sochuong',$anh','$gia')";

        }
    }
         execute($sql);
        execute($sql1);
        execute($sql2);
}

    
?>
        <div class="body">

            <div class="grid wide">
                <div class="row">
                    <div class="c-3">
                         <?php 
                            require_once('../resoures/nav.php');
                          ?>
                    </div>
                    <div class="c-9" style="position: relative;">
                        <div class="container-title">
                            <i class="fas fa-sun icon-FF9999"></i>
                            <h1 class="icon-FF9999">Danh Sách Truyện Cười</h1>
                            <div class="title__function">
                            <form action="" method="GET" class="form-timkiem">
                                <input type="checkbox" hidden id="search"> 
                                <input type="text" class="form-control1" name="timkiem" placeholder="Tìm kiếm tên lớp học">            
                                <button class="btn-timkiem">Tìm</button>
                            </form>
                            <label for="search" class="fas fa-search function--icon"></label>
                            <a href="../update/UpdateTC.php" class="function--link"><i class="fas fa-plus"></i></a>
                        </div>

                        </div>
                        <div class="row scroll">
                            <!-- <div class="col c-3">
                                <div class="picture">
                                    <h2>Tấm Cám</h2>
                                    <div class="index">
                                        <span>1</span>
                                    </div>
                                    <div class="picture__img">
                                        <img src="../assets/img/anh1.jpeg" alt="">
                                    </div>
                                    <img src="assets/img/label.png" alt="">
                                    <div class="picture--text">
                                        <span class="picture__text">Full &nbsp13 Chuong</span>
                                    </div>
                                </div>
                                <span>Ten tac gia</span>
                                <div class="picture__btn">
                                    <button  class= "btn1 btn-delete">Xóa</button>
                                    <button class= "btn1 btn-setting">Sửa</button>
                                </div>
                            </div> -->
                            <?php 

                            //Lay danh muc tu db
                            $limit = 8;
                            $page = 1;
                            if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }

                            if ($page <= 0) {
                                $page = 1;
                            }
                            $firstIndex = ($page - 1) * $limit;
                                    if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
                                        $sql = "SELECT * FROM TruyenCuoi WHERE TenTruyen LIKE '%".$_GET['timkiem']."%'";    
                                    }
                                     else {
                                        $sql = 'SELECT * FROM TruyenCuoi WHERE 1 LIMIT '.$firstIndex.','.$limit;
                                    }
                                        $classList1 = executeResult($sql);
                                        $sql = 'SELECT count(id) as total FROM TruyenCuoi';
                                        $countResult = executeSingleResult($sql);
                                        $count = $countResult['total'];
                                        $number = ceil($count/$limit);
                                        foreach ($classList1 as $class1) {
                                            echo '<div class="col c-3">';
                                            echo '<div class="picture">';
                                            echo '<h2>'.$class1["TenTruyen"].'</h2>';
                                            echo '<div class="index">';
                                            echo '<span>'.(++$firstIndex).'</span>';
                                            echo '</div>';
                                            echo '<div class="picture__img">';
                                            echo '<img class = "photo" src="photo/'.$class1["TrangBia"].'" >';
                                            echo '</div>';
                                            echo '<img src="../assets/img/label.png" alt="">';
                                            echo '<div class="picture--text">';
                                            echo '<span class="picture__text">Full '.'<span>'.$class1['SoChuong'].'</span>'.''. '  Chương</span>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<span>Tác giả: '.$class1['TenTG'].'</span>';
                                            echo '<span>Giá: ';
                                            echo    number_format($class1['Gia'], 0, ",", ".") . ' VNĐ';
                                            echo'</span>';
                                            echo  '<div class="picture__btn">';
                                            echo         '<button class= "btn1 btn-setting" onclick="deleteTC('.$class1['id'].')">Xóa</button>';
                                            echo        '<button  class= "btn1 btn-delete" onclick=\'window.open("../update/UpdateTC.php?id='.$class1['id'].'","_self")\'>Sửa</button>';
                                            echo     '</div>';
                                            echo '</div>';

                                        }

                                    ?>
                           

                        </div>
                        <nav aria-label="Page navigation example" class ="pagination--absolute">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <?php 
                                    for ($i=0; $i < $number; $i++) { 
                                        if ($page == ($i +1)) {
                                        echo '<li class="page-item active1"><a class="page-link" href="#">'.($i+1).'</a></li>';
                                            
                                        }else {

                                        echo '<li class="page-item"><a class="page-link" href="?page= '.($i+1).'">'.($i+1).'</a></li>';
                                        }
                                    }
                                 ?>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
    <script type="text/javascript" src="../main.js"></script>

    <script type="text/javascript">
        function deleteTC(id) {
            var option = confirm('Bạn Có Muốn Xóa Không?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id1': id
             }, function(data) {
                alert('Đã Xóa Thành Công');
                location.reload();
            })
                }
    </script>
</body>

</html>