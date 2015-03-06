<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jelentkezés családállításra!">
	<meta name="keywords" content="családállítás, családfelállítás, Bert Hellinger, Peter Orban, Kerekes Andrea, csoportos terápia, lélek,">
    <link rel="shortcut icon" href="http://cdn.sorskapu.hu/sorskapu.ico">
	
	<!-- Facebook -->
	<meta property="fb:app_id" content="1459644830989485" />
    <meta property="fb:admins" content="100000956925477"/>
    <meta property="og:url" content="http://www.sorskapu.hu/csaladfelallitas/jelentkezes/"/>
    <meta property="og:locale" content="hu_HU" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sorskapu" />
	<meta property="og:title" content="Jelentkezési lap" />
    <meta property="og:description" content="Jelentkezés családállításra!" />
    <meta property="og:image" content="https://s3-eu-west-1.amazonaws.com/sorskapu/fb_csaladfelallitas.jpg" />
    <!-- Facebook Like End -->
 
    <title>Jelentkezés családállításra</title>

    <!-- Bootstrap Core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/css/stylish-portfolio.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,400italic,600,600italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<!-- Contact Form -->
		
</head>

    <!--Before Body-->
    <?php include '../../assets/inc/before-body.php';?>
    <!--/Before Body-->

<body>
    
    <!--After Body-->
    <?php include '../../assets/inc/after-body.php';?>
    <!--/After Body-->

    <!--Menu-->
	<?php include '../../assets/inc/menu.php';?>
	<!--/Menu-->

    <!--Jelentkezés családállításra!-->
    <section style="padding:100px 0;">
	
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
				
                <div class="panel panel-default">
                <div class="panel-body">
                <div class="cognito">
                <script src="https://services.cognitoforms.com/include/required"></script>
                <script src="https://services.cognitoforms.com/session/script/100ca1c9-098e-4c44-ab18-5473ee7eafc5"></script>
                <script>Cognito.load("forms", { id: "2" });</script>
                </div>
                </div>
                </div>  
                
																								    
				</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
		
    </section>
	<!--/Jelentkezés családállításra!-->
		  
    <!--Footer-->
	<section id="kapcsolat" style="padding:50px 0;">
	
    <footer>
    <div id="kapcsolat" class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                <br /><br />

                <!--kontakt-->
                <?php include '../../assets/inc/kontakt.php';?>
                <!--/kontakt-->
				                
                </div>
            </div>
        </div>
    </footer>
	
	</section>
    <!--/Footer-->
	
    <!-- jQuery Version 1.11.0 -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
    <script>
    // Scrolls to the selected menu item on the page
    $(function() {
        $('.guru').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
	
</body>
</html>