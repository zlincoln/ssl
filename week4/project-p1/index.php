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
					<form class="form well clearfix">
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
						<div class="col-xs-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="panel-title">Zachary Lincoln</span>
								</div>
								<div class="panel-body">
									<p><strong>Phone:</strong><a href="tel:6037623044">6037623044</a></p>
									<p><strong>Email:</strong><a href="mailto:zach@burlingtoncollective.com">zach@burlingtoncollective.com</a></p>
									<p><strong>Website:</strong><a href="http://burlingtoncollective.com">http://burlingtoncollective.com</a></p>
								</div>
								<div class="panel-footer clearfix">
									<button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#edit-modal">Edit</button>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="panel-title">Will Stevenson</span>
								</div>
								<div class="panel-body">
									<p><strong>Phone:</strong><a href="tel:6096690609">6096690609</a></p>
									<p><strong>Email:</strong><a href="mailto:willstevenson6@gmail.com">willstevenson6@gmail.com</a></p>
									<p><strong>Website:</strong><a href="http://willmstevenson.com">http://willmstevenson.com</a></p>
								</div>
								<div class="panel-footer clearfix">
									<button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#edit-modal">Edit</button>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="panel-title">Zachary Lincoln</span>
								</div>
								<div class="panel-body">
									<p><strong>Phone:</strong><a href="tel:6037623044">6037623044</a></p>
									<p><strong>Email:</strong><a href="mailto:zach@burlingtoncollective.com">zach@burlingtoncollective.com</a></p>
									<p><strong>Website:</strong><a href="http://burlingtoncollective.com">http://burlingtoncollective.com</a></p>
								</div>
								<div class="panel-footer clearfix">
									<button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#edit-modal">Edit</button>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="panel-title">Will Stevenson</span>
								</div>
								<div class="panel-body">
									<p><strong>Phone:</strong><a href="tel:6096690609">6096690609</a></p>
									<p><strong>Email:</strong><a href="mailto:willstevenson6@gmail.com">willstevenson6@gmail.com</a></p>
									<p><strong>Website:</strong><a href="http://willmstevenson.com">http://willmstevenson.com</a></p>
								</div>
								<div class="panel-footer clearfix">
									<button class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#edit-modal">Edit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="edit-modal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<form class="form">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Editing Contact: <span id="display-name">Zachary Lincoln</span></h4>
		      </div>
		      <div class="modal-body">
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

	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>