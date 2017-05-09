<?php
include('/includes/config.php');
$GLOBAL = [
    'type' => '',
    'message' => '',
    'append' => '',
];
if(isset($_POST['submit'])){
    $order = (object) $_POST;
    // $date_from = new Date('')
    $order->date_from = (new DateTime($order->date_from))->format('Y-m-d');
    $order->date_to = (new DateTime($order->date_to))->format('Y-m-d');
    // if($order->lastname == NULL)
    //     die('MOTHERFUCCKAZZ');
    $query = mysql_query("INSERT INTO orders (tour_id,firstname,surname,lastname,date_from,date_to) VALUES 
        ('".$order->id."','".$order->firstname."','".$order->surname."','".$order->lastname."','".$order->date_from."','".$order->date_to."')
        ");
    if(!$query){
        die(mysql_error());
        $GLOBAL['type'] = 'danger';
        $GLOBAL['message'] = 'Cannot create new order';
        $GLOBAL['append'] = true;
    }
    else{
        $GLOBAL['type'] = 'success';
        $GLOBAL['message'] = 'New order added successful';
        $GLOBAL['append'] = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ordering</title>


   
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    
    <link href="css/agency2.min.css" rel="stylesheet">
    <link href="css/cssfortable.css" rel="stylesheet">
    <link href="js/bootstrao-datepicker.min.css" rel="stylesheet">

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
                  
            
                            
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
          
        </div>
           </nav>
 
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
  
                <div class="intro-heading">E-booking</div>

            </div>
        </div>
    </header>
    <?php if($GLOBAL['append']):?>
        <div class="alert alert-<?=$GLOBAL['type']?> fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <?= $GLOBAL['message']?>
    </div>
        <?php endif;?>
    <!-- Services Section -->
    <div class="col-xs-5" style="float:none; margin:auto">
    <form action="/booking.php" method="POST">
    <p>Insert your personal data to select  (Your tour will be hidden, we will link you soon after registration)the tour :</p>
        <input type="text" name="surname" class="form-control" placeholder="Insert surname" />
        <br />
        <input type="text" name="firstname" class="form-control" placeholder="Insert firstname" />
        <br />
        <input type="text" name="lastname" class="form-control" placeholder="Insert lastname" />
        <br />
        <input type="email" name="email" class="form-control" placeholder="Insert email" />
        <br />
        <input type="hidden" name="id" />
        <br />
        <input type="date" data-format="DD-MM-YYYY" id="date1" name="date_from" class="form-control datepick" />
        <br />
        <input type="date" name="date_to" class="form-control datepick" />
        <br />
        <input type="submit"  name="submit" value="Submit" class="form-control btn btn-success" />
    </form>
    </div>
<!--     <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">E-Service</h2>
                    <h3 class="section-subheading text-muted">Fill the form to get booked</h3>
                </div>
            </div>
            <table></table>
             <div class="row text-center">

  <table style="width: 100%;  class="listing" cellpadding="0" cellspacing="0" >
          <tr>
            <th class="first" width="177">Header Here</th>
            <th>C</th>
            <th>Delete</th>
            <th>Header</th>
            <th>Header</th>
            <th>Head</th>
            <th>Header</th>
            <th class="last">Head</th>
          </tr>
          <tr>
            <td class="first style1">PHP code right here</td>
            <td><img src="img/add-icon.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/edit-icon.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/login-icon.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
          </tr>
          <tr class="bg">
            <td class="first style2"> PHP code right here</td>
            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
          </tr>
          <tr>
            <td class="first style3"> PHP code right here</td>
            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
          </tr>
          <tr class="bg">
            <td class="first style1"> PHP code right here</td>
            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
          </tr>
          <tr>
            <td class="first style2"> PHP code right here</td>
            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
          </tr>
          <tr class="bg">
            <td class="first style3"> PHP code right here </td>
            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
          </tr>
          <tr>
            <td class="first style4"> PHP code right here </td>
            <td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
            <td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
            <td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
            <td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
            <td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
          </tr>
        </table>
     
            </div>
        </div>
    </section>
 -->
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="howitworks">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Anvarbey's team.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Sabina</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.png" class="img-responsive img-circle" alt="">
                        <h4>Anvarbey</h4>
                        <p class="text-muted">First Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Turabek</h4>
                        <p class="text-muted">Second Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Instructions right here</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/bakufiers.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/tour.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/uzbek.png" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Contact us if you have any question!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/bootstrao-datepicker.min.css" rel="stylesheet"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
<script>
// $(document).ready(function(){
//     $('#date1').datetimepicker({
//   locale: 'ru',
//   format: 'DD-MM-YYYY'
// });
// })


</script>
</body>

</html>
