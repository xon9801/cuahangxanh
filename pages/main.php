	<div id="main">
			<?php
			include("sidebar/sidebar.php"); 
			?>

			<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					include("main/danhmuc.php");
				}elseif($tam=='giohang'){
					include("main/giohang.php");		
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");	
				}elseif($tam=='sanpham'){
					include("main/sanpham.php");	
				}elseif($tam=='dangky'){
					include("main/dangky.php");
				}elseif($tam=='thanhtoan'){
					include("main/thanhtoan.php");
				}elseif($tam=='dangnhap'){
					include("main/dangnhap.php");
				}elseif($tam=='timkiem'){
					include("main/timkiem.php");
				}elseif($tam=='camon'){
					include("main/camon.php");
				}elseif($tam=='thaydoimatkhau'){
					include("main/thaydoimatkhau.php");
				}elseif($tam=='taikhoan'){
					include("main/taikhoan.php");
				}elseif($tam=='suataikhoan'){
					include("main/suataikhoan.php");
				}elseif($tam=='xemdonhang'){
					include("main/xemdonhang.php");
				}elseif($tam=='chitietdonhang'){
					include("main/chitietdonhang.php");		
				}else{
					include("main/index.php");
				}
				?>
			</div>

		</div>