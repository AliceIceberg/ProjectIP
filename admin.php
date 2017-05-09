<?php
require_once("/includes/config.php");
require_once("/includes/posts.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>


 
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

 
    <link href="css/agency2.min.css" rel="stylesheet">
    <link href="css/cssfortable.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

   
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
       
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">Get back</a>
            </div>

   
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
               
                 
                    
                </ul>
            </div>
          
        </div>
           </nav>
 
 
    <header>
        <div class="container">
            <div class="intro-text">
  
                <div class="intro-heading">Admin</div>

            </div>
        </div>
    </header>

		<?php 
        // print_r($_COOKIE);
		if(isset($_COOKIE['isAdmin'])){
			include('includes/_index.php');
		}
		else
			include('includes/_login.php');
		?>
   
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
           
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                       
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">

                    </ul>
                </div>
            </div>
        </div>
    </footer>
   <!-- Modal -->
    <div class="modal fade" id="tourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit tour</h4>
          </div>
          <div class="modal-body" id="tourBody">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
            <!-- <button type="button" class="btn btn-primary">Сохранить изменения</button> -->
          </div>
        </div>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>

   
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

   
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script src="js/agency.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.modalBtn').click((function(e){
            e.preventDefault();
            $("#tourBody").load($(this).attr('data-url'));
            $("#tourModal").modal('show');
            
        }))
    })
    </script>

</body>

</html>
