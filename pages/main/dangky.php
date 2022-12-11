<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		$matkhau = md5($_POST['matkhau']);
		$cmatkhau = md5($_POST['cmatkhau']);
	
		$email_query = "SELECT * FROM tbl_dangky WHERE email='$email' ";
		$email_query_run = mysqli_query($mysqli, $email_query);
		if(mysqli_num_rows($email_query_run) > 0) {
			echo "
			<script> 
			 alert('Email này đã được sử dụng. Vui lòng sử dụng email khác');window.location='index.php?quanly=dangnhap' 
			</script>";	
		} 
		else {
			if($matkhau === $cmatkhau)
			{
		        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)
				 VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		        if($sql_dangky){
			    echo "<script>
				alert('Đăng ký thành công');window.location='index.php?quanly=dangky' 
			   </script>";	
			   header("Location:index.php?quanly=giohang");
			     $_SESSION['dangky'] = $tenkhachhang;
			     $_SESSION['email'] = $email;
			     $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);	
				
		        }
	        }else{
				echo
				"<script>
				alert('Mật khẩu không trùng khớp. Vui lòng thử lại');window.location='index.php?quanly=dangky' 
			   </script>";	
		   } 
            
    }
}


	

?>
<h3>Đăng ký thành viên</h3>
<style type="text/css">
	table.dangky tr td {
	    padding: 5px;
	}
</style>
<form action="" method="POST">
                        <div class="input-box"  >
							 <input type="text" placeholder="Nhập họ và tên" name="hovaten">
						</div>
						
						<div class="input-box" >
							<input type="text" placeholder="Nhập email" name="email">
                        </div>

						<div class="input-box" >
							<input type="text" placeholder="Nhập số điện thoại" name="dienthoai"> 
                        </div>

						<div class="input-box" >
                            <input type="text" placeholder="Địa chỉ" name="diachi">
                        </div>

						 <div class="input-box">
                            <input type="password" name="matkhau" placeholder="Nhập mật khẩu">
                        </div>
						<div class="input-box">
                            <input type="password" name="cmatkhau" placeholder="Nhập lại mật khẩu">
                        </div>
                        
                           
                        
                        <div class="btn-box" >
                            <button type="submit" name="dangky">
                                Đăng ký
                            </button>
                        </div>

</form>
