<?php include("header.php"); ?>
<header>
  <h1 class="headtext">Contact Ons</h1>
</header>

<div class="ContactEmail">
  <h3 style="display: inline;">Email:</h3>
  <h4 style="display: inline; margin-left: 5px;">degroeneweide@outlook.com</h4>
</div>
<div class="ContactTelef">
  <h3 style="display: inline;">Telefoon:</h3>
  <h4 style="display: inline; margin-left: 5px;">06-XXXXXX</h4>
</div>
<main>
  <div class="main1">
    <form id="form" action="success.php" method="post">
      <fieldset class="fieldset2">
        <legend class="vraagstelnaarons">Heb je een vraag? Stuur ons een bericht!</legend>
        <label for="voornaam">Voornaam:</label>
        <div id="voornaamError" class="validation-error"></div>

        <input type="text" id="voornaam" name="voornaam" placeholder="Voornaam" required />
        <label for="telefoonnummer">Telefoon:</label>
        <div id="telefoonnummerError" class="validation-error"></div>

        <input type="tel" id="telefoonnummer" name="telefoonnummer" placeholder="Telefoon"
          pattern="(\+31|0)([ \-]?\d{1,4}){1,10}" maxlength="14" required />

        <label for="email">Email:</label>
        <div id="emailError" class="validation-error"></div>

        <input type="email" id="email" name="email" placeholder="Email" required />
        <div class="textarea">
          <label for="message">Bericht:</label>
          <div id="messageError" class="validation-error"></div>
          <textarea id="message" name="message" placeholder="Schrijf hier je bericht" required></textarea>
        </div>
      </fieldset>
      <input type="submit" value="Verzenden" />
  </div>
  <div class="ContactAdr">
    <h4 style="display: inline; margin-left: 5px;">Heidelberglaan 15</h4>
  </div>
  <div class="ContactAdr">
    <h4 style="display: inline; margin-left: 5px;">3584 CS Utrecht</h4>
  </div>
</main>
<?php include("footer.php"); ?>