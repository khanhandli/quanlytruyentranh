<?php 
	require_once('header.php');
?>
<style>
	.h1 {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	h1{
		margin: 40px 0 10px 0;
		text-align: center;
	}
	img{
		height: 400px;
		width: 400px;
		border-radius: 50%;
		box-shadow: 0px 13px 1px 0px rgba(0, 0, 0, .2);
	}
</style>
	<div class="grid wide">
            <div class="row">
					<div class="c-3">
                         <?php 
                            require_once('nav.php');
                          ?>
                    </div>
                    <div class="c-9">
                        <div class="row">
                        	<div class="c-12 h1">
                        		<h1>Đây là hệ thống quản lý truyện tranh trường Đại Học Tài Nguyên và Môi Trường Hà Nội!!</h1>
                        		<img src="../assets/img/768px-HUNRE_Logo.png" alt="HUNRE.EDU.VN">
                        	</div>
                        </div>
                    </div>

   			 </div>
    </div>

   <script type="text/javascript" src="../main.js"></script>
</body>

</html>