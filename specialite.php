<?php 

//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cabinet';

//Connect and select the database
$con =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
//select with table specialite 
$requete="SELECT * FROM specialite ";
$result = mysqli_query($con,$requete);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Médecin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet">
 


</head>
<body>
<div id="wrapper">
	 
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
				<h2 class="pageTitle" style="text-align: center;"> Médecins </h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
	
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3 style="text-align:center; color : red ;">Spécialités</h3>
                                 
									</div>  
							</div>
						</div> 
						
	</div>
	</section>	
			   <!--Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
    	 	<div class="container">

			<div class="editContent">
	            <ul class="filter">

	                <li class="active"><a href="specialite.php">Toute</a></li>
					<!--les noms des spécialités -->
					<?php while($row = mysqli_fetch_array($result)){
						$nomspecialite=$row['nom_spe'];
						?>
				
	                <li><a href="doctorspe.php?id=<?php echo $row['id_spe']; ?>" data-filter=".<?php echo $nomspecialite; ?>"><?php echo $nomspecialite; ?></a></li>
					
					<?php }?>
	               
	            </ul>
			</div>
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">
				
				<?php
   //selection du base de donner 
           $reque ="SELECT * FROM `medecin`";
     $resultatt=mysqli_query($con,$reque);	
  while($roww = mysqli_fetch_array($resultatt)){
				?>
				
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="works/<?php echo $roww['image']; ?>"  class="img-responsive" alt="1st gallery Thumb">
                                
                                
                            </div>
                            <div class="gallery-details">
							<div class="editContent">
                            	</div>
                            	<div class="editContent">
	                                <h5><?php echo $roww['prenom']." ". $roww['nom']; ?></h5>
                            	</div>
                            	<div class="editContent">
	                                <p><?php echo $roww['adresse']; ?></p>
                            	</div>
								<div class="editContent">
	                                <h6 style="color : blue; "><a href="doctor.php?id=<?php echo $roww['id_medecin']; ?>">Détails</a></h6>
                            	</div>
                            </div>
                        </div>
                    </div>
  <?php }?>
			
                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->  
	</div>

</div>



 
</body>
</html>