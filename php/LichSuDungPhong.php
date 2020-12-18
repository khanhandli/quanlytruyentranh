<?php 
    require_once('header.php');
    require_once('dbhelp.php');
    $id1 = $ngay = $thoigianbatdau = $thoigianketthuc = $loaiphong = $tenmh = $tenlop = $tengv = $diadiem = $hocky = '';
    if (!empty($_POST)) {
        if (isset($_POST['ngay'])) {
            $ngay = $_POST['ngay'];
        }

        if (isset($_POST['thoigianbatdau'])) {
            $thoigianbatdau = $_POST['thoigianbatdau'];

        }

        if (isset($_POST['thoigianketthuc'])) {
            $thoigianketthuc = $_POST['thoigianketthuc'];

        }

        if (isset($_POST['loaiphong'])) {
            $loaiphong = $_POST['loaiphong'];

        }
        if (isset($_POST['tenmh'])) {
            $tenmh = $_POST['tenmh'];

        }
        if (isset($_POST['tenlop'])) {
            $tenlop = $_POST['tenlop'];

        }

        if (isset($_POST['tengv'])) {
            $tengv = $_POST['tengv'];

        }
        if (isset($_POST['diadiem'])) {
            $diadiem = $_POST['diadiem'];

        }
        if (isset($_POST['hocky'])) {
            $hocky = $_POST['hocky'];

        }
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
        if ($id1 != '') {
            //update 
            $sql = "UPDATE SuDungPhong SET  Ngay = '$ngay', ThoiGianBD ='$thoigianbatdau',  ThoiGianKT= '$thoigianketthuc', LoaiPhong ='$loaiphong', TenMH='$tenmh', TenLop='$tenlop',TenGV = '$tengv', DiaDiem = '$diadiem', HocKy = '$hocky' WHERE id = " .$id1;
        }else if($ngay != ''){ 
            //insert
            $sql = "INSERT INTO SuDungPhong(Ngay,ThoiGianBD,ThoiGianKT,LoaiPhong,TenMH,TenLop,TenGV,DiaDiem,HocKy)
                VALUES('$ngay', '$thoigianbatdau', '$thoigianketthuc', '$loaiphong', '$tenmh', '$tenlop','$tengv', '$diadiem','$hocky')";
        }
        execute($sql);
}

 
?>
	<div class="grid wide">
            <div class="row">
				<div class="c-3">
                </div>
            	<div class="c-9 home">
            		<div class="title">
            			<h1 class="title--text">Danh sách các phòng học</h1>
            			<div class="title__function">
            				<form action="" method="GET" class="form-timkiem">
                                <input type="checkbox" hidden id="search"> 
                                <!-- <input type="text" class="form-control1" name="timkiem" placeholder="Tìm kiếm tên ngày đăng kí phòng học"> -->  
                                <select class="form-control1" name="timkiem" id="timkiem" placeholder="Tìm kiếm tên ngày đăng kí phòng học">
                                    <option value="Thứ 2">Thứ 2</option>
                                    <option value="Thứ 3">Thứ 3</option>
                                    <option value="Thứ 4">Thứ 4</option>
                                    <option value="Thứ 5">Thứ 5</option>
                                    <option value="Thứ 6">Thứ 6</option>
                                    <option value="Thứ 7">Thứ 7</option>
                                    <option value="Chủ Nhập">Chủ Nhật</option>
                                </select>          
                                <button class="btn-timkiem">Tìm</button>
                            </form>
            			    <label for="search" class="fas fa-search function--icon"></label>
            			</div>
            		</div>
            		<table class="table table-bordered">
            			<thead>
            				<tr>
                                    <th>STT</th>
                                    <th>Ngày(thứ)</th>
                                    <th>Thời gian bắt đầu</th>
                                    <th>Thời gian kết thúc</th>
                                    <th>Loại phòng</th>
                                    <th>Tên môn học</th>
                                    <th>Tên lớp</th>
                                    <th>Tên giáo viên</th>
                                    <th>Địa điểm</th>
                                    <th>Học kỳ</th>
                                    <th></th>
                                    <th></th>            
                            </tr>
            			</thead>
                        <tbody>
                                                                                                        <?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = "SELECT * FROM SuDungPhong WHERE Ngay LIKE '%".$_GET['timkiem']."%'";    
} else {
    $sql = "SELECT * FROM SuDungPhong";
}
    $roomList1 = executeResult($sql);
    $index = 1;
    foreach ($roomList1 as $room1) {
        echo '<tr>
                <td>'.$index++.'</td>
                <td>'.$room1['Ngay'].'</td>
                <td>'.$room1['ThoiGianBD'].'</td>
                <td>'.$room1['ThoiGianKT'].'</td>
                <td>'.$room1['LoaiPhong'].'</td>
                <td>'.$room1['TenMH'].'</td>
                <td>'.$room1['TenLop'].'</td>
                <td>'.$room1['TenGV'].'</td>
                <td>'.$room1['DiaDiem'].'</td>
                <td>'.$room1['HocKy'].'</td>
                <td><div class="btn btn-block" onclick=\'window.open("../../assets/php/DKSDPhong.php?id='.$room1['id'].'","_self")\'>Sửa</div></td>
                <td><div class="btn btn-block" onclick="deleteSD('.$room1['id'].')">Xóa</div></td>
            </tr>
        ';
    }

?>
                        </tbody>
                    </table>    
                </div>
            </div>
    </div>
                        </tbody>
            		</table>	
            	</div>
   			</div>
    </div>
<?php
	require_once('nav.php');
 ?>
<script type="text/javascript">
        function deleteSD(id) {
            var option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id3': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>
</body>

</html>