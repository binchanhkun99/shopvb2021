<div class="preorder-hot" style="display: flex;
    flex-wrap: wrap;
    width: 360px;">
<a style="margin-bottom: 5px;
    
    width: 50%;" aria-label="slide" data-cate="0" data-place="1548" href="https://www.thegioididong.com/dtdd-apple-iphone-11-series" onclick="jQuery.ajax({ url: '/bannertracking?bid=42329&amp;r='+ (new Date).getTime(), async: true, cache: false });">
<img style="width: 100%;
    border-radius: 4px;" src="//cdn.tgdd.vn/2022/01/banner/laptopdesk(3)-340x340.jpg" alt="iphone"></a>
<a style="margin-bottom: 5px;
    
    width: 50%;" aria-label="slide" data-cate="0" data-place="1548" href="https://www.thegioididong.com/samsung" onclick="jQuery.ajax({ url: '/bannertracking?bid=41695&amp;r='+ (new Date).getTime(), async: true, cache: false });">
<img style="width: 100%;
    border-radius: 4px;" src="//cdn.tgdd.vn/2022/01/banner/laptopdesk(4)-340x340.jpg" alt="Galaxy Note20"></a>
<a style="margin-bottom: 5px;
    
    width: 50%;" aria-label="slide" data-cate="0" data-place="1548" href="https://www.thegioididong.com/laptop-gaming?itm_source=homepage&amp;itm_medium=hot_banner&amp;itm_campaign=internal_tracking&amp;itm_content=desktop_1548" onclick="jQuery.ajax({ url: '/bannertracking?bid=49135&amp;r='+ (new Date).getTime(), async: true, cache: false });">
<img style="width: 100%;
    border-radius: 4px;" src="//cdn.tgdd.vn/2022/01/banner/Frame46695-340x340.png" alt="Laptop Gaming"></a>
	<a style="margin-bottom: 5px;
    
    width: 50%;" aria-label="slide" data-cate="0" data-place="1548" href="https://www.thegioididong.com/dong-ho-thong-minh-apple-watch-se" onclick="jQuery.ajax({ url: '/bannertracking?bid=43152&amp;r='+ (new Date).getTime(), async: true, cache: false });">
<img style="width: 100%;
    border-radius: 4px;" src="//cdn.tgdd.vn/2022/01/banner/Frame3941-340x340-3.png" alt="Đồng hồ (không xoá, chỉ up đồng hồ)"></a>   
 </div>
 
<div class="row" style="margin-left: 0 !important;
margin-right:0px !important;">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Xem nhiều nhất ngày</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>
