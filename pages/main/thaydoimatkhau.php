<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green; text-align:center">Thay đổi mật khẩu thành công</p>';
		}else{
			echo '<p style="color:red; text-align:center">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại</p>';
		}
	} 
?>
<form action="" autocomplete="off" method="POST">
		<h3>Đổi mật khẩu</h3>
		<div class="input-box"  >
			<input type="text" placeholder="Nhập email" name="email">
		</div>
						
		<div class="input-box" >
			<input type="text" placeholder="Nhập mật khẩu cũ" name="password_cu">
        </div>

		<div class="input-box" >
			<input type="text" placeholder="Nhập mật khẩu mới" name="password_moi"> 
        </div>
                        
                           
        <div class="btn-box" >
            <button type="submit" name="doimatkhau">
                 Đồng ý
            </button>
        </div>
		
	</form>
	