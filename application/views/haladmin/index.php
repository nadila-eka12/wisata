<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Objek</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/styleutama.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url(); ?>assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <!-- <a class="navbar-brand" href="index.html"></a>
            </div> -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li>
                        <a href="<?php echo base_url() ?>index.php/admin">Kelola Wisata</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url() ?>index.php/admin">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/data_lokasi">Destinasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/data_info">Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/c_kontak_forum">Komentar</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url() ?>index.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/img/.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/img/.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/img/.jpg" alt="">
                            </div>
                        </div> -->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome</small>
                    </h2>
                    <h1 class="brand-name">Admin</h1>
                    <hr class="tagline-divider">
                    <!-- <h2>
                        <small>
                            <strong>Jawa Timur</strong>
                        </small>
                    </h2> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Tentang
                        <strong>Malang</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" style="width:200px;" src="<?php echo base_url(); ?>assets/img/tugu.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Malang, adalah salah satu kabupaten dan kota di Jawa Timur yang terletak di dataran tinggi, berjarak 90 Km dari Kota Surabaya. Karena letaknya yang tinggi, kota ini memiliki udara yang sejuk dan nyaman untuk dikunjungi.</p>
                    <p>Malang merupakan kota terbesar kedua di Jawa Timur setelah Surabaya, dan dikenal dengan julukan kota pelajar, atau banyak juga yang menjuluki sebagai Kota Bunga.</p>
                </div>
            </div>
        </div>
        <!-- /.container -->


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; 2021 </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

</body>

</html>