<?php 
    if(isset($_POST['send']))
    {
      
       $Email = $_POST['email'];
       $Subject = $_POST['sujet'];
       $Msg = $_POST['message'];
	   $to =$_POST['email1'];
       if( empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:Nos contacte.php?error');
       }
       else
       {
          
           if( mail($to,$Subject,$Msg,$Email))
           {
               header("location:Nos contacte.php?success");
           }
       }
    }
    else
    {
        header("location:Nos contacte.php");
    }
?>
