<?php 
    require_once('../resoures/header.php');
    require_once('../resoures/dbhelp.php');

    $id ='';
    $tentg2  = $gioitinh2 =$namsinh2 = $quoctich2= "";
       if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM TacGia WHERE id = '. $id;
        $roomList = executeResult($sql);
        if ($roomList != null && count($roomList) > 0) {
            $room = $roomList[0];
            $tentg2 = $room['TenTG'];
            $gioitinh2 = $room['GioiTinh'];
            $namsinh2 = $room['NamSinh'];
            $quoctich2 = $room['QuocTich'];
            
        } else {

        }
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
                    <div class="c-9">
                        <div class="container-title">
                            <i class="fal fa-book-user" style="color: #E33539;font-size: 4rem;margin-right: 7px;"></i>
                            <h1 style="color: #E33539;">Cập Nhập Tác Giả</h1>
                        </div>
                        <form style="background-color: #EB7153" class="form" action="../php/TG.php" method="post" enctype="multipart/form-data">
                            <div class="row form-flex">
                                <div class="c-6">
                                        <input type="number" name="id" value="<?=$id?>" hidden>
                                    <div class="form__input">
                                        <label for="tentg">Tên Tác Giả:</label>
                                        <input class="input" type="text" id="tentg" name="tentg" value="<?=$tentg2?>">
                                    </div>
                                    <div class="form__input">
                                        <label for="gioitinh">Giới tính:</label>
                                        <select class="input" name="gioitinh" id="gioitinh">
                                            <option value="<?=$gioitinh2?>"><?=$gioitinh2?></option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="c-6">
                                    <div class="form__input">
                                        <label for="namsinh">Năm Sinh:</label>
                                        <input class="input" type="text" id="namsinh" name="namsinh" value="<?=$namsinh2?>">
                                    </div>
                                    <div class="form__input">
                                        <label for="quoctich">Quốc Tịch:</label>
                                        <input class="input" type="text" id="quoctich" name="quoctich" value="<?=$quoctich2?>">
                                    </div>
                                </div>
                            </div>
                            <button class="save-btn">Lưu</button>
                        </form>
                    </div>
        		</div>
            </div>
    	</div>
   
    </div>
    <script type="text/javascript" src="../main.js"></script>
</body>

</html>