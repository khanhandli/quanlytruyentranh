<?php 
	//Xoa lop hoc
	require_once('dbhelp.php');
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$sql = 'DELETE FROM LopHoc WHERE id = ' . $id;
		execute($sql);

		echo "Xoa thanh cong";
	}
	//Xoas phong hocj
	if (isset($_POST['id1'])) {
		$id1 = $_POST['id1'];
		$sql = 'DELETE FROM PhongHoc WHERE id = ' . $id1;
		execute($sql);

		echo "Xoa thanh cong";
	}
	//Xoas phong hocjGiao vien
	if (isset($_POST['id2'])) {
		$id2 = $_POST['id2'];
		$sql = 'DELETE FROM GiaoVien WHERE id = ' . $id2;
		execute($sql);

		echo "Xoa thanh cong";
	}
	//Xoas phong hocjGiao vien
	if (isset($_POST['id3'])) {
		$id3 = $_POST['id3'];
		$sql = 'DELETE FROM SuDungPhong WHERE id = ' . $id3;
		execute($sql);

		echo "Xoa thanh cong";
	}
 ?>