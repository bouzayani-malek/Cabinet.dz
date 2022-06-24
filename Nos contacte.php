

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" /> 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />


</head>
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
				<h2 class="pageTitle" style="text-align : center">Contactez-Nous </h2>
			</div>

		</div>
	</div>
	</section>
	<style type="text/css">
	.content{
 background: url(images/hh.png) no-repeat center center fixed;
 	width: 100%; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 

}
</style>

	
	<section id="content">
		<div class="container content">		
        
       <div class="row">
       	<br>
       	     <h2 style=" text-align: center; color : #1d6775; font-weight: bold;  "> Laissez nous un message, nous vous répondrons dès que possible. </h2>
       	     <h3 style="text-align: center;color:red;">Nous somme à votre disposition ! </h3>
	   
	      	<form class="col-md-4 col-sm-offset-4 text-center" action="process.php" method="post" style="margin: 2%;background-color:#0b7285;border: 1px #e3e8ef;border-radius: 5%; text-align: center;margin-left: 15%; opacity: 0.9; margin-right: 30%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;width:70%;">
				<?php $msg="";
				if(isset($_GET['error'])){
					$msg="veuillez remplir les champs ";
					echo '<p style="font-weight: bold;color: red;">'.$msg.'</p>';
				}
				if(isset($_GET['success'])){
					$msg="Votre message a été envoyer ";
					echo $msg;
				}
				
				?>
		      <div class="form-group center" >
				<label for="uname" style="font-weight: bold;font-size:17px;color: #000000;">Votre email:</label>
				<input type="text" class="form-control" placeholder="Votre email" id="email" name="email" style="width:50%;margin-left: 24%;">
			  </div>
			  <div class="form-group center" >
				<label for="uname" style="font-weight: bold;font-size:17px;color: #000000;">Email medecin:</label>
				<input type="text" value="<?php echo "aaaaaaaa@gmail.com" ?>" class="form-control" placeholder="Email medecin" id="email1" name="email1" style="width:50%;margin-left: 24%;">
			  </div>
			  <div class="form-group center" >
				<label for="uname" style="font-weight: bold;font-size:17px;color: #000000;">Sujet:</label>
				<input type="text"  placeholder="Votre sujet"class="form-control" id="email" name="sujet" style="width:50%;margin-left: 24%;">
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;font-size:17px;color: #000000;">Message:</label><br/>
				<textarea placeholder="votre message"  id="pwd" name="message"class="form-control" style="width:50%;margin-left: 24%"></textarea>
				
			  </div>
			  <br>
			
			  
			  
			  <button name="send" class="btn btn-default" style="font-weight: bold;color: white;">Envoyer</button>
			  
			 
			 
			</form>
			
			
        </div>
        <!-- End Info Blcoks -->
                      
       
 
 	
    </div>
    </section>
	


</body>
</html>