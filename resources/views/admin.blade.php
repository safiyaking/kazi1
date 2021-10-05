<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Support Admin</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Nova+Flat' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="head">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a href="index.html">
                    <img src="assets/img/logo.png"  />
                        </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center" >
                     <img src="assets/img/top-mouse.png "  class="header-mid" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h4><span>Call:</span> +01-4589-987-567</h4>
                    <h4><span>E-mail:</span> info@domain.com</h4>
                </div>
                
            </div>
        </div>
    </div>
    <section >
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="assets/img/up.png" class="img-responsive" />
                    <h3>PRIVATE HOSPITAL BOARD</h3>
                    <p>
                       Welcome to our new system that enable you to avoid to used paper based and 
                       we are used compuerized private hospital board 
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="assets/img/moniter.png" class="img-responsive img-max-width" />

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>Admin Login </h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Username / Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Your Password" />
                        </div>
                        <div class="form-group">
                            <a href="admin-dashboard.html" class="btn btn-success">Click To Login</a>
                        </div>
                        <a href="#">Forgot Password ?</a>

                    </form>
                </div>
            </div>

        </div>

    </section>
    
    <div id="footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>Physical Location</h3>
                    <p>
                        <i>Addresss :</i> 125/890 , vuga,
                        <br />
                         Zanzibar.
                         <br />
                       &copy; 2014 yourdomian | by <a href="http://www.binarytheme.com/" style="color:#fff;" target="_blank">binarytheme.com</a>
                   
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>Get Quick Help</h3>
                    <h4><span> Call: </span>+255 0693858355</h4>
                    <h4><span>E-mail: </span>swafaa.sule@gmail.com</h4>
                    <h4><span>Skype:</span> sonasup</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">

                    <h3>Subscribe For Updates</h3>
                    <form>

                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Your Email" />
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Click To Subscribe</button>
                        </div>
                    </form>
                </div>




            </div>

        </div>

    </div>
    <!--  Jquery Core Script -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!--  Core Bootstrap Script -->
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>

</body>
</html>
