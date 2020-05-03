<?php
@$nom=$_POST["nom"];
@$prenom=$_POST["pre"];
@$email=$_POST["mot"];
$erreur="";
$erreurs="";
$erreurse="";
if (isset($_POST['sende'])) 
{
    if (empty($nom)) 
            {
                $erreur="Entrez le nom";
            }

        if (empty($prenom))
            {
                $erreurs="Entrez le prenom";
            }
        if (empty($email))
           {
                $erreurse="Le numero du conte doit etre en chiffre";
            }
            else
            {
                header("location:fin.php");
            }
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>paie chinois</title>
</head>
<style type="text/css">
	body
	{
		background-image: url("chinois/capture1.png");
		background-repeat: no-repeat;
		background-size: cover;
		background-attachment: fixed;
	}
    

</style>
<body>

    <fieldset>
        <legend><img src="is.png" class="im" width="85" height="80"/></legend>

    <form action="" method="POST">

   <H1><em>paiement par conte</em> </H1>
Nom:<br><input type="texe" name="nom" placeholder="Entrez nom" class="in"  value="<?php echo $nom ?>" >
        <div class="diva" ><?php echo $erreur ?></div><br>
        Prenom:<br><input type="text" name="pre" placeholder="Entrez Prenom" class="in"  value="<?php echo $prenom ?>" >
        <div class="diva" ><?php echo $erreurs ?></div><br>
        Conte Banquaire:<br><input type="plot" name="mot" placeholder="Entrer le numero" class="in"  value="<?php echo $email ?>">
        <div class="diva" ><?php echo $erreurse ?></div>
        
       <?php include 'page de paie.php'; ?>
      <input type="submit" name="sende" value="Envoie" class="se"></div>
         <div>
       </form><br>


        <p>Avez-vous un probleme?<br>
        <a href="">signalez nous.</a></p>
     </form>

   </fieldset>
</body>
</html>