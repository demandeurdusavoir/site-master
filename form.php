<?php

<section>
    <h3>Relevé de notes</h3><br>
    <p> 3ème T :</p>

    <form action="resultat.php" method="POST">

      <label> matière : </label>
      <input type="radio" name="matiere" value="Histoire"> Histoire.
      <input type="radio" name="matiere" value="francais"> Français.
      <input type="radio" name="matiere" value="geographie">Géographie.
      <input type="radio" name="matiere" value="arts plastiques"> Art-plastiques.
      <input type="radio" name="matiere" value="biologie"> biologie.
      <input type="radio" name="matiere" value="mathematique"> Mathématiques.
      <input type="radio" name="matiere" value="sport"> Sport.
      <br>
	<label> nom et prénom : </label>
      <input type="text" id="eleve" name="nom et prénom">
      <br>
	<label> Note : </label>
      <input type="text" name="résultat">
      <br>
		<input type="submit" value="valider">

    </form>

  </section>
