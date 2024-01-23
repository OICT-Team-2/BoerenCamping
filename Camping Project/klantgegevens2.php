<?php include("header.php"); ?>

<header>
  <h1 class="headerText">Klantgegevens Formulier</h1>
</header>

<main>
  <form id='form' action="process-form.php" method="post" onsubmit="return validateForm()">
    <fieldset>
      <legend>Persoonlijke Informatie</legend>

      <label for="voornaam1">Voornaam:</label>
      <div id="voornaamError" class="validation-error"></div>
      <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" >

      <label for="achternaam">Achternaam:</label>
      <div id="achternaamError" class="validation-error"></div>
      <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam"  >

      <label for="plaats">Plaats:</label>
      <div id="plaatsError" class="validation-error"></div>
      <input type="text" id="plaats" name="plaats" placeholder="Plaats" >

      <label for="postcode">Postcode:</label>
      <div id="postcodeError" class="validation-error"></div>
      <input type="text" id="postcode" name="postcode" placeholder="Postcode" >

      <label for="straatnaam">Straat:</label>
      <div id="straatnaamError" class="validation-error"></div>
      <input type="text" id="straatnaam" name="straatnaam" placeholder="Straat" >

      <label for="huisnummer">Huisnummer:</label>
      <div id="huisnummerError" class="validation-error"></div>
      <input type="text" id="huisnummer" name="huisnummer" placeholder="Huisnummer" >

      <label for="telefoonnummer">Telefoon:</label>
      <div id="telefoonnummerError" class="validation-error"></div>
      <input type="text" id="telefoonnummer" name="telefoonnummer" placeholder="Telefoon" >

      <label for="email">Email:</label>
      <div id="emailError" class="validation-error"></div>
      <input type="text" id="email" name="email" placeholder="Email" >
    </fieldset>

    <input type="submit" value="Verzenden">
  </form>
</main>

<?php include("footer.php"); ?>


