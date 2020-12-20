<?php 
	//Xoa lop hoc
	require_once('../resoures/dbhelp.php');
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$sql = 'DELETE FROM TruyenNgan WHERE id = ' . $id;
		execute($sql);

		echo "Xoá Thành Công!!";
	}
	//Xoas phong hocj
	if (isset($_POST['id1'])) {
		$id1 = $_POST['id1'];
		$sql = 'DELETE FROM TruyenCuoi WHERE id = ' . $id1;
		execute($sql);

		echo "Xoá Thành Công!!";
	}
	//Xoas phong hocjGiao vien
	if (isset($_POST['id2'])) {
		$id2 = $_POST['id2'];
		$sql = 'DELETE FROM TruyenMa WHERE id = ' . $id2;
		execute($sql);

		echo "Xoá Thành Công!!";
	}
	//Xoas phong hocjGiao vien
	if (isset($_POST['id3'])) {
		$id3 = $_POST['id3'];
		$sql = 'DELETE FROM TruyenTTT WHERE id = ' . $id3;
		execute($sql);

		echo "Xoá Thành Công!!";
	}

	//Xoas phong hocjGiao vien
	if (isset($_POST['id4'])) {
		$id4 = $_POST['id4'];
		$sql = 'DELETE FROM TruyenTH WHERE id = ' . $id4;
		execute($sql);

		echo "Xoá Thành Công!!";
	}

	if (isset($_POST['id5'])) {
		$id5 = $_POST['id5'];
		$sql = 'DELETE FROM TacGia WHERE id = ' . $id5;
		execute($sql);

		echo "Xoá Thành Công!!";
	}
 ?>