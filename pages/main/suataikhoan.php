<?php
	$sql_sua_tk = "SELECT * FROM tbl_dangky WHERE id_dangky='$_GET[iddangky]' LIMIT 1";
	$query_sua_tk = mysqli_query($mysqli,$sql_sua_tk);

if(isset($_POST['suataikhoan'])){
$hovaten= $_POST['hovaten'];
$email = $_POST['email'];
$dienthoai = $_POST['dienthoai'];
$diachi = $_POST['diachi'];

	$sql_sua_tk = "UPDATE tbl_dangky SET tenkhachhang='".$hovaten."',email='".$email."',diachi='".$diachi."',
	               dienthoai='".$dienthoai."' WHERE id_dangky='$_GET[iddangky]'";
	mysqli_query($mysqli,$sql_sua_tk);
	if($sql_sua_tk){
		echo '<p style="color:green; text-align:center">Thay đổi thông tin thành công</p>';
	}
}
	?>

<h3>Sửa thông tin tài khoản</h3>
<table class="table bordered">
 <form method="POST" action="">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_tk)) {
 	?>  
	
	 <div class="input-box"  >
							 <input type="text" value="<?php echo $dong['tenkhachhang'] ?>" name="hovaten">
						</div>
	
	
						<div class="input-box" >
							<input type="text" value="<?php echo $dong['email'] ?>" name="email">
                        </div>
	
	
						<div class="input-box" >
							<input type="text" value="<?php echo $dong['dienthoai'] ?>" name="dienthoai"> 
                        </div>
						</td>
	 
						<div class="input-box" >
                            <input type="text" value="<?php echo $dong['diachi'] ?>" name="diachi">
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