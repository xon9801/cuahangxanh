<h3> Thông tin tài khoản </h3>
  <?php

$sql_tk = "SELECT * FROM tbl_dangky WHERE id_dangky='$_GET[iddangky]' LIMIT 1" ;
$query_tk = mysqli_query($mysqli,$sql_tk);

?>


  <form  method="POST" action="">
 	<?php
 	while($row = mysqli_fetch_array($query_tk)) {
 	?>  
	
	 <div class="input-box"  >
							 <input style="background:#ebebe0;pointer-events: none" type="text" value="<?php echo $row['tenkhachhang'] ?>" >
						</div>
	
						<div class="input-box" >
							<input style="background:#ebebe0;pointer-events: none" type="text" value="<?php echo $row['email'] ?>" >
                        </div>
	
	
						<div class="input-box" >
							<input  style="background:#ebebe0;pointer-events: none" type="text" value="<?php echo $row['dienthoai'] ?>" > 
                        </div>
					
	 
						<div class="input-box" >
                            <input style="background:#ebebe0;pointer-events: none" type="text" value="<?php echo $row['diachi'] ?>" n>
                        </div>
                        
                        <p style="margin-left: 350px"><a   href="index.php?quanly=suataikhoan&iddangky=<?php echo $_SESSION['id_khachhang'] ?>">Thay đổi thông tin</a> |
                        <a  href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></p>
	 

	 
	
		
 </form>
</table>

	  
	  <?php
	  } 
	  ?>

 </form>
</table>
  
 
 

  </table>
  <table class="table bordered">
 <form method="POST" action="">
 	<?php
 	while($row = mysqli_fetch_array($query_tk)) {
 	?>  
	
	 <div class="input-box"  >
							 <input type="text" value="<?php echo $row['tenkhachhang'] ?>" >
						</div>
	
						<div class="input-box" >
							<input type="text" value="<?php echo $row['email'] ?>" >
                        </div>
	
	
						<div class="input-box" >
							<input type="text" value="<?php echo $row['dienthoai'] ?>" > 
                        </div>
						</td>
	 
						<div class="input-box" >
                            <input type="text" value="<?php echo $row['diachi'] ?>" n>
                        </div>
	 </td>
	 </tr>

	 
	  <div class="btn-box" >
            <button type="submit" name="suataikhoan">
                 Đồng ý
            </button>
        </div>
		
 </form>
</table>

	  
	  <?php
	  } 
	  ?>

 </form>
</table>