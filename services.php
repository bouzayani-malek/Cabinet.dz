<?php 
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cabinet';

//Connect and select the database
$db =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

//selection du base de donner 
  $requete ="SELECT * FROM `service`";
  $resultat=mysqli_query($db,$requete);							
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Service</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" /> 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 


</head>
<body>

	<!-- start header -->
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
				<h2 class="pageTitle" style="text-align : center">Services</h2>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
		<div class="container content">		
        
       <div class="row">
       	<br>
       	<br>
       	<br>
       	
	   
	         <?php while ($ligne=mysqli_fetch_array($resultat)){ ?>
			 <center>
            <div class="col-sm-4 info-blocks">
			<img src="works/<?php echo $ligne['image']; ?>" width="200px" />
              <!--  <i class="icon-info-blocks fa fa-bell-o"></i>-->
                <div class="info-blocks-in">
				<center>
                    <h3><?php echo $ligne['nom_service'] ?></h3>
                    <p><?php echo $ligne['descriptions'] ?></p>
					
                </div>
            </div></center>
			<?php } ?> 
			
            
			
			
        </div>
        <!-- End Info Blcoks -->
                      
       
 
 	
    </div>
    </section>
	


</body>
</html>