<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo"
			<script> 
			 alert('Sai tài khoản hoặc mật khẩu. Vui lòng thử lại');window.location='index.php?quanly=dangnhap' 
			</script>";
			
		}
	}
?>
<form action="" autocomplete="off" method="POST">
		 <h3>Đăng nhập thành viên</h3>
                    <div class="input-box">
                    
                        <input type="text" name="email" placeholder="Nhập email">
                    </div>
                    <div class="input-box">
                   
                        <input type="password" name="password"  placeholder="Nhập mật khẩu">
                    </div>
                    <div class="btn-box">
                        <button type="submit" name="dangnhap" >
                            Đăng nhập
                        </button>
                    </div>

	</form>