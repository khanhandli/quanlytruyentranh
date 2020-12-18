<?php 
	require_once('header.php');
	require_once('dbhelp.php');
    $id1 = $maphong = $tenphong = $soluong = $loaiphong = "";
    if (!empty($_POST)) {
    	if (isset($_POST['maphong'])) {
    		$maphong = $_POST['maphong'];
    	}

    	if (isset($_POST['tenphong'])) {
    		$tenphong = $_POST['tenphong'];

    	}

    	if (isset($_POST['soluong'])) {
    		$soluong = $_POST['soluong'];

    	}

    	if (isset($_POST['loaiphong'])) {
    		$loaiphong = $_POST['loaiphong'];

    	}
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
    	if ($id1 != '') {
    		//update 
    		$sql = "UPDATE PhongHoc SET  MaPhong = '$maphong', TenPhong= '$tenphong',  SoLuong= '$soluong', LoaiPhong ='$loaiphong' WHERE id = " .$id1;
    	}else if($tenphong != ''){ 
    		//insert
    		$sql = "INSERT INTO PhongHoc(MaPhong,TenPhong,SoLuong,LoaiPhong)
    			VALUES('$maphong', '$tenphong', '$soluong', '$loaiphong')";
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
                                <input type="text" class="form-control1" name="timkiem" placeholder="Tìm kiếm tên phòng học">            
                                <button class="btn-timkiem">Tìm</button>
                            </form>
            			    <label for="search" class="fas fa-search function--icon"></label>
            				<a href="../../assets/add/addPhong.php" class="function--link"><i class="fas fa-plus"></i></a>
            			</div>
            		</div>
            		<table class="table table-bordered">
            			<thead>
            				<tr>
            					<th>STT</th>
	            				<th>Mã phòng</th>
	            				<th>Tên phòng</th>
	            				<th>Số lượng chỗ ngồi</th>
	            				<th>Loại phòng</th>
	            				<th></th>
	            				<th></th>
            				</tr>
            			</thead>
            			<tbody>
            				          				<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = "SELECT * FROM PhongHoc WHERE TenPhong LIKE '%".$_GET['timkiem']."%'";    
} else {
    $sql = "SELECT * FROM PhongHoc";
}
    $classList1 = executeResult($sql);
    $index = 1;
    foreach ($classList1 as $class1) {
        echo '<tr>
                <td>'.$index++.'</td>
                <td>'.$class1['MaPhong'].'</td>
                <td>'.$class1['TenPhong'].'</td>
                <td>'.$class1['SoLuong'].'</td>
                <td>'.$class1['LoaiPhong'].'</td>
                <td><div class="btn btn-block" onclick=\'window.open("../../assets/add/addPhong.php?id='.$class1['id'].'","_self")\'>Sửa</div></td>
                <td><div class="btn btn-block" onclick="deletePhong('.$class1['id'].')">Xóa</div></td>
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
        function deletePhong(id) {
            var option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id1': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>
</body>

</html>