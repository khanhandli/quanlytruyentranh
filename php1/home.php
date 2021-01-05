<?php 
    require_once('../resoures/header.php');
    require_once('../resoures/dbhelp.php');

 ?>
        <div class="body">

        	<div class="grid wide">
        		<div class="row">
        			<div class="c-3">
                         <?php 
                            require_once('nav.php');
                          ?>
                    </div>
                    <div class="c-9">
                        <div class="container-title">
                            <i class="far fa-border-all" style="color: #976D00;"></i>
                            <h1 style="color: #976D00;">Hệ Thống Hiện Có</h1>
                        </div>
                        <div class="row scroll" style="overflow:hidden;">
                            <table class="table table-bordered">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col">Danh Mục</th>
                                  <th scope="col">Tổng Số Sản Phẩm</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Truyện Ngắn</td>
                                      <?php 
                                            $sql1 = "SELECT * FROM TruyenNgan";
                                            $list1 = executeResult($sql1);
                                            $i1 = count($list1);

                                            echo "<td>".$i1."</td>";
                                         ?>
                                      <?php 
                                        echo        '<td><button  class= "btn1 btn-delete" onclick=\'window.open("../php/TN.php","_self")\'>Xem</button></td>';
                                       ?>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Truyện Cười</td>
                                      <?php 
                                            $sql2 = "SELECT * FROM TruyenCuoi";
                                            $list2 = executeResult($sql2);
                                            $i2 = count($list2);

                                            echo "<td>".$i2."</td>";
                                         ?>
                                      <?php 
                                        echo        '<td><button  class= "btn1 bg-info" onclick=\'window.open("../php/TC.php","_self")\'>Xem</button></td>';
                                       ?>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Truyện Ma</td>
                                      <?php 
                                            $sql3 = "SELECT * FROM TruyenMa";
                                            $list3 = executeResult($sql3);
                                            $i3 = count($list3);

                                            echo "<td>".$i3."</td>";
                                         ?>
                                      <?php 
                                        echo        '<td><button  class= "btn1 bg-danger" onclick=\'window.open("../php/TM.php","_self")\'>Xem</button></td>';
                                       ?>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>Truyện Tiểu Thuyết</td>
                                      <?php 
                                            $sql4 = "SELECT * FROM TruyenTT";
                                            $list4 = executeResult($sql4);
                                            $i4 = count($list4);

                                            echo "<td>".$i4."</td>";
                                         ?>
                                      <?php 
                                        echo        '<td><button  class= "btn1 bg-warning" onclick=\'window.open("../php/TTT.php","_self")\'>Xem</button></td>';
                                       ?>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>Tác Giả</td>
                                      <?php 
                                            $sql5 = "SELECT * FROM TacGia";
                                            $list5 = executeResult($sql5);
                                            $i5 = count($list5);

                                            echo "<td>".$i5."</td>";
                                         ?>
                                      <?php 
                                        echo        '<td><button  class= "btn1 bg-success" onclick=\'window.open("../php/TG.php","_self")\'>Xem</button></td>';
                                       ?>
                                    </tr>
                                    <tr>
                                      <th scope="row">6</th>
                                      <td>Toàn Bộ Truyện</td>
                                      <?php 
                                            $sql6 = "SELECT * FROM TruyenTH";
                                            $list6 = executeResult($sql6);
                                            $i6 = count($list6);

                                            echo "<td>".$i6."</td>";
                                         ?>
                                      <?php 
                                        echo        '<td><button  class= "btn1 bg-primary" onclick=\'window.open("../php/TH.php","_self")\'>Xem</button></td>';
                                       ?>
                                    </tr>
                                  </tbody>
                          </table>
                           

                        </div>
                    </div>
        		</div>
            </div>
    	</div>
   
    </div>
    <script type="text/javascript" src="../main.js"></script>
</body>

</html>