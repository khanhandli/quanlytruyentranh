<?php 
	require_once('header.php');
	require_once('dbhelp.php');
    $id1 = $tenlop = $gvcn = $ngaybd = $ngaykt = $lichhoc = $dotuoitb = $sobuoi = $siso = "";
    if (!empty($_POST)) {
    	if (isset($_POST['tenlop'])) {
    		$tenlop = $_POST['tenlop'];
    	}

    	if (isset($_POST['gvcn'])) {
    		$gvcn = $_POST['gvcn'];

    	}

    	if (isset($_POST['ngaybd'])) {
    		$ngaybd = $_POST['ngaybd'];

    	}

    	if (isset($_POST['ngaykt'])) {
    		$ngaykt = $_POST['ngaykt'];

    	}
    	if (isset($_POST['lichhoc'])) {
    		$lichhoc = $_POST['lichhoc'];

    	}
    	if (isset($_POST['dotuoitb'])) {
    		$dotuoitb = $_POST['dotuoitb'];

    	}

    	if (isset($_POST['sobuoi'])) {
    		$sobuoi = $_POST['sobuoi'];

    	}
    	if (isset($_POST['siso'])) {
    		$siso = $_POST['siso'];

    	}
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
    	if ($id1 != '') {
    		//update 
    		$sql = "UPDATE LopHoc SET  TenLop= '$tenlop', GVCN ='$gvcn',  NgayBD= '$ngaybd', NgayKT ='$ngaykt', LichHoc='$lichhoc', DoTuoiTB='$dotuoitb',SoBuoi = '$sobuoi', SiSo = '$siso' WHERE id = " .$id1;
    	}else if($tenlop != ''){ 
    		//insert
    		$sql = "INSERT INTO LopHoc(TenLop,GVCN,NgayBD,NgayKT,LichHoc,DoTuoiTB,SoBuoi,SiSo)
    			VALUES('$tenlop', '$gvcn', '$ngaybd', '$ngaykt', '$lichhoc', '$dotuoitb','$sobuoi', '$siso')";

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
            			<h1 class="title--text">Danh sách các lớp</h1>
            			<div class="title__function">
            				<form action="" method="GET" class="form-timkiem">
                                <input type="checkbox" hidden id="search"> 
                                <input type="text" class="form-control1" name="timkiem" placeholder="Tìm kiếm tên lớp học">            
                                <button class="btn-timkiem">Tìm</button>
                            </form>
            			    <label for="search" class="fas fa-search function--icon"></label>
            				<a href="../../assets/add/addLop.php" class="function--link"><i class="fas fa-plus"></i></a>
            			</div>
            		</div>
            		<table class="table table-bordered">
            			<thead>
            				<tr>
            					<th>STT</th>
	            				<th>Tên lớp</th>
	            				<th>Giáo viên  chủ nghiệm</th>
	            				<th>Ngày bắt đầu</th>
	            				<th>Ngày kết thúc</th>
	            				<th>Lịch học</th>
	            				<th>Độ tuổi trung bình</th>
	            				<th>Số buổi</th>
	            				<th>Sĩ số</th>
	            				<th></th>
	            				<th></th>
            				</tr>
            			</thead>
            			<tbody>
            				<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = "SELECT * FROM LopHoc WHERE TenLop LIKE '%".$_GET['timkiem']."%'";    
} else {
    $sql = "SELECT * FROM LopHoc";
}
    $classList1 = executeResult($sql);
    $index = 1;
    foreach ($classList1 as $class1) {
        echo '<tr>
                <td>'.$index++.'</td>
                <td>'.$class1['TenLop'].'</td>
                <td>'.$class1['GVCN'].'</td>
                <td>'.$class1['NgayBD'].'</td>
                <td>'.$class1['NgayKT'].'</td>
                <td>'.$class1['LichHoc'].'</td>
                <td>'.$class1['DoTuoiTB'].'</td>
                <td>'.$class1['SoBuoi'].'</td>
                <td>'.$class1['SiSo'].'</td>
                <td><div class="btn btn-block" onclick=\'window.open("../../assets/add/addLop.php?id='.$class1['id'].'","_self")\'>Sửa</div></td>
                <td><div class="btn btn-block" onclick="deleteClass('.$class1['id'].')">Xóa</div></td>
            </tr>
        ';
    }

?>
            			</tbody>
            		</table>	
            	</div>
   			</div>
    </div>
<?php
	require_once('nav.php');
 ?>
   <script type="text/javascript">
        function deleteClass(id) {
            var option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>
</body>

</html>