<?php require_once "connect.php"; ?>

<head>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<!-- header menu start -->
<div class="tl_header_section">
	<div>
		<div class="row">
			<div class="col-lg-12">
				<div class="header_top_area">
					<div class="tl_top_menu top_left_menu">
						<ul>
							<?php
							if (isset($_SESSION['uid'])) { ?>

								<li><a href="myorder.php" class="fa fa-list" style="margin-left:200px;"><i
											aria-hidden="true"></i>My order</a></li>

							</ul>
						</div>
						<div class="tl_top_menu top_right_menu">
							<ul>
							<?php } ?>
							<li><a href="faq.php" class="fa fa-question-circle" style="margin-left:200px;"><i
										aria-hidden="true"></i>FAQ</a></li>
							<li><a href="how_work.php" style="margin-right:100px;"><i aria-hidden="true"></i>How it
									works?</a></li>
						</ul>
					</div>
				</div>
				<div class="menu_section_wrap">
					<!-- Site logo Start -->
					<div class="tl_logo">

						<a href="index.php">
							<img class="img-responsive" src="images/logo_small.png" alt="tailor-logo">
						</a>
					</div>
					<!-- Site logo End -->
					<!-- nav toggle -->
					<div class="nav_toggle">
						<i></i>
						<i></i>
						<i></i>
					</div>
					<!-- nav toggle -->
					<!-- Navigation Menu Start -->
					<div class="header_right_menu">
						<nav class="menu_section">
							<ul class="menu">
								<li>
									<a href="index.php" class="active" style="margin-left:200px;">Home</a>
								</li>
								<li>
									<a href="#">Category</a>
									<ul class="sub-menu">
										<?php
										$qry_cat = "select * from category_tbl where category_status='1'";
										// $qry_cat = "select * from subcategory_tbl where subcategory_name='" . $style . "'";
										$test_cat = mysqli_query($cnn, $qry_cat);
										while ($result_cat = mysqli_fetch_array($test_cat)) {
											?>
											<li><a
													href="mens.php?cat_id=<?php echo $result_cat['category_id']; ?>&category_type=<?php echo $result_cat['category_type']; ?>"><?php echo $result_cat['category_name']; ?></a></li>
										<?php } ?>
									</ul>
								</li>
								<li>
									<a href="about.php">About us</a>
								</li>

							</ul>
						</nav>
						<div class="tl_center_logo">
							<a href="index.php">
								<img style="margin-right:1000px;" class="img-responsive" src="TT.png" alt="tailor-logo">
							</a>
						</div>
						<div>
						</div>
						<nav class="menu_section right_nav">
							<ul class="menu">
								<li>
									<a href="gallery.php">Gallery</a>
								</li>


								<li>
									<a href="contact.php">Contact</a>
								</li>
								


								<?php
								if (!isset($_SESSION['uid'])) {

									?>
									<a class="nav-link px-xl-4 text-gigas" id="navbarShop" href="login.php"
										style="margin-right:200px;">Login/Register</a>
								<?php } ?>

								<?php
								if (isset($_SESSION['uid'])) {
									?>
									<li class="nav-item dropdown">

										<!-- Button trigger account modal -->
										<a class="nav-link d-flex p-3 text-gigas icon-xs" style="margin-right:100px;">
											<?php
											$qry = "select * from customer_tbl where customer_id=" . $_SESSION['uid'];
											$test = mysqli_query($cnn, $qry);
											$result = mysqli_fetch_array($test)

												?>
											Welcome
											<?php echo $result['customer_name']; ?>


										</a>

										<ul class="sub-menu">
											<li>
												<?php
												$qry = "select * from customer_tbl where customer_id=" . $_SESSION['uid'];
												$test = mysqli_query($cnn, $qry);
												$result = mysqli_fetch_array($test)

													?>
												<a class="dropdown-link"
													href="profile.php?my_id=<?php echo $result['customer_id']; ?>">
													My Profile
												</a>

											</li>

											<li>
												<a class="dropdown-link" href="user_pwd.php">
													Change Password
												</a>
											</li>

											<li>
												<a class="dropdown-link" href="logout.php">
													Logout
												</a>
											</li>
										</ul>

									</li>
								<?php } ?>

							</ul>
						</nav>
					</div>
					<!-- Navigation Menu End -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- header menu end -->