<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gold Plan Payment</title>
    <meta name="description" content="Transmatrimony">
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
<?php

					
					include("connection.php");
					session_start();
					$id=$_SESSION["id"];
					

?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    
                    <div class="header-left">
                       

                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                           

                            <a class="nav-link" href="localhost/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                   

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                   
                        <h1><?php $query="SELECT * FROM `usertable` WHERE user_Id=$id";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
?>
Welcome <b><?php echo $row['userFirstName']; ?>.<?php echo $row['userLastName']; ?><b></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3" style="padding-left: 500px; padding-right: 500px;">

           <!-- profiles starts from here -->

          
            
        <div class="card" >
            <div class="card-header">
                <strong class="card-title mb-3">GOLD PLAN</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <label>6 month - Rs.500/-</label>
                    <h5 class="text-sm-center mt-2 mb-1">Card Payment</h5>
					<br>
                    <div class="location text-sm-center" >
						
						<form action="buyPlanAction.php" method="post">
							
							<input type="hidden" name="plan" value="2">
							
						<table align="center">
							<tr>
								<td>
								<input type="text" name="accountNumber" placeholder="Enter card number" required>
								</td>
							</tr>
							<tr>
								<td>
								 <input type="text" placeholder="Enter name (optional)">
								</td>
							</tr>
							<tr>
								<td>
								<input type="text" name="cvv" placeholder="Enter Cvv" required maxlength="3">
								</td>
							</tr>
						
						</table>
					   
					</div>
                </div>
                <hr>
               <div class="card-text text-sm-center">
               
               
               		<input type="hidden" name="theUser" value='<?php echo $id; ?>' />
                    
               	
                    <input type="submit" class="btn btn-success" value="BUY PLAN" />
                    
                    
                    
                    </form>
                    
                    
                    
                </div> 
            </div>
        </div>
    
  
   
    <!-- profile ends here -->
           
           

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


          


          


          


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

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
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
