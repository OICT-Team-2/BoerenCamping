<?php
  include("header.php")
?>


  <img id="bghome" src="images/background_homescreen.png" alt="Background Image" />
  
  <header>
    <h1 class="headerText">Klantgegevens Formulier</h1>
  </header>
  <main>
    <form action="process-form.php" method="post">
      <fieldset>
        <legend>Persoonlijke Informatie</legend>

        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" required>

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam" required>

        <label for="plaats">Plaats:</label>
        <input type="text" id="plaats" name="plaats" placeholder="Plaats" required>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" placeholder="Postcode" required>

        <label for="straatnaam">Straat:</label>
        <input type="text" id="straatnaam" name="straatnaam" placeholder="Straat" required>

        <label for="huisnummer">Huisnummer:</label>
        <input type="text" id="huisnummer" name="huisnummer" placeholder="Huisnummer" required>

        <label for="telefoonnummer">Telefoon:</label>
        <input type="text" id="telefoonnummer" name="telefoonnummer" placeholder="Telefoon" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
      </fieldset>

      <input type="submit" value="Verzenden">
    </form>
  </main>
  <?php
  include("footer.php")
?>