<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="sidebar">
				<h4 style="text-align:center">Danh mục sản phẩm</h4>
				<ul class="list_sidebar">
					<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
					<?php

					} 
					?>
					
				</ul>
			
			</div>