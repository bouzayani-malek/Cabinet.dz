<?php 
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cabinet';

//Connect and select the database
$con =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

					
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RDV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="stylee.css">
<link rel="stylesheet" type="text/css" href="styleee.css">

</head>
<body onload="renderDate()">

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
				<h2 class="pageTitle" style="text-align : center">Rendez-vous</h2>
			</div>
		</div>
	</div>
	</section>
	<style type="text/css">
	.section-padding{
 background: url(images/hh.png) no-repeat center center fixed;
 	width: 100%; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 

}
</style>	
	<!--------------------------------------------------------------------->
	<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-6">				
				  <div id="mmain">	
				  <br>
				  <br>
				  <br>	
				  <br>			
				  <h1 style="text-align : center ; color: red">Rendez-Vous </h1>  
                  <form method="post" action="">
			      <div class="form-group center">
				  <label for="user" style="font-weight: bold;color: #000000;">Date :</label><br> 
				  <input type="text" class="form-control" id="user" name="date" style="width:50%;margin-left: 24%;margin-top:5px;" required>
			      </div> 		  
			      <button type="submit" class="btn btn-default" style="background:#7eced5;color:white;padding:7px">Chercher </button>
			      <br> <br>
				  <div class="form-group center"></div>
	           	  </form>
		           </div>
					
			
				
				<?php
				
				if($_SERVER["REQUEST_METHOD"] == "POST"){
				       
					   @$date=$_POST["date"];
					   
					   $sql="SELECT * FROM seance WHERE date='$date'";
					 
					  $query=mysqli_query($con,$sql);
					  ?>
				
			
					<div id="mmain">
				  	<h1 style="text-align : center ; color: red">les séances:</h1>
					
			         <table  width="100%">
			    <tr style="padding: 133px; margin: 15px;">
			        <th style="text-align : center">Nom de séance</th>
			        <th style="text-align : center">Heurs</th>			        
			        <th style="text-align : center">Action</th>
			    </tr>
					<?php
				         if($row=mysqli_fetch_array($query)) {
						
				           ?>
						<tr>
						    <td><?php echo $row['nom_seance'] ?></td>
						    <td><?php echo $heur_sean=$row['heur'] ?></td>
								
							<td>
							
							

							
							
							<button type="button" class="btn btn-default my-btn "onclick="bb()" style="background:#3BB1E4;color:black;padding:7px">rdv!</button>
							
							</td>
							
						</tr>
						<?php
							 }
					?>
						</table>
			
				
					
				
				
				
				
				</diV>
				
				<?php
							 }
					?>
				
				
					</div>
				
				
				

				
				<div class="col-md-6">
					<div class="about-text">
									 <div class="wrapper" >
									 	<br>
									 	<br>
									 	<br>
									 	<br>
        <div class="calendar">
            <div class="month">
                <div class="prev" onclick="moveDate('prev')" >
                    <span>&#10094;</span>
                </div>
                <div>
                    <h2 id="month"></h2>
					
                    <p id="date_str"></p>
					<br/>
					<p id="malek"></p>
                </div>
                <div class="next" onclick="moveDate('next')">
                    <span>&#10095;</span>
                </div>
            </div>
            <div class="weekdays">
                <div onclick="malek()">Dimanche</div>
                <div>Lundi</div>
                <div>Mardi</div>
                <div>Mercredi</div>
                <div>Jeudi</div>
                <div>Vendredi</div>
                <div>Samedi</div>
            </div>
            <div class="days" >

            </div>
        </div>

   
	 </div>	
					</div>
				</div>
				
			
			
			
			
			
			
			
				
				
				
			</div>
		</div>
	</section>
	</section>
	<script src="mm.js"></script>
<script src="m.js"></script>			
				<script>
							
function bb(){
	swal({
	  icon: "warning",
		 
						
						text :'Vous devez ouvrir un compte!!'
	})
	
}
</script>
	 <script >
 var dt = new Date();
        function renderDate() {
            dt.setDate(1);
			
            var day = dt.getDay();
			
            var today = new Date();
			//endDate=31
            var endDate = new Date(
                dt.getFullYear(),
                dt.getMonth() + 1,
                0
            ).getDate();
            //prevDate=30
            var prevDate = new Date(
                dt.getFullYear(),
                dt.getMonth(),
                0
            ).getDate();
            var months = [
                "Janvier",
                "Février",
                "Mars",
                "Avril",
                "Mai",
                "Juin",
                "Juillet",
                "Aoùt",
                "Septembre",
                "Octobre",
                "Novembre",
                "Décembre"
            ]
            document.getElementById("month").innerHTML = months[dt.getMonth()];
            document.getElementById("date_str").innerHTML = today.toLocaleString("en-GB");
			var cells = "";
            for (x = day; x > 0; x--) {
                cells += "<div class='prev_date' >" + (prevDate - x + 1) + "</div>";
				
            } 
                    x = parseInt( today.getMonth() +1);
			        y = parseInt( today.getFullYear());
					
            for (i = 1; i <= endDate; i++) {
				if(i < today.getDate()&& dt.getMonth() == today.getMonth()){
					cells+="<div>" + i + "</div>"
				}
                else if (i == today.getDate() && dt.getMonth() == today.getMonth()){
					//m= parseInt(i);
					if(((x>=1)&&(x<10))  )
					{
					cells += "<div class='today' onclick= malek('" + y + "-" + x + "-" + i + "') >" + i + "</div>";	
					}else{
					cells += "<div class='today' onclick= malek('" + y + "-" + x + "-" +  i + "') >" + i + "</div>";
					}
					
				}
                else{ 
				m= parseInt(i);
				if((m>=1)&&(m<10))
					{
                    cells += "<div onclick= malek('"+y+"-"+x+"-"+"0"+m+ "')>" + i + "</div>";
					}else{
					 cells += "<div onclick= malek('"+y+"-"+x+"-"+m+ "')>" + i + "</div>";	
					}
				}
            }
			
            document.getElementsByClassName("days")[0].innerHTML = cells;
			

				
			}
           function malek(par){
			   document.getElementById("user").value = par ;
			   
						 
		   }
        

	

        function moveDate(para) {
            if(para == "prev") {
                dt.setMonth(dt.getMonth() - 1);
				  
            } else if(para == 'next') {
                dt.setMonth(dt.getMonth() + 1);
				
            }
            renderDate();
        }
		
	
    </script>
	
</body>
</html>