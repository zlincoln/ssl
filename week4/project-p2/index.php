<!DOCTYPE HTML>
<html>
<head>
	<title>Contact Manager</title>
	<link rel="stylesheet" href="css/master.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1>Contact Manager</h1>
					</div>
					<div id="banner" style="padding-bottom: 40px;">
						<img class="img-responsive" src="http://placehold.it/1200x100">
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="manager">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<form class="form well clearfix" action="model/contacts/add.php" method="post">
						<fieldset>
							<legend>Create a Contact</legend>
							<div class="form-group">
								<label for="fname">First Name</label>
								<input type="text" class="form-control" id="fname" name="fname">
							</div>
							<div class="form-group">
								<label for="lname">Last Name</label>
								<input type="text" class="form-control" id="lname" name="lname">
							</div>
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="tel" class="form-control" id="phone" name="phone">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="website">Website</label>
								<input type="text" class="form-control" id="website" name="website">
							</div>
							<button class="btn btn-primary pull-right">Submit</button>
						</fieldset>
					</form>
				</div>
				<div class="col-xs-8">
					<div class="row">
						<?php

							include_once('includes/connection.php');

							$stmt = $dbh->prepare('SELECT * FROM contacts;');
							$stmt->execute();
							$result = $stmt->fetchall(PDO::FETCH_ASSOC);

							foreach($result as $row):
						?>
						<div class="col-xs-6">
							<div class="panel panel-default"
								data-contact='{
									"id": "<?= $row['id']; ?>",
									"fname": "<?= $row['fname']; ?>",
									"lname": "<?= $row['lname']; ?>",
									"phone": "<?= $row['phone']; ?>",
									"email": "<?= $row['email']; ?>",
									"website": "<?= $row['website']; ?>"
								}'>
								<div class="panel-heading">
									<span class="panel-title"><?= $row['fname'] . ' ' . $row['lname']; ?></span>
								</div>
								<div class="panel-body">
									<p><strong>Phone:</strong><a href="<?= $row['phone']; ?>"><?= $row['phone']; ?></a></p>
									<p><strong>Email:</strong><a href="mailto:<?= $row['email']; ?>"><?= $row['email']; ?></a></p>
									<p><strong>Website:</strong><a href="<?= $row['website']; ?>"><?= $row['website']; ?></a></p>
								</div>
								<div class="panel-footer clearfix">
									<button class="btn btn-default btn-sm pull-right" style="margin-left: 10px;" data-open-edit>Edit</button>
									<button class="btn btn-danger btn-sm pull-right" data-confirm-delete>Delete</button>
								</div>
							</div>
						</div>
						<?php
						endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="edit-modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<form class="form" action="model/contacts/edit.php" method="post">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Editing Contact: <span id="display-name">Zachary Lincoln</span></h4>
		      </div>
		      <div class="modal-body">
		      	<input type="hidden" name="id" value="">
						<div class="form-group">
							<label for="edit-fname">First Name</label>
							<input type="text" class="form-control" id="edit-fname" name="fname">
						</div>
						<div class="form-group">
							<label for="edit-lname">Last Name</label>
							<input type="text" class="form-control" id="edit-lname" name="lname">
						</div>
						<div class="form-group">
							<label for="edit-phone">Phone</label>
							<input type="tel" class="form-control" id="edit-phone" name="phone">
						</div>
						<div class="form-group">
							<label for="edit-email">Email</label>
							<input type="email" class="form-control" id="edit-email" name="email">
						</div>
						<div class="form-group">
							<label for="edit-website">Website</label>
							<input type="text" class="form-control" id="edit-website" name="website">
						</div>
		      </div>
		      <div class="modal-footer clearfix">
		      	<button type="button" class="btn btn-primary pull-right" style="margin-left: 10px;">Save Changes</button>
		        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="delete-modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<form class="form" action="model/contacts/delete.php" method="post">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Deleting Contact: <span id="confirm-name">Zachary Lincoln</span></h4>
		      </div>
		      <div class="modal-body">
						<p>Are you sure you want to delete <strong id="confirm-name-body">Zachary Lincoln</strong>?</p>
						<input type="hidden" name="id" value="">
					</div>
		      <div class="modal-footer clearfix">
		      	<button type="submit" class="btn btn-danger pull-right" style="margin-left: 10px;">Delete</button>
		        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>