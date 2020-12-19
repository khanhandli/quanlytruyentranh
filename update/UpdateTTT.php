<?php 
    $active = 'active';
    require_once('../resoures/header.php');
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
                            <i class="fa fa-bolt" style="color: #9966FF;font-size: 4rem;margin-right: 7px;"></i>
                            <h1 style="color: #9966FF;">Cập Nhập Truyện Tiểu Thuyết</h1>
                        </div>
                        <form class="form" action="../php/TTT.php" method="post" enctype="multipart/form-data">
                            <div class="row form-flex">
                                <div class="c-6">
                                    <div class="form__input">
                                        <label for="tentruyen">Tên Truyện:</label>
                                        <input class="input" type="text" id="tentruyen" name="tentruyen" value="<?=$tentruyen2?>">
                                    </div>
                                    <div class="form__input">
                                        <label id="label" for="anh">Trang bìa:</label>
                                        <input type="hidden" name="size" value="1000000"> 
                                        <input class="" type="file" id="anh" name="anh">
                                        <label for="anh">Tải Ảnh Lên</label>
                                        
                                    </div>
                                </div>
                                <div class="c-6">
                                    <div class="form__input">
                                        <label for="sochuong">Số Chương:</label>
                                        <input class="input" type="text" id="sochuong" name="sochuong" value="<?=$sochuong2?>">
                                    </div>
                                    <div class="form__input">
                                        <label for="tentacgia">Tên Tác Giả:</label>
                                        <input class="input" type="text" id="tentacgia" name="tentacgia" value="<?=$tentacgia2?>">
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