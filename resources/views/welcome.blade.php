<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyResume.hng</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/orbit-1.css">
  
</head> 

<body>
    <div style="display: initial;">
        
        <img class="nav-logo" src="assets/images/i4g.png" />
        <img class="nav-logo" src="assets/images/hng.png" />
        <img class="nav-logo" src="assets/images/zuri.png" style="float:right" />

    </div>
    <div class="wrapper mt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center">
                        <h1 class="home-box" style="color: white">Hello!..welcome to my resume page</h1>
                        <h5  class="home-box" >please enter your name</h3>
                        <form action="{{ route('view_resume') }}" method="get">
                            <input name="name" type="text" style="padding: 5px"><br>
                            <button type="submit"  class="btn btn-success home-box"  style="margin-bottom: 20px">View Resume</button>
                        </form>   
                    
                     

                </div>

            </div>

        </div>
     
       
    </div>
 
    <footer class="footer">
        <div class="text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">George Diepiriye</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
    
</body>
</html> 

