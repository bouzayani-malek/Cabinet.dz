<?php 

    if(isset($_POST['register']))
    {
                $Name=$_POST["phuname"];
				$Prenom=$_POST["prenom"];
	            $Password=$_POST["phpass"];
				$Passwor=$_POST["phpas"];
	            $Email=$_POST["phemail"];
	            $Mobile=$_POST["phmobile"];
	            $Address=$_POST["phaddress"];
                $Region= $_POST["region"];  
	  
	  
	  
       //$Email = $_POST['email'];
       //$Subject = $_POST['sujet'];
       //$Msg = $_POST['message'];
	  
      if( $Password != $Passwor)
       {
           header('location:signup.php?error');
       }
       else
       {
           
               $conn=mysqli_connect("localhost","root","","cabinet");      
               $password = md5($Password);
	           $sql="insert into users(user,passe) values('".$Name."', '".$password."')";
               $sql1="insert into infousers(prenom,nom,adresse,telephone,region,id_users) values('".$Prenom."','".$Name."', '".$Address."','".$Mobile."', '".$Region."', LAST_INSERT_ID())";
	           $result= mysqli_query($conn,$sql)or die(mysqli_error($conn));
               $result1= mysqli_query($conn,$sql1)or die(mysqli_error($conn));
			   ob_start();
			   $_SESSION["uname"]= $Name;
               $_SESSION["upass"]= $password;
			   echo $_SESSION["uname"];
			   echo $_SESSION["upass"];
			   $query = "SELECT * FROM users WHERE user ='$Name' AND passe ='$password'";
   		       $result2 = mysqli_query($conn,$query);
   		       $row= mysqli_fetch_array($result2);
		        if($row["user"]==$Name && $row["passe"]==$password)
                  {
						$_SESSION["id"]=$row["id_users"];
				  }
			   header("Location:profil.php");
			   ob_end_flush();
       }
    }
    else
    {
        header("location:signup.php");
    }
?>