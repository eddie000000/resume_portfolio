<?
	session_start();
	include('mysqli_obj_connMysql.php');
	$sql_query = "SELECT * FROM booklist ORDER BY bookID ASC";
	$result = $db_link->query($sql_query);
	$total = $result->num_rows;

	$pageRow_records = 12;
	$num_pages = 1;
	if(isset($_GET['page']))
	{
		$num_pages = $_GET['page'];
	}
	$startRow_records = ($num_pages-1) * $pageRow_records;
	$sql_query = "SELECT * FROM booklist";
	$sql_query_limit = $sql_query." LIMIT {$startRow_records}, {$pageRow_records}";
	$all_result = $db_link -> query($sql_query);
	$result = $db_link -> query($sql_query_limit);
	$total_records = $all_result -> num_rows;
	$total_pages = ceil($total_records/$pageRow_records);

?>
<?php
    session_start();
    $connect=mysqli_connect("localhost","root","1234","bookdbs");
    if(isset($_POST["add_to_cart"]))
    {
            $item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
              $count=count($_SESSION["shopping_cart"]);
                $item_array=array('item_id'=>$_POST["bookID"],
                                  'item_name'=>$_POST["hidden_name"],
                                  'item_price'=>$_POST["hidden_price"],
                                  'item_amount'=>$_POST["amount"],
                                  'item_picture'=>$_POST["picture"]
                                );
                $_SESSION["shopping_cart"][$count]=$item_array;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/Okayga.ico" />
<title>XBooks Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="index.php"><span>XBooks.</span></a></div>
							<nav class="main_nav">
								<ul>
									<li class="hassubs active">
										<a href="index.php">Home</a>
										<ul>
											<li><a href="categories.php">Categories</a></li>
											<li><a href="cart.php">Cart</a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="categories.php">Categories</a>
										<ul>
											<li><a href="categories.php?bookCatagory=繪本">繪本</a></li>
											<li><a href="categories.php?bookCatagory=拉拉書">拉拉書</a></li>
											<li><a href="categories.php?bookCatagory=食譜">食譜</a></li>
											<li><a href="categories.php?bookCatagory=童話">童話</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<a href="cart.php">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<div>Cart <span></span></div>
									</a>
								</div>
							</div>
							<div class="float-right ">
            						<?php
               		 					if(isset($_SESSION['userID'])){
                    					echo '<form action="includes/logout.inc.php" method="post">
                  				          <div class="form-group"><button type="submit" name="logout-submit" class="btn float-right login_btn">Logout</button></div>
                            						</form>';
                						}
                						else{
					                    echo '<form action="includes/login.inc.php" method="post"><div><table class="float-right"><td><input type="text" name="mailuid" placeholder="Username/E-mail">
					                            <input type="password" name="pwd" placeholder="Password">
					                            <button type="submit" name="login-submit" class="btn float-right login_btn">Login</button></td></table></div>
					                            </form>
					                            <br><br>
					                            <div class="d-flex justify-content-center links">
					                            No account?<a href="signup.php"> Sign Up</a></div>';
                						}
            						?>
    							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(https://mopinion.com/wp-content/uploads/2019/11/Cover-ux-books.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Study More<span>!</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">	
					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
						<div class="results">Showing <span>12</span> results</div>
						<div class="sorting_container ml-md-auto">
							<div class="sorting">
								<ul class="item_sorting">
									<li>
										<span class="sorting_text">Sort by</span>
										<i class="fa fa-chevron-down" aria-hidden="true"></i>
										<ul>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						<?while($row_result = $result->fetch_assoc())
						 { ?>	
						<form method="post" action="index.php">
						<div class="product">
							
							<div class="product_image"><img src="<? echo $row_result['bookPic']?>" alt="" title="<? echo "庫存:"; echo $row_result['bookLeft']; echo "\n出版日期:"; echo $row_result['bookPublishD']?>"><input type="hidden" name="picture"  value="<?php echo $row_result["bookPic"];?>"><input type="hidden" name="bookID"  value="<?php echo $row_result["bookID"];?>"></div>
							<div class="product_extra product_new"><a href="categories.php?bookCatagory=<? echo $row_result['bookCatagory'];?>"><? echo $row_result['bookCatagory'];?></a></div>
							<div class="product_content">
								<div class="product_title"><a href=""><input type="hidden" name="hidden_name" value="<?php echo $row_result["bookName"];?>"><?echo $row_result['bookName']?></a></div>
								<div class="product_price"><input type="hidden" name="hidden_price" value="<?php echo $row_result["bookPrice"];?>">$<?echo $row_result['bookPrice']?></div>
								<div class="product_content"><? echo $row_result['bookAuthor'];?></div>
								<!--add to cart test -->
							<div class="input-group mt-3">
                        			<label class="my-2 mr-2 " for="input-quantity">數量</label>
              							<input type="number" min="1" max="20" step="1" name="amount" value="1" size="2" id="input-quantity" class="form-control" placeholder="1">
              							<? if(!isset($_SESSION['userID']))
              							{
              								echo '<p class="btn btn-primary ml-1" onclick="warn()">加入購物車</p>';
              							}
              							else
              							{
              								echo '<button class="btn btn-primary ml-1" name="add_to_cart" onclick="buyit()">加入購物車</button>';
              							}?>
                        				
                    		</div>
                    		</form>
							</div>
						</div>
					</form>
						<? } ?>
					</div>
					<div class="product_pagination">
						<ul>
							<li class="active"><a href="userinterface.php?pgae=1">01.</a></li>
							<?php if ($num_pages < $total_pages){ ?>
								<li><a href="userinterface.php?page=<?echo $num_pages+1; ?>">0<? echo $num_pages+1?>.</a></li>
							<? } ?>
						</ul>
					</div>
						
				</div>
			</div>
		</div>
	</div>


	
	<!-- Footer -->
	<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

<script src="js/jquery-3.2.1.min.js"></script>
<script>function buyit()
{
		alert("已加入購物車");
}
</script>
<script>function warn()
{
		alert("請先登入");
}
</script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>
</body>
</html>