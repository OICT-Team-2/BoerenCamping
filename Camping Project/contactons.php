<?php include("header.php"); ?>
<header>
      <h1 class="headtext">Contact Ons</h1>
    </header>
    
      <div class="TelefoonContact">
        <h3></h3>
      </div>
      <div class="ContactEmail">
        <h3 style="display: inline;">Email:</h3><h4 style="display: inline; margin-left: 5px;">degroeneweide@outlook.com</h4>
      </div>
      <div class="ContactTelef">
        <h3 style="display: inline;">Telefoon:</h3><h4 style="display: inline; margin-left: 5px;">06-XXXXXX</h4>
      </div>
      <main>
        <div class="main1">
          <form
            id="form"
            action="process-form.php"
            method="post"
            onsubmit="return validateForm()"
          >
            <fieldset class="fieldset2">
              <legend class="vraagstelnaarons">Heb je een vraag? Stel naar ons!</legend>
            <label for="voornaam">Voornaam:</label>
            <div id="voornaamError" class="validation-error"></div>

            <input
              type="text"
              id="voornaam"
              name="voornaam"
              placeholder="Voornaam"
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
      <div class="textarea">
        <label for="message">Bericht:</label>
        <div id="messageError" class="validation-error"></div>
        <textarea id="message" name="message" placeholder="Schrijf hier je bericht" required></textarea>
      </div>
      </textarea>
          </fieldset>
        <input type="submit" value="Verzenden" />      
      </div>
      <div class="ContactAdr">
     <h4 style="display: inline; margin-left: 5px;">Heidelberglaan 15</h4>
      </div>
      <div class="ContactAdr">
        <h4 style="display: inline; margin-left: 5px;">3584 CS Utrecht</h4>
      </div>
      <div class="google-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.734882523815!2d5.170879289418134!3d52.0845558960625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6696d4ee93e2b%3A0xe6a4d0a5a6afa68e!2sHogeschool%20Utrecht%20%7C%20Heidelberglaan%2015!5e0!3m2!1spt-BR!2snl!4v1702467488877!5m2!1spt-BR!2snl"
          width="600"
          height="442"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
  </div>
  </body>
</body>
<?php include("footer.php"); ?>
