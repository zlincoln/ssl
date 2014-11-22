<?php
	// call fruitget api
	$fruitDay = file_get_contents("http://localhost:8888/fullsail/ssl/week3/project-p2/fruitget.php");
	// decode result and store for dom access at #fruit-ad
	$fruitDay = json_decode($fruitDay)[0];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Fruit DB App: Exploring CRUD + PDO</title>
	<link rel="stylesheet" href="css/master.css">
</head>
<body>
	<section id="add-fruit" class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-xs-7 content">
					<h1>Explore the wonderful world of Fruits!</h1>
					<p class="lead">Help us document and manage our massive list of fruits and their color.  This form will allow you to add any fruit to the database.</p>
				</div>
				<div class="col-xs-4 col-xs-push-1">
					<?php

					//include once 'includes/connection.php' which stores db credentials and instantiates pdo object
					include_once('includes/connection.php');

					//if request method is post
					if($_SERVER['REQUEST_METHOD'] == 'POST'){
						//hydrate variables with postdata
						$fruitName = $_POST['fruit-name'];
						$fruitColor = $_POST['fruit-color'];
						$fruitImage = $_POST['fruit-image'];
						//use pdo object to prepare an insert statement with params
						$stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor, fruitimage) VALUES (:fruitname, :fruitcolor, :fruitimage);");
						//bind those params to our variables containing postdata
						$stmt->bindParam(':fruitname', $fruitName);
						$stmt->bindParam(':fruitcolor', $fruitColor);
						$stmt->bindParam(':fruitimage', $fruitImage);

						//execute insertion
						$stmt->execute();
					} //end request method conditional

					?>
					<form class="form well clearfix" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
						<div class="form-group">
							<label for="fruit-name">Fruit Name<sup>*</sup></label>
							<input type="text" id="fruit-name" class="form-control" name="fruit-name" required>
						</div>
						<div class="form-group">
							<label for="fruit-color">Fruit Color<sup>*</sup></label>
							<input type="text" id="fruit-color" class="form-control" name="fruit-color" required>
						</div>
						<div class="form-group">
							<label for="fruit-image">Fruit Image</label>
							<input type="text" id="fruit-image" class="form-control" name="fruit-image" placeholder="http://example.com/image.jpg" required>
						</div>
						<button class="btn btn-primary pull-right" type="submit">Add Fruit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section id="manage-fruit">
		<div class="container">
			<div class="row">
				<div class="col-xs-4" id="fruit-ad">
					<div class="page-header">
						<h3>Fruit of the Day</h3>
					</div>
					<h4><?= $fruitDay->fruitcolor; ?> <?= $fruitDay->fruitname; ?></h4>
					<img class="img-responsive" src="<?= $fruitDay->fruitimage; ?>">
				</div>
				<div class="col-xs-8">
					<div class="page-header">
						<h3>All Fruit</h3>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Color</th>
								<th>Image</th>
								<th>Delete Fruit</th>
							</tr>
						</thead>
						<tbody>
							<?php

							//use pdo object to prepare a select statement
							$stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor, fruitimage FROM fruits;');
							//execute selection
							$stmt->execute();
							$result = $stmt->fetchall(PDO::FETCH_ASSOC);

							//for each row returned
							foreach($result as $row){
								//echo out the id, name, color
								$markup = '<tr>';
								$markup .= '<td>'.$row['id'].'</td>';
								$markup .= '<td>'.$row['fruitname'].'</td>';
								$markup .= '<td>'.$row['fruitcolor'].'</td>';
								$markup .= '<td>'.$row['fruitimage'].'</td>';
								//last column contains a link to deletefruit.php passing the associated id as a url param
								$markup .= '<td><a href="deletefruit.php?id='.$row['id'].'" class="btn btn-danger btn-sm btn-block">Delete</a></td>';
								$markup .= '</tr>';
								echo $markup;
							} //end row for loop

							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>