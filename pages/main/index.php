
<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*5)-5;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc
	 ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,5";
	$query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h3> HÀNG MỚI VỀ</h3>
				<ul class="product_list">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="title_product"> <?php echo $row['tensanpham'] ?></p>
							<p class="price_product"> <?php echo number_format($row['giasp'],0,',','.').'vnđ/100gr' ?></p>
						</a>
					</li>
					<?php
					} 
					?>
				</ul>
				<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
					    padding: 0;
					    margin: 0 ;
					    list-style: none;
						justify-content: center;
						display:flex;
					}
					ul.list_trang li {
						
					    padding: 5px 13px;
					    margin: 2px;
						max-width:10px;
					    background: #00b300;
					}
					ul.list_trang li a {
					    color: #fff;
					    text-align: center;
					    text-decoration: none;
					 
					}
				</style>
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/5);
				?>
				<p style="text-align: center; font-size:18px;">Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
				
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
					
				</ul>
		
				