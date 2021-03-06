<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Basic Information</title>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="../../assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="theme-default main-menu-animated">
<script>var init = [];</script>
<div id="main-wrapper">
	<?php include("../../panel/top_nav.php"); ?>
	<?php include("../../panel/left_account.php"); ?>

	<div id="content-wrapper">

		<!-- Page header -->
		<div class="page-header">
			<div class="row">
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm">Basic Information</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-lg-8">
				<form class="panel form-horizontal">
					<div class="panel-heading">
						<span class="panel-title">Basic Information</span>
					</div>
					<div class="panel-body">

						<!-- Javascript -->
						<script>
							init.push(function () {
								$('#switcher-gender').find('> input').switcher();
								$('#switcher-birthday').find('> input').switcher();
								$('#switcher-relationship-status').find('> input').switcher();
								$('#switcher-religion').find('> input').switcher();
								$('#switcher-political-views').find('> input').switcher();
								$('#switcher-birthplace').find('> input').switcher();
								$('#switcher-current-city').find('> input').switcher();
							});
						</script>

						<!-- First Name -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">First Name:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="">
							</div>
						</div>

						<!-- Last Name -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Last Name:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="">
							</div>
						</div>

						<!-- Gender -->
						<div class="form-group form-group-container">
							<label for="" class="col-sm-2 control-label">Gender:</label>
							<div class="col-sm-8">
								<select class="form-control form-item">
									<option value="" disabled="" selected="">-- Select --</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
								</select>
							</div>
							<div class="col-sm-2">
								<div id="switcher-gender" class="privacy-switcher form-item">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Birthday -->
						<div class="form-group form-group-container">
							<label for="" class="col-sm-2 control-label">Birthday:</label>

							<div class="col-sm-8">
								<div class="row">
									<div class="col-sm-4">
										<select class="form-control form-group-margin">
											<option value="" disabled="" selected="">-- Month --</option>
											<option value="1">March</option>
											<option value="2">April</option>
										</select>
									</div>
									<div class="col-sm-4">
										<select class="form-control form-group-margin">
											<option value="" disabled="" selected="">-- Day --</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
									<div class="col-sm-4">
										<select class="form-control form-group-margin">
											<option value="" disabled="" selected="">-- Year --</option>
											<option value="1">1990</option>
											<option value="2">1991</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-2">
								<div id="switcher-birthday" class="privacy-switcher form-item">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Relationship Status -->
						<div class="form-group form-group-container">
							<label for="" class="col-sm-2 control-label">Relationship Status:</label>
							<div class="col-sm-8">
								<select class="form-control form-item">
									<option value="" disabled="" selected="">-- Select --</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
								</select>
							</div>
							<div class="col-sm-2">
								<div id="switcher-relationship-status" class="privacy-switcher form-item">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Religion -->
						<div class="form-group form-group-container">
							<label for="" class="col-sm-2 control-label">Religion:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control form-item" id="">
							</div>
							<div class="col-sm-2">
								<div id="switcher-religion" class="privacy-switcher form-item">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Political Views -->
						<div class="form-group form-group-container">
							<label for="" class="col-sm-2 control-label">Political Views:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control form-item" id="">
							</div>
							<div class="col-sm-2">
								<div id="switcher-political-views" class="privacy-switcher form-item">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Birthplace -->
						<div class="form-group form-group-container">
							<label for="" class="col-sm-2 control-label">Birthplace:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control form-item" id="">
							</div>
							<div class="col-sm-2">
								<div id="switcher-birthplace" class="privacy-switcher form-item">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Current City -->
						<div class="form-group form-group-container">
							<label for="" class="col-sm-2 control-label">Current City:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control form-item" id="">
							</div>
							<div class="col-sm-2">
								<div id="switcher-current-city" class="privacy-switcher form-item">
									<input type="checkbox" data-class="switcher-primary" checked="checked">
								</div>
							</div>
						</div>

						<!-- Timezone -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Timezone:</label>
							<div class="col-sm-8">
								<select class="form-control">
									<option value="" disabled="" selected="">-- Select --</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
							</div>
						</div>

					</div>

					<!-- Submit button -->
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-offset-2 col-sm-8">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>

	</div>

	<div id="main-menu-bg"></div>
</div>
<?php include("../../panel/end_scripts.php"); ?>
</body>
</html>