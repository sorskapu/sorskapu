<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Teremtsünk együtt!">
	<meta name="keywords" content="bérlet, támogatás, adomány, hangoskönyv,">
    <link rel="shortcut icon" href="http://cdn.sorskapu.hu/sorskapu.ico">
	
	<!-- Facebook -->
	<meta property="fb:app_id" content="1459644830989485" />
    <meta property="fb:admins" content="100000956925477"/>
    <meta property="og:url" content="http://www.sorskapu.hu/berlet/vip/"/>
    <meta property="og:locale" content="hu_HU" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sorskapu" />
	<meta property="og:title" content="Bérlet" />
    <meta property="og:description" content="Teremtsünk együtt!" />
    <meta property="og:image" content="http://cdn.sorskapu.hu/fb_berlet.jpg" />
    <!-- Facebook Like End -->

    <title>Bérlettulajdonosok Oldala</title>

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
    
    <!--Menu-->
	<?php include '../../assets/inc/menu.php';?>
	<!--/Menu-->

    <!--Header-->
    <header id="top" class="header_vip">
        <div class="text-vertical-center">
            <h3 style="margin-top:100px;">VIP Oldal</h3>
            <br />
            <p style="font-size:16px;">Kedves Bérlettulajdonos!<br />Hálásan köszönjük támogatását, fogadja szeretettel ajándékunkat!</p>
			<br />
            <a href="#tovabb" style="off margin-top:80px;" class="btn btn-dark btn-lg guru">Peter Orban - A hős utazása 1.</a>
		</div>
	</header>
	<!--Header-->

    <!--VIP-->
    <section id="tovabb" style="padding:50px 0;">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                <!-- Peter Orban - A hős utazása -->
                <div class="col-md-6 col-md-offset-3">
                    <div class="thumbnail">

                        <div class="responsive-video">
                        <iframe width="510" height="287" src="//www.youtube.com/embed/J9VKIjTSgWM?rel=0" frameborder="0" allowfullscreen></iframe>     
                        </div>

                        <div style="margin-top: -20px;" class="caption">
                            <h3>Peter Orban - A hős utazása 1.</h3>
                            <p style="text-align:justify;"><br />Amikor elhatározzuk, hogy elindulunk egy olyan úton, ami nem felfelé vezet, hanem lefelé, tudjuk, hogy az út félelmetes lesz és kiszámíthatatlan. Itt nem segít majd a logikus gondolkodás, hiszen a lélek nem ismeri a logikát. Ezen a tájon nincs tér és nincs idő, nem léteznek okok és nincsenek következmények.<br /><br />Amikor a szakadék mélységei felé vesszük az irányt, hogy eljussunk lelkünk  eddig árnyékban meghúzódó  másik oldalára, szükségünk van valakire, aki vezet minket, és segít az úton. Ő a bennünk élő gyógyító, lelkünk saját szövetségese.<br /><br />Az első képzeletbeli utazás során találkozhatunk vele, és megbízhatjuk őt ezzel a feladattal. Így belső vezetőnk végig mellettünk lesz, és amikor éppen szembesülünk valamivel, figyelmeztetni fog:<br /><br />Nézz oda! Ez te vagy! Minden, amit kellemetlennek tartasz, minden, amit gyűlölsz, valójában nem más, mint az, amit nem fogadsz el saját magadban. Csak azt utasítod el, ami hiányzik belőled. Nem akarod látni, de attól még ott van: benned! Fordulj meg és nézz szembe vele! Ne félj, én közben vigyázok rád!</p>                        
                            <br /><br />
                            <p><a class="btn btn-primary btn-lg" href="/kincseslada/#peterorban" role="button">További részek</a></p>
                        </div><!-- /.caption -->

                    </div><!-- /thumbnail -->
                </div><!-- /col-md-6 col-md-offset-3 -->
                <!-- /Peter Orban - A hős utazása -->
                <div style="clear:both;"></div>

                </div><!-- /col-lg-12 -->
            </div><!-- /row -->
        </div><!-- /container -->
        
    </section>
    <!--/VIP-->
    
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