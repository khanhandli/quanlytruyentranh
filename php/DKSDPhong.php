<?php 
    require_once('../php/header.php');
    require_once('../php/dbhelp.php');
    $id ='';
    $ngay2 = $thoigianbatdau2 = $thoigianketthuc2 = $loaiphong2 = $tenmh2 = $tenlop2 = $tengv2 = $diadiem2 =$hocky2 = "";
       if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM SuDungPhong WHERE id = '. $id;
        $roomList = executeResult($sql);
        if ($roomList != null && count($roomList) > 0) {
            $room = $roomList[0];
            $ngay2 = $room['Ngay'];
            $thoigianbatdau2 = $room['ThoiGianBD'];
            $thoigianketthuc2 = $room['ThoiGianKT'];
            $loaiphong2 = $room['LoaiPhong'];
            $tenmh2 = $room['TenMH'];
            $tenlop2 = $room['TenLop'];
            $tengv2 = $room['TenGV'];
            $diadiem2 = $room['DiaDiem'];
            $hocky2 = $room['HocKy'];
        } else {

        }
    }
?>
    <div class="grid wide">
            <div class="row">
                <div class="c-3">
                </div>
                <div class="c-9 home">
                    <h1 class="title">Đăng kí lịch sử dụng phòng học </h1>
                    <form class="row" method="post" action="LichSuDungPhong.php">
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="ngay">Ngày(thứ)</label>
                                <!-- <input class="form-control2" type="text" name="ngay" id="ngay" value="<?=$ngay2?>"> -->
                                <input type="number" name="id" value="<?=$id?>" hidden>

                                <select class="form-control2" name="ngay" id="ngay">
                                    <option value="<?=$ngay2?>"><?=$ngay2?></option>
                                    <option value="Thứ 2">Thứ 2</option>
                                    <option value="Thứ 3">Thứ 3</option>
                                    <option value="Thứ 4">Thứ 4</option>
                                    <option value="Thứ 5">Thứ 5</option>
                                    <option value="Thứ 6">Thứ 6</option>
                                    <option value="Thứ 7">Thứ 7</option>
                                    <option value="Chủ Nhập">Chủ Nhật</option>
                                </select>
                            </div>
                            <div class="form__input">
                                <label for="thoigianbatdau">Thời gian bắt đầu</label>
                               <!--  <input class="form-control2" type="text" name="thoigianbatdau" id="thoigianbatdau" value="<?=$thoigianbatdau2?>"> -->
                               <input type="time" class="input-css" id="thoigianbatdau" name="thoigianbatdau"
                                               value="<?=$thoigianbatdau2?>">
                            </div>
                            <div class="form__input">
                                <label for="thoigianketthuc">Thời gian kết thúc</label>
                                <!-- <input class="form-control2" type="text" name="thoigianketthuc" id="thoigianketthuc" value="<?=$thoigianketthuc2?>"> -->
                                <input type="time" class="input-css" id="thoigianketthuc" name="thoigianketthuc"
                                               value="<?=$thoigianketthuc2?>">
                            </div>
                            <div class="form__input">
                                <label for="loaiphong">Loại phòng</label>
                                <!-- <input class="form-control2" type="text" name="loaiphong" id="loaiphong" value="<?=$loaiphong2?>"> -->
                                <select name="loaiphong" id="loaiphong" class="form-control2">
                                                <option value="<?=$loaiphong2?>"><?=$loaiphong2?></option>
                                                <?php 
                                                        $sql = 'SELECT TenPhong FROM PhongHoc';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['TenPhong'].'>
                                                                    '.$epl['TenPhong'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                            </div>
                            <div class="form__input">
                                <label for="tenmh">Tên môn học</label>
                                <!-- <input class="form-control2" type="text" name="tenmh" id="tenmh" value="<?=$tenmh2?>"> -->
                                <select name="tenmh" id="tenmh" class="form-control2">
                                                <option value="<?=$tenmh2?>"><?=$tenmh2?></option>
                                                <?php 
                                                        $sql = 'SELECT BoMonQL FROM GiaoVien';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['BoMonQL'].'>
                                                                    '.$epl['BoMonQL'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                            </div>
                            
                        </div>
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="tenlop">Tên lớp</label>
                                <!-- <input class="form-control2" type="text" name="tenlop" id="tenlop" value="<?=$tenlop2?>"> -->
                                <select name="tenlop" id="tenlop" class="form-control2">
                                                <option value="<?=$tenlop2?>"><?=$tenlop2?></option>
                                                <?php 
                                                        $sql = 'SELECT TenLop FROM LopHoc';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['TenLop'].'>
                                                                    '.$epl['TenLop'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                            </div>
                            <div class="form__input">
                                <label for="tengv">Tên giáo viên</label>
                                <!-- <input class="form-control2" type="text" name="tengv" id="tengv" value="<?=$tengv2?>"> -->
                                <select name="tengv" id="tengv" class="form-control2">
                                                <option value="<?=$tengv2?>"><?=$tengv2?></option>
                                                <?php 
                                                        $sql = 'SELECT TenGV FROM GiaoVien';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['TenGV'].'>
                                                                    '.$epl['TenGV'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                            </select>
                            </div>
                            <div class="form__input">
                                <label for="diadiem">Địa điểm</label>
                                <!-- <input class="form-control2" type="text" name="diadiem" id="diadiem" value="<?=$diadiem2?>"> -->
                                <select name="diadiem" id="diadiem" class="form-control2">
                                                <option value="<?=$diadiem2?>"><?=$diadiem2?></option>
                                                <?php 
                                                        $sql = 'SELECT MaPhong  FROM PhongHoc';
                                                    $employeeList = executeResult($sql);
                                                    foreach ($employeeList as $epl) {
                                                            echo '<option value= '.$epl['MaPhong'].'>
                                                                    '.$epl['MaPhong'].'
                                                                    </option>
                                                                    '  ;                        
                                                    }
                                                ?>
                                 </select>
                            </div>
                            <div class="form__input">
                                <label for="hocky">Học kỳ</label>
                                <!-- <input class="form-control2" type="text" name="hocky" id="hocky" value="<?=$hocky2?>"> -->
                                <select name="hocky" id="hocky" class="form-control2">
                                                <option value="<?=$hocky2?>"><?=$hocky2?></option>
                                                <option value="Học Kỳ I">Học Kỳ I</option>
                                                <option value="Học Kỳ II">Học Kỳ II</option>
                                                
                                            </select>
                            </div>
                        </div>
                        <button class="btn btn-primary">Lưu</button>      
                        <div class="a"><a href="LichSuDungPhong.php" class="btn btn-primary">Xem lịch đã đăng kí</a></div>      
                        
                    </form>
            </div>
    </div>
<?php
    require_once('../php/nav.php');
 ?>

</body>

</html>