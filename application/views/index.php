<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wisata</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/styleutama2.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>assets/css/styleutama.css" rel="stylesheet"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url(); ?>assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
            function edit_lokasi_popup(lokasi_id)
   {
       //alert(lokasi_id);


      $.ajax
      ({
          url   : "<?php echo    base_url('index.php/index/editkomen/');?>",
          type  : 'POST',
          data  :{lokasi_id : lokasi_id},
          success: function(data)
          {
                $('#myModal1').html(data);
                $('#myModal1').modal({
                    backdrop: 'static',
                    keyboard: false 
                });
           }
       });
  }
    </script>
</head>

<body>

    <!-- <div class="brand">Wisata Malang Kota</div>
    <div class="address-bar"></div> -->

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
                <!-- <a class="navbar-brand" href="index.html">Wisata Malang ddd</a>
            </div> -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav">
                <li>
                        <a href="<?php echo base_url() ?>index.php">Wisata Malang Kota</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url() ?>index.php">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/destinasi">Destinasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/info_penting">Info Penting</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/login">Login</a>
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
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/img/alun.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/img/tempo.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/img/matos.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Wisata Kota Malang</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>Jawa Timur</strong>
                        </small>
                    </h2>
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

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Komentar

                    </h2>
                    <hr>
                    <p>Silahkan isikan komentar anda</p>

                    
                    <br></br>
                    <form role="form" action="<?php echo base_url() ?>index.php/index/tambah" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input name="nama" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea name="ket" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <?php
                
                $sql = "SELECT * FROM contact_form";
                $query = $this->db->query($sql);
                
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) { ?>
                    <div>
                        <p><?php echo $row->nama; ?> : </p>
                      
                        <p><?php echo $row->ket; ?> </p>

                        <br>
                       
                    </div>
                        <?php
                        $sql2 = "select * from balas where id_cf='" . $row->id_cf . "'";
                        $query2 = $this->db->query($sql2);
                        foreach ($query2->result() as $row2) { ?>
                            <div style="color:blue;margin-left:30px;">
                            <p>Balasan : </p>
                                <p>&nbsp;&nbsp;Admin : <?php echo $row2->komentarb; ?></p>
                            </div>
                            <br>
                            <hr>

                           
                <?php
                        }
                    }
                }

                ?>

            </div>

        </div>
        <!-- /.container -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; 2021</p>
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