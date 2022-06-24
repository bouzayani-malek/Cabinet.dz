<?php
ob_start();

?>
<?php
    session_start();
	$msg="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $Name=$_POST["phuname"];
				$Prenom=$_POST["prenom"];
	            $Password=$_POST["phpass"];
				$Passwor=$_POST["phpas"];
	            $Mobile=$_POST["phmobile"];
	            $Address=$_POST["phaddress"];
                $Region= $_POST["region"];  
                $mail=$_POST["email"];
                $image= $_POST["image"];  
				
                	if( $Password != $Passwor){
   	                  	$msg="Vérifier cotre mot de passe";
						// header("Location:signup.php");
                         	}else {

	            $conn=mysqli_connect("localhost","root","","cabinet");
	               
               $password = md5($Password);
	          //select id_ad
			   
			   $query1 = "SELECT * FROM admin";
   		       $resut2 = mysqli_query($conn,$query1);
			   $ro= mysqli_fetch_array($resut2);
			    
			   //insertion a la base de donnée
               $sql1="insert into infousers(nom,prenom,adresse,email,image,telephone,region,passe, id_ad) values('".$Name."','".$Prenom."', '".$Address."','".$mail."','".$image."','".$Mobile."', '".$Region."','".$password."',$ro[id_ad])";
	           //$result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
			   
			    $_SESSION["uname"]= $Name;
                $_SESSION["upass"]= $password;
				$query = "SELECT * FROM infousers WHERE nom ='$Name' AND passe ='$password'";
   		        $result2 = mysqli_query($conn,$query);
   		        $row= mysqli_fetch_array($result2);
		        if($row["nom"]==$Name && $row["passe"]==$password)
                  {
						$_SESSION["patient"]=$row["id_info"];
				  }
				  $_SESSION["malek"]=1;
			   header("Location:patient/profil.php");
                   ob_end_flush();
							}   
            }
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
	<title>Inscription</title>
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
                       	
						 <li><a href="rendezvous.php">Rendez-vous</a></li>
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
				<h2 class="pageTitle" style="text-align : center">Inscription</h2>
			</div>
		</div>
	</div>
	</section>
	<section class="cus">
		
		
		
		
		<div class="login"> 
    

            
            
            
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color:#0b7285;border: 1px #e3e8ef;border-radius: 5%; text-align: center;margin-left: 35%; opacity: 0.9; margin-right: 30%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;" action="" method="post" >
			<?php 
				
					echo '<p style="font-weight: bold;color: red;">'.$msg.'</p>';
				
				?>
			 <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Nom:</label>
				<input type="text" class="form-control" id="user" name="phuname" style="width:50%;margin-left: 24%" placeholder="Votre nom" required>
			  </div>
			  <div class="form-group center">
				<label for="prenom" style="font-weight: bold;color: #000000;">Prénom:</label>
				<input type="text" class="form-control" id="prenom" name="prenom" style="width:50%;margin-left: 24%" placeholder=" votre Prénom" required>
			  </div>
			 
			 
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Numéro de téléphone:</label>
				<input type="text" class="form-control" id="mbl"  name="phmobile"  placeholder="Numéro de téléphone"style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Adresse:</label>
				<input type="text" class="form-control" id="adrs" name="phaddress"  placeholder="Adresse"style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="region" style="font-weight: bold;color: #000000;">Wilaya:</label>
				<input type="text" class="form-control" id="region" name="region" placeholder=" votre Wilaya" style="width:50%;margin-left: 24%" required>
			  </div>
                <div class="form-group">
				<label for="mail" style="font-weight: bold;color: #000000;">email:</label>
				<input type="text" class="form-control" id="mail" name="email" placeholder=" votre email" style="width:50%;margin-left: 24%" required>
			  </div>
                <div class="form-group">
				<label style="font-weight: bold;color: #000000;">image :</label>
				<input type="file" name="image"  style="width:50%;margin-left: 24%" required>
			  </div>
                <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Mot de passe :</label>
				<input type="password" class="form-control" id="pwd" name="phpass" style="width:50%;margin-left: 24%" placeholder="Mot de passe" required>
                </div>
				 <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Confirmeation de Mot de passe :</label>
				<input type="password" class="form-control" id="pwd1" name="phpas" style="width:50%;margin-left: 24%" placeholder="Confirmation" required>
                </div>
			  
			  <button type="submit" name="register" class="btn btn-default" style="color: white;">Inscrire!</button>
                <br>
                <br>
                <a href="login.php" style="font-size: 17px; color: red;">Retourner pour s'identifier!</a>
			</form> 
			
             
		</div>
		</section>

</body>
</html>