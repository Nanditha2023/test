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
    <title> Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                 <br>
                </div>
                <h3>User Registration</h3>
                <div class="login-form">
                    <form method="post" action="userRegistrationAction.php">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="first name" name="userfirstname" id="userfirstname">
                        </div>
                        
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last name" name="userlastname" id="userlastname">
                        </div>
                        
                         <div class="form-group">
                                <label>gender</label>
                                <select class="form-control"  name" name="gender" id="gender">
                                <option value="0">TransMen</option>
                                <option value="1">TransWomen</option>
                                </select>
                               
                        </div>
                           
                        
                         <div class="form-group">
                            <label>DOB</label>
                            <input type="date" class="form-control" placeholder="D.O.B" name="dob" id="dob">
                        </div>
                        
                         <div class="form-group">
                            <label>religion</label>
                            <input type="text" class="form-control" placeholder="religion" name="religion" id="religion">
                        </div>
                         <div class="form-group">
                            <label>caste</label>
                            <input type="text" class="form-control" placeholder="caste" name="caste" id="caste">
                        </div>
                        
                        <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" placeholder="Address"  name" name="address" id="address"></textarea>
                        </div>
                         <div class="form-group">
                            <label>nationality</label>
                            <input type="text" class="form-control" placeholder="nationality" name="nationality" id="nationality">
                        </div>
                        
                         <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control" placeholder="state" name="state" id="state">
                        </div>
                        
                         <div class="form-group">
                            <label>District</label>
                            <input type="text" class="form-control" placeholder="district" name="district" id="district">
                        </div>
                        
                         <div class="form-group">
                            <label>Pincode</label>
                            <input type="text" class="form-control" placeholder="pincode" name="pincode" id="pincode">
                        </div>
                        
                         <div class="form-group">
                            <label>Mother_tongue</label>
                            <input type="text" class="form-control" placeholder="mother tongue" name="mother_tongue" id="mother_tongue">
                        </div>
                        
                         <div class="form-group">
                            <label>Phone no</label>
                            <input type="text" class="form-control" placeholder="phone no" name="phone_no" id="phone_no">
                        </div>
                        
                         <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                        </div>
                        
                         <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password"  name" name="Password" id="Password">
                        </div>
                        
                         <div class="form-group">
                            <label>Educational qualification</label>
                            <input type="text" class="form-control" placeholder="educational qualification" name="educational_qualification" id="educational_qualification">
                        </div>
                        
                        <div class="form-group">
                            <label>occupation</label>
                            <input type="text" class="form-control" placeholder="occupation" name="occupation" id="occupation">
                        </div>
                        
                        
                         <div class="form-group">
                            <label>Mother's Name</label>
                            <input type="text" class="form-control" placeholder="" name="mother" id="mothers_name">
                        </div>
                        
                         <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" class="form-control" placeholder="" name="father" id="fathers_name">
                        </div>
                        
                       
                         <div class="form-group">
                                <label>About Yourself</label>
                                <textarea class="form-control" placeholder="type something about yourself"   name="about_yourself" id="about_yourself"></textarea>
                        </div>
                        
                        
                            <div class="form-group">
                                <label>Height</label>
                                <input type="text" class="form-control" placeholder="height"  name" name="height" id="height">
                        </div>
                        
                        <div class="form-group">
                                <label>Weight</label>
                                <input type="text" class="form-control" placeholder="weight"  name" name="weight" id="weight">
                        </div>
                        
                     
                           
                           
                           <div class="form-group">
                                <label>Account type</label>
                              
                                 <select class="form-control"  name" name="account_type" id="account_type">
                                <option value="0">Silver</option>
                                <option value="1">Gold</option>
                                 <option value="2">Platinum</option>
                                </select>
                        </div>
                                <div class="checkbox">
                                    
                                 
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                     
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>transmatrimony</p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

