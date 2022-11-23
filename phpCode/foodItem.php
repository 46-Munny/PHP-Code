<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>FoodItem</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/foodItem.css">

    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/navbar.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg ">
		<a class="navbar-brand" href="#">FoodFlavour</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">

					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="item.php">FoodItem</a>
				</li>

				<?php

					if (isset($_SESSION['Uname'])) {
						echo ' <li class="nav-item"><a class="nav-link" href="/Restuproject/login.php">Hi, '.$_SESSION['Uname'].'</a></li>
						<li class="nav-item">
							<a class="nav-link" href="/Restuproject/logout.php">Logout</a>
						</li>';
					} else {
						echo ' <li class="nav-item">
							<a class="nav-link" href="/Restuproject/login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/Restuproject/regform.php">Registration</a>
						</li>'
					;
					}

				?>

			</ul>

		</div>
	</nav>


	<div class="menu-box">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>FOOD</h2>
						<p>In our resturant "FoodFlavour", we served several items<br>
						Common menus are lunch menu,dinner menu,breakfast menu,district food menu etc."<br>
						All foods are fresh and tasty.</p><br>

						<form action="breakfast.php" method="post" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                		<div class="input-group">
                    	<input class="form-control"name="searchkey" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    	<div class="input-group-append">
                        <button class="btn btn-success" type="submit" name="search">search</button>
                    	</div>
                		</div>
            			</form>
					</div>
				</div>
			</div>







			<div class="row">
				<div class="col-lg-6">
					<div class="special-menu text-right">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*"><a href="foodItem.php" class="text-white text-bold">All</a></button>

						</div>

					</div>
				</div>
				<div class="col-lg-5">
					<div class="special-menu ">
						<div class="button-group filter-button-group">

							<form class="" action="foodItem.php" method="post">
								<button type="submit" name="offer" class=" ml-3 active btn btnf" >Offered Item</button>
							</form>

						</div>

					</div>
				</div>
			</div>

			<br><br>




			<div class="row special-list">

				<?php

				$servername = 'localhost';
			  $username='root';
			  $password='';
			  $dbname='foodflavour';
			  $conn=mysqli_connect($servername, $username, $password, $dbname);

				if(isset($_POST['search']))
        {


          $searchkey=$_POST['searchkey'];
          $display=" select * from product where  Product_Name  like '%$searchkey%'";
        }

				else if(isset($_POST['offer']))
				{
					$display=" select * from product where  discount!='0'";
				}

				else{
					$display=" select * from product";
				}

				$querydisplay=mysqli_query($conn,$display);
				  $num=mysqli_num_rows($querydisplay);

			if($num>0)
			{

				while($result=mysqli_fetch_array($querydisplay))
				{

					if($result['Status']=='Available')
					{


				 ?>
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="<?php echo $result['Image']; ?>" class="img-fluid" alt="Image">
						<div class="why-text">
							<h2><b><?php echo $result['Product_Name']; ?></b></h2>
							<p><?php echo $result['Description']; ?>.</p>
							<div class="fif">
								<div class="left">
									<h4> <?php echo 'Tk.'. $result['Price']; ?> </h4>
									<h3><?php echo 'Rating:'. $result['Rating']; ?></h3>
									<h3><?php echo 'Discount:'. $result['discount'].'%'; ?></h3>
							    </div>
							    <div class="right">
										<form class="" action="pay.php" method="post">
											<input type="hidden" name="id" value="<?php echo $result['Id']; ?>">
											<button type="submit" name="order" class="food-btn">Order Now</button>
										</form>

							    </div>
					       </div>
						</div>
					</div>
					</div>

					<?php
				}
			}
		}

		else {
			echo " <div class=\"alert alert-danger text-center \">
			<h3>*No item found</h3></div>";
		}
					 ?>




				</div>





			</div>
			<div class="center">
					<button class="food-btn "><a class="text-white" href="comment.php">Feedback</a></button>
				</div>
		</div>

	<!-- End Menu -->
</body>
</html>
