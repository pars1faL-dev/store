<!DOCTYPE html>
<html lang="en">
<head>
	<title>Интернет-магазин</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="col-12 bg-primary" style="height: 70px">
		<img style="height: 30px" src="icon.png">
		<a class="text-white ml-5" href="">Главная</a>
		<a class="text-white ml-5" href="">Акции</a>
		<a class="text-white ml-5" href="">Категории</a>
		<button class="btn bg-warning ml-3">
			<a class="text-white" href="admin-panel.php">Админ-панель</a>
		</button>
	</div>
	<div class="col-12" style="height: 700px; background-image: url(UpuU.gif);">
		<div class="row">
			<h1 style="font-weight: bold" class="mt-5 ml-5 text-white">
				Интернет-магазин с душой
			</h1>
		</div>
	</div>
	<div class="col-12" style="height: 1080px; background-image: url(bg.jpg);">
		<div class="col-9 mx-auto" style="height: 600px;">
			<div class="row">
				<div class="col-12" style="height: 570px; display: flex">
					<div class="col-4" style="height: 600px">
					<?php 
						$connect = mysqli_connect("127.0.0.1", "root", "", "store");
						$sql = "SELECT * FROM item";
						
						$query = mysqli_query($connect, $sql);
						$stroka1 = $query->fetch_assoc();

						echo "<img class='w-100' src='{$stroka1["img"]}'>";
						
						
					 ?>
						<h5 class="text-white">
						<?php
							echo $stroka1["title"];
					 	?>
						</h5>
						<p class="text-white">
						<?php 
							echo $stroka1["text"];
						 ?>
						</p>
						<h5 class="text-white">
						<?php 
							echo $stroka1["price"];
						 ?>
						</h5>
						<button class="btn bg-success rounded">
							Купить 
						</button>
					</div>
					<div class="col-4" style="height: 570px">
					<?php 
						$stroka2 = $query->fetch_assoc();
						echo "<img class='w-100' src='{$stroka2["img"]}'>";
					?>
						<h5 class="text-white">
						<?php
							echo $stroka2["title"];
					 	?>
						</h5>
						<p class="text-white">
						<?php 
							echo $stroka2["text"];
						 ?>
						</p>
						<h5 class="text-white">
						<?php 
							echo $stroka2["price"];
						 ?>
						</h5>
						<button class="btn bg-success rounded">
						Купить 
						</button>
					</div>
					<div class="col-4" style="height: 570px">
					<?php 
						$stroka3 = $query->fetch_assoc(); 
						echo "<img class='w-100' src='{$stroka3["img"]}'>"
					?>
						<h5 class="text-white">
						<?php
							echo $stroka3["title"];
					 	?>
						</h5>
						<p class="text-white">
						<?php 
							echo $stroka3["text"];
						 ?>
						</p>
						<h5 class="text-white">
						<?php 
							echo $stroka3["price"];
						 ?>
						</h5>
						<button class="btn bg-success rounded">
						Купить 
						</button>
					</div>
				</div>
				<div class="col-4" style="height: 500px;">
				<?php 
					$stroka4 = $query->fetch_assoc();
					echo "<img class='w-100' src='{$_GET["picture"]}'>"
				 ?>
					<h5 class="text-white">
					<?php 
						echo $_GET["title"];
					 ?>
					</h5>
					<p class="text-white">
					<?php
						echo $_GET["txt"];
					 ?>
					</p>
					<h5 class="text-white">
					<?php
						echo $_GET["price"];
					 ?>
					</h5>
				</div>
			</div>
		</div>
	</div>
</body>
</html>