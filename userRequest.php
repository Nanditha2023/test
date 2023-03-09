<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<?php
	include( 'usersidebar.php' );
	session_start();
	include( 'connection.php' );
    
					$id=$_SESSION["id"];
					$type=$_SESSION["plan"];
	if(isset($id))
	{
		
		if(isset($type))
		{
	
	?>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Request </title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


	<!-- Left Panel -->
	<!-- /#left-panel -->
	
	<!-- Left Panel -->

	<!-- Right Panel -->

	<div id="right-panel" class="right-panel">

		<!-- Header-->
		<header id="header" class="header">

			<div class="header-menu">

				<div class="col-sm-7">
					<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
					<div class="header-left">
<!--						<button class="search-trigger"><i class="fa fa-search"></i></button>-->
<!--
						<div class="form-inline">
							<form class="search-form">
								<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
								<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
							</form>
						</div>
-->
						<script>
							function clearNotify()
							{
							jQuery.ajax({
        url: "clearNotification.php",
        type: "post",
        data:{
			notifyVal : 2,
			theId :<?php echo $id; ?>
		} ,
        success: function (response) {

           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
							}
						</script>

						<div class="dropdown for-notification">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="clearNotify()">
								<?php
								
								$w = "SELECT * FROM `usertable` JOIN `requesttable` ON usertable.user_Id = requesttable.recipient_id WHERE recipient_status = 1 AND fk_user_id = $id AND notify = 1";
								$ss = mysqli_query( $con, $w );
								$nt = mysqli_num_rows( $ss );
								?>
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger"><?php echo $nt; ?></span>
                            </button>
						
							<div class="dropdown-menu" aria-labelledby="notification">
								<p class="red">You have <?php echo $nt; ?> Notification</p>
								<?php 
								while($dat = mysqli_fetch_array($ss))
								{
									?>
								<a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p><?php echo $dat['userFirstName']; ?> accepted your request</p>
                            </a>
								<?php
								}
									?>
							
								
							
							</div>
						</div>

<!--
						<div class="dropdown for-message">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
						
							<div class="dropdown-menu" aria-labelledby="message">
								<p class="red">You have 4 Mails</p>
								<a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
							
								<a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
							
								<a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
							
								<a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
							
							</div>
						</div>
-->
					</div>
				</div>

				<div class="col-sm-5">
					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/logout.png" alt="User Avatar">
                        </a>
					

						<div class="user-menu dropdown-menu">
							

							<a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
						</div>
					</div>

					

				</div>
			</div>

		</header>
		<!-- /header -->
		<!-- Header-->

		<div class="breadcrumbs">
			<div class="col-sm-4">
				<div class="page-header float-left">
					<div class="page-title">
						<h1>Dashboard</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li class="active">Dashboard</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<div class="content mt-3">
			<div class="animated fadeIn">
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<strong class="card-title">User Data Table</strong>
							</div>
							<div class="card-body">
								<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
									
											<?php
											
											$var = "SELECT * FROM `usertable` JOIN `requesttable` ON usertable.user_Id = requesttable.fk_user_id WHERE recipient_status = 0 AND recipient_id = $id";
											$res = mysqli_query( $con, $var );
											$count = mysqli_num_rows( $res );
											if($count>0)
											{
												?>
									<thead>
										<tr>
											<th>NAME</th>
											<th>GENDER</th>
											<th>D.O.B</th>
											<th>RELIGION</th>

											<th>ADDRESS</th>

											<th>OCCUPATION</th>
											<th>ACCOUNT TYPE</th>
										</tr>
									</thead>
									<tbody>
										<tr>
									<?php
											while ( $row = mysqli_fetch_array( $res ) ) {
												?>
											<tr>
												<td>
													<?php echo $row['userFirstName'];?>
												</td>
												<?php
												if ( $row[ 'gender' ] == 0 ) {
													?>
												<td>Transmen</td>
												<?php
												} else {
													?>
												<td>Transwomen</td>
												<?php
												}
												?>
												<td>
													<?php echo $row['DOB'];?>
												</td>
												<td>
													<?php echo $row['religion'];?>
												</td>

												<td>
													<?php echo $row['address'];?>
												</td>
												<td>
													<?php echo $row['occupation'];?>
													<?php
													if ( $row[ 'account_type' ] == 0 ) {
														?>
													<td>Silver</td>
													<?php
													} elseif ( $row[ 'account_type' ] == 1 ) {
															?>
													<td>Gold</td>
													<?php
													} elseif ( $row[ 'account_type' ] == 2 ) {
															?>
													<td>Platinum</td>
													<?php 
}
?>
													<td><a class="btn btn-primary" href="confirmation.php?id=<?php echo $row['user_Id'];?>&uId=<?php echo $id; ?> " role="button">Confirm</a>
													</td>
													<td><a class="btn btn-danger" href="rejection.php?id=<?php echo $row['user_Id'];?>&uId=<?php echo $id; ?>" role="button">Reject</a>
													</td>



													<?php
											}
													}
											else{
												?>
												<center>
												<label>
													NO REQUESTS</label>
												</center>
												<?php
											}
													?>
											</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>


				</div>
			</div>
			<!-- .animated -->
		</div>
		<!-- .content -->


		<div class="content mt-3">



			<!--/.col-->

			<!--/.col-->

			<!--/.col-->

			<!--/.col-->

			<!--/social-box-->

			<!--/.col-->


			<!--/.col-->


			<!--/.col-->




			<footer class="twt-footer">

			</footer>
			</section>
		</div>










	</div>
	<!-- .content -->
	</div>
	<!-- /#right-panel -->

	<!-- Right Panel -->

	<script src="vendors/jquery/dist/jquery.min.js"></script>
	<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
	<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>


	<script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
	<script src="assets/js/dashboard.js"></script>
	<script src="assets/js/widgets.js"></script>
	<script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
	<script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script>
		( function ( $ ) {
			"use strict";

			jQuery( '#vmap' ).vectorMap( {
				map: 'world_en',
				backgroundColor: null,
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#1de9b6',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: [ '#1de9b6', '#03a9f5' ],
				normalizeFunction: 'polynomial'
			} );
		} )( jQuery );
	</script>

</body>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
					
		}
	}
else{
	header("Location: index.php");
}
			
			?>