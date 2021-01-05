<?php 
  if (isset($_POST['DK'])) {
          $hoten = "";
          $email =  "";
          $user = "";
          $password1 = "";
          $password2 = "";
          if ($_POST['hoten'] == NULL) {
              echo "Ho ten khong duoc de trong!";
              echo "</br>";
          } else {
            $hoten = $_POST['hoten'];
              echo "</br>";}
          if ($_POST['email'] == NULL) {
              echo "Email khong duoc de trong!";
              echo "</br>";
          } else {
            $email = $_POST['email'];
              echo "</br>";}
              if ($_POST['user'] == NULL) {
              echo "USER khong duoc de trong!";
              echo "</br>";
          } else {
            $user = $_POST['user'];
              echo "</br>";}

          if ($_POST['password1'] == NULL) {
              echo "Password khong duoc de trong!";
              echo "</br>";
          } else {
              $password1 = $_POST['password1'];
              echo "</br>";
          }
          if ($_POST['password2'] == NULL) {
              echo "Nhap lai Password khong duoc de trong!";
              echo "</br>";
          } else {
              $password2 = $_POST['password2'];
              echo "</br>";
          }if($password1 !== $password2) {
            echo "Password nhap lai khong trung khop!";
          } else {
        $username = "root"; // Khai báo username
        $password = "";      // Khai báo password
        $server   = "localhost";   // Khai báo server
        $dbname   = "QLTT";      // Khai báo database
        // Kết nối database
        $connect = new mysqli($server, $username, $password, $dbname);
        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
        if ($connect->connect_error) {
        die("Không kết nối :" . $conn->connect_error);
        exit();}

        //them du lieu
        $sql = "INSERT INTO users(hoten,email,user, password)
        VALUES ('$hoten','$email','$user','$password1');";
        if ($connect->query($sql) === TRUE) {
          $message = "Đăng ký thành công chúc bạn một ngày tốt lành!";
                echo "<script type='text/javascript'>('$message');</script>";

        } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
        }
        //Đóng database
        $connect->close();
      }}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Quản Lý Truyện Tranh</title>
    <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/csslogin/form.css">
    <link rel="stylesheet"
        href="assets/fonts/fontawesome-pro-5.13.0/fontawesome-pro-5.13.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese"
        rel="stylesheet">
        <script type="text/javascript" src="assets/js/jquery.js"></script>
</head>
<body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
          <h1>Đăng Ký Thành Viên</h1>
        </div>

        <!-- Resgiter Form -->
        <form method="post" action="">
          <input type="text" id="login" class="fadeIn second" name="hoten" placeholder="Họ Tên">
          <input type="text" id="login" class="fadeIn second" name="email" placeholder="Địa Chỉ">
          <input type="text" id="login" class="fadeIn second" name="user" placeholder="Tên Đăng Nhập">
          <input type="password" id="password" class="fadeIn third" name="password1" placeholder="Mật Khẩu">
          <input type="password" id="password" class="fadeIn third" name="password2" placeholder="Nhập Lại Mật Khẩu">
          <input type="submit" name="DK" class="fadeIn fourth" value="Đăng Ký">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="index.php">Đăng Nhập</a>
        </div>

      </div>
    </div>
</body>
</html>s