<?php include("header.php"); ?>
<header>
  <h1 class="headtext">Klantgegevens Formulier</h1>
</header>
<br />
<main>
  <div class="main">
    <form
      id="form"
      action="process-form.php"
      method="post"
      onsubmit="return validateForm()"
    >
      <fieldset class="fieldset1">
        <legend class="persoonlijkeinformatie">Persoonlijke Informatie</legend>

        <label for="voornaam">Voornaam:</label>
        <div id="voornaamError" class="validation-error"></div>
        <input
          type="text"
          id="voornaam"
          name="voornaam"
          placeholder="Voornaam"
          required
        />

        <label for="achternaam">Achternaam:</label>
        <div id="achternaamError" class="validation-error"></div>
        <input
          type="text"
          id="achternaam"
          name="achternaam"
          placeholder="Achternaam"
          required
        />
        <label for="telefoonnummer">Telefoon:</label>
        <div id="telefoonnummerError" class="validation-error"></div>

        <input
          type="tel"
          id="telefoonnummer"
          name="telefoonnummer"
          placeholder="Telefoon"
          pattern="(\+31|0)([ \-]?\d{1,4}){1,10}"
          maxlength="14"
          required
        />

        <label for="email">Email:</label>
        <div id="emailError" class="validation-error"></div>

        <input
          type="email"
          id="email"
          name="email"
          placeholder="Email"
          required
        />
        <label for="plaats"
          >Plaats: <span class="optional">(Optioneel)</span></label
        >
        <div id="plaatsError" class="validation-error"></div>
        <input type="text" id="plaats" name="plaats" placeholder="Plaats" />

        <label for="postcode">
          Postcode: <span class="optional">(Optioneel)</span></label
        >
        <div id="postcodeError" class="validation-error"></div>
        <input
          type="text"
          id="postcode"
          name="postcode"
          placeholder="Postcode"
        />

        <label for="straatnaam">
          Straat: <span class="optional">(Optioneel)</span></label
        >
        <div id="straatnaamError" class="validation-error"></div>
        <input
          type="text"
          id="straatnaam"
          name="straatnaam"
          placeholder="Straat"
        />

        <label for="huisnummer"
          >Huisnummer: <span class="optional">(Optioneel)</span></label
        >
        <div id="huisnummerError" class="validation-error"></div>

        <input
          type="text"
          id="huisnummer"
          name="huisnummer"
          placeholder="Huisnummer"
        />
      </fieldset>
      <input type="submit" value="Verzenden" />
    </form>
  </div>
</main>
<?php include("footer.php"); ?>


