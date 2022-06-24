<?php 
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cabinet';

//Connect and select the database
$db =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
//echo $_GET['id'];
//selection du base de donner 
  $requete ="SELECT * FROM `medecin` WHERE id_medecin=$_GET[id]";
  $resultat=mysqli_query($db,$requete);							
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Détailsmedecin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
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
	<!-- end header -->
	
	<section id="inner-headline">
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle" style="text-align : center">Médecins</h2>
			</div>
		</div>
	</div>
	</section>
	
	
	<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
			
			
			
			<?php while ($ligne=mysqli_fetch_array($resultat)){ ?>
				<div class="col-md-6">
					<img src="admine/works/<?php echo $ligne['image'] ?>" alt="doctor image"  style="width: 450px; height: 450px;">
				</div>
				
				
				<div class="col-md-6">
					<div class="about-text">
						<h1 style="color: blue;">A propos du médecin :</h1>
						<h4><?php echo $ligne['prenom']." ".$ligne['nom'] ?></h4>
						<p><?php echo $ligne['adresse'] ?></p>
						<p><?php echo $ligne['email'] ?></p> 
						<p><?php echo"+213".$ligne['telephone']?></p>
						
					</div>
				</div>
				
				<?php } ?>
				
				
				
			</div>
		</div>
	</section>
	</section>
</body>
</html>