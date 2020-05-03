

<!DOCTYPE html>
<html>
<head>
	<title>commende</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="entre.css">
</head>

<style type="text/css">
	body
	{
		background-image: url(im2.jpg);
	font-size: 19px;
	background-repeat: no-repeat;
	background-attachment: fixed;
	
	}
	.article td a
	{
		color:white;
		text-decoration: none;
	}
	.article td a:hover
	{
		color:gold;
	}
.div1
{
	background-image: url("io.jpg");
	text-align: center;
	width: 1024px;
	height: 250px;
	font-size: 57px;
    margin-left: -19px;
    padding-top: 1s30px;
	color: orangered;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
}
.ao
{
	color: white;
}
.td1
{
	color: orangered;
	font-size: 38px;
	text-align: center;
}
</style>
<body>
<div class="div1">

		<article></article>
		<article><article></article>
 </article></div>
<table class="article1">
	<tr>
		<td><a class="a1" href="entre.php"> Accueil</a></td>
		<td><div class="a2">Commende un plat</div></td>
		
	</tr>
</table>
<table class="article">
	<tr>
		<td colspan="2" class="td1"><br> Notre carte au restaurnt <em>"TARA"</em><br><br></td>
	</tr>
	<tr>
		<td>
			<a href="plats camerounais.php"><article><img src="came/macedoine1.jpg" class="cm1"></article>
			<article><div>PLATS CAMEROUNAIS</div></article></a> 
		</td>
		<td>
			<a href="plats chinois.php"><article><img src="capture3.png" class="cm1"></article>
			<article><div>PLATS CHINOIS </div></article></a>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="plats americain.php"><article><img src="americain/hot-dog.jpg" class="cm1"></article>
			<article><div>PLATS AMERICAINS</div></article></a> 
		</td>
		
	</tr>
</table>
<footer>
	<table class="ta">
		<tr><td></td>
			<td>
				<article>
				Retrouver nous sur
			   </article>
			   <article>
			   	        <a href="http://www.facebook.com"><img src="face.png" width="38px" height="38px" class="io"></a> 
			   	        <a href="http://www.twitter.com"><img src="twit.jpg" width="38px" height="38px"  class="io" ></a>
				</article>
			</td>
			<td>
				<article>connexion sous:</article>
                <article class="ao" ><?php echo $_POST['email']; ?></article>
			</td>
		</tr>
		<tr>
		    <td>Centre de restauration<br/>Route avenue bastos2085<br>YAOUNDE Cameroun</td>
		    <td> Mention legale <br/>Tel:237 6 91  47  89  99 <br/>Email:kuate@gmail.com</td>
		    <td> Coynight<br>Restaurant en ligne</td>
		</tr>
	</table>
</footer>




</body>
</html>