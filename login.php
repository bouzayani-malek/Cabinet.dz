
<?php
    session_start();
?>
<!DOCTYPE html>
<html class="no-js"> 
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
	<link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
	<title>Identification</title>
	<link rel="stylesheet" type="text/css" href="csss/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="csss/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="csss/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" href="imge/Graphicloads-Medical-Health-Medicine-box-2.ico">
	
	
	<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <style type="text/css">
    html { 
  background: url(images/hh.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
  .error{
	width:92%;
	margin: 0px auto ;
	padding: 10px;
	border: 1px solid #a94442;
	color: #f2dede;
	border-radius: 5px; 
	text-align: left;

}
    </style>


<body>
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    
                    <p class="navbar-brand" ><img src="img/logoo.png" alt="logo"/></p>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Accueil</a></li> 	
						 
						 <li ><a href="rendezvous.php">Rendez-vous</a></li> 
						 <li ><a href="services.php">Services</a></li> 
						 <li ><a href="login.php">Connexion</a></li> 
						 <li ><a href="Nos contacte.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle" style="text-align : center">Connexion</h2>
			</div>
		</div>
	</div>
	</section>
	<section class="cus">
		
		
		
		
		<div class="login"> 
    

			<form class="col-md-4 col-sm-offset-4 text-center" action="mm.php" method="post" style="margin: 8%;background-color:#0b7285;border: 1px #e3e8ef;border-radius: 5%; text-align: center;margin-left: 35%; opacity: 0.9; margin-right: 30%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
					<?php $msg="";
				if(isset($_GET['ereur'])){
					$msg="votre email ou mot passe incorrect";
					echo '<p style="font-weight: bold;color: red;">'.$msg.'</p>';
				}
				
				?>
                       
			<div class="form-group center" >
				<label for="uname" style="font-weight: bold;color: #000000;">Adresse email:</label>
				<input type="text" class="form-control" id="email" name="uname" style="width:50%;margin-left: 24%;" placeholder="Votre email" required>
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Mot de passe:</label>
				<input type="password" class="form-control" id="pwd" name="upass" style="width:50%;margin-left: 24%" placeholder="****"required>
			  </div>
			  
			  
			  
			  <button type="submit" name="entrer" class="btn btn-default" style="font-weight: bold;color: white;">Connexion</button>
			  <br>
			  <br>
			  
			  
			   <a href="signup.php" style="color:black; font-size: 17px;">Créer un compte</a>
			  <br>
			  <a href="motpasse.php" style="color: red; font-size: 17px;">Mot de passe oublié!</a>
			  <br>
			 
			</form>
            
			
			
            
		</div>
		</section>

</body>
</html>