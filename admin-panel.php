<!DOCTYPE html>
<html>
<head>
	<title>Admin-pages</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="mx-auto col-8">
		<form action="store.php" method="GET">
			<div class="mt-3">
				<p class="font-weight-bold">Название</p>
				<input class="form-control" type="text" name="title">
			</div>
			<div class="mt-3">
				<p class="font-weight-bold">Описание</p>
				<input class="form-control" type="text" name="txt">
			</div>
			<div class="mt-3">
				<p class="font-weight-bold">Цена</p>
				<input class="form-control" type="text" name="price">
			</div>
			<div class="mt-3">
				<p class="font-weight-bold">Картинка</p>
				<input class="form-control" type="" name="picture">
			</div>
			<button class="btn mt-3 btn-success">
				Создать товар
			</button>
		</form>
		
	</div>
</body>
</html>