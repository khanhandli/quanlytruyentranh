<?php 
    require_once('header.php');
    require_once('dbhelp.php');

 ?>
        <div class="grid wide">
            <div class="row">
                <div class="c-3">
                </div>
            <div class="c-9 home">
                <h2 class="home--title">Home/Admin</h2>
                <div class="row">
                    <div class="col c-3">
                        <div class="detail__container Yellow" onclick="Go1()">
                            <?php 
                                $sql1 = "SELECT * FROM LopHoc";
                                $list1 = executeResult($sql1);
                                $i1 = count($list1);

                                echo "<span>".$i1." Lớp học</span>";
                             ?>
                            <!-- <span>5 Lớp học</span> -->
                            <div class="detail">
                                <div class="detail--text">Xem chi tiết</div>
                                <i class="fas fa-chevron-right detail--icon"></i>
                            </div>
                            <i class="fas fa-clipboard-list home--icon"></i>
                        </div>
                    </div>
                    <div class="col c-3">
                        <div class="detail__container Magenta" onclick="Go2()">
                            <?php 
                                $sql2 = "SELECT * FROM PhongHoc";
                                $list2 = executeResult($sql2);
                                $i2 = count($list2);
                                echo "<span>".$i2." Phòng học</span>";
                             ?>
                            <!-- <span>5 Phòng học</span> -->
                            <div class="detail">
                                <div class="detail--text">Xem chi tiết</div>
                                <i class="fas fa-chevron-right detail--icon"></i>
                            </div>
                            <i class="fas fa-clipboard-list home--icon"></i>
                        </div>
                    </div>
                    <div class="col c-3">
                        <div class="detail__container Blue" onclick="Go3()">
                            <?php 
                                $sql3 = "SELECT * FROM GiaoVien";
                                $list3 = executeResult($sql3);
                                $i3 = count($list3);

                                echo "<span>".$i3." Giáo viên</span>";
                             ?>
                            <!-- <span>5 Giáo viên</span> -->
                            <div class="detail">
                                <div class="detail--text">Xem chi tiết</div>
                                <i class="fas fa-chevron-right detail--icon"></i>
                            </div>
                             <i class="fas fa-users home--icon"></i>

                        </div>
                    </div>
                    <div class="col c-3">
                        <div class="detail__container Lime" onclick="Go4()">
                            <?php 
                                $sql4 = "SELECT * FROM SuDungPhong";
                                $list4 = executeResult($sql4);
                                $i4 = count($list4);

                                echo "<span>".$i4." lịch sử dụng phòng</span>";
                             ?>
                            <!-- <span>5 lịch sử dụng phòng</span> -->
                            <div class="detail">
                                <div class="detail--text">Xem chi tiết</div>
                                <i class="fas fa-chevron-right detail--icon"></i>
                            </div>
                            <i class="far fa-calendar-alt home--icon"></i>
                        </div>
                    </div>
                    <div class="col c-3">
                        <div class="detail__container BLue" onclick="Go5()">
                            <span>0 Thông báo</span>
                            <div class="detail">
                                <div class="detail--text"><a href="../../assets/php/ThongBao.php">Xem chi tiết</a></div>
                                <i class="fas fa-chevron-right detail--icon"></i>
                            </div>
                             <i class="far fa-bell home--icon"></i>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
  
    </div>

    <?php 
    require_once('nav.php')
     ?>

     <script>
         function Go1() {
            window.location="../../assets/php/DSLopHoc.php"
         }
         function Go2() {
            window.location="../../assets/php/DSPhongHoc.php"
         }
         function Go3() {
            window.location="../../assets/php/DSGiaoVien.php"
         }
         function Go4() {
            window.location="../../assets/php/LichSuDungPhong.php"
         }
         function Go5() {
            window.location="../../assets/php/ThongBao.php"
         }
     </script>

</body>

</html>