<?php
session_start();
                if (isset($_POST["entrer"]))
                {   
                    $_SESSION["email"]= $_POST["uname"];
                    $_SESSION["upass"]= $_POST["upass"];
                    $username = $_POST["uname"];
                    $password = $_POST["upass"];
					$Password=md5($password);
					
                    // Connect to the database
                        $con=mysqli_connect("localhost","root","");
                       
                        // Select the database to use
                        mysqli_select_db($con,'cabinet');

                        $result = mysqli_query($con,"SELECT * FROM infousers where email='".$username."' and passe='".$Password."';") ;

                        $row = mysqli_fetch_array($result);

                        if($row["email"]==$username && $row["passe"]==$Password)
                        {
                          $_SESSION["uname"]=$row["nom"]; 
						$_SESSION["patient"]=$row["id_info"];
                        header("Location:patient/profil.php?suc");
						//ob_end_flush();
						
                        }else{
						 header("Location:login.php?ereur");
					
						}

                        
                }
            ?>