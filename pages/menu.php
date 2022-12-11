<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">TRANG CHỦ</a></li>
				
				<li><a href="index.php?quanly=giohang">GIỎ HÀNG</a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['id_khachhang'] ?>">XEM ĐƠN HÀNG</a></li>
				<li><a href="index.php?quanly=taikhoan&iddangky=<?php echo $_SESSION['id_khachhang'] ?>">TÀI KHOẢN</a></li>
				
				
				<li><a href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
				
				
				
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangnhap">ĐĂNG NHẬP</a></li>
				<li><a href="index.php?quanly=dangky">ĐĂNG KÝ</a></li>
				<?php
				}
				?>
				

				<li><a href="index.php?quanly=lienhe">LIÊN HỆ</a></li>
				
				
			</ul>
		
			
			<form action="index.php?quanly=timkiem" method="POST">
			<div class="search_box">
				
					<button class="search_btn" type="submit" name="timkiem" ><i class="fas fa-search" ></i></button>
					<input type="text" class="input_search" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
				
			</div>
			</form>
			
			   
			
			
		
		</div>