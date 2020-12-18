<?php 
	require_once('header.php');
	require_once('dbhelp.php');
    $id1 = $magv = $tengv = $khoaql = $bomonql =  "";
    if (!empty($_POST)) {
    	if (isset($_POST['magv'])) {
    		$magv = $_POST['magv'];
    	}

    	if (isset($_POST['tengv'])) {
    		$tengv = $_POST['tengv'];

    	}
        if (isset($_POST['id'])) {
            $id1 = $_POST['id'];
        }
    	if (isset($_POST['khoaql'])) {
    		$khoaql = $_POST['khoaql'];

    	}

    	if (isset($_POST['bomonql'])) {
    		$bomonql = $_POST['bomonql'];

    	}

    	if ($id1 != '') {
    		//update 
    		$sql = "UPDATE GiaoVien SET  MaGV = '$magv', TenGV= '$tengv',  KhoaQL= '$khoaql', BoMonQL ='$bomonql' WHERE id = " .$id1;
    	}else{ 
    		//insert
    		$sql = "INSERT INTO GiaoVien(MaGV,TenGV,KhoaQL,BoMonQL)
    			VALUES('$magv', '$tengv', '$khoaql', '$bomonql')";
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
            			<h1 class="title--text">Danh sách giáo viên</h1>
            			<div class="title__function">
            				<form action="" method="GET" class="form-timkiem">
                                <input type="checkbox" hidden id="search"> 
                                <input type="text" class="form-control1" name="timkiem" placeholder="Tìm kiếm tên giáo viên">            
                                <button class="btn-timkiem">Tìm</button>
                            </form>
            			    <label for="search" class="fas fa-search function--icon"></label>
            				<a href="../../assets/add/addGV.php" class="function--link"><i class="fas fa-plus"></i></a>
            			</div>
            		</div>
            		<table class="table table-bordered">
            			<thead>
            				<tr>
            					<th>STT</th>
            					<th>Mã GV</th>
	            				<th>Tên GV</th>
	            				<th>Khoa quản lý</th>
	            				<th>Bộ môn quản lý</th>
	            				<th></th>
	            				<th></th>
            				</tr>
            			</thead>
            			<tbody>
<?php 
if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
    $sql = "SELECT * FROM GiaoVien WHERE TenGV LIKE '%".$_GET['timkiem']."%'";    
} else {
    $sql = "SELECT * FROM GiaoVien";
}
    $teacherList1 = executeResult($sql);
    $index = 1;
    foreach ($teacherList1 as $teacher1) {
        echo '<tr>
                <td>'.$index++.'</td>
                <td>'.$teacher1['MaGV'].'</td>
                <td>'.$teacher1['TenGV'].'</td>
                <td>'.$teacher1['KhoaQL'].'</td>
                <td>'.$teacher1['BoMonQL'].'</td>
                <td><div class="btn btn-block" onclick=\'window.open("../../assets/add/addGV.php?id='.$teacher1['id'].'","_self")\'>Sửa</div></td>
                <td><div class="btn btn-block" onclick="deleteGV('.$teacher1['id'].')">Xóa</div></td>
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
        function deleteGV(id) {
            var option = confirm('Ban co muon xoa khong?')
            if(!option) {
                return;
            }
            $.post('delete.php', {
                        'id2': id
             }, function(data) {
                alert('da xoa thanh cong');
                location.reload();
            })
                }
    </script>
</body>

</html>