<?php
    session_start();
    $connect=mysqli_connect("localhost","root","1234","bookdbs");
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("已從購物車刪除")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?> 	
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/Okayga.ico" />
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

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
											<li><a href="categories.php?bookCatagory=?">繪本</a></li>
											<li><a href="categories.php?bookCatagory=?">拉拉書</a></li>
											<li><a href="categories.php?bookCatagory=?">食譜</a></li>
											<li><a href="categories.php?bookCatagory=?">童話</a></li>
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
		
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.php">Home</a></li>
										<li><a href="categories.php">Categories</a></li>
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">書名</div>
						<div class="cart_info_col cart_info_col_price">價格(本)</div>
						<div class="cart_info_col cart_info_col_quantity">數量</div>
						<div class="cart_info_col cart_info_col_delete">移除</div>
					</div>
				</div>
			</div>

			<div class="row cart_items_row">
				<div class="col">
					<?php
           					if(!empty($_SESSION["shopping_cart"]))
           					{
                				$total=0;
                				foreach($_SESSION["shopping_cart"] as $keys=>$values)
                				{
        			?>
					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="<?php echo $values['item_picture'];?>" alt="bookPic"></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><p><?php echo $values["item_name"];?></p></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price"><?php echo $values["item_price"];?></div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span><?php echo $values["item_amount"];?>本</span>
								</div>
							</div>
						</div>
						<!-- delete -->
						<div class="cart_item_total"><a href="cart.php?action=delete&id=<?php echo $values["item_id"];?>">remove</a></div>
					</div>	
						<?php
                    				$total=$total+($values["item_amount"]*$values["item_price"]);
                    				$totalamount=$totalamount+$values["item_amount"];
               					}
               				}
        				?>
					</div>
				</div>
			</div>

			<div class="row row_cart_buttons">
				<div class="col">

				</div>
			</div>
			<div class="row row_extra">
				<div class="col-lg-4">
					
					<!-- Delivery -->


					<!-- Coupon Code -->

				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">購物車</div>
						<div class="section_subtitle">結帳資訊</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">共</div>
									<div class="cart_total_value ml-auto"><? echo ($totalamount);?>本</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">小計</div>
									<div class="cart_total_value ml-auto">$<? echo number_format($total,2);?></div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">運費</div>
									<div class="cart_total_value ml-auto">$0</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">總計</div>
									<div class="cart_total_value ml-auto">$<? echo number_format($total);?></div>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="#">結帳</a></div>
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
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>