<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>CREATION PAGE DYNAMIQUE</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header><h1>Relevé de notes<br/></h1></header>


		

	<form action="resultat.php" method="POST">
	<label> MATIERE : </label>
	<SELECT name="liste" size="1">
	<OPTION name=" " value=" "> Choisissez.
      <OPTION name="matiere" value="Histoire">Histoire.
      <OPTION name="matiere" value="francais"> Français.
      <OPTION name="matiere" value="geographie">Géographie.
      <OPTION name="matiere" value="arts plastiques"> Art-plastiques.
      <OPTION name="matiere" value="biologie"> biologie.
      <OPTION name="matiere" value="mathematique"> Mathématiques.
      <OPTION name="matiere" value="sport"> Sport.
     </SELECT>
      <br>
		<label> Nom et Prénom : </label>
      <input type="text" id="eleve" placeholder="NOM + Prénom" name="nom et prénom" size="75">
      <br>
		<label> Note : </label>
      <input type="text" placeholder="/20" size="1" name="résultat">
      <br>
		<input type="submit" value="valider">
</form>

		
			
		

		<footer>
			
		</footer>
		
	</body>
</html>