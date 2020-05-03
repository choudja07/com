<?php
@$nom=$_POST["noms"];
@$prenom=$_POST["prenoms"];
@$email=$_POST["email"];
$erreur="";
$erreurs="";
$erreurse="";
if (isset($_POST['send'])) 
{
	if (empty($nom)) 
            {
		        $erreur="Entrez le nom!";
	        }

        if (empty($prenom))
            {
	            $erreurs="Entrez le prenom!";
            }
        if (empty($email))
           {
                $erreurse="Entrez l'email!";
            }
            else
            {
            	header("location:commende.php");
            }
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>insciption</title>

</head>
<style type="text/css">
	body
	{
		background-image: url("com.png");
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}
	fieldset
	{
		width: 260px;
		height: 435px;
		padding: 41px;
		margin-left: 295px;
		color: white;
		background-color: black;
		border: black;
		opacity: 0.8;
		border-radius: 15px;
	}
	

	legend
	{
        padding-left: 90px;
        height: 50px;
    }
    .im
    {
    	 border-radius:39px; 
    }
	h1
	{
		text-align: center;
		font-family: Impact, "Arial Black", Arial, Verdana, sans-serif;

	}
	.in
	{
		background-color: black;
		color: white;
		border-top: black;
		border-left: black;
		border-right:black;
		width: 263px;

	}

	.su
	{
		background-color: red;
		color: white;
		width: 189px;
		margin-left: 37px;
		border-radius: 19px;
		border: red;
		height: 22px;

	}
	
.se
    {
        float: right;
        background-color: blue;
        color: white;
        width: 95px;
        border-radius: 4px;
        height: 22px;
        border: blue;
    }
    .or
    {
        height: 24px;
    }
    p
    {
        text-align: center;
    }
    p a
    {
        color: lawngreen;
    }
    .diva
    {
    	color: white;
    	background-color: orangered;
    }
</style>
<body>

	<fieldset>
        <legend><img src="is.png" class="im" width="85" height="80"/></legend>

    
    <form action="" method="POST">
   
   <H1><em>Inscription</em> </H1>
        
        Nom:<br><input type="texe" name="noms" placeholder="Entrez nom" value="<?php echo $nom ?>" class="in">
        <div class="diva" ><?php echo $erreur ?></div> <br><br>
        Prenom:<br><input type="text" name="prenoms" placeholder="Entrez Prenom" value="<?php echo $prenom ?>" class="in">
        <div class="diva" ><?php  echo $erreurs ?> </div><br><br>
        Email:<br><input type="email" name="email" placeholder="Entrer l'email" value="<?php echo $email ?>" class="in">
       <div class="diva" > <?php echo $erreurse ?></div> 
        
    <br>
 
         <div><input type="submit" name="send" value="Envoie" class="se"></div>
       </form><br>

        <p>Avez-vous un probleme?<br>
        <a href="">signalez nous.</a></p>
   
   </fieldset>

</body>
</html>