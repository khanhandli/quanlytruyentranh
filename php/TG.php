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
                        <li class="header-nav__item">
                            <a href="../php/TC.php" class="header-nav__item--text">Truyện Cười</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="../php/TM.php" class="header-nav__item--text">Truyện Ma</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="../php/TTT.php" class="header-nav__item--text">Truyện Tiểu Thuyết</a>
                        </li>
                        <li class="header-nav__item active">
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
    $id1 = $tentg  = $gioitinh = $namsinh = $quoctich = "";

    if (!empty($_POST)) {
        if (isset($_POST['tentg'])) {
            $tentg = $_POST['tentg'];
        }


        if (isset($_POST['gioitinh'])) {
            $gioitinh = $_POST['gioitinh'];

        }

        if (isset($_POST['namsinh'])) {
            $namsinh = $_POST['namsinh'];

        }
        if (isset($_POST['quoctich'])) {
            $quoctich = $_POST['quoctich'];

        }
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
     
        if ($id1 != '') {
            //update 
            $sql = "UPDATE TacGia SET  TenTG= '$tentg', GioiTinh ='$gioitinh',  NamSinh= '$namsinh',  QuocTich= '$quoctich' WHERE id = " .$id1;
        }else if($tentg != ''){ 
            //insert
            $sql = "INSERT INTO TacGia(TenTG,GioiTinh,NamSinh,QuocTich)
                VALUES('$tentg', '$gioitinh', '$namsinh', '$quoctich')";

        }
    
        execute($sql);
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
                            <img src="../assets/img/icon.png" alt="">
                            <h1>Danh Sách Tác Giả</h1>
                            <div class="title__function">
                            <form action="" method="GET" class="form-timkiem">
                                <input type="checkbox" hidden id="search"> 
                                <input type="text" class="form-control1" name="timkiem" placeholder="Tìm kiếm tên lớp học">            
                                <button class="btn-timkiem">Tìm</button>
                            </form>
                            <label for="search" class="fas fa-search function--icon"></label>
                            <a href="../update/UpdateTG.php" class="function--link"><i class="fas fa-plus"></i></a>
                        </div>

                        </div>
                        <div class="row scroll">
                            <table class="table table-danger table-hover" >
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Tác Giả</th>
                                        <th>Giới Tính</th>
                                        <th>Năm Sinh</th>
                                        <th>Quốc Tịch</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                               </thead>
                                <tbody>
                                    
                            <?php 
                            //Lay danh muc tu db
                            $limit = 10;
                            $page = 1;
                            if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }

                            if ($page <= 0) {
                                $page = 1;
                            }
                            $firstIndex = ($page - 1) * $limit;
                                    if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
                                        $sql = "SELECT * FROM TacGia WHERE TenTG LIKE '%".$_GET['timkiem']."%'";    
                                    }
                                     else {
                                        $sql = 'SELECT * FROM TacGia WHERE 1 LIMIT '.$firstIndex.','.$limit;
                                    }
                                        $classList1 = executeResult($sql);
                                        $sql = 'SELECT count(id) as total FROM TacGia';
                                        $countResult = executeSingleResult($sql);
                                        $count = $countResult['total'];
                                        $number = ceil($count/$limit);
                                        foreach ($classList1 as $class1) {
                                            echo '<tr>
                                                <td>'.(++$firstIndex).'</td>
                                                <td>'.$class1['TenTG'].'</td>
                                                <td>'.$class1['GioiTinh'].'</td>
                                                <td>'.$class1['NamSinh'].'</td>
                                                <td>'.$class1['QuocTich'].'</td>
                                                <td><div class="btn1 btn-setting" onclick=\'window.open("../update/UpdateTG.php?id='.$class1['id'].'","_self")\'>Sửa</div></td>
                                                <td><div class="btn1 btn-delete" onclick="deleteTG('.$class1['id'].')">Xóa</div></td>
                                            </tr>
                                        ';

                                        }

                                    ?>
                                    </tbody>                            

                                    </table>

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
        function deleteTG(id) {
            var option = confirm('Bạn Có Muốn Xóa  Tác Giả Này Không?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id5': id
             }, function(data) {
                alert('Đã Xóa Thành Công');
                location.reload();
            })
                }
    </script>
</body>

</html>