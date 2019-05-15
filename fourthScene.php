<?php 
    session_start();
    $correo = $_SESSION['correo'];
     if (isset($_GET['score']))
        $score = $_GET['score'];

     else
        $score = 0;
     
     if (isset($_GET['Message']))
        $Message = $_GET['Message'];
     else
        $Message = '';
?>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>URKURUA 2.0</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mathQuiz.css">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Juego de Sumas</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
         
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">URKURUA 2.0
                    <small>Divertirse y Aprender</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            
            <output id="result"></output>
   
 
    <script src="mathQuizFourthScene.js"></script>
   
   
  
    

            
            
            <div class="col-md-9">
                 <img class="landscape" src="bomb.images/bomb4.png">
            </div>

            <div class="col-md-3" id="size">
                <div class="row">
                   <div class="col-md-10">
                  Score : <?php echo $score; ?>
                        Username : <?php echo $correo; ?> 
                    </div>
                    <div class="col-md-10">
                       
                    <span id="countdown" class="timer"></span>
                         </div>
                </div>
              
                
               
            </div>

        </div>
        <!-- /.row -->

     

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Urkurua 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
     <script>
        var score = <?php echo $score; ?>;
       var correo ='<?php echo $correo; ?>';


        </script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
